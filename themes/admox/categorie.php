<?php include(dirname(__FILE__).'/header.php'); ?>

	<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	<div id="texte"><div id="overflow">

			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
				<div class="cadre"><div class="titre"><?php $plxShow->artTitle('link'); ?></div><div class="marge_interne">

				<?php $plxShow->artChapo(); ?>

			<?php endwhile; ?>

			<p id="pagination"><?php $plxShow->pagination(); ?></p>

		</div></div>

	</div></div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
