<?php
include_once('./_common.php');
include_once(G5_LANG_PATH.'/head.php');
?>
    <div id="lay_container">
        <div class="main_slide">
            <?php echo latest("theme/visual", "visual_eng", 5, 25); ?>
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
            <h3><img src="<?php echo G5_LANG_IMG_URL; ?>/main/img_section01_tit.gif" alt="평가분야 assessment area"></h3>
            <span class="bar">bar</span>
            <ul>
                <li>
                    <div class="m01">
                        <img src="<?php echo G5_LANG_IMG_URL; ?>/main/btn_menu01.gif" alt="향노화 평가">
                        <span>Efficacy Test</span>
                        <p class="ti-desc">We offer the study results of</br>substantiation data of ad in cosmetic</br>labeling and advertising</br>by confirming the efficacy of the</br>investigational products
                        </p>
                        <p><a href="<?php echo G5_LANG_URL; ?>/evaluation/Anti_aging.php">more</a></p>
                    </div>
                </li>
                <li>
                    <div class="m01">
                        <img src="<?php echo G5_LANG_IMG_URL; ?>/main/btn_menu02.gif" alt="코스메슈티컬 평가">
                        <span>Cosmeceuticals Test </span>
                        <p class="ti-desc">Following MFDS Guidelines,</br>
                            we evaluate t he efficacy of cosmetics</br>
                            for  the claims to support</br>
                            functional such as wrinkles, lightening</br>
                            and SPF.</p>
                        <p><a href="<?php echo G5_LANG_URL; ?>/evaluation/cosmeceuticals.php">more</a></p>
                    </div>
                </li>
                <li>
                    <div class="m01">
                        <img src="<?php echo G5_LANG_IMG_URL; ?>/main/btn_menu03.gif" alt="안전성 평가">
                        <span>Safety Test</span>
                        <p class="ti-desc">This evaluation is about to confirm</br>
                            the safety of products not only in</br>
                            recommended condition of use,</br>
                            but also, foreseeable condition of use.
                        </p>
                        <p><a href="<?php echo G5_LANG_URL; ?>/evaluation/skin.php">more</a></p>
                    </div>
                </li>
                <li>
                    <div class="m01">
                        <img src="<?php echo G5_LANG_IMG_URL; ?>/main/btn_menu04.gif" alt="소비자 사용성 평가">
                        <span>Sensory Test</span>
                        <p class="ti-desc">This test is about measuring sensory</br>
                            reaction from vision, olfactory sense</br>
                            and tactile sensation quantitatively to</br>
                            evaluate the scent, appearance and</br>
                            sense of use of the investigational</br>
                            product.
                        </p>
                        <p><a href="<?php echo G5_LANG_URL; ?>/evaluation/sensuality.php">more</a></p>
                    </div>
                </li>
                <li>
                    <div class="m01">
                        <img src="<?php echo G5_LANG_IMG_URL; ?>/main/btn_menu05.gif" alt="In vitro 평가">
                        <span><span class="italic" style="display: inline-block; margin-top:0; margin-bottom:0">in vitro</span> Test</span>
                        <p class="ti-desc">This test stands for the safety and</br>
                            efficacy of cosmetics and ingredients</br>
                            in-vitro level , has an objective in</br>
                            predicting existing state in vivo.
                        </p>
                        <p><a href="<?php echo G5_LANG_URL; ?>/evaluation/invitro.php">more</a></p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="main_section02">
            <div class="top bg">
                <div class="txt">
                    <div class="right">
                        <p class="ti-tit">CONTACT US</p>
                        <img src="<?php echo G5_LANG_IMG_URL; ?>/main/img_section02_txt01.png" alt="더마프로에서 진행하는 항노화평가, 안정성 평가, 및
							기타 효능 등가 등 전반적인 평가 시험에 대해서 궁금하신 사항에 대해 문의하시면 빠른 시일 내에 답변을 해 드리도록 하겠습니다." class="ti-desc">
                        <p><a href="<?php echo G5_LANG_URL; ?>/exam/exam_inquiry.html"><img src="<?php echo G5_LANG_IMG_URL; ?>/main/btn_golink.png" alt="바로가기"></a></p>
                    </div>
                </div>
            </div>
            <div class="bottom bg">
                <div class="txt">
                    <div class="left">
                        <p class="ti-tit">PARTICIPATE</p>
                        <img src="<?php echo G5_LANG_IMG_URL; ?>/main/img_section02_txt02.png" alt="더마프로에서 진행하는 항노화평가, 안정성 평가, 및
							기타 효능 등가 등 전반적인 평가 시험에 대해서 궁금하신사항에 대해 문의하시면 빠른 시일 내에 답변을 해 드리도록 하겠습니다." class="ti-desc">
                        <p><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=recruitment_eng"><img src="<?php echo G5_LANG_IMG_URL; ?>/main/btn_golink.png" alt="바로가기"></a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_section03">
            <?php echo latest("theme/news_eng", "news_eng", 5, 25); ?>
            <div class="mm m02 two">
                <p class="tit">DERMAPRO ACADEMY</p>
                <p class="ti-desc">
                    The research activity<br>
                    of Dermapro
                </p>
                <span class="more"><a href="<?php echo G5_LANG_URL; ?>/news/paper_patent.php"><span class="ls0">+MORE</span></a></span>
            </div>
            <div class="mm m03">
                <p class="tit">E-BROCHURE RELATED</p>
                <p class="ti-desc">
                    You can see our E-brochure<br>
                    here.
                </p>
                <?php if ($config['cf_2']) { ?>
                <span class="more"><a href="<?php echo G5_DATA_URL; ?>/file/config/<?php echo $config['cf_2']; ?>" target="_blank"><span class="ls0">+MORE</span></a></span>
                <?php } ?>
            </div>
        </div>
    </div><!-- container -->
<?php
include_once(G5_LANG_PATH.'/tail.php');
?>