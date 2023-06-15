<?php
	include_once('./include/head.php');
?>

<!-- HUBDNCLHJ : app login 페이지 -->
<section class="container app_main app_login app_version">
	<div class="app_main_inner">
		<div class="app_main_box">
			<div class="app_main_txt">
				<img src="./img/app_main_txt.svg" alt="">
				<p>Sep. 7(Thu) ~ Sep. 9(Sat)</p>
				<p>CONRAD Seoul Hotel, Korea</p>
			</div>
			<div class="app_login_box">
				<p>* Please log in using the same ID you used to register on the ICOMES 2023 website.</p>
				<ul>
					<li>
						<input type="text" name="email" placeholder="ID(email)">
					</li>
					<li>
						<input type="text" name="password" placeholder="Password">
					</li>
				</ul>
				<a href="./find_password.php" class="app_find_password">Find password</a>
				<button type="button" class="btn app_login_btn" onclick="window.location.href='./index.php';">Log in</button>
			</div>
		</div>
	</div>
</section>