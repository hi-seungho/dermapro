<?php
include_once('./_common.php');
include_once(G5_LANG_PATH.'/head.php');
?>
	<div id="sub_top">
		<div class="sub_tit">
			<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_subtop0101tit.png" alt="About Us">
		</div>
	</div>
	<div class="bread">
		<div class="home">
			<span class="ls0">HOME</span> <span>&gt;</span> Dermapro <span>&gt;</span> <span class="bold">Location</span>
		</div>
	</div>

	<ul class="sub_top_menu">
		<li><a href="vision.php">Vision</a></li>
		<li><a href="ceo_greeting.php"><span class="ls0">CEO</span> message</a></li>
		<li><a href="history.php">Milestone</a></li>
		<li><a href="organization.php">Organization</a></li>
		<li><a href="product.php">Business field</a></li>
		<li><a href="agency.php">Partners</a></li>
		<li class="on"><a href="location.php">Location</a></li>
	</ul>
	<div id="container">
		<div class="con location">
			<div class="tit_bg">
				<h3>Location</h3>
			</div>
			<div class="map">
				<!-- * Daum 지도 - 지도퍼가기 -->
				<!-- 1. 지도 노드 -->
				<div id="daumRoughmapContainer1472190808145" class="root_daum_roughmap root_daum_roughmap_landing"></div>

				<!--
					2. 설치 스크립트
					* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
				-->
				<script charset="UTF-8" class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>

				<!-- 3. 실행 스크립트 -->
				<script charset="UTF-8">
					new daum.roughmap.Lander({
						"timestamp" : "1472190808145",
						"key" : "cpn4",
						"mapWidth" : "1115",
						"mapHeight" : "540"
					}).render();
				</script>
			</div>
			<div class="img"><img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_location_addr.jpg" alt="Information"></div>
		</div>
	</div><!-- container -->
<?php
include_once(G5_LANG_PATH.'/tail.php');
?>