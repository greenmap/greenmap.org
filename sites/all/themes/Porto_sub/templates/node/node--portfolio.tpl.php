<div class="portfolio-title">
	<div class="row">
	  <?php if (!$teaser): ?>
		<div class="portfolio-nav-all col-md-1">
			<a href="../" rel="tooltip" data-original-title="<?php print t('Back to list');?>"><i class="fa fa-th"></i></a>
		</div>
		<?php endif; ?>
		<div class="<?php if(!$teaser) { echo "col-md-10"; } else { echo "col-md-12"; } ?> center">
		  <?php if (!$teaser): ?>
			  <h2 class="shorter"><?php print $title; ?></h2>

			<?php endif; ?>
			<?php if ($teaser): ?>
			  <h2 class="shorter"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
			<?php endif; ?>
		</div>
		<?php if (!$teaser && $node->status == '1'): ?>
		<div class="portfolio-nav col-md-1">
		  <?php if ( porto_node_pagination($node, 'p') != NULL ) : ?>
			<a href="<?php print url('node/' . porto_node_pagination($node, 'p'), array('absolute' => TRUE)); ?>" class="portfolio-nav-prev" rel="tooltip" data-original-title="<?php print t('Previous');?>"><i class="fa fa-chevron-left"></i></a>
			<?php endif; ?>
			<?php if ( porto_node_pagination($node, 'n') != NULL ) : ?>
			<a href="<?php print url('node/' . porto_node_pagination($node, 'n'), array('absolute' => TRUE)); ?>" class="portfolio-nav-next" rel="tooltip" data-original-title="<?php print t('Next');?>"><i class="fa fa-chevron-right"></i></a>
			<?php endif; ?>
		</div>
		<?php endif; ?>
	</div>
</div>
<hr class="tall">
<div class="row portfolio-wrap">
	<div class="col-md-4">
	  <?php if (isset($content['field_image']) && count($content['field_image']['#items']) == 1): ?>
		  <?php print render ($content['field_image']); ?>
		<?php endif; ?>
		<?php if (isset($content['field_image']) && count($content['field_image']['#items']) > 1): ?>
		<div class="owl-carousel" data-plugin-options='{"items": 1, "autoHeight": true}'>
		  <?php print render ($content['field_image']); ?>
		</div>
				<?php endif; ?>
<p>
				<?php if (render($content['field_portfolio_link'])): ?>
				  <a href="<?php print strip_tags(render($content['field_portfolio_link'])); ?>" class="btn btn-primary btn-icon" target="_blank"><i class="fa fa-external-link"></i><?php print  t('go to website'); ?></a> <!--<span class="arrow hlb" data-appear-animation="rotateInUpLeft" data-appear-animation-delay="800"></span>-->
				<?php endif; ?>
</p>

	<ul class="portfolio-details">
				<?php if (render($content['field_start_date'])): ?>
					<li>
						<p><strong><?php print t('Start Date:'); ?></strong></p>

						<ul class="list list-skills icons list-unstyled list-inline">
						<?php print render($content['field_start_date']); ?>
						</ul>
					</li>
				<?php endif; ?>

				<?php if (render($content['field_project_type'])): ?>
					<li>
						<p><strong><?php print t('Type of Project:'); ?></strong></p>
						<ul class="list list-skills icons list-unstyled list-inline">
						<?php print render($content['field_project_type']); ?>
					</ul>
				</li>
				<?php endif; ?>

				<?php if (render($content['field_project_theme'])): ?>
					<li>
						<p><strong><?php print t('Theme of Project:'); ?></strong></p>
						<ul class="list list-skills icons list-unstyled list-inline">
						<?php print render($content['field_project_theme']); ?>
					</ul>
				</li>
				<?php endif; ?>

				<?php if (render($content['field_project_user_group'])): ?>
					<li>
						<p><strong><?php print t('User group:'); ?></strong></p>
						<ul class="list list-skills icons list-unstyled list-inline">
						<?php print render($content['field_project_user_group']); ?>
					</ul>
				</li>
				<?php endif; ?>

				<?php if (render($content['field_project_scale'])): ?>
					<li>
						<p><strong><?php print t('Project Scale:'); ?></strong></p>
						<ul class="list list-skills icons list-unstyled list-inline">
						<?php print render($content['field_project_scale']); ?>
					</ul>
				</li>
				<?php endif; ?>

				<?php if (render($content['field_project_scale_name'])): ?>
					<li>
						<p><strong><?php print t('Project Area:'); ?></strong></p>
						<ul class="list list-skills icons list-unstyled list-inline">
						<?php print render($content['field_project_scale_name']); ?>
					</ul>
				</li>
				<?php endif; ?>

				<?php if (render($content['field_project_funding'])): ?>
					<li>
						<p><strong><?php print t('Funding:'); ?></strong></p>
						<ul class="list list-skills icons list-unstyled list-inline">
						<?php print render($content['field_project_funding']); ?>
					</ul>
				</li>
				<?php endif; ?>

				<?php if (render($content['field_tags'])): ?>
					<li>
						<p><strong><?php print t('Other Tags:'); ?></strong></p>
						<ul class="list list-skills icons list-unstyled list-inline">
						<?php print render($content['field_tags']); ?>
					</ul>
				</li>
				<?php endif; ?>

				<?php if (render($content['field_location_description'])): ?>
					<li>
						<p><strong><?php print t('Location Description:'); ?></strong></p>
						<ul class="list list-skills icons list-unstyled list-inline">
						<?php print render($content['field_location_description']); ?>
					</ul>
				</li>
				<?php endif; ?>
</ul>
				<?php print render($content['field_location']); ?>
	</div>

	<div class="col-md-8">
		<p>Story created by
		<i class="fa fa-tags"></i> <a href="<?php global $base_path; print $base_path; ?>user/<?php print render($node->uid); ?>"><?php print render($node->name); ?></a> in
		<i class="fa fa-calendar"></i> <?php print format_date($node->created, 'custom', 'F j, Y'); ?></p>

		<div class="portfolio-info">

			<?php if (render($content['field_project_description'])): ?>
			<!--<h4><?php print t('Project'); ?> <strong><?php print t('Description'); ?></strong></h4>-->
				<?php print render($content['field_project_description']); ?>
			<?php endif; ?>

			<div class="row">
				<?php
					hide($content['field_portfolio_slider']);
					hide($content['field_portfolio_client']);
					hide($content['field_portfolio_link']);
					hide($content['field_portfolio_description']);
					hide($content['field_image']);
					hide($content['links']);
					print render($content);
				?>

			</div>
		</div>
	</div>
</div>
