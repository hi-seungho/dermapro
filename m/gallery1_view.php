<?php include_once('./include/head.php'); ?>
<div id="cont_wrap">
    <div id="location_wrap">
        <div class="current_location">
            <ul>
                <li><img src="./front/image/common/header/ico_home.gif" alt="" /></li>
                <li>HOME</li>
                <li>></li>
                <li>진로현황</li>
                <li>></li>
                <li class="focus">군부사관임관현황</li>
            </ul>
        </div>
        <div class="options">
            <a href="gallery_list.php" target="_self" class="dep1">취업현황</a>
            <a href="gallery1_list.php" target="_self" class="dep1">군부사관임관현황</a>
            <a href="gallery2_1_list.php" target="_self" class="dep1">자격증 취득현황 및 일정</a>
            <a href="gallery3_list.php" target="_self" class="dep1">선배이야기</a>
        </div>
    </div>
    <div class="top_h2 mb50"><p>군부사관임관현황</p></div>
    <div class="cont_size_type1">
        <table class="table4" cellpadding="0" cellspacing="0">
        	<tbody>
                <tr>
                    <td class="col2">신*경</td>
                </tr>
                <tr>
        	        <td class="col2">작성자 :<span class="sv_member">관리자</span> 16-09-09 11:33
        	        조회 : 105회
        	        댓글 : 0건
        	        </td>
                </tr>
                <!-- 관련링크 시작 { -->
                <tr>
                    <td class="col3"></td>
                </tr>
                <!-- } 관련링크 끝 -->
                <tr>
                    <td class="al">
                    <div id="bo_v_img"></div>
                    <!-- 본문 내용 시작 { -->
                    <div id="bo_v_con">내용</div>
                    <!-- } 본문 내용 끝 -->
                    </td>
                </tr>
        	</tbody>
        </table>
        <table class="table5 mt50 mb50" cellspacing="0" cellpadding="0">
            <tbody>
            	<tr>
                    <td class="col3">댓글목록</td>
                </tr>
                <tr>
                    <td>등록된 댓글이 없습니다.</td>
                </tr>
        	</tbody>
        </table>
        <table class="table2" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <th scope="row"><label for="wr_name">이름<strong class="sound_only">필수</strong></label></th>
                    <td><input type="text" name="wr_name" value="" id="wr_name" required="" class="frm_input required" size="15" maxlength="20"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="wr_password">비밀번호<strong class="sound_only">필수</strong></label></th>
                    <td><input type="password" name="wr_password" id="wr_password" required="" class="frm_input required" size="20" maxlength="20"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="wr_secret">비밀글사용</label></th>
                    <td><input type="checkbox" name="wr_secret" value="secret" id="wr_secret"></td>
                </tr>
                <tr>
                    <th scope="row">자동등록방지</th>
                    <td>
                        <script>
                            var g5_captcha_url = "http://iasea.e-bizs.net/plugin/kcaptcha";
                        </script>
                        <script src="http://iasea.e-bizs.net/plugin/kcaptcha/kcaptcha.js"></script>
                        <fieldset id="captcha" class="_comment">
                            <legend><label for="captcha_key">자동등록방지</label></legend>
                            <img src="http://iasea.e-bizs.net/plugin/kcaptcha/kcaptcha_image.php?t=1478147885097" alt="" id="captcha_img">
                            <button type="button" id="captcha_mp3"><span></span>숫자음성듣기</button>
                            <button type="button" id="captcha_reload"><span></span>새로고침</button><input type="text" name="captcha_key" id="captcha_key" required="" class="captcha_box required" size="6" maxlength="6">
                            <span id="captcha_info">자동등록방지 숫자를 순서대로 입력하세요.</span>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <th scope="row">내용</th>
                    <td>
                        <textarea id="wr_content" name="wr_content" maxlength="10000" required="" class="textarea1" title="내용"></textarea>
                        <script>
                            $(document).on("keyup change", "textarea#wr_content[maxlength]", function() {
                                var str = $(this).val()
                                var mx = parseInt($(this).attr("maxlength"))
                                if (str.length > mx) {
                                    $(this).val(str.substr(0, mx));
                                    return false;
                                }
                            });
                        </script>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" class="ac mt20 mb20" style="margin: 0; padding: 0;">
                        <input type="image" id="btn_submit" src="./front/image/common/board/btn_reply.gif" style="background: none;" value="댓글등록">
                    </td>
                </tr>

            </tbody>
        </table>
        <div class="board_view_btns mt30 clfl">
            <a href=""><img style="margin: 0 5px 5px 0;" src="./front/image/common/board/btn_b_prev.gif" alt=""></a>
            <a href=""><img style="margin: 0 5px 5px 0;" src="./front/image/common/board/btn_b_next.gif" alt=""></a>
            <a href="gallery_list.php"><img style="margin: 0 0 5px 0;" src="./front/image/common/board/btn_b_list.gif" alt=""></a>
        </div>
    </div>
</div>
<?php include_once('./include/tail.php'); ?>
