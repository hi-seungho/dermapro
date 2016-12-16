<?php
include_once('./_common.php');

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
	include_once(G5_THEME_MOBILE_PATH.'/index.php');
	return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
	<div id="sub_top02">
		<div class="sub_tit">
			<img src="../../images/sub/img_subtop0202tit.png" alt="Evaluation">
		</div>
	</div>
	<div class="bread">
		<div class="home">
			<span class="ls0">HOME</span> <span>&gt;</span> 시험분야 <span>&gt;</span> <span class="bold">유효성 평가</span>
		</div>
	</div>
	
	<ul class="sub_top_menu five">
		<li class="on"><a href="Anti_aging.php">유효성 평가</a></li>
		<li><a href="cosmeceuticals.php">기능성 평가</a></li>
		<li><a href="skin.php">안전성 평가</a></li>
		<li><a href="sensuality.php">소비자 사용성 평가</a></li>
		<li><a href="invitro.php"><span class="italic">in vitro</span> 평가</a></li>
	</ul>
	<div id="container">
		<div id="top">
			<a href="#"><img src="../../images/sub/img_top.jpg" alt="Top"></a>
		</div>
		<div class="con">
			<div class="tit_bg">
				<h3>유효성 평가</h3>
			</div>

			<div class="select_box">
				<div class="tit">
					<p>주름개선효과 평가</p>
						<div class="img">
							<img src="../../images/sub/img_tit_arrow.gif" />
            				<img src="../../images/sub/img_tit_arrow_on.gif" style="display: none"/>
            			</div>
				</div>
				<div class="select_list">
					<ul>
						<li data-index="0" class="on"><a href="">주름 개선 효과 평가</a></li>
						<li data-index="1"><a href="">미백 효과 평가</a></li>
						<li data-index="2"><a href="">피부 탄력 개선 효과 평가</a></li>
						<li data-index="3"><a href="">피부 결 개선효과 평가</a></li>
						<li data-index="4"><a href="">보습 효과 평가</a></li>
						<li data-index="5"><a href="">각질 개선 효과 평가</a></li>
					</ul>
					<ul>
						<li data-index="6"><a href="">모공 평가</a></li>
						<li data-index="7"><a href="">투명도 및 윤기 개선효과 평가</a></li>
						<li data-index="8"><a href="">민감성 피부 평가</a></li>
						<li data-index="9"><a href="">피부혈행 개선효과</a></li>
						<li data-index="10"><a href="">다크서클 완화 효과 평가</a></li>
						<li data-index="11"><a href="">피부장벽강화 및 손상개선효과</a></li>
					</ul>
					<ul>
						<li data-index="12"><a href="">피부 세정 효과 평가</a></li>
						<li data-index="13"><a href="">메이크업 제품의 효능 평가</a></li>
						<li data-index="14"><a href="">셀룰라이트 개선 효과 평가</a></li>
						<li data-index="15"><a href="">붓기 완화 효과 평가</a></li>
						<li data-index="16"><a href="">가슴탄력 개선효과평가</a></li>
						<li data-index="17"><a href="">여드름 피부 개선효과 평가</a></li>
					</ul>
					<ul>
						<li data-index="18"><a href="">여드름성 피부 사용 적합성 평가</a></li>
						<li data-index="19"><a href="">비듬 및 가려움 개선 효과 평가</a></li>
						<li data-index="20"><a href="">두피 생리 개선 효과 평가</a></li>
						<li data-index="21"><a href="">모발 생리 개선 효과 평가</a></li>
						<li data-index="22"><a href="">액취방지 및 땀 억제 효과 평가</a></li>

					</ul>
				</div>
			</div>
			<!-- <ul class="tab">
				<li data-index="0" class="bl on"><a href="#">주름 개선 효과 평가</a></li>
				<li data-index="1"><a href="#">미백 효과 평가</a></li>	
				<li data-index="2" class="pt10"><a href="#">탄력 및 피부 처짐<br>개선효과 평가</a></li>	
				<li data-index="3" class="pt10"><a href="#">인체피부 결<br>개선 효과 평가</a></li>	
				<li data-index="4"><a href="#">보습 효과 평가</a></li>
				<li data-index="5"class="bl" ><a href="#">각질 개선 효과 평가</a></li>
				<li data-index="6"><a href="#">모공 평가</a></li>	
				<li data-index="7" class="pt10"><a href="#">투명도 및 윤기<br>개선효과 평가</a></li>	
				<li data-index="8"><a href="#">인체피부 민감성 피부 평가</a></li>
				<li data-index="9"><a href="#">피부혈행 개선효과</a></li>
				<li data-index="10" class="bl pt10"><a href="#">다크서클 완화<br>효과 평가</a></li>
				<li data-index="11" class="pt10"><a href="#">피부장벽강화및 피부 손상<br>개선 효과 평가</a></li>	
				<li data-index="12"><a href="#">피부 세정 효과 평가</a></li>	
				<li data-index="13" class="pt10"><a href="#">메이크업 제품의<br>효능 평가</a></li>
				<li data-index="14" class="pt10"><a href="#">셀룰라이트<br>개선 효과 평가</a></li>
				<li data-index="15" class="bl pt10"><a href="#">붓기 완화<br>효과 평가</a></li>	
				<li data-index="16" class="pt10"><a href="#">가슴탄력 및 처짐 개선<br>효과 평가</a></li>	
				<li data-index="17" class="bb pt10"><a href="#">여드름 피부<br>개선효과 평가</a></li>	
				<li data-index="18" class="bb pt10"><a href="#">여드름성 피부 사용 적합성 평가<br><span class="ls0">(Non-Comedogenicity)</span></a></li>	
				<li data-index="19" class="bb pt10"><a href="#">비듬 및 가려움<br>개선 효과 평가</a></li>	
				<li data-index="20" class="bl bb pt10"><a href="#">두피 생리 개선<br>효과 평가</a></li>
				<li data-index="21" class="bb pt10"><a href="#">모발 생리 개선<br>효과 평가</a></li>	
				<li data-index="21" class="bb pt10"><a href="#">인체피부 액취방지 및<br>땀 억제 효과 평가</a></li>	

			</ul> -->
			<div class="eva_tit">
				<span class="bar"></span>
				<p>평가항목설명</p>
			</div>
			<div class="evaluation_box" id="box01" data-index="0">
				<ul class="list">
					<li>
						<div class="list01">
							<p>주름 개선<br>효과 평가</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->육안 평가</li>
							<li><!-- <span class="bg"></span> -->피부 주름 파라미터 분석</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>시험기간은 시험디자인에<br>따라 다양하게 정할 수 있음. </p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box02" data-index="1">
				<ul class="list">
					<li>
						<div class="list01">
							<p>미백<br>효과 평가</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->육안 평가</li>
							<li><!-- <span class="bg"></span> -->피부 색 측정</li>
							<li><!-- <span class="bg"></span> -->멜라닌 수 측정</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>시험기간은 시험디자인에<br>따라 다양하게 정할 수 있음. </p>
						</div>
					</li>
				</ul>
			</div>	
			<div class="evaluation_box" id="box03" data-index="2">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>탄력 및 피부 처짐<br>개선효과 평가</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->피부 탄력 측정</li>
							<li><!-- <span class="bg"></span> -->피부 처짐 분석</li>
							<li><!-- <span class="bg"></span> -->진피 친밀도 분석</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>시험기간은 시험디자인에<br>따라 다양하게 정할 수 있음. </p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box04" data-index="3">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>인체피부 결 개선<br>효과 평가</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->피부 결 평가</li>
							<li><!-- <span class="bg"></span> --><span class="ls0">2D &amp; 3D</span> 피부 결 측정</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>시험기간은 시험디자인에<br>따라 다양하게 정할 수 있음. </p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box05" data-index="4">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>보습<br>효과 평가</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->피부 수분량 측정</li>
							<li><!-- <span class="bg"></span> -->피부 각질량 측정</li>
							<li><!-- <span class="bg"></span> -->경피수분손실량 측정</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>시험기간은 시험디자인에<br>따라 다양하게 정할 수 있음. </p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box06" data-index="5">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>각질 개선<br>효과 평가</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->피부 각질량 분석</li>
							<li><!-- <span class="bg"></span> -->각질 단백질량 분석</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>시험기간은 시험디자인에<br>따라 다양하게 정할 수 있음. </p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box07" data-index="6">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>모공 평가</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->모공 크기 분석</li>
							<li><!-- <span class="bg"></span> -->모공 개수 분석</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>시험기간은 시험디자인에<br>따라 다양하게 정할 수 있음. </p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box08" data-index="7">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>투명도 및 윤기<br>개선효과 평가</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->이미지를 이용한 윤기 평가</li>
							<li><!-- <span class="bg"></span> -->피부 투명도 측정</li>
							<li><!-- <span class="bg"></span> -->피부 윤기 측정</li>
							<li><!-- <span class="bg"></span> -->피부 색 측정</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>시험기간은 시험디자인에<br>따라 다양하게 정할 수 있음. </p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box09" data-index="8">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>인체피부 민감성 피부<br>평가</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><span class="bg"></span>자극감 평가</li>
							<li><!-- <span class="bg"></span> --><span class="ls0">CPT Value</span> 측정</li>
							<li><!-- <span class="bg"></span> -->피부 수분량 측정</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>시험기간은 시험디자인에<br>따라 다양하게 정할 수 있음. </p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box09" data-index="9">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>피부혈행<br>개선효과</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->안면 홍조 유도</li>
							<li><!-- <span class="bg"></span> -->육안 평가</li>
							<li><!-- <span class="bg"></span> -->피부 홍반도 측정</li>
							<li><!-- <span class="bg"></span> -->피부 온도 측정</li>
							<li><!-- <span class="bg"></span> -->피부 혈류량 측정</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>시험기간은 시험디자인에<br>따라 다양하게 정할 수 있음. </p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box10" data-index="10">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>다크서클 완화<br>효과 평가</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->멜라닌과 헤모글로빈 지수 측정</li>
							<li><!-- <span class="bg"></span> -->피부 색 측정</li>
							<li><!-- <span class="bg"></span> -->혈류량 측정</li>
							<li><!-- <span class="bg"></span> -->진피층 두께 측정</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>시험기간은 시험디자인에<br>따라 다양하게 정할 수 있음. </p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box11" data-index="11">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>피부장벽강화및<br>피부 손상 개선<br>효과 평가</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->육안 평가</li>
							<li><!-- <span class="bg"></span> -->홍반도 측정</li>
							<li><!-- <span class="bg"></span> -->경피수분손실량 측정</li>
							<li><!-- <span class="bg"></span> -->피부 거칠기 측정</li>
							<li><!-- <span class="bg"></span> -->피부 혈류량 측정</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>시험기간은 시험디자인에<br>따라 다양하게 정할 수 있음. </p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box12" data-index="12">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>피부 세정 효과<br>평가</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->모공상태 평가</li>
							<li><!-- <span class="bg"></span> -->피부 수분량 측정</li>
							<li><!-- <span class="bg"></span> -->피부 유분량 측정</li>
							<li><!-- <span class="bg"></span> -->피부 각질량 측정</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>시험기간은 시험디자인에<br>따라 다양하게 정할 수 있음. </p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box13" data-index="13">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>메이크업 제품의<br>효능 평가</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->피부 거칠기 평가</li>
							<li><!-- <span class="bg"></span> -->피부 색 커버력 평가</li>
							<li><!-- <span class="bg"></span> -->밀착력 분석</li>
							<li><!-- <span class="bg"></span> -->발림성 및 지속력 평가</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>시험기간은 시험디자인에<br>따라 다양하게 정할 수 있음. </p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box14" data-index="14">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>셀룰라이트<br>개선 효과 평가</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->셀룰라이트 평가</li>
							<li><!-- <span class="bg"></span> -->진피-피하지방층의 경계면<br>길이 측정</li>
							<li><!-- <span class="bg"></span> -->대퇴부 셀룰라이트 볼륨 분석</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>시험기간은 시험디자인에<br>따라 다양하게 정할 수 있음. </p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box15" data-index="15">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>붓기 완화<br>효과 평가</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->신체둘레 측정 및 분석</li>
							<li><!-- <span class="bg"></span> -->부피 분석</li>
							<li><!-- <span class="bg"></span> -->진피층 수분량 분석</li>
							<li><!-- <span class="bg"></span> -->진치 치밀도 측정</li>
							<li><!-- <span class="bg"></span> -->점탄성 측정</li>
							<li><!-- <span class="bg"></span> -->피부 온도 측정</li>
							<li><!-- <span class="bg"></span> -->혈류량 측정</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>시험기간은 시험디자인에<br>따라 다양하게 정할 수 있음. </p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box16" data-index="16">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>가슴탄력 및 처짐 개선<br>효과 평가</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->체중 측정</li>
							<li><!-- <span class="bg"></span> -->가슴둘레 측정</li>
							<li><!-- <span class="bg"></span> -->유두점의 각도<br>유두간의 거리 분석</li>
							<li><!-- <span class="bg"></span> -->가슴 처짐 평가</li>
							<li><!-- <span class="bg"></span> -->가슴 부피 측정</li>
							<li><!-- <span class="bg"></span> -->가슴 탄력 측정</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>시험기간은 시험디자인에<br>따라 다양하게 정할 수 있음. </p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box17" data-index="17">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>여드름 피부<br>개선효과 평가</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->병변 계수</li>
							<li><!-- <span class="bg"></span> -->피부 유분량 측정</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>시험기간은 시험디자인에<br>따라 다양하게 정할 수 있음. </p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box18" data-index="18">
				<ul class="list">
					<li>
						<div class="list01 pt75">
							<a href="#Top">
								<p>여드름성 피부 사용<br>적합성 평가<br><span class="ls0">(Non-Comedogenicity)</span></p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->병변 계수</li>
							<li><!-- <span class="bg"></span> -->피부 유분량 측정</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>시험기간은 시험디자인에<br>따라 다양하게 정할 수 있음. </p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box19" data-index="19">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>비듬 및 가려움<br>개선 효과 평가</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->두정부 사진촬영</li>
							<li><!-- <span class="bg"></span> -->두피 확대 및 비듬 촬영 </li>
							<li><!-- <span class="bg"></span> -->비듬 사진 평가 및 개선도 평가</li>
							<li><!-- <span class="bg"></span> -->비듬 양 측정</li>
							<li><!-- <span class="bg"></span> -->가려움 개선도 평가</li>
							<li><!-- <span class="bg"></span> --><span class="ls0">Squamometry</span> 분석</li>
							<li><!-- <span class="bg"></span> -->효모균 개수 분석</li>
							<li><!-- <span class="bg"></span> -->염증성 사이토카인 분석</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>시험기간은 시험디자인에<br>따라 다양하게 정할 수 있음. </p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box20" data-index="20">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>두피 생리 개선<br>효과 평가</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->두피 타입 사진 평가</li>
							<li><!-- <span class="bg"></span> -->두피 상태 사진 평가</li>
							<li><!-- <span class="bg"></span> -->두피 수분량 측정</li>
							<li><!-- <span class="bg"></span> -->두피 수분 증발량 측정</li>
							<li><!-- <span class="bg"></span> -->두피 피지량 측정</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>시험기간은 시험디자인에<br>따라 다양하게 정할 수 있음. </p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box21" data-index="21">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>모발 생리 개선<br>효과 평가</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->모발 손상도 사진평가</li>
							<li><!-- <span class="bg"></span> -->백모 비율 사진평가</li>
							<li><!-- <span class="bg"></span> -->모발 밀도 사진평가</li>
							<li><!-- <span class="bg"></span> -->윤기 링 분석 및 사진평가</li>
							<li><!-- <span class="bg"></span> -->큐티클 촬영 및 손상도 사진평가</li>
							<li><!-- <span class="bg"></span> -->모발 인장하중 측정</li>
							<li><!-- <span class="bg"></span> -->모발 굽힘 저항력 측정</li>
							<li><!-- <span class="bg"></span> -->모발 색상 변화 및 선명도 평가</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>시험기간은 시험디자인에<br>따라 다양하게 정할 수 있음. </p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box22" data-index="22">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>인체피부 액취방지 및<br>땀 억제 효과 평가</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->발한량 측정</li>
							<li><!-- <span class="bg"></span> -->땀 억제 사진 측정</li>
							<li><!-- <span class="bg"></span> -->액취 정도 평가</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>30명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>시험기간은 시험디자인에<br>따라 다양하게 정할 수 있음. </p>
						</div>
					</li>
				</ul>
			</div>
			<!-- <script>
			  $(function() {
			  	$('.evaluation_box').hide();
			  	$('.evaluation_box').eq(0).show()
				$('.select_list ul li').click(function () {
					$('.select_list ul li').removeClass('on');
					$(this).addClass('on');
					var index = $(this).attr('data-index');
					$('.tit').php($(this).find('a').text());
					$('.evaluation_box').hide();
					$('.evaluation_box').eq(index).show();
					$('.select_list').hide();
					return false;
				});
			  });
			  
			</script> -->

			<script>
	        $(document).ready(function(){
	             $(".select_box .tit").click(function() {
	             $(".select_list").toggle();
	                    $(this).find('img').toggle();
	             });
	             $('.select_list ul li').click(function () {
					$('.select_list ul li').removeClass('on');
					$(this).addClass('on');
					$(".select_box .tit").find('img').toggle();
					var index = $(this).attr('data-index');
					$('.tit p').html($(this).find('a').text());
					$('.evaluation_box').hide();
					$('.evaluation_box').eq(index).show();
					$('.select_list').toggle();
	                    $(this).find('img').toggle();
					return false;
				});
	          });
	          
       		</script>

		</div>
	</div><!-- container -->
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>