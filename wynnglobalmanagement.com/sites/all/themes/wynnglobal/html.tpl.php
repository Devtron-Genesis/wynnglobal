<!doctype html>
<!--[if lt IE 7 ]> <html lang="<?php print $language->language ?>" class="no-js ie ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php print $language->language ?>" class="no-js ie ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php print $language->language ?>" class="no-js ie ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php print $language->language ?>" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php print $language->language ?>" class="no-js"> <!--<![endif]-->
	<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
        
        <?php print $head; ?>
        <title>
        	<?php

        	$uri = $_SERVER['REQUEST_URI'];
        	$urllastchr = substr($uri, -1);
			if ($urllastchr == 's') {
				$site_title = "Español | Wynn Global Management.";
			} elseif ($urllastchr == 't') {
				$site_title = "Portuguese | Wynn Global Management.";
			} elseif ($urllastchr == '/') {
				$site_title = $head_title;
			}
			
        	print $site_title; ?>
    	</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="/<?php print drupal_get_path('theme', 'wynnglobal'); ?>/assets/images/favicon.ico" />
        <link rel="apple-touch-icon" href="/<?php print drupal_get_path('theme', 'wynnglobal'); ?>/assets/images/apple-touch-icon.png" />
        
		<!--[if ! lte IE 6]><!-->
        <?php print $styles ?>
        <!--<![endif]-->
        <!--[if lte IE 6]>
        <link rel="stylesheet" href="http://universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen, projection" />
        <link rel="stylesheet" href="/<?php print drupal_get_path('theme', 'wynnglobal'); ?>/assets/css/ie6.css" media="screen, projection" />
        <![endif]-->
        
        <script src="/<?php print drupal_get_path('theme', 'wynnglobal'); ?>/assets/js/libs/modernizr-1.6.min.js"></script>
	</head>
    <body class="<?php print $classes; ?>">
        <?php print $page_top; ?>
        <?php print $page; ?>
        <?php print $page_bottom; ?>
        <?php print $scripts; ?>
        <!--[if lt IE 7 ]>
        <script src="/<?php print drupal_get_path('theme', 'wynnglobal'); ?>/assets/js/libs/dd_belatedpng.js"></script>
        <script>DD_belatedPNG.fix('img.png'); DD_belatedPNG.fix('.png-bg');</script>
        <![endif]-->
        <script>
            /*var _gaq = [['_setAccount', 'UA-22831197-1'], ['_trackPageview']];
            (function(d, t) {
                var g = d.createElement(t),
                s = d.getElementsByTagName(t)[0];
                g.async = true;
                g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                s.parentNode.insertBefore(g, s);
            })(document, 'script');*/
        </script>
    </body>
</html>