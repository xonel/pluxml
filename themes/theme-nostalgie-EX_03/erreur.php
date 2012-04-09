<?php include(dirname(__FILE__).'/header.php'); # On insere le header ?>
<div id="page">
	<div id="content">
		<h2 class="title"><?php $plxShow->lang('ERROR') ?> :</h2>
		<div class="post">
			<p class="center"><?php $plxShow->erreurMessage(); ?></p>
			<p class="center"><a href="./" title="<?php $plxShow->lang('BACKTO_HOME') ?>"><?php $plxShow->lang('BACKTO_HOME') ?></a></p>
		</div>
	</div>
	<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
</div>
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>
