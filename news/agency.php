<?php
include_once('./_common.php');

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
	include_once(G5_THEME_MOBILE_PATH.'/index.php');
	return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
	<div id="sub_top04">
		<div class="sub_tit">
			<img src="../../images/sub/img_subtop0404tit.png" alt="Inquiry">
		</div>
	</div>
	<div class="bread">
		<div class="home">
			<span class="ls0">HOME</span> <span>&gt;</span> 뉴스센터 <span>&gt;</span> <span class="bold">관련기관</span>
		</div>
	</div>
	
	<ul class="sub_top_menu four">
		<li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=news">더마프로 뉴스</a></li>
		<li><a href="/news/paper_patent.php">더마프로 학술활동</a></li>
		<?php if ($config['cf_1']) { ?>
			<li><a href="<?php echo G5_DATA_URL; ?>/file/config/<?php echo $config['cf_1']; ?>" target="_blank">E-브로셔</a></li>
		<?php } ?>
		<li class="on"><a href="agency.php">관련기관</a></li>
	</ul>
	<div id="container">
		<div class="con">
			<div class="tit_bg">
				<h3>관련기관</h3>
			</div>
			<div class="agency">
				<ul>
					<li>
						<div class="img"><img src="../../images/sub/img_agency01.jpg" alt="식품의약품안전처" /></div>
						<div class="comm-desc">
							<p class="ti-tit">식품의약품안전처</p>
							<p class="ti-desc"><a href="http://www.mfds.go.kr" target="_blank">www.mfds.go.kr</a></p>
						</div>
					</li>
					<li>
						<div class="img"><img src="../../images/sub/img_agency02.jpg" alt="대한화장품협회" /></div>
						<div class="comm-desc">
							<p class="ti-tit">대한화장품협회</p>
							<p class="ti-desc"><a href="http://www.kcia.or.kr
r" target="_blank">www.kcia.or.kr
</a></p>
						</div>
					</li>
					<li>
						<div class="img"><img src="../../images/sub/img_agency03.jpg" alt="화장품산업연구원" /></div>
						<div class="comm-desc">
							<p class="ti-tit">화장품산업연구원</p>
							<p class="ti-desc"><a href="http://www.kcii.re.kr" target="_blank">www.kcii.re.kr</a></p>
						</div>
					</li>
					<li>
						<div class="img"><img src="../../images/sub/img_agency04.jpg" alt="한국화학연구원" /></div>
						<div class="comm-desc">
							<p class="ti-tit">한국화학연구원</p>
							<p class="ti-desc"><a href="http://www.krict.re.kr" target="_blank">www.krict.re.kr</a></p>
						</div>
					</li>
					<li>
						<div class="img"><img src="../../images/sub/img_agency05.jpg" alt="한국보건산업진흥원" /></div>
						<div class="comm-desc">
							<p class="ti-tit">한국보건산업진흥원</p>
							<p class="ti-desc"><a href="http://www.khidi.or.kr" target="_blank">www.khidi.or.kr</a></p>
						</div>
					</li>
					<li>
						<div class="img"><img src="../../images/sub/img_agency06.jpg" alt="Cosmetics Europe" /></div>
						<div class="comm-desc">
							<p class="ti-tit">Cosmetics Europe</p>
							<p class="ti-desc"><a href="http://www.cosmeticseurope.eu" target="_blank">www.cosmeticseurope.eu</a></p>
						</div>
					</li>
					<li>
						<div class="img"><img src="../../images/sub/img_agency07.jpg" alt="Personal care Products Council 
" /></div>
						<div class="comm-desc">
							<p class="ti-tit">Personal care Products Council 
</p>
							<p class="ti-desc"><a href="http://www.jejutp.or.kr" target="_blank">www.jejutp.or.kr</a></p>
						</div>
					</li>
					<li>
						<div class="img"><img src="../../images/sub/img_agency08.jpg" alt="제주하이테크산업진흥원" /></div>
						<div class="comm-desc">
							<p class="ti-tit">제주하이테크산업진흥원</p>
							<p class="ti-desc"><a href="http://www.jejutp.or.kr" target="_blank">www.jejutp.or.kr</a></p>
						</div>
					</li>
				</ul>
			</div>
			
		</div>
	</div><!-- container -->
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>