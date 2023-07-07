<!doctype html>
<html lang="ko-KR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, shrink-to-fit=no, viewport-fit=cover" />
    <title>ICOMES 2023</title>

    <meta property="og:type" content="website">
    <meta property="og:title" content="ICOMES 2023">
    <meta property="og:image" content="/main/img/poster2023.jpg" />
    <meta property="og:description" content="2023 ICOMES hosted by KSSO">
    <meta name="description" content="2023 ICOMES hosted by KSSO">

    <!-- datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://use.typekit.net/uwj4our.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/main/css/common.css?ver=<?= time() ?>">
    <link rel="stylesheet" href="/main/css/style.css?ver=<?= time() ?>">
    <link rel="stylesheet" href="/main/css/style2.css?ver=<?= time() ?>">
    <link rel="stylesheet" href="/main/css/style3.css?ver=<?= time() ?>">
    <link rel="stylesheet" href="/main/css/style4.css?ver=<?= time() ?>">
    <script src="/main/js/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="/main/js/style.js?ver=<?= time() ?>"></script>
    <script src="/main/js/config.js"></script>
    <script src="/main/js/common.js?ver=<?= time() ?>"></script>
    <script src="/main/js/en.js?ver=<?= time() ?>"></script>
    <script src="/main/js/ko.js?ver=<?= time() ?>"></script>
    <script src="/main/js/lang.js"></script>
    <script src="/main/js/locale.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y16N5RM5E5"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-Y16N5RM5E5');
    </script>
</head>

<body>
    <?php
	if (strpos($_SERVER["PHP_SELF"], "/main/") !== false) {
		include_once("./common/common.php");
	} else {
		include_once("./main/common/common.php");
	}
	?>