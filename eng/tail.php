<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
    <footer id="lay_footer">
        <div class="footer_gnb">
            <ul>
                <li><a href="<?php echo G5_LANG_URL; ?>/company/vision.php">DERMAPRO</a></li>
                <li><a href="<?php echo G5_LANG_URL; ?>/exam/exam_inquiry.php">CONTACT US</a></li>
                <li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=recruitment_eng">RECRUITMENT NOTICE</a></li>
                <?php if ($config['cf_2']) { ?>
                    <li><a href="<?php echo G5_DATA_URL; ?>/file/config/<?php echo $config['cf_2']; ?>" target="_blank">E-BROCHURE RELATED</a></li>
                <?php } ?>
                <li><a href="<?php echo G5_LANG_URL; ?>/company/location.php">PARTNERS LOCATION</a></li>
            </ul>
        </div>
        <div class="footer_wrap">
            <div class="footer_info">
                <h2 class="flogo">
                    <a href="#"><img src="<?php echo G5_LANG_IMG_URL; ?>/main/img_flogo.gif" alt="더마로프 로고"></a>
                </h2>
                <div class="fcon">
                    <img src="<?php echo G5_LANG_IMG_URL; ?>/main/img_footer_txt.gif" alt="" />
                </div>
                <div class="famliysite">
                    <span class="family_btn ls0">Family Site</span>
                    <ul class="family_list">
                        <li><a href="#">본사</a></li>
                        <li><a href="#">본사</a></li>
                        <li><a href="#">본사</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </footer><!-- footer -->
</div>
<?php
if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>
<!-- } 하단 끝 -->

<?php
include_once(G5_LANG_PATH."/tail.sub.php");
?>