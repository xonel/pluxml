<?php include(dirname(__FILE__).'/header.php'); ?>

	<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	<div id="texte"><div id="overflow">

				<div class="cadre"><div class="titre"><?php $plxShow->lang('ERROR') ?> :</div><div class="marge_interne">

				<?php $plxShow->erreurMessage(); ?>

		</div></div>

	</div></div>

<?php include(dirname(__FILE__).'/footer.php'); ?>


