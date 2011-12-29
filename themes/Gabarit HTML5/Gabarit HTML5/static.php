<?php include(dirname(__FILE__).'/header.php'); ?>

	<section role="main" id="content">

		<article role="article" id="article">
			
			<header>
				<h1><?php $plxShow->staticTitle(); ?></h1>
			</header>
			
			<div class="static-content"><?php $plxShow->staticContent(); ?></div>

		</article>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>

