<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
	<?php
        $consultarMet = 'SELECT * FROM metatags';
        $resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
        while($filaMet = mysqli_fetch_array($resultadoMet)){
            $xTitulo    = htmlspecialchars(utf8_encode($filaMet['titulo']));
            $xSlogan    = htmlspecialchars(utf8_encode($filaMet['slogan']));
            $xDes	    = htmlspecialchars(utf8_encode($filaMet['description']));
			$xLogo      = $filaMet['logo'];
            $xKey       = htmlspecialchars(utf8_encode($filaMet['keywords']));
            $xUrl       = $filaMet['url'];
            $xFace1     = $filaMet['face1'];
            $xFace2     = $filaMet['face2'];
            $xIco       = $filaMet['ico'];
    ?>
	<title><?php echo $xTitulo; ?> | <?php echo $xSlogan; ?></title>
    <meta name="description" content="<?php echo $xDes; ?>">
	<meta name="keywords" content="<?php echo $xKey; ?>">
    <meta name="DC.title" content="<?php echo $xTitulo; ?> | <?php echo $xSlogan; ?>">
	<meta name="DC.description" content="<?php echo $xDes; ?>">
	<meta name="geo.region" content="PE-LIM">

	<meta property="og:title" content="<?php echo $xTitulo; ?> | <?php echo $xSlogan; ?>">
	<meta property="og:type" content="company">
	<meta property="og:description" content="<?php echo $xDes; ?>">
	<meta property="og:url" content="<?php echo $xUrl; ?>">
	<meta property="og:image" content="<?php echo $xUrl; ?>cms/img/meta/<?php echo $xFace1; ?>">
	<meta property="og:image" content="<?php echo $xUrl; ?>cms/img/meta/<?php echo $xFace2; ?>">
	<link rel="shortcut icon" href="cms/assets/img/meta/<?php echo $xIco; ?>" />
	<?php
        }
        mysqli_free_result($resultadoMet);
        
    ?>

	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/loader.css" />
	<link rel="stylesheet" type="text/css" href="3dParty/rs-plugin/css/pi.settings.css" />
	<link rel="stylesheet" type="text/css" href="css/slider.css" />
	<link rel="stylesheet" type="text/css" href="css/counters.css" />
	<link rel="stylesheet" type="text/css" href="css/galleries.css" />
	<link rel="stylesheet" type="text/css" href="css/images.css" />
	<link rel="stylesheet" type="text/css" href="css/portfolio.css" />
	<link rel="stylesheet" type="text/css" href="css/alert-boxes.css" />
	<link rel="stylesheet" type="text/css" href="css/animations.css" />
	<link rel="stylesheet" type="text/css" href="3dParty/colorbox/colorbox.css" />
	<link href="css/bootstrap.css" rel="stylesheet" />

	<!--Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,100,300,600,700,800&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>

	<!--Fonts with Icons-->
	<link rel="stylesheet" href="3dParty/fontello/css/fontello.css"/>

	<!--[if lte IE 8]>
	<script src="scripts/respond.min.js"></script>
	<![endif]-->