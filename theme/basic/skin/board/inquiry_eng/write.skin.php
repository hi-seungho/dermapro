<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<div id="sub_top03">
    <div class="sub_tit">
        <img src="../../images/sub/img_subtop0303tit.png" alt="Inquiry">
    </div>
</div>
<div class="bread">
    <div class="home">
        <span class="ls0">HOME</span> <span>&gt;</span> <span class="bold">시험상담</span> </span>
    </div>
</div>

<div id="container">
    <div class="con">
        <div class="tit_bg">
            <h3>시험상담</h3>
        </div>
        <div class="board">

<section id="bo_w">
    <!-- 게시물 작성/수정 시작 { -->
    <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
    <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
    <input type="hidden" name="w" value="<?php echo $w ?>">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="wr_password" value="<?php echo rand(0000, 9999); ?>">
        <p class="ti-tit">
            <span class="bar"></span>개인정보처리방침
        </p>
        <section id="fregister_term">
            <!-- <h2>개인정보 취급방침</h2> -->
            <textarea readonly>※ 총 칙
1. (주)더마프로는 "정보통신망이용촉진및정보보호등에관한법률"상의 개인정보보호 규정과 정보통신부가 제정한 "개인정보보호지침" 및 "개인정보의 기술적/관리적 보호조치 기준"을 준수하고 있습니다. 또한 (주)더마프로는 "개인정보보호정책"을 제정하여 회원들의 개인정보 보호를 위해 최선을 다하겠음을 선언합니다.
2. (주)더마프로의 "개인정보보호정책"은 관련 법률 및 정부 지침의 변경과 (주)더마프로의 내부 방침 변경에 의해 변경될 수 있습니다. (주)더마프로의 "개인정보보호방침"이 변경될 경우 변경사항은 (주)더마프로 홈페이지의 공지사항에 최소 7일간 게시됩니다.


※ 개인정보
(주)더마프로는 귀하께서 (주)더마프로의 이용약관의 내용에 대해 "동의한다" 버튼 또는 "동의하지 않는다" 버튼을 클릭할 수 있는 절차를 마련하여, "동의한다" 버튼을 클릭하면 개인정보 수집에 대해 동의한 것으로 봅니다. 또한, 귀하께서 “동의한다” 버튼을 클릭하면 아래의 개인정보 수집 항목 중 “비밀번호”와 “주민등록번호”를 제외한 나머지 항목들은 (주)더마프로가 서비스 를 이행하기 위해 외주업체에 제공하는 것에 대해 동의한 것으로 간주합니다.


1. "개인정보"의 범위는 정보통신망이용촉진및정보보호등에관한법률에서 규정하는 내용에 따라, "생존하는 개인에 관한 정보로서 당해 정보에 포함되어 있는 성명, 주민등록번호 등의 사항에 의하여 당해 개인을 식별할 수 있는 정보(당해 정보만으로는 특정 개인을 식별할 수 없더라도 다른 정보와 용이하게 결합하여 식별할 수 있는 것을 포함한다)"를 의미합니다.
2. (주)더마프로는 이용자 확인, 대금결제, 이용 서비스의 소유자 확인, 개별회원에게 맞춤화된 서비스, 기타 부가서비스 등을 위하여 회원들의 개인정보를 수집ㆍ이용 합니다. 수집하는 개인정보 항목에 따른 구체적인 수집목적 및 이용 목적은 다음과 같습니다.
- 성명, 아이디, 비밀번호, 주민등록번호/사업자등록번호 : 회원제 서비스 이용에 따른 본인 확인 절차에 이용, 한 의사 소통
쿠키 ( 아이디 ) : 쿠키 운영을 통해 방문자들의 아이디를 자동 분석하여 등급별 차등화된 가격 혜택 적용.
고객께서는 웹브라우저에서 옵션을 설정함으로써 쿠키가 저장될 때마다 확인을 거치거나, 아니면 모든 쿠키의 저장을 거부할 수도 있습니다. 그러나 쿠키의 저장을 거부할 경우 웹서비스 이용이 제한될 수 있습니다.
3. (주)더마프로는 회원 개인정보를 위탁관리하지 않습니다.
4. 이용자의 기본적 인권 침해의 우려가 있는 민감한 개인정보(인종 및 민족, 사상 및 신조, 출신지 및 본적 지, 정치적 성향 및 범죄기록, 건강상태 및 성생활 등)는 요구하지 않습니다.
5. 개인정보의 보유 기간은 "회원이 (주)더마프로에 가입하는 순간부터 해지 신청 순간까지"입니다. (주)더마프로의 회원DB는 탈퇴신청자의 개인정보가 탈퇴 즉시 삭제토록 되어 있습니다.
단, 수집목적 및 제공받은 목적이 달성된 경우에도 법률의 규정에 의하여 보존할 필요성이 있는 경우에는 법률의 규정에 따라 고객의 개인정보를 보유할 수 있습니다.
- 계약 또는 청약철회 등에 관한 기록 : 5년
- 대금결제 및 재화등의 공급에 관한 기록 : 5년
- 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년 등


※ 제3자에 대한 정보 제공
1. (주)더마프로는 회원들의 개인정보를 무단으로 타인 또는 다른 회사나 기관에 제공하지 않습니다.
단, 다음에 해당하는 경우는 예외로 합니다.
도메인 이름 등록을 위하여 해당 도메인의 등록사업자에게 신청자의 정보를 제공하는 경우
도메인 이름에 대한 WHOIS 서비스를 위하여 제공하는 경우
정보통신망이용촉진및정보보호등에관한법률 등 관계법령에 의하여 국가기관 또는 정부에서 지정한 소비자단체들의 요청에 의한 경우
분쟁에 연루된 도메인 등록자의 연락처를 분쟁 조정 기구나 법원이 요청하는 경우
범죄에 대한 수사상의 목적이 있거나 정보통신윤리위원회, 한국정보보호진흥원 등 법정단체의 요청이 있는 경우
- 업무상 연락을 위하여 회원의 정보(성명, 주소, 전화번호)를 사용하는 경우
통계작성, 홍보자료, 학술연구 또는 시장조사를 위하여 필요한 경우로서 특정 고객임을 식별할 수 없는 형태로 제공되는 경우 회원들이 (주)더마프로의 서비스를 신청하여 (주)더마프로가 서비스 이행을 위해 배송업체, 외주콜센터업체, 지로발송 업체 등 에 해당 회원의 비밀번호, 주민등록번호를 포함하지 않는 주문정보, 주소지 정보, 연락처 등을 제공하는 경우

2. (주)더마프로는 보다 다양한 서비스 제공을 위하여 회원들의 개인정보를 제휴사에게 제공하거나, 제휴사와 공유하고자 할 때는 반드시 사전에 회원 개개인의 동의를 구하겠습니다. 제휴사가 어디인지, 제공 또는 공유되는 개인정보항목이 무엇인지, 왜 그러한 개인정보가 공유되어야 하는지, 그리고 언제까지 어떻게 보호, 관리되는지에 대해 개별적으로 전자우편을 통해 고지하여 동의를 구하는 절차를 거치게 되며, 귀하께서 동의하지 않는 경우에는 제휴사에게 제공하거나 제휴사와 공유하지 않습니다.


※ 개인정보의 열람 및 정정
1. (주)더마프로의 회원은 언제든지 자신의 개인정보를 열람하거나 정정하실 수 있습니다. 개인정보 열람 및 정정을 원하시는 분은 (주)더마프로 사이트에 로그온 하신 후, 로그아웃 버튼 옆의 "정보변경" 버튼을 클릭하십시오.
2. 만일 ID와 비밀번호를 잃어버리신 회원은 홈페이지에서 "ID 확인/비밀번호 확인"서비스를 통해 ID나 비밀번호를 확인하실 수 있습니다.
3. (주)더마프로 회원 ID와 비밀번호에 대한 관리 책임은 본인에게 있습니다.
본인의 개인정보를 효과적으로 보호하기 위해서 자신의 회원ID 와 비밀번호를 적절하게 관리하고 책임을 져야 합니다.
본인의 ID와 비밀번호를 유출하였다면 이에 대해서 (주)더마프로는 책임을 지지않습니다. 다만, (주)더마프로의 과실 혹은 고의에 의한 회원 ID와 비밀번호 유출에 대해서는 해당 고객이 (주)더마프로의 책임을 물을 수 있습니다.
이용자는 (주)더마프로의 계정을 이용해서 웹사이트를 이용한 뒤에는 해당 계정을 종료하시고 웹 브라우저의 창을 닫아주십시오. 특히 컴퓨터를 타인과 공유하거나 공공장소에서 사용하는 경우 반드시 로그아웃하시거나 웹 브라우저를 종료하여야 합니다.


※ 회원 탈퇴
(주)더마프로 회원은 언제든지 본인이 원할 때 탈퇴가 가능합니다. 회원 탈퇴는 회원 정보 관리 화면에서 신청 가능합니다.


※ 개인정보보호를 위한 기술적 대책
(주)더마프로는 회원들의 개인정보가 분실, 도난, 누출, 변조 또는 훼손되지 않도록 다음과 같은 기술적 대책을 마련하고 있습니다.
1. 회원 개개인의 개인정보는 비밀번호에 의해 보호되며, 개인정보 데이터는 별도의 보안기능을 통해 보호 되고 있습니다.
2. 회원 개개인의 비밀번호는 이용자 및 개인정보취급자가 생일, 주민등록번호, 전화번호 등 추측하기 쉬운 숫자를 비밀번호로 이용하지 않도록 패스워드 작성 규칙을 수립하고 이행합니다.
3. (주)더마프로는 백신 프로그램 및 악성코드 방어 소프트웨어을 이용하여 컴퓨터 바이러스에 의한 피해를 방지하고 있으며, 해당 소프트웨어는 매일 주기적으로 업데이트하고 있습니다.
4. (주)더마프로는 침입차단 기능과 침입탐지 기능을 탑재하고 있는 고가의 라우터와 L3 스위치 장비를 사용하여 이중으로 네트워크 상의 개인정보를 안전하게 보호하고 있습니다.
5. (주)더마프로는 또한 별도의 침입차단시스템(Firewall)을 구축하여 3중 개인정보보호시스템을 운영하고 있습니다.
6. (주)더마프로는 개인정보를 개인정보보호시스템에 암호화하여 저장하고 있으며, (주)더마프로의 정보통신망 외부로 개인정보를 송신하거나 PC에 저장할 경우 암호화하여 저장하도록 시스템을 운영하고 있습니다.


※ 의견수렴 및 불만처리
(주)더마프로 회원 중 (주)더마프로의 개인정보보호와 관련하여 불만이 있으신 분은 개인정보 관리책임자에게 의견을 주시면, 접수 즉시 조치하여 처리결과를 통보해 드리겠습니다. 개인정보 무단 유출이나 기타 심각한 개인정보 침해 시에는 정부에서 설치하여 운영중인 개인정보침해 신고센터(http://www.cyberpr ivacy.or.kr, http://www.1336.or.kr, 전화 02-1336,)에 불만처리 또는 중재를 신청하실 수도 있습니다.


※ 개인정보관리 계획의 수립 및 시행
(주)더마프로는 회사 규정에 별도의 전산관리규정을 마련하여 다음과 같은 사항을 준수하겠습니다.
1. 개인정보관리책임자의 지정 등 개인정보보호 조칙의 구성, 운영에 관한 사항
2. 개인정보취급자의 교육에 관한 사항
3. 개인정보처리시스템의 접속 기록 유지 및 정기적인 확인 감독
4. 개인정보 출력 및 복사시의 보호조치
5. 기타 개인정보 보호를 위해 필요한 사항


※ 개인정보 관리 담당자
(주)더마프로는 개인정보에 대한 의견수렴 및 불만처리를 담당하는 개인정보 관리담당자를 지정하고 있습니다.
- 개인정보 관리 담당자
성 명 : 유 현승
직 책 : 대리
전화번호 : 070-4367-7421
E-mail : dermapro@dermapro.co.kr


※ 아동의 회원 가입에 대해
1. (주)더마프로는 아동의 개인정보를 보호하기 위하여 만 14세 미만의 아동이 회원 가입을 신청할 경우 법정대리인(부모)의 동의가 있어야 합니다. 부모님의 허락을 받지않은 14세 미만의 미성년자에 대해서는 (주)더마프로가 임의로 회원에서 제외할 수 있습니다.
2. 만 14세 미만 미성년자의 법정대리인은 대리인의 책임하에 있는 미성년자의 개인정보에 대한 열람, 정정, 동의철회를 요청할 수 있으며, 이러한 요청이 있을 경우 (주)더마프로는 지체없이 필요한 조치를 취하겠습니다.


※ 미성년자 거래시 철회에 대해
(주)더마프로는 미성년자와의 거래시 사전에 법정대리인(부모)의 동의를 구할 의무가 있으며, 법정대리인(부모)의 동의를 얻지 못한 거래의 경우, 거래를 취소할 수 있습니다. 또한 거래 당사자인 미성년자의 법정대리인(부모)이 거래 성립 후 7일 이내에 철회를 요청할 경우, 거래를 철회(환불)하겠습니다.


※ 광고성 정보 전송에 대해
1. (주)더마프로는 회원을 대상으로 (주)더마프로가 제공하고 있는 서비스에 대한 안내, 서비스에 대한 공지 등에 대한 메일을 자유롭게 보낼 수 있습니다.
2. (주)더마프로는 회원을 대상으로 광고성 정보를 전송할 수 있습니다. 단, 이러한 경우에는 (광고)라는 문구를 표시하여 회원들이 광고성 정보임을 쉽게 파악할 수 있게 하며, 수신거부 의사를 밝힌 회원에게는 광고성 정보를 전송하지 않겠습니다.</textarea>
            <fieldset class="fregister_agree">
                <input type="checkbox" name="agree" value="1" id="agree11" required class="required">
                <label for="agree11">더마프로의 개인정보취급방침에 동의합니다.</label>
            </fieldset>
        </section>

        <p class="ti-tit">
            <span class="bar"></span>기본 정보
        </p>

    <div class="tbl_frm01 tbl_wrap">
        <table>
        <tbody>
        <tr>
            <th scope="row"><label for="wr_subject">회사명<strong class="sound_only">필수</strong></label></th>
            <td>
                <div id="autosave_wrapper">
                    <input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input required" size="50" maxlength="255">
                    <?php if ($is_member) { // 임시 저장된 글 기능 ?>
                        <script src="<?php echo G5_JS_URL; ?>/autosave.js"></script>
                    <?php if($editor_content_js) echo $editor_content_js; ?>
                        <button type="button" id="btn_autosave" class="btn_frmline">임시 저장된 글 (<span id="autosave_count"><?php echo $autosave_count; ?></span>)</button>
                        <div id="autosave_pop">
                            <strong>임시 저장된 글 목록</strong>
                            <div><button type="button" class="autosave_close"><img src="<?php echo $board_skin_url; ?>/img/btn_close.gif" alt="닫기"></button></div>
                            <ul></ul>
                            <div><button type="button" class="autosave_close"><img src="<?php echo $board_skin_url; ?>/img/btn_close.gif" alt="닫기"></button></div>
                        </div>
                    <?php } ?>
                </div>
            </td>
        </tr>


        <?php if ($is_name) { ?>
        <tr>
            <th scope="row"><label for="wr_name">담당자<strong class="sound_only">필수</strong></label></th>
            <td><input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input required" size="10" maxlength="20"></td>
        </tr>
        <?php } ?>

        <tr>
            <th scope="row"><label for="wr_1">연락처</label></th>
            <td><input type="text" name="wr_1" value="<?php echo $write['wr_1'] ?>" id="wr_1" class="frm_input" size="50"></td>
        </tr>

        <?php if ($is_email) { ?>
        <tr>
            <th scope="row"><label for="wr_email">이메일</label></th>
            <td><input type="text" name="wr_email" value="<?php echo $email ?>" id="wr_email" class="frm_input email" size="50" maxlength="100"></td>
        </tr>
        <?php } ?>

        <tr>
            <th scope="row"><label for="wr_2">의뢰목적</label></th>
            <td class="vam">
                <input type="radio" name="wr_2" value="허가용" <?php echo get_checked('허가용', $write['wr_2']); ?>>
                <label for="permission">허가용<label>
                <input type="radio" name="wr_2" value="마케팅용" <?php echo get_checked('마케팅용', $write['wr_2']); ?>>
                <label for="marketing">마케팅용<label>
                <input type="radio" name="wr_2" value="연구용" <?php echo get_checked('연구용', $write['wr_2']); ?>>
                <label for="study">연구용<label>
                <input type="radio" name="wr_2" value="기타" <?php echo get_checked('기타', $write['wr_2']); ?>>
                <label for="other">기타<label>
            </td>
        </tr>

        <tr>
            <th scope="row"><label for="wr_3">평가항목</label></th>
            <td><input type="text" name="wr_3" value="<?php echo $write['wr_3'] ?>" id="wr_3" class="frm_input" size="50"></td>
        </tr>

        <tr>
            <th scope="row"><label for="wr_4">시험제품/제형</label></th>
            <td><input type="text" name="wr_4" value="<?php echo $write['wr_4'] ?>" id="wr_4" class="frm_input" size="50"></td>
        </tr>

        <tr>
            <th scope="row"><label for="wr_5">희망시험 시작일</label></th>
            <td><input type="text" name="wr_5" value="<?php echo $write['wr_5'] ?>" id="wr_5" class="frm_input" size="50"></td>
        </tr>

        <tr>
            <th scope="row"><label for="wr_6">휴대폰번호</label></th>
            <td><input type="text" name="wr_6" value="<?php echo $write['wr_6'] ?>" id="wr_6" class="frm_input" size="50"></td>
        </tr>

        <tr>
            <th scope="row"><label for="wr_content">기타<strong class="sound_only">필수</strong></label></th>
            <td class="wr_content">
                <?php if($write_min || $write_max) { ?>
                <!-- 최소/최대 글자 수 사용 시 -->
                <p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
                <?php } ?>
                <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
                <?php if($write_min || $write_max) { ?>
                <!-- 최소/최대 글자 수 사용 시 -->
                <div id="char_count_wrap"><span id="char_count"></span>글자</div>
                <?php } ?>
            </td>
        </tr>

        <?php if ($is_guest) { //자동등록방지  ?>
        <tr>
            <th scope="row">자동등록방지</th>
            <td>
                <?php echo $captcha_html ?>
            </td>
        </tr>
        <?php } ?>

        </tbody>
        </table>
    </div>

    <div class="btn_confirm">
        <input type="submit" value="문의하기" id="btn_submit" accesskey="s" class="btn_submit">
        <?php if($is_admin) {?>
        <a href="./board.php?bo_table=<?php echo $bo_table ?>" class="btn_cancel">취소</a>
        <?php } ?>
    </div>
    </form>

    <script>
    <?php if($write_min || $write_max) { ?>
    // 글자수 제한
    var char_min = parseInt(<?php echo $write_min; ?>); // 최소
    var char_max = parseInt(<?php echo $write_max; ?>); // 최대
    check_byte("wr_content", "char_count");

    $(function() {
        $("#wr_content").on("keyup", function() {
            check_byte("wr_content", "char_count");
        });
    });

    <?php } ?>
    function html_auto_br(obj)
    {
        if (obj.checked) {
            result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
            if (result)
                obj.value = "html2";
            else
                obj.value = "html1";
        }
        else
            obj.value = "";
    }

    function fwrite_submit(f)
    {
        <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

        var subject = "";
        var content = "";
        $.ajax({
            url: g5_bbs_url+"/ajax.filter.php",
            type: "POST",
            data: {
                "subject": f.wr_subject.value,
                "content": f.wr_content.value
            },
            dataType: "json",
            async: false,
            cache: false,
            success: function(data, textStatus) {
                subject = data.subject;
                content = data.content;
            }
        });

        if (subject) {
            alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
            f.wr_subject.focus();
            return false;
        }

        if (content) {
            alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
            if (typeof(ed_wr_content) != "undefined")
                ed_wr_content.returnFalse();
            else
                f.wr_content.focus();
            return false;
        }

        if (document.getElementById("char_count")) {
            if (char_min > 0 || char_max > 0) {
                var cnt = parseInt(check_byte("wr_content", "char_count"));
                if (char_min > 0 && char_min > cnt) {
                    alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
                    return false;
                }
                else if (char_max > 0 && char_max < cnt) {
                    alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                    return false;
                }
            }
        }

        <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

        document.getElementById("btn_submit").disabled = "disabled";

        return true;
    }
    </script>
</section>
<!-- } 게시물 작성/수정 끝 -->
        </div>
    </div>
</div>