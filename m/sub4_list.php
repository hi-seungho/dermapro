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
                <li class="focus">현재 진행중인 과정</li>
            </ul>
        </div>
        <div class="options">
            <a href="sub1.php" target="_self" class="dep1">일반고 특화 국비지원과정</a>
            <a href="sub2.php" target="_self" class="dep1">실업자 국비지원과정</a>
            <a href="sub3.php" target="_self" class="dep1">재직자 국비지원과정</a>
            <a href="sub4_list.php" target="_self" class="dep1">현재 진행중인 과정</a>
        </div>
    </div>
    <div class="top_h2 mb50"><p>현재 진행중인 과정</p></div>
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
                <colgroup>
                    <col width="20%"/>
                    <col width="60%"/>
                    <col width="20%"/>
                </colgroup>
                <thead>
                    <tr>
                        <th>구분</th>
                        <th>과정명ㆍ교육일정</th>
                        <th>모집인원</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td class="td_num">마감</td>
                        <td class="td_name sv_use al pl10"><a href="sub4_view.php" target="_self">제목</a></td>
                        <td class="td_date">20명</td>
                    </tr>
                    <tr class="">
                        <td class="td_num">마감</td>
                        <td class="td_name sv_use al pl10"><a href="sub4_view.php" target="_self">제목</a></td>
                        <td class="td_date">20명</td>
                    </tr>
                    <tr class="">
                        <td class="td_num">마감</td>
                        <td class="td_name sv_use al pl10"><a href="sub4_view.php" target="_self">제목</a></td>
                        <td class="td_date">20명</td>
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
        </form>
    </div>
</div>
<?php include_once('./include/tail.php'); ?>
