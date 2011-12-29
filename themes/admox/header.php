<?php if(!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>">

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />

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

<body>
	
	<div id="conteneur">
		
		<div id="CHG"></div><div id="CHD"></div><div id="BH"></div>
		<div id="BG"><div id="BD">
			
			<div id="corps">
				
				<div id="banniere">
					<div id="logo"></div>
					<div id="cadre_banniere"><center>Emplacement Pub ou autre ...</center></div>
				</div>
		
		<ul id="menu">
			<li><a href="./" title="Accueil">Accueil</a></li>
			<li>
				<a href="#">Catégories</a>
				
					<ul>
						<?php $plxShow->catList('','<li id="#cat_id" class="#cat_status"><a href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
					</ul>
				
			</li>
			<?php $plxShow->staticList($plxShow->getLang(''),'<li id="#static_id"><a href="#static_url" class="#static_status" title="#static_name">#static_name</a></li>'); ?>
			<?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
		</ul>
