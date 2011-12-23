<?php if(!defined('PLX_ROOT')) exit; ?>

	<div id="footer">

		<p>&copy; <?php $plxShow->mainTitle('link'); ?> -
			<?php $plxShow->lang('POWERED_BY') ?> <a href="http://pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
			<?php $plxShow->lang('IN') ?> <?php $plxShow->chrono(); ?>
			<a href="http://blog.unesourisetmoi.info" title="Mix des Themes Pluxml.Nostalgie & unesourisetmoi.PureBlueExtensible">    - Theme Modif By Le.NoX</a>
			<?php $plxShow->httpEncoding() ?>
                    </p>
                    <div id="foot-links">
                            <a id="foot-admin" rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/') ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
                            <a id="foot-top" href="<?php echo $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a></div>
	</div>

</body>
</html>
