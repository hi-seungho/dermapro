<?php
include_once('./_common.php');

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
	include_once(G5_THEME_MOBILE_PATH.'/index.php');
	return;
}


$list1 = array();
$list2 = array();
$bo_table = "history";
$write_table = "";
$board = sql_fetch(" select * from {$g5['board_table']} where bo_table = '$bo_table' ");
if ($board['bo_table']) {
	$write_table = $g5['write_prefix'] . $bo_table; // 게시판 테이블 전체이름
}

$sql = "select * from {$write_table} where wr_1 >= 2010 order by wr_1 desc, CAST(wr_2 AS SIGNED) desc";
$result = sql_query($sql);

while ($row = sql_fetch_array($result)) {
	$list1[$row['wr_1']][$row['wr_2']] = $row;
}

$sql = "select * from {$write_table} where wr_1 < 2010 order by wr_1 desc, CAST(wr_2 AS SIGNED) desc";
$result = sql_query($sql);

while ($row = sql_fetch_array($result)) {
	$list2[$row['wr_1']][$row['wr_2']] = $row;
}

include_once(G5_THEME_PATH.'/head.php');
?>
	<div id="sub_top">
		<div class="sub_tit">
			<img src="/images/sub/img_subtop0101tit.png" alt="About Us">
		</div>
	</div>
	<div class="bread">
		<div class="home">
			<span class="ls0">HOME</span> <span>&gt;</span> 회사소개 <span>&gt;</span> <span class="bold">연혁</span>
		</div>
	</div>
	
	<ul class="sub_top_menu">
		<li><a href="vision.php">비전</a></li>
		<li><a href="ceo_greeting.php"><span class="ls0">CEO</span> 인사말</a></li>
		<li class="on"><a href="history.php">연혁</a></li>
		<li><a href="organization.php">조직도</a></li>
		<li><a href="product.php">사업영역</a></li>
		<li><a href="agency.php">공동연구기관</a></li>
		<li><a href="location.php">오시는 길</a></li>
	</ul>
	<div id="container">
		<div class="con">
			<div class="tit_bg">
				<h3>연혁</h3>
			</div>
			<div class="h_wrap">
				<div class="history_txt fl">
					<?php
					foreach ($list1 as $y => $list) {
						?>
						<div class="h_box">
							<span class="h_tit"><?php echo $y; ?></span>
							<ul class="h_list">
								<?php
								foreach ($list as $row) {
									?>
									<li><span class="bg"></span><?php echo $row['wr_subject']; ?></li>
								<?php } ?>
							</ul>
						</div>
						<?php
					}
					?>
				</div>
				<div class="history_txt fr">
					<?php
					foreach ($list2 as $y => $list) {
						?>
						<div class="h_box">
							<span class="h_tit"><?php echo $y; ?></span>
							<ul class="h_list">
								<?php
								foreach ($list as $row) {
								?>
								<li><span class="bg"></span><?php echo $row['wr_subject']; ?></li>
								<?php } ?>
							</ul>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div><!-- container -->
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>