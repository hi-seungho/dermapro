<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
?>

<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->
<ul class="main_visual">
<?php
for ($i=0; $i<count($list); $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], 1920, 630);

    if($thumb['src']) {
        ?>
        <li class="slider01" style="background-image: url('<?php echo $thumb['src']; ?>');"
            <?php if ($list[$i]['link'][1]) { ?>
            onclick="location.href='<?php echo $list[$i]['link_href'][1] ?>'"
            <?php } ?>
        >
        </li>
        <?php
    }
}
?>
</ul>
<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->