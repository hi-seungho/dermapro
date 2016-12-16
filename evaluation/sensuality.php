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
			<span class="ls0">HOME</span> <span>&gt;</span> 시험분야 <span>&gt;</span> <span class="bold">소비자 사용성 평가</span>
		</div>
	</div>
	
	<ul class="sub_top_menu five">
		<li><a href="Anti_aging.php">유효성 평가</a></li>
		<li><a href="cosmeceuticals.php">기능성 평가</a></li>
		<li><a href="skin.php">안전성 평가</a></li>
		<li class="on"><a href="sensuality.php">소비자 사용성 평가</a></li>
		<li><a href="invitro.php"><span class="italic">in vitro</span> 평가</a></li>
	</ul>
	<div id="container">
		<div id="top">
			<a href="#"><img src="../../images/sub/img_top.jpg" alt="Top"></a>
		</div>
		<div class="con">
			<div class="tit_bg">
				<h3>소비자 사용성 평가</h3>
			</div>
			<div class="select_box">
				<div class="tit">
					<p>선호도 검사</p>
					<div class="img">
						<img src="../../images/sub/img_tit_arrow.gif" />
            			<img src="../../images/sub/img_tit_arrow_on.gif" style="display: none"/>
            		</div>	
				</div>
				<div class="select_list h04">
					<ul>
						<li data-index="0" class="on"><a href="">선호도 검사</a></li>
					</ul>
					<ul>
						<li data-index="1"><a href="">차이식별 검사</a></li>
					</ul>
					<ul>
						<li data-index="2"><a href="">묘사분석평가</a></li>
					</ul>
				</div>
			</div>
			
			
			
			<!-- <ul class="tab tab02 tab03">
				<li data-index="0" class="on bb bl"><a href="#box01">선호도 검사</a></li>
				<li data-index="1" class="bb"><a href="#box02">차이식별 검사</a></li>	
				<li data-index="2" class="bb"><a href="#box03">묘사분석평가</a></li>	
			</ul> -->
			<div class="eva_tit">
				<span class="bar"></span>
				<p>평가항목설명</p>
			</div>
			<div class="evaluation_box" id="box01" data-index="0">
				<ul class="list">
					<li>
						<div class="list01">
							<p>선호도 검사</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->순위법<br>(<span class="ls0">ranking test</span>)<br>
								- 기호척도법<br>
								(<span class="ls0">hedonic scoring test</span>)<br>
								- 소비자 검사방법<br>
								(<span class="ls0">consumer useability test</span>)
								</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03 mb40">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>10~20명 이상<br>
								100명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04 mb50">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>2주~4주</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box02" data-index="1">
				<ul class="list">
					<li>
						<div class="list01">
							<p>차이식별 검사</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->특성 차이 분석<br>
							- 평점법 (<span class="ls0">scoring test</span>)<br>
							- 순위법 (<span class="ls0">ranking test</span>)<br>
							- 다시료 비교법<br>
							(<span class="ls0">multiple comparison test</span>)
							</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>10~20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>2주~4주</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box03" data-index="2">
				<ul class="list">
					<li>
						<div class="list01">
							<p>묘사분석 평가</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->정량적 묘사분석: <span class="ls0">QDA</span> 방법<br>
							(<span class="ls0">Quantitative <br>
							descriptive analysis</span>)
							</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>10~20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>2주~4주</p>
						</div>
					</li>
				</ul>
			</div>
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