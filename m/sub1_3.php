<?php include_once('./include/head.php'); ?>
<div id="cont_wrap">
    <div id="location_wrap">
        <div class="current_location">
            <ul>
                <li><img src="./front/image/common/header/ico_home.gif" alt="" /></li>
                <li>HOME</li>
                <li>></li>
                <li>국비지원과정</li>
                <li>></li>
                <li class="focus">일반고 특화 국비지원과정</li>
            </ul>
        </div>
        <div class="options">
            <a href="sub1.php" target="_self" class="dep1">일반고 특화 국비지원과정</a>
            <a href="sub2.php" target="_self" class="dep1">실업자 국비지원과정</a>
            <a href="sub3.php" target="_self" class="dep1">재직자 국비지원과정</a>
            <a href="sub4_list.php" target="_self" class="dep1">현재 진행중인 과정</a>
        </div>
    </div>
    <div class="top_h2 mb50"><p>일반고 특화 국비지원과정</p></div>
    <div class="cont_size_type1">
        <ul class="admi_sisul2 clfl">
            <li class="admi_sisul2_l"><a href="sub1.php" target="_self">국가기간전략산업</a></li>
            <li class="admi_sisul2_l"><a href="sub1_2.php" target="_self">내일배움카드제</a></li>
            <li class="admi_sisul2_on"><a href="sub1_3.php" target="_self">취업성공패키지 (Ⅰ.Ⅱ)</a></li>
        </ul>
        <img class="mt50" src="./front/image/process/sub1_3/cont1.jpg" alt="" />
        <ul class="admi_sisul mt50 mb50 clfl">
            <li class="tab_btn1 admi_sisul_on"><a href="" >취업성공패키지Ⅰ(만18세~만64세)</a></li>
            <li class="tab_btn2 admi_sisul_l"><a href="sub1_3.php" target="_self">취업성공패키지Ⅱ(청.장년층)</a></li>
        </ul>
        <img class="cont2_1" src="./front/image/process/sub1_3/cont2_1.jpg" alt="" />
        <img class="cont2_2" src="./front/image/process/sub1_3/cont2_2.jpg" alt="" />
        <script type="text/javascript">
            $(function(){
                $('.tab_btn1').click(function(){
                    $('.cont2_1').css('display', 'block');
                    $('.cont2_2').css('display', 'none');
                    $(this).removeClass('admi_sisul_l');
                    $(this).addClass('admi_sisul_on');
                    $('.tab_btn2').removeClass('admi_sisul_on');
                    $('.tab_btn2').addClass('admi_sisul_l');
                    return false;
                });
                $('.tab_btn2').click(function(){
                    $('.cont2_1').css('display', 'none');
                    $('.cont2_2').css('display', 'block');
                    $(this).removeClass('admi_sisul_l');
                    $(this).addClass('admi_sisul_on');
                    $('.tab_btn1').removeClass('admi_sisul_on');
                    $('.tab_btn1').addClass('admi_sisul_l');
                    return false;
                });
            })
        </script>
    </div>
</div>
<?php include_once('./include/tail.php'); ?>
