<?php
$sub_menu = "900000";
include_once('./_common.php');

if ($is_admin != 'super')
    alert_close('최고관리자만 접근 가능합니다.');

$g5['title'] = '카테고리 추가';
include_once(G5_PATH.'/head.sub.php');

// 코드
if($new == 'new' || !$code) {
    $code = base_convert(substr($code,0, 2), 36, 10);
    $code += 36;
    $code = base_convert($code, 10, 36);
}
?>

<div id="category_frm" class="new_win">
    <h1><?php echo $g5['title']; ?></h1>

    <form name="fcategoryform" id="fcategoryform">

        <div class="tbl_frm01 tbl_wrap">
            <table>
                <colgroup>
                    <col class="grid_2">
                    <col>
                </colgroup>
                <tbody>
                <tr>
                    <th scope="row"><label for="ca_name">카테고리<strong class="sound_only"> 필수</strong></label></th>
                    <td><input type="text" name="ca_name" id="ca_name" required class="frm_input required"></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="btn_win02 btn_win">
            <button type="button" id="add_manual" class="btn_submit">추가</button>
            <button type="button" class="btn_cancel" onclick="window.close();">창닫기</button>
        </div>

    </form>

</div>

<script>
$(function() {
    $(document).on("click", "#add_manual", function() {
        var ca_name = $.trim($("#ca_name").val());

        add_category_list(ca_name, "<?php echo $code; ?>");
    });
});

function add_category_list(name, code)
{
    var $categorylist = $("#categorylist", opener.document);
    var ms = new Date().getTime();
    var sub_category_class;
    <?php if($new == 'new') { ?>
    sub_category_class = " class=\"td_category\"";
    <?php } else { ?>
    sub_category_class = " class=\"td_category sub_category_class\"";
    <?php } ?>

    var list = "<tr class=\"category_list category_group_<?php echo $code; ?>\">";
    list += "<td"+sub_category_class+">";
    list += "<label for=\"ca_name_"+ms+"\"  class=\"sound_only\">카테고리<strong class=\"sound_only\"> 필수</strong></label>";
    list += "<input type=\"hidden\" name=\"code[]\" value=\"<?php echo $code; ?>\">";
    list += "<input type=\"text\" name=\"ca_name[]\" value=\""+name+"\" id=\"ca_name_"+ms+"\" required class=\"required frm_input full_input\">";
    list += "</td>";
    list += "<td>";
    list += "<label for=\"ca_files_"+ms+"\"  class=\"sound_only\">이미지<strong class=\"sound_only\"> 필수</strong></label>";
    list += "<input type=\"file\" name=\"ca_files[]\" id=\"ca_files_"+ms+"\" class=\"frm_input full_input\">";
    list += "</td>";
    list += "<td class=\"td_numsmall\">";
    list += "<label for=\"ca_order_"+ms+"\"  class=\"sound_only\">순서<strong class=\"sound_only\"> 필수</strong></label>";
    list += "<input type=\"text\" name=\"ca_order[]\" value=\"0\" id=\"ca_order_"+ms+"\" required class=\"required frm_input\" size=\"5\">";
    list += "</td>";
    list += "<td class=\"td_mngsmall\">";
    <?php if($new == 'new') { ?>
    list += "<button type=\"button\" class=\"btn_add_subcategory\">추가</button>";
    <?php } ?>
    list += "<button type=\"button\" class=\"btn_del_category\">삭제</button>";
    list += "</td>";
    list += "</tr>";

    var $category_last = null;

    if(code)
        $category_last = $categorylist.find("tr.category_group_"+code+":last");
    else
        $category_last = $categorylist.find("tr.category_list:last");

	if($category_last.size() > 0) {
        $category_last.after(list);
    } else {
        if($categorylist.find("#empty_category_list").size() > 0)
            $categorylist.find("#empty_category_list").remove();

        $categorylist.find("table tbody").append(list);
    }

    $categorylist.find("tr.category_list").each(function(index) {
        $(this).removeClass("bg0 bg1")
            .addClass("bg"+(index % 2));
    });

    window.close();
}
</script>

<?php
include_once(G5_PATH.'/tail.sub.php');
?>