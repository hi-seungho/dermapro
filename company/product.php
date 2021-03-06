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
			<span class="ls0">HOME</span> <span>&gt;</span> 회사소개 <span>&gt;</span> <span class="bold">사업영역</span>
		</div>
	</div>
	
	<ul class="sub_top_menu">
		<li><a href="vision.php">비전</a></li>
		<li><a href="ceo_greeting.php"><span class="ls0">CEO</span> 인사말</a></li>
		<li><a href="history.php">연혁</a></li>
		<li><a href="organization.php">조직도</a></li>
		<li class="on"><a href="product.php">사업영역</a></li>
		<li><a href="agency.php">공동연구기관</a></li>
		<li><a href="location.php">오시는 길</a></li>
	</ul>
	<div id="container">
		<div class="con pro">
			<div class="tit_bg">
				<h3>사업영역</h3>
			</div>
			<div class="box" style="text-align: center;" >
				
				<img src="/images/sub/img_product_left_100.jpg" alt=""  style="margin-right:0px; float: none;">
				<!-- <img src="/images/sub/img_product_left.jpg" alt="사업영역">
				<div class="comm-desc">
					<span class="bar">bar</span>
					<p class="ti-desc bg">
						(주)더마프로는 화장품 원료와 일반 화장품 및 기능성 화장품을 비롯한 의약외품,
그리고 피부기능식품류 와 바디제품, 헤어 제품과 미용기기에 이르기까지 개발된 혹은 개발 중에 있는 제품과 신소재를 대상으로 평가합니다.
					<p class="ti-desc">
						시험수행을 위해 시험 계획 단계에서 부터 시험 디자인을 함께 연구할 뿐 아니라 필요한 컨설팅과 교육을 함께 지원해 드립니다. 
					</p>
					<p class="ti-desc">
						제품의 컨셉에 맞는 안전성 평가, <span class="italic">in vitro</span> 평가, <span class="italic">ex vivo</span> 평가 그리고 효능 평가 와 감성 평가에 이르기까지 국제수준의 첨단의 장비를 이용하여 피부연구분야의 전문가 그룹과 함께 RND를 바탕으로 다양한 임상을 수행하고 있습니다
					</p>
				</div> -->
			</div>
			<!-- <div class="img">
				<img src="/images/sub/img_product_diag.jpg" alt="Dermapro Evaluation">
			</div> -->

		</div>
	</div><!-- container -->
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>