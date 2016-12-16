<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
    <div id="lay_container">
        <div class="main_slide">
            <?php echo latest("theme/visual", "visual", 5, 25); ?>
        </div>
        <script>
            $(function () {
                $('.main_visual').bxSlider({
                    mode: 'fade',
                    auto: true,
                    autoControls: true,
                    pause: 5000
                });
            });
        </script>
        <div class="main_section01">
            <h3><img src="/images/main/img_section01_tit.gif" alt="평가분야 assessment area"></h3>
            <span class="bar">bar</span>
            <ul>
                <li>
                    <div class="m01">
                        <img src="/images/main/btn_menu01.gif" alt="향노화 평가">
                        <span>유효성 평가</span>
                        <p class="ti-desc">화장품의 효능, 효과를 인체 피부에서<br>
                            확인하여  화장품 표시광고 실증자료<br>
                            결과를 제공합니다. </p>
                        <p><a href="/evaluation/Anti_aging.php">자세히보기</a></p>
                    </div>
                </li>
                <li>
                    <div class="m01">
                        <img src="/images/main/btn_menu02.gif" alt="코스메슈티컬 평가">
                        <span>기능성 평가</span>
                        <p class="ti-desc">식약처 가이드라인에 따라<br>
                            주름 미백 자외선등 기능성을 표방하는<br>
                            화장품의 효능 효과를 평가합니다.</p>
                        <p><a href="/evaluation/cosmeceuticals.php">자세히보기</a></p>
                    </div>
                </li>
                <li>
                    <div class="m01">
                        <img src="/images/main/btn_menu03.gif" alt="안전성 평가">
                        <span>안전성 평가</span>
                        <p class="ti-desc">화장품의 권장사용 조건 뿐 아니라,<br>
                            합리적으로 예측 가능한 사용 조건에서<br>
                            안전하다는 것을 확인하는  평가입니다.
                        </p>
                        <p><a href="/evaluation/skin.php">자세히보기</a></p>
                    </div>
                </li>
                <li>
                    <div class="m01">
                        <img src="/images/main/btn_menu04.gif" alt="소비자 사용성 평가">
                        <span>소비자 사용성 평가</span>
                        <p class="ti-desc">제품의 향, 외관, 사용감을 평가하기<br>
                            위해 시각 후각 및 촉각으로 느껴지는 <br>
                            감성적 반응을 정량적으로 측정하고<br>
                            분석합니다.</p>
                        <p><a href="/evaluation/sensuality.php">자세히보기</a></p>
                    </div>
                </li>
                <li>
                    <div class="m01">
                        <img src="/images/main/btn_menu05.gif" alt="In vitro 평가">
                        <span><span class="italic" style="display: inline-block; margin-top:0; margin-bottom:0">in vitro</span> 평가</span>
                        <p class="ti-desc">생체 외 에서 화장품과 그 원료의 안전<br>
                            및 효력을 평가하는 것으로 생체 내
                            <br>에서의 현상을 예측하는데<br>
                            그 목적이 있습니다.</p>
                        <p><a href="/evaluation/invitro.php">자세히보기</a></p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="main_section02">
            <div class="top bg">
                <div class="txt">
                    <div class="right">
                        <p class="ti-tit">시험문의<span><img src="/images/main/img_section02_span01.gif" alt="CONTACT US" /></span></p>
                        <img src="/images/main/img_section02_txt01.png" alt="더마프로에서 진행하는 항노화평가, 안정성 평가, 및
							기타 효능 등가 등 전반적인 평가 시험에 대해서 궁금하신 사항에 대해 문의하시면 빠른 시일 내에 답변을 해 드리도록 하겠습니다." class="ti-desc">
                        <p><a href="/exam/exam_inquiry.php"><img src="/images/main/btn_golink.png" alt="바로가기"></a></p>
                    </div>
                </div>
            </div>
            <div class="bottom bg">
                <div class="txt">
                    <div class="left">
                        <p class="ti-tit">시험참여<span><img src="/images/main/img_section02_span02.gif" alt="PARTICIPATE" /></span></p>
                        <img src="/images/main/img_section02_txt02.png" alt="더마프로에서 진행하는 항노화평가, 안정성 평가, 및
							기타 효능 등가 등 전반적인 평가 시험에 대해서 궁금하신사항에 대해 문의하시면 빠른 시일 내에 답변을 해 드리도록 하겠습니다." class="ti-desc">
                        <p><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=recruitment"><img src="/images/main/btn_golink.png" alt="바로가기"></a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_section03">
            <?php echo latest("theme/news", "news", 5, 25); ?>
            <div class="mm m02 two">
                <p class="tit">더마프로 학술활동</p>
                <p class="ti-desc">
                    더마프로 학술활동<br>
                    입니다.
                </p>
                <span class="more"><a href="/news/paper_patent.php"><span class="ls0">+MORE</span></a></span>
            </div>
            <div class="mm m03">
                <p class="tit">E-브로셔</p>
                <p class="ti-desc">
                    더마프로 E-브로셔를<br>
                    확인하실 수 있습니다.
                </p>
                <?php if ($config['cf_1']) { ?>
                <span class="more"><a href="<?php echo G5_DATA_URL; ?>/file/config/<?php echo $config['cf_1']; ?>" target="_blank"><span class="ls0">+MORE</span></a></span>
                <?php } ?>
            </div>
        </div>
    </div><!-- container -->
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>