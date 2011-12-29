<?php include(dirname(__FILE__).'/header.php'); ?>

	<section role="main" id="content">

		<article role="article" id="article">
			
			<header>
				<h1><?php $plxShow->lang('ERROR') ?> :</h1>
			</header>
			
			<div class="error-content"><?php $plxShow->erreurMessage(); ?></div>

		</article>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>



