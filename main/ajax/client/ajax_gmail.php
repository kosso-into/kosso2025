<?php include_once("../../common/common.php"); ?>
<?php include_once("../../common/locale.php"); ?>

<?php
//include_once('../../common/common.php');

include_once('../../plugin/google-api-php-client-main/vendor/autoload.php');


$language = isset($_SESSION["language"]) ? $_SESSION["language"] : "en";
$locale = locale($language);

//define('DOMAIN', "http://54.180.8s6.106/main");
if (php_sapi_name() != 'cli') {
	//throw new Exception('This application must be run on the command line.');
}

$input_post = json_decode(file_get_contents("php://input"), true);
$_POST = empty($_POST) ? $input_post : $_POST;


/**
 * Returns an authorized API client.
 * @return Google_Client the authorized client object
 */
function getClient()
{
	$client = new Google_Client();
	$client->setApplicationName('Gmail API PHP Quickstart');
	//$client->setScopes(Google_Service_Gmail::GMAIL_READONLY);
	$client->setAuthConfig('../../plugin/google-api-php-client-main/credentials.json');
	$client->setIncludeGrantedScopes(true);
	$client->setAccessType('offline');
	$client->setPrompt('select_account consent');
	//$client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/oauth2callback.php');

	//$redirect_uri = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];

	$redirect_uri = 'https://kosso.org/main/ajax/client/ajax_gmail.php';
	$client->setRedirectUri($redirect_uri);

	//$client->Authorization("Bearer ya29.a0ARrdaM9mYnPVm2C5-i9h0Av545RZ-52p3qi5fTvhrf4Jyo01DFwZQDCm21sDfNbD6rsq6rYG5V3Us2Pi0yZFcFgVWwnISInUUlbk8b_S0sx81ysEJb0mc3axZWlMAxpCpd4oQgHgNSS0_ho4apRgpNUA9Eae");
	//$client->addScope('https://www.googleapis.com/auth/gmail.labels');

	$client->addScope('https://www.googleapis.com/auth/gmail.readonly');
	//$client->addScope('https://www.googleapis.com/auth/analytics.readonly');
	//$client->addScope('https://www.googleapis.com/auth/gmail.send');
	//$client->addScope('https://www.googleapis.com/auth/gmail.compose');
	//$client->addScope('https://www.googleapis.com/auth/gmail.insert');
	$client->addScope('https://www.googleapis.com/auth/gmail.modify');
	//$client->addScope('https://www.googleapis.com/auth/gmail.metadata');
	//$client->addScope('https://www.googleapis.com/auth/gmail.settings.basic');
	//$client->addScope('https://www.googleapis.com/auth/gmail.settings.sharing');
	$client->addScope('https://mail.google.com/');


	// Load previously authorized token from a file, if it exists.
	// The file token.json stores the user's access and refresh tokens, and is
	// created automatically when the authorization flow completes for the first
	// time.
	$tokenPath = 'token_dev.json';

	// online server
	if ($_SERVER['HTTP_HOST'] === "www.kosso.org" || $_SERVER['HTTP_HOST'] === "kosso.org") {
		$tokenPath = 'token.json';
	}

	if (file_exists($tokenPath)) {
		$accessToken = json_decode(file_get_contents($tokenPath), true);
		$client->setAccessToken($accessToken);
	}

	// If there is no previous token or it's expired.
	if ($client->isAccessTokenExpired()) {
		// Refresh the token if possible, else fetch a new one.
		if ($client->getRefreshToken()) {
			$client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
		} else {
			// Request authorization from the user.
			$authUrl = $client->createAuthUrl();
			printf("Open the following link in your browser:\n%s\n", $authUrl);
			print 'Enter verification code: ';
			$authCode = trim(fgets(STDIN));

			// Exchange authorization code for an access token.
			$accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
			$client->setAccessToken($accessToken);

			// Check to see if there was an error.
			if (array_key_exists('error', $accessToken)) {
				throw new Exception(join(', ', $accessToken));
			}
		}
		// Save the token to a file.
		if (!file_exists(dirname($tokenPath))) {
			mkdir(dirname($tokenPath), 0700, true);
		}
		//file_put_contents($tokenPath, json_encode($client->getAccessToken()));
	}
	return $client;
}





// Get the API client and construct the service object.
$client = getClient();

$service = new Google_Service_Gmail($client);

// Print the labels in the user's account.
$user = 'secretariat@kosso.org';


