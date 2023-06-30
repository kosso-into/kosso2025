<?php include_once('./include/head.php'); ?>
<?php include_once('./include/app_header.php'); ?>



<?php

$type = $_GET['type'];
$e = $_GET['e'];
$day = $_GET['day'];
$e_num = $e[-1];
$d_num = $day[-1];

$name = $_GET['name'];

// echo $e_num;
// echo $d_num;

//kcode == 116 새로고침

echo '<script type="text/javascript">
				  $(document).ready(function(){
					  //탭 활성화
					  //큰탭
					  $(".app_tab li").removeClass("on");
					  if ("' . $day . '" === "") {
						$(".app_tab li:first-child").addClass("on");
						$(".app_tab li:nth-child(1)").trigger("click");
					  }

						// Room Select Tab 초기화 / 클릭 스크립트 수정
						$(".app_tab li").click(function(){
							$(".sort_select").each(function(){
								var i = $(this).val();
								if (i === "all"){
									$(this).parents(".tab_cont").find(".tab_cont").addClass("on");
								} else {
									i = (i - 1);
									$(this).parents(".tab_cont").find(".tab_cont").removeClass("on");
									$(this).parents(".tab_cont").find(".tab_cont").eq(i).addClass("on");
									console.log(i)
								}
							});
						});

					  $(".app_tab li:nth-child(' . $d_num . ')").addClass("on");
					  $(".app_tab + .inner .tab_wrap > .tab_cont").removeClass("on");
					  $(".app_tab + .inner .tab_wrap > .tab_cont:nth-child(' . $d_num . ')").addClass("on");
					  //작은탭
					  $(".app_tab + .inner .tab_wrap > .tab_cont .tab_cont").removeClass("on");
					  $(".app_tab + .inner .tab_wrap > .tab_cont.on .tab_cont").eq(' . $e_num . ' - 1).addClass("on");

					  window.onkeydown = function() {
					  	var kcode = event.keyCode;
						if(kcode == 116) {
							history.replaceState({}, null, location.pathname);
							window.scrollTo({top:0, left:0, behavior:"auto"});
						}
					  }

					  //스크롤 위치 & 액션
					  $(".program_detail_ul li").each(function(){
						if("' . $name . '" === $(this).attr("name")) {
							var this_top = $(this).offset().top;
							$("html, body").animate({scrollTop: this_top - 70}, 1000);
							console.log("scrollTop: ", this_top - 150)
						}
					  });

				  });
		</script>';

?>


<section class="container app_version app_scientific">
	<div class="app_title_box">
		<h2 class="app_title">PROGRAM</h2>
		<ul class="app_menu_tab langth_2">
			<li><a href="./program_glance.php">Program at a Glance</a></li>
			<li class="on"><a href="./app_program_detail.php">Scientific Program</a></li>
		</ul>
	</div>
	<ul class="app_tab program center_t">
		<li class="on"><a href="javascript:;">Sep.7(Thu)</a></li>
		<li><a href="javascript:;">Sep.8(Fri)</a></li>
		<li><a href="javascript:;">Sep.9(Sat)</a></li>
	</ul>
    <div class="inner">
        <div class="tab_wrap">
			<!-----------------
				Day 1
			------------------->
            <div class="tab_cont on">
                <ul class="app_sort_form app_half_ul">
					<li>
						<select name="" id="" class="sort_select">
							<option value="" hidden="">Select Room</option>
							<option value="all" selected>All</option>
							<option value="1">Room 1</option>
							<option value="2">Room 2</option>
							<option value="3">Room 3</option>
						</select>
					</li>
					<li>
						<select name="" id="">
							<option value="" hidden="">Select Category</option>
							<option value="">All</option>
							<option value="">Opening Address</option>
							<option value="">Closing &amp; Award Ceremony</option>
							<option value="">Welcome Cocktail Party</option>
							<option value="">Congress Banquet</option>
							<option value="">Plenary Lecture</option>
							<option value="">Keynote Lecture</option>
							<option value="">Best Article in JOMES</option>
							<option value="">Symposium</option>
							<option value="">Obesity Treatment Guidelines Symposium</option>
							<option value="">Pre-congress Symposium</option>
							<option value="">Breakfast Symposium</option>
							<option value="">Luncheon Symposium</option>
							<option value="">Satellite Symposium</option>
							<option value="">Sponsored Session</option>
							<option value="">Joint Symposium</option>
							<option value="">Oral Presentation</option>
							<option value="">Guided Poster Presentation</option>
						</select>
					</li>
				</ul>
                <div class="tab_wrap">
					<!-----------------
						Day 1 > Room 1
					------------------->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
							<li name="pre_congress_symposium_1">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Pre-congress Symposium 1</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">17:00-18:30</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">17:00-17:25</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">17:25-17:50</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">17:50-18:15</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">18:15-18:30</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">18:30-19:00</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
							</li> -->
							<li name="satellite_symposium_1">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Satellite Symposium 1</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">19:00-19:30</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">19:00-19:30</span>
										</div>
									</div>
								</div>
                            </li>
							<li name="satellite_symposium_2">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Satellite Symposium 2</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">19:30-20:00</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">19:30-20:00</span>
										</div>
									</div>
								</div>
                            </li>
                        </ul>
                    </div>
					<!-----------------
						Day 1 > Room 2
					------------------->
                    <div class="tab_cont on">
                        <ul class="program_detail_ul">
							<li name="pre_congress_symposium_2">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Pre-congress Symposium 2</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">17:00-18:30</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">17:00-17:25</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">17:25-17:50</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">17:50-18:15</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">18:15-18:30</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">18:30-19:00</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
							</li> -->
							<li name="satellite_symposium_3">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Satellite Symposium 3</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">19:00-19:30</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">19:00-19:30</span>
										</div>
									</div>
								</div>
                            </li>
                        </ul>
                    </div>
					<!-----------------
						Day 1 > Room 3
					------------------->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
                            <li name="welcome_cocktail_party">
								<div class="main">
									<!-- <a href="/main/app_abstract.php" class="right_tag">Abstract</a> -->
									<p class="title">Welcome Cocktail Party</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">18:30-21:00</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
			<!-----------------
				Day 2
			------------------->
            <div class="tab_cont">
                <ul class="app_sort_form app_half_ul">
					<li>
						<select name="" id="" class="sort_select">
							<option value="" hidden="">Select Room</option>
							<option value="all" selected>All</option>
							<option value="1">Room 1</option>
							<option value="2">Room 2</option>
							<option value="3">Room 3</option>
							<option value="4">Room 4</option>
							<option value="5">Room 5</option>
							<option value="6">Room 6</option>
							<option value="7">Room 7</option>
						</select>
					</li>
					<li>
						<select name="" id="">
							<option value="" hidden="">Select Category</option>
							<option value="">All</option>
							<option value="">Opening Address</option>
							<option value="">Closing &amp; Award Ceremony</option>
							<option value="">Welcome Cocktail Party</option>
							<option value="">Congress Banquet</option>
							<option value="">Plenary Lecture</option>
							<option value="">Keynote Lecture</option>
							<option value="">Best Article in JOMES</option>
							<option value="">Symposium</option>
							<option value="">Obesity Treatment Guidelines Symposium</option>
							<option value="">Pre-congress Symposium</option>
							<option value="">Breakfast Symposium</option>
							<option value="">Luncheon Symposium</option>
							<option value="">Satellite Symposium</option>
							<option value="">Sponsored Session</option>
							<option value="">Joint Symposium</option>
							<option value="">Oral Presentation</option>
							<option value="">Guided Poster Presentation</option>
						</select>
					</li>
				</ul>
                <div class="tab_wrap">
					<!-----------------
						Day 2 > Room 1
					------------------->
                    <div class="tab_cont on">
                        <ul class="program_detail_ul">
							<li name="breakfast_symposium_1">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Breakfast Symposium 1</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">07:30-08:20</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">07:30-08:20</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">08:20-08:30</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
							</li> -->
							<li name="plenary_lecture_1">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Plenary Lecture 1</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Thiruma V. Arumugam (La Trobe University, Australia)</p>
									<div class="info">
										<button></button>
										<span class="time">08:30-09:10</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">
										<p>Organizer : Jang Won Son (The Catholic University of Korea, Republic of Korea)</p>
										<ul>
											<li>Professor Thiruma V. Arumugam, a distinguished researcher in the fields of physiology and pharmacology at La Trobe University, Australia, is pushing the boundaries of neuroscience and metabolism. In his upcoming lecture, he will discuss how his work on intermittent metabolic switching has enhanced our comprehension of its effect on brain health, paving the way for potential therapeutic interventions.</li>
											<li>His recent publication in Theranostics, titled "Time-restricted feeding modulates the DNA methylation landscape, attenuates hallmark neuropathology and cognitive impairment in a mouse model of vascular dementia," has presented novel insights into the therapeutic potential of intermittent metabolic switching, offering promising strategies for managing and potentially reversing cognitive impairment in dementia.</li>
											<li>Further expanding our understanding, Professor Arumugam's article in Cell Metabolism, "Hallmarks of Brain Aging: Adaptive and Pathological Modification by Metabolic States," continues to revolutionize our perspective on the role of metabolism in brain aging.</li>
										</ul>
									</div>
									<div>
										<p class="title">Intermittent Metabolic Switching and Brain Health</p>
										<p class="chairperson">
											<span class="bold">Thiruma V. Arumugam</span> (La Trobe University, Australia)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">08:30-09:00</span>
										</div>
									</div>
									<div>
										<p class="title">Q&A</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">09:00-09:10</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">09:10-09:20</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
							</li> -->
							<li name="symposium_1">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Symposium 1 : Obesity and Cancer</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Yun Kyung Cho (University of Ulsan, Republic of Korea), <br/>Haejin Yoon (UNIST, Republic of Korea), <br/>Annie Anderson (University of Dundee, UK)</p>
									<div class="info">
										<button></button>
										<span class="time">09:20-10:50</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">Obesity and the Risk of Cancer</p>
										<p class="chairperson">
											<span class="bold">Yun Kyung Cho</span> (University of Ulsan, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">09:20-09:45</span>
										</div>
									</div>
									<div>
										<p class="title">Dynamic Regulation of Mitochondrial Metabolism in Metabolic Disease</p>
										<p class="chairperson">
											<span class="bold">Haejin Yoon</span> (UNIST, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">09:45-10:10</span>
										</div>
									</div>
									<div>
										<p class="title">Obesity Care in Cancer Survivors</p>
										<p class="chairperson">
											<span class="bold">Annie Anderson</span> (University of Dundee, UK)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">10:10-10:35</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">10:35-10:50</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">10:50-11:00</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
							</li> -->
							<li name="opening_address">
								<div class="main">
									<!-- <a href="/main/app_abstract.php" class="right_tag">Abstract</a> -->
									<p class="title">Opening Address</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">11:00-11:10</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<!-- <p class="title">TBD</p> -->
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">11:00-11:10</span>
										</div>
									</div>
								</div>
                            </li>
							<li name="keynote_lecture_1">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Keynote Lecture 1</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Matthias Blüher (University of Leipzig, Germany)</p>
									<div class="info">
										<button></button>
										<span class="time">11:10-11:50</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">
										<p>Organizer: Soo Lim (Seoul National University, Republic of Korea)</p>
										<ul>
											<li>Matthias Blüher is Head of the Obesity Outpatient Clinic for Adults at the University of Leipzig Department of Medicine  in Leipzig, Germany. He is Professor of Molecular Endocrinology, with board certifications in Internal Medicine, Endocrinology and Diabetology. From 2006 to 2012, Professor Blüher served as Head of the Clinical Research Group ‘Atherobesity,’ and since 2013, he has been Speaker of the Collaborative Research Center on obesity mechanisms.</li>
											<li>Professor Blüher has won several awards, including the Obesity Research Award of the German Society for the Study of Obesity, the Ferdinand-Bertram-Prize of the German Diabetes Association, and the Rising Star Lecture at the 44th European Association for the Study of Diabetes (EASD) meeting. More recently, he received the Hans Christian Hagedorn Award from the German Diabetes Association in 2011 and the Minkowski Award from the EASD in 2015.</li>
										</ul>
										<p>References</p>
										<ul>
											<li>Blüher M, Aras M, Aronne LJ, Batterham RL, Giorgino F, Ji L, Pietiläinen KH, Schnell O, Tonchevska E, Wilding JPH. New insights into the treatment of obesity. Diabetes Obes Metab. 2023 Apr 13. doi: 10.1111/dom.15077.</li>
											<li>Blüher M. Metabolically Healthy Obesity. Endocr Rev. 2020 May 1;41(3):bnaa004. </li>	
										</ul>
									</div>
									<div>
										<p class="title">Adipose Tissue – A Treasure Box for Discoveries</p>
										<p class="chairperson">
											<span class="bold">Matthias Blüher</span> (University of Leipzig, Germany)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">11:10-11:40</span>
										</div>
									</div>
									<div>
										<p class="title">Q&A</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">11:40-11:50</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">11:50-12:00</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
							</li> -->
							<li name="luncheon_symposium_1">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Luncheon Symposium 1</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Eun Young Lee (The Catholic University of Korea, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">12:00-13:00</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">Eun Young Lee</span> (The Catholic University of Korea, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">12:00-13:00</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">13:00-14:00</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
							</li> -->
							<li name="symposium_5">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Symposium 5 : Emerging Anti-obesity Drugs: Expectations and Apprehensions</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Bom Taeck Kim (Ajou University, Republic of Korea), <br/>Ju Young Shin (Sungkyunkwan University, Republic of Korea), <br/>Robert J. Heine (Eli Lilly, USA)</p>
									<div class="info">
										<button></button>
										<span class="time">14:00-15:30</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">Step Up Your Weight Management with Semaglutide</p>
										<p class="chairperson">
											<span class="bold">Bom Taeck Kim</span> (Ajou University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">14:00-14:25</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">Ju Young Shin</span> (Sungkyunkwan University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">14:25-14:50</span>
										</div>
									</div>
									<div>
										<p class="title">The Metabolic Effects of Tirzepatide, especially in East-Asian Patients from the SURPASS Program</p>
										<p class="chairperson">
											<span class="bold">Robert J. Heine</span> (Eli Lilly, USA)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">14:50-15:15</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">15:15-15:30</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">15:30-15:40</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
							</li> -->
							<li name="plenary_lecture_2">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Plenary Lecture 2</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Robert R. Wolfe (University of Arkansas for Medical Sciences, USA)</p>
									<div class="info">
										<button></button>
										<span class="time">15:40-16:20</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">
										<p>Organizer: Il-Young Kim (Gachon University, Republic of Korea)</p>
										<ul>
											<li>Prof. Wolfe is widely respected as the world’s foremost authority on stable isotope tracer methodology and on amino acid/protein nutrition. His research focuses on the regulation of muscle metabolism, particularly as affected by aging, obesity, insulin resistance, </li>
											<li>and stressors such as sepsis and cancer in humans Prof. Wolfe has developed numerous metabolic tracing models using stable isotope tracers to quantify a variety of metabolic processes in humans, which has formed the foundation of our understanding of many aspects of normal and abnormal metabolism of glucose, fatty acid, and amino acid/protein in humans. </li>
											<li>In his plenary lecture, the particular emphasis will be placed on the response of fatty acid kinetics to different conditions (exercise, glucose intake, obesity) in the context of the triglyceride-fatty acid cycle, with his more than 50 years of experience in the human metabolic research.</li>
										</ul>
										<p>References</p>
										<ul>
											<li>Kim IY et al., Tracing metabolic flux in vivo: basic model structures of tracer methodology. 2022 Sep;54(9):1311-1322. doi: 10.1038/s12276-022-00814-z.</li>
											<li>Miyoshi H et al., Hormonal control of substrate cycling in humans, J Clin Invest. 1988. 1988 May;81(5):1545-55. doi: 10.1172/JCI113487.</li>
											<li>Sidossis LS, Wolfe RR. Glucose and insulin-induced inhibition of fatty acid oxidation: the glucose-fatty acid cycle reversed. Am J Physiol. 1996 Apr;270(4 Pt 1):E733-8. doi: 10.1152/ajpendo.1996.270.4.E733. PMID: 8928782.</li>
										</ul>
									</div>
									<div>
										<p class="title">Understanding Human Metabolic Dysregulation In Vivo Using Stable Isotope Tracers: More than 50 Years of Experience</p>
										<p class="chairperson">
											<span class="bold">Robert R. Wolfe</span> (University of Arkansas for Medical Sciences, USA)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">15:40-16:10</span>
										</div>
									</div>
									<div>
										<p class="title">Q&A</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">16:10-16:20</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">16:20-16:30</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
							</li> -->
							<li name="symposium_9">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Symposium 9 : Obesity in Special Conditions</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Dicky L. Tahapary (Cardiovascular and Research Centre-IMERI(Indonesia Medical Education and Research Institute), Indonesia), <br/>Wen-Yuan Lin (China Medical University and Hospital, Taiwan), <br/>Tae Nyun Kim (Inje University, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">16:30-18:00</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">Diabesity: From Disease Mechanism to Clinical Management</p>
										<p class="chairperson">
											<span class="bold">Dicky L. Tahapary</span> (Cardiovascular and Research Centre-IMERI(Indonesia Medical Education and Research Institute), Indonesia)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">16:30-16:55</span>
										</div>
									</div>
									<div>
										<p class="title">Sarcopenia and Obesity</p>
										<p class="chairperson">
											<span class="bold">Wen-Yuan Lin</span> (China Medical University and Hospital, Taiwan)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">16:55-17:20</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">Tae Nyun Kim</span> (Inje University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">17:20-17:45</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">17:45-18:00</span>
										</div>
									</div>
								</div>
                            </li>
                        </ul>
                    </div>
					<!-----------------
						Day 2 > Room 2
					------------------->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
							<li name="breakfast_symposium_2">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Breakfast Symposium 2</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">07:30-08:20</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">07:30-08:20</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">08:20-08:30</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
							</li> -->
							<li name="plenary_lecture_1_2">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Plenary Lecture 1</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Thiruma V. Arumugam (La Trobe University, Australia)</p>
									<div class="info">
										<button></button>
										<span class="time">08:30-09:10</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">
										<p>Organizer : Jang Won Son (The Catholic University of Korea, Republic of Korea)</p>
										<ul>
											<li>Professor Thiruma V. Arumugam, a distinguished researcher in the fields of physiology and pharmacology at La Trobe University, Australia, is pushing the boundaries of neuroscience and metabolism. In his upcoming lecture, he will discuss how his work on intermittent metabolic switching has enhanced our comprehension of its effect on brain health, paving the way for potential therapeutic interventions.</li>
											<li>His recent publication in Theranostics, titled "Time-restricted feeding modulates the DNA methylation landscape, attenuates hallmark neuropathology and cognitive impairment in a mouse model of vascular dementia," has presented novel insights into the therapeutic potential of intermittent metabolic switching, offering promising strategies for managing and potentially reversing cognitive impairment in dementia.</li>
											<li>Further expanding our understanding, Professor Arumugam's article in Cell Metabolism, "Hallmarks of Brain Aging: Adaptive and Pathological Modification by Metabolic States," continues to revolutionize our perspective on the role of metabolism in brain aging.</li>
										</ul>
									</div>
									<div>
										<p class="title">Intermittent Metabolic Switching and Brain Health</p>
										<p class="chairperson">
											<span class="bold">Thiruma V. Arumugam</span> (La Trobe University, Australia)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">08:30-09:00</span>
										</div>
									</div>
									<div>
										<p class="title">Q&A</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">09:00-09:10</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">09:10-09:20</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
							</li> -->
							<li name="symposium_2">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Symposium 2 : Obesity and Neurodegenerative Diseases</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Thiruma V. Arumugam (La Trobe University, Australia), <br/>Dong Gyu Jo (Sungkyunkwan University, Republic of Korea), <br/>Theresia Handayani Mina (Nanyang Technological University, Singapore)</p>
									<div class="info">
										<button></button>
										<span class="time">09:20-10:50</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">Dietary Restriction and Vascular Dementia</p>
										<p class="chairperson">
											<span class="bold">Thiruma V. Arumugam</span> (La Trobe University, Australia)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">09:20-09:45</span>
										</div>
									</div>
									<div>
										<p class="title">Role of Adiponectin Signaling in Alzheimer's Disease</p>
										<p class="chairperson">
											<span class="bold">Dong Gyu Jo</span> (Sungkyunkwan University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">09:45-10:10</span>
										</div>
									</div>
									<div>
										<p class="title">The Impact of Adiposity and Cognitive Function: Closer than You Think</p>
										<p class="chairperson">
											<span class="bold">Theresia Handayani Mina</span> (Nanyang Technological University, Singapore)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">10:10-10:35</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">10:35-10:50</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">10:50-11:00</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
							</li> -->
							<li name="opening_address_2">
								<div class="main">
									<!-- <a href="/main/app_abstract.php" class="right_tag">Abstract</a> -->
									<p class="title">Opening Address</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">11:00-11:10</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
                            </li>
							<li name="keynote_lecture_1_2">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Keynote Lecture 1</p>
									<p class="chairperson">
										<span class="bold">Chairpersons:</span> Matthias Blüher (University of Leipzig, Germany)
									</p>
									<div class="info">
										<button></button>
										<span class="time">11:10-11:50</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">
										<p>Organizer: Soo Lim (Seoul National University, Republic of Korea)</p>
										<ul>
											<li>Matthias Blüher is Head of the Obesity Outpatient Clinic for Adults at the University of Leipzig Department of Medicine  in Leipzig, Germany. He is Professor of Molecular Endocrinology, with board certifications in Internal Medicine, Endocrinology and Diabetology. From 2006 to 2012, Professor Blüher served as Head of the Clinical Research Group ‘Atherobesity,’ and since 2013, he has been Speaker of the Collaborative Research Center on obesity mechanisms.</li>
											<li>Professor Blüher has won several awards, including the Obesity Research Award of the German Society for the Study of Obesity, the Ferdinand-Bertram-Prize of the German Diabetes Association, and the Rising Star Lecture at the 44th European Association for the Study of Diabetes (EASD) meeting. More recently, he received the Hans Christian Hagedorn Award from the German Diabetes Association in 2011 and the Minkowski Award from the EASD in 2015.</li>
										</ul>
										<p>References</p>
										<ul>
											<li>Blüher M, Aras M, Aronne LJ, Batterham RL, Giorgino F, Ji L, Pietiläinen KH, Schnell O, Tonchevska E, Wilding JPH. New insights into the treatment of obesity. Diabetes Obes Metab. 2023 Apr 13. doi: 10.1111/dom.15077.</li>
											<li>Blüher M. Metabolically Healthy Obesity. Endocr Rev. 2020 May 1;41(3):bnaa004. </li>	
										</ul>
									</div>
									<div>
										<p class="title">Adipose Tissue – A Treasure Box for Discoveries</p>
										<p class="chairperson">
											<span class="bold">Matthias Blüher</span> (University of Leipzig, Germany)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">11:10-11:40</span>
										</div>
									</div>
									<div>
										<p class="title">Q&A</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">11:40-11:50</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">11:50-12:00</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
							</li> -->
							<li name="luncheon_symposium_2">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Luncheon Symposium 2</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">12:00-13:00</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">12:00-13:00</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">13:00-14:00</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
							</li> -->
							<li name="symposium_6">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Symposium 6</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Hideaki Soya (University of Tsukuba, Japan), <br/>Jung Gi Hong (CHA University, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">14:00-15:30</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">Hideaki Soya</span> (University of Tsukuba, Japan)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">14:00-14:25</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD</span> <!-- (University of Sao Paulo, Brazil) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">14:25-14:50</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">Jung Gi Hong</span> (CHA University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">14:50-15:15</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">15:15-15:30</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">15:30-15:40</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
							</li> -->
							<li name="plenary_lecture_2_2">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Plenary Lecture 2</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Robert R. Wolfe (University of Arkansas for Medical Sciences, USA)</p>
									<div class="info">
										<button></button>
										<span class="time">15:40-16:20</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">
										<p>Organizer: Il-Young Kim (Gachon University, Republic of Korea)</p>
										<ul>
											<li>Prof. Wolfe is widely respected as the world’s foremost authority on stable isotope tracer methodology and on amino acid/protein nutrition. His research focuses on the regulation of muscle metabolism, particularly as affected by aging, obesity, insulin resistance, </li>
											<li>and stressors such as sepsis and cancer in humans Prof. Wolfe has developed numerous metabolic tracing models using stable isotope tracers to quantify a variety of metabolic processes in humans, which has formed the foundation of our understanding of many aspects of normal and abnormal metabolism of glucose, fatty acid, and amino acid/protein in humans. </li>
											<li>In his plenary lecture, the particular emphasis will be placed on the response of fatty acid kinetics to different conditions (exercise, glucose intake, obesity) in the context of the triglyceride-fatty acid cycle, with his more than 50 years of experience in the human metabolic research.</li>
										</ul>
										<p>References</p>
										<ul>
											<li>Kim IY et al., Tracing metabolic flux in vivo: basic model structures of tracer methodology. 2022 Sep;54(9):1311-1322. doi: 10.1038/s12276-022-00814-z.</li>
											<li>Miyoshi H et al., Hormonal control of substrate cycling in humans, J Clin Invest. 1988. 1988 May;81(5):1545-55. doi: 10.1172/JCI113487.</li>
											<li>Sidossis LS, Wolfe RR. Glucose and insulin-induced inhibition of fatty acid oxidation: the glucose-fatty acid cycle reversed. Am J Physiol. 1996 Apr;270(4 Pt 1):E733-8. doi: 10.1152/ajpendo.1996.270.4.E733. PMID: 8928782.</li>
										</ul>
									</div>
									<div>
										<p class="title">Understanding Human Metabolic Dysregulation In Vivo Using Stable Isotope Tracers: More than 50 Years of Experience</p>
										<p class="chairperson">
											<span class="bold">Robert R. Wolfe</span> (University of Arkansas for Medical Sciences, USA)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">15:40-16:10</span>
										</div>
									</div>
									<div>
										<p class="title">Q&A</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">16:10-16:20</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">16:20-16:30</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
							</li> -->
							<li name="symposium_10">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Symposium 10 : Neuropsychological Aspect of Obesity</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Yun Ha Jeong (Korea Brain Research Institute (KBRI), Republic of Korea), <br/>Kwang Wei Tham (Singapore), <br/>Vasileios Papaliagka (International Hellenic University, Greece)</p>
									<div class="info">
										<button></button>
										<span class="time">16:30-18:00</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">The Effect of Obesity and HDL Concentration on AD Pathology</p>
										<p class="chairperson">
											<span class="bold">Yun Ha Jeong</span> (Korea Brain Research Institute (KBRI), Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">16:30-16:55</span>
										</div>
									</div>
									<div>
										<p class="title">Weight Bias and Stigma: The Occult Peril in Obesity Management</p>
										<p class="chairperson">
											<span class="bold">Kwang Wei Tham</span> (Woodlands Health, Singapore)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">16:55-17:20</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">Vasileios Papaliagka</span> (International Hellenic University, Greece)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">17:20-17:45</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">17:45-18:00</span>
										</div>
									</div>
								</div>
                            </li>
                        </ul>
                    </div>
					<!-----------------
						Day 2 > Room 3
					------------------->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
							<li name="breakfast_symposium_3">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Breakfast Symposium 3</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">07:30-08:20</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">07:30-08:20</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">08:20-08:30</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
							</li> -->
							<li name="plenary_lecture_1_3">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Plenary Lecture 1</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Thiruma V. Arumugam (La Trobe University, Australia)</p>
									<div class="info">
										<button></button>
										<span class="time">08:30-09:10</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">
										<p>Organizer : Jang Won Son (The Catholic University of Korea, Republic of Korea)</p>
										<ul>
											<li>Professor Thiruma V. Arumugam, a distinguished researcher in the fields of physiology and pharmacology at La Trobe University, Australia, is pushing the boundaries of neuroscience and metabolism. In his upcoming lecture, he will discuss how his work on intermittent metabolic switching has enhanced our comprehension of its effect on brain health, paving the way for potential therapeutic interventions.</li>
											<li>His recent publication in Theranostics, titled "Time-restricted feeding modulates the DNA methylation landscape, attenuates hallmark neuropathology and cognitive impairment in a mouse model of vascular dementia," has presented novel insights into the therapeutic potential of intermittent metabolic switching, offering promising strategies for managing and potentially reversing cognitive impairment in dementia.</li>
											<li>Further expanding our understanding, Professor Arumugam's article in Cell Metabolism, "Hallmarks of Brain Aging: Adaptive and Pathological Modification by Metabolic States," continues to revolutionize our perspective on the role of metabolism in brain aging.</li>
										</ul>
									</div>
									<div>
										<p class="title">Intermittent Metabolic Switching and Brain Health</p>
										<p class="chairperson">
											<span class="bold">Thiruma V. Arumugam</span> (La Trobe University, Australia)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">08:30-09:00</span>
										</div>
									</div>
									<div>
										<p class="title">Q&A</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">09:00-09:10</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">09:10-09:20</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
							</li> -->
							<li name="symposium_3">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Symposium 3 : Digital Therapeutics</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Ki-Hyun Jeon (Seoul National University, Republic of Korea), <br/>Laura Falvey (Reset Health, UK), <br/>Sang Youl Rhee (Kyung Hee University, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">09:20-10:50</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">Ki-Hyun Jeon</span> (Seoul National University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">09:20-09:45</span>
										</div>
									</div>
									<div>
										<p class="title">The Roczen Programme: A Digitally Enabled, Medically-led Intervention for Obesity and T2D</p>
										<p class="chairperson">
											<span class="bold">Laura Falvey</span> (Reset Health, UK)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">09:45-10:10</span>
										</div>
									</div>
									<div>
										<p class="title">Management of Obesity and Metabolic Diseases through Digital Intervention: Current Evidence and Future Prospects</p>
										<p class="chairperson">
											<span class="bold">Sang Youl Rhee</span> (Kyung Hee University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">10:10-10:35</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">10:35-10:50</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">10:50-11:00</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
							</li> -->
							<li name="opening_address_3">
								<div class="main">
									<!-- <a href="/main/app_abstract.php" class="right_tag">Abstract</a> -->
									<p class="title">Opening Address</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">11:00-11:10</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
                            </li>
							<li name="keynote_lecture_1_3">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Keynote Lecture 1</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Matthias Blüher (University of Leipzig, Germany)</p>
									<div class="info">
										<button></button>
										<span class="time">11:10-11:50</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">
										<p>Organizer: Soo Lim (Seoul National University, Republic of Korea)</p>
										<ul>
											<li>Matthias Blüher is Head of the Obesity Outpatient Clinic for Adults at the University of Leipzig Department of Medicine  in Leipzig, Germany. He is Professor of Molecular Endocrinology, with board certifications in Internal Medicine, Endocrinology and Diabetology. From 2006 to 2012, Professor Blüher served as Head of the Clinical Research Group ‘Atherobesity,’ and since 2013, he has been Speaker of the Collaborative Research Center on obesity mechanisms.</li>
											<li>Professor Blüher has won several awards, including the Obesity Research Award of the German Society for the Study of Obesity, the Ferdinand-Bertram-Prize of the German Diabetes Association, and the Rising Star Lecture at the 44th European Association for the Study of Diabetes (EASD) meeting. More recently, he received the Hans Christian Hagedorn Award from the German Diabetes Association in 2011 and the Minkowski Award from the EASD in 2015.</li>
										</ul>
										<p>References</p>
										<ul>
											<li>Blüher M, Aras M, Aronne LJ, Batterham RL, Giorgino F, Ji L, Pietiläinen KH, Schnell O, Tonchevska E, Wilding JPH. New insights into the treatment of obesity. Diabetes Obes Metab. 2023 Apr 13. doi: 10.1111/dom.15077.</li>
											<li>Blüher M. Metabolically Healthy Obesity. Endocr Rev. 2020 May 1;41(3):bnaa004. </li>	
										</ul>
									</div>
									<div>
										<p class="title">Adipose Tissue – A Treasure Box for Discoveries</p>
										<p class="chairperson">
											<span class="bold">Matthias Blüher</span> (University of Leipzig, Germany)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">11:10-11:40</span>
										</div>
									</div>
									<div>
										<p class="title">Q&A</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">11:40-11:50</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">11:50-12:00</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
							</li> -->
							<li name="luncheon_symposium_3">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Luncheon Symposium 3</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Soo Kyoung Kim (Gyeongsang National University, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">12:00-13:00</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">Soo Kyoung Kim</span> (Gyeongsang National University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">12:00-13:00</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">13:00-14:00</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
							</li> -->
							<li name="symposium_7">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Symposium 7 : Metabolic Signaling in Obesity-related Diseases</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Zach Gerhart-Hines (University of Copenhagen, Denmark), <br/>Eun Hee Ko (University of Ulsan, Republic of Korea), <br/>Je-Kyung Seong (Seoul National University, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">14:00-15:30</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">Uncovering Novel GPCR Pathways for the Treatment of Obesity and Type 2 Diabetes</p>
										<p class="chairperson">
											<span class="bold">Zach Gerhart-Hines</span> (University of Copenhagen, Denmark)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">14:00-14:25</span>
										</div>
									</div>
									<div>
										<p class="title">The Double-edged Role of the NLRP3 Inflammasome in Adipose Tissue</p>
										<p class="chairperson">
											<span class="bold">Eun Hee Ko</span> (University of Ulsan, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">14:25-14:50</span>
										</div>
									</div>
									<div>
										<p class="title">Microbiota in Obesity-related Metabolic Diseases in Mouse Models</p>
										<p class="chairperson">
											<span class="bold">Je-Kyung Seong</span> (Seoul National University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">14:50-15:15</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">15:15-15:30</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">15:30-15:40</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
							</li> -->
							<li name="plenary_lecture_2_3">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Plenary Lecture 2</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Robert R. Wolfe (University of Arkansas for Medical Sciences, USA)</p>
									<div class="info">
										<button></button>
										<span class="time">15:40-16:20</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">
										<p>Organizer: Il-Young Kim (Gachon University, Republic of Korea)</p>
										<ul>
											<li>Prof. Wolfe is widely respected as the world’s foremost authority on stable isotope tracer methodology and on amino acid/protein nutrition. His research focuses on the regulation of muscle metabolism, particularly as affected by aging, obesity, insulin resistance, </li>
											<li>and stressors such as sepsis and cancer in humans Prof. Wolfe has developed numerous metabolic tracing models using stable isotope tracers to quantify a variety of metabolic processes in humans, which has formed the foundation of our understanding of many aspects of normal and abnormal metabolism of glucose, fatty acid, and amino acid/protein in humans. </li>
											<li>In his plenary lecture, the particular emphasis will be placed on the response of fatty acid kinetics to different conditions (exercise, glucose intake, obesity) in the context of the triglyceride-fatty acid cycle, with his more than 50 years of experience in the human metabolic research.</li>
										</ul>
										<p>References</p>
										<ul>
											<li>Kim IY et al., Tracing metabolic flux in vivo: basic model structures of tracer methodology. 2022 Sep;54(9):1311-1322. doi: 10.1038/s12276-022-00814-z.</li>
											<li>Miyoshi H et al., Hormonal control of substrate cycling in humans, J Clin Invest. 1988. 1988 May;81(5):1545-55. doi: 10.1172/JCI113487.</li>
											<li>Sidossis LS, Wolfe RR. Glucose and insulin-induced inhibition of fatty acid oxidation: the glucose-fatty acid cycle reversed. Am J Physiol. 1996 Apr;270(4 Pt 1):E733-8. doi: 10.1152/ajpendo.1996.270.4.E733. PMID: 8928782.</li>
										</ul>
									</div>
									<div>
										<p class="title">Understanding Human Metabolic Dysregulation In Vivo Using Stable Isotope Tracers: More than 50 Years of Experience</p>
										<p class="chairperson">
											<span class="bold">Robert R. Wolfe</span> (University of Arkansas for Medical Sciences, USA)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">15:40-16:10</span>
										</div>
									</div>
									<div>
										<p class="title">Q&A</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">16:10-16:20</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">16:20-16:30</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
							</li> -->
							<li name="symposium_11">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Symposium 11 : Social and Environmental Determinants: Nutritional View of Obesity</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Seung-Yeon Lee (University of Cincinnati, USA), <br/>Ji-Yun Hwang (Sangmyung University, Republic of Korea), <br/>Hyeon Chang Kim (Yonsei University, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">16:30-18:00</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">Seung-Yeon Lee</span> (University of Cincinnati, USA)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">16:30-16:55</span>
										</div>
									</div>
									<div>
										<p class="title">Influence of Social and Environmental Factors on Nutrition and Obesity</p>
										<p class="chairperson">
											<span class="bold">Ji-Yun Hwang</span> (Sangmyung University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">16:55-17:20</span>
										</div>
									</div>
									<div>
										<p class="title">Socioeconomic Inequalities in Obesity</p>
										<p class="chairperson">
											<span class="bold">Hyeon Chang Kim</span> (Yonsei University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">17:20-17:45</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">17:45-18:00</span>
										</div>
									</div>
								</div>
                            </li>
                        </ul>
                    </div>
					<!-----------------
						Day 2 > Room 4
					------------------->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
							<li name="symposium_4">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Symposium 4 : The Myosteatosis: Novel Aspect of Sarcopenia and Obesity</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Hong-Kyu Kim (University of Ulsan, Republic of Korea), <br/>Chang-hee Jung (University of Ulsan, Republic of Korea), <br/>Hajime Yamazaki (Kyoto University, Japan)</p>
									<div class="info">
										<button></button>
										<span class="time">09:20-10:50</span>
										<span class="branch">Room 4</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">Changes in Body Composition with Aging: Visceral Fat Obesity, Low Muscle Mass, and Myosteatosis</p>
										<p class="chairperson">
											<span class="bold">Hong-Kyu Kim</span> (University of Ulsan, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">09:20-09:45</span>
										</div>
									</div>
									<div>
										<p class="title">Clinical Implications of Myosteatosis in Cardiometabolic Health</p>
										<p class="chairperson">
											<span class="bold">Chang-hee Jung</span> (University of Ulsan, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">09:45-10:10</span>
										</div>
									</div>
									<div>
										<p class="title">New Insights into Fat Distribution: An Integrated Analysis of Hepatic, Pancreatic, Muscular, and Visceral Fat</p>
										<p class="chairperson">
											<span class="bold">Hajime Yamazaki</span> (Kyoto University, Japan)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">10:10-10:35</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">10:35-10:50</span>
										</div>
									</div>
								</div>
                            </li>
							<li name="oral_presentation_1">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Oral Presentatoin 1</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">13:00-14:00</span>
										<span class="branch">Room 4</span>
									</div>
								</div>
								<!-- <div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p>
										<div class="info">
											<span class="time">00:00-00:00</span>
										</div>
									</div>
								</div> -->
                            </li>
							<li name="symposium_8">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Symposium 8</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">14:00-15:30</span>
										<span class="branch">Room 4</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">14:00-14:25</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">14:25-14:50</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">14:50-15:15</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">15:15-15:30</span>
										</div>
									</div>
								</div>
                            </li>
							<li name="symposium_12">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Symposium 12 : Obesity: Transition from Adolescence to Young Adult</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Dughyun Choi (Soonchunhyang University, Republic of Korea), <br/>Min Sun Kim (Chonbuk National University, Republic of Korea), <br/>Joon Young Kim (Syracuse University, USA)</p>
									<div class="info">
										<button></button>
										<span class="time">16:30-18:00</span>
										<span class="branch">Room 4</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">Facing Obesity and Type 2 Diabetes: From Childhood to Adulthood</p>
										<p class="chairperson">
											<span class="bold">Dughyun Choi</span> (Soonchunhyang University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">16:30-16:55</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">Min Sun Kim</span> (Chonbuk National University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">16:55-17:20</span>
										</div>
									</div>
									<div>
										<p class="title">Emerging Biomarkers of Type 2 Diabetes in Obese Youth vs Adult</p>
										<p class="chairperson">
											<span class="bold">Joon Young Kim</span> (Syracuse University, USA)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">17:20-17:45</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">17:45-18:00</span>
										</div>
									</div>
								</div>
                            </li>
                        </ul>
                    </div>
					<!-----------------
						Day 2 > Room 5
					------------------->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
							<li name="sponsored_session_1">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Sponsored Session 1 : Journey to the Combination Phentermine plus Topiramate ER from Clinical Trials to Practice</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Kyoung Min Kim (Yonsei University, Republic of Korea), <br/>So Hyun Chun (Sungkyunkwan University, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">09:20-10:50</span>
										<span class="branch">Room 5</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">09:20-09:50</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">Kyoung Min Kim</span> (Yonsei University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">09:50-10:20</span>
										</div>
									</div>
									<div>
										<p class="title">FAQ Finder : A Case-based Approach to Prescription of Combination Phentermine plus Topiramate ER</p>
										<p class="chairperson">
											<span class="bold">So Hyun Chun</span> (Sungkyunkwan University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">10:20-10:50</span>
										</div>
									</div>
								</div>
                            </li>
							<li name="oral_presentation_2">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Oral Presentatoin 2</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">13:00-14:00</span>
										<span class="branch">Room 5</span>
									</div>
								</div>
								<!-- <div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p>
										<div class="info">
											<span class="time">00:00-00:00</span>
										</div>
									</div>
								</div> -->
                            </li>
							<li name="sponsored_session_2">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Sponsored Session 2</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Eun Roh (Hallym University, Republic of Korea), <br/>Jong Han Choi (Konkuk University, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">14:00-15:30</span>
										<span class="branch">Room 5</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">14:00-14:30</span>
										</div>
									</div>
									<div>
										<p class="title">Role of DPP4-I under the Latest Treatment Trend</p>
										<p class="chairperson">
											<span class="bold">Eun Roh</span> (Hallym University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">14:30-15:00</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">Jong Han Choi</span> (Konkuk University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">15:00-15:30</span>
										</div>
									</div>
								</div>
                            </li>
							<li name="obesity_treatment_guidelines_symposium">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Obesity Treatment Guidelines Symposium : Behind the Scenes: The Journey of Evolution and Revising Obesity Guidelines</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Yasushi Ishigaki (Iwate Medical University, Japan), <br/>Jee Hyun Kang (Konyang University, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">16:30-18:00</span>
										<span class="branch">Room 5</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">How were JASSO's Guidelines Established? - The Process Involved in Developing Obesity Guidelines</p>
										<p class="chairperson">
											<span class="bold">Yasushi Ishigaki</span> (Iwate Medical University, Japan)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">16:30-16:55</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD</span> <!-- (Hallym University, Republic of Korea) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">16:55-17:20</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">Jee Hyun Kang</span> (Konyang University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">17:20-17:45</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Jee Hyun Kang</span> (Konyang University, Republic of Korea)</p> -->
										<div class="info">
											<span class="time">17:45-18:00</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="joint_symposium_AOASO_2">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Joint Symposium AOASO 2</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p>
									<div class="info">
										<button></button>
										<span class="time">16:30-18:00</span>
										<span class="branch">Room 5</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson"><span class="bold">TBD</span> </p>
										<div class="info">
											<span class="time">16:30-17:00</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson"><span class="bold">TBD</span> </p>
										<div class="info">
											<span class="time">17:00-17:30</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson"><span class="bold">TBD</span> </p>
										<div class="info">
											<span class="time">17:30-18:00</span>
										</div>
									</div>
								</div>
							</li> -->
                        </ul>
                    </div>
					<!-----------------
						Day 2 > Room 6
					------------------->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
							<li name="joint_symposium_EASO">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Joint Symposium EASO</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">09:20-10:50</span>
										<span class="branch">Room 6</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">09:20-09:45</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">09:45-10:10</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">10:10-10:35</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">10:35-10:50</span>
										</div>
									</div>
								</div>
                            </li>
							<li name="joint_symposium_AOASO_1">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Joint Symposium KSSO-AOASO</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Geeta Appannah (University Putra Malaysia, Malaysia), <br/>Do Thi Ngoc Diep (Vietnam), <br/>Hae-Jin Ko (Kyungpook National University, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">14:00-15:30</span>
										<span class="branch">Room 6</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">Tackling Obesity in Malaysia. Are We Doing Enough?</p>
										<p class="chairperson">
											<span class="bold">Geeta Appannah</span> (University Putra Malaysia, Malaysia)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">14:00-14:25</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">Do Thi Ngoc Diep</span> (Vietnam)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">14:25-14:50</span>
										</div>
									</div>
									<div>
										<p class="title">Current Status and Facts of Obesity Prevalence for Obesity Prevention and Management in Korea</p>
										<p class="chairperson">
											<span class="bold">Hae-Jin Ko</span> (Kyungpook National University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">14:50-15:15</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion </p>
										<!-- <p class="chairperson"><span class="bold">Hae-Jin Ko</span> (Kyungpook National University, Republic of Korea)</p> -->
										<div class="info">
											<span class="time">15:15-15:30</span>
										</div>
									</div>
								</div>
							</li>
							<li name="congress_banquet_ceremony">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Congress Banquet <span class="font_inherit red_txt">*</span>Invited Only</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">18:30-21:30</span>
										<span class="branch">Room 6</span>
									</div>
								</div>
								<!-- <div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p>
										<div class="info">
											<span class="time">00:00-00:00</span>
										</div>
									</div>
								</div> -->
                            </li>
                        </ul>
                    </div>
					<!-----------------
						Day 2 > Room 7
					------------------->
                    <div class="tab_cont on">
                        <ul class="program_detail_ul">
							<li name="guided_poster_presentation_1">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Guided Poster Presentation 2</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">13:00-14:00</span>
										<span class="branch">Room 7</span>
									</div>
								</div>
								<!-- <div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p>
										<div class="info">
											<span class="time">00:00-00:00</span>
										</div>
									</div>
								</div> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
			<!-----------------
				Day 3
			------------------->
            <div class="tab_cont">
                <ul class="app_sort_form app_half_ul">
					<li>
						<select name="" id="" class="sort_select">
							<option value="" hidden="">Select Room</option>
							<option value="all" selected>All</option>
							<option value="1">Room 1</option>
							<option value="2">Room 2</option>
							<option value="3">Room 3</option>
							<option value="4">Room 4</option>
							<option value="5">Room 5</option>
							<option value="6">Room 6</option>
							<option value="7">Room 7</option>
						</select>
					</li>
					<li>
						<select name="" id="">
							<option value="" hidden="">Select Category</option>
							<option value="">All</option>
							<option value="">Opening Address</option>
							<option value="">Closing &amp; Award Ceremony</option>
							<option value="">Welcome Cocktail Party</option>
							<option value="">Congress Banquet</option>
							<option value="">Plenary Lecture</option>
							<option value="">Keynote Lecture</option>
							<option value="">Best Article in JOMES</option>
							<option value="">Symposium</option>
							<option value="">Obesity Treatment Guidelines Symposium</option>
							<option value="">Pre-congress Symposium</option>
							<option value="">Breakfast Symposium</option>
							<option value="">Luncheon Symposium</option>
							<option value="">Satellite Symposium</option>
							<option value="">Sponsored Session</option>
							<option value="">Joint Symposium</option>
							<option value="">Oral Presentation</option>
							<option value="">Guided Poster Presentation</option>
						</select>
					</li>
				</ul>
                <div class="tab_wrap">
					<!-----------------
						Day 3 > Room 1
					------------------->
                    <div class="tab_cont on">
                        <ul class="program_detail_ul">
							<li name="breakfast_symposium_4">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Breakfast Symposium 4</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Jun Hwa Hong (Eulji University, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">07:30-08:20</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">Thiazolidinediones and SGLT2i: A Rational Combination Based on T2DM Pathophysiology</p>
										<p class="chairperson">
											<span class="bold">Jun Hwa Hong</span> (Eulji University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">07:30-08:20</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">08:20-08:30</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
							</li> -->
							<li name="plenary_lecture_3">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Plenary Lecture 3</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Tamas Horvath (Yale University, USA)</p>
									<div class="info">
										<button></button>
										<span class="time">08:30-09:10</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">The Role of Hunger-promoting Hypothalamic Neurons in Obesity Therapeutics</p>
										<p class="chairperson">
											<span class="bold">Tamas Horvath</span> (Yale University, USA)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">08:30-09:00</span>
										</div>
									</div>
									<div>
										<p class="title">Q&A</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">09:00-09:10</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">09:10-09:20</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
							</li> -->
							<li name="symposium_13">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Symposium 13 : Health Consequences of Obesity</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Sang-Man Jin (Sungkyunkwan University, Republic of Korea), <br/>Ming-Hua Zheng (Wenzhou Medical University, China), <br/>Bo Kyung Koo (Seoul National University, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">09:20-10:50</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">MAFLD and NAFLD in the Prediction of Incident Chronic Kidney Disease</p>
										<p class="chairperson">
											<span class="bold">Sang-Man Jin</span> (Sungkyunkwan University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">09:20-09:45</span>
										</div>
									</div>
									<div>
										<p class="title">MAFLD versus NAFLD and the Risk of Cardiovascular Disease</p>
										<p class="chairperson">
											<span class="bold">Ming-Hua Zheng</span> (Wenzhou Medical University, China)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">09:45-10:10</span>
										</div>
									</div>
									<div>
										<p class="title">Determinants of the Prognosis of NAFLD</p>
										<p class="chairperson">
											<span class="bold">Bo Kyung Koo</span> (Seoul National University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">10:10-10:35</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">10:35-10:50</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">10:50-11:00</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
							</li> -->
							<li name="keynote_lecture_2">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Keynote Lecture 2</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Jae Myoung Suh (KAIST, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">11:00-11:40</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">Jae Myoung Suh</span> (KAIST, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">11:00-11:30</span>
										</div>
									</div>
									<div>
										<p class="title">Q&A</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">11:30-11:40</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">11:40-11:50</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
							</li> -->
							<li name="luncheon_symposium_4">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Luncheon Symposium 4</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Sung Hoon Yu (Hanyang University, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">11:50-12:50</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">Sung Hoon Yu</span> (Hanyang University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">11:50-12:50</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">12:50-13:50</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
							</li> -->
							<li name="keynote_lecture_3">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Keynote Lecture 3</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Zachary Knight (University of California, San Francisco, USA)</p>
									<div class="info">
										<button></button>
										<span class="time">13:50-14:30</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">
										<p>Organizer: Hyung Jin Choi (Seoul National University, Republic of Korea)</p>
										<ul>
											<li>Professor Zachary Knight is a pioneer in the field of elucidating the neural mechanisms of appetite, homeostasis, and obesity, having published some of the finest research in Nature, Cell, and elsewhere over the past few years.</li>
											<li>His use of potent neuroscience tools is always accompanied by a profound understanding of concepts related to appetite. In this keynote lecture, he will present his most recent findings regarding the function of neural circuits in the brainstem in regulating eating behavior.</li>
										</ul>
										<p>References</p>
										<ul>
											<li>Nature. Dopamine subsystems that track internal states. 2022</li>
											<li>Cell. Genetic identification of vagal sensory neurons that control feeding. 2019</li>
										</ul>
									</div>
									<div>
										<p class="title">Brainstem Circuits that Control Ingestion</p>
										<p class="chairperson">
											<span class="bold">Zachary Knight</span> (University of California, San Francisco, USA)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">13:50-14:20</span>
										</div>
									</div>
									<div>
										<p class="title">Q&A</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">14:20-14:30</span>
										</div>
									</div>
								</div>
                            </li>
							<li name="keynote_lecture_4">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Keynote Lecture 4</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Jae-Heon Kang (Sungkyunkwan University, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">14:30-15:10</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">National Obesity Strategy in Korea: Past, Present and Future</p>
										<p class="chairperson">
											<span class="bold">Jae-Heon Kang</span> (Sungkyunkwan University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">14:30-15:00</span>
										</div>
									</div>
									<div>
										<p class="title">Q&A</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">15:00-15:10</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">15:10-15:20</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
							</li> -->
							<li name="symposium_17">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Symposium 17 : The Power of Synergy: Optimizing Anti-obesity Treatment with Combination Pharmacotherapy</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Jang Won Son (The Catholic University of Korea, Republic of Korea), <br/>Jennifer Strande  (AMGEN, USA), <br/>Se Hee Min (Univeristy of Ulsan, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">15:20-16:50</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">Unveiling the New Wave: A Comprehensive Overview of Emerging Anti-Obesity Medications</p>
										<p class="chairperson">
											<span class="bold">Jang Won Son</span> (The Catholic University of Korea, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">15:20-15:45</span>
										</div>
									</div>
									<div>
										<p class="title">A Phase 1 Randomized, Double-blind placebo-controlled Single and Multiple Ascending Dose Study of AMG 133 in Subjects with Obesity</p>
										<p class="chairperson">
											<span class="bold">Jennifer Strande</span> (AMGEN, USA)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">15:45-16:10</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">Se Hee Min</span> (Univeristy of Ulsan, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">16:10-16:35</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">16:35-16:50</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">16:50-17:00</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
							</li> -->
							<li name="plenary_lecture_4">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Plenary Lecture 4</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> John Wilding (University of Liverpool, UK)</p>
									<div class="info">
										<button></button>
										<span class="time">17:00-17:40</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">Current and Future in Obesity Management</p>
										<p class="chairperson">
											<span class="bold">John Wilding</span> (University of Liverpool, UK)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">17:00-17:30</span>
										</div>
									</div>
									<div>
										<p class="title">Q&A</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">17:30-17:40</span>
										</div>
									</div>
								</div>
                            </li>
							<li name="closing_ceremony">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Closing Ceremony</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">17:40-18:00</span>
										<span class="branch">Room 1</span>
									</div>
								</div>
								<!-- <div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p>
										<div class="info">
											<span class="time">00:00-00:00</span>
										</div>
									</div>
								</div> -->
                            </li>
                        </ul>
                    </div>
					<!-----------------
						Day 3 > Room 2
					------------------->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
							<li name="breakfast_symposium_5">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Breakfast Symposium 5</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">07:30-08:20</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">07:30-08:20</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">08:20-08:30</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
							</li> -->
							<li name="plenary_lecture_3_2">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Plenary Lecture 3</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Tamas Horvath (Yale University, USA)</p>
									<div class="info">
										<button></button>
										<span class="time">08:30-09:10</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">The Role of Hunger-promoting Hypothalamic Neurons in Obesity Therapeutics</p>
										<p class="chairperson">
											<span class="bold">Tamas Horvath</span> (Yale University, USA)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">08:30-09:00</span>
										</div>
									</div>
									<div>
										<p class="title">Q&A</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">09:00-09:10</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">09:10-09:20</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
							</li> -->
							<li name="symposium_14">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Symposium 14 : Promoting Healthy Muscle and Liver Metabolism</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Robert R. Wolfe (University of Arkansas for Medical Sciences, USA), <br/>Melanie Cree-Green (University of Colorado Anschutz, USA), <br/>Il-Young Kim (Gachon University, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">09:20-10:50</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">The Role of Muscle in Weight Management</p>
										<p class="chairperson">
											<span class="bold">Robert R. Wolfe</span> (University of Arkansas for Medical Sciences, USA)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">09:20-09:45</span>
										</div>
									</div>
									<div>
										<p class="title">Effectors of NAFLD Development: Metabolic, Nutritional and Pharmacologic</p>
										<p class="chairperson">
											<span class="bold">Melanie Cree-Green</span> (University of Colorado Anschutz, USA)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">09:45-10:10</span>
										</div>
									</div>
									<div>
										<p class="title">Roles of Dietary Essential Amino Acids and Exercise for Muscle and Metabolic Health</p>
										<p class="chairperson">
											<span class="bold">Il-Young Kim</span> (Gachon University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">10:10-10:35</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">10:35-10:50</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">10:50-11:00</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
							</li> -->
							<li name="keynote_lecture_2_2">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Keynote Lecture 2</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Jae Myoung Suh (KAIST, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">11:00-11:40</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">Jae Myoung Suh</span> (KAIST, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">11:00-11:30</span>
										</div>
									</div>
									<div>
										<p class="title">Q&A</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">11:30-11:40</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">11:40-11:50</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
							</li> -->
							<li name="luncheon_symposium_5">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Luncheon Symposium 5</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">11:50-12:50</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">11:50-12:50</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">12:50-13:50</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
							</li> -->
							<li name="keynote_lecture_3_2">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Keynote Lecture 3</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Zachary Knight (University of California, San Francisco, USA)</p>
									<div class="info">
										<button></button>
										<span class="time">13:50-14:30</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">
										<p>Organizer: Hyung Jin Choi (Seoul National University, Republic of Korea)</p>
										<ul>
											<li>Professor Zachary Knight is a pioneer in the field of elucidating the neural mechanisms of appetite, homeostasis, and obesity, having published some of the finest research in Nature, Cell, and elsewhere over the past few years.</li>
											<li>His use of potent neuroscience tools is always accompanied by a profound understanding of concepts related to appetite. In this keynote lecture, he will present his most recent findings regarding the function of neural circuits in the brainstem in regulating eating behavior.</li>
										</ul>
										<p>References</p>
										<ul>
											<li>Nature. Dopamine subsystems that track internal states. 2022</li>
											<li>Cell. Genetic identification of vagal sensory neurons that control feeding. 2019</li>
										</ul>
									</div>
									<div>
										<p class="title">Brainstem Circuits that Control Ingestion</p>
										<p class="chairperson">
											<span class="bold">Zachary Knight</span> (University of California, San Francisco, USA)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">13:50-14:20</span>
										</div>
									</div>
									<div>
										<p class="title">Q&A</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">14:20-14:30</span>
										</div>
									</div>
								</div>
                            </li>
							<li name="keynote_lecture_4_2">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Keynote Lecture 4</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Jae-Heon Kang (Sungkyunkwan University, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">14:30-15:10</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">National Obesity Strategy in Korea: Past, Present and Future</p>
										<p class="chairperson">
											<span class="bold">Jae-Heon Kang</span> (Sungkyunkwan University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">14:30-15:00</span>
										</div>
									</div>
									<div>
										<p class="title">Q&A</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">15:00-15:10</span>
										</div>
									</div>
								</div>
                            </li>
							<li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<!-- <button></button> -->
										<span class="time">15:10-15:20</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
							</li>
							<li name="symposium_18">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Symposium 18 : Neuroscience</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Michael Krashes (National Institute of Diabetes and Digestive and Kidney Diseases(NIDDK), USA), <br/>Yu Fu (Institute of Molecular and Cell Biology (IMCB), Singapore), <br/>Changjoon Lee (Institute for Basic Science (IBS), Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">15:20-16:50</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">Mapping Appetite Circuits with Molecular Connectomics</p>
										<p class="chairperson">
											<span class="bold">Michael Krashes</span> (National Institute of Diabetes and Digestive and Kidney Diseases(NIDDK), USA)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">15:20-15:45</span>
										</div>
									</div>
									<div>
										<p class="title">Feeding Regulation by Tuberal Nucleus Somatostatin Neurons</p>
										<p class="chairperson">
											<span class="bold">Yu Fu</span> (Institute of Molecular and Cell Biology (IMCB), Singapore)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">15:45-16:10</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">Changjoon Lee</span> (Institute for Basic Science (IBS), Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">16:10-16:35</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">16:35-16:50</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">16:50-17:00</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
							</li> -->
							<li name="plenary_lecture_4_2">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Plenary Lecture 4</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> John Wilding (University of Liverpool, UK)</p>
									<div class="info">
										<button></button>
										<span class="time">17:00-17:40</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">Current and Future in Obesity Management</p>
										<p class="chairperson">
											<span class="bold">John Wilding</span> (University of Liverpool, UK)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">17:00-17:30</span>
										</div>
									</div>
									<div>
										<p class="title">Q&A</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">17:30-17:40</span>
										</div>
									</div>
								</div>
                            </li>
							<li name="closing_ceremony_2">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Closing Ceremony</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">17:40-18:00</span>
										<span class="branch">Room 2</span>
									</div>
								</div>
								<!-- <div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p>
										<div class="info">
											<span class="time">00:00-00:00</span>
										</div>
									</div>
								</div> -->
                            </li>
                        </ul>
                    </div>
					<!-----------------
						Day 3 > Room 3
					------------------->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
							<li name="breakfast_symposium_6">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Breakfast Symposium 6</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Yeoree Yang (The Catholic University of Korea, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">07:30-08:20</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">Yeoree Yang</span> (The Catholic University of Korea, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">07:30-08:20</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">08:20-08:30</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
							</li> -->
							<li name="plenary_lecture_3_3">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Plenary Lecture 3</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Tamas Horvath (Yale University, USA)</p>
									<div class="info">
										<button></button>
										<span class="time">08:30-09:10</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">The Role of Hunger-promoting Hypothalamic Neurons in Obesity Therapeutics</p>
										<p class="chairperson">
											<span class="bold">Tamas Horvath</span> (Yale University, USA)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">08:30-09:00</span>
										</div>
									</div>
									<div>
										<p class="title">Q&A</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">09:00-09:10</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">09:10-09:20</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
							</li> -->
							<li name="symposium_15">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Symposium 15 : Community-based Nutrition Interventions and Approaches for Vulnerable Groups</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Shirley Y. Chao (Massachusetts Executive Office of Elder Affairs, USA), <br/>Seung Eun Jung (The University of Alabama, USA), <br/>Minsun Jeon (Chungnam National University, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">09:20-10:50</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">Integrating Frailty and Malnutrition Screening into Community Care for Older Adults and Their Caregivers</p>
										<p class="chairperson">
											<span class="bold">Shirley Y. Chao</span> (Massachusetts Executive Office of Elder Affairs, USA)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">09:20-09:45</span>
										</div>
									</div>
									<div>
										<p class="title">Community-based Strategies to Decrease Health Disparities and Improve Nutritional Status for US Low-income Population</p>
										<p class="chairperson">
											<span class="bold">Seung Eun Jung</span> (The University of Alabama, USA)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">09:45-10:10</span>
										</div>
									</div>
									<div>
										<p class="title">Nutrition Management Strategies for the Elderly and the Disabled in Social Welfare Facilities</p>
										<p class="chairperson">
											<span class="bold">Minsun Jeon</span> (Chungnam National University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">10:10-10:35</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">10:35-10:50</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">10:50-11:00</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
							</li> -->
							<li name="keynote_lecture_2_3">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Keynote Lecture 2</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Jae Myoung Suh (KAIST, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">11:00-11:40</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">Jae Myoung Suh</span> (KAIST, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">11:00-11:30</span>
										</div>
									</div>
									<div>
										<p class="title">Q&A</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">11:30-11:40</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">11:40-11:50</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
							</li> -->
							<li name="luncheon_symposium_6">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Luncheon Symposium 6</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Sang Youl Rhee (Kyung Hee University, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">11:50-12:50</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">Obesity Management in Digital Era</p>
										<p class="chairperson">
											<span class="bold">Sang Youl Rhee</span> (Kyung Hee University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">11:50-12:50</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">12:50-13:50</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
							</li> -->
							<li name="keynote_lecture_3_3">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Keynote Lecture 3</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Zachary Knight (University of California, San Francisco, USA)</p>
									<div class="info">
										<button></button>
										<span class="time">13:50-14:30</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">
										<p>Organizer: Hyung Jin Choi (Seoul National University, Republic of Korea)</p>
										<ul>
											<li>Professor Zachary Knight is a pioneer in the field of elucidating the neural mechanisms of appetite, homeostasis, and obesity, having published some of the finest research in Nature, Cell, and elsewhere over the past few years.</li>
											<li>His use of potent neuroscience tools is always accompanied by a profound understanding of concepts related to appetite. In this keynote lecture, he will present his most recent findings regarding the function of neural circuits in the brainstem in regulating eating behavior.</li>
										</ul>
										<p>References</p>
										<ul>
											<li>Nature. Dopamine subsystems that track internal states. 2022</li>
											<li>Cell. Genetic identification of vagal sensory neurons that control feeding. 2019</li>
										</ul>
									</div>
									<div>
										<p class="title">Brainstem Circuits that Control Ingestion</p>
										<p class="chairperson">
											<span class="bold">Zachary Knight</span> (University of California, San Francisco, USA)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">13:50-14:20</span>
										</div>
									</div>
									<div>
										<p class="title">Q&A</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">14:20-14:30</span>
										</div>
									</div>
								</div>
                            </li>
							<li name="keynote_lecture_4_3">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Keynote Lecture 4</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Jae-Heon Kang (Sungkyunkwan University, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">14:30-15:10</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">National Obesity Strategy in Korea: Past, Present and Future</p>
										<p class="chairperson">
											<span class="bold">Jae-Heon Kang</span> (Sungkyunkwan University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">14:30-15:00</span>
										</div>
									</div>
									<div>
										<p class="title">Q&A</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">15:00-15:10</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">15:10-15:20</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
							</li> -->
							<li name="symposium_19">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Symposium 19 : Diversity and Challenges of Pediatric Obesity</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Ja Hyang Cho (Kyung Hee University, Republic of Korea), <br/>Antje Korner (University of Leipzig, Germany), <br/>Jeewon Lee (Soonchunhayng University, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">15:20-16:50</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">Explore the Latest Data of Pediatric Obesity; Update of AAP Guidelines (2023)</p>
										<p class="chairperson">
											<span class="bold">Ja Hyang Cho</span> (Kyung Hee University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">15:20-15:45</span>
										</div>
									</div>
									<div>
										<p class="title">From Origin of Morbid Obesity to New-anti-obesity Therapies in Children</p>
										<p class="chairperson">
											<span class="bold">Antje Korner</span> (University of Leipzig, Germany)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">15:45-16:10</span>
										</div>
									</div>
									<div>
										<p class="title">Childhood Obesity and Mental Health</p>
										<p class="chairperson">
											<span class="bold">Jeewon Lee</span> (Soonchunhayng University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">16:10-16:35</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">16:35-16:50</span>
										</div>
									</div>
								</div>
                            </li>
							<!-- <li name="break">
								<div class="main">
									<p class="title">Break</p>
									<div class="info">
										<span class="time">16:50-17:00</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
							</li> -->
							<li name="plenary_lecture_4_3">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Plenary Lecture 4</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> John Wilding (University of Liverpool, UK)</p>
									<div class="info">
										<button></button>
										<span class="time">17:00-17:40</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">Current and Future in Obesity Management</p>
										<p class="chairperson">
											<span class="bold">John Wilding</span> (University of Liverpool, UK)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">17:00-17:30</span>
										</div>
									</div>
									<div>
										<p class="title">Q&A</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">17:30-17:40</span>
										</div>
									</div>
								</div>
                            </li>
							<li name="closing_ceremony_3">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Closing Ceremony</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">17:40-18:00</span>
										<span class="branch">Room 3</span>
									</div>
								</div>
								<!-- <div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p>
										<div class="info">
											<span class="time">00:00-00:00</span>
										</div>
									</div>
								</div> -->
                            </li>
                        </ul>
                    </div>
					<!-----------------
						Day 3 > Room 4
					------------------->
					<div class="tab_cont">
                        <ul class="program_detail_ul">
							<li name="symposium_16">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Symposium 16 : International Collaboration</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Alice PS Kong (The Chinese University of Hong Kong, Hong Kong), <br/>Koutaro Yokote (Chiba University, Japan)</p>
									<div class="info">
										<button></button>
										<span class="time">09:20-10:50</span>
										<span class="branch">Room 4</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">Impact of Sleep Disturbance on Obesity and Energy Homeostasis</p>
										<p class="chairperson">
											<span class="bold">Alice PS Kong</span> (The Chinese University of Hong Kong, Hong Kong)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">09:20-09:45</span>
										</div>
									</div>
									<div>
										<p class="title">Guidelines for the Management of Obesity as a Disease: Japanese Update</p>
										<p class="chairperson">
											<span class="bold">Koutaro Yokote</span> (Chiba University, Japan)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">09:45-10:10</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">10:10-10:35</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">10:35-10:50</span>
										</div>
									</div>
								</div>
                            </li>
							<li name="oral_presentation_3">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Oral Presentatoin 3</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">12:50-13:50</span>
										<span class="branch">Room 4</span>
									</div>
								</div>
								<!-- <div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p>
										<div class="info">
											<span class="time">00:00-00:00</span>
										</div>
									</div>
								</div> -->
                            </li>
							<li name="symposium_20">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Symposium 20 : Basic Exercise with Obesity</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Seok Ryu (Kyunghee University, Republic of Korea), <br/>Ji Suk Chae (JS Sports Medicine Center, Republic of Korea), <br/>Hae Sung Lee (Wonkwang University, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">15:20-16:50</span>
										<span class="branch">Room 4</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">Seok Ryu</span> (Kyunghee University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">15:20-15:45</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">Ji Suk Chae</span> (JS Sports Medicine Center, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">15:45-16:10</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">Hae Sung Lee</span> (Wonkwang University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">16:10-16:35</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">16:35-16:50</span>
										</div>
									</div>
								</div>
                            </li>
                        </ul>
                    </div>
					<!-----------------
						Day 3 > Room 5
					------------------->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
							<li name="sponsored_session_3">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Sponsored Session 3 : Is Semaglutide Changing the Paradigm Of Obesity Management?</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">09:20-10:50</span>
										<span class="branch">Room 5</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">09:20-09:50</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">09:50-10:20</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">10:20-10:50</span>
										</div>
									</div>
								</div>
                            </li>
							<li name="oral_presentation_4">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Oral Presentatoin 4</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">12:50-13:50</span>
										<span class="branch">Room 5</span>
									</div>
								</div>
								<!-- <div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p>
										<div class="info">
											<span class="time">00:00-00:00</span>
										</div>
									</div>
								</div> -->
                            </li>
							<li name="jomes_session">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Best Article in JOMES</p>
									<p class="chairperson"><span class="bold">Chairpersons:</span> Ye Seul Yang (Seoul National University, Republic of Korea), <br/>Jieun Lee (Inje University, Republic of Korea), <br/>Kyoung Hwa Ha (Ajou University, Republic of Korea), <br/>Kyoung-Kon Kim (Gachon University, Republic of Korea)</p>
									<div class="info">
										<button></button>
										<span class="time">15:20-16:30</span>
										<span class="branch">Room 5</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">Obesity Fact Sheet in Korea, 2021: Trends in Obesity Prevalence and Obesity-Related Comorbidity Incidence Stratified by Age from 2009 to 2019</p>
										<p class="chairperson">
											<span class="bold">Ye Seul Yang</span> (Seoul National University, Republic of Korea)
											<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">15:20-15:35</span>
										</div>
									</div>
									<div>
										<p class="title">Reference Values for Waist Circumference and Waist–Height Ratio in Korean Children and Adolescents</p>
										<p class="chairperson">
											<span class="bold">Jieun Lee</span>  (Inje University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">15:35-15:50</span>
										</div>
									</div>
									<div>
										<p class="title">Maintaining Physical Activity Is Associated with Reduced Major Adverse Cardiovascular Events in People Newly Diagnosed with Diabetes</p>
										<p class="chairperson">
											<span class="bold">Kyoung Hwa Ha</span> (Ajou University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">15:50-16:05</span>
										</div>
									</div>
									<div>
										<p class="title">Updated Meta-Analysis of Studies from 2011 to 2021 Comparing the Effectiveness of Intermittent Energy Restriction and Continuous Energy Restriction</p>
										<p class="chairperson">
											<span class="bold">Kyoung-Kon Kim</span> (Gachon University, Republic of Korea)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">16:05-16:20</span>
										</div>
									</div>
									<div>
										<p class="title">Award Ceremony</p>
										<p class="chairperson">
											<span class="bold">Gildong Hong</span>(Seoul National University)<a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">16:20-16:30</span>
										</div>
									</div>
								</div>
                            </li>
                        </ul>
                    </div>
					<!-----------------
						Day 3 > Room 6
					------------------->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
							<li name="joint_symposium_TOS">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Joint Symposium TOS</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">09:20-10:50</span>
										<span class="branch">Room 6</span>
									</div>
								</div>
								<div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">09:20-09:45</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">09:45-10:10</span>
										</div>
									</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson">
											<span class="bold">TBD<!-- Gildong Hong --></span> <!-- (Seoul National University) --><a href="/main/app_invited_speakers_detail.php" class="invited_tag">Speakers info</a>
										</p>
										<div class="info">
											<span class="time">10:10-10:35</span>
										</div>
									</div>
									<div>
										<p class="title">Panel Discussion</p>
										<!-- <p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p> -->
										<div class="info">
											<span class="time">10:35-10:50</span>
										</div>
									</div>
								</div>
                            </li>
                        </ul>
                    </div>
					<!-----------------
						Day 3 > Room 7
					------------------->
                    <div class="tab_cont">
                        <ul class="program_detail_ul">
							<li name="guided_poster_presentation_2">
								<div class="main">
									<a href="/main/app_abstract.php" class="right_tag">Abstract</a>
									<p class="title">Guided Poster Presentation 2</p>
									<!-- <p class="chairperson"><span class="bold">Chairpersons:</span> Gildong Hong (Seoul National University), <br/>Gildong Hong (Seoul National University)</p> -->
									<div class="info">
										<button></button>
										<span class="time">12:50-13:50</span>
										<span class="branch">Room 7</span>
									</div>
								</div>
								<!-- <div class="detail">
									<div class="detail_text">will be updated.</div>
									<div>
										<p class="title">TBD</p>
										<p class="chairperson"><span class="bold">Gildong Hong</span> (Seoul National University)</p>
										<div class="info">
											<span class="time">00:00-00:00</span>
										</div>
									</div>
								</div> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="popup bottom program_alarm_pop">
	<div class="pop_bg"></div>	
	<div class="pop_contents">
		<ul class="list_style_none">
			<li>Do you want to set an alarm 10 minutes before the start?</li>
			<li>Yes</li>
			<li>No</li>
		</ul>
		<!-- 팝업창 문구 -->
		<span class="tags">Add alarm complete</span>
		<!-- <span class="tags">Complete</span> -->
		<!-- <span class="tags">Remove alarm complete</span> -->
		<!-- <span class="tags">Cancle</span> -->
	</div>
</div>

<script>
    $(document).ready(function() {
        $(".program_detail_btn").click(function(event) {
            event.preventDefault();
            event.stopPropagation();
            $(this).parents("tr").next("tr").find(".program_detail_td").toggleClass("on");
        });

		$(".popup.bottom .pop_contents li").click(function(){
			$(this).parents(".popup").hide();
		});

		$(".sort_select").change(function(){
			var i = $(this).val();
			if (i === "all"){
				$(this).parents(".tab_cont").find(".tab_cont").addClass("on");
			} else {
				i = (i - 1);
				$(this).parents(".tab_cont").find(".tab_cont").removeClass("on");
				$(this).parents(".tab_cont").find(".tab_cont").eq(i).addClass("on");
				console.log(i)
			}
		});
    });
</script>

<?php include_once('./include/app_footer.php'); ?>
