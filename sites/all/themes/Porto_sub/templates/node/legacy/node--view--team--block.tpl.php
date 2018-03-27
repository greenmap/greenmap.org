<li class="col-md-3 isotope-item <?php print str_replace('&amp;', 'and', str_replace(',-', ' ', str_replace(' ', '-',strip_tags(render($content['field_team_category']))))); ?>">
	<div class="team-item img-thumbnail">
		<a href="<?php print $node_url; ?>" class="thumb-info team">
			<?php print render ($content['field_image']); ?>
			<span class="thumb-info-title">
				<span class="thumb-info-inner"><?php print $title; ?></span>
				<span class="thumb-info-type"><?php print str_replace('-', ' ', strip_tags(render($content['field_team_category']))); ?></span>
			</span>
		</a>
		<span class="thumb-info-caption">
		  <?php if ($content['field_team_bio']): ?>
			<p><?php print render ($content['field_team_bio']); ?></p>
			<?php endif; ?>
			<span class="thumb-info-social-icons">

				<?php if ( render ($content['field_personal_website_link']) ): ?>
				<a rel="tooltip" data-placement="bottom" target="_blank" href="<?php print render ($content['field_personal_website_link']); ?>" data-original-title="Personal Website"><i class="icon icon-plug"></i><span>Personal Website</span></a>
				<?php endif; ?>

			  <?php if ( render ($content['field_facebook_link']) ): ?>
				<a rel="tooltip" data-placement="bottom" target="_blank" href="<?php print render ($content['field_facebook_link']); ?>" data-original-title="Facebook"><i class="icon icon-facebook"></i><span>Facebook</span></a>
				<?php endif; ?>

				<?php if ( render ($content['field_twitter_link']) ): ?>
				<a rel="tooltip" data-placement="bottom" target="_blank" href="<?php print render ($content['field_twitter_link']); ?>" data-original-title="Twitter"><i class="icon icon-twitter"></i><span>Twitter</span></a>
				<?php endif; ?>

				<?php if ( render ($content['field_linkedin_link']) ): ?>
				<a rel="tooltip" data-placement="bottom" target="_blank" href="<?php print render ($content['field_linkedin_link']); ?>" data-original-title="Linkedin"><i class="icon icon-linkedin"></i><span>Linkedin</span></a>
				<?php endif; ?>
				<p>test</p>

			</span>
		</span>
	</div>
</li>
