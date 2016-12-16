<?php
include_once('./_common.php');
include_once(G5_LANG_PATH.'/head.php');
?>
	<div id="sub_top02">
		<div class="sub_tit">
			<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_subtop0202tit.png" alt="Evaluation">
		</div>
	</div>
	<div class="bread">
		<div class="home">
			<span class="ls0">HOME</span> <span>&gt;</span> Service field <span>&gt;</span> <span class="bold">Safety Test</span>
		</div>
	</div>

	<ul class="sub_top_menu five">
		<li><a href="Anti_aging.php">Efficacy Test</a></li>
		<li><a href="cosmeceuticals.php">Cosmeceuticals Test</a></li>
		<li class="on"><a href="skin.php">Safety Test</a></li>
		<li><a href="sensuality.php">Sensory Test</a></li>
		<li><a href="invitro.php"><span class="italic">in vitro</span> Test</a></li>
	</ul>
	<div id="container">
		<div id="top">
			<a href="#"><img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_top.jpg" alt="Top"></a>
		</div>
		<div class="con">
			<div class="tit_bg">
				<h3>Safety Test</h3>
			</div>
			<div class="select_box">
				<div class="tit">
					<p>Human Primary Irritation Test</p>
					<div class="img">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_tit_arrow.gif" />
            			<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_tit_arrow_on.gif" style="display: none"/>
            		</div>
				</div>
					<div class="select_list h03">
						<ul>
							<li data-index="0" class="on"><a href="">Human Primary Irritation Test</a></li>
							<li data-index="4"><a href="">Human Cumulative irritation Test</a></li>
							<li data-index="8"><a href="">Human Skin Usage Test</a></li>
						</ul>
						<ul>
							<li data-index="1"><a href="">Human  Repeat Insult Patch Test</a></li>
							<li data-index="5"><a href="">Human Eye Rim Usage Test</a></li>
							<li data-index="9"><a href="">Human Skin Photosensitization Test</a></li>
						</ul>
						<ul>
							<li data-index="2"><a href="">Human Sting Potential Test</a></li>
							<li data-index="6"><a href="">Human Eye Tolerance Test</a></li>
							<li data-index="10"><a href="">Human Skin Antimicrobial Effect Test</a></li>
						</ul>
						<ul>
							<li data-index="3"><a href="">Human  Phototoxicity Test</a></li>
							<li data-index="7"><a href="">Human Skin 3 Days Usage Test</a></li>
							<li data-index="11"><a href="">Human Skin Sensitivity Test</a></li>
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
				<p>Evaluation</p>
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
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
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
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit02.png" alt="피험자 수">
							<p>30명 이상<br>(<span class="ls0">each group</span>)</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit03.png" alt="시험 기간">
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
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
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
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit02.png" alt="피험자 수">
							<p>30명 이상<br>(<span class="ls0">each group</span>)</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit03.png" alt="시험 기간">
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
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
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
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit02.png" alt="피험자 수">
							<p>30명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit03.png" alt="시험 기간">
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
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
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
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit02.png" alt="피험자 수">
							<p>20명 이상</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit03.png" alt="시험 기간">
							<p>12주</p>
						</div>
					</li>
				</ul>
			</div> -->
			<div class="evaluation_box" id="box01" data-index="0">
				<ul class="list">
					<li>
						<div class="list01">
							<p>Human skin primary</br>irritation test</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->Visual assessment</li>
							<li><!-- <span class="bg"></span> -->Skin wrinkles parameters analysi</li>
							<li><!-- <span class="bg"></span> -->Subjective evaluation</li>
							<li><!-- <span class="bg"></span> -->Safety assessment</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit02.png" alt="피험자 수">
							<p>30</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit03.png" alt="시험 기간">
							<p>1 weeks</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box02" data-index="1">
				<ul class="list">
					<li>
						<div class="list01">
							<p>Human skin repeat</br>insult patch test</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->Shelanski & Shelanski Method</li>
							<li><!-- <span class="bg"></span> -->To evaluate the sensitizing potential</li>
							<li><!-- <span class="bg"></span> -->Induction period (3 weeks): 24hrs occlusion patch every other day</li>
							<li><!-- <span class="bg"></span> -->Resting period (2 weeks): no treat</li>
							<li><!-- <span class="bg"></span> -->Challenge period: 48 hrs occlusion patch and clinical examination at 30 minutes, D1, D2 and D3 after removal</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit02.png" alt="피험자 수">
							<p>50</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit03.png" alt="시험 기간">
							<p>6 weeks</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box03" data-index="2">
				<ul class="list">
					<li>
						<div class="list01">
							<p>Human skin sting</br>potential test</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li>To determine the skin stinging potential</li>
							<li>Stingers are selected using 5% lactic acid</li>
							<li>Stinging potential is assessed according to the intensity</li>
							<li>of the sensations (tightness, burning, itching and stinging)</li>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit02.png" alt="피험자 수">
							<p>10</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit03.png" alt="시험 기간">
							<p>2 weeks</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box04" data-index="3">
				<ul class="list">
					<li>
						<div class="list01">
							<p>Human skin photo</br>toxicity test</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li>To evaluate the photo-irritating potential</li>
							<li>Determination of MED using Solar simulator light</li>
							<li>The UV-A is irradiated on test site after patch removal</li>
							<li>Clinical examination at 30 minutes, D1, D2 and D3 after removal</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit02.png" alt="피험자 수">
							<p>20</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit03.png" alt="시험 기간">
							<p>1 weeks</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box05" data-index="4">
				<ul class="list">
					<li>
						<div class="list01">
							<p>Human skin cumulative</br>irri tation test</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li>To evaluate the local tolerance after 9 epicutaneous repeated appli cations by every other day for  3 weeks Evaluation at every removal time</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit02.png" alt="피험자 수">
							<p>30</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit03.png" alt="시험 기간">
							<p>3 weeks</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box06" data-index="5">
				<ul class="list">
					<li>
						<div class="list01">
							<p>Human eye rim</br>usage test</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li> In-use test by eye rim applications for 4 weeks  Evaluating the objective and the subjective irritation every week (or every day)</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit02.png" alt="피험자 수">
							<p>25</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit03.png" alt="시험 기간">
							<p>4 weeks</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box07" data-index="6">
				<ul class="list">
					<li>
						<div class="list01">
							<p>Human eye</br>tolerance test</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->To evaluate the physical and subjective (stinging) eye irritation pot entail</li>
							<li><!-- <span class="bg"></span> -->Evaluation via kinetics and maximized frontal application (wash off type)</li>
							<li><!-- <span class="bg"></span> -->Evaluation of subjective signs, physical clinical evaluation and Examination by instillation of fluorecin and lissamine green using a slit lamp</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit02.png" alt="피험자 수">
							<p>35</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit03.png" alt="시험 기간">
							<p>1 Weeks</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box08" data-index="7">
				<ul class="list">
					<li>
						<div class="list01">
							<p>Human skin adverse</br>reaction test</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->To determine the skin adverse reaction</li>
							<li><!-- <span class="bg"></span> -->Self assessment (examination of tolerance)</li>
							<li><!-- <span class="bg"></span> -->Clinical assessment (physical symptoms)</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit02.png" alt="피험자 수">
							<p>30</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit03.png" alt="시험 기간">
							<p>3 Days</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box09" data-index="8">
				<ul class="list">
					<li>
						<div class="list01">
							<p>Human skin usage test</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li>In-use test by repeated cutaneous applications for 4 weeks Evaluating the objective and the subjective irritation every week (or every day)</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit02.png" alt="피험자 수">
							<p>25</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit03.png" alt="시험 기간">
							<p>4 Weeks</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box10" data-index="9">
				<ul class="list">
					<li>
						<div class="list01">
							<p>Human skin photo</br>sensitization test</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li>To evaluate the photo-sensitization potential</li>
							<li>Induction period (3 weeks): 24hrs occlusion patch every other day and the UVA be irradiated on test site after patch removal</li>
							<li>During 2 weeks resting period, no treat</li>
							<li>Challenge period: 48 hrs occlusion patch and the UVA is irradiate d test site after patch removal. clinical examination at 30</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit02.png" alt="피험자 수">
							<p>30</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit03.png" alt="시험 기간">
							<p>6 Weeks</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box11" data-index="10">
				<ul class="list">
					<li>
						<div class="list01">
							<p>Human skin antimicrobial</br>effect test</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->To evaluate the antimicrobial effect</li>
							<li><!-- <span class="bg"></span> -->Escherichia coli</li>
							<li><!-- <span class="bg"></span> -->Staphylococcus aureus</li>
							<li><!-- <span class="bg"></span> -->Total microbial count</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit02.png" alt="피험자 수">
							<p>15</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit03.png" alt="시험 기간">
							<p>2 weeks</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box12" data-index="11">
				<ul class="list">
					<li>
						<div class="list01">
							<p>Human Skin</br>Sensitivity Test</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li>Sensory irritation evaluation</li>
							<li>CPT Value</li>
							<li>Hydration measurement</li>
							<li>Subjective evaluation</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit02.png" alt="피험자 수">
							<p>20</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit03.png" alt="시험 기간">
							<p>4 weeks</p>
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
include_once(G5_LANG_PATH.'/tail.php');
?>