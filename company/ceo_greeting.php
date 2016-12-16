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
			<span class="ls0">HOME</span> <span>&gt;</span> 회사소개 <span>&gt;</span> <span class="bold"><span class="ls0">CEO</span> 인사말</span>
		</div>
	</div>
	
	<ul class="sub_top_menu">
		<li><a href="vision.php">비전</a></li>
		<li class="on"><a href="ceo_greeting.php"><span class="ls0">CEO</span> 인사말</a></li>
		<li><a href="history.php">연혁</a></li>
		<li><a href="organization.php">조직도</a></li>
		<li><a href="product.php">사업영역</a></li>
		<li><a href="agency.php">공동연구기관</a></li>
		<li><a href="location.php">오시는 길</a></li>
	</ul>
	<div id="container">
		<div class="con">
			<div class="tit_bg">
				<h3><span class="ls0">CEO</span> 인사말</h3>
			</div>
			<div class="box">
				<img src="/images/sub/img_ceo01.jpg" alt="CEO 소개">
				<div class="comm-desc">
					<span class="bar">bar</span>
					<p class="ti-desc" style="text-align: justify">
						저희 더마프로는 2001년 5월에 설립된 화장품, 기능성 화장품, 의약외품, 미용기구, 기능성 식품 및 신소재에 대한 안전성 유효성 평가 전문 기관입니다. 
						더마프로 에서 수행하는 모든 인체적용시험은 GCP에 근거하여 계획 진행 보고되며 또한 IRB를 운영함으로써 인체적용시험의 표준화와 피험자를 위한 윤리적 측면에서의 신뢰성을 확보하고 있습니다.
						저희는 각 분야별로 전문화된 연구인력과 최신의 첨단 장비를 갖추고 있으며, 화장품의 안전성 유효성 평가는 물론 한국인의피부에 대한 기초연구 및 관련 연구 분야의 국책과제를 수행하면서 새로운 기술의 도입을 지속적으로 실천하고 있습니다.또한, 우리는 단단한 기초과학 위에 세워진 연구력과 기술력을 기업의 경쟁력으로 삼아 활발한 국제 학술활동과 해외 네트웍을 통하여 오늘날 세계 수준에 이르렀음을 자부합니다.
						앞으로도 더마프로는 인체피부 평가 전문기관으로써 새로운 영역에 대한 선구자적인 도전을 멈추지 않을 것을 약속합니다. 
					</p>
					<img src="/images/sub/img_ceo_name.gif" alt="" style="float:right;"/>
				</div>
			</div>

			<div class="box">
				<img src="/images/sub/img_ceo02.jpg" alt="CEO 소개">
				<div class="comm-desc">
					<span class="bar">bar</span>
					<p class="ti-tit">더마프로 <span class="ls0">IRB</span>위원장, 피부과전문의 김 형 옥 교수</p>
					<div class="list_box">
						<ul>
							<li>가톨릭대학교 의과대학 졸업</li>
							<li>가톨릭대학교 의학 석사, 의학박사</li>
							<li>가톨릭대학교 성모병원 수련의, 피부과전문의</li>
							<li>미국 <span class="ls0">USCF-Fellow</span></li>
							<li>가톨릭대 강남 성모병원 피부과 과장</li>
							<li>가톨릭 의과대학 피부과학 교실 주임교수</li>
							<li>접촉피부염 및 피부알레르기 학회 회장</li>
						</ul>
						<span class="list_txt">약력 : </span>
					</div>
					<div class="list_box list_box02">
						<ul>
							<li>대한 피부과학회이사장</li>
							<li>대한 코스메틱학회 회장</li>
							<li>대한 모발학회 부회장</li>
							<li>대한 피부과학회 회장</li>
							<li>가톨릭대학교 의과대학 명예교수</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="box">
				<img src="/images/sub/img_ceo03.jpg" alt="CEO 소개">
				<div class="comm-desc">
					<span class="bar">bar</span>
					<p class="ti-tit">피부과전문의 신 민 경 교수</p>
					<div class="list_box">
						<ul>
							<li>경희대학교 의과대학 의학박사 학위취득</li>
							<li>경희대학교 의과대학 임상강사</li>
							<li>경희대학교 의과대학 조교수</li>
							<li>대한피부과학회 회원 </li>
							<li>대한아토피피부염학회 회원</li>
							<li>대한피부병리학회 회원</li>
						</ul>
						<span class="list_txt">약력 : </span>
					</div>
					<!-- <div class="list_box list_box02">
						<ul>
							<li>대한 피부과학회이사장</li>
							<li>대한 코스메틱학회 회장</li>
							<li>대한 모발학회 부회장</li>
							<li>대한 피부과학회 회장</li>
							<li>가톨릭대학교 의과대학 명예교수</li>
						</ul>
					</div> -->
				</div>
			</div>

		</div>
	</div><!-- container -->
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>