<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

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
        <img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_subtop0404tit.png" alt="Inquiry">
    </div>
</div>
<div class="bread">
    <div class="home">
        <span class="ls0">HOME</span> <span>&gt;</span> News Center <span>&gt;</span> <span class="bold">Dermapro News</span>
    </div>
</div>

<ul class="sub_top_menu four">
    <li class="on"><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=news_eng">Dermapro News</a></li>
    <li><a href="<?php echo G5_LANG_URL; ?>/news/paper_patent.php">Dermapro Academy</a></li>
    <?php if ($config['cf_2']) { ?>
        <li><a href="<?php echo G5_DATA_URL; ?>/file/config/<?php echo $config['cf_2']; ?>" target="_blank">E-Brochure</a></li>
    <?php } ?>
    <li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=agency_eng">Related orgarnizations</a></li>
</ul>
<div id="container">
    <div class="con">
        <div class="tit_bg">
            <h3>Dermapro News</h3>
        </div>
        <div class="news">

            <!-- 게시판 목록 시작 { -->
            <div id="bo_list" style="width:<?php echo $width; ?>">

                <!-- 게시판 카테고리 시작 { -->
                <?php if ($is_category) { ?>
                <nav id="bo_cate">
                    <h2><?php echo $board['bo_subject'] ?> Category</h2>
                    <ul id="bo_cate_ul">
                        <?php echo $category_option ?>
                    </ul>
                </nav>
                <?php } ?>
                <!-- } 게시판 카테고리 끝 -->

                <!-- 게시판 페이지 정보 및 버튼 시작 { -->
                <div class="bo_fx">
                    <div id="bo_list_total">
                        <span>Total <?php echo number_format($total_count) ?></span>
                        <?php echo $page ?> Page
                    </div>

                    <?php if ($rss_href || $write_href) { ?>
                    <ul class="btn_bo_user">
                        <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01">RSS</a></li><?php } ?>
                        <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin">admin</a></li><?php } ?>
                        <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02">write</a></li><?php } ?>
                    </ul>
                    <?php } ?>
                </div>
                <!-- } 게시판 페이지 정보 및 버튼 끝 -->

                <form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
                <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
                <input type="hidden" name="stx" value="<?php echo $stx ?>">
                <input type="hidden" name="spt" value="<?php echo $spt ?>">
                <input type="hidden" name="sca" value="<?php echo $sca ?>">
                <input type="hidden" name="sst" value="<?php echo $sst ?>">
                <input type="hidden" name="sod" value="<?php echo $sod ?>">
                <input type="hidden" name="page" value="<?php echo $page ?>">
                <input type="hidden" name="sw" value="">

                <div class="tbl_head01 tbl_wrap">
                    <table>
                    <caption><?php echo $board['bo_subject'] ?> List</caption>
                    <thead>
                    <tr>
                        <th scope="col">NUMBER</th>
                        <?php if ($is_checkbox) { ?>
                        <th scope="col">
                            <label for="chkall" class="sound_only">현재 페이지 게시물 전체</label>
                            <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
                        </th>
                        <?php } ?>
                        <th scope="col">TITLE</th>
                        <th scope="col"><?php echo subject_sort_link('wr_datetime', $qstr2, 1) ?>DATE</a></th>
                        <th scope="col"><?php echo subject_sort_link('wr_hit', $qstr2, 1) ?>VIEWS</a></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    for ($i=0; $i<count($list); $i++) {
                     ?>
                    <tr class="<?php if ($list[$i]['is_notice']) echo "bo_notice"; ?>">
                        <td class="td_num">
                        <?php
                        if ($list[$i]['is_notice']) // 공지사항
                            echo '<strong>NOTICE</strong>';
                        else if ($wr_id == $list[$i]['wr_id'])
                            echo "<span class=\"bo_current\">Reading</span>";
                        else
                            echo $list[$i]['num'];
                         ?>
                        </td>
                        <?php if ($is_checkbox) { ?>
                        <td class="td_chk">
                            <label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
                            <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
                        </td>
                        <?php } ?>
                        <td class="td_subject">
                            <?php
                            echo $list[$i]['icon_reply'];
                            if ($is_category && $list[$i]['ca_name']) {
                             ?>
                            <a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link"><?php echo $list[$i]['ca_name'] ?></a>
                            <?php } ?>

                            <a href="<?php echo $list[$i]['href'] ?>">
                                <?php echo $list[$i]['subject'] ?>
                                <?php if ($list[$i]['comment_cnt']) { ?><span class="sound_only">댓글</span><?php echo $list[$i]['comment_cnt']; ?><span class="sound_only">개</span><?php } ?>
                            </a>

                            <?php
                            // if ($list[$i]['link']['count']) { echo '['.$list[$i]['link']['count']}.']'; }
                            // if ($list[$i]['file']['count']) { echo '<'.$list[$i]['file']['count'].'>'; }

                            if (isset($list[$i]['icon_new'])) echo $list[$i]['icon_new'];
                            if (isset($list[$i]['icon_hot'])) echo $list[$i]['icon_hot'];
                            if (isset($list[$i]['icon_file'])) echo $list[$i]['icon_file'];
                            if (isset($list[$i]['icon_link'])) echo $list[$i]['icon_link'];
                            if (isset($list[$i]['icon_secret'])) echo $list[$i]['icon_secret'];

                             ?>
                        </td>
                        <td class="td_date"><?php echo $list[$i]['datetime2'] ?></td>
                        <td class="td_num"><?php echo $list[$i]['wr_hit'] ?></td>
                    </tr>
                    <?php } ?>
                    <?php if (count($list) == 0) { echo '<tr><td colspan="'.$colspan.'" class="empty_table">No Data.</td></tr>'; } ?>
                    </tbody>
                    </table>
                </div>

                <?php if ($list_href || $is_checkbox || $write_href) { ?>
                <div class="bo_fx">
                    <?php if ($is_checkbox) { ?>
                    <ul class="btn_bo_adm">
                        <li><input type="submit" name="btn_submit" value="delete selected" onclick="document.pressed=this.value"></li>
                    </ul>
                    <?php } ?>

                    <?php if ($list_href || $write_href) { ?>
                    <ul class="btn_bo_user">
                        <?php if ($list_href) { ?><li><a href="<?php echo $list_href ?>" class="btn_b01">list</a></li><?php } ?>
                        <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02">write</a></li><?php } ?>
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

            <!-- 게시판 검색 시작 { -->
            <fieldset id="bo_sch">
                <legend>게시물 검색</legend>

                <form name="fsearch" method="get">
                <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                <input type="hidden" name="sca" value="<?php echo $sca ?>">
                <input type="hidden" name="sop" value="and">
                <label for="sfl" class="sound_only">검색대상</label>
                <select name="sfl" id="sfl">
                    <option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>Subject</option>
                    <option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>Content</option>
                    <option value="wr_subject||wr_content"<?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>Subject+Content</option>
                </select>
                <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
                <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="frm_input required" size="15" maxlength="20">
                <input type="submit" value="search" class="btn_submit">
                </form>
            </fieldset>
            <!-- } 게시판 검색 끝 -->

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

                if(document.pressed == "delete selected") {
                    if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다."))
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
</div>