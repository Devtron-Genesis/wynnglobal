<?php
global $language;
$languages = language_list('enabled');
//print '<pre>';
//print_r($languages);
//exit;
?>
<ul id="top-navigation" class="nav">
    <?php foreach ($languages[1] as $k => $l) { ?>
    <?php if ($language->language != $l->language) { ?><li class="language"><a href="/<?php if ($l->language != 'en') print $l->language; ?>"><?php print $l->native; ?></a></li><?php } ?>
    <?php } ?>
    <li id="login"><a href="javascript: void(0);" class="login-link">Login</a></li>
    <li id="datetime"></li>
</ul>
