<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="page">
	<div id="content">
		<h2 class="title"><?php $plxShow->artTitle(''); ?></h2>
		<p class="info_top"><?php $plxShow->lang('WRITTEN_BY') ?> <?php $plxShow->artAuthor() ?> | <?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?></p>
		<p class="date"><?php $plxShow->artDate('<span>#num_day</span><br />#num_month | #num_year(2)'); ?></p>		
		<div class="post"><?php $plxShow->artContent(); ?></div>
		<?php  eval($plxShow->callHook('caroufredselArticle'));?>
		<?php eval($plxShow->callHook('MySocialButtons')) ?>

		<?php $plxShow->artAuthorInfos('<div class="infos">#art_authorinfos</div>'); ?>
		<?php if(isset($_SESSION['user'])) : ?>
                 <a href="<?php $plxShow->racine(); ?>core/admin/article.php?a=<?php printf("%04d", $plxShow->artId())?>"> Éditer </a>
		<?php endif; ?>

		<p class="info_bottom"><?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?></p>

		<?php include(dirname(__FILE__).'/commentaires.php'); # On insere les commentaires ?>


	</div>
	<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
</div>

<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>


