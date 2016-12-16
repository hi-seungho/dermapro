<?php
include_once('./_common.php');

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
	include_once(G5_THEME_MOBILE_PATH.'/index.php');
	return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
	<div id="sub_top04">
		<div class="sub_tit">
			<img src="../../images/sub/img_subtop0404tit.png" alt="Inquiry">
		</div>
	</div>
	<div class="bread">
		<div class="home">
			<span class="ls0">HOME</span> <span>&gt;</span> 뉴스센터 <span>&gt;</span> <span class="bold">E-브로셔</span>
		</div>
	</div>
	
	<ul class="sub_top_menu four">
		<li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=news">더마프로 뉴스</a></li>
		<li><a href="/news/paper_patent.php">더마프로 학술활동</a></li>
		<?php if ($config['cf_1']) { ?>
			<li><a href="<?php echo G5_DATA_URL; ?>/file/config/<?php echo $config['cf_1']; ?>" target="_blank">E-브로셔</a></li>
		<?php } ?>
		<li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=agency">관련기관</a></li>
	</ul>
	<div id="container">
		<div class="con">
			<div class="tit_bg">
				<h3>E-브로셔</h3>
			</div>
		</div>
	</div><!-- container -->
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>