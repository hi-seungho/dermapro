<?php
$sub_memu = "900000";
include_once('./_common.php');


$sql = " select * from {$g5['category_table']} order by ca_id ";
$result = sql_query($sql);

$g5['title'] = "카테고리설정";
include_once('./admin.head.php');

$colspan = 7;
?>

<div class="local_desc01 local_desc">
    <p><strong>주의!</strong> 카테고리설정 작업 후 반드시 <strong>확인</strong>을 누르셔야 저장됩니다.</p>
</div>

<form name="fcategorylist" id="fcategorylist" method="post" action="./category_list_update.php" onsubmit="return fcategorylist_submit(this);" enctype="multipart/form-data">
<input type="hidden" name="token" value="">

<div class="btn_add01 btn_add">
    <button type="button" onclick="return add_category();">카테고리추가<span class="sound_only"> 새창</span></button>
</div>

<div id="categorylist" class="tbl_head01 tbl_wrap">
    <table>
    <caption><?php echo $g5['title']; ?> 목록</caption>
    <thead>
    <tr>
        <th scope="col">카테고리</th>
        <th scope="col">이미지</th>
        <th scope="col">순서</th>
        <th scope="col">관리</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for ($i=0; $row=sql_fetch_array($result); $i++)
    {
        $bg = 'bg'.($i%2);
        $sub_category_class = '';
        if(strlen($row['ca_code']) == 4) {
            $sub_category_class = ' sub_category_class';
            $sub_category_info = '<span class="sound_only">'.$row['ca_name'].'의 서브</span>';
            $sub_category_ico = '<span class="sub_category_ico"></span>';
        }

        $search  = array('"', "'");
        $replace = array('&#034;', '&#039;');
        $ca_name = str_replace($search, $replace, $row['ca_name']);
    ?>
    <tr class="<?php echo $bg; ?> category_list category_group_<?php echo substr($row['ca_code'], 0, 2); ?>">
        <td class="td_category<?php echo $sub_category_class; ?>">
            <input type="hidden" name="code[]" value="<?php echo substr($row['ca_code'], 0, 2) ?>">
            <label for="ca_naca_<?php echo $i; ?>" class="sound_only"><?php echo $sub_category_info; ?> 카테고리<strong class="sound_only"> 필수</strong></label>
            <input type="text" name="ca_name[]" value="<?php echo $ca_name; ?>" id="ca_name_<?php echo $i; ?>" required class="required frm_input full_input">
        </td>
        <td>
            <label for="ca_file_<?php echo $i; ?>" class="sound_only">이미지<strong class="sound_only"> 필수</strong></label>
            <input type="hidden" name="ca_source[]" value="<?php echo $row['ca_source'] ?>">
            <input type="hidden" name="ca_file[]" value="<?php echo $row['ca_file'] ?>">
            <input type="hidden" name="ca_filesize[]" value="<?php echo $row['ca_filesize'] ?>">
            <input type="hidden" name="ca_width[]" value="<?php echo $row['ca_width'] ?>">
            <input type="hidden" name="ca_height[]" value="<?php echo $row['ca_height'] ?>">
            <input type="hidden" name="ca_type[]" value="<?php echo $row['ca_type'] ?>">
            <input type="file" name="ca_files[]" id="ca_files_<?php echo $i; ?>" class="frm_input full_input">
            <?php if($row['ca_file']) { ?>
                <input type="checkbox" id="ca_file_del<?php echo $i ?>" name="ca_file_del[<?php echo $i;  ?>]" value="1"> <label for="ca_file_del<?php echo $i ?>"><?php echo $row['ca_source'].'('.$row['ca_filesize'].')';  ?> 파일 삭제</label>
            <?php } ?>
        </td>
        <td class="td_num">
            <label for="ca_order_<?php echo $i; ?>" class="sound_only">순서</label>
            <input type="text" name="ca_order[]" value="<?php echo $row['ca_order'] ?>" id="ca_order_<?php echo $i; ?>" class="frm_input" size="5">
        </td>
        <td class="td_mng">
            <?php if(strlen($row['ca_code']) == 2) { ?>
            <button type="button" class="btn_add_subcategory">추가</button>
            <?php } ?>
            <button type="button" class="btn_del_category">삭제</button>
        </td>
    </tr>
    <?php
    }

    if ($i==0)
        echo '<tr id="empty_category_list"><td colspan="'.$colspan.'" class="empty_table">자료가 없습니다.</td></tr>';
    ?>
    </tbody>
    </table>
</div>

<div class="btn_confirm01 btn_confirm">
    <input type="submit" name="act_button" value="확인" class="btn_submit">
</div>

</form>

<script>
$(function() {
    $(document).on("click", ".btn_add_subcategory", function() {
        var code = $(this).closest("tr").find("input[name='code[]']").val().substr(0, 2);
        add_subcategory(code);
    });

    $(document).on("click", ".btn_del_category", function() {
        if(!confirm("카테고리를 삭제하시겠습니까?"))
            return false;

        var $tr = $(this).closest("tr");
        if($tr.find("td.sub_category_class").size() > 0) {
            $tr.remove();
        } else {
            var code = $(this).closest("tr").find("input[name='code[]']").val().substr(0, 2);
            $("tr.category_group_"+code).remove();
        }

        if($("#categorylist tr.category_list").size() < 1) {
            var list = "<tr id=\"empty_category_list\"><td colspan=\"<?php echo $colspan; ?>\" class=\"empty_table\">자료가 없습니다.</td></tr>\n";
            $("#categorylist table tbody").append(list);
        } else {
            $("#categorylist tr.category_list").each(function(index) {
                $(this).removeClass("bg0 bg1")
                    .addClass("bg"+(index % 2));
            });
        }
    });
});

function add_category()
{
    var max_code = base_convert(0, 10, 36);
    $("#categorylist tr.category_list").each(function() {
        var ca_code = $(this).find("input[name='code[]']").val().substr(0, 2);
        if(max_code < ca_code)
            max_code = ca_code;
    });

    var url = "./category_form.php?code="+max_code+"&new=new";
    window.open(url, "add_category", "left=100,top=100,width=550,height=650,scrollbars=yes,resizable=yes");
    return false;
}

function add_subcategory(code)
{
    var url = "./category_form.php?code="+code;
    window.open(url, "add_category", "left=100,top=100,width=550,height=650,scrollbars=yes,resizable=yes");
    return false;
}

function base_convert(number, frombase, tobase) {
  //  discuss at: http://phpjs.org/functions/base_convert/
  // original by: Philippe Baumann
  // improved by: Rafał Kukawski (http://blog.kukawski.pl)
  //   example 1: base_convert('A37334', 16, 2);
  //   returns 1: '101000110111001100110100'

  return parseInt(number + '', frombase | 0)
    .toString(tobase | 0);
}

function fcategorylist_submit(f)
{
    return true;
}
</script>

<?php
include_once ('./admin.tail.php');
?>
