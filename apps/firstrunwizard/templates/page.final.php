<?php
/**
 * @var array $_
 * @var \OCP\IL10N $l
 * @var \OCP\Defaults $theme
 */
?>

<div class="page content-final" data-title="<?php p($l->t('Get help')); ?>" data-subtitle="">
	<div class="description">
		<div class="description-block">
			<h3 class="icon-info"><?php p($l->t('Get more information')); ?></h3>
			<p><?php p($l->t('The Deecloud documentation for home users:')); ?></p>
			<ul>
				<li><a href="<?php p(link_to_docs('user-')) ?>" target="_blank" rel="noreferrer noopener"><?php p($l->t('User manual')); ?></a></li>
				<li><a href="<?php p(link_to_docs('admin-')) ?>" target="_blank" rel="noreferrer noopener"><?php p($l->t('Admin manual')); ?></a></li>
				<li><a href="<?php p(link_to_docs('developer-')) ?>" target="_blank" rel="noreferrer noopener"><?php p($l->t('Developer manual')); ?></a></li>
			</ul>
			<p><?php p($l->t('You can also ask for help in our community support channels:')); ?></p>
			<ul>
				<li><a href="http://netlinex.com" target="_blank" rel="noreferrer noopener"><?php p($l->t('the Deecloud forums')); ?></a></li>
				<li><a href="#" target="_blank" rel="noreferrer noopener"><?php p($l->t('the deecloud IRC chat channel on freenode.net')); ?></a></li>
			</ul>
		</div>
	</div>
	<div class="description">
		<div class="description-block">
			<h3 class="icon-user"><?php p($l->t('Start contributing')); ?></h3>
			<p><?php p($l->t('Do you want to get a certain improvement in Deecloud? Did you find a problem? Do you want to report it to Deecloud?')); ?></p>
			<a href="http://netlinex.com" class="button" target="_blank" rel="noreferrer noopener"><?php p($l->t('Become member of the deecloud')); ?></a>
		</div>
		<div class="description-block">
			<h3 class="icon-link"><?php p($l->t('Enterprise support')); ?></h3>
			<p><?php p($l->t('If you run Deecloud in a mission critical environment with large numbers of users and big amounts of data and need the certainty of support from the experts behind the Deecloud technology, an Enterprise Subscription from Deecloud is available with email and phone support.')); ?></p>
			<a href="http://netlinex.com" class="button"target="_blank" rel="noreferrer noopener" ><?php p($l->t('Get enterprise support')); ?></a>
		</div>
	</div>
</div>
