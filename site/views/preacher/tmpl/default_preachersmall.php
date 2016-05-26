<?php
/*--------------------------------------------------------------------------------------------------------|  www.vdm.io  |------/
    __      __       _     _____                 _                                  _     __  __      _   _               _
    \ \    / /      | |   |  __ \               | |                                | |   |  \/  |    | | | |             | |
     \ \  / /_ _ ___| |_  | |  | | _____   _____| | ___  _ __  _ __ ___   ___ _ __ | |_  | \  / | ___| |_| |__   ___   __| |
      \ \/ / _` / __| __| | |  | |/ _ \ \ / / _ \ |/ _ \| '_ \| '_ ` _ \ / _ \ '_ \| __| | |\/| |/ _ \ __| '_ \ / _ \ / _` |
       \  / (_| \__ \ |_  | |__| |  __/\ V /  __/ | (_) | |_) | | | | | |  __/ | | | |_  | |  | |  __/ |_| | | | (_) | (_| |
        \/ \__,_|___/\__| |_____/ \___| \_/ \___|_|\___/| .__/|_| |_| |_|\___|_| |_|\__| |_|  |_|\___|\__|_| |_|\___/ \__,_|
                                                        | |                                                                 
                                                        |_| 				
/-------------------------------------------------------------------------------------------------------------------------------/

	@version		1.3.2
	@build			26th May, 2016
	@created		22nd October, 2015
	@package		Sermon Distributor
	@subpackage		default_preachersmall.php
	@author			Llewellyn van der Merwe <https://www.vdm.io/>	
	@copyright		Copyright (C) 2015. All Rights Reserved
	@license		GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html 
	
	A sermon distributor that links to Dropbox. 
                                                             
/-----------------------------------------------------------------------------------------------------------------------------*/

// No direct access to this file
defined('_JEXEC') or die('Restricted access'); 

?>
<article class="uk-comment">
    <header class="uk-comment-header">
		<?php if ($this->params->get('preacher_icon')): ?>
			<?php $this->preacher->icon = ($this->preacher->icon) ? $this->preacher->icon : $this->params->get('preacher_default_icon'); ?>
			<?php if ($this->preacher->icon): ?>
				<img class="uk-comment-avatar" src="<?php echo $this->preacher->icon; ?>" alt="<?php echo $this->preacher->name; ?>">
			<?php endif; ?>
		<?php endif; ?>
		<h1 class="uk-comment-title"><?php echo $this->preacher->name; ?></h1>
		<?php if ($this->params->get('preacher_hits') 
				|| ($this->params->get('preacher_website') && $this->preacher->website) 
				|| ($this->params->get('preacher_email') && $this->preacher->email) 
				|| $this->params->get('preacher_sermon_count')): ?>
		<div class="uk-comment-meta">
			<?php if ($this->params->get('preacher_hits')): ?>
				<?php echo JText::_('COM_SERMONDISTRIBUTOR_HITS'); ?>: <?php echo $this->preacher->hits; ?><br />
			<?php endif; ?>
			<?php if ($this->params->get('preacher_sermon_count')): ?>
				<?php echo JText::_('COM_SERMONDISTRIBUTOR_SERMON_COUNT'); ?>: <?php echo $this->sermonTotal; ?><br />
			<?php endif; ?>
			<?php if ($this->params->get('preacher_sermons_download_counter')): ?>
				<?php echo JText::_('COM_SERMONDISTRIBUTOR_TOTAL_DOWNLOADS'); ?>: <?php echo $this->downloadTotal; ?><br />
			<?php endif; ?>
			<?php if ($this->params->get('preacher_website') && $this->preacher->website): ?>
				<i class="uk-icon-external-link"></i> <a href="<?php echo $this->preacher->website; ?>" target="_blank" data-uk-tooltip title="<?php echo JText::_('COM_SERMONDISTRIBUTOR_GO_TO_WEBSITE_OF'); ?> <?php echo $this->preacher->name; ?>"><?php echo $this->preacher->website; ?></a><br />
			<?php endif; ?>
			<?php if ($this->params->get('preacher_email') && $this->preacher->email): ?>
				<i class="uk-icon-envelope-o"></i> <a href="mailto:<?php echo $this->preacher->email; ?>" data-uk-tooltip title="<?php echo JText::_('COM_SERMONDISTRIBUTOR_SEND_EMAIL_TO'); ?> <?php echo $this->preacher->name; ?>"><?php echo $this->preacher->email; ?></a><br />
			<?php endif; ?>
		</div>
		<?php endif; ?>
	 </header>
	<?php if ($this->params->get('preacher_desc') && $this->preacher->description): ?>
		<div class="uk-comment-body"><?php echo $this->preacher->description; ?></div>
	<?php endif; ?>
</article><br />
