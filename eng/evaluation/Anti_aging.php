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
			<span class="ls0">HOME</span> <span>&gt;</span> Service field <span>&gt;</span> <span class="bold">Efficacy Test</span>
		</div>
	</div>

	<ul class="sub_top_menu five">
		<li class="on"><a href="Anti_aging.php">Efficacy Test</a></li>
		<li><a href="cosmeceuticals.php">Cosmeceuticals Test</a></li>
		<li><a href="skin.php">Safety Test</a></li>
		<li><a href="sensuality.php">Sensory Test</a></li>
		<li><a href="invitro.php"><span class="italic">in vitro</span> Test</a></li>
	</ul>
	<div id="container">
		<div id="top">
			<a href="#"><img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_top.jpg" alt="Top"></a>
		</div>
		<div class="con">
			<div class="tit_bg">
				<h3>Efficacy Test</h3>
			</div>

			<div class="select_box">
				<div class="tit">
					<p>Human Skin Wrinkle Test</p>
						<div class="img">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_tit_arrow.gif" />
            				<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_tit_arrow_on.gif" style="display: none"/>
            			</div>
				</div>
				<div class="select_list">
					<ul>
						<li data-index="0" class="on"><a href="">Human Skin Wrinkle Test</a></li>
						<li data-index="1"><a href="">Human Skin Lightening Effect Test</a></li>
						<li data-index="2"><a href="">Human Skin Firming & Sagging Test</a></li>
						<li data-index="3"><a href="">Human skin texture Improvement test</a></li>
						<li data-index="4"><a href="">Human Skin Hydration Test</a></li>
						<li data-index="5"><a href="">Human Skin Scale Test</a></li>
					</ul>
					<ul>
						<li data-index="6"><a href="">Human Skin Pore Test</a></li>
						<li data-index="7"><a href="">Skin Radiance and Gloss Effect Test</a></li>
						<li data-index="8"><a href="">Human Skin Sensitivity Test</a></li>
						<li data-index="9"><a href="">Human Skin Hot Flush Improvement Test</a></li>
						<li data-index="10"><a href="">Dark Circle Reducing Effect Test</a></li>
						<li data-index="11"><a href="">Skin Recovery Effect Test</a></li>
					</ul>
					<ul>
						<li data-index="12"><a href="">Cleansing Effect Test</a></li>
						<li data-index="13"><a href="">Efficacy test of Make-up product</a></li>
						<li data-index="14"><a href="">Cellulite Reducing Effect Test</a></li>
						<li data-index="15"><a href="">Puffiness Reducing Effect Test</a></li>
						<li data-index="16"><a href="">Breast Firming Effect Test</a></li>
						<li data-index="17"><a href="">Acne Skin Improvement Effect Test</a></li>
					</ul>
					<ul>
						<li data-index="18"><a href="">Non-Comedogenicity Test</a></li>
						<li data-index="19"><a href="">Hair Dandruff and Itching Reducing  Effect Test</a></li>
						<li data-index="20"><a href="">Scalp Condition  Test</a></li>
						<li data-index="21"><a href="">Hair evaluation</a></li>
						<li data-index="22"><a href="">Prevention of Osmidrosis Axillae and Hyperhidrosis Inhibition Effect Test</a></li>
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
				<p>Evaluation</p>
			</div>
			<div class="evaluation_box" id="box01" data-index="0">
				<ul class="list">
					<li>
						<div class="list01">
							<p>Human Skin Wrinkle</br>Improvement Test</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->Visual assessment</li>
							<li><!-- <span class="bg"></span> -->Skin wrinkles parameters analysis</li>
							<li><!-- <span class="bg"></span> -->Subjective evaluation</li>
							<li><!-- <span class="bg"></span> -->Safety assessment</li>
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
			<div class="evaluation_box" id="box02" data-index="1">
				<ul class="list">
					<li>
						<div class="list01">
							<p>Human Skin</br>Lightening Effect Test</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->Visual assessment</li>
							<li><!-- <span class="bg"></span> -->Skin color measurement</li>
							<li><!-- <span class="bg"></span> -->Melanin index measurement</li>
							<li><!-- <span class="bg"></span> -->Subjective evaluation</li>
							<li><!-- <span class="bg"></span> -->Safety assessment</li>
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
			<div class="evaluation_box" id="box03" data-index="2">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>Human Skin Firming &</br>Sagging Improvement Test</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->Skin elasticity measurement</li>
							<li><!-- <span class="bg"></span> -->Skin sagging measurement</li>
							<li><!-- <span class="bg"></span> -->Dermal density analysis</li>
							<li><!-- <span class="bg"></span> -->Subjective evaluation</li>
							<li><!-- <span class="bg"></span> -->Safety assessment</li>
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
			<div class="evaluation_box" id="box04" data-index="3">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>Human Skin Texture</br>Improvement Test</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->Skin roughness Measurement</li>
							<li><!-- <span class="bg"></span> -->Subjective evaluation</li>
							<li><!-- <span class="bg"></span> -->Safety assessment</li>
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
			<div class="evaluation_box" id="box05" data-index="4">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>Human Skin Hydration</br>Improvement Test</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->Skin hydration measurement</li>
							<li><!-- <span class="bg"></span> -->Skin scaling measurement</li>
							<li><!-- <span class="bg"></span> -->TEWL measurement</li>
							<li><!-- <span class="bg"></span> -->Safety assessment</li>
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
							<p>4~214hrs<br>4 weeks</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box06" data-index="5">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>Human Skin Scale</br>Reduction Effect Test</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->Skin scaling assessment</li>
							<li><!-- <span class="bg"></span> -->Squamometry analysis</li>
							<li><!-- <span class="bg"></span> -->Subjective evaluation</li>
							<li><!-- <span class="bg"></span> -->Safety assessment</li>
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
			<div class="evaluation_box" id="box07" data-index="6">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>Human Skin Pore</br>Improvement Test</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->Pore size analysis</li>
							<li><!-- <span class="bg"></span> -->Skin pore number analysis</li>
							<li><!-- <span class="bg"></span> -->Subjective evaluation</li>
							<li><!-- <span class="bg"></span> -->Safety assessment</li>
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
			<div class="evaluation_box" id="box08" data-index="7">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>Human Skin Radiance</br>Improvement Test </p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->Skin gloss image assessment</li>
							<li><!-- <span class="bg"></span> -->Skin transparency measurement</li>
							<li><!-- <span class="bg"></span> -->Skin gloss measurement </li>
							<li><!-- <span class="bg"></span> -->Skin color measurement</li>
							<li><!-- <span class="bg"></span> -->Subjective evaluation</li>
							<li><!-- <span class="bg"></span> -->Safety assessment</li>
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
			<div class="evaluation_box" id="box09" data-index="8">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>Human Skin</br>Sensitivity Test</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><span class="bg"></span>Sensory irritation evaluation</li>
							<li><!-- <span class="bg"></span> --><span class="ls0">CPT Value</li>
							<li><!-- <span class="bg"></span> -->Hydration measurement</li>
							<li><!-- <span class="bg"></span> -->Subjective evaluation</li>
							<li><!-- <span class="bg"></span> -->Safety assessment</li>
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
			<div class="evaluation_box" id="box09" data-index="9">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>Human Skin Hot Flush</br>Improvement Test</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->Induce hot flushing</li>
							<li><!-- <span class="bg"></span> -->Visual assessment</li>
							<li><!-- <span class="bg"></span> -->Skin erythema measurement</li>
							<li><!-- <span class="bg"></span> -->Skin temperature measurement</li>
							<li><!-- <span class="bg"></span> -->Blood flow rate measurement</li>
							<li><!-- <span class="bg"></span> -->Subjective evaluation</li>
							<li><!-- <span class="bg"></span> -->Safety assessment</li>
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
							<p>Before & after</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box10" data-index="10">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>Human Skin Dark Circle</br>Improvement Test</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->Melanin and hemoglobin index</li>
							<li><!-- <span class="bg"></span> -->measurement</li>
							<li><!-- <span class="bg"></span> -->Skin color measurement</li>
							<li><!-- <span class="bg"></span> -->Blood flow rate measurement</li>
							<li><!-- <span class="bg"></span> -->Dermal thickness measurement</li>
							<li><!-- <span class="bg"></span> -->Subjective evaluation</li>
							<li><!-- <span class="bg"></span> -->Safety assessment</li>
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
							<p>8 weeks</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box11" data-index="11">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>Damaged Skin Recovery</br>Effect Test</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->Visual assessment</li>
							<li><!-- <span class="bg"></span> -->Erythema measurement</li>
							<li><!-- <span class="bg"></span> -->TEWL measurement</li>
							<li><!-- <span class="bg"></span> -->Skin roughness measurement</li>
							<li><!-- <span class="bg"></span> -->Blood circulation measurement</li>
							<li><!-- <span class="bg"></span> -->Subjective evaluation</li>
							<li><!-- <span class="bg"></span> -->Safety assessment</li>
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
							<p>2 weeks</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box12" data-index="12">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>Human Skin Cleansing</br>Effect Test</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->Skin pore assessment</li>
							<li><!-- <span class="bg"></span> -->Skin hydration measurement</li>
							<li><!-- <span class="bg"></span> -->Skin sebum measurement</li>
							<li><!-- <span class="bg"></span> -->Skin scale measurement</li>
							<li><!-- <span class="bg"></span> -->Subjective evaluation</li>
							<li><!-- <span class="bg"></span> -->Safety evaluation</li>
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
							<p>Before & after</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box13" data-index="13">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>Make-up Effect Test</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->Skin roughness assessment</li>
							<li><!-- <span class="bg"></span> -->Skin coverage assessment</li>
							<li><!-- <span class="bg"></span> -->Adhesion effect analysis</li>
							<li><!-- <span class="bg"></span> -->Spreadability and lasting effect analysis</li>
							<li><!-- <span class="bg"></span> -->Subjective evaluation</li>
							<li><!-- <span class="bg"></span> -->Safety evaluation</li>
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
							<p>Before & after</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box14" data-index="14">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>Human Skin Cellulite</br>Improvement Test</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->Dermal-subcutaneous interface Length Analysis</li>
							<li><!-- <span class="bg"></span> -->Cellulite volume measurement Body composition analysis</li>
							<li><!-- <span class="bg"></span> -->Subjective evaluation</li>
							<li><!-- <span class="bg"></span> -->Safety evaluation</li>
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
			<div class="evaluation_box" id="box15" data-index="15">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>Human Skin Puffiness</br>Improvement Test</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->Body girth measurement</li>
							<li><!-- <span class="bg"></span> -->3D volume measurement</li>
							<li><!-- <span class="bg"></span> -->Dermal hydration measurement</li>
							<li><!-- <span class="bg"></span> -->Dermal density analysis</li>
							<li><!-- <span class="bg"></span> -->Viscoelasticity measurement</li>
							<li><!-- <span class="bg"></span> -->Body temperature measurement</li>
							<li><!-- <span class="bg"></span> -->Blood flow rate measurement</li>
							<li><!-- <span class="bg"></span> -->Subjective evaluation</li>
							<li><!-- <span class="bg"></span> -->Safety evaluation</li>
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
							<p>2 weeks</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box16" data-index="16">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>Human Breast Firming and</br>Enlargement Test</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->Body weight measurement</li>
							<li><!-- <span class="bg"></span> -->Breast girth measurement</li>
							<li><!-- <span class="bg"></span> -->Evaluation of angle and distance of nipple</li>
							<li><!-- <span class="bg"></span> -->Breast sagging measurement</li>
							<li><!-- <span class="bg"></span> -->Breast volume measurement</li>
							<li><!-- <span class="bg"></span> -->Breast elasticity measurement</li>
							<li><!-- <span class="bg"></span> -->Subject evaluation</li>
							<li><!-- <span class="bg"></span> -->Safety evaluation</li>
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
							<p>6 weeks</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box17" data-index="17">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>Acne skin Improvement Test</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->Lesion counting</li>
							<li><!-- <span class="bg"></span> -->Skin sebum measurement</li>
							<li><!-- <span class="bg"></span> -->Subjective evaluation</li>
							<li><!-- <span class="bg"></span> -->Safety assessment</li>
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
			<div class="evaluation_box" id="box18" data-index="18">
				<ul class="list">
					<li>
						<div class="list01 pt75">
							<a href="#Top">
								<p>Non-Comedogenicity Test</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->Lesion counting</li>
							<li><!-- <span class="bg"></span> -->Skin sebum measurement</li>
							<li><!-- <span class="bg"></span> -->Subjective evaluation</li>
							<li><!-- <span class="bg"></span> -->Safety assessment</li>
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
			<div class="evaluation_box" id="box19" data-index="19">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>Human Hair Dandruff and</br>Itching Improvement Test</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->Vertex photography</li>
							<li><!-- <span class="bg"></span> -->Scalp and  dandruff photography</li>
							<li><!-- <span class="bg"></span> -->Dandruff quantity</li>
							<li><!-- <span class="bg"></span> -->Itching improvement evaluation</li>
							<li><!-- <span class="bg"></span> -->Squamometry  analysis</li>
							<li><!-- <span class="bg"></span> -->Dandruff Yeast count</li>
							<li><!-- <span class="bg"></span> -->inflammatory cytokine analysis</li>
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
			<div class="evaluation_box" id="box20" data-index="20">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>Human Scalp Physiology</br>Improvement Test </p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->Scalp type assessment</li>
							<li><!-- <span class="bg"></span> -->Scalp photography</li>
							<li><!-- <span class="bg"></span> -->Scalp water content measurement</li>
							<li><!-- <span class="bg"></span> -->Scalp TEWL measurement</li>
							<li><!-- <span class="bg"></span> -->Scalp sebum measurement</li>
							<li><!-- <span class="bg"></span> -->Subjective evaluation</li>
							<li><!-- <span class="bg"></span> -->Safety assessment</li>
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
							<p>2 weeks</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box21" data-index="21">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>Human Hair Physiology</br>Improvement Test</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->Hair damage assessment</li>
							<li><!-- <span class="bg"></span> -->Grey hair ratio</li>
							<li><!-- <span class="bg"></span> -->Hair density measurement</li>
							<li><!-- <span class="bg"></span> -->Hair luster ring analysis and photographic image</li>
							<li><!-- <span class="bg"></span> -->Cuticle  and hair damage rate assessment</li>
							<li><!-- <span class="bg"></span> -->Tensile strength measurement</li>
							<li><!-- <span class="bg"></span> -->Hair  flexural load measurement</li>
							<li><!-- <span class="bg"></span> -->Color analysis and visibility assessment</li>
							<li><!-- <span class="bg"></span> -->Subjective evaluation</li>
							<li><!-- <span class="bg"></span> -->Safety assessment</li>
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
			<div class="evaluation_box" id="box22" data-index="22">
				<ul class="list">
					<li>
						<div class="list01">
							<a href="#Top">
								<p>Human skin Osmidrosis</br>Axillae and  Hyperhidrosis</br>Improvement Test</p>
							</a>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li><!-- <span class="bg"></span> -->Gravimetric measurement</li>
							<li><!-- <span class="bg"></span> -->Sweat drops photography</li>
							<li><!-- <span class="bg"></span> -->Sniff test</li>
							<li><!-- <span class="bg"></span> -->Subjective evaluation</li>
							<li><!-- <span class="bg"></span> -->Safety evaluation</li>
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
							<p>4 weeks</p>
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
include_once(G5_LANG_PATH.'/tail.php');
?>