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
			<span class="ls0">HOME</span> <span>&gt;</span> 시험분야 <span>&gt;</span> <span class="bold"><span class="ls0 italic">in vitro</span> 평가</span>
		</div>
	</div>
	
	<ul class="sub_top_menu five">
		<li><a href="Anti_aging.php">유효성 평가</a></li>
		<li><a href="cosmeceuticals.php">기능성 평가</a></li>
		<li><a href="skin.php">안전성 평가</a></li>
		<li><a href="sensuality.php">소비자 사용성 평가</a></li>
		<li class="on"><a href="invitro.php"><span class="italic">in vitro</span> 평가</a></li>
	</ul>
	<div id="container">
		<div id="top">
			<a href="#"><img src="../../images/sub/img_top.jpg" alt="Top"></a>
		</div>
		<div class="con">
			<div class="tit_bg">
				<h3><span class="italic">in vitro</span> 평가</h3>
			</div>
			<div class="select_box">
				<div class="tit">
					<p><span class="ls0 italic">in vitro</span> 주름효력 평가시험</p>
					<div class="img">
						<img src="../../images/sub/img_tit_arrow.gif" />
            			<img src="../../images/sub/img_tit_arrow_on.gif" style="display: none"/>
            		</div>	
				</div>
				<div class="select_list h05">
					<ul>
						<li data-index="0" class="on"><a href=""><span class="ls0 italic">in vitro</span> 주름효력 평가시험</a></li>
						<li data-index="4"><a href="">생체외 경피흡수 평가시험</a></li>
					</ul>
					<ul>
						<li data-index="1"><a href=""><span class="ls0 italic">in vitro</span> 미백효력 평가시험</a></li>
						<li data-index="5"><a href=""><span class="ls0 italic">in vitro</span> 자외선A 차단지수평가시험</a></li>
					</ul>
					<ul>
						<li data-index="2"><a href=""><span class="ls0 italic">in vitro</span> 향산화 효력 평가시험</a></li>
						
						<li data-index="6"><a href="">식물 추출물 제조</a></li>
					</ul>
					<ul>
						<li data-index="3"><a href=""><span class="ls0 italic">in vitro</span> 항염증 효력 평가시험</a></li>
						<li data-index="7"><a href="">미세먼지 평가시험</a></li>
					</ul>
				</div>
			</div>





			<!-- <ul class="tab tab02">
				<li data-index="0" class="on bl pt10"><a href="#box01"><span class="ls0 italic">in vitro</span><br>주름효력 평가시험</a></li>
				<li data-index="1" class="pt10"><a href="#box02"><span class="ls0 italic">in vitro</span><br>미백효력 평가시험</a></li>
				<li data-index="2" class="bb pt10"><a href="#box03"><span class="ls0 italic">in vitro</span><br>향산화 효력
평가시험</a></li>		
				<li data-index="3" class="bb pt10"><a href="#box04"><span class="ls0 italic">in vitro</span><br>항염증 효력
평가시험</a></li>		
				<li data-index="4" class="bb pt19"><a href="#box05">생체외 경피흡수
평가시험</a></li>
				<li data-index="5" class="bl bb pt19"><a href="#box06">식물 추출물
