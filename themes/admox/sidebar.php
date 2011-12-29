<?php if(!defined('PLX_ROOT')) exit; ?>

	<div id="MV">

		<div class="en_tete_MV"><?php $plxShow->lang('CATEGORIES') ?></div>

			<?php $plxShow->catList('','<a class="lien_MV" href="#cat_url" title="#cat_name">#cat_name</a>'); ?>

		<div class="bottom_MV"></div>
		<div class="marge_MV"></div>

		<div class="en_tete_MV"><?php $plxShow->lang('ARCHIVES') ?></div>

            <?php $plxShow->archList('<a class="lien_MV" href="#archives_url" title="#archives_name">#archives_name</a>'); ?>

        <div class="bottom_MV"></div>
		<div class="marge_MV"></div>

        <div class="en_tete_MV"><?php $plxShow->lang('TAGS') ?></div>

			<?php $plxShow->tagList('<a class="lien_MV" href="#tag_url" title="#tag_name">#tag_name</a>', 20); ?>

		<div class="bottom_MV"></div>
		<div class="marge_MV"></div>

		<div class="en_tete_MV"><?php $plxShow->lang('LAST_ARTICLES') ?></div>

			<?php $plxShow->lastArtList('<a class="lien_MV" href="#art_url" title="#art_title">#art_title</a>'); ?>

		<div class="bottom_MV"></div>
		<div class="marge_MV"></div>

		<div class="en_tete_MV"><?php $plxShow->lang('LAST_COMMENTS') ?></div>

		<?php $plxShow->lastComList('<a class="lien_MV" href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a>'); ?>

		<div class="bottom_MV"></div>
		<div class="marge_MV"></div>

	</div>
