<?php if(!defined('PLX_ROOT')) exit; ?>

	<footer role="contentinfo" id="footer">

		<p>
			&copy; <?php $plxShow->mainTitle('link'); ?> -
			<?php $plxShow->lang('POWERED_BY') ?> <a href="http://pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
			<?php $plxShow->lang('IN') ?> <?php $plxShow->chrono(); ?>
			<?php $plxShow->httpEncoding() ?>
		</p>
		
		<nav>
			<ul>
				<li><a class="admin" rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/') ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a></li>
				<li><a class="top" href="<?php echo $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a></li>
			</ul>
		</nav>
			
	</footer>
	
	<!-- Javascript -->

</body>
</html>
