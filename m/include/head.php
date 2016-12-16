<?php include_once('./include/head.sub.php'); ?>
<div id="wrap">
    <div id="container">
        <div id="lnb">
            <div id="lnb_menu">
                <h3 class="dep1">학교소개</h3>
                <div class="dep2menu">
                    <ul>
                        <li>
                            <ul>
                                <li class="d1"><a href="greeting.php">학교장 인사말</a></li>
                                <!-- <li class="d2"><a href="">- 가죽</a></li>
                                <li class="d2"><a href="">- 패브릭</a></li> -->
                            </ul>
                        </li>
                        <li><ul><li class="d1"><a href="history.php">학교연혁</a></li></ul></li>
                        <li><ul><li class="d1"><a href="scholarship.php">장학금제도</a></li></ul></li>
                        <li><ul><li class="d1"><a href="facility.php">시설안내</a></li></ul></li>
                        <li><ul><li class="d1"><a href="location.php">찾아오시는 길</a></li></ul></li>
                    </ul>
                </div>
                <h3 class="dep1">입학안내</h3>
                <div class="dep2menu">
                    <ul>
                        <li><ul><li class="d1"><a href="online_list.php">온라인 접수하기</a></li></ul></li>
                        <li><ul><li class="d1"><a href="qna_list.php">입학상담하기/묻고답하기</a></li></ul></li>
                        <li><ul><li class="d1"><a href="map1.php">진로로드맵</a></li></ul></li>
                        <li><ul><li class="d1"><a href="visit.php">방문상담신청</a></li></ul></li>
                    </ul>
                </div>
                <h3 class="dep1">항공고교위탁과정</h3>
                <div class="dep2menu">
                    <ul>
                        <li><ul><li class="d1"><a href="process.php">고교위탁과정</a></li></ul></li>
                        <li><ul><li class="d1"><a href="introduce.php">예비위탁과정소개</a></li></ul></li>
                        <li><ul><li class="d1"><a href="maintenance.php">항공정비과</a></li></ul></li>
                        <li><ul><li class="d1"><a href="tourism.php">항공관광과</a></li></ul></li>
                        <li><ul><li class="d1"><a href="calendar.php">학사일정계획</a></li></ul></li>
                    </ul>
                </div>
                <h3 class="dep1">국비지원과정</h3>
                <div class="dep2menu">
                    <ul>
                        <li><ul><li class="d1"><a href="sub1.php">일반고 특화 국비지원과정</a></li></ul></li>
                        <li><ul><li class="d1"><a href="sub2.php">실업자 국비지원과정</a></li></ul></li>
                        <li><ul><li class="d1"><a href="sub3.php">재직자 국비지원과정</a></li></ul></li>
                        <li><ul><li class="d1"><a href="sub4_list.php">현재 진행중인 과정</a></li></ul></li>
                    </ul>
                </div>
                <h3 class="dep1">진로현황</h3>
                <div class="dep2menu">
                    <ul>
                        <li><ul><li class="d1"><a href="gallery_list.php">취업현황</a></li></ul></li>
                        <li><ul><li class="d1"><a href="gallery1_list.php">군부사관임관현황</a></li></ul></li>
                        <li><ul><li class="d1"><a href="gallery2_1_list.php">자격증 취득현황 및 일정</a></li></ul></li>
                        <li><ul><li class="d1"><a href="gallery3_list.php">선배이야기</a></li></ul></li>
                    </ul>
                </div>
                <h3 class="dep1">취업정보</h3>
                <div class="dep2menu">
                    <ul>
                        <li><ul><li class="d1"><a href="recruit_list.php">채용정보</a></li></ul></li>
                    </ul>
                </div>
                <h3 class="dep1">커뮤니티</h3>
                <div class="dep2menu">
                    <ul>
                        <li><ul><li class="d1"><a href="news_list.php">인천아세아뉴스</a></li></ul></li>
                        <li><ul><li class="d1"><a href="notice_list.php">공지사항</a></li></ul></li>
                        <li><ul><li class="d1"><a href="air_list.php">항공분야 동향</a></li></ul></li>
                        <li><ul><li class="d1"><a href="job_list.php">직업체험 후기</a></li></ul></li>
                    </ul>
                </div>
            </div>
            <script>
                $( function() {
                    $( "#lnb_menu" ).accordion({
                        heightStyle: "content"
                    });
                } );
            </script>
        </div>
        <div id="contents">
            <div id="header">
                <button class="togglebtn_menu"></button>
                <button class="btn_pc"></button>
                <h1><a href="index.php"><img src="./front/image/common/header/logo.jpg" alt=""></a></h1>
            </div>
