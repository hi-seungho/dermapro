<?php include_once('./include/head.php'); ?>
<div id="cont_wrap">
    <div id="location_wrap">
        <div class="current_location">
            <ul>
                <li><img src="./front/image/common/header/ico_home.gif" alt="" /></li>
                <li>HOME</li>
                <li>></li>
                <li>입학안내</li>
                <li>></li>
                <li class="focus">온라인 접수하기</li>
            </ul>
        </div>
        <div class="options">
            <a href="online_list.php" target="_self" class="dep1">온라인 접수하기</a>
            <a href="qna_list.php" target="_self" class="dep1">입학상담하기/묻고답하기</a>
            <a href="map1.php" target="_self" class="dep1">진로로드맵</a>
            <a href="visit.php" target="_self" class="dep1">방문상담신청</a>
        </div>
    </div>
    <div class="top_h2 mb50"><p>온라인 접수하기</p></div>
    <div class="cont_size_type1">
        <form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
            <input type="hidden" name="bo_table" value="online">
            <input type="hidden" name="sfl" value="">
            <input type="hidden" name="stx" value="">
            <input type="hidden" name="spt" value="">
            <input type="hidden" name="sca" value="">
            <input type="hidden" name="page" value="1">
            <input type="hidden" name="sw" value="">
            <div class="admi_1">
                <form name="fsearch" method="get">
                <input type="hidden" name="bo_table" value="online">
                <input type="hidden" name="sca" value="">
                <input type="hidden" name="sop" value="and">
                <select class="sel_type1">
                    <option value="wr_subject">제목</option>
                    <option value="wr_content">내용</option>
                </select>
                <!-- <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label> -->
                <input type="text" name="stx" value="" required="" id="stx" size="20" class="input_text1" maxlength="15">
                <input type="image" src="./front/image/common/board/btn_find.gif" value="검색" class="" style="background: none">
                </form>
            </div>
            <table cellpadding="0" cellspacing="0" class="table1_1">
                <thead>
                    <tr>
                        <th>번호</th>
                        <th>성명</th>
                        <th>접수일</th>
                        <th>진행상태</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td class="td_num"> 64 </td>
                        <td class="td_name sv_use"><a href="">김서희</a></td>
                        <td class="td_date">16-11-01</td>
                        <td class="td_name"><span style="color:red">접수완료</span></td>
                    </tr>
                    <tr class="">
                        <td class="td_num"> 64 </td>
                        <td class="td_name sv_use"><a href="">김서희</a></td>
                        <td class="td_date">16-11-01</td>
                        <td class="td_name"><span style="color:red">접수완료</span></td>
                    </tr>
                    <tr class="">
                        <td class="td_num"> 64 </td>
                        <td class="td_name sv_use"><a href="">김서희</a></td>
                        <td class="td_date">16-11-01</td>
                        <td class="td_name"><span style="color:red">접수완료</span></td>
                    </tr>
                    <tr class="">
                        <td class="td_num"> 64 </td>
                        <td class="td_name sv_use"><a href="">김서희</a></td>
                        <td class="td_date">16-11-01</td>
                        <td class="td_name"><span style="color:red">접수완료</span></td>
                    </tr>
                    <tr class="">
                        <td class="td_num"> 64 </td>
                        <td class="td_name sv_use"><a href="">김서희</a></td>
                        <td class="td_date">16-11-01</td>
                        <td class="td_name"><span style="color:red">접수완료</span></td>
                    </tr>
                </tbody>
            </table>
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
            <div class="mt40">
                <a href="./write.php?bo_table=online"><img src="./front/image/common/board/btn_write.gif" alt="" title=""></a>
            </div>
        </form>
    </div>
</div>
<?php include_once('./include/tail.php'); ?>
