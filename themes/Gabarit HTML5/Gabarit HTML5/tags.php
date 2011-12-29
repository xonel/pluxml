<?php include(dirname(__FILE__).'/header.php'); ?>

	<section role="main" id="content">

		<article role="article" id="article">

			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
			
			<header>
				<h1><?php $plxShow->artTitle('link'); ?></h1>
				<p class="art-topinfos"><?php $plxShow->lang('WRITTEN_BY') ?> <?php $plxShow->artAuthor() ?> - <?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></p>
			</header>
			
			<div class="art-chapo"><?php $plxShow->artChapo(); ?></div>
				
			<footer>
				<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> - <?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?> - <?php $plxShow->artNbCom(); ?>
			</footer>
			
			<?php endwhile; ?>

			<p id="pagination"><?php $plxShow->pagination(); ?></p>

		</article>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>
