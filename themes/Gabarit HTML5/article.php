<?php include(dirname(__FILE__).'/header.php'); ?>

	<section role="main" id="content">

		<article role="article" id="article">
			
			<header>
				<h1><?php $plxShow->artTitle(''); ?></h1>
				<p class="art-topinfos"><?php $plxShow->lang('WRITTEN_BY') ?> <?php $plxShow->artAuthor() ?> - <?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></p>
			</header>
			
			<div class="art-content"><?php $plxShow->artContent(); ?></div>
				
			<footer>
				<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> - <?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?> - <?php $plxShow->artNbCom(); ?>
				
				<?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>
				
				<?php include(dirname(__FILE__).'/commentaires.php'); ?>
			</footer>

			<p id="pagination"><?php $plxShow->pagination(); ?></p>

		</article>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>


