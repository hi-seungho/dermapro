<?php
include_once('./_common.php');

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
	include_once(G5_THEME_MOBILE_PATH.'/index.php');
	return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
	<div id="sub_top05">
		<div class="sub_tit">
			<img src="../../images/sub/img_subtop0505tit.png" alt="Participate">
		</div>
	</div>
	<div class="bread">
		<div class="home">
			<span class="ls0">HOME</span> <span>&gt;</span> 시험참여 <span>&gt;</span> <span class="bold">피험자 참여절차</span>
		</div>
	</div>
	
	<ul class="sub_top_menu three">
		<li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=recruitment">피험자 모집공고</a></li>
		<li><a href="/examine/precautions.php">피험자 주의사항</a></li>
		<li class="on"><a href="/examine/step.php">피험자 참여절차</a></li>
	</ul>
	<div id="container">
		<div class="con">
			<div class="tit_bg">
				<h3>피험자 참여절차</h3>
			</div>
			<div class="step">
				<div class="img">
					<img src="../../images/sub/img_step.jpg" alt="피험자 참여절차">
				</div>
			</div>
			
		</div>
	</div><!-- container -->
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>