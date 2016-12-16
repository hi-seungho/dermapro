<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>

<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->
<div class="mm m01">
    <p class="tit"><img src="/images/main/img_section03_tit01.gif" alt="NOTICE"></p>
    <span><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=<?php echo $bo_table ?>"><span class="ls0">+MORE</span></a></span>
    <ul>
        <?php for ($i=0; $i<count($list); $i++) {  ?>
            <li>
                <?php
                //echo $list[$i]['icon_reply']." ";
                echo "<a href=\"".$list[$i]['href']."\">";
                if ($list[$i]['is_notice'])
                    echo "<strong>".$list[$i]['subject']."</strong>";
                else
                    echo $list[$i]['subject'];

                if ($list[$i]['comment_cnt'])
                    echo $list[$i]['comment_cnt'];

                echo "</a>";

                // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
                // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

                if (isset($list[$i]['icon_new'])) echo " " . $list[$i]['icon_new'];
                if (isset($list[$i]['icon_hot'])) echo " " . $list[$i]['icon_hot'];
                if (isset($list[$i]['icon_file'])) echo " " . $list[$i]['icon_file'];
                if (isset($list[$i]['icon_link'])) echo " " . $list[$i]['icon_link'];
                if (isset($list[$i]['icon_secret'])) echo " " . $list[$i]['icon_secret'];
                ?>
                <span class="date ls0"><?php echo $list[$i]['datetime2']; ?></span>
            </li>
        <?php }  ?>
        <?php if (count($list) == 0) { //게시물이 없을 때  ?>
            <li>게시물이 없습니다.</li>
        <?php }  ?>
    </ul>
</div>
<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->