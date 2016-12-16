<?php
include_once('./_common.php');

$list1 = array();
$list2 = array();
$bo_table = "history_eng";
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

include_once(G5_LANG_PATH.'/head.php');
?>
	<div id="sub_top">
		<div class="sub_tit">
			<img src="<?php echo G5_LANG_IMG_URL; ?>/sub/img_subtop0101tit.png" alt="About Us">
		</div>
	</div>
	<div class="bread">
		<div class="home">
			<span class="ls0">HOME</span> <span>&gt;</span> Dermapro <span>&gt;</span> <span class="bold">Milestone</span>
		</div>
	</div>

	<ul class="sub_top_menu">
		<li><a href="vision.php">Vision</a></li>
		<li><a href="ceo_greeting.php"><span class="ls0">CEO</span> message</a></li>
		<li class="on"><a href="history.php">Milestone</a></li>
		<li><a href="organization.php">Organization</a></li>
		<li><a href="product.php">Business field</a></li>
		<li><a href="agency.php">Partners</a></li>
		<li><a href="location.php">Location</a></li>
	</ul>
	<div id="container">
		<div class="con">
			<div class="tit_bg">
				<h3>Milestone</h3>
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
include_once(G5_LANG_PATH.'/tail.php');
?>