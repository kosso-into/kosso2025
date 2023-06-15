<!-- HUBDNCAJY : 사용자 App에서 사용하는 footer입니다. -->

<!-- 사용자 App footer -->
<footer class="app_footer">
	<div class="rolling_wrap">
		<div class="schedule">
			<a href="">[My schedule] the Pre-congress Symposium will start in 10 minutes.</a>
		</div>
		<div class="notice">
			<div style="height:20px; overflow:hidden;">
				<ul>
					<li><a href="/main/app_notice.php">[NOTICE] The awards ceremony will start at 14:00 ~ </a></li>
					<li><a href="/main/app_notice.php">[NOTICE] The awards ceremony will start at 14:00 ~ </a></li>
					<li><a href="/main/app_notice.php">[NOTICE] The awards ceremony will start at 14:00 ~ </a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="ft_inner">
		<ul class="ft_menu">
			<li>
				<a href="/main/app_index.php"><img src="/main/img/icons/icon_ft_home.svg" alt=""><span>HOME</span></a>
			</li>
			<li>
				<a href="/main/program_glance.php"><img src="/main/img/icons/icon_ft_program.svg" alt=""><span>PROGRAM</span></a>
			</li>
			<li class="round_menu">
				<a href="/main/app_qr_code.php">
					<div class="qr_blue">
						<img src="/main/img/icons/icon_ft_qr.svg" alt="">
					</div>
					<span>QR CODE</span>
				</a>
			</li>
			<li>
				<a href="/main/app_abstract.php"><img src="/main/img/icons/icon_ft_abstract.svg" alt=""><span>ABSTRACT</span></a>
			</li>
			<li>
				<a href="javascript:;"><img src="/main/img/icons/icon_ft_schedule.svg" alt=""><span>MY SCHEDULE</span></a>
			</li>
		</ul>
	</div>
</footer>

<script src="/main/js/jquery.vticker.js"></script>
<script>
	$(document).ready(function(){
		$('.notice > div').vTicker();
	});
</script>