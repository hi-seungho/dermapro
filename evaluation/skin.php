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
			<span class="ls0">HOME</span> <span>&gt;</span> 시험분야 <span>&gt;</span> <span class="bold">안전성 평가</span>
		</div>
	</div>
	
	<ul class="sub_top_menu five">
		<li><a href="Anti_aging.php">유효성 평가</a></li>
		<li><a href="cosmeceuticals.php">기능성 평가</a></li>
		<li class="on"><a href="skin.php">안전성 평가</a></li>
		<li><a href="sensuality.php">소비자 사용성 평가</a></li>
		<li><a href="invitro.php"><span class="italic">in vitro</span> 평가</a></li>
	</ul>
	<div id="container">
		<div id="top">
			<a href="#"><img src="../../images/sub/img_top.jpg" alt="Top"></a>
		</div>
		<div class="con">
			<div class="tit_bg">
				<h3>안전성 평가</h3>
			</div>
			<div class="select_box">
				<div class="tit">
					<p>인체피부 일차자극 시험</p>
					<div class="img">
						<img src="../../images/sub/img_tit_arrow.gif" />
            			<img src="../../images/sub/img_tit_arrow_on.gif" style="display: none"/>
            		</div>
				</div>
					<div class="select_list h03">
						<ul>
							<li data-index="0" class="on"><a href="">인체피부 일차자극 시험</a></li>
							<li data-index="4"><a href="">인체피부 누적 자극 시험</a></li>
							<li data-index="8"><a href="">인체피부 사용성 시험</a></li>
						</ul>
						<ul>
							<li data-index="1"><a href="">인체피부 누적자극 및 감작성 시험</a></li>
							<li data-index="5"><a href="">인체피부 눈가 사용성 시험</a></li>		
							<li data-index="9"><a href="">인체피부 광감작성 시험</a></li>
						</ul>
						<ul>
							<li data-index="2"><a href="">인체피부 자극감 시험</a></li>
							<li data-index="6"><a href="">인체피부 안자극 시험</a></li>
							<li data-index="10"><a href="">인체피부 향균효과 시험</a></li>
						</ul>
						<ul>
							<li data-index="3"><a href="">인체피부 광독성 시험</a></li>
							<li data-index="7"><a href="">인체피부 이상반응 시험</a></li>
							<li data-index="11"><a href="">인체피부 민감성 피부 평가 시험</a></li>
						</ul>
					</div>
				</div>

<!-- 
			<ul class="tab tab02">
				<li class="bl"><a href="#box01">기능성 식품의<br>주름개선효과평가</a></li>
				<li><a href="#box02">기능성 식품의<br>미백 효과평가</a></li>	
				<li><a href="#box03">기능성식품의 피부<br>수분 개선 효과 평가</a></li>	
				<li class="pt2"><a href="#box04">기능성식품의 자외선에 의한<br>피부손상으로부터 피부 건강<br>유지 효과 평가</a></li>	
				<li data-index="0" class="on bl pt19"><a href="#box01">인체피부 일차자극
시험</a></li>
				<li data-index="1" class="pt10"><a href="#box02">인체피부 누적자극 및<br>감작성 시험</a></li>
				<li data-index="2" class="pt19"><a href="#box03">인체피부 자극감
시험</a></li>	
				<li data-index="3" class="pt19"><a href="#box04">인체피부 광독성
시험</a></li>	
				<li data-index="4" class="pt19"><a href="#box05">인체피부 누적 자극
시험</a></li>	
				<li data-index="5" class="bl pt19"><a href="#box06">인체피부 눈가 사용성
시험</a></li>
				<li data-index="6" class="pt19"><a href="#box07">인체피부
안자극 시험</a></li>
				<li data-index="7" class="bb pt19"><a href="#box08">인체피부 이상반응
시험</a></li>
				<li data-index="8" class="bb pt19"><a href="#box09">인체피부 사용성
시험</a></li>	
				<li data-index="9" class="bb pt19"><a href="#box10">인체피부 광감작성
시험</a></li>	
				<li data-index="10" class="bl bb pt19"><a href="#box11">인체피부 향균효과
시험</a></li>
				<li data-index="11" class="bb pt19"><a href="#box12">인체피부 민감성 피부
