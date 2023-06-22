<?php
include_once('./include/head.php');
include_once('./include/header.php');

$sql_info =    "SELECT
					CONCAT(fi_img.path, '/', fi_img.save_name) AS fi_img_url,
					igv.name_" . $language . " AS `name`,
					igv.address_" . $language . " AS address,
					igv.tel_" . $language . " AS tel,
					igv.homepage_en,
					igv.homepage_ko
				FROM info_general_venue AS igv
				LEFT JOIN `file` AS fi_img
					ON fi_img.idx = igv." . $language . "_img";
$info = sql_fetch($sql_info);
?>

<section class="container venue">
	<!-- HUBDNCLHJ : app 메뉴 탭 -->
	<!--
	<div class="app_title_box">
		<h2 class="app_title">ICOMES 2023</h2>
		<ul class="app_menu_tab">
			<li><a href="./welcome.php">Welcome Message</a></li>
			<li><a href="./organizing_committee.php">Organization</a></li>
			<li><a href="./overview.php">Overview</a></li>
			<li class="on"><a href="./venue.php">Venue</a></li>
		</ul>
	</div> -->
    <h1 class="page_title">Conrad Seoul</h1>
	<!-- HUBDNCLHJ : app에선 타이틀 Conrad Seoul>Venue로 변경 됨(아래 h1.page_title 주석해제). 메뉴 위치 이동 됨. 노출되는 컨텐츠 [호텔 이름과 주소, 연락처]+[지도]. -->
    <!-- <h1 class="page_title">Venue</h1> -->
    <div class="inner">
        <!-- 호텔 이름과 주소, 연락처 -->
        <div class="section section1">
            <div class="clearfix2">
                <!-- <div class="img_wrap" style="background: center / cover no-repeat url('<?= $info['fi_img_url'] ?>')">
						<img src="<?= $info['fi_img_url'] ?>" alt="hotel img">
					 </div> -->
                <div class="img_wrap">
					<img src="./img/conrad_seoul.jpg" alt="conrad seoul">
                </div>
                <div class="info_wrap">
                    <!-- <h6><?= $info['name'] ?></h6> -->
                    <ul class="info_list">
                        <li>
                            <p><?= $locale("address") ?></p>
                            <p><?= $info['address'] ?></p>
                        </li>
                        <li>
                            <p><?= $locale("tel") ?></p>
                            <p><?= $info['tel'] ?></p>
                        </li>
						<!-- 23-05-02 웹사이트 추가 -->
						<li>
							<p>Website</p>
							<p><a href="https://www.conradseoul.co.kr/hub/en/main.do" class="link" target="_blank">www.conradseoul.co.kr</a></p>
							<!-- <p><?= $locale("web") ?></p>
                            <p><?= $info['web'] ?></p> -->
						</li>
                    </ul>
                    <!-- <div class="btn_wrap"> -->
                    <!--     <a href="<?= $info['homepage_en'] ?>" target="_blank"><button type="button" class="btn green_btn">Go to Website - ENG</button></a> -->
                    <!--     <a href="<?= $info['homepage_ko'] ?>" target="_blank"><button type="button" class="btn green_btn">Go to Website - KOR</button></a> -->
                    <!-- </div> -->	
                </div>
            </div>
        </div>
		<!-- 지도 -->
		<div class="section section2">
			<h3 class="title">Location</h3>
			<div class="map_area" id="googleMap"></div>
		</div>
        <!-- 교통편 -->
        <div class="section section3">
			<!-- <h3 class="title">Transportation</h3> -->
            <ul class="contact_list">
                <!-- parking
                <li>
                    <div class="details_info_wrap">
                        <div class="clearfix2">
                            <div class="img_wrap">
                                <img src="./img/contact_01.svg" alt="주차">
                            </div>
                            <div class="info">
                                <h3 class="title"><?= $locale("contact_tit1") ?></h3>
                                <ul>
                                    <li class="clearfix"><?= $locale("contact_1_1") ?></li>
                                    <li class="clearfix">
                                        <!--<?= $locale("contact_1_2") ?>
                                        <p>Valet parking :</p>
                                        <p>KRW 27,000</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li> -->
                <!-- transportaion
                <li>
                    <div class="details_info_wrap">
                        <div class="clearfix2">
                            <div class="img_wrap">
                                <img src="./img/contact_02.svg" alt="교통">
                            </div>
                            <div class="info">
                                <h3 class="title"><?= $locale("contact_tit2") ?></h3>
                                <ul>
                                    <li class="clearfix"><?= $locale("contact_2_1") ?></li>
                                    <li class="clearfix"><?= $locale("contact_2_2") ?></li>
                                    <li class="clearfix"><?= $locale("contact_2_3") ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li> -->
                <!-- subway 
                <li>
                    <div class="details_info_wrap">
                        <div class="clearfix2">
                            <div class="img_wrap">
                                <img src="./img/contact_03.svg" alt="지하철">
                            </div>
                            <div class="info">
                                <h3 class="title"><?= $locale("contact_tit3") ?></h3>
                                <ul>
                                    <!-- <li class="clearfix"><?= $locale("contact_3_1") ?></li> 
                                    <li class="clearfix">
                                        <p class="subway_line"><span class="purple">Line5</span>, <span class="brown">Line 9</span> Yeouido Station Exit 3</p>
                                        <p>Go straight along the moving walk towards the subway exit<br>→ Enter the IFC
                                            Mall Entrance<br>→ Take the escalator in front of MUJI and go to L1<br>→ You
                                            can fine the entrance to Conrad Seoul between Garden Juno and Sephora.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li> -->
                <!-- bus 
                <li>
                    <div class="details_info_wrap">
                        <div class="clearfix2">
                            <div class="img_wrap">
                                <img src="./img/contact_04.svg" alt="버스">
                            </div>
                            <div class="info">
                                <h3 class="title"><?= $locale("contact_tit4") ?></h3>
                                <ul class="bus_area">
                                    <li class="clearfix">
                                        <p><?= $locale("contact_4_1") ?></p>
                                    </li>
                                    <li class="clearfix green">
                                        <span class="bus_tit"><?= $locale("contact_bus_1") ?></span>
                                        <span>6513 / 5618 / 5623 / 5012 / 6628 / 6623 / 5615 / 7611</span>
                                    </li>
                                    <li class="clearfix blue">
                                        <span class="bus_tit"><?= $locale("contact_bus_2") ?></span>
                                        <span>162 / 261 / 662 / 360 / 661 / 262 / 260 / 160 / 600 / 753</span>
                                    </li>
                                    <li class="clearfix blue">
                                        <span class="bus_tit"><?= $locale("contact_bus_3") ?></span>
                                        <span>871 / 320 / 301 / 5601 / 300 / 108</span>
                                    </li>
                                    <li class="clearfix green">
                                        <span class="bus_tit"><?= $locale("contact_bus_4") ?></span>
                                        <span>10 / 83 / 11-1 / 11-2 / 510 / 88</span>
                                    </li>
                                    <li class="clearfix red">
                                        <span class="bus_tit"><?= $locale("contact_bus_5") ?></span>
                                        <span>8600</span>
                                    </li>
                                    <li class="clearfix red">
                                        <span class="bus_tit"><?= $locale("contact_bus_6") ?></span>
                                        <span>2500 / M5609</span>
                                    </li>
                                </ul>
                                <ul class="bus_area">
                                    <li class="clearfix">
                                        <p><?= $locale("contact_4_2") ?></p>
                                    </li>
                                    <li class="clearfix green">
                                        <span class="bus_tit"><?= $locale("contact_bus_1") ?></span>
                                        <span>5713 / 7613</span>
                                    </li>
                                    <li class="clearfix blue">
                                        <span class="bus_tit"><?= $locale("contact_bus_2") ?></span>
                                        <span>753</span>
                                    </li>
                                    <li class="clearfix red">
                                        <span class="bus_tit"><?= $locale("contact_bus_7") ?></span>
                                        <span>7007-1 / 700</span>
                                    </li>
                                    <li class="clearfix red">
                                        <span class="bus_tit"><?= $locale("contact_bus_6") ?></span>
                                        <span>M7613</span>
                                    </li>
                                    <li class="clearfix orange">
                                        <span class="bus_tit"><?= $locale("contact_bus_8") ?></span>
                                        <span>62</span>
                                    </li>
                                </ul>
                                <ul class="bus_area">
                                    <li class="clearfix">
                                        <p><?= $locale("contact_4_3") ?></p>
                                    </li>
                                    <li class="clearfix blue">
                                        <span class="bus_tit"><?= $locale("contact_bus_3") ?></span>
                                        <span>108</span>
                                    </li>
                                </ul>
                                <ul class="bus_area">
                                    <li class="clearfix">
                                        <p><?= $locale("contact_4_4") ?></p>
                                    </li>
                                    <li class="clearfix orange">
                                        <span class="bus_tit"><?= $locale("contact_bus_8") ?></span>
                                        <span>61</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li> -->
                <!-- airplane -->
                <li>
                    <div class="details_info_wrap">
                        <div class="clearfix2">
							<!--
                            <div class="img_wrap">
                                <img src="./img/contact_05.svg" alt="비행기">
                            </div> -->
                            <div class="info">
                                <h3 class="title">Airport ▶ CONRAD Seoul Hotel, Korea</h3>
                                <!--(1)-->
                                <div class="airplane_cont">
                                    <h5>By Bus <span>(No. 6019 / Airport Bus)</span></h5>
                                    <div class="table_wrap detail_table_common x_scroll">
                                        <table class="c_table">
                                            <tbody>
                                                <tr>
                                                    <th>Board</th>
                                                    <td>Terminal 1 : Arrival Gate 6B-1 (1F) / Terminal 2 : Arrival Gate 27 (B1)</td>
                                                </tr>
                                                <tr>
                                                    <th>Travel Time</th>
                                                    <td>
                                                        - Approx. 70mins (20mins from Terminal 2 to 1)
                                                        <br>
                                                        - Time : 6:45 am – 22:45 pm / Allocation : every 50 mins
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Fare</th>
                                                    <td>KRW 17,000
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Bus Stop</th>
                                                    <td>Marriott Hotel (Yeouido Station)</td>
                                                </tr>
												<tr>
                                                    <th>Remarks</th>
                                                    <td>
														Advance ticket purchase is required before boarding the bus.<br>
														- Location of airport ticket counter. Terminal 1 Gate 6~13 (1F) / Terminal 2 : Eastside B1<br>
														- K-Limousine Website : <a href="http://www.klimousine.com/eng/main" target="_blank" class="link">www.klimousine.com</a>
													</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--(2)-->
                                <div class="airplane_cont">
                                    <h5>By Subway</h5>
                                    <p>
                                        The Airport Railroad Express (AREX) provides transportation services that connect Incheon International Airport and Gimpo Airport. Passengers arriving at Gimpo Airport have the option to transfer to Subway Line 9 for further transportation. You can take the AREX (Airport Railroad Express) at the Incheon Airport Transportation Center.
                                    </p>
                                    <div class="table_wrap detail_table_common x_scroll">
                                        <table class="c_table type1">
                                            <thead>
                                                <tr>
                                                    <th>Route</th>
                                                    <th>Traveling Time</th>
                                                    <th>Fare</th>
                                                    <th>Remarks</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img class="venue_airplane" src="./img/venue_airplane1.svg" alt=""></td>
                                                    <td>Approx. T2: 78 min <br>Approx. T1: 70 min</td>
                                                    <td>T2: KRW 4,750 <br>T1: KRW 4,150</td>
                                                    <td>
                                                        Take Airport Railroad (AREX) from Incheon<br>airport Terminal 1
                                                        or 2(bound for Gongdeok<br>Station) then Transfer to subway Line
                                                        #5 at<br>Gongdeok Station (bound for Banghwa station)<br> → take
                                                        off at Yeouido Station
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img class="venue_airplane" src="./img/venue_airplane2.svg" alt=""></td>
                                                    <td>Approx. T2: 78 min <br>Approx. T1: 70 min</td>
                                                    <td>T2: KRW 4,550 <br>T1: KRW 4,050</td>
                                                    <td>
                                                        From Gimpo Airport (approximately 18 min):<br>Take the Subway
                                                        express line #9 at Gimpo<br>International Airport station Get
                                                        off at Yeouido<br>station which provides direct access to
                                                        Conrad<br>Seoul
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img class="venue_airplane" src="./img/venue_airplane3.svg" alt=""></td>
                                                    <td>19 min (6 line Express) <br>T1: 26 min(5 line)</td>
                                                    <td>KRW 1,350</td>
                                                    <td>Yeouido Stn. (exit #3) is 10 min <br>walking distance away from
                                                        Hotel</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--(3)-->
                                <div class="airplane_cont">
                                    <!-- <h5>By Taxi<span>(Incheon Airport ▶ Conrad Seoul Hotel)</span></h5> -->
                                    <h5>By Taxi</h5>
									<p>
										Taxi services are always available and the fare from Incheon International Airport to the Venue(Conrad Seoul) is approximately KRW 55,000 for a standard taxi. Expressway fee(KRW 7,100 each way) will be added to the total fare. The rides take about 40-50 minutes, however, it may vary depending on traffic conditions. There is an additional fee for taxi rides taken between midnight and 4:00 am, resulting in an approximate 20% increase in the fare.
									</p>
                                    <div class="table_wrap detail_table_common x_scroll">
										<table class="c_table type2">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2" >Type</th>
                                                    <th rowspan="2">Base Fare (KRW)</th>
                                                    <th colspan="2">Stop Location</th>
                                                    <th rowspan="2">Remarks</th>
                                                </tr>
												<tr>
													<th>Terminal 1</th>
													<th>Terminal 2</th>
												</tr>
                                            </thead>
                                            <tbody>
                                                <tr>
													<td>Standard Taxi</td>
													<td>3,800</td>
													<td>5C, 6C, 6D</td>
													<td>5C</td>
													<td>24:00 - 04:00 additional late-night charge 20%</td>
												</tr>
												<tr>
													<td>First-Class / Oversized Taxi<br>(Up to 9 passengers)</td>
													<td>6,500</td>
													<td>7C/8C</td>
													<td>5D</td>
													<td>No late-night surcharge or timed fare</td>
												</tr>
												<tr>
													<td>International Taxi</td>
													<td>Standard Seoul's<br>distance fare applies</td>
													<td>4C</td>
													<td>1C</td>
													<td>
														Taxis officially designated to provide foreign<br>
														language service<br>
														For reservation: <a href="http://www.intltaxi.co.kr" target="_blank" class="link">www.intltaxi.co.kr</a>
													</td>
												</tr>
                                            </tbody>
                                        </table>
                                    </div>
									<div class="taxi_text_area">
										For more information on each mode of transportation and the related services, please visit the websites below.
										<div>
											-
											<a href="https://www.airport.kr/ap/en/index.do" target="_blank" class="link">Incheon International Airport(click!) </a>
											/
											<a href="https://www.airport.co.kr/gimpoeng/index.do" target="_blank" class="link">Gimpo International Airport(click!)</a>   
										</div>
									</div>
                                </div>
                                <!--(3) end-->
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- 교통편 / end -->
    </div>
</section>

<script>
function myMap() {
    var mapOptions = {
        center: new google.maps.LatLng(37.525609, 126.925992),
        zoom: 16
    };

    var map = new google.maps.Map(
        document.getElementById("googleMap"), mapOptions);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXP4XIvOKkpyrbqfN57uTgtFehx5HOMJw&callback=myMap">
</script>

<!--
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=855afe12d2495e8a68f985bd09c52bc5"></script>
<script>
	var container = document.getElementById('map'); //지도를 담을 영역의 DOM 레퍼런스
	var options = { //지도를 생성할 때 필요한 기본 옵션
		center: new kakao.maps.LatLng(37.525609, 126.925992), //지도의 중심좌표.
		level: 2 //지도의 레벨(확대, 축소 정도)
	};

	var map = new kakao.maps.Map(container, options);
</script>
-->

<?php include_once('./include/footer.php'); ?>