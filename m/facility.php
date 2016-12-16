<?php include_once('./include/head.php'); ?>
<div id="cont_wrap">
    <div id="location_wrap">
        <div class="current_location">
            <ul>
                <li><img src="./front/image/common/header/ico_home.gif" alt="" /></li>
                <li>HOME</li>
                <li>></li>
                <li>학교소개</li>
                <li>></li>
                <li class="focus">시설안내</li>
            </ul>
        </div>
        <div class="options">
            <a href="greeting.php" target="_self" class="dep1">학교장 인사말</a>
            <a href="history.php" target="_self" class="dep1">학교연혁</a>
            <a href="scholarship.php" target="_self" class="dep1">장학금제도</a>
            <a href="facility.php" target="_self" class="dep1">시설안내</a>
            <a href="location.php" target="_self" class="dep1">찾아오시는길</a>
        </div>
    </div>
    <div class="top_h2 mb50"><p>시설안내</p></div>
    <div class="cont_size_type1">
        <ul class="admi_sisul clfl">
        	<li class="admi_sisul_on"><a href="">인천아세아</a></li>
        	<li class="admi_sisul_l"><a href="">서울아세아(협약기관)</a></li>
        </ul>
        <div id="bo_gall" style="width:100%;margin-top:40px;">
            <form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
                <input type="hidden" name="bo_table" value="facility">
                <input type="hidden" name="sfl" value="">
                <input type="hidden" name="stx" value="">
                <input type="hidden" name="spt" value="">
                <input type="hidden" name="sca" value="">
                <input type="hidden" name="sst" value="wr_num, wr_reply">
                <input type="hidden" name="sod" value="">
                <input type="hidden" name="page" value="1">
                <input type="hidden" name="sw" value="">
            	<link rel="stylesheet" href="./front/css/gallery_style.css" type="text/css">
            	<link rel="stylesheet" href="./front/css/gallery_default.css" type="text/css">
            	<script type="text/javascript">
                 $(document).ready(function () {
                            $( ".gall_con" ).click(function() {
                        var address = $(this).children("li").children("a").children("img");
                        var textshow = $(this).text();
                       $(".g_title").text(textshow);
                        $("#zoom_img img").attr("src",address.attr("src")).attr("alt",address.attr("alt"));

                       return false;
                    });

                 });
            	</script>
            	<div id="zoom_img">
            		<img src="./front/image/about/facility/pic_thm1.jpg" alt="image 1"> <p class="g_title">인천아세아</p>
            	</div>

            	<ul id="gall_ul">
                    <li class="gall_li" style="width:290px;">
                        <ul class="gall_con">
                            <li class="gall_href">
                            <a href="#"><img src="./front/image/about/facility/pic_thm2.jpg" alt="" width="290px" height="172px"></a>
                        </li>
                        <li class="gall_text_href" style="width:290px">
                            <a href="#">중앙복도1</a>
                        </li>
                        </ul>
                    </li>
                    <li class="gall_li" style="width:290px;">
                        <ul class="gall_con">
                            <li class="gall_href">
                            <a href="#"><img src="./front/image/about/facility/pic_thm2.jpg" alt="" width="290px" height="172px"></a>
                        </li>
                        <li class="gall_text_href" style="width:290px">
                            <a href="#">중앙복도2</a>
                        </li>
                        </ul>
                    </li>
                    <li class="gall_li" style="width:290px;">
                        <ul class="gall_con">
                            <li class="gall_href">
                            <a href="#"><img src="./front/image/about/facility/pic_thm2.jpg" alt="" width="290px" height="172px"></a>
                        </li>
                        <li class="gall_text_href" style="width:290px">
                            <a href="#">중앙복도3</a>
                        </li>
                        </ul>
                    </li>
                    <li class="gall_li" style="width:290px;">
                        <ul class="gall_con">
                            <li class="gall_href">
                            <a href="#"><img src="./front/image/about/facility/pic_thm2.jpg" alt="" width="290px" height="172px"></a>
                        </li>
                        <li class="gall_text_href" style="width:290px">
                            <a href="#">중앙복도4</a>
                        </li>
                        </ul>
                    </li>
                    <li class="gall_li" style="width:290px;">
                        <ul class="gall_con">
                            <li class="gall_href">
                            <a href="#"><img src="./front/image/about/facility/pic_thm2.jpg" alt="" width="290px" height="172px"></a>
                        </li>
                        <li class="gall_text_href" style="width:290px">
                            <a href="#">중앙복도5</a>
                        </li>
                        </ul>
                    </li>
                    <li class="gall_li" style="width:290px;">
                        <ul class="gall_con">
                            <li class="gall_href">
                            <a href="#"><img src="./front/image/about/facility/pic_thm2.jpg" alt="" width="290px" height="172px"></a>
                        </li>
                        <li class="gall_text_href" style="width:290px">
                            <a href="#">중앙복도6</a>
                        </li>
                        </ul>
                    </li>
                </ul>
            </form>
        </div>
        <div id="page_sel" class="mt40"><a href=""><img src="./front/image/common/board/btn_page_first.gif"></a>
            <a href="" class="p_num">1</a>
            <a href="" class="p_num on">2</a>
            <a href="" class="p_num">3</a>
            <a href="" class="p_num">4</a>
            <a href="" class="p_num">5</a>
            <a href="" class="p_num">6</a>
            <a href="" class="p_num">7</a>
            <a href="" class="p_num">8</a>
            <a href=""><img src="./front/image/common/board/btn_page_last.gif"></a>
        </div>
    </div>
</div>
<?php include_once('./include/tail.php'); ?>
