<?php include_once('./include/head.php'); ?>
<div id="cont_wrap">
    <div id="location_wrap">
        <div class="current_location">
            <ul>
                <li>HOME</li>
                <li>></li>
                <li class="focus">Reservation</li>
            </ul>
        </div>
        <div class="options">
            <a href="reservation.php" target="_self" class="dep1">Reservation</a>
        </div>
    </div>
    <div class="cont_size_type1">
        <p id="sub_title">Reservation</p>
        <p class="s_tit1">개인정보취급방침</p>
        <div class="policy_wrap">
            개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침 개인정보취급방침
        </div>
        <div class="policy_chk ar"><input type="checkbox" class=""><label>홈페이지의 개인정보처리방침에 동의합니다.</label></div>
        <p class="s_tit1 mt80">개인정보취급방침</p>
        <div class="tbl_frm01 tbl_wrap tbl_cmt">
            <table>
                <colgroup>
                    <col width="20%">
                    <col>
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row"><label for="wr_name">이름</label></th>
                        <td><input type="text" name="wr_name" value="" id="wr_name" required="" class="frm_input required" size="10" maxlength="20"></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="">연락처</label></th>
                        <td>
                            <input type="text" size="10" class="frm_input required" maxlength="20">
                            <span> - </span>
                            <input type="text" size="10" class="frm_input required" maxlength="20">
                            <span> - </span>
                            <input type="text" size="10" class="frm_input required" maxlength="20">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="">이메일</label></th>
                        <td>
                            <input type="text" size="40" class="frm_input required" maxlength="20">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="">예식일자</label></th>
                        <td>
                            <input type="text" size="15" class="frm_input required" maxlength="20">
                            <select name="" class="frm_input required" id="">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7</option>
                                <option value="">8</option>
                                <option value="">9</option>
                                <option value="">10</option>
                                <option value="">11</option>
                                <option value="">12</option>
                                <option value="">13</option>
                                <option value="">14</option>
                                <option value="">15</option>
                                <option value="">16</option>
                                <option value="">17</option>
                                <option value="">18</option>
                                <option value="">19</option>
                                <option value="">20</option>
                                <option value="">21</option>
                                <option value="">22</option>
                                <option value="">23</option>
                                <option value="">24</option>
                            </select>
                            <span>시</span>
                            <select name="" class="frm_input required" id="">
                                <option value="">10</option>
                                <option value="">20</option>
                                <option value="">30</option>
                                <option value="">40</option>
                                <option value="">50</option>
                            </select>
                            <span>분</span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="">예상하객수</label></th>
                        <td>
                            <input type="radio" class="input_chk"><label for="" style="margin-right: 20px;">100~200명</label>
                            <input type="radio" class="input_chk"><label for="" style="margin-right: 20px;">200~300명</label>
                            <input type="radio" class="input_chk"><label for="" style="margin-right: 20px;">300~400명</label>
                            <input type="radio" class="input_chk"><label for="" style="margin-right: 20px;">400명 이상</label>
                            <input type="radio" class="input_chk"><label for="">기타</label>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="">상담방법</label></th>
                        <td>
                            <input type="radio" class="input_chk"><label for="" style="margin-right: 20px;">전화상담</label>
                            <input type="radio" class="input_chk"><label for="" style="margin-right: 20px;">문자상담</label>
                            <input type="radio" class="input_chk"><label for="" style="margin-right: 20px;">방문상담</label>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">문의 내용</th>
                        <td>
                            <textarea id="wr_content" name="wr_content" maxlength="10000" required="" class="required" title="내용"></textarea>
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
                        <th scope="row">자동등록방지</th>
                        <td>
                            <script>
                                var g5_captcha_url = "http://lazboy.co.kr/plugin/kcaptcha";
                            </script>
                            <script src="http://lazboy.co.kr/plugin/kcaptcha/kcaptcha.js"></script>
                            <fieldset id="captcha" class="_comment">
                                <legend><label for="captcha_key"></label></legend>
                                <img src="http://lazboy.co.kr/plugin/kcaptcha/kcaptcha_image.php?t=1476770473479" alt="" id="captcha_img">
                                <button type="button" id="captcha_mp3"><span></span>숫자음성듣기</button>
                                <button type="button" id="captcha_reload"><span></span>새로고침</button><input type="text" name="captcha_key" id="captcha_key" required="" class="captcha_box required" size="6" maxlength="6">
                                <span id="captcha_info">자동등록방지 숫자를 순서대로 입력하세요.</span>
                            </fieldset>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="ar mt30">
                <a href=""><img src="./front/image/reservation/btn1.gif" alt=""></a>
                <a href=""><img src="./front/image/reservation/btn2.gif" alt=""></a>
            </div>
        </div>
    </div>
</div>
<?php include_once('./include/tail.php'); ?>