평가</a></li>	

			</ul> -->
			<div class="eva_tit">
				<span class="bar"></span>
				<p>평가항목설명</p>
			</div>
			<!-- <div class="evaluation_box" id="box01" data-index="0">
				<ul class="list">
					<li>
						<div class="list01">
							<p>기능성 식품의<br>주름개선효과평가</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><span class="bg"></span>육안 평가</li>
							<li><span class="bg"></span>피부 주름 파라미터 분석</li>
							<li><span class="bg"></span>설문 평가</li>
							<li><span class="bg"></span>안전성 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>30명 이상<br>(<span class="ls0">each group</span>)</p>
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
			<div class="evaluation_box" id="box02">
				<ul class="list">
					<li>
						<div class="list01">
							<p>기능성식품의<br>미백효과 평가</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><span class="bg"></span>육안 평가</li>
							<li><span class="bg"></span>피부 색 측정</li>
							<li><span class="bg"></span>멜라닌 수 측정</li>
							<li><span class="bg"></span>설문 평가</li>
							<li><span class="bg"></span>안전성 평가</li>

						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>30명 이상<br>(<span class="ls0">each group</span>)</p>
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
			<div class="evaluation_box" id="box03">
				<ul class="list">
					<li>
						<div class="list01">
							<p>기능성식품의<br>피부 수분 개선<br>효과 평가</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><span class="bg"></span>피부 수분량 측정</li>
							<li><span class="bg"></span>피부 각질량 측정</li>
							<li><span class="bg"></span>설문 평가</li>
							<li><span class="bg"></span>안전성 평가</li>
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
			<div class="evaluation_box" id="box04">
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
							<li><span class="bg"></span>육안 평가</li>
							<li><span class="bg"></span>수분량 측정</li>
							<li><span class="bg"></span>주름 측정</li>
							<li><span class="bg"></span>피부 색 측정</li>
							<li><span class="bg"></span>윤기 측정</li>
							<li><span class="bg"></span>설문 평가</li>
							<li><span class="bg"></span>안전성 평가</li>
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
			</div> -->
			<div class="evaluation_box" id="box01" data-index="0">
				<ul class="list">
					<li>
						<div class="list01">
							<p>인체피부 일차자극<br>시험</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<!-- <li><span class="bg"></span>일차자극 평가</li> -->
							<li><!-- <span class="bg"></span> -->24시간 또는 48시간 첩포</li>
							<li><!-- <span class="bg"></span> -->D2, D3시점에서 관찰</li>
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
							<p>1주</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box02" data-index="1">
				<ul class="list">
					<li>
						<div class="list01">
							<p>인체피부 누적자극 및<br>감작성 시험</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> --><span class="ls0">Induction period</span> :<br>3주간 9회 첩포</li>
							<li><!-- <span class="bg"></span> --><span class="ls0">Resting period</span> :<br>2주간 무처치</li>
							<li><!-- <span class="bg"></span> --><span class="ls0">Challenge period</span> :<br>첩포 후 감작성 유무 관찰</li>
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
							<p>6주</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box03" data-index="2">
				<ul class="list">
					<li>
						<div class="list01">
							<p>인체피부 자극감<br>시험</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> --><span class="ls0">Stinger</span>, 온도 <span class="ls0">20℃</span>, 습도 <span class="ls0">50%</span><br> 
							유지되는 항온항습실에서<br>
							처리 후 자극감 측정</li>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>10명 이상</p>
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
							<p>인체피부 광독성<br>시험</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->24시간 첩포 시행 후<br>광 조사 (<span class="ls0">UVA</span>)</li>
							<li><!-- <span class="bg"></span> -->D1, D2, D3 시점에서 관찰</li>
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
							<p>1주</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box05" data-index="4">
				<ul class="list">
					<li>
						<div class="list01">
							<p>인체피부 누적 자극<br>시험</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->격일로 3주간 9회 첩포</li>
							<li><!-- <span class="bg"></span> -->매 첩포 제거 시점 관찰</li>
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
							<p>3주</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box06" data-index="5">
				<ul class="list">
					<li>
						<div class="list01">
							<p>인체피부 눈가 사용성<br>시험</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->실제 사용조건에서<br>4주간 제품사용</li>
							<li><!-- <span class="bg"></span> -->4주 후 주관적/객관적 자극평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>25명 이상</p>
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
							<p>인체피부<br>안자극 시험</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->시험제품 도포 후 설문평가</li>
							<li><!-- <span class="bg"></span> -->임상평가, 플루오레신,<br>리사마인그린 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>35명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>1주</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box08" data-index="7">
				<ul class="list">
					<li>
						<div class="list01">
							<p>인체피부 이상반응<br>시험</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->제품 3일 사용 후 관찰</li>
							<li><!-- <span class="bg"></span> -->24, 48, 72시간 후 관찰</li>
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
							<p>3일</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box09" data-index="8">
				<ul class="list">
					<li>
						<div class="list01">
							<p>인체피부 사용성<br>시험</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->실제 사용조건에서<br>4주간 제품사용</li>
							<li><!-- <span class="bg"></span> -->4주 후 주관적/객관적 자극평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>25명 이상</p>
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
			<div class="evaluation_box" id="box10" data-index="9">
				<ul class="list">
					<li>
						<div class="list01">
							<p>인체피부 광감작성<br>시험</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> --><span class="ls0">Induction period</span> :<br>
							3주간 6회 첩포 및 광조사</li>
							<li><!-- <span class="bg"></span> --><span class="ls0">Resting period</span> :<br>
							2주간 무처치</li>
							<li><!-- <span class="bg"></span> --><span class="ls0">Challenge period</span> : <br>
							첩포 후 광조사 후 관찰</li>
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
							<p>6주</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box11" data-index="10">
				<ul class="list">
					<li>
						<div class="list01">
							<p>인체피부 향균효과<br>시험</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->대장균(<span class="ls0">Escherichia coli</span>)</li>
							<li><!-- <span class="bg"></span> -->황색포도상구균<br>
							(<span class="ls0">Staphylococcus aureus</span>)</li>
							<li><!-- <span class="bg"></span> -->제품 사용 전, 후 총 균수 계수</li>
							<li><!-- <span class="bg"></span> -->설문 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="../../images/sub/img_boxtit02.png" alt="피험자 수">
							<p>15명 이상</p>
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
			<div class="evaluation_box" id="box12" data-index="11">
				<ul class="list">
					<li>
						<div class="list01">
							<p>인체피부 민감성 피부<br>평가</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
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
							<p>4주</p>
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