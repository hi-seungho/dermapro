<?php include_once('./include/head.php'); ?>
<div id="cont_wrap">
    <div class="flexslider" id="mainslider">
        <ul class="slides">
            <li><img src="./front/image/main/mv1.jpg"/></li>
            <li><img src="./front/image/main/mv2.jpg"/></li>
            <li><img src="./front/image/main/mv3.jpg"/></li>
        </ul>
    </div>
    <script type="text/javascript">
        $(window).load(function() {
            $('#mainslider').flexslider({
                animation: "slide",
                directionNav: true,
                controlNav: false,
                prevText: "",
                nextText: ""
            });
        });
    </script>
    <div class="main_m1_wrap clfl">
        <div class="title"><img src="./front/image/main/tit1.gif" alt=""></div>
        <div class="inner_item">
            <div class="ico_img"><img src="./front/image/main/ico1.gif" alt=""></div>
            <div class="text_wrap">
                <p class="subject">유효성 평가</p>
                <p class="txt_content">
                    화장품의 효능, 효과를 인체 피부에서</br>
                    확인하여 화장품 표시광고 실증자료</br>
                    결과를 제공합니다.
                </p>
            </div>
            <a href=""><img class="btn_detail" src="./front/image/main/btn_detail.gif" alt=""></a>
        </div>
        <div class="inner_item">
            <div class="ico_img"><img src="./front/image/main/ico2.gif" alt=""></div>
            <div class="text_wrap">
                <p class="subject">기능성 평가</p>
                <p class="txt_content">
                    식약처 가이드라인에 따라 주름 미백</br>
                    자외선등 기능성을 표방하는 화장품의</br>
                    효능 효과를 평가합니다.
                </p>
            </div>
            <a href=""><img class="btn_detail" src="./front/image/main/btn_detail.gif" alt=""></a>
        </div>
        <div class="inner_item">
            <div class="ico_img"><img src="./front/image/main/ico3.gif" alt=""></div>
            <div class="text_wrap">
                <p class="subject">안전성 평가</p>
                <p class="txt_content">
                    화장품의 권장사용 조건 뿐 아니라,</br>
                    합리적으로 예측 가능한 사용 조건에서</br>
                    안전하다는 것을 확인하는 평가입니다.
                </p>
            </div>
            <a href=""><img class="btn_detail" src="./front/image/main/btn_detail.gif" alt=""></a>
        </div>
        <div class="inner_item">
            <div class="ico_img"><img src="./front/image/main/ico4.gif" alt=""></div>
            <div class="text_wrap">
                <p class="subject">소비자 사용성 평가</p>
                <p class="txt_content">
                    제품의 향, 외관, 사용감을 평가하기 위해</br>
                    시각 후각 및 촉각으로 느껴지는 감성적</br>
                    반응을 정량적으로 측정하고 분석합니다.
                </p>
            </div>
            <a href=""><img class="btn_detail" src="./front/image/main/btn_detail.gif" alt=""></a>
        </div>
        <div class="inner_item">
            <div class="ico_img"><img src="./front/image/main/ico5.gif" alt=""></div>
            <div class="text_wrap">
                <p class="subject"><span class="italic">in vitro</span> 평가</p>
                <p class="txt_content">
                    생체 외 에서 화장품과 그 원료의 안전</br>
                    및 효력을 평가하는 것으로 생체 내에서의</br>
                    현상을 예측하는데 그 목적이 있습니다.
                </p>
            </div>
            <a href=""><img class="btn_detail" src="./front/image/main/btn_detail.gif" alt=""></a>
        </div>
    </div>
    <div class="notice_title_wrap clfl">
        <p class="title"><img src="./front/image/main/tit_1.gif" alt=""></p>
        <div class="fr clfl mr20">
            <!-- <div class="fl mr20 clfl">
                <a href=""><img class="fl" src="./front/image/main/btn_prev2.gif" alt=""></a>
                <a href=""><img class="fl" src="./front/image/main/btn_next2.gif" alt=""></a>
            </div> -->
            <div class="fl">
                <a href=""><img src="./front/image/main/btn_more.gif" alt=""></a>
            </div>
        </div>
    </div>
    <table cellpadding="0" cellspacing="0" class="tb_type1">
        <colgroup>
            <col width="80%"/>
            <col width="20%"/>
        </colgroup>
        <tbody>
            <tr>
                <td class="cont"><a href=""><strong>[공지]</strong> 제목 입력란입니다. 제목 입력란입니다.</a></td>
                <td class="date">2016.12.12</td>
            </tr>
        </tbody>
    </table>
    <div class="main_m2_wrap clfl">
        <a href="">
            <img src="./front/image/main/pic_thm1.jpg" alt="">
        </a>
        <a href="">
            <img src="./front/image/main/pic_thm2.jpg" alt="">
        </a>
        <a href="">
            <img src="./front/image/main/pic_thm3.jpg" alt="">
        </a>
        <a href="">
            <img src="./front/image/main/pic_thm4.jpg" alt="">
        </a>
    </div>
</div>
<?php include_once('./include/tail.php'); ?>
