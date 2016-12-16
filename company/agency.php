<?php
include_once('./_common.php');

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
	include_once(G5_THEME_MOBILE_PATH.'/index.php');
	return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
	<div id="sub_top">
		<div class="sub_tit">
			<img src="/images/sub/img_subtop0101tit.png" alt="About Us">
		</div>
	</div>
	<div class="bread">
		<div class="home">
			<span class="ls0">HOME</span> <span>&gt;</span> 회사소개 <span>&gt;</span> <span class="bold">공동연구기관</span>
		</div>
	</div>
	
	<ul class="sub_top_menu">
		<li><a href="vision.php">비전</a></li>
		<li><a href="ceo_greeting.php"><span class="ls0">CEO</span> 인사말</a></li>
		<li><a href="history.php">연혁</a></li>
		<li><a href="organization.php">조직도</a></li>
		<li><a href="product.php">사업영역</a></li>
		<li class="on"><a href="agency.php">공동연구기관</a></li>
		<li><a href="location.php">오시는 길</a></li>
	</ul>
	<div id="container">
		<div class="con agen">
			<div class="tit_bg">
				<h3>공동연구기관</h3>
			</div>
			<div class="img">
				<img src="/images/sub/img_com_agency.jpg" alt="공동연구기관">
			</div>
		</div>
	</div><!-- container -->
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>