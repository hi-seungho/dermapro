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
                    <th>비밀번호</th>
                    <td><input type="password" class="input_text2"></td>
                </tr>
                <tr>
                    <th>모집과정</th>
                    <td>
                        <input type="radio" class="input_chk1"><label for="">항공정비과</label>
                        <input type="radio" class="input_chk1"><label for="">항공관광과</label>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">■ 지원자</th>
                </tr>

                <tr>
                    <th>성명</th>
                    <td><input type="text" class="input_text2"></td>
                </tr>
                <tr>
                    <th>성별</th>
                    <td>
                        <input type="radio" class="input_chk1"><label for="">남</label>
                        <input type="radio" class="input_chk1"><label for="">여</label>
                    </td>
                </tr>

                <tr>
                    <th>주민번호</th>
                    <td><input type="text" class="input_text2" placeholder="*앞자리만 작성해주세요" maxlength="6"></td>
                </tr>

                <tr>
                    <th>출신고교명</th>
                    <td>
                        <input type="text" class="input_text3" size="5"><span>고등</span>
                        <input type="text" class="input_text3" size="5"><span>학년</span>
                        <input type="text" class="input_text3" size="5"><span>반</span>
                        <input type="text" class="input_text3" size="5"><span>번</span>
                    </td>
                </tr>

                <tr>
                    <th>지역</th>
                    <td><input type="text" class="input_text2"></td>
                </tr>

                <tr>
                    <th>담당교사명</th>
                    <td><input type="text" class="input_text2"></td>
                </tr>

                <tr>
                    <th>사진</th>
                    <td>
                        <input type="file" name="bf_file[]" title="파일첨부 1 : 용량 1,048,576 바이트 이하만 업로드 가능" class="input2">
                    </td>
                </tr>

                <tr>
                    <th colspan="2">■ 연락처</th>
                </tr>

                <tr>
                    <th>주소</th>
                    <td><input type="text" class="input_text2"></td>
                </tr>

                <tr>
                    <th>전화번호(자택)</th>
                    <td><input type="text" class="input_text2"></td>
                </tr>

                <tr>
                    <th>휴대폰</th>
                    <td><input type="text" class="input_text2"></td>
                </tr>

                <tr>
                    <th>E-mail</th>
                    <td><input type="text" class="input_text2"></td>
                </tr>

                <tr>
                    <th colspan="2">■ 보호자</th>
                </tr>
                <tr>
                    <th>(부) 성명</th>
                    <td><input type="text" class="input_text2"></td>
                </tr>
                <tr>
                    <th>(부) 직업</th>
                    <td><input type="text" class="input_text2"></td>
                </tr>
                <tr>
                    <th>(부) 연락처</th>
                    <td><input type="text" class="input_text2"></td>
                </tr>
                <tr>
                    <th>(모) 성명</th>
                    <td><input type="text" class="input_text2"></td>
                </tr>
                <tr>
                    <th>(모) 직업</th>
                    <td><input type="text" class="input_text2"></td>
                </tr>
                <tr>
                    <th>(모) 연락처</th>
                    <td><input type="text" class="input_text2"></td>
                </tr>
                <tr>
                    <th colspan="2">■ 지원광고매체</th>
                </tr>
                <tr>
                    <th>지원광고매체</th>
                    <td>
                        <p>본교를 어떻게 알게 되셨습니까?</br>(2개 이상일 경우 중복 선택 가능합니다.)</p>
                        <div><input type="checkbox" class="input_chk1"><label for="">검색엔진</label></div>
                        <div><input type="checkbox" class="input_chk1"><label for="">카페/클럽</label></div>
                        <div><input type="checkbox" class="input_chk1"><label for="">메일확인</label></div>
                        <div><input type="checkbox" class="input_chk1"><label for="">학교선생님</label></div>
                        <div><input type="checkbox" class="input_chk1"><label for="">홍보자료(포스터, 팜플렛등)</label></div>
                        <div><input type="checkbox" class="input_chk1"><label for="">주변사람을 통해서</label></div>
                        <div><input type="checkbox" class="input_chk1"><label for="">설명회</label></div>
                        <div><input type="checkbox" class="input_chk1"><label for="">기타(구체적으로 기술)</label></div>
                        <textarea name="" id="" class="textarea1"></textarea>
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
