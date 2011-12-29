<?php include(dirname(__FILE__).'/header.php'); ?>

	<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	<div id="texte"><div id="overflow">

				<div class="cadre"><div class="titre"><?php $plxShow->artTitle(''); ?></div><div class="marge_interne">

				<?php $plxShow->artContent(); ?>
				
				<?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>
				
				<?php include(dirname(__FILE__).'/commentaires.php'); ?>

		</div></div>

	</div></div>

<?php include(dirname(__FILE__).'/footer.php'); ?>


