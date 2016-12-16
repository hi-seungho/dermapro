<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_LANG_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>
<div id="lay_wrap">
    <div id="lay_header">
        <div class="header_area">
            <div class="header_bar">
                <ul class="left_menu">
                    <li><a href="#" id="favorite">Favorites</a></li>
                </ul>
                <ul class="right_menu">
                    <li class="first">language</li>
                    <li><a href="#">Kor</a></li>
                    <li><a href="#">Eng</a></li>
                </ul>
            </div>
            <h1 id="Logo">
                <a href="<?php echo G5_LANG_URL; ?>/index.php"><img src="<?php echo G5_LANG_IMG_URL; ?>/main/img_logoblue.gif" alt="DERMAPRO" /></a>
            </h1>
            <div id="MainMenu">
                <ul class="menu">
                    <li><a href="<?php echo G5_LANG_URL; ?>/company/vision.php"><img src="<?php echo G5_LANG_IMG_URL; ?>/main/main_menu01.gif" alt="회사소개"></a>
                        <ul class="sub_menu sub01">
                            <li class="pt"><a href="<?php echo G5_LANG_URL; ?>/company/vision.php">Vision</a></li>
                            <li><a href="<?php echo G5_LANG_URL; ?>/company/ceo_greeting.php"><span class="ls0">CEO</span> message</a></li>
                            <li><a href="<?php echo G5_LANG_URL; ?>/company/history.php">Milestone</a></li>
                            <li><a href="<?php echo G5_LANG_URL; ?>/company/organization.php">Organization</a></li>
                            <li><a href="<?php echo G5_LANG_URL; ?>/company/product.php">Business field</a></li>
                            <li><a href="<?php echo G5_LANG_URL; ?>/company/agency.php">Partners</a></li>
                            <li class="pb"><a href="<?php echo G5_LANG_URL; ?>/company/location.php">Location</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo G5_LANG_URL; ?>/evaluation/Anti_aging.php"><img src="<?php echo G5_LANG_IMG_URL; ?>/main/main_menu02.gif" alt="평가분야"></a>
                        <ul class="sub_menu sub02">
                            <li class="pt"><a href="<?php echo G5_LANG_URL; ?>/evaluation/Anti_aging.php">Efficacy Test</a></li>
                            <li><a href="<?php echo G5_LANG_URL; ?>/evaluation/cosmeceuticals.php">Cosmeceuticals Test </a></li>
                            <li><a href="<?php echo G5_LANG_URL; ?>/evaluation/skin.php">Safety Test</a></li>
                            <li><a href="<?php echo G5_LANG_URL; ?>/evaluation/sensuality.php">Sensory Test </a></li>
                            <li class="pb"><a href="<?php echo G5_LANG_URL; ?>/evaluation/invitro.php"><span class="ls0 italic">in vitro</span> Test</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo G5_LANG_URL; ?>/exam/exam_inquiry.php"><img src="<?php echo G5_LANG_IMG_URL; ?>/main/main_menu03.gif" alt="시험문의"></a>
                        <ul class="sub_menu sub03">
                            <li class="pt pb"><a href="<?php echo G5_LANG_URL; ?>/exam/exam_inquiry.php">Test Inquiry</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=news_eng"><img src="<?php echo G5_LANG_IMG_URL; ?>/main/main_menu04.gif" alt="뉴스센터"></a>
                        <ul class="sub_menu sub04">
                            <li class="pt"><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=news_eng">Dermapro News</a></li>
                            <li><a href="<?php echo G5_LANG_URL; ?>/news/paper_patent.php">Dermapro Academy</a></li>
                            <?php if ($config['cf_2']) { ?>
                                <li><a href="<?php echo G5_DATA_URL; ?>/file/config/<?php echo $config['cf_2']; ?>" target="_blank">E-Brochure Related</a></li>
                            <?php } ?>
                            <li class="pb"><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=agency_eng">orgarnizations</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=recruitment_eng"><img src="<?php echo G5_LANG_IMG_URL; ?>/main/main_menu05.gif" alt="시험참여"></a>
                        <ul class="sub_menu sub05">
                            <li class="pt"><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=recruitment_eng">Recruitment Notice</a></li>
                            <li><a href="<?php echo G5_LANG_URL; ?>/examine/precautions.php">Precautions</a></li>
                            <li class="pb"><a href="<?php echo G5_LANG_URL; ?>/examine/step.php">Procedure</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- header -->