제조</a></li>		
				<li data-index="6" class="bb pt10"><a href="#box07"><span class="ls0 italic">in vitro</span> 자외선B<br>차단지수평가시험</a></li>		
			</ul> -->
			<div class="eva_tit">
				<span class="bar"></span>
				<p>평가항목설명</p>
			</div>
			<div class="evaluation_box vitro_box" id="box01" data-index="0">
				<ul class="list">
					<li>
						<div class="list01">
							<p><span class="ls0 italic">in vitro</span><br>주름효력 평가시험</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->세포 독성 평가</li>
							<li><!-- <span class="bg"></span> -->세포 내 콜라겐 생성 평가</li>
							<li><!-- <span class="bg"></span> -->콜라게나제 (<span class="ls0">MMP-1</span>) 활성 억제 평가</li>
							<li><!-- <span class="bg"></span> -->젤라티나제 (<span class="ls0">MMP-2, 9</span>) 활성 억제 평가</li>
							<li><!-- <span class="bg"></span> -->엘라스타제 (<span class="ls0">MMP-12</span>) 활성 억제 평가</li>

						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>10주</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box vitro_box" id="box02" data-index="1">
				<ul class="list">
					<li>
						<div class="list01">
							<p><span class="ls0 italic">in vitro</span><br>미백효력 평가시험</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> --><span class="ls0 italic">in vitro</span> 타이로시나제(<span class="ls0">Tyrosinase</span>) 활성 억제 평가</li>
							<li><!-- <span class="bg"></span> --><span class="ls0 italic">in vitro</span> DOPA</span> 산화활성 억제 평가</li>
							<li><!-- <span class="bg"></span> -->세포 독성 평가</li>
							<li><!-- <span class="bg"></span> -->세포 내 멜라닌 생성저해 평가</li>
							<li><!-- <span class="bg"></span> -->인공 피부모델에서 미백 효력 평가</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>10주</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box vitro_box" id="box03" data-index="2">
				<ul class="list">
					<li>
						<div class="list01">
							<p><span class="ls0 italic">in vitro</span><br>향산화 효력<br>평가시험</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> --><span class="ls0">DPPH free radical</span> 소거능 평가</li>
							<li><!-- <span class="bg"></span> --><span class="ls0">ABTS radical</span> 소거능 평가</li>
							<li><!-- <span class="bg"></span> -->총 페놀 함량 측정</li>
						</ul>
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
			<div class="evaluation_box vitro_box" id="box04" data-index="3">
				<ul class="list">
					<li>
						<div class="list01">
							<p><span class="ls0 italic">in vitro</span><br>항염증 효력<br>평가시험</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->세포 독성 평가</li>
							<li><!-- <span class="bg"></span> -->세포 내 <span class="ls0">Nitric Oxide</span> 생성 억제 활성 평가</li>
							<li><!-- <span class="bg"></span> --><span class="ls0">Proinflammatory Cytokine(IL-1β)</span> 분비량 측정</li>
							<li><!-- <span class="bg"></span> --><span class="ls0">Proinflammatory Cytokine(IL-6)</span> 분비량 측정</li>
							<li><!-- <span class="bg"></span> --><span class="ls0">Proinflammatory Cytokine(TNF-α)</span> 분비량 측정</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>10주</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box vitro_box" id="box05" data-index="4">
				<ul class="list">
					<li>
						<div class="list01">
							<p>생체외 경피흡수<br>평가시험</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> --><span class="ls0">Modified Franz cell system</span></li>
							<li><!-- <span class="bg"></span> --><span class="ls0">HPLC</span> 분석</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="../../images/sub/img_boxtit03.png" alt="시험 기간">
							<p>8주</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box vitro_box" id="box07" data-index="5">
				<ul class="list">
					<li>
						<div class="list01">
							<p><span class="ls0 italic">in vitro</span> 자외선A<br>차단지수평가시험</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> --><span class="ls0 italic">in vitro UVAPF</span> 측정</li>
							<li><!-- <span class="bg"></span> --><span class="ls0">SPF290AS®</li>
						</ul>
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
			<div class="evaluation_box vitro_box" id="box06" data-index="6">
				<ul class="list">
						<div class="list01">
							<p>식물 추출물<br>제조</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->용매추출법</li>
							<li><!-- <span class="bg"></span> -->열탕추출법</li>
							<li><!-- <span class="bg"></span> -->압착법<li>
						</ul>
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
			<div class="evaluation_box vitro_box" id="box07" data-index="7">
				<ul class="list">
						<div class="list01">
							<p>미세먼지<br>평가시험</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="../../images/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->육안평가</li>
							<li><!-- <span class="bg"></span> -->SSM 측정</li>
						</ul>
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