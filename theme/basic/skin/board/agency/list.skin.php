<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>
<div id="sub_top04">
    <div class="sub_tit">
        <img src="../../images/sub/img_subtop0404tit.png" alt="Inquiry">
    </div>
</div>
<div class="bread">
    <div class="home">
        <span class="ls0">HOME</span> <span>&gt;</span> 뉴스센터 <span>&gt;</span> <span class="bold">관련기관</span>
    </div>
</div>

<ul class="sub_top_menu four">
    <li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=news">더마프로 뉴스</a></li>
    <li><a href="/news/paper_patent.php">더마프로 학술활동</a></li>
    <?php if ($config['cf_1']) { ?>
        <li><a href="<?php echo G5_DATA_URL; ?>/file/config/<?php echo $config['cf_1']; ?>" target="_blank">E-브로셔</a></li>
    <?php } ?>
    <li class="on"><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=agency">관련기관</a></li>
</ul>
<div id="container">
    <div class="con">
        <div class="tit_bg">
            <h3>관련기관</h3>
        </div>

        <!-- 게시판 목록 시작 { -->
        <div id="bo_gall" style="width:<?php echo $width; ?>">
            <form name="fboardlist"  id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
                <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
                <input type="hidden" name="stx" value="<?php echo $stx ?>">
                <input type="hidden" name="spt" value="<?php echo $spt ?>">
                <input type="hidden" name="sst" value="<?php echo $sst ?>">
                <input type="hidden" name="sod" value="<?php echo $sod ?>">
                <input type="hidden" name="page" value="<?php echo $page ?>">
                <input type="hidden" name="sw" value="">

                <?php if ($is_checkbox) { ?>
                    <div id="gall_allchk">
                        <label for="chkall" class="sound_only">현재 페이지 게시물 전체</label>
                        <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
                    </div>
                <?php } ?>

                <div class="agency">
                    <ul>
                        <?php for ($i=0; $i<count($list); $i++) {
                            $update_href = './write.php?w=u&amp;bo_table='.$bo_table.'&amp;wr_id='.$list[$i]['wr_id'].'&amp;page='.$page.$qstr;
                            ?>
                            <li>
                                <div class="img">
                                    <?php
                                    $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height']);

                                    if($thumb['src']) {
                                        $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" width="'.$board['bo_gallery_width'].'" height="'.$board['bo_gallery_height'].'">';
                                    } else {
                                        $img_content = '<span style="width:'.$board['bo_gallery_width'].'px;height:'.$board['bo_gallery_height'].'px">no image</span>';
                                    }

                                    echo $img_content;
                                    ?>
                                </div>
                                <div class="comm-desc">
                                    <p class="ti-tit">
                                        <?php if ($is_checkbox) { ?>
                                            <label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
                                            <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
                                        <?php } ?>
                                        <span class="sound_only">
                                            <?php
                                            if ($wr_id == $list[$i]['wr_id'])
                                                echo "<span class=\"bo_current\">열람중</span>";
                                            else
                                                echo $list[$i]['num'];
                                            ?>
                                        </span>
                                        <?php
                                        echo $list[$i]['subject'];
                                        if ($update_href) {
                                            echo '&nbsp;&nbsp;&nbsp;<a href="'.$update_href.'">수정</a>';
                                        }
                                        ?>
                                    </p>
                                    <?php if ($list[$i]['link'][1]) { ?>
                                    <p class="ti-desc">
                                        <a href="<?php echo $list[$i]['link_href'][1] ?>" target="_blank"><?php echo $list[$i]['link'][1]; ?></a>
                                    </p>
                                    <?php } ?>
                                </div>
                            </li>
                        <?php } ?>
                        <?php if (count($list) == 0) { echo "<li class=\"empty_list\">게시물이 없습니다.</li>"; } ?>

                    </ul>
                </div>

                <?php if ($list_href || $is_checkbox || $write_href) { ?>
                    <div class="bo_fx">
                        <?php if ($is_checkbox) { ?>
                            <ul class="btn_bo_adm">
                                <li><input type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value"></li>
                            </ul>
                        <?php } ?>

                        <?php if ($list_href || $write_href) { ?>
                            <ul class="btn_bo_user">
                                <?php if ($list_href) { ?><li><a href="<?php echo $list_href ?>" class="btn_b01">목록</a></li><?php } ?>
                                <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02">글쓰기</a></li><?php } ?>
                            </ul>
                        <?php } ?>
                    </div>
                <?php } ?>
            </form>
        </div>

            <?php if($is_checkbox) { ?>
            <noscript>
            <p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
            </noscript>
            <?php } ?>

            <!-- 페이지 -->
            <?php echo $write_pages;  ?>



            <?php if ($is_checkbox) { ?>
            <script>
            function all_checked(sw) {
                var f = document.fboardlist;

                for (var i=0; i<f.length; i++) {
                    if (f.elements[i].name == "chk_wr_id[]")
                        f.elements[i].checked = sw;
                }
            }

            function fboardlist_submit(f) {
                var chk_count = 0;

                for (var i=0; i<f.length; i++) {
                    if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
                        chk_count++;
                }

                if (!chk_count) {
                    alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
                    return false;
                }

                if(document.pressed == "선택복사") {
                    select_copy("copy");
                    return;
                }

                if(document.pressed == "선택이동") {
                    select_copy("move");
                    return;
                }

                if(document.pressed == "선택삭제") {
                    if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
                        return false;

                    f.removeAttribute("target");
                    f.action = "./board_list_update.php";
                }

                return true;
            }

            // 선택한 게시물 복사 및 이동
            function select_copy(sw) {
                var f = document.fboardlist;

                if (sw == "copy")
                    str = "복사";
                else
                    str = "이동";

                var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

                f.sw.value = sw;
                f.target = "move";
                f.action = "./move.php";
                f.submit();
            }
            </script>
            <?php } ?>
            <!-- } 게시판 목록 끝 -->
    </div>
</div>