<?php
$sub_menu = "900000";
include_once('./_common.php');

check_demo();

check_admin_token();

// 이전 메뉴정보 삭제
$sql = " delete from {$g5['category_table']} ";
sql_query($sql);

function get_file_info ($files, $i, $del = 0, $orgs = array()) {
    global $config;

    $chars_array = array_merge(range(0,9), range('a','z'), range('A','Z'));

// 가변 파일 업로드
    $bo_table = 'category';
    $file_upload_msg = '';
    $upload = array();

// 디렉토리가 없다면 생성합니다. (퍼미션도 변경하구요.)
    @mkdir(G5_DATA_PATH.'/file/'.$bo_table, G5_DIR_PERMISSION);
    @chmod(G5_DATA_PATH.'/file/'.$bo_table, G5_DIR_PERMISSION);

    $upload['ca_file']     = '';
    $upload['ca_source']   = '';
    $upload['ca_filesize'] = 0;
    $upload['image']    = array();
    $upload['image'][0] = '';
    $upload['image'][1] = '';
    $upload['image'][2] = '';
    $upload['error']    = '';

    // 삭제에 체크가 되어있다면 파일을 삭제합니다.
    if ($del) {
        $upload['del_check'] = true;

        @unlink(G5_DATA_PATH.'/file/'.$bo_table.'/'.$orgs['ca_file']);
        // 썸네일삭제
        if(preg_match("/\.({$config['cf_image_extension']})$/i", $orgs['ca_file'])) {
            delete_board_thumbnail($bo_table, $orgs['ca_file']);
        }

        return $upload;
    }
    else
        $upload['del_check'] = false;

    $tmp_file  = $files['tmp_name'][$i];
    $filesize  = $files['size'][$i];
    $filename  = $files['name'][$i];
    $filename  = get_safe_filename($filename);

    // 서버에 설정된 값보다 큰파일을 업로드 한다면
    if ($filename) {
        if ($files['error'][$i] == 1 || $files['error'][$i] != 0) {
            $upload['error'] = 1;

            return $upload;
        }
    }

    if (is_uploaded_file($tmp_file)) {
        //=================================================================\
        // 090714
        // 이미지나 플래시 파일에 악성코드를 심어 업로드 하는 경우를 방지
        // 에러메세지는 출력하지 않는다.
        //-----------------------------------------------------------------
        $timg = @getimagesize($tmp_file);
        // image type
        if ( preg_match("/\.({$config['cf_image_extension']})$/i", $filename) ||
            preg_match("/\.({$config['cf_flash_extension']})$/i", $filename) ) {
            if ($timg['2'] < 1 || $timg['2'] > 4) {
                $upload['error'] = 1;

                return $upload;
            }
        }
        //=================================================================

        $upload['image'] = $timg;

        if (!empty($orgs['ca_file'])) {
            @unlink(G5_DATA_PATH.'/file/'.$bo_table.'/'.$orgs['ca_file']);
            // 이미지파일이면 썸네일삭제
            if(preg_match("/\.({$config['cf_image_extension']})$/i", $orgs['ca_file'])) {
                delete_board_thumbnail($bo_table, $orgs['ca_file']);
            }
        }

        // 프로그램 원래 파일명
        $upload['ca_source'] = $filename;
        $upload['ca_filesize'] = $filesize;

        // 아래의 문자열이 들어간 파일은 -x 를 붙여서 웹경로를 알더라도 실행을 하지 못하도록 함
        $filename = preg_replace("/\.(php|phtm|htm|cgi|pl|exe|jsp|asp|inc)/i", "$0-x", $filename);

        shuffle($chars_array);
        $shuffle = implode('', $chars_array);

        // 첨부파일 첨부시 첨부파일명에 공백이 포함되어 있으면 일부 PC에서 보이지 않거나 다운로드 되지 않는 현상이 있습니다. (길상여의 님 090925)
        $upload['ca_file'] = abs(ip2long($_SERVER['REMOTE_ADDR'])).'_'.substr($shuffle,0,8).'_'.replace_filename($filename);

        $dest_file = G5_DATA_PATH.'/file/'.$bo_table.'/'.$upload['ca_file'];

        // 업로드가 안된다면 에러메세지 출력하고 죽어버립니다.
        $error_code = move_uploaded_file($tmp_file, $dest_file) or die($files['error'][$i]);

        // 올라간 파일의 퍼미션을 변경합니다.
        chmod($dest_file, G5_FILE_PERMISSION);

        $upload['ca_width'] = $upload['image']['0'];
        $upload['ca_height'] = $upload['image']['1'];
        $upload['ca_type'] = $upload['image']['2'];

        unset($upload['image']);

        return $upload;
    }

    return $orgs;
}

$group_code = null;
$primary_code = null;
$count = count($_POST['code']);

for ($i=0; $i<$count; $i++)
{
    $_POST = array_map_deep('trim', $_POST);

    $code    = $_POST['code'][$i];
    $ca_name = $_POST['ca_name'][$i];
    $orgs = array(
        'ca_source' => $_POST['ca_source'][$i],
        'ca_file' => $_POST['ca_file'][$i],
        'ca_filesize' => $_POST['ca_filesize'][$i],
        'ca_width' => $_POST['ca_width'][$i],
        'ca_height' => $_POST['ca_height'][$i],
        'ca_type' => $_POST['ca_type'][$i],
        'error' => "",
    );
    $ca_file_del = $_POST['ca_file_del'][$i];

    if(!$code || !$ca_name)
        continue;

    $sub_code = '';
    if($group_code == $code) {
        $sql = " select MAX(SUBSTRING(ca_code,3,2)) as max_ca_code
                    from {$g5['category_table']}
                    where SUBSTRING(ca_code,1,2) = '$primary_code' ";
        $row = sql_fetch($sql);

        $sub_code = base_convert($row['max_ca_code'], 36, 10);
        $sub_code += 36;
        $sub_code = base_convert($sub_code, 10, 36);

        $ca_code = $primary_code.$sub_code;
    } else {
        $sql = " select MAX(SUBSTRING(ca_code,1,2)) as max_ca_code
                    from {$g5['category_table']}
                    where LENGTH(ca_code) = '2' ";
        $row = sql_fetch($sql);

        $ca_code = base_convert($row['max_ca_code'], 36, 10);
        $ca_code += 36;
        $ca_code = base_convert($ca_code, 10, 36);

        $group_code = $code;
        $primary_code = $ca_code;
    }


   $files = get_file_info ($_FILES['ca_files'], $i, $ca_file_del, $orgs);

    // 메뉴 등록
   $sql = " insert into {$g5['category_table']}
                set ca_code         = '$ca_code',
                    ca_name         = '$ca_name',
                    ca_order        = '{$_POST['ca_order'][$i]}',
                    ca_source        = '{$files['ca_source']}',
                    ca_file        = '{$files['ca_file']}',
                    ca_filesize        = '{$files['ca_filesize']}',
                    ca_width        = '{$files['ca_width']}',
                    ca_height        = '{$files['ca_height']}',
                    ca_type        = '{$files['ca_type']}' ";
   sql_query($sql);
}



goto_url('./category_list.php');
?>
