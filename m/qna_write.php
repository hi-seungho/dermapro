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
                <li class="focus">입학상담하기/묻고답하기</li>
            </ul>
        </div>
        <div class="options">
            <a href="online_list.php" target="_self" class="dep1">온라인 접수하기</a>
            <a href="qna_list.php" target="_self" class="dep1">입학상담하기/묻고답하기</a>
            <a href="map1.php" target="_self" class="dep1">진로로드맵</a>
            <a href="visit.php" target="_self" class="dep1">방문상담신청</a>
        </div>
    </div>
    <div class="top_h2 mb50"><p>입학상담하기/묻고답하기</p></div>
    <div class="cont_size_type1">
        <div class="admi_2">
        	<div class="mb20">개인정보취급방침 </div>
            <div style="border-top:1px solid #dcdcdc; padding-top:20px; padding-bottom:20px; line-height:24px;">

                <strong>■ 수집하는 개인정보 항목</strong> <br><br>
                회사는 회원가입, 상담, 서비스 신청 등등을 위해 아래와 같은 개인정보를 수집하고 있습니다.<br>
                ο 수집항목 : 학교, 성명, 연락처, 이메일<br>
                ο 개인정보 수집방법 : 홈페이지(1:1 상담신청)  <br><br>

                <strong>■ 개인정보의 수집 및 이용목적 </strong><br><br>
                회사는 수집한 개인정보를 다음의 목적을 위해 활용합니다.<br>
                ο 서비스 제공에 관한 계약 이행 및 서비스 제공에 따른 요금정산<br>
                 콘텐츠 제공<br><br>

                <strong> ■ 개인정보의 보유 및 이용기간 </strong><br><br>
                회사는 개인정보 수집 및 이용목적이 달성된 후에는 예외없이 해당 정보를 지체 없이 파기합니다.<br>
            </div>
        </div>
        <div class="ar mt10 mb30"><input type="checkbox" class="input_chk1"><label for="">개인정보취급방침에 동의합니다.</label></div>
        <table class="table2" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <th>작성자</th>
                    <td><input type="text" class="input_text2"></td>
                </tr>
                <tr>
                    <th>학교명</th>
                    <td>
                        <input type="text" class="input_text3" size="30">
                        <span>학교</span>
                    </td>
                </tr>
                <tr>
                    <th>학년</th>
                    <td>
                        <input type="text" class="input_text3" size="30">
                        <span>학년</span>
                    </td>
                </tr>
                <tr>
                    <th>옵션</th>
                    <td>
                        <input type="checkbox" class="input_chk1"><label for="">비밀글</label>
                    </td>
                </tr>
                <tr>
                    <th>비밀번호</th>
                    <td><input type="password" class="input_text2" placeholder="(글 수정시 필요)"></td>
                </tr>
                <tr>
                    <th>이메일</th>
                    <td>
                        <input type="text" class="input_text2" size="30">
                    </td>
                </tr>
                <tr>
                    <th>전화번호</th>
                    <td>
                        <input type="text" class="input_text2" size="30">
                    </td>
                </tr>
                <tr>
                    <th>교육과정</th>
                    <td>
                        <select class="sel_type2" name="">
                            <option value="">전체목록</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>제목</th>
                    <td><input type="text" class="input_text2" size="30"></td>
                </tr>
                <tr>
                    <th>내용</th>
                    <td>
                        <textarea name="" id="" class="textarea2"></textarea>
                    </td>
                </tr>
                <tr>
                    <th>링크 #1</th>
                    <td><input type="text" class="input_text2" size="30"></td>
                </tr>
                <tr>
                    <th>링크 #2</th>
                    <td><input type="text" class="input_text2" size="30"></td>
                </tr>
                <tr>
                    <th>파일 #1</th>
                    <td>
                        <input type="file" name="bf_file[]" title="파일첨부 1 : 용량 1,048,576 바이트 이하만 업로드 가능" class="input2">
                    </td>
                </tr>
                <tr>
                    <th>파일 #2</th>
                    <td>
                        <input type="file" name="bf_file[]" title="파일첨부 1 : 용량 1,048,576 바이트 이하만 업로드 가능" class="input2">
                    </td>
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
            </tbody>
        </table>
        <div class="board_view_btns mt30 clfl">
            <a href=""><img style="margin-right: 4px;" src="./front/image/common/board/btn_cancel.gif" alt=""></a>
            <a href="online_list.php"><img src="./front/image/common/board/btn_submit.gif" alt=""></a>
        </div>
    </div>
</div>
<?php include_once('./include/tail.php'); ?>