function createMessage($language, $mail_type, $fname, $to, $subject, $time, $tmp_password, $callback_url, $type = 0, $file = "", $cc = "", $bcc = "", $id = "", $date = "", $category = "", $title = "", array $data = [], $registration_no = "")
{
	$message = new Google_Service_Gmail_Message();

	if ($_SERVER["HTTP_HOST"] == "43.200.170.254") {
		$background_img_url = "https://icomes-hub.store";
	} else {
		$background_img_url = "https://kosso.org";
	}

	$rawMessageString = "From: KSSO2024<secretariat@kosso.org>\r\n";
	$rawMessageString .= "To: <{$to}>\r\n";
	$rawMessageString .= 'Subject: =?utf-8?B?' . base64_encode($subject) . "?=\r\n";
	$rawMessageString .= "MIME-Version: 1.0\r\n";
	$rawMessageString .= "Content-Type: text/html; charset=utf-8\r\n";
	//$rawMessageString .= "Content-Type: text/html; charset=iso-8859-1\r\n";
	//$rawMessageString .= 'Content-Transfer-Encoding: quoted-printable' . "\r\n\r\n";
	$rawMessageString .= 'Content-Transfer-Encoding: base64' . "\r\n\r\n";

	if ($language == "ko") {
		if ($mail_type == "find_password") {
			$rawMessageString .= "
			<div style='width:670px;background-color:#fff;border:1px solid #ADF002;'>
        <img src='https://www.kosso.org/main/img/mail/mail_header.png' style='width:100%;margin-bottom:60px;'alt='mail_header'>
        <div style='margin-left:60px;margin-bottom:40px;'>
            <p style='text-align:left;font-size:15px;color:#170F00;line-height:1.8;'>{$fname} 회원님은<br/>{$time} 에 임시 비밀번호 요청을 하셨습니다.</p>
            <p style='text-align:left;font-size:12px;color:#AAAAAA;margin-top:22px;'>(만약 임시 비밀번호를 요청하신 적이 없다면 해당 메일을 삭제해 주십시오.)</p>
            <p style='text-align:left;font-size:12px;color:#170F00;margin-top:42px;line-height:1.8;'>저희 사이트는 관리자라도 회원님의 비밀번호를 알 수 없기 때문에,<br/>
            비밀번호를 알려드리는 대신 새로운 비밀번호를 생성하여 안내 해드리고 있습니다.<br/>아래에서 변경될 비밀번호를 확인하신 후,</p>
            <p style='font-size:13px;color:#FF0000;margin-top:17px;'>임시 비밀번호로 변경 버튼을 클릭하십시오.</p>
            <p style='text-align:left;font-size:12px;color:#170F00;margin-top:42px;line-height:1.8;'>비밀번호가 변경되었다는 인증 메시지가 출력되면,<br/>
            홈페이지에서 회원아이디와 변경된 비밀번호를 입력하시고 로그인 하십시오.</p>
            <p style='text-align:left;font-size:12px;color:#AAAAAA;margin-top:17px;'>로그인 후에는 정보수정 메뉴에서 새로운 비밀번호로 변경해 주십시오.</p>
            <p style='text-align:left;font-size:13px;color:#170F00;margin-top:32px;'>회원아이디<span style='text-align:left;font-size:14px;color:#170F00;margin-left:5px;'>{$id}</span></p>
            <p style='text-align:left;font-size:13px;color:#170F00;margin-top:11px;'>변경될 비밀번호<span style='text-align:left;font-size:14px;color:#170F00;margin-left:5px;'>{$tmp_password}</span></p>
            <p style='text-align:left;font-size:14px;color:#170F00;margin-top:51px;'>ICOMES 드림</p>
        </div>
        <div style='text-align: center;'>
						<table align='center' cellspacing='0' cellpadding='0' width='100%'>
							<tr>
								<td align='center'>
									<table border='0' class='mobile-button' cellspacing='0' cellpadding='0'>
										<tr>
											<td align='center' bgcolor='#ffcc33' style='background-color: #ffcc33; margin: auto; max-width: 600px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; padding: 4px 16px;box-shadow: 0px 5px 0px 0px #e0ba0d;' width='100%'><!--[if mso]>&nbsp;<![endif]-->
												<a href='{$callback_url}' target='_blank' style='font-size: 24px; font-family: Helvetica, Arial, sans-serif; color: #003466; font-weight:600; text-align:center; background-color: #ffcc33; text-decoration: none; border: none; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; display: inline-block;'>
													<span style='font-size: 24px; font-family: Helvetica, Arial, sans-serif; color: #003466; font-weight:600; text-align:center;'>임시 비밀번호 변경</span>
												</a><!--[if mso]>&nbsp;<![endif]-->
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</div>
        <img src='https://www.kosso.org/main/img/mail/mail_footer.png' style='width:100%;margin-top:60px;' alt='mail_footer'>
    </div>
							
							";
		}
	} else {
		if ($mail_type == "sign_up") {
			/* 23.05.12 HUBDNC_NYM 템플릿 변경으로 인해 해당 부분 주석*/
			/*
            $template = new Template($_SERVER["DOCUMENT_ROOT"]."/main/common/lib/confirm.php");
            $template->set('callback_url', $callback_url);
            $content = $template->render();         
			*/
			$data = isset($_POST["data"]) ? $_POST["data"] : "";
			/*
			$mail_query = "SELECT 
								email, last_name, first_name, first_name_kor, last_name_kor, affiliation, affiliation_kor, phone
							FROM member
							WHERE idx = {$user_idx};";
			$user_data = sql_fetch($mail_query);
			*/
			$email = $data["email"];
			$last_name = $data["last_name"];
			$first_name = $data["first_name"];
			$first_name_kor = $data["first_name_kor"];
			$last_name_kor = $data["last_name_kor"];
			$affiliation = $data["affiliation"];
			$affiliation_kor = $data["affiliation_kor"];
			$phone = $data["phone"];
			$telephone =substr($data['phone'], 0, 3). '-' .  substr($data['phone'], 3, 4). '-' .substr($data['phone'], 7);
			$title = $data["title"] ?? NULL;

			// 23.05.15 HUBDNC_NYM TITLE 변경 건으로 수정
			if (!empty($title)) {
				switch ($title) {
					case "0":
						$title_input = "Professor";
						break;
					case "1":
						$title_input = "Dr.";
						break;
					case "2":
						$title_input = "Mr.";
						break;
					case "3":
						$title_input = "Ms.";
						break;
					case "4":
						$title_input = $data["title_input"];
						break;
				}
			}
			$nation_no = $data["nation_no"];

			if ($nation_no == 25) {
				$name_kor_cont = "<tr>
									<th style='width:150px; text-align:left; font-size:14px; padding:10px; border-bottom:1px solid #000;'>성명</th>
									<td colspan='2' style='font-size:14px; padding:10px; border-left:1px solid #000; border-bottom:1px solid #000;'>{$last_name_kor}{$first_name_kor}</td>
								</tr>";
				$affiliation_kor_cont = "<tr>
											<th style='width:150px; text-align:left; font-size:14px; padding:10px; border-bottom:1px solid #000;'>소속</th>
											<td colspan='2' style='font-size:14px; padding:10px; border-left:1px solid #000; border-bottom:1px solid #000;'>{$affiliation_kor}</td>
										</tr>";
			} else {
				$name_kor_cont = "";
				$affiliation_kor_cont = "";
			}

			//<img src='".$background_img_url."/img/mail_header_2023.png' style='width:calc(100% + 80px);margin-left:-40px;'>
			// 23.05.15 HUBDNC_LJH 이메일 템플릿 변경 
			$rawMessageString .= "
			<table width='750' style='border:1px solid #000; padding: 0;'>
			<tbody>
				<tr>
					<td colspan='3'>
						<img src='https://www.kosso.org/main/img/mail/signup_header.jpg' width='750' style='width:750px;' alt='mail_header'>
					</td>
				</tr>
				<tr>
					<td width='74' style='width:74px;'></td>
					<td>
						<div>
							<table width='586' style='width:586px; border-collapse:collapse; border-top:2px solid #000; width:100%; margin:17px 0;'>
								<tbody>
									<tr>
										<th style='width:150px; text-align:left; font-size:14px; padding:10px; border-bottom:1px solid #000;'>ID (Email Address)</th>
										<td colspan='2' style='font-size:14px; padding:10px; border-left:1px solid #000; border-bottom:1px solid #000;'><a class='link font_inherit'>{$email}</a></td>
									</tr>
									{$name_kor_cont}
									{$affiliation_kor_cont}
									<tr>
										<th style='width:150px; text-align:left; font-size:14px; padding:10px; border-bottom:1px solid #000;'>휴대폰 번호</th>
										<td colspan='2' style='font-size:14px; padding:10px; border-left:1px solid #000; border-bottom:1px solid #000;'>{$telephone}</td>
									</tr>
								</tbody>	
							</table>
							<p>사전등록을 원하실 경우에는 <br/>아래의 사전등록 바로가기 버튼을 클릭 하시어 등록 부탁드립니다.<br/>(등록 정보 수정을 원하실 경우,<br/>홈페이지 – 마이페이지에서 수정 하실 수 있습니다.) </p>
						</div>
					</td>
					<td width='74' style='width:74px;'></td>
				</tr>
				<tr>
					<td width='74' style='width:74px;'></td>
					<td>
					<div style='text-align: center;padding-top:50px;'>
						<table align='center' cellspacing='0' cellpadding='0' width='100%'>
							<tr>
								<td align='center'>
									<table border='0' class='mobile-button' cellspacing='0' cellpadding='0'>
										<tr>
											<td align='center' bgcolor='#ffcc33' style='background-color: #ffcc33; margin: auto; max-width: 600px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; padding: 4px 16px;box-shadow: 0px 5px 0px 0px #e0ba0d;' width='100%'><!--[if mso]>&nbsp;<![endif]-->
												<a href='https://kosso.org/main/registration.php' target='_blank' style='font-size: 24px; font-family: Helvetica, Arial, sans-serif; color: #003466; font-weight:600; text-align:center; background-color: #ffcc33; text-decoration: none; border: none; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; display: inline-block;'>
													<span style='font-size: 24px; font-family: Helvetica, Arial, sans-serif; color: #003466; font-weight:600; text-align:center;'>사전등록 바로가기</span>
												</a><!--[if mso]>&nbsp;<![endif]-->
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						</div>
					</td>
					<td  width='74' style='width:74px;'></td>
				</tr>
				<tr>
					<td  width='74' style='width:74px;'></td>
					<td style='padding-top:50px;'>
						<p>
							본 메일은 발신전용으로 회신이 불가합니다.<br>
							관련 문의사항에 대해서는 사무국( <a href='mailto:ksso@into-on.com'>ksso@into-on.com</a>)으로 연락 주시기 바랍니다. 
						</p>
						</td>
						<td  width='74' style='width:74px;'></td>
				</tr>
				<tr>
					<td colspan='3' style='padding-top:50px;'>
						<img src='https://www.kosso.org/main/img/mail/mail_footer.png' width='750' style='width:750px;' alt='mail_footer'>
					</td>
				</tr>
			</tbody>
		</table>
	
			";
			//$rawMessageString.= "
			//			<div style='width:670px;background-color:#F8F8F8;border:1px solid #f2f2f2; padding: 0 40px;'>
			//				<img src='{$background_img_url}/main/img/mail_header_2023.png' style='width:calc(100% + 80px);margin-left:-40px;'>
			//				<div style='width:calc(100%);margin-left:-40px;margin-bottom:60px;background-color:#00666B;text-align:center;font-size: 21px; color: #FFF;padding: 10px 0;border-top:2px solid #707070;'>[ICOEMS 2023] Welcome to ICOMES 2023!</div>	
			//				<div>
			//					<div style='margin-bottom:10px; background-color:#F8F8F8; padding:17px 34px; box-sizing:border-box;'>
			//						<div>
			//							<p style='font-size:15px; font-weight:bold; color:#000; margin:0;'>Dear {$title_input} {$first_name} {$last_name},</p>
			//							<p style='font-size:14px;color:#170F00;margin-top:14px;'>Thank you for signing up for the ICOMES 2023.<br>Your profile has been successfully created.<br>Please review the information that you have entered as below.<br>If necessary, you can access ‘ICOMES 2023 website - MY PAGE’ to review,<br>modify or update your personal information.</p>
			//							<table style='border-collapse:collapse; border-top:2px solid #000; width:100%; margin:17px 0;'>
			//								<tbody>
			//									<tr style='border-bottom:1px solid #000;'>
			//										<th style='width:150px; text-align:left; font-size:14px; padding:10px; background-color:#f1f1f1; '>ID (Email Address)</th>
			//										<td style='font-size:14px; padding:10px;'><a href='javascript:;' class='link'>{$email}</a></td>
			//									</tr>
			//									<tr style='border-bottom:1px solid #000;'>
			//										<th style='width:150px; text-align:left; font-size:14px; padding:10px; background-color:#f1f1f1;'>Name</th>
			//										<td style='font-size:14px; padding:10px; width:165px;'>{$first_name}</td>
			//										<td style='font-size:14px; padding:10px; border-left:1px solid #000'>{$last_name}</td>
			//									</tr>
			//									{$name_kor_cont}
			//									<tr style='border-bottom:1px solid #000;'>
			//										<th style='width:150px; text-align:left; font-size:14px; padding:10px; background-color:#f1f1f1; '>Affiliation</th>
			//										<td style='font-size:14px; padding:10px;'>{$affiliation}</td>
			//									</tr>
			//									{$affiliation_kor_cont}
			//									<tr style='border-bottom:1px solid #000;'>
			//										<th style='width:150px; text-align:left; font-size:14px; padding:10px; background-color:#f1f1f1; '>phone number</th>
			//										<td style='font-size:14px; padding:10px;'>{$phone}</td>
			//									</tr>
			//								</tbody>	
			//							</table>
			//							<p>We express our gratitude to you for your interest in ICOMES 2023.</p>
			//						</div>
			//					</div>
			//					<!-- 23.04.25 수정된 버튼 마크업 -->
			//					<p style='margin: 0 0 5px 34px'>Warmest regards,</p>
			//					<p style='margin: 0 0 34px 34px'>Secretariat of ICOMES 2023</p>
			//					<div style='text-align: center;'>
			//						<a href='{$background_img_url}/main/index.php' type='button' style='display:inline-block; padding:5px 20px 10px 20px; border-radius: 25px;border: 2px solid #174A77;outline: 2px solid #DFDFDF;background: linear-gradient(to top, #293380, #8CC5D1);font-size: 18px;font-weight: 500;color: #FFFFFF;cursor: pointer; text-decoration: none;'>Go to ICOMES 2023 Website</a>
			//					</div>
			//				</div>
			//				<img src='{$background_img_url}/main/img/icomes_mail_bottom.png' style='width:calc(100% + 80px); margin-top:60px; margin-left:-40px;'>
			//			</div>
			//";

			//<div style='width:670px;background-color:#F8F8F8;border:1px solid #f2f2f2; padding: 0 40px;'>
			//							<img src='".$background_img_url."/img/mail_header_2023.png' style='width:calc(100% + 80px);margin-left:-40px;'>
			//							<div style='width:calc(100% + 80px);margin-left:-40px;margin-bottom:60px;background-color:#00666B;text-align:center;font-size: 21px; color: #FFF;padding: 10px 0;border-top:2px solid #707070;'>[ICOEMS 2023] Welcome to ICOMES 2023!</div>	
			//							<div>
			//								<div style='margin-bottom:10px; background-color:#F8F8F8; padding:17px 34px; box-sizing:border-box;'>
			//									<div>
			//										<p style='font-size:15px; font-weight:bold; color:#000; margin:0;'>Dear {$title} {$first_name} {$last_name},</p>
			//										<p style='font-size:14px;color:#170F00;margin-top:14px;'>Thank you for signing up for the ICOMES 2023.<br>Your profile has been successfully created.<br>Please review the information that you have entered as below.<br>If necessary, you can access ‘ICOMES 2023 website - MY PAGE’ to review,<br>modify or update your personal information.</p>
			//										<table style='border-collapse:collapse; border-top:2px solid #000; width:100%; margin:17px 0;'>
			//											<tbody>
			//												<tr style='border-bottom:1px solid #000;'>
			//													<th style='width:150px; text-align:left; font-size:14px; padding:10px; background-color:#f1f1f1; '>ID (Email Address)</th>
			//													<td style='font-size:14px; padding:10px;'><a href='javascript:;' class='link'>{$email}</a></td>
			//												</tr>
			//												<tr style='border-bottom:1px solid #000;'>
			//													<th style='width:150px; text-align:left; font-size:14px; padding:10px; background-color:#f1f1f1;'>Name</th>
			//													<td style='font-size:14px; padding:10px; width:165px;'>{$first_name}</td>
			//													<td style='font-size:14px; padding:10px; border-left:1px solid #000'>{$last_name}</td>
			//												</tr>
			//												{$name_kor_cont}
			//			
			//												<tr style='border-bottom:1px solid #000;'>
			//													<th style='width:150px; text-align:left; font-size:14px; padding:10px; background-color:#f1f1f1;'>성명</th>
			//													<td style='font-size:14px; padding:10px; width:165px;'>{$first_name_kor}</td>
			//													<td style='font-size:14px; padding:10px; border-left:1px solid #000'>{$last_name_kor}</td>
			//												</tr>
			//												<tr style='border-bottom:1px solid #000;'>
			//													<th style='width:150px; text-align:left; font-size:14px; padding:10px; background-color:#f1f1f1; '>Affiliation</th>
			//													<td style='font-size:14px; padding:10px;'>{$affiliation}</td>
			//												</tr>
			//												<tr style='border-bottom:1px solid #000;'>
			//													<th style='width:150px; text-align:left; font-size:14px; padding:10px; background-color:#f1f1f1; '>소속</th>
			//													<td style='font-size:14px; padding:10px;'>{$affiliation_kor}</td>
			//												</tr>
			//												<tr style='border-bottom:1px solid #000;'>
			//													<th style='width:150px; text-align:left; font-size:14px; padding:10px; background-color:#f1f1f1; '>phone number</th>
			//													<td style='font-size:14px; padding:10px;'>{$phone}</td>
			//												</tr>
			//											</tbody>	
			//										</table>
			//										<p>We express our gratitude to you for your interest in ICOMES 2023.</p>
			//									</div>
			//								</div>
			//								<!-- 23.04.25 수정된 버튼 마크업 -->
			//								<p style='margin: 0 0 5px 34px'>Warmest regards,</p>
			//								<p style='margin: 0 0 34px 34px'>Secretariat of ICOMES 2023</p>
			//								<div style='text-align: center;'>
			//									<a href='http://43.200.170.254/main/index.php' type='button' style='display:inline-block; padding:5px 20px 10px 20px; border-radius: 25px;border: 2px solid #174A77;outline: 2px solid #DFDFDF;background: linear-gradient(to top, #293380, #8CC5D1);font-size: 18px;font-weight: 500;color: #FFFFFF;cursor: pointer; text-decoration: none;'>Go to ICOMES 2023 Website</a>
			//								</div>
			//							</div>
			//							<img src='".$background_img_url."/img/mail_footer_2023.png' style='width:calc(100% + 80px); margin-top:60px; margin-left:-40px;'>
			//						</div>
		}

		if ($mail_type == "find_password") {
			$rawMessageString .= "
			<table width='750' style='border:1px solid #000; padding: 0;'>
			<tbody>
				<tr>
					<td colspan='3'>
						<img src='https://www.kosso.org/main/img/mail/password_header.jpg' width='750' style='width:100%; max-width:100%;' alt='mail_header'>
					</td>
				</tr>
				<tr>
					<td colspan='3'>
						<div style='font-weight:bold; text-align:center;font-size: 21px; color: #00666B;padding: 20px 0;'></div>
					</td>
				</tr>
				<tr>
					<td width='74' style='width:74px;'></td>
					<td>
						<div>
							<div style='margin-bottom:20px'>
								<p style='font-size:15px; font-weight:bold; color:#000; margin:0;'>성명 : {$fname}<br><span style='font-size:14px;color:#170F00;font-weight:normal;'>임시 비밀번호 요청 시간 : {$time}</span></p>
							</div>
							<p style='font-size:15px; font-weight:bold; color:#000; margin:0;'></p>
							<p style='font-size:14px;color:#170F00;margin-top:14px;'>아래의 ID 및 임시 비밀번호를 사용하여 제 59차 대한비만학회 춘계학술대회 홈페이지에 로그인하고 '마이 페이지'에서 개인 정보를 수정하실 수 있습니다.</p>
							<table width='586' style='width:586px; border-collapse:collapse; border-top:2px solid #000; width:100%; margin:17px 0;'>
								<tbody>
									<tr>
										<th style='width:150px; text-align:left; font-size:14px; padding:10px; border-bottom:1px solid #000;'>ID(Email Address)</th>
										<td style='font-size:14px; padding:10px; border-left:1px solid #000; border-bottom:1px solid #000;'><a  class='link font_inherit'>{$to}</a></td>
									</tr>
									<tr>
										<th style='width:150px; text-align:left; font-size:14px; padding:10px; border-bottom:1px solid #000;'>임시 비밀번호</th>
										<td style='font-size:14px; padding:10px; border-left:1px solid #000; border-bottom:1px solid #000;'>{$tmp_password}</td>
									</tr>
								</tbody>	
							</table>
							<p style='color:#f00;font-weight: 700;'>'임시 비밀번호로 변경' 버튼을 클릭하여 변경된 로그인 정보를 확인하세요.</p>
						</div>
					</td>
					<td width='74' style='width:74px;'></td>
				</tr>
				<tr>
					<td width='74' style='width:74px;'></td>
					<td>
						<div style='text-align: center;padding-top:50px;'>
						<table align='center' cellspacing='0' cellpadding='0' width='100%'>
							<tr>
								<td align='center'>
									<table border='0' class='mobile-button' cellspacing='0' cellpadding='0'>
										<tr>
											<td align='center' bgcolor='#ffcc33' style='background-color: #ffcc33; margin: auto; max-width: 600px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; padding: 4px 16px;box-shadow: 0px 5px 0px 0px #e0ba0d;' width='100%'><!--[if mso]>&nbsp;<![endif]-->
												<a href='{$callback_url}' target='_blank' style='font-size: 24px; font-family: Helvetica, Arial, sans-serif; color: #003466; font-weight:600; text-align:center; background-color: #ffcc33; text-decoration: none; border: none; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; display: inline-block;'>
													<span style='font-size: 24px; font-family: Helvetica, Arial, sans-serif; color: #003466; font-weight:600; text-align:center;'>임시 비밀번호 변경</span>
												</a><!--[if mso]>&nbsp;<![endif]-->
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</div>
					</td>
					<td width='74' style='width:74px;'></td>
				</tr>
				<tr>
					<td  width='74' style='width:74px;'></td>
					<td style='padding-top:50px;'>
						<p>
							본 메일은 발신전용으로 회신이 불가합니다.<br>
							관련 문의사항에 대해서는 사무국( <a href='mailto:ksso@into-on.com'>ksso@into-on.com</a>)으로 연락 주시기 바랍니다. 
						</p>
						</td>
						<td  width='74' style='width:74px;'></td>
				</tr>
				<tr>
					<td colspan='3' style='padding-top:50px;'>
						<img src='https://kosso.org/main/img/mail/mail_footer.png' width='750' style='width:100%; max-width:100%;' alt='mail_footer'>
					</td>
				</tr>
			</tbody>
		</table>
		 ";
			//$rawMessageString .= "<div style='width:549px;background-color:#fff;border:1px solid #000;'><img src='{$background_img_url}/main/img/mail_header_2023.png' style='width:100%;margin-bottom:47px;'><h1 style='text-align:center; font-size:16px; font-weight:bold'>Temporary Password</h1><div style='width:calc(100% - 80px); margin:24px auto 50px; background-color:#f8f8f8; padding:17px 34px 78px 17px; border-top:2px solid #707070; box-sizing:border-box;'><div><p style='font-size:12px; font-weight:bold; color:#000; margin:0;'>Member of : <span>{$fname}</span></p><p style='font-size:12px; font-weight:bold; color:#000; margin:0;'>You requested a temporary password at : <span>{$time}</span></p><p style='font-size:10px; color:#707070; margin:10px 0 0 0;'>(If you have never requested a temporary password, please delete the email.)</p></div><p style='font-size:12px; color:#000 ;margin:25px 0 0 0;'>Since our site does not have your password even if you are an administrator, Instead of giving you your password, we’re creating a new one and guiding you.</p><p style='font-size:12px; font-weight:bold; color:#FF3333; margin:25px 0 0 0;'>Check the password below to change.<br/>Click the “<span style='font:inherit; color:inherit; text-decoration:underline;'>Change to temporary password</span>” button.</p><p style='font-size:12px; color:#000 ;margin:25px 0 0 0;'>When an authentication message is printed stating that the password has been changed,</p><p style='font-size:12px; color:#000 ;margin:25px 0 0 0;'>Please enter your member ID and changed password on the homepage and log in.</p><p style='font-size:10px; color:#707070;'>After logging in, please change to a new password from the Modify Information menu.</p><div style='padding:16px; border:1px solid #5DBC9B; border-radius:15px; margin-top:25px;'><ul style='padding:0; margin:0;'><li style='list-style:none;'><i style='display:inline-block; width:4px; height:4px; border-radius:50%; background-color:#10BF99; vertical-align:middle;'></i><span style='font-size:12px; font-weight:bold; vertical-align:middle;'>Member ID : {$to}</span><input type='text' style='vertical-align:middle; background:transparent; border:none; outline:none;'></li><li style='list-style:none;'><i style='display:inline-block; width:4px; height:4px; border-radius:50%; background-color:#10BF99; vertical-align:middle;'></i><span style='font-size:12px; font-weight:bold; vertical-align:middle;'>Temporary password :{$tmp_password}</span><input type='text' style='vertical-align:middle; background:transparent; border:none; outline:none;'></li></ul></div><p style='font-size:12px; line-height:22px; color:#000; margin-top:20px; margin-bottom:0;'>Regards,<br/>ICOMES</p><a href='{$callback_url}' style='text-decoration:none;'><button type='button' style='display:block; margin:70px auto 0; font-size:16px; font-weight:bold; color:#FFEB00; background-color:#23BF99; padding:10px 58px 34px 58px; border-radius:30px; border:none;'>Change to temporary password<span style='margin-left:10px; font:inherit;'>&gt;</span></button></a></div><img src='{$background_img_url}/main/img/icomes_mail_bottom.png' style='width:100%;'></div>";
		}

		if ($mail_type == "payment") {
			$name_title = $data["name_title"] ?? "";

			//$register_no = $data["idx"] ? "KSSO2024-" . $data["idx"] : "-";


			if(intval($data["idx"]) < 10){
				$register_no = $data["idx"] ? "KSSO2024-000" .  $data["idx"] : "-";
			}else if(intval($data["idx"]) >= 10 && intval($data["idx"]) < 100){
				$register_no = $data["idx"] ? "KSSO2024-00" .  $data["idx"] : "-";
			}else if(intval($data["idx"]) >= 100 && intval($data["idx"]) < 1000){
				$register_no = $data["idx"] ? "KSSO2024-0" . $data["idx"] : "-";
			}else if(intval($data["idx"]) >= 1000 ){
				$register_no = $data["idx"] ? "KSSO2024-" . $data["idx"] : "-";
			}

			$register_date = $data["register_date"] ?? "-";

			$licence_number = $data["licence_number"] ? $data["licence_number"] : "해당없음";
			$specialty_number = $data["specialty_number"] ? $data["specialty_number"] : "해당없음";
			$nutritionist_number = $data["nutritionist_number"] ? $data["nutritionist_number"] : "해당없음";
			$dietitian_number = $data["dietitian_number"] ? $data["dietitian_number"] : "해당없음";

			$attendance_type = $data["attendance_type"] ?? "-";
			switch ($attendance_type) {
				case 0:
					$attendance_type = "임원";
					break;
				case 1:
					$attendance_type = "연자";
					break;
				case 2:
					$attendance_type = "좌장";
					break;
				case 3:
					$attendance_type = "패널";
					break;
				case 4:
					$attendance_type = "일반참석자";
					break;
				case 5:
					$attendance_type = "고객사";
					break;
			}


			$occupation_type = $data["occupation_type"] ?? "-";

			$is_score = $data["is_score"] ?? "";
			$is_score = ($is_score == 1) ? "필요" : "불필요";

			/*
			$member_status = $data["member_status"] ?? "-";
			$member_status = ($member_status == 1) ? "Yes" : "No";
			*/
			$member_status = $data["ksso_member_status"] ?? "-";
			if ($member_status == 0) {
				$member_status = "비회원";
			} else {
				$member_status = "정회원";
			}

			$nation_no = $data["nation_no"] ?? "";
			$nation_sql = "SELECT
								idx, nation_en, nation_tel
							FROM nation
							WHERE idx = {$nation_no}";

			$nation = sql_fetch($nation_sql);
			$nation_tel = $nation["nation_tel"] ?? "";
			$nation_en = $nation["nation_en"] ?? "-";

			$phone = $data["phone"] ?? "";
			$phone = substr($data['phone'], 0, 3). '-' .  substr($data['phone'], 3, 4). '-' .substr($data['phone'], 7);
			$member_type = $data["member_type"] ?? "";
			$registration_type = $data["registration_type"] ?? "-";
			$registration_type = ($registration_type == 0) ? "Yes" : "No";

			$affiliation = $data["affiliation"] ?? "-";
			$department = $data["department"] ?? "-";
			$academy_number = $data["academy_number"] ?? "-";

			
					
		// 2024 member type 추가
		// Type of member 
		$member_type = $data["member_type"] ?? "-";
		switch ($member_type) {
			case "Professor":
				$member_type = "교수";
				break;
			case "Certified M.D.":
				$member_type = "개원의";
				break;
			case "Public Health Doctor":
				$member_type = "봉직의";
				break;
			case "Corporate Member":
				$member_type = "교직의";
				break;
			case "Fellow":
				$member_type = "전임의";
				break;
			case "Resident":
				$member_type = "전공의";
				break;
			case "Nutritionist":
				$member_type = "영양사";
				break;
			case "Exercise Specialist":
				$member_type = "운동사";
				break;
			case "Nurse":
				$member_type = "간호사";
				break;
			case "Researcher":
				$member_type = "연구원";
				break;
			case "Student":
				$member_type = "학생";
				break;
			case "Press":
				$member_type = "기자";
				break;   
			case "Others":
				$member_type = "기타";
				break;
			case "Intern":
				$member_type = "수련의";
				break;  
			case "Military Surgeon(군의관)":
				$member_type = "군의관";
				break;
			case "Pharmacist":
				$member_type = "공보의";
				break;     
			case "Booth":
				$member_type = "전시(부스)";
				break;        
		}


			// 평점리뷰
			$review_html = "";

			if ($nation_tel == 82) {
				$review_html = "
				<tr style='border-bottom:1px solid #000;'>
				<th style='width:150px; text-align:left; font-size:14px; padding:10px;border-bottom:1px solid #000;'>평점신청</th>
				<td colspan='2'  style='font-size:14px; padding:10px;border-left:1px solid #000;border-bottom:1px solid #000;'>{$is_score}</td>
			</tr>
			<tr style='border-bottom:1px solid #000;'>
				<th style='width:150px; text-align:left; font-size:14px; padding:10px;border-bottom:1px solid #000;'>의사 면허번호</th>
				<td colspan='2'  style='font-size:14px; padding:10px;border-left:1px solid #000;border-bottom:1px solid #000;'>{$licence_number}</td>
			</tr>
			<tr style='border-bottom:1px solid #000;'>
				<th style='width:150px; text-align:left; font-size:14px; padding:10px;border-bottom:1px solid #000;'>전문의 번호</th>
				<td colspan='2'  style='font-size:14px; padding:10px;border-left:1px solid #000;border-bottom:1px solid #000;'>{$specialty_number}</td>
			</tr>
			<tr style='border-bottom:1px solid #000;'>
				<th style='width:150px; text-align:left; font-size:14px; padding:10px;border-bottom:1px solid #000;'>영양사 면허번호</th>
				<td colspan='2'  style='font-size:14px; padding:10px;border-left:1px solid #000;border-bottom:1px solid #000;'>{$nutritionist_number}</td>
			</tr>
			<tr style='border-bottom:1px solid #000;'>
				<th style='width:150px; text-align:left; font-size:14px; padding:10px;border-bottom:1px solid #000;'>임상영양사 번호</th>
				<td colspan='2'  style='font-size:14px; padding:10px;border-left:1px solid #000;border-bottom:1px solid #000;'>{$dietitian_number}</td>
			</tr>
			<tr style='border-bottom:1px solid #000;'>
				<th style='width:150px; text-align:left; font-size:14px; padding:10px;border-bottom:1px solid #000;'>생년월일</th>
				<td colspan='2'  style='font-size:14px; padding:10px;border-left:1px solid #000;border-bottom:1px solid #000;'>{$dietitian_number}</td>
			</tr>
			";
			}

			// Others
			$welcome_reception_yn = $data["welcome_reception_yn"] ?? "N";
			$day2_breakfast_yn = $data["day2_breakfast_yn"] ?? "N";
			$day2_luncheon_yn = $data["day2_luncheon_yn"] ?? "N";
			$day3_breakfast_yn = $data["day3_breakfast_yn"] ?? "N";
			$day3_luncheon_yn = $data["day3_luncheon_yn"] ?? "N";

			$other_html = "";

			if ($welcome_reception_yn == "Y") {
				$other_html .= "
								<label for='other1'><i></i>• Welcome Reception – 3월 8일(금) 19:40~</label>
							   ";
			}
			if ($day2_breakfast_yn == "Y") {
				$other_html .= $other_html != "" ? "<br/>" : "";
				$other_html .= "
								<label for='other2'><i></i>• Satellite Symposium – 3월 8일(금) 18:30~19:40</label>
							   ";
			}
			if ($day2_luncheon_yn == "Y") {
				$other_html .= $other_html != "" ? "<br/>" : "";
				$other_html .= "
								<label for='other3'><i></i>• Breakfast Symposium – 3월 9일(토) 08:00~08:45</label>
							   ";
			}
			if ($day3_breakfast_yn == "Y") {
				$other_html .= $other_html != "" ? "<br/>" : "";
				$other_html .= "
								<label for='other4'><i></i>• Luncheon Symposium – 3월 9일(토) 12:00~13:00</label>
							   ";
			}
			// if ($day3_luncheon_yn == "Y") {
			// 	$other_html .= $other_html != "" ? "<br/>" : "";
			// 	$other_html .= "
			// 					<input type='checkbox' class='checkbox' id='other5'>
			// 					<label for='other5'><i></i>Day 3 Luncheon Symposium – 3월 9일(토)</label>
			// 				   ";
			// }

			if ($other_html == "") $other_html = "-";

			// Conference Info
			$info_html = "";
			$info = explode("*", $data["conference_info"] ?? "");

			for ($a = 0; $a < count($info); $a++) {
				if ($info[$a]) {
					$info_html .= $info_html != "" ? "<br/>" : "";
					$info_html .= "
									<label for='conference" . $a . "'><i></i>"."• " . $info[$a] . "</label>
								  ";
				}
			}

			if ($info_html == "") $info_html = "-";

			// Price
			$pay_type = $data["pay_type"] ?? "";
			$pay_name = "-";

			if ($pay_type == "card") $pay_name = "신용카드";
			else if ($pay_type == "bank") $pay_name = "계좌이체";
			else if ($pay_type == "free") $pay_name = "무료 등록";
			else $pay_name = "ETC";

			$pay_date = $data["payment_date"] ?? "-";

			$pay_price = $data["price"] ? number_format($data["price"]) : "-";
			$pay_current = $nation_tel == "82" ? "KRW" : "USD";

			if ($pay_type == "card" || $pay_type == "free") {
				$pay_html = "
				<tr style='border-bottom:1px solid #000;'>
				<th style='width:150px; text-align:left; font-size:14px; padding:10px; background-color:#DBF5F0; border-bottom:1px solid #000;'>결제 상태</th>
				<td colspan='2' style='font-size:14px; padding:10px; color:#00666B; font-weight:bold;border-left:1px solid #000;border-bottom:1px solid #000;'>등록 완료</td>
			</tr>
			<tr style='border-bottom:1px solid #000;'>
				<th style='width:150px; text-align:left; font-size:14px; padding:10px; background-color:#DBF5F0; border-bottom:1px solid #000;'>결제일</th>
				<td colspan='2' style='font-size:14px; padding:10px;border-left:1px solid #000;border-bottom:1px solid #000;'>{$pay_date}</td>
			</tr>
							";
			} else {
				$pay_html = "
				<tr style='border-bottom:1px solid #000;'>
				<th style='width:150px; text-align:left; font-size:14px; padding:10px; background-color:#DBF5F0;border-bottom:1px solid #000; '>결제 상태</th>
				<td colspan='2' style='font-size:14px; padding:10px; color:#00666B; font-weight:bold;border-left:1px solid #000;border-bottom:1px solid #000;'>결제 대기</td>
			</tr>
			<tr style='border-bottom:1px solid #000;'>
				<th style='width:150px; text-align:left; font-size:14px; padding:10px; background-color:#DBF5F0;border-bottom:1px solid #000; '>계좌 정보</th>
				<td colspan='2' style='font-size:14px; padding:10px;border-left:1px solid #000;border-bottom:1px solid #000;'>584-910003-16504, 하나은행, 대한비만학회-등록비</td>
			</tr> 
							";
			}

			$rawMessageString .= "
			<table width='750' style='border:1px solid #000; padding: 0; background-color:#FFF'>
			<tbody>
			   
				   <tr>
					   <td colspan='3'>
						   <img src='https://kosso.org/main/img/mail/registration_header.jpg' width='750' style='width:100%; max-width:100%;'alt='mail_header'>
						</td>
				   </tr>
					<tr>
						<td width='74' style='width:74px;'></td>
						<td>
							<div>
								<p style='font-size:15px; font-weight:bold; color:#000; margin:0;'></p>
								<p style='font-size:14px;color:#170F00;margin-top:14px;'></p>
								<table width='586' style='width:586px; border-collapse:collapse; border-top:2px solid #000; width:100%; margin:17px 0;'>
									<tbody>
										<tr style='border-bottom:1px solid #000;'>
											<th style='width:150px; text-align:left; font-size:14px; padding:10px;border-bottom:1px solid #000;'>등록번호</th>
											<td colspan='2' style='font-size:14px; padding:10px;border-left:1px solid #000;border-bottom:1px solid #000;'>{$register_no}</td>
										</tr>
										<tr style='border-bottom:1px solid #000;'>
											<th style='width:150px; text-align:left; font-size:14px; padding:10px;border-bottom:1px solid #000;'>등록일</th>
											<td colspan='2'  style='font-size:14px; padding:10px;border-left:1px solid #000;border-bottom:1px solid #000;'>{$register_date}</td>
										</tr>
									   <tr style='border-bottom:1px solid #000;'>
										   <th style='width:150px; text-align:left; font-size:14px; padding:10px;border-bottom:1px solid #000;'>성함</th>
										   <td colspan='2'  style='font-size:14px; padding:10px;border-left:1px solid #000;border-bottom:1px solid #000;'>{$fname}</td>
									   </tr>
							   <tr style='border-bottom:1px solid #000;'>
								   <th style='width:150px; text-align:left; font-size:14px; padding:10px;border-bottom:1px solid #000;'>소속</th>
								   <td colspan='2'  style='font-size:14px; padding:10px;border-left:1px solid #000;border-bottom:1px solid #000;'>{$affiliation}</td>
							   </tr>
							   <tr style='border-bottom:1px solid #000;'>
								   <th style='width:150px; text-align:left; font-size:14px; padding:10px;border-bottom:1px solid #000;'>휴대폰 번호</th>
								   <td colspan='2'  style='font-size:14px; padding:10px;border-left:1px solid #000;border-bottom:1px solid #000;'>{$phone}</td>
							   </tr>
							   <tr style='border-bottom:1px solid #000;'>
								   <th style='width:150px; text-align:left; font-size:14px; padding:10px;border-bottom:1px solid #000;'>대한비만학회 회원 여부</th>
								   <td colspan='2'  style='font-size:14px; padding:10px;border-left:1px solid #000;border-bottom:1px solid #000;'>{$member_status}</td>
							   </tr>
							   <tr style='border-bottom:1px solid #000;'>
								   <th style='width:150px; text-align:left; font-size:14px; padding:10px;border-bottom:1px solid #000;'>참가 유형</th>
								   <td colspan='2'  style='font-size:14px; padding:10px;border-left:1px solid #000;border-bottom:1px solid #000;'>{$attendance_type}</td>
							   </tr>
							   <tr style='border-bottom:1px solid #000;'>
								<th style='width:150px; text-align:left; font-size:14px; padding:10px;border-bottom:1px solid #000;'>분야 구분</th>
								<td colspan='2'  style='font-size:14px; padding:10px;border-left:1px solid #000;border-bottom:1px solid #000;'>{$occupation_type}</td>
							</tr>
							<tr style='border-bottom:1px solid #000;'>
								<th style='width:150px; text-align:left; font-size:14px; padding:10px;border-bottom:1px solid #000;'>참석 구분</th>
								<td colspan='2'  style='font-size:14px; padding:10px;border-left:1px solid #000;border-bottom:1px solid #000;'>{$member_type}</td>
							</tr>
							   {$review_html}
										<tr style='border-bottom:1px solid #000;'>
											<th style='width:150px; text-align:left; font-size:14px; padding:10px;border-bottom:1px solid #000;'>기타</th>
											<td colspan='2'  style='font-size:14px; padding:10px;border-left:1px solid #000;border-bottom:1px solid #000;'>
												{$other_html}
											</td>
										</tr>
										<tr style='border-bottom:1px solid #000;'>
											<th style='width:150px; text-align:left; font-size:14px; padding:10px;border-bottom:1px solid #000;'>개최 정보 유입 경로</th>
										   <td colspan='2'  style='font-size:14px; padding:10px;border-left:1px solid #000;border-bottom:1px solid #000;'>
											   {$info_html}
										   </td>
									   </tr>
									   <tr style='border-bottom:1px solid #000;'>
										   <th style='width:150px; text-align:left; font-size:14px; padding:10px;border-bottom:1px solid #000;'>등록비</th>
										   <td  colspan='2' style='font-size:14px; padding:10px;border-left:1px solid #000;border-bottom:1px solid #000;'>{$pay_price}원</td>
									   </tr>
									   <tr style='border-bottom:1px solid #000;'>
										   <th style='width:150px; text-align:left; font-size:14px; padding:10px; background-color:#DBF5F0;border-bottom:1px solid #000; '>결제 방법</th>
										   <td colspan='2'  style='font-size:14px; padding:10px;border-left:1px solid #000;border-bottom:1px solid #000;'>{$pay_name}</td>
									   </tr>
										{$pay_html}
									
									</tbody>	
								</table>
								<p>홈페이지 ‘마이페이지’에서 등록 내용 확인 및 수정이 가능 합니다.</p>
							</div>
						</td>
						<td width='74' style='width:74px;'></td>
					</tr>
					<tr>
						<td width='74' style='width:74px;'></td>
						<td>
							<!-- <p>항상 행운을 빕니다.</p> -->
							<div style='text-align: center; padding-top:30px;'>
								<table align='center' cellspacing='0' cellpadding='0' width='100%'>
									<tr>
										<td align='center'>
											<table border='0' class='mobile-button' cellspacing='0' cellpadding='0'>
												<tr>
													<td align='center' bgcolor='#ffcc33' style='background-color: #ffcc33; margin: auto; max-width: 600px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; padding: 4px 16px;box-shadow: 0px 5px 0px 0px #e0ba0d;' width='100%'><!--[if mso]>&nbsp;<![endif]-->
														<a href='https://kosso.org/main' target='_blank' style='font-size: 24px; font-family: Helvetica, Arial, sans-serif; color: #003466; font-weight:600; text-align:center; background-color: #ffcc33; text-decoration: none; border: none; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; display: inline-block;'>
															<span style='font-size: 24px; font-family: Helvetica, Arial, sans-serif; color: #003466; font-weight:600; text-align:center;'>홈페이지 바로가기</span>
														</a><!--[if mso]>&nbsp;<![endif]-->
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</div>
						</td>
						<td width='74' style='width:74px;'></td>
					</tr>
					<tr>
						<td  width='74' style='width:74px;'></td>
						<td style='padding-top:50px;'>
							<p>
								본 메일은 발신전용으로 회신이 불가합니다.<br>
								관련 문의사항에 대해서는 사무국( <a href='mailto:ksso@into-on.com'>ksso@into-on.com</a>)으로 연락 주시기 바랍니다. 
							</p>
							</td>
							<td  width='74' style='width:74px;'></td>
					</tr>
					<tr>
						<td colspan='3' style='padding-top:50px;'>
							<img src='https://kosso.org/main/img/mail/mail_footer.png' width='750' style='width:100%; max-width:100%;' alt='mail_footer'>
						</td>
					</tr>
				</tbody>
			</table>
";
		}

		if ($mail_type == "registration") {
			echo "dd";
			exit;
			$user_idx = $_SESSION["USER"]["idx"];
			$id = $_SESSION["USER"]["email"];
			$data = isset($_POST["data"]) ? $_POST["data"] : "";

			//필수
			$attendance_type = isset($data["attendance_type"]) ? $data["attendance_type"] : "";

			switch ($attendance_type) {
				case 0:
					$attendance_type = "General Participants";
					break;
				case 1:
					$attendance_type = "Invited Speaker";
					break;
				case 2:
					$attendance_type = "Committee";
					break;
				case 3:
					$attendance_type = "Sponsors";
					break;
			}

			$rating = isset($data["rating"]) ? $data["rating"] : "";
			$is_score = ($rating == 1) ? "Yes" : "No";

			$member_status = isset($data["member_status"]) ? $data["member_status"] : "";
			$member_status = htmlspecialchars($member_status);


			$nation_no = isset($data["nation_no"]) ? $data["nation_no"] : "";
			$nation_sql = "SELECT
								nation_en
							FROM nation
							WHERE idx = {$nation_no}";

			$nation_no = sql_fetch($nation_sql)["nation_en"];

			$nation_tel = isset($data["nation_tel"]) ? $data["nation_tel"] : "";
			$phone = isset($data["phone"]) ? $data["phone"] : "";
			$member_type = isset($data["member_type"]) ? $data["member_type"] : "";
			$member_type = ($member_type != "Choose") ? $member_type : "";

			$member_status = ($member_status == 1) ? "Yes" : "No";

			$registration_type = isset($data["registration_type"]) ? $data["registration_type"] : "";

			$registration_type = ($registration_type == 0) ? "Yes" : "No";

			$affiliation = isset($data["affiliation"]) ? $data["affiliation"] : "-";
			$affiliation = htmlspecialchars($affiliation);
			$department = isset($data["department"]) ? $data["department"] : "-";
			$department = htmlspecialchars($department);
			$licence_number = isset($data["licence_number"]) ? $data["licence_number"] : "-";
			$academy_number = isset($data["academy_number"]) ? $data["academy_number"] : "-";

			if ($nation_tel != "" && $phone != "") {
				$phone = $nation_tel . "-" . $phone;
			}

			$timenow = date("Y-m-d H:i:s");
			$timetarget = "2022-05-20 00:00:00";

			$str_now = strtotime($timenow);
			$str_target = strtotime($timetarget);
			if ($str_now <= $str_target) {
				$content_value = "Please visit our website(<a href='{$background_img_url}/main/' style='font: inherit; font-weight: bold; color: #10BF99; '>{$background_img_url}</a>) with your account to					submit the abstract and register.<br>
								If you Early-Bird and pay the registration fee by May 19th(Thu), you will receive a 30% OFF! <br>
								Don’t miss out on early bird rates!<br>
								Note the payment deadline of Jul 28(Thu) at 12pm(KST).<br><br>";
			} else {
				$content_value = "Please visit our website(<a href='{$background_img_url}/main/' style='font: inherit; font-weight: bold; color: #10BF99; '>{$background_img_url}</a>) with your account to					submit the abstract and register.<br>
								If you Registration and pay the registration fee by Jul 28th(Thu), you will receive a 10% OFF! <br>
								Don’t miss out on register rates!<br>
								Note the payment deadline of Jul 28(Thu) at 12pm(KST).<br><br>";
			}

			$rawMessageString .= "<table width='549' cellspacing='0' cellpadding='0' style='width: 549px !important; max-width:549px !important; margin: 0px auto; padding:0; border:1px solid;' >
							<tr>
								<td width='549' valign='top' style='width:549px; vertical-align:top; font-size:0; line-height:0;'>
									<img src='https://www.kosso.org/main/img/mail_header.png' alt='2022 mailer' width='549' style='width: 549px; vertical-align: top; border: 0; display:block;'>
								</td>
							</tr>
							<tr>
								<td width='549' valign='top' style='width:549px;'>
									<h1 style='font-size:16px; font-weight:bold; text-align:center; margin-top:50px;'>Personal Information</h1>
								</td>
							</tr>
							<tr>
								<td width='549' style='text-align:center;'>
									<br/><br/>
									<table width='480' style='display:inline-block; width:calc(100% - 80px); box-sizing:border-box;'>
										<tbody>
											<tr>
												<td style='text-align:center;'>
													<table width='420' style='display:inline-block; width:calc(100% - 30px); border-top:2px solid #707070; background-color:#f8f8f8;'>
														<tbody>
															<tr>
																<td style='padding:0 30px 50px;'>
																	<br/>
																	<table style='border-collapse: collapse;' cellspacing='0' cellpadding='0'>
																		<tbody>
																			<tr>
																				<p style='margin-top:24px; font-size:12px; font-weight:bold; color:#000; text-align:left;'>Dear {$fname},</p>
																				<br/>
																				<p style='font-size:10px; line-height:14px; color:#000; text-align:left;'>
																					Thank you for signing up for the 2022 International Congress on Obesity and<br/>Metabolic Syndrome.(ICOMES 2022)
																				</p>
																				<p style='font-size:10px; line-height:14px; color:#000; text-align:left;'>
																					Your account has been successfully created.<br/>Please review the information that you have entered and inform the info of any<br/>errors. 
																				</p>
																			</tr>
																		</tbody>
																	</table>
																	<br/>
																	<table width='420' style='width:100% !important; border-collapse: collapse;' cellspacing='0' cellpadding='0'>
																		<colgroup> 
																			<col width='160px'>
																			<col width='*'>
																		</colgroup>	
																		<tbody>
																			<tr>
																				<th style='border-top:1px solid #707070; border-bottom:1px solid #707070; font-size: 8px; font-weight: bold; color: #000000;  text-align: left; padding: 8px 17px; border-right: 1px solid #707070'>Attendance Type</th>
																				<td style='text-align:left; border-top:1px solid #707070; border-bottom:1px solid #707070; font-size: 8px; font-weight: 400; color: #000000; padding: 8px 24px; box-sizing:border-box;'>{$attendance_type}</td>
																			</tr>
																			<tr>
																				<th style='border-bottom:1px solid #707070; font-size: 8px; line-height:12px; font-weight: bold; color: #000000;  text-align: left; padding: 8px 17px; border-right: 1px solid #707070'>On-site</th>
																				<td style='text-align:left; border-bottom:1px solid #707070; font-size: 8px; line-height:12px; font-weight: 400; color: #000000; padding: 8px 24px; box-sizing:border-box;'>{$registration_type}</td>
																			</tr>
																			<tr>
																				<th style='border-bottom:1px solid #707070; font-size: 8px; line-height:12px; font-weight: bold; color: #000000;  text-align: left; padding: 8px 17px; border-right: 1px solid #707070'>평점신청여부</th>
																				<td style='text-align:left; border-bottom:1px solid #707070; font-size: 8px; line-height:12px; font-weight: 400; color: #000000; padding: 8px 24px; box-sizing:border-box;'>{$is_score}</td>
																			</tr>
																			<tr>
																				<th style='border-bottom:1px solid #707070; font-size: 8px; line-height:12px; font-weight: bold; color: #000000;  text-align: left; padding: 8px 17px; border-right: 1px solid #707070'>KSSO Membership</th>
																				<td style='text-align:left; border-bottom:1px solid #707070; font-size: 8px; line-height:12px; font-weight: 400; color: #000000; padding: 8px 24px; box-sizing:border-box;'>{$member_status}</td>
																			</tr>
																			<tr>
																				<th style='border-bottom:1px solid #707070; font-size: 8px; line-height:12px; font-weight: bold; color: #000000;  text-align: left; padding: 8px 17px; border-right: 1px solid #707070'>ID</th>
																				<td style='text-align:left; border-bottom:1px solid #707070; font-size: 8px; line-height:12px; font-weight: 400; color: #000000; padding: 8px 24px; box-sizing:border-box;'>{$to}</td>
																			</tr>
																			<tr>
																				<th style='border-bottom:1px solid #707070; font-size: 8px; line-height:12px; font-weight: bold; color: #000000;  text-align: left; padding: 8px 17px; border-right: 1px solid #707070'>Country</th>
																				<td style='text-align:left; border-bottom:1px solid #707070; font-size: 8px; line-height:12px; font-weight: 400; color: #000000; padding: 8px 24px; box-sizing:border-box;'>{$nation_no}</td>
																			</tr>
																			<tr>
																				<th style='border-bottom:1px solid #707070; font-size: 8px; line-height:12px; font-weight: bold; color: #000000;  text-align: left; padding: 8px 17px; border-right: 1px solid #707070'>Name</th>
																				<td style='text-align:left; border-bottom:1px solid #707070; font-size: 8px; line-height:12px; font-weight: 400; color: #000000; padding: 8px 24px; box-sizing:border-box;'>{$fname}</td>
																			</tr>
																			<tr>
																				<th style='border-bottom:1px solid #707070; font-size: 8px; line-height:12px; font-weight: bold; color: #000000;  text-align: left; padding: 8px 17px; border-right: 1px solid #707070'>Phone number</th>
																				<td style='text-align:left; border-bottom:1px solid #707070; font-size: 8px; line-height:12px; font-weight: 400; color: #000000; padding: 8px 24px; box-sizing:border-box;'>{$phone}</td>
																			</tr>
																			<tr>
																				<th style='border-bottom:1px solid #707070; font-size: 8px; line-height:12px; font-weight: bold; color: #000000;  text-align: left; padding: 8px 17px; border-right: 1px solid #707070'>Attendant type</th>
																				<td style='text-align:left; border-bottom:1px solid #707070; font-size: 8px; line-height:12px; font-weight: 400; color: #000000; padding: 8px 24px; box-sizing:border-box;'>{$member_type}</td>
																			</tr>
																			<tr>
																				<th style='border-bottom:1px solid #707070; font-size: 8px; line-height:12px; font-weight: bold; color: #000000;  text-align: left; padding: 8px 17px; border-right: 1px solid #707070'>Affiliation</th>
																				<td style='text-align:left; border-bottom:1px solid #707070; font-size: 8px; line-height:12px; font-weight: 400; color: #000000; padding: 8px 24px; box-sizing:border-box;'>{$affiliation}</td>
																			</tr>
																			<tr>
																				<th style='border-bottom:1px solid #707070; font-size: 8px; line-height:12px; font-weight: bold; color: #000000;  text-align: left; padding: 8px 17px; border-right: 1px solid #707070'>Department</th>
																				<td style='text-align:left; border-bottom:1px solid #707070; font-size: 8px; line-height:12px; font-weight: 400; color: #000000; padding: 8px 24px; box-sizing:border-box;'>{$department}</td>
																			</tr>
																			<tr style='border-bottom:1px solid #707070;'>
																				<th style='border-bottom:1px solid #707070; font-size: 8px; line-height:12px; font-weight: bold; color: #000000;  text-align: left; padding: 8px 17px; border-right: 1px solid #707070'>Doctor’s license Number</th>
																				<td style='text-align:left; border-bottom:1px solid #707070; font-size: 8px; line-height:12px; font-weight: 400; color: #000000; padding: 8px 24px; box-sizing:border-box;'>{$licence_number}</td>
																			</tr>
																			<tr>
																				<th style='border-bottom:1px solid #707070; font-size: 8px; line-height:12px; font-weight: bold; color: #000000;  text-align: left; padding: 8px 17px; border-right: 1px solid #707070'>학회번호</th>
																				<td style='text-align:left; border-bottom:1px solid #707070; font-size: 8px; line-height:12px; font-weight: 400; color: #000000; padding: 8px 24px; box-sizing:border-box;'>{$academy_number}</td>
																			</tr>
																		</tbody>
																	</table>
																	<br/>
																	<table style='border-collapse: collapse;' cellspacing='0' cellpadding='0'>
																		<tbody>
																			<tr>
																				<p style='font-size:10px; line-height:14px; color:#000; text-align:left;'>
																					We express our gratitude to you for your interest in the ICOMES 2022 and look<br/>forward to seeing you in September in Seoul, Korea.
																					<br/><br/>
																					Please visit our website(https://kosso.org) with your account to submit the abstract and register.<br/>If you Early-Register and pay the registration fee by May 12th(Thu), you will receive a 30% discount!<br/>Don’t miss out on early bird register rates!<br/>Note the payment deadline of August 11(Thu) at 12pm(KST).
																					<br/><br/>
																					Warmest regards,
																					<br/><br/>
																					ICOMES 2022 info
																					<br/><br/><br/>
																				</p>
																			</tr>
																		</tbody>
																	</table>
																</td>
															</tr>
														</tbody>
													</table>
													<br/><br/><br/>
												</td>
											</tr>
											<tr>
												<td width='549' valign='top' style='width:549px; vertical-align:top; font-size:0; line-height:0;'>
													<img src='https://kosso.org/main/img/mail_footer.png' style='width:100%;'>
												</td>
											</tr>
										</tbody>
									</table>
								</td>	
							</tr>
						</table>";
		}

		if ($mail_type == "visa_registration") {

			$rawMessageString .= "<div style='width:549px;background-color:#fff;border:1px solid #000;'><img src='https://www.kosso.org/main/img/mail_header.png' style='width:100%;margin-bottom:47px;'><h1 style='text-align:center; font-size:16px; font-weight:bold'>Letter of Invitation</h1><div style='width:calc(100% - 80px); margin:24px auto 100px; background-color:#f8f8f8; padding:17px 34px 78px 17px; border-top:2px solid #707070; box-sizing:border-box;'><p style='font-size:12px; font-weight:bold; color:#000; margin:0;'>Dear {$fname},</p><p style='font-size:10px; color:#000 ;margin-top:16px; margin-bottom:25px;'>On behalf of the ICOMES organizing committee, we cordially invite you as participant to “ICOMES 2022 International Conference” to be held at the Conrad Seoul Hotel, Seoul, Korea on September 1(Thu)-3(Sat), 2022. </p><p style='font-size:10px; color:#000; margin-bottom:25px;'>ICOMES has grown as a worldwide academic society with more than 1000 participants and eminent representative speakers in obesity every year since 2015 at its launch. ICOMES is an international academic conference that promotes cooperation among multidisciplinary study fields, providing in-depth lectures and symposiums on basic medicine and clinical medicine on obesity, metabolic syndrome, dyslipidemia, and other obesity-related diseases.<br/>The main theme of ICOMES 2022 is ‘The Next Normal - The Future of Obesity Care’. Your Presentation will be a great addition to our conference.</p><p style='font-size:10px; color:#000;'>For building instructive, insightful and interesting meeting, we would like you to take as a role of; </p><div style='padding:10px 0; margin-top:16px; border-top:1px solid #000; border-bottom:1px solid #000;'><div><span style='vertical-align:middle; width:56px; height:18px; border-radius:14px; border:1px solid #5DBC9B; line-height:16px; display:inline-block; text-align:center; font-size:10px; font-weight:bold; margin-right:7px;'>Date</span><span style='vertical-align:middle; font-size:10px;'>September 1(Thu)~3(Sat)</span></div>
			<div><span style='vertical-align:middle; width:56px; height:18px; border-radius:14px; border:1px solid #5DBC9B; line-height:16px; display:inline-block; text-align:center; font-size:10px; font-weight:bold; margin-right:7px;'>Venue</span><span style='vertical-align:middle; font-size:10px;'>Conrad Hotel Seoul, Korea</span></div></div><div style='font-size:10px; margin:14px 0 60px;'>
			We invite you to ICOMES 2022 to create an informative, insightful and exciting<br/>meeting. <a style='font-size:10px; font-weight:bold; color:#10BF99;'>(icomes_registration@into-on.com).</a></div><ul style='margin:0; padding:0; text-align:center; font-size:0;'><li style='text-align:center; list-style:none; display:inline-block; vertical-align:top;'><p style='font-size:12px; font-weight:bold; margin:0;'>Kijin Kim</p><p style='font-size:8px;'>Chairman of Korean Society<br/>for the Study of Obesity</p><img src='https://kosso.org/main/img/mail_sign01.png' alt=''></li><li style='text-align:center; list-style:none; display:inline-block; vertical-align:top; margin-left:15%;'><p style='font-size:12px; font-weight:bold; margin:0;'>Chang-Beom Lee</p><p style='font-size:8px;'>President of Korean Society<br/>for the Study of Obesity</p><img src='https://kosso.org/main/img/mail_sign02.png' style='margin-top:10px;' alt=''></li></ul></div><img src='https://kosso.org/main/img/mail_footer.png' style='width:100%;'></div>";
		}


		if ($mail_type == "abstract") {
			$submit_data = $data["submit_data"] ?? [];
			$presenting_author_data = $data["presenting_author_data"] ?? [];
			$corresponding_submit_data = $data["corresponding_submit_data"] ?? [];
			$poster_category_map = $data["poster_category_map"] ?? [];
			$presentation_type_arr = $data["presentation_type_arr"] ?? [];
			$position_arr = $data["position_arr"] ?? [];
			$nation_map = $data["nation_map"] ?? [];

			$submission_code	= $submit_data["submission_code"] ?? "";
			$abstract_category	= $submit_data["abstract_category"] ?? "";
			$abstract_title		= $submit_data["abstract_title"] ?? "";
			$presentation_type	= $submit_data["presentation_type"] ?? "";

			$first_name			= $submit_data["first_name"] ?? "";
			$last_name			= $submit_data["last_name"] ?? "";

			$url = $_SERVER['HTTP_HOST'] ?? "www.kosso.org";

			$rawMessageString .= ' <div style="background-color:#FFF"><table width="750" style="border:1px solid #000;padding: 0;">
			<tr><td colspan="3"><img src="https://www.kosso.org/main/img/mail/abstract_header.jpg" width="750" style="width:100%; max-width:100%;"></td></tr>
			<tr><td width="74" style="width:74px;"></td><td><div><p style="font-size:15px; font-weight:bold; color:#000; margin:0;"></p><p style="font-size:14px;color:#170F00;margin-top:14px;"></p>
			<!-- Abstract Submission Status -->
			<p style="font-size:17px; font-weight:bold; color:#000;  margin: 30px 0 0;">초록 정보</p>
			<table width="586" style="width:586px; border-collapse:collapse; border-top:2px solid #000; width:100%; margin:10px 0 30px;">
			<tbody>
			<tr>
				<th style="width:150px; text-align:left; font-size:14px; padding:10px; border-bottom:1px solid #000;">초록 접수 번호</th>
				<td style="font-size:14px; padding:10px; border-left:1px solid #000; border-bottom:1px solid #000;" colspan="2">' . $submission_code . '</td>
			</tr>
			<tr>
				<th style="width:150px; text-align:left; font-size:14px; padding:10px; border-bottom:1px solid #000;">발표 형식</th>
				<td style="font-size:14px; padding:10px; border-left:1px solid #000; border-bottom:1px solid #000;" colspan="2">' . ($presentation_type + 1) . '. ' . $presentation_type_arr[$presentation_type] . '</td>
			</tr>
			<tr>
				<th style="width:150px; text-align:left; font-size:14px; padding:10px; border-bottom:1px solid #000;">카테고리</th>
				<td style="font-size:14px; padding:10px; border-left:1px solid #000; border-bottom:1px solid #000;" colspan="2">' . $poster_category_map[$abstract_category] . '</td>
			</tr>
			<tr>
				<th style="width:150px; text-align:left; font-size:14px; padding:10px; border-bottom:1px solid #000;">초록 제목</th>
				<td style="font-size:14px; padding:10px; border-left:1px solid #000; border-bottom:1px solid #000; white-space:nowrap;" colspan="2">' . $abstract_title . '</td>
			</tr>
			</tbody>
			</table>';

			if (count($presenting_author_data) > 0 || count($corresponding_submit_data) > 0) {
				$rawMessageString .= '<p style="font-size:17px; font-weight:bold; color:#000; margin: 20px 0 10px;">초록 접수 상태</p>';
			}

			if (count($presenting_author_data) > 0) {
				$rawMessageString .= '<!-- Abstract Submission Status > Presenting Author -->
								<p style="font-size:15px; font-weight:600; color:#000; margin:0;">발표저자</p>';

				foreach ($presenting_author_data as $obj) {
					$nation_no			= $obj["nation_no"] ?? "";
					$first_name			= $obj["first_name"] ?? "";
					$last_name			= $obj["last_name"] ?? "";
					$email				= $obj["email"] ?? "";
					$affiliation		= $obj["affiliation"];

					if ($affiliation) {
						if (!is_array($affiliation)) {
							$affiliation_arr = explode("★", $affiliation);
						} else {
							$affiliation_arr = $affiliation;
						}
					}
				
					//[231201] sujeong 주석
					// $_arr_phone = explode("-", $obj["phone"]);
					// $nation_tel = $_arr_phone[0];
					// $phone = implode("-", array_splice($_arr_phone, 1));
					
					//[231201] sujeong 추가 82- 제거
					$phone = $obj["phone"];
					// $phone = substr($obj['phone'], 0, 3). '-' .  substr($obj['phone'], 3, 4). '-' .substr($obj['phone'], 7);
					
					$rawMessageString .= '<table width="586" style="width:586px; border-collapse:collapse; border-top:2px solid #000; width:100%; margin:10px 0 20px;">
										<tbody>
										<tr>
											<th style="width:150px; text-align:left; font-size:14px; padding:10px; border-bottom:1px solid #000;">성함</th>
											<td style="font-size:14px; padding:10px; border-left:1px solid #000; border-bottom:1px solid #000;"  colspan="2">' . $first_name . ' ' . $last_name . '</td>
										</tr>
										<tr>
											<th style="width:150px; text-align:left; font-size:14px; padding:10px; border-bottom:1px solid #000;">소속</th>
											<td style="font-size:14px; padding:10px; border-left:1px solid #000; border-bottom:1px solid #000;"  colspan="2">' . (implode("<br>", $affiliation_arr)) . '</td>
										</tr>
										<tr>
											<th style="width:150px; text-align:left; font-size:14px; padding:10px; border-bottom:1px solid #000;">E-mail</th>
											<td style="font-size:14px; padding:10px; border-left:1px solid #000; border-bottom:1px solid #000;"  colspan="2"><a >' . $email . '</a></td>
										</tr>
										<tr>
											<th style="width:150px; text-align:left; font-size:14px; padding:10px; border-bottom:1px solid #000;">전화번호</th>
											<td style="font-size:14px; padding:10px; border-left:1px solid #000; border-bottom:1px solid #000;"  colspan="2">' . $phone . '</td>
										</tr>
										</tbody>	
										</table>';
				}
			}

			if (count($corresponding_submit_data) > 0) {
				$rawMessageString .= '<!-- Abstract Submission Status > Corresponding Author -->
			<p style="font-size:15px; font-weight:600; color:#000; margin:0;">교신저자</p>';

				foreach ($corresponding_submit_data as $obj) {
					$nation_no			= $obj["nation_no"] ?? "";
					$first_name			= $obj["first_name"] ?? "";
					$last_name			= $obj["last_name"] ?? "";
					$email				= $obj["email"] ?? "";
					$affiliation		= $obj["affiliation"];

					if ($affiliation) {
						if (!is_array($affiliation)) {
							$affiliation_arr = explode("★", $affiliation);
						} else {
							$affiliation_arr = $affiliation;
						}
					}

					//[231201] sujeong 주석
					// $_arr_phone = explode("-", $obj["phone"]);
					// $nation_tel = $_arr_phone[0];
					// $phone = implode("-", array_splice($_arr_phone, 1));
					
					//[231201] sujeong 추가 82- 제거
					$phone = $obj["phone"];
					// $phone = substr($obj['phone'], 0, 3). '-' .  substr($obj['phone'], 3, 4). '-' .substr($obj['phone'], 7);

					$rawMessageString .= '<table width="586" style="width:586px; border-collapse:collapse; border-top:2px solid #000; width:100%; margin:10px 0 20px;">
										<tbody>
										<tr>
											<th style="width:150px; text-align:left; font-size:14px; padding:10px; border-bottom:1px solid #000;">성함</th>
											<td style="font-size:14px; padding:10px; border-left:1px solid #000; border-bottom:1px solid #000;" colspan="2">' . $last_name . $first_name .'</td>
										</tr>
										<tr>
											<th style="width:150px; text-align:left; font-size:14px; padding:10px; border-bottom:1px solid #000;">소속</th>
											<td style="font-size:14px; padding:10px; border-left:1px solid #000; border-bottom:1px solid #000;"  colspan="2">' . (implode("<br>", $affiliation_arr)) . '</td>
										</tr>
										<tr>
											<th style="width:150px; text-align:left; font-size:14px; padding:10px; border-bottom:1px solid #000;">E-mail</th>
											<td style="font-size:14px; padding:10px; border-left:1px solid #000; border-bottom:1px solid #000;"  colspan="2"><a>' . $email . '</a></td>
										</tr>
										<tr>
											<th style="width:150px; text-align:left; font-size:14px; padding:10px; border-bottom:1px solid #000;">전화번호</th>
											<td style="font-size:14px; padding:10px; border-left:1px solid #000; border-bottom:1px solid #000;"  colspan="2">' . $phone . '</td>
										</tr>
										</tbody>	
										</table>';
				}
			}

			$rawMessageString .=  '    </div>
			</td>
			<td width="74" style="width:74px;">
			</td>
			</tr>
			<tr>
				<td style="padding-top:50px;" colspan="3">
					<img src="https://www.kosso.org/main/img/mail/abstract_footer_01.png" alt="footer01" width="750" style="width:100%; max-width:100%;">
				</td>
			</tr>
			<tr>
				<td width="74" style="width:74px;"></td>
				<td>
				<div style="text-align: center;padding-top:50px;">
				<table align="center" cellspacing="0" cellpadding="0" width="100%">
					<tr>
						<td align="center">
							<table border="0" class="mobile-button" cellspacing="0" cellpadding="0">
								<tr>
									<td align="center" bgcolor="#ffcc33" style="background-color: #ffcc33; margin: auto; max-width: 600px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; padding: 4px 16px;box-shadow: 0px 5px 0px 0px #e0ba0d;" width="100%"><!--[if mso]>&nbsp;<![endif]-->
										<a href="https://kosso.org/main" target="_blank" style="font-size: 24px; font-family: Helvetica, Arial, sans-serif; color: #003466; font-weight:600; text-align:center; background-color: #ffcc33; text-decoration: none; border: none; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; display: inline-block;">
											<span style="font-size: 24px; font-family: Helvetica, Arial, sans-serif; color: #003466; font-weight:600; text-align:center;">홈페이지 바로가기</span>
										</a><!--[if mso]>&nbsp;<![endif]-->
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</div>
				</td>
				<td width="74" style="width:74px;"></td>
			</tr>
			<tr>
					<td  width="74" style="width:74px;"></td>
					<td style="padding-top:50px;">
						<p>
							본 메일은 발신전용으로 회신이 불가합니다.<br>
							관련 문의사항에 대해서는 사무국( <a href="mailto:ksso@into-on.com">ksso@into-on.com</a>)으로 연락 주시기 바랍니다. 
						</p>
						</td>
						<td  width="74" style="width:74px;"></td>
				</tr>
			<tr>
				<td style="padding-top:30px;" colspan="3">
					<img src="https://www.kosso.org/main/img/mail/abstract_footer_02.png" width="750" style="width:100%; max-width:100%;" alt="footer02">
				</td>
			</tr>
			</table>
			</div>	';
		}
	}



	//$rawMessage = strtr(base64_encode($rawMessageString), array('+' => '-', '/' => '_'));
	$rawMessage = rtrim(strtr(base64_encode($rawMessageString), '+/', '-_'), '=');
	$message->setRaw($rawMessage);

	//var_dump($message); exit;
	return $message;
}


/**
 * @param $service Google_Service_Gmail an authorized Gmail API service instance.
 * @param $user string User's email address or "me"
 * @param $message Google_Service_Gmail_Message
 * @return Google_Service_Gmail_Draft
 */
function createDraft($service, $user, $message)
{
	$draft = new Google_Service_Gmail_Draft();
	$draft->setMessage($message);

	try {
		$draft = $service->users_drafts->create($user, $draft);
		//print 'Draft ID: ' . $draft->getId();
	} catch (Exception $e) {
		//print 'An error occurred: ' . $e->getMessage();
	}

	return $draft;
}


/**
 * @param $service Google_Service_Gmail an authorized Gmail API service instance.
 * @param $userId string User's email address or "me"
 * @param $message Google_Service_Gmail_Message
 * @return null|Google_Service_Gmail_Message
 */
function sendMessage($service, $userId, $message)
{
	try {
		$message = $service->users_messages->send($userId, $message);
		//print 'Message with ID: ' . $message->getId() . ' sent.';
		return $message;
	} catch (Exception $e) {
		print 'An error occurred: ' . $e->getMessage();
	}

	return null;
}

if ($_POST["flag"] == "signup") {
	$data = $_POST["data"];
	//var_dump($data); exit;
	$email = isset($data["email"]) ? $data["email"] : "";

	try {
		$select_user_query =	"
									SELECT
										*
									FROM member
									WHERE email = '{$email}'
									AND is_deleted = 'N'
								";

		$user_data = sql_fetch($select_user_query);

		//$subject = "[KSSO] 제 59차 대한비만학회 춘계학술대회 회원가입을 축하드립니다!";
		$callback_url = D9_DOMAIN . "/signup_certified.php?idx=" . $user_data["idx"];

		$message = createMessage("en", "sign_up", "", $email, "[제 59차 대한비만학회 춘계학술대회]회원가입 안내 메일", date("Y-m-d H:i:s"), "", $callback_url, 1);
		//var_dump($message); exit;
		createDraft($service, "secretariat@kosso.org", $message);
		sendMessage($service, "secretariat@kosso.org", $message);
	} catch (\Throwable $tw) {
		echo $tw->getMessage();
		exit;
	}
}

if ($_POST["flag"] == "find_password") {

	try {
		$email = isset($_POST["email"]) ? $_POST["email"] : "";

		$check_user_query =	"
								SELECT
									idx, email, first_name, last_name
								FROM member
								WHERE email = '{$email}'
								AND is_deleted = 'N'
							";

		$check_user = sql_fetch($check_user_query);

		if (!$check_user) {
			$res = [
				code => 401,
				msg => "does not exist email"
			];
			echo json_encode($res);
			exit;
		}

		$temporary_password = "";
		$random_token = generator_token();		// 비밀번호 찾기시 사용되는 토큰

		for ($i = 0; $i < 6; $i++) {
			$temporary_password .= mt_rand(1, 9);
		}

		//$name = $language == "en" ? $check_user["first_name"]." ".$check_user["last_name"] : $check_user["last_name"].$check_user["first_name"];

		$name = $check_user["last_name"] . $check_user["first_name"];

		//$subject = "비밀번호 찾기 메일";
		$callback_url = D9_DOMAIN . "/password_reset.php?e=" . $email . "&t=" . $random_token;

		$message = createMessage($language, "find_password", $name, $email, "[제 59차 대한비만학회 춘계학술대회] 비밀번호 찾기 메일", date("Y-m-d H:i:s"), $temporary_password, $callback_url, 0);
		createDraft($service, "secretariat@kosso.org", $message);
		sendMessage($service, "secretariat@kosso.org", $message);

		$hash_temporary_password = password_hash($temporary_password, PASSWORD_DEFAULT);

		$update_temporary_password_query =	"
												UPDATE member
												SET
													temporary_password = '{$hash_temporary_password}',
													temporary_password_token = '{$random_token}'
												WHERE email = '{$email}'
												AND is_deleted = 'N'
											";

		$update_temporary_password = sql_query($update_temporary_password_query);

		if ($update_temporary_password) {
			$res = [
				code => 200,
				msg => "success"
			];
			echo json_encode($res);
			exit;
		} else {
			$res = [
				code => 400,
				msg => "update query error"
			];
			echo json_encode($res);
			exit;
		}
	} catch (\throwable $tw) {
		echo $tw->getMessage();
		exit;
	}
} else if ($_POST["flag"] == "payment") {
	$name = $_POST["name"] ?? null;
	$email = $_POST["email"] ?? null;
	$data = $_POST["data"] ?? null;
	$message = createMessage("en", "payment", $name, $email, "[제 59차 대한비만학회 춘계학술대회] 사전등록이 완료되었습니다.", date("Y-m-d H:i:s"), "", "", 1, "", "", "", "", "", "", "", $data);
	createDraft($service, "secretariat@kosso.org", $message);
	sendMessage($service, "secretariat@kosso.org", $message);
} else if ($_POST["flag"] == "registration") {
	$name = $_POST["name"] ?? null;
	$email = $_POST["email"] ?? null;
	$data = $_POST["data"] ?? null;
	$registration_idx = $_POST["registration_idx"] ?? null;
	$message = createMessage("en", "registration", $name, $email, "[제 59차 대한비만학회 춘계학술대회] 등록 접수", date("Y-m-d H:i:s"), "", "", 1, "", "", "", "", "", "", "", $data);
	createDraft($service, "secretariat@kosso.org", $message);
	sendMessage($service, "secretariat@kosso.org", $message);

	$invitation_check_yn = $_POST["invitation_check_yn"] ?? null;
	if ($invitation_check_yn == "Y") {
		$message = createMessage("en", "visa_registration", $name, $email, "[제 59차 대한비만학회 춘계학술대회] 등록 초대", date("Y-m-d H:i:s"), "", "", 1);
		createDraft($service, "secretariat@kosso.org", $message);
		sendMessage($service, "secretariat@kosso.org", $message);
	}

	if ($message) {
		$res = [
			code => 200,
			msg => "success"
		];
		echo json_encode($res);
		exit;
	} else {
		$res = [
			code => 400,
			msg => "update query error"
		];
		echo json_encode($res);
		exit;
	}
} else if ($_POST["flag"] == "abstract") {
	$abstract_idx = $_POST["idx"];

	// submission_info
	$submit_data_query = "SELECT 
							idx, submission_code, nation_no, first_name, last_name, affiliation, email, phone, abstract_title, presentation_type, abstract_category
						FROM request_abstract";
	$submit_data = sql_fetch($submit_data_query . " WHERE idx = " . $abstract_idx) ?? [];

	// presenting_author
	$presenting_author_data = get_data($submit_data_query . " WHERE (idx=" . $abstract_idx . " OR parent_author=" . $abstract_idx . ") AND presenting_author='Y'") ?? [];

	// corresponding_author
	$corresponding_submit_data = get_data($submit_data_query . " WHERE (idx=" . $abstract_idx . " OR parent_author=" . $abstract_idx . ") AND corresponding_author='Y'") ?? [];

	// abstract_category
	$info_poster_abstract_category_sql = "SELECT 
												idx, title_en, title_ko
											FROM info_poster_abstract_category
											WHERE is_deleted = 'N'";
	$info_poster_abstract_category_data = get_data($info_poster_abstract_category_sql);
	$poster_category_map = [];

	foreach ($info_poster_abstract_category_data as $obj) {
		$poster_category_map[$obj["idx"]] = $obj["title_en"];
	}

	// toffic
	$presentation_type_arr = array("구연/포스터", "구연", "포스터", "기타");

	// Position
	$position_arr = array("Professor", "Physician", "Researcher", "Student", "Other");

	// nation
	$nation_query = "SELECT *
					FROM nation";
	$nation_list = get_data($nation_query);
	$nation_map = [];

	foreach ($nation_list as $obj) {
		$nation_map[$obj["idx"]] = $obj["nation_en"];
	}

	$data = [
		"submit_data"				=> $submit_data,
		"presenting_author_data"	=> $presenting_author_data,
		"corresponding_submit_data"	=> $corresponding_submit_data,
		"poster_category_map"		=> $poster_category_map,
		"presentation_type_arr"		=> $presentation_type_arr,
		"position_arr"				=> $position_arr,
		"nation_map"				=> $nation_map
	];

	/** 1120 메일 제목을 받아오는 경우 보내지지 않음
	 * 메일 제목 직접 입력으로 수정
	 */
	//$subject = "초록 접수 메일 안내";

	$message = createMessage($language, "abstract", "", $email, "[KSSO]초록 접수 메일 안내", date("Y-m-d H:i:s"), "", "", 1, "", "", "", $user_email, date("Y-m-d H:i:s"), $title, $abstract_title, $data);
	createDraft($service, "secretariat@kosso.org", $message);
	sendMessage($service, "secretariat@kosso.org", $message);
}





function generator_token()
{
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < 10; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}
?>