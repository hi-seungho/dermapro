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
			<span class="ls0">HOME</span> <span>&gt;</span> 시험분야 <span>&gt;</span> <span class="bold">기능성 평가</span>
		</div>
	</div>
	
	<ul class="sub_top_menu five">
		<li><a href="Anti_aging.php">유효성 평가</a></li>
		<li class="on"><a href="cosmeceuticals.php">기능성 평가</a></li>
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
				<h3>기능성 평가</h3>
			</div>
			<div class="select_box">
				<div class="tit">기능성 화장품의 주름개선 효과평가</div>
				<div class="select_list h02">
					<ul>
						<li data-index="0" class="on"><a href="">기능성 화장품의 주름개선 효과평가</a></li>
						<li data-index="4"><a href="">내수성 자외선 차단지수 평가</a></li>
						<li data-index="8"><a href="">기능성 식품의 주름개선 효과 평가</a></li>				
					</ul>
					<ul>
						<li data-index="1"><a href="">기능성 화장품의 미백 효과</a></li>
						<li data-index="5"><a href="">내한성 자외선 차단지수 평가</a></li>
						<li data-index="9"><a href="">기능성 식품의 미백 효과 평가</a></li>
					</ul>
					<ul>
						<li data-index="2"><a href="">자외선 A 차단등급 평가</a></li>
						<li data-index="6"><a href="">탈모방지 및 양모효과 평가</a></li>
						<li data-index="10"><a href="">기능성식품의 피부 수분 개선 효과 평가</a></li>
					</ul>
					<ul>
						<li data-index="3"><a href="">자외선 B 차단지수 평가</a></li>
						<li data-index="7"><a href="">치아 미백 효과 평가</a></li>
						<li class="lh" data-index="11"><a href="">기능성 식품의 자외선에 의한 피부손상으로부터<br>피부 건강 유지 효과평가</a></li>
					</ul>
				</div>
			</div>
			<!-- ul class="tab tab02">
				<li data-index="0" class="bl on"><a href="#box01">기능성 화장품의<br>주름개선효과</a></li>
				<li data-index="1"><a href="#box02">기능성 화장품의<br>미백 효과</a></li>	
				<li data-index="2" class="pt19"><a href="#box03">자외선 A 차단등급 평가</a></li>	
				<li data-index="3" class="pt19"><a href="#box04">자외선 B 차단지수 평가</a></li>	
				<li data-index="4" class="pt19"><a href="#box05">내수성 자외선 차단지수 평가</a></li>
				<li data-index="5" class="bl pt19"><a href="#box06">내한성 자외선 차단지수 평가</a></li>
				<li><a href="#box07">여드름 피부<br>개선효과 평가</a></li>	
				<li><a href="#box08">여드름성 피부 사용<br>적합성 평가</a></li>	
				<li data-index="6" class="pt10"><a href="#box07">탈모방지 및<br>양모효과 평가</a></li>	
				<li><a href="#box10">비듬 및 가려움<br>개선효과 평가</a></li>
				<li class="bb"><a href="#box17">체취 방지효과 평가</a></li>	
				<li class="bl pt19"><a href="#box11">액취방지 효과 평가</a></li>
				<li data-index="7" class="bb pt19"><a href="#box08">치아 미백 효과 평가</a></li>	
				<li data-index="8" class="bb"><a href="#box09">기능성 식품의<br>주름개선 효과 평가</a></li>	
				<li data-index="9" class="bb"><a href="#box10">기능성 식품의<br>미백 효과 평가</a></li>	
				<li data-index="10" class="bl bb"><a href="#box11">기능성식품의 피부 수분<br>개선 효과 평가</a></li>
				<li data-index="11" class="bb pt2"><a href="#box12">기능성 식품의 자외선에<br>의한 피부손상으로부터<br>피부 건강 유지 효과</a></li>
			</ul> -->
			<div class="eva_tit">
				<span class="bar"></span>
				<p>평가항목설명</p>
			</div>
			<div class="evaluation_box" id="box01" data-index="0">
				<ul class="list">
					<li>
						<div class="list01">
							<p>기능성 화장품의<br>주름개선효과평가</p>
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
							<p>12주</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box02" data-index="1">
				<ul class="list">
					<li>
						<div class="list01">
							<p>기능성 화장품의<br>미백효과 평가</p>
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
							<p>8~10주</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box03" data-index="2">
				<ul class="list">
					<li>
						<div class="list01">
							<p>자외선 A<br>차단등급 평가</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->육안 평가</li>
							<li><!-- <span class="bg"></span> -->PA 지수 측정</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>13명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>2주</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box04" data-index="3">
				<ul class="list">
					<li>
						<div class="list01">
							<p>자외선 B<br>차단지수평가</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->육안 평가</li>
							<li><!-- <span class="bg"></span> --><span class="ls0">SPF</span> 지수 측정</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>13명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>2주</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box05" data-index="4">
				<ul class="list">
					<li>
						<div class="list01">
							<p>내수성 자외선<br>차단지수 평가</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->육안 평가</li>
							<li><!-- <span class="bg"></span> -->내수성 <span class="ls0">SPF</span> 지수 측정</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>13명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>4주</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box06" data-index="5">
				<ul class="list">
					<li>
						<div class="list01">
							<p>내한성 자외선<br>차단지수 평가</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->육안 평가</li>
							<li><!-- <span class="bg"></span> -->내한성 <span class="ls0">SPT</span> 지수 측정</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>13명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>4주</p>
						</div>
					</li>
				</ul>
			</div>
			
			<div class="evaluation_box" id="box07" data-index="6">
				<ul class="list">
					<li>
						<div class="list01">
							<p>탈모방지 및<br>양모효과 평가</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->사진 평가</li>
							<li><!-- <span class="bg"></span> --><span class="ls0">Phototrichogram</span> 분석</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>40명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>6개월</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box08" data-index="7">
				<ul class="list">
					<li>
						<div class="list01">
							<p>치아미백효과<br>평가</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->치아 색상 평가</li>
							<li><!-- <span class="bg"></span> -->전기 치수 검사</li>
							<li><!-- <span class="bg"></span> -->치주 건강 평가</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>50명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>-</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box09" data-index="8">
				<ul class="list">
					<li>
						<div class="list01">
							<p>기능성식품의<br>주름 개선 효과 평가</p>
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
							<p>30명 이상<br><span class="ls0">(each group)</span></p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>24주</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box10" data-index="9">
				<ul class="list">
					<li>
						<div class="list01">
							<p>기능성식품의<br>미백 효과 평가</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->육안 평가</li>
							<li><!-- <span class="bg"></span> -->피부 색 측정</li>
							<li><!-- <span class="bg"></span> -->멜라닌 지수 측정</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
							<li><!-- <span class="bg"></span> -->안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>30명 이상<br><span class="ls0">(each group)</span></p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>12주</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box11" data-index="10">
				<ul class="list">
					<li>
						<div class="list01">
							<p>기능성식품의<br>피부 수분 개선<br> 효과 평가</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->피부 수분량 측정</li>
							<li><!-- <span class="bg"></span> -->피부 각질량 측정</li>
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
							<p>4주</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box12" data-index="11">
				<ul class="list">
					<li>
						<div class="list01 pt75">
							<p>기능성식품의 자외선에<br>의한 피부손상으로<br>부터 피부 건강유지<br>효과 평가</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->육안 평가</li>
							<li><!-- <span class="bg"></span> -->수분량 측정</li>
							<li><!-- <span class="bg"></span> -->주름 측정</li>
							<li><!-- <span class="bg"></span> -->피부 색 측정</li>
							<li><!-- <span class="bg"></span> -->윤기 측정</li>
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
							<p>12주</p>
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