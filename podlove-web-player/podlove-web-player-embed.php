<!doctype html>
<html <?php language_attributes(); ?>>
<meta charset="<?php bloginfo('charset'); ?>">

<meta name="viewport" content="height=device-height, width=device-width">

<title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>

<base href="<?php echo TEMPLATE_DIR_URL; ?>">

<link rel="canonical" href="<?php echo get_permalink(); ?>">

<link rel="stylesheet" href="mediaelement/mediaelementplayer.css">
<link rel="stylesheet" href="podlove-web-player.css">
<link rel="stylesheet" href="podlove-web-player-embed.css">

<script src="libs/jquery-1.7.2.js"></script>
<script src="mediaelement/mediaelement-and-player.min.js"></script>
<script src="podlove-web-player.js"></script>
<script src="podlove-web-player-embed.js"></script>

<?php echo $mediahtml; ?>

</html>