<?include"../../include/header.php" ?>
<h1 id="Logo">
	<a href="../../index.php"><!-- <img src="../../images/main/logo.gif" alt="DERMAPRO"> <--><img src="../../images/main/img_logoblue.gif" alt="DERMAPRO" /></a>
</h1>
<?include"../../include/gnb.php" ?>

	<div id="sub_top04">
		<div class="sub_tit">
			<img src="../../images/sub/img_subtop0404tit.png" alt="Inquiry">
		</div>
	</div>
	<div class="bread">
		<div class="home">
			<span class="ls0">HOME</span> <span>&gt;</span> 뉴스센터 <span>&gt;</span> <span class="bold">더마프로 뉴스</span>
		</div>
	</div>
	
	<ul class="sub_top_menu four">
		<li class="on"><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=news">더마프로 뉴스</a></li>
		<li><a href="/news/paper_patent.php">더마프로 학술활동</a></li>
		<?php if ($config['cf_1']) { ?>
			<li><a href="<?php echo G5_DATA_URL; ?>/file/config/<?php echo $config['cf_1']; ?>" target="_blank">E-브로셔</a></li>
		<?php } ?>
		<li><a href="agency.php">관련기관</a></li>
	</ul>
	<div id="container">
		<div class="con">
			<div class="tit_bg">
				<h3>더마프로 뉴스</h3>
			</div>
			<div class="news">
		        <!-- <h2 id="container_title">공지사항<span class="sound_only"> 목록</span></h2> -->

		        <!-- 게시판 목록 시작 { -->
		        <div id="bo_list" style="width:100%">

		            <!-- 게시판 카테고리 시작 { -->
		           <!--  <nav id="bo_cate">
		                <h2>공지사항 카테고리</h2>
		                <ul id="bo_cate_ul">
		                    <li><a href="#" id="bo_cate_on">전체</a></li>
		                    <li><a href="#">업무</a></li>
		                    <li><a href="#">사우회</a></li>
		                    <li><a href="#">워크샵</a></li>
		                    <li><a href="#">강좌</a></li>
		                </ul>
		            </nav> -->
		            <!-- } 게시판 카테고리 끝 -->

		            <!-- 게시판 페이지 정보 및 버튼 시작 { -->
		            <div class="bo_fx">
		                <div id="bo_list_total">
		                    <span>Total 3건</span>
		                    1 페이지
		                </div>
		                <!-- <ul class="btn_bo_user">
		                    <li><a href="#" class="btn_b01">RSS</a></li>
		                    <li><a href="#" class="btn_admin">관리자</a></li>
		                    <li><a href="#" class="btn_b02">글쓰기</a></li>
		                </ul> -->
		            </div>
		            <!-- } 게시판 페이지 정보 및 버튼 끝 -->

		            <form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
		                <input type="hidden" name="bo_table" value="notice">
		                <input type="hidden" name="sfl" value="">
		                <input type="hidden" name="stx" value="">
		                <input type="hidden" name="spt" value="">
		                <input type="hidden" name="sca" value="">
		                <input type="hidden" name="sst" value="wr_num, wr_reply">
		                <input type="hidden" name="sod" value="">
		                <input type="hidden" name="page" value="1">
		                <input type="hidden" name="sw" value="">

		                <div class="tbl_head01 tbl_wrap">
		                    <table>
		                        <caption>공지사항 목록</caption>
		                        <thead>
		                        <tr>
		                            <th scope="col">번호</th>
		                           <!--  <th scope="col">
		                                <label for="chkall" class="sound_only">현재 페이지 게시물 전체</label>
		                                <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
		                            </th> -->
		                            <th scope="col">제목</th>
		                            <!-- <th scope="col">글쓴이</th> -->
		                            <th scope="col"><a href="#">동록일</a></th>
		                            <th scope="col"><a href="#">조회수</a></th>
		                            <!-- <th scope="col"><a href="#">추천</a></th>
		                            <th scope="col"><a href="#">비추천</a></th> -->
		                        </tr>
		                        </thead>
		                        <tbody>
		                        <tr class="bo_notice">
		                            <td class="td_num">
		                                <strong>공지</strong>
		                            </td>
		                            <!-- <td class="td_chk">
		                                <label for="chk_wr_id_0" class="sound_only">동영상 강의 사이트</label>
		                                <input type="checkbox" name="chk_wr_id[]" value="8" id="chk_wr_id_0">
		                            </td> -->
		                            <td class="td_subject">
		                                <!-- <a href="#" class="bo_cate_link">강좌</a> -->
		                                <a href="news_view.php">동영상 강의 사이트</a>
		                                <img src="img/icon_new.gif" alt="새글">
		                                <!-- <img src="img/icon_hot.gif" alt="인기글"> -->
		                                <img src="img/icon_file.gif" alt="첨부파일">
		                                <img src="img/icon_link.gif" alt="관련링크">
		                                <!-- <img src="img/icon_secret.gif" alt="비밀글"> -->
		                            </td>
		                            <!-- <td class="td_name sv_use">
		                                <span class="sv_wrap">
		                                    <a href="#" class="sv_member" title="최고관리자 자기소개" target="_blank" onclick="return false;"> 최고관리자</a>
		                                    <span class="sv">
		                                        <a href="#" onclick="win_memo(this.href); return false;">쪽지보내기</a>
		                                        <a href="#" onclick="win_email(this.href); return false;">메일보내기</a>
		                                        <a href="#" onclick="win_profile(this.href); return false;">자기소개</a>
		                                        <a href="#">아이디로 검색</a>
		                                        <a href="#">전체게시물</a>
		                                    </span>
		                                    <noscript class="sv_nojs">&lt;span class="sv"&gt;
		                                        &lt;a href="#" onclick="win_memo(this.href); return false;"&gt;쪽지보내기&lt;/a&gt;
		                                        &lt;a href="#" onclick="win_email(this.href); return false;"&gt;메일보내기&lt;/a&gt;
		                                        &lt;a href="#" onclick="win_profile(this.href); return false;"&gt;자기소개&lt;/a&gt;
		                                        &lt;a href="#"&gt;아이디로 검색&lt;/a&gt;
		                                        &lt;a href="#"&gt;전체게시물&lt;/a&gt;
		                                        &lt;/span&gt;
		                                    </noscript>
		                                </span>
		                            </td> -->
		                            <td class="td_date fw">18:23</td>
		                            <td class="td_num fw">1</td>
		                            <!-- <td class="td_num">1</td>
		                            <td class="td_num">1</td> -->
		                        </tr>
		                        <tr>
		                            <td class="td_num">6</td>
		                            <!-- <td class="td_chk">
		                                <label for="chk_wr_id_0" class="sound_only">사용서체 라이센스</label>
		                                <input type="checkbox" name="chk_wr_id[]" value="8" id="chk_wr_id_0">
		                            </td> -->
		                            <td class="td_subject">
		                                <!-- <a href="#" class="bo_cate_link">업무</a> -->
		                                <a href="news_view.php">사용서체 라이센스</a>
		                                <img src="img/icon_new.gif" alt="새글">
		                                <!-- <img src="img/icon_hot.gif" alt="인기글"> -->
		                                <img src="img/icon_file.gif" alt="첨부파일">
		                                <!-- <img src="img/icon_link.gif" alt="관련링크">
		                                <img src="img/icon_secret.gif" alt="비밀글"> -->
		                            </td>
		                            <!-- <td class="td_name sv_use">
		                                <span class="sv_wrap">
		                                    <a href="#" class="sv_member" title="최고관리자 자기소개" target="_blank" onclick="return false;"> 최고관리자</a>
		                                    <span class="sv">
		                                        <a href="#" onclick="win_memo(this.href); return false;">쪽지보내기</a>
		                                        <a href="#" onclick="win_email(this.href); return false;">메일보내기</a>
		                                        <a href="#" onclick="win_profile(this.href); return false;">자기소개</a>
		                                        <a href="#">아이디로 검색</a>
		                                        <a href="#">전체게시물</a>
		                                    </span>
		                                    <noscript class="sv_nojs">&lt;span class="sv"&gt;
		                                        &lt;a href="#" onclick="win_memo(this.href); return false;"&gt;쪽지보내기&lt;/a&gt;
		                                        &lt;a href="#" onclick="win_email(this.href); return false;"&gt;메일보내기&lt;/a&gt;
		                                        &lt;a href="#" onclick="win_profile(this.href); return false;"&gt;자기소개&lt;/a&gt;
		                                        &lt;a href="#"&gt;아이디로 검색&lt;/a&gt;
		                                        &lt;a href="#"&gt;전체게시물&lt;/a&gt;
		                                        &lt;/span&gt;
		                                    </noscript>
		                                </span>
		                            </td> -->
		                            <td class="td_date">18:23</td>
		                            <td class="td_num">1</td>
		                            <!-- <td class="td_num">1</td>
		                            <td class="td_num">1</td> -->
		                        </tr>
		                       <!--  <tr>
		                            <td class="td_num">5</td>
		                            <td class="td_chk">
		                                <label for="chk_wr_id_0" class="sound_only">Re: 사용서체 라이센스</label>
		                                <input type="checkbox" name="chk_wr_id[]" value="8" id="chk_wr_id_0">
		                            </td>
		                            <td class="td_subject">
		                                <img src="img/icon_reply.gif" style="margin-left:10px;" alt="답변글">
		                                <a href="#" class="bo_cate_link">업무</a> 
		                                <a href="#">Re: 사용서체 라이센스</a>
		                                <img src="img/icon_new.gif" alt="새글">
		                                <img src="img/icon_hot.gif" alt="인기글">
		                                <img src="img/icon_file.gif" alt="첨부파일">
		                                <img src="img/icon_link.gif" alt="관련링크">
		                                <img src="img/icon_secret.gif" alt="비밀글">
		                            </td>
		                            <td class="td_name sv_use">
		                                <span class="sv_wrap">
		                                    <a href="#" class="sv_member" title="최고관리자 자기소개" target="_blank" onclick="return false;"> 최고관리자</a>
		                                    <span class="sv">
		                                        <a href="#" onclick="win_memo(this.href); return false;">쪽지보내기</a>
		                                        <a href="#" onclick="win_email(this.href); return false;">메일보내기</a>
		                                        <a href="#" onclick="win_profile(this.href); return false;">자기소개</a>
		                                        <a href="#">아이디로 검색</a>
		                                        <a href="#">전체게시물</a>
		                                    </span>
		                                    <noscript class="sv_nojs">&lt;span class="sv"&gt;
		                                        &lt;a href="#" onclick="win_memo(this.href); return false;"&gt;쪽지보내기&lt;/a&gt;
		                                        &lt;a href="#" onclick="win_email(this.href); return false;"&gt;메일보내기&lt;/a&gt;
		                                        &lt;a href="#" onclick="win_profile(this.href); return false;"&gt;자기소개&lt;/a&gt;
		                                        &lt;a href="#"&gt;아이디로 검색&lt;/a&gt;
		                                        &lt;a href="#"&gt;전체게시물&lt;/a&gt;
		                                        &lt;/span&gt;
		                                    </noscript>
		                                </span>
		                            </td>
		                            <td class="td_date">18:23</td>
		                            <td class="td_num">1</td>
		                            <td class="td_num">1</td>
		                            <td class="td_num">1</td>
		                        </tr> -->
		                        <tr>
		                            <td class="td_num">6</td>
		                            <!-- <td class="td_chk">
		                                <label for="chk_wr_id_0" class="sound_only">사용서체 라이센스</label>
		                                <input type="checkbox" name="chk_wr_id[]" value="8" id="chk_wr_id_0">
		                            </td> -->
		                            <td class="td_subject">
		                                <!-- <a href="#" class="bo_cate_link">업무</a> -->
		                                <a href="#">사용서체 라이센스</a>
		                                <!-- <img src="img/icon_new.gif" alt="새글">
		                                <img src="img/icon_hot.gif" alt="인기글">
		                                <img src="img/icon_file.gif" alt="첨부파일"> -->
		                                <img src="img/icon_link.gif" alt="관련링크">
		                                <!-- <img src="img/icon_secret.gif" alt="비밀글"> -->
		                            </td>
		                            <!-- <td class="td_name sv_use">
		                                <span class="sv_wrap">
		                                    <a href="#" class="sv_member" title="최고관리자 자기소개" target="_blank" onclick="return false;"> 최고관리자</a>
		                                    <span class="sv">
		                                        <a href="#" onclick="win_memo(this.href); return false;">쪽지보내기</a>
		                                        <a href="#" onclick="win_email(this.href); return false;">메일보내기</a>
		                                        <a href="#" onclick="win_profile(this.href); return false;">자기소개</a>
		                                        <a href="#">아이디로 검색</a>
		                                        <a href="#">전체게시물</a>
		                                    </span>
		                                    <noscript class="sv_nojs">&lt;span class="sv"&gt;
		                                        &lt;a href="#" onclick="win_memo(this.href); return false;"&gt;쪽지보내기&lt;/a&gt;
		                                        &lt;a href="#" onclick="win_email(this.href); return false;"&gt;메일보내기&lt;/a&gt;
		                                        &lt;a href="#" onclick="win_profile(this.href); return false;"&gt;자기소개&lt;/a&gt;
		                                        &lt;a href="#"&gt;아이디로 검색&lt;/a&gt;
		                                        &lt;a href="#"&gt;전체게시물&lt;/a&gt;
		                                        &lt;/span&gt;
		                                    </noscript>
		                                </span>
		                            </td>-->
		                            <td class="td_date">18:23</td>
		                            <td class="td_num">1</td>
		                            <!-- <td class="td_num">1</td>
		                            <td class="td_num">1</td> -->
		                        </tr>
		                        <tr>
		                            <td class="td_num">6</td>
		                            <!-- <td class="td_chk">
		                                <label for="chk_wr_id_0" class="sound_only">사용서체 라이센스</label>
		                                <input type="checkbox" name="chk_wr_id[]" value="8" id="chk_wr_id_0">
		                            </td> -->
		                            <td class="td_subject">
		                                <!-- <a href="#" class="bo_cate_link">업무</a> -->
		                                <a href="#">사용서체 라이센스</a>
		                                <!-- <img src="img/icon_new.gif" alt="새글">
		                                <img src="img/icon_hot.gif" alt="인기글">
		                                <img src="img/icon_file.gif" alt="첨부파일">
		                                <img src="img/icon_link.gif" alt="관련링크">
		                                <img src="img/icon_secret.gif" alt="비밀글"> -->
		                            </td>
		                            <!-- <td class="td_name sv_use">
		                                <span class="sv_wrap">
		                                    <a href="#" class="sv_member" title="최고관리자 자기소개" target="_blank" onclick="return false;"> 최고관리자</a>
		                                    <span class="sv">
		                                        <a href="#" onclick="win_memo(this.href); return false;">쪽지보내기</a>
		                                        <a href="#" onclick="win_email(this.href); return false;">메일보내기</a>
		                                        <a href="#" onclick="win_profile(this.href); return false;">자기소개</a>
		                                        <a href="#">아이디로 검색</a>
		                                        <a href="#">전체게시물</a>
		                                    </span>
		                                    <noscript class="sv_nojs">&lt;span class="sv"&gt;
		                                        &lt;a href="#" onclick="win_memo(this.href); return false;"&gt;쪽지보내기&lt;/a&gt;
		                                        &lt;a href="#" onclick="win_email(this.href); return false;"&gt;메일보내기&lt;/a&gt;
		                                        &lt;a href="#" onclick="win_profile(this.href); return false;"&gt;자기소개&lt;/a&gt;
		                                        &lt;a href="#"&gt;아이디로 검색&lt;/a&gt;
		                                        &lt;a href="#"&gt;전체게시물&lt;/a&gt;
		                                        &lt;/span&gt;
		                                    </noscript>
		                                </span>
		                            </td> -->
		                            <td class="td_date">18:23</td>
		                            <td class="td_num">1</td>
		                            <!-- <td class="td_num">1</td>
		                            <td class="td_num">1</td> -->
		                        </tr>
		                        <tr>
		                            <td class="td_num">6</td>
		                            <!-- <td class="td_chk">
		                                <label for="chk_wr_id_0" class="sound_only">사용서체 라이센스</label>
		                                <input type="checkbox" name="chk_wr_id[]" value="8" id="chk_wr_id_0">
		                            </td> -->
		                            <td class="td_subject">
		                                <!-- <a href="#" class="bo_cate_link">업무</a> -->
		                                <a href="#">사용서체 라이센스</a>
		                                <!-- <img src="img/icon_new.gif" alt="새글">
		                                <img src="img/icon_hot.gif" alt="인기글">
		                                <img src="img/icon_file.gif" alt="첨부파일">
		                                <img src="img/icon_link.gif" alt="관련링크">
		                                <img src="img/icon_secret.gif" alt="비밀글"> -->
		                            </td>
		                            <!-- <td class="td_name sv_use">
		                                <span class="sv_wrap">
		                                    <a href="#" class="sv_member" title="최고관리자 자기소개" target="_blank" onclick="return false;"> 최고관리자</a>
		                                    <span class="sv">
		                                        <a href="#" onclick="win_memo(this.href); return false;">쪽지보내기</a>
		                                        <a href="#" onclick="win_email(this.href); return false;">메일보내기</a>
		                                        <a href="#" onclick="win_profile(this.href); return false;">자기소개</a>
		                                        <a href="#">아이디로 검색</a>
		                                        <a href="#">전체게시물</a>
		                                    </span>
		                                    <noscript class="sv_nojs">&lt;span class="sv"&gt;
		                                        &lt;a href="#" onclick="win_memo(this.href); return false;"&gt;쪽지보내기&lt;/a&gt;
		                                        &lt;a href="#" onclick="win_email(this.href); return false;"&gt;메일보내기&lt;/a&gt;
		                                        &lt;a href="#" onclick="win_profile(this.href); return false;"&gt;자기소개&lt;/a&gt;
		                                        &lt;a href="#"&gt;아이디로 검색&lt;/a&gt;
		                                        &lt;a href="#"&gt;전체게시물&lt;/a&gt;
		                                        &lt;/span&gt;
		                                    </noscript>
		                                </span>
		                            </td> -->
		                            <td class="td_date">18:23</td>
		                            <td class="td_num">1</td>
		                            <!-- <td class="td_num">1</td>
		                            <td class="td_num">1</td> -->
		                        </tr>
		                        <tr>
		                            <td class="td_num">6</td>
		                            <!-- <td class="td_chk">
		                                <label for="chk_wr_id_0" class="sound_only">사용서체 라이센스</label>
		                                <input type="checkbox" name="chk_wr_id[]" value="8" id="chk_wr_id_0">
		                            </td> -->
		                            <td class="td_subject">
		                                <!-- <a href="#" class="bo_cate_link">업무</a> -->
		                                <a href="#">사용서체 라이센스</a>
		                                <!-- <img src="img/icon_new.gif" alt="새글">
		                                <img src="img/icon_hot.gif" alt="인기글">
		                                <img src="img/icon_file.gif" alt="첨부파일">
		                                <img src="img/icon_link.gif" alt="관련링크">
		                                <img src="img/icon_secret.gif" alt="비밀글"> -->
		                            </td>
		                            <!-- <td class="td_name sv_use">
		                                <span class="sv_wrap">
		                                    <a href="#" class="sv_member" title="최고관리자 자기소개" target="_blank" onclick="return false;"> 최고관리자</a>
		                                    <span class="sv">
		                                        <a href="#" onclick="win_memo(this.href); return false;">쪽지보내기</a>
		                                        <a href="#" onclick="win_email(this.href); return false;">메일보내기</a>
		                                        <a href="#" onclick="win_profile(this.href); return false;">자기소개</a>
		                                        <a href="#">아이디로 검색</a>
		                                        <a href="#">전체게시물</a>
		                                    </span>
		                                    <noscript class="sv_nojs">&lt;span class="sv"&gt;
		                                        &lt;a href="#" onclick="win_memo(this.href); return false;"&gt;쪽지보내기&lt;/a&gt;
		                                        &lt;a href="#" onclick="win_email(this.href); return false;"&gt;메일보내기&lt;/a&gt;
		                                        &lt;a href="#" onclick="win_profile(this.href); return false;"&gt;자기소개&lt;/a&gt;
		                                        &lt;a href="#"&gt;아이디로 검색&lt;/a&gt;
		                                        &lt;a href="#"&gt;전체게시물&lt;/a&gt;
		                                        &lt;/span&gt;
		                                    </noscript>
		                                </span>
		                            </td> -->
		                            <td class="td_date">18:23</td>
		                            <td class="td_num">1</td>
		                            <!-- <td class="td_num">1</td>
		                            <td class="td_num">1</td> -->
		                        </tr>
		                        <tr>
		                            <td class="td_num">6</td>
		                            <!-- <td class="td_chk">
		                                <label for="chk_wr_id_0" class="sound_only">사용서체 라이센스</label>
		                                <input type="checkbox" name="chk_wr_id[]" value="8" id="chk_wr_id_0">
		                            </td> -->
		                            <td class="td_subject">
		                                <!-- <a href="#" class="bo_cate_link">업무</a> -->
		                                <a href="#">사용서체 라이센스</a>
		                                <!-- <img src="img/icon_new.gif" alt="새글">
		                                <img src="img/icon_hot.gif" alt="인기글">
		                                <img src="img/icon_file.gif" alt="첨부파일">
		                                <img src="img/icon_link.gif" alt="관련링크">
		                                <img src="img/icon_secret.gif" alt="비밀글"> -->
		                            </td>
		                            <!-- <td class="td_name sv_use">
		                                <span class="sv_wrap">
		                                    <a href="#" class="sv_member" title="최고관리자 자기소개" target="_blank" onclick="return false;"> 최고관리자</a>
		                                    <span class="sv">
		                                        <a href="#" onclick="win_memo(this.href); return false;">쪽지보내기</a>
		                                        <a href="#" onclick="win_email(this.href); return false;">메일보내기</a>
		                                        <a href="#" onclick="win_profile(this.href); return false;">자기소개</a>
		                                        <a href="#">아이디로 검색</a>
		                                        <a href="#">전체게시물</a>
		                                    </span>
		                                    <noscript class="sv_nojs">&lt;span class="sv"&gt;
		                                        &lt;a href="#" onclick="win_memo(this.href); return false;"&gt;쪽지보내기&lt;/a&gt;
		                                        &lt;a href="#" onclick="win_email(this.href); return false;"&gt;메일보내기&lt;/a&gt;
		                                        &lt;a href="#" onclick="win_profile(this.href); return false;"&gt;자기소개&lt;/a&gt;
		                                        &lt;a href="#"&gt;아이디로 검색&lt;/a&gt;
		                                        &lt;a href="#"&gt;전체게시물&lt;/a&gt;
		                                        &lt;/span&gt;
		                                    </noscript>
		                                </span>
		                            </td> -->
		                            <td class="td_date">18:23</td>
		                            <td class="td_num">1</td>
		                            <!-- <td class="td_num">1</td>
		                            <td class="td_num">1</td> -->
		                        </tr>
		                        <tr>
		                            <td class="td_num">6</td>
		                            <!-- <td class="td_chk">
		                                <label for="chk_wr_id_0" class="sound_only">사용서체 라이센스</label>
		                                <input type="checkbox" name="chk_wr_id[]" value="8" id="chk_wr_id_0">
		                            </td> -->
		                            <td class="td_subject">
		                                <!-- <a href="#" class="bo_cate_link">업무</a> -->
		                                <a href="#">사용서체 라이센스</a>
		                                <!-- <img src="img/icon_new.gif" alt="새글">
		                                <img src="img/icon_hot.gif" alt="인기글">
		                                <img src="img/icon_file.gif" alt="첨부파일">
		                                <img src="img/icon_link.gif" alt="관련링크">
		                                <img src="img/icon_secret.gif" alt="비밀글"> -->
		                            </td>
		                            <!-- <td class="td_name sv_use">
		                                <span class="sv_wrap">
		                                    <a href="#" class="sv_member" title="최고관리자 자기소개" target="_blank" onclick="return false;"> 최고관리자</a>
		                                    <span class="sv">
		                                        <a href="#" onclick="win_memo(this.href); return false;">쪽지보내기</a>
		                                        <a href="#" onclick="win_email(this.href); return false;">메일보내기</a>
		                                        <a href="#" onclick="win_profile(this.href); return false;">자기소개</a>
		                                        <a href="#">아이디로 검색</a>
		                                        <a href="#">전체게시물</a>
		                                    </span>
		                                    <noscript class="sv_nojs">&lt;span class="sv"&gt;
		                                        &lt;a href="#" onclick="win_memo(this.href); return false;"&gt;쪽지보내기&lt;/a&gt;
		                                        &lt;a href="#" onclick="win_email(this.href); return false;"&gt;메일보내기&lt;/a&gt;
		                                        &lt;a href="#" onclick="win_profile(this.href); return false;"&gt;자기소개&lt;/a&gt;
		                                        &lt;a href="#"&gt;아이디로 검색&lt;/a&gt;
		                                        &lt;a href="#"&gt;전체게시물&lt;/a&gt;
		                                        &lt;/span&gt;
		                                    </noscript>
		                                </span>
		                            </td> -->
		                            <td class="td_date">18:23</td>
		                            <td class="td_num">1</td>
		                            <!-- <td class="td_num">1</td>
		                            <td class="td_num">1</td> -->
		                        </tr>
		                        <tr>
		                            <td class="td_num">6</td>
		                            <!-- <td class="td_chk">
		                                <label for="chk_wr_id_0" class="sound_only">사용서체 라이센스</label>
		                                <input type="checkbox" name="chk_wr_id[]" value="8" id="chk_wr_id_0">
		                            </td> -->
		                            <td class="td_subject">
		                                <!-- <a href="#" class="bo_cate_link">업무</a> -->
		                                <a href="#">사용서체 라이센스</a>
		                                <!-- <img src="img/icon_new.gif" alt="새글">
		                                <img src="img/icon_hot.gif" alt="인기글">
		                                <img src="img/icon_file.gif" alt="첨부파일">
		                                <img src="img/icon_link.gif" alt="관련링크">
		                                <img src="img/icon_secret.gif" alt="비밀글"> -->
		                            </td>
		                            <!-- <td class="td_name sv_use">
		                                <span class="sv_wrap">
		                                    <a href="#" class="sv_member" title="최고관리자 자기소개" target="_blank" onclick="return false;"> 최고관리자</a>
		                                    <span class="sv">
		                                        <a href="#" onclick="win_memo(this.href); return false;">쪽지보내기</a>
		                                        <a href="#" onclick="win_email(this.href); return false;">메일보내기</a>
		                                        <a href="#" onclick="win_profile(this.href); return false;">자기소개</a>
		                                        <a href="#">아이디로 검색</a>
		                                        <a href="#">전체게시물</a>
		                                    </span>
		                                    <noscript class="sv_nojs">&lt;span class="sv"&gt;
		                                        &lt;a href="#" onclick="win_memo(this.href); return false;"&gt;쪽지보내기&lt;/a&gt;
		                                        &lt;a href="#" onclick="win_email(this.href); return false;"&gt;메일보내기&lt;/a&gt;
		                                        &lt;a href="#" onclick="win_profile(this.href); return false;"&gt;자기소개&lt;/a&gt;
		                                        &lt;a href="#"&gt;아이디로 검색&lt;/a&gt;
		                                        &lt;a href="#"&gt;전체게시물&lt;/a&gt;
		                                        &lt;/span&gt;
		                                    </noscript>
		                                </span>
		                            </td> -->
		                            <td class="td_date">18:23</td>
		                            <td class="td_num">1</td>
		                            <!-- <td class="td_num">1</td>
		                            <td class="td_num">1</td> -->
		                        </tr>
		                        <tr>
		                            <td class="td_num">6</td>
		                            <!-- <td class="td_chk">
		                                <label for="chk_wr_id_0" class="sound_only">사용서체 라이센스</label>
		                                <input type="checkbox" name="chk_wr_id[]" value="8" id="chk_wr_id_0">
		                            </td> -->
		                            <td class="td_subject">
		                                <!-- <a href="#" class="bo_cate_link">업무</a> -->
		                                <a href="#">사용서체 라이센스</a>
		                                <!-- <img src="img/icon_new.gif" alt="새글">
		                                <img src="img/icon_hot.gif" alt="인기글">
		                                <img src="img/icon_file.gif" alt="첨부파일">
		                                <img src="img/icon_link.gif" alt="관련링크">
		                                <img src="img/icon_secret.gif" alt="비밀글"> -->
		                            </td>
		                            <!-- <td class="td_name sv_use">
		                                <span class="sv_wrap">
		                                    <a href="#" class="sv_member" title="최고관리자 자기소개" target="_blank" onclick="return false;"> 최고관리자</a>
		                                    <span class="sv">
		                                        <a href="#" onclick="win_memo(this.href); return false;">쪽지보내기</a>
		                                        <a href="#" onclick="win_email(this.href); return false;">메일보내기</a>
		                                        <a href="#" onclick="win_profile(this.href); return false;">자기소개</a>
		                                        <a href="#">아이디로 검색</a>
		                                        <a href="#">전체게시물</a>
		                                    </span>
		                                    <noscript class="sv_nojs">&lt;span class="sv"&gt;
		                                        &lt;a href="#" onclick="win_memo(this.href); return false;"&gt;쪽지보내기&lt;/a&gt;
		                                        &lt;a href="#" onclick="win_email(this.href); return false;"&gt;메일보내기&lt;/a&gt;
		                                        &lt;a href="#" onclick="win_profile(this.href); return false;"&gt;자기소개&lt;/a&gt;
		                                        &lt;a href="#"&gt;아이디로 검색&lt;/a&gt;
		                                        &lt;a href="#"&gt;전체게시물&lt;/a&gt;
		                                        &lt;/span&gt;
		                                    </noscript>
		                                </span>
		                            </td> -->
		                            <td class="td_date">18:23</td>
		                            <td class="td_num">1</td>
		                            <!-- <td class="td_num">1</td>
		                            <td class="td_num">1</td> -->
		                        </tr>
		                        <!-- <tr><td colspan="8" class="empty_table">게시물이 없습니다.</td></tr> -->
		                        </tbody>
		                    </table>
		                </div>

		                <!-- <div class="bo_fx">
		                    <ul class="btn_bo_adm">
		                        <li><input type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value"></li>
		                        <li><input type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value"></li>
		                        <li><input type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value"></li>
		                    </ul>

		                    <ul class="btn_bo_user">
		                        <li><a href="#" class="btn_b01">목록</a></li>
		                        <li><a href="#" class="btn_b02">글쓰기</a></li>
		                    </ul>
		                </div> -->
		            </form>
		        </div>

		        <noscript>
		            <p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
		        </noscript>

		        <!-- 페이지 -->
		        <nav class="pg_wrap">
		            <span class="pg">
		                <a href="#1" class="pg_page pg_start">처음</a>
		                <a href="#1" class="pg_page pg_prev">이전</a>
		                <a href="#1" class="pg_page">1<span class="sound_only">페이지</span></a>
		                <a href="#2" class="pg_page">2<span class="sound_only">페이지</span></a>
		                <a href="#3" class="pg_page">3<span class="sound_only">페이지</span></a>
		                <a href="#4" class="pg_page">4<span class="sound_only">페이지</span></a>
		                <span class="sound_only">열린</span>
		                <strong class="pg_current">5</strong>
		                <span class="sound_only">페이지</span>
		                <a href="#6" class="pg_page">6<span class="sound_only">페이지</span></a>
		                <a href="#7" class="pg_page">7<span class="sound_only">페이지</span></a>
		                <a href="#8" class="pg_page">8<span class="sound_only">페이지</span></a>
		                <a href="#9" class="pg_page">9<span class="sound_only">페이지</span></a>
		                <a href="#10" class="pg_page">10<span class="sound_only">페이지</span></a>
		                <a href="#10" class="pg_page pg_next">다음</a>
		                <a href="#10" class="pg_page pg_end">맨끝</a>
		            </span>
		        </nav>

		        <!-- 게시판 검색 시작 { -->
		        <fieldset id="bo_sch">
		            <legend>게시물 검색</legend>

		            <form name="fsearch" method="get">
		                <input type="hidden" name="bo_table" value="project">
		                <input type="hidden" name="sca" value="">
		                <input type="hidden" name="sop" value="and">
		                <label for="sfl" class="sound_only">검색대상</label>
		                <select name="sfl" id="sfl">
		                    <option value="wr_subject">제목</option>
		                    <option value="wr_content">내용</option>
		                    <option value="wr_subject||wr_content">제목+내용</option>
		                    <!-- <option value="mb_id,1">회원아이디</option>
		                    <option value="mb_id,0">회원아이디(코)</option>
		                    <option value="wr_name,1">글쓴이</option>
		                    <option value="wr_name,0">글쓴이(코)</option> -->
		                </select>
		                <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
		                <input type="text" name="stx" value="" required id="stx" class="frm_input required" size="15" maxlength="20">
		                <input type="submit" value="검색" class="btn_submit">
		            </form>
		        </fieldset>
		        <!-- } 게시판 검색 끝 -->



		        <script>
		            function all_checked(sw) {
		                var f = document.fboardlist;

		                for (var i=0; i<f.length; i++) {
		                    if (f.elements[i].name == "chk_wr_id[]")
		                        f.elements[i].checked = sw;
		                }
		            }

		            function fboardlist_submit(f) {
		                var chk_count = 0;

		                for (var i=0; i<f.length; i++) {
		                    if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
		                        chk_count++;
		                }

		                if (!chk_count) {
		                    alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
		                    return false;
		                }

		                if(document.pressed == "선택복사") {
		                    select_copy("copy");
		                    return;
		                }

		                if(document.pressed == "선택이동") {
		                    select_copy("move");
		                    return;
		                }

		                if(document.pressed == "선택삭제") {
		                    if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
		                        return false;

		                    f.removeAttribute("target");
		                    f.action = "./board_list_update.php";
		                }

		                return true;
		            }

		            // 선택한 게시물 복사 및 이동
		            function select_copy(sw) {
		                var f = document.fboardlist;

		                if (sw == "copy")
		                    str = "복사";
		                else
		                    str = "이동";

		                var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

		                f.sw.value = sw;
		                f.target = "move";
		                f.action = "./move.php";
		                f.submit();
		            }
		        </script>
			</div>
			
		</div>
	</div><!-- container -->

<?include"../../include/footer.php" ?>