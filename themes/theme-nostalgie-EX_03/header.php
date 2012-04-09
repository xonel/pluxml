<?php if(!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title><?php $plxShow->pageTitle(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>	
	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/style.css" media="screen" />
	<?php $plxShow->templateCss() ?>
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />

<!--Bouton haut de page -->
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">google.load('jquery', '1.4.2');</script>
    <script type="text/javascript">
        //<![CDATA[
        $(window).scroll(function() {
        if($(window).scrollTop() == 0){
        $('#scrollToTop').fadeOut("fast");
        } else {
            if($('#scrollToTop').length == 0){
            $('body').append('<div id="scrollToTop">'+
            '<a href="#">&and;</a>'+
            '</div>');
        }
        $('#scrollToTop').fadeIn("fast");
        }
        });
        $('#scrollToTop a').live('click', function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop: 0}, 'slow');
        });
        //]]>
    </script>
<!--Fin du bouton haut de page -->

</head>

<body>

<div id="toplinks">
	<div id="toplinks_inner">
	<a id="foot-admin" rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/') ?>" title="<?php $plxShow?>"><?php $plxShow ?></a>
	<a href="<?php $plxShow->urlRewrite('feed.php?atom') ?>" title="Fil Atom des articles">RSS</a>	

	</div>
</div>

<div id="top">
	<div id="header">
		<h1><?php $plxShow->mainTitle('link'); ?></h1>
		<p><?php $plxShow->subTitle(); ?></p>
	</div>
	<div id="menu">
		<ul class="left">

			<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li id="#static_id"><a href="#static_url" class="#static_status" title="#static_name">#static_name</a></li>'); ?>
			<?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
		</ul>
		<div class="clearer"></div>
	</div>
</div>
