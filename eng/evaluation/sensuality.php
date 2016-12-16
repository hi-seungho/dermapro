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
			<span class="ls0">HOME</span> <span>&gt;</span> Service field <span>&gt;</span> <span class="bold">Sensory Test</span>
		</div>
	</div>

	<ul class="sub_top_menu five">
		<li><a href="Anti_aging.php">Efficacy Test</a></li>
		<li><a href="cosmeceuticals.php">Cosmeceuticals Test</a></li>
		<li><a href="skin.php">Safety Test</a></li>
		<li class="on"><a href="sensuality.php">Sensory Test</a></li>
		<li><a href="invitro.php"><span class="italic">in vitro</span> Test</a></li>
	</ul>
	<div id="container">
		<div id="top">
			<a href="#"><img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_top.jpg" alt="Top"></a>
		</div>
		<div class="con">
			<div class="tit_bg">
				<h3>Sensory Test</h3>
			</div>
			<div class="select_box">
				<div class="tit">
					<p>preference test</p>
					<div class="img">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_tit_arrow.gif" />
            			<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_tit_arrow_on.gif" style="display: none"/>
            		</div>
				</div>
				<div class="select_list h04">
					<ul>
						<li data-index="0" class="on"><a href="">preference test</a></li>
					</ul>
					<ul>
						<li data-index="1"><a href="">Discriminative test</a></li>
					</ul>
					<ul>
						<li data-index="2"><a href="">Descriptive analysis</a></li>
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
				<p>Evaluation</p>
			</div>
			<div class="evaluation_box" id="box01" data-index="0">
				<ul class="list">
					<li>
						<div class="list01">
							<p>Preference Test</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li>Ranking test</li>
							<li>Hedonic scoring test</li>
							<li>Consumer usability test</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03 mb40">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit02.png" alt="피험자 수">
							<p>10~20</p>
						</div>
					</li>
					<li>
						<div class="list-w list04 mb50">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit03.png" alt="시험 기간">
							<p>2~4 weeks</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box02" data-index="1">
				<ul class="list">
					<li>
						<div class="list01">
							<p>Discriminative test</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li>Scoring test</li>
							<li>Ranking test</li>
							<li>Multiple comparison test</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit02.png" alt="피험자 수">
							<p>10~20</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit03.png" alt="시험 기간">
							<p>2~4 weeks</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="evaluation_box" id="box03" data-index="2">
				<ul class="list">
					<li>
						<div class="list01">
							<p>Descriptive test</p>
						</div>
					</li>
					<li>
						<div class="list-w list02">
						<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit01.png" alt="시험 내용">
						<ul>
							<li>Quantitative descriptive analysis</li>
						</ul>
						</div>
					</li>
					<li>
						<div class="list-w list03">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit02.png" alt="피험자 수">
							<p>10~20</p>
						</div>
					</li>
					<li>
						<div class="list-w list04">
							<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_boxtit03.png" alt="시험 기간">
							<p>2~4 weeks</p>
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