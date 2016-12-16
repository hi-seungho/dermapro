<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<div id="lay_wrap">
    <div id="lay_header">
        <div class="header_area">
            <div class="header_bar">
                <ul class="left_menu">
                    <li><a href="#" id="favorite">Favorites</a></li>
                    <!-- <li><a href="#">Site map</a></li> -->
                </ul>
                <ul class="right_menu">
                    <li class="first">language</li>
                    <li><a href="#">Kor</a></li>
                    <li><a href="#">Eng</a></li>
                </ul>
            </div>
            <h1 id="Logo">
                <a href="/index.php"><img src="/images/main/img_logoblue.gif" alt="DERMAPRO" /></a>
            </h1>
            <div id="MainMenu">
                <ul class="menu">
                    <li><a href="/company/vision.php"><img src="/images/main/main_menu01.gif" alt="회사소개"></a>
                        <ul class="sub_menu sub01">
                            <li class="pt"><a href="/company/vision.php">비전</a></li>
                            <li><a href="/company/ceo_greeting.php"><span class="ls0">CEO</span> 인사말</a></li>
                            <li><a href="/company/history.php">연혁</a></li>
                            <li><a href="/company/organization.php">조직도</a></li>
                            <li><a href="/company/product.php">사업영역</a></li>
                            <li><a href="/company/agency.php">공동연구기관</a></li>
                            <li class="pb"><a href="/company/location.php">오시는 길</a></li>
                        </ul>
                    </li>
                    <li><a href="/evaluation/Anti_aging.php"><img src="/images/main/main_menu02.gif" alt="평가분야"></a>
                        <ul class="sub_menu sub02">
                            <li class="pt"><a href="/evaluation/Anti_aging.php">유효성 평가</a></li>
                            <li><a href="/evaluation/cosmeceuticals.php">기능성 평가</a></li>
                            <li><a href="/evaluation/skin.php">안전성 평가</a></li>
                            <li><a href="/evaluation/sensuality.php">소비자 사용성 평가</a></li>
                            <li class="pb"><a href="/evaluation/invitro.php"><span class="ls0 italic">in vitro</span> 평가</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo G5_BBS_URL; ?>/write.php?bo_table=inquiry"><img src="/images/main/main_menu03.gif" alt="시험문의"></a>
                        <ul class="sub_menu sub03">
                            <li class="pt pb"><a href="<?php echo G5_BBS_URL; ?>/write.php?bo_table=inquiry">시험상담</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=news"><img src="/images/main/main_menu04.gif" alt="뉴스센터"></a>
                        <ul class="sub_menu sub04">
                            <li class="pt"><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=news">더마프로 뉴스</a></li>
                            <li><a href="/news/paper_patent.php">더마프로 학술활동</a></li>
                            <?php if ($config['cf_1']) { ?>
                                <li><a href="<?php echo G5_DATA_URL; ?>/file/config/<?php echo $config['cf_1']; ?>" target="_blank">E-브로셔</a></li>
                            <?php } ?>
                            <li class="pb"><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=agency">관련기관</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=recruitment"><img src="/images/main/main_menu05.gif" alt="시험참여"></a>
                        <ul class="sub_menu sub05">
                            <li class="pt"><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=recruitment">피험자 모집공고</a></li>
                            <li><a href="/examine/precautions.php">피험자 주의사항</a></li>
                            <li class="pb"><a href="/examine/step.php">피험자 참여절차</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- header -->