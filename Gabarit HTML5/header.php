<?php if(!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>"> <![endif]-->
<!--[if gt IE 9]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>"><!--<![endif]-->

<head>
	
	<meta charset="<?php $plxShow->charset(); ?>" />

	<title><?php $plxShow->pageTitle(); ?></title>

	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>

	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/style.css" />
	<meta name="viewport" content="width=device-width, height=device-height" />
	<?php $plxShow->templateCss() ?>

	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />

</head>

<body role="document" id="top">
	
	<header role="banner" id="header">
		
		<ul>
			<li><a href="<?php $plxShow->urlRewrite('#nav') ?>" title="<?php $plxShow->lang('GOTO_MENU') ?>"><?php $plxShow->lang('GOTO_MENU') ?></a></li>
			<li><a href="<?php $plxShow->urlRewrite('#section') ?>" title="<?php $plxShow->lang('GOTO_CONTENT') ?>"><?php $plxShow->lang('GOTO_CONTENT') ?></a></li>
		</ul>

		<h1><?php $plxShow->mainTitle('link'); ?></h1>
		
		<nav role="navigation" id="menu">
			<ul>
				<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li id="#static_id" class="#static_status"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
				<?php $plxShow->pageBlog('<li id="#page_id" class="#page_status"><a href="#page_url" title="#page_name">#page_name</a></li>'); ?>
				
				<li><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>"><?php $plxShow->lang('ARTICLES') ?></a></li>
				<li><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?php $plxShow->lang('COMMENTS') ?></a></li>
			</ul>
		</nav>

	</header>
