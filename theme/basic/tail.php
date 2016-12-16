<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>
    <footer id="lay_footer">
        <div class="footer_gnb">
            <ul>
                <li><a href="/company/vision.php">회사소개</a></li>
                <li><a href="/exam/exam_inquiry.php">시험문의</a></li>
                <li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=recruitment">피험자 모집공고</a></li>
                <li><a href="#">E-브로셔</a></li>
                <li><a href="/company/location.php">오시는 길</a></li>
            </ul>
        </div>
        <div class="footer_wrap">
            <div class="footer_info">
                <h2 class="flogo">
                    <a href="#"><img src="/images/main/img_flogo.gif" alt="더마로프 로고"></a>
                </h2>
                <div class="fcon">
                    <img src="/images/main/img_footer_txt.gif" alt="" />
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
include_once(G5_THEME_PATH."/tail.sub.php");
?>