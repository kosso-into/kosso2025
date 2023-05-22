<?php
include_once('./include/head.php');
include_once('./include/header.php');

//$language
$sql_info = "SELECT
					overview_welcome_msg_" . $language . " AS welcome_msg,
					CONCAT(fi_sign.path, '/', fi_sign.save_name) AS fi_sign_url
				FROM info_general as ig
				left join `file` as fi_sign
					on fi_sign.idx = ig.overview_welcome_sign_" . $language . "_img";
$info = sql_fetch($sql_info);
?>

<section class="container welcome">
	<div>
        <h1 class="page_title">Welcome Message</h1>
        <div class="inner">
			<img class="coming" src="./img/coming.png">
        </div>
    </div>
	<!--
    <div>
		<h1 class="page_title">Welcome Message</h1>
        <div class="inner">
            <div>
				<h3 class="title">Dear Colleagues,</h3>
				<p class="welcome_txt">
					We would like to express our respect and gratitude to many people who are doing their best in academic research to prevent and treat obesity, in spite of the difficult conditions of the COVID-19 Pandemic. The World Health Organization(WHO) has defined obesity as a new infectious disease of the 21st century.  We must continue to challenge the fight against obesity, which is a further threat to human health.
					<br>
					<br>
					KSSO (Korean Society for the Study of Obesity) is preparing 2022 ICOMES (International Conference for Obesity and Metabolic Syndrome), which has grown to an international scale for the recent insights and academic advancement of obesity-related research, at the Conrad Hotel in Yeouido, Seoul, for three days from September 1st.  This time, we are confident that it will be more active and advanced academic venue to invite world class scholars including Dr. Mark Andermann and Dr. Frank Sacks of Harvard Medical School in the United States, Dr. Melanie J. Davies of the University of Leicester in the UK, and Dr. Ele Ferrannini of the CNR Institute of Clinical Physiology in Italy, to explore a new approach of obesity treatment, especially under the grand theme of 'The Next Normal - The Future of Obesity Care'. <br>
					<br>
					Obesity is the earliest trigger of most diseases, as well as the most threatening presence of human health that is never easily defined with a variety of prisms.  Academic efforts through constant challenges and active debate are required to come up with effective countermeasures against obesity.  This conference will be a valuable opportunity to achieve an academic concept on obesity through your presentations and discussions with all the guest speakers who will share valuable up-to-date information, as well as research results from the oral and poster presentation sessions.  
					<br>
					<br>
					Obesity researchers from all over the world and members of KSSO!
					Please join us at the 2022 ICOMES academic conference to present your valuable research results.  We respectfully ask you to join us in this valuable opportunity to further advance obesity-related academic research through heated discussions and information exchanges.
					We look forward to seeing you at the 2022 ICOMES and wish you all the best.
					<br>
					<br>
					Best regards,
				</p>
			</div>
            <div class="head_profile">
				<div class="headman">
					<div class="headman_l"><img src="./img/headman_img1.png" alt=""></div>
					<div class="headman_r">
						<h5>Name</h5>
						<h1>Sung Soo Kim</h1>
						<h5>Chairman</h5>
						<p>Korea Society for <br/>Study of Obesity</p>
						<div class="headman_sign"><img src="./img/headman_sign1.png" alt=""></div>
					</div>
				</div>
				<div class="headman">
					<div class="headman_l"><img src="./img/headman_img2.png" alt=""></div>
					<div class="headman_r">
						<h5>Name</h5>
						<h1>Cheol-Young Park</h1>
						<h5>President</h5>
						<p>Korea Society for <br/>Study of Obesity</p>
						<div class="headman_sign"><img src="./img/headman_sign2.png" alt=""></div>
					</div>
				</div>
			</div>
        </div>
    </div>
	-->
</section>

<?php include_once('./include/footer.php'); ?>