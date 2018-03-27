<?php

/**
 * @file
 * Default theme implementation to present all user profile data.
 *
 * This template is used when viewing a registered member's profile page,
 * e.g., example.com/user/123. 123 being the users ID.
 *
 * Use render($user_profile) to print all profile items, or print a subset
 * such as render($user_profile['user_picture']). Always call
 * render($user_profile) at the end in order to print all remaining items. If
 * the item is a category, it will contain all its profile items. By default,
 * $user_profile['summary'] is provided, which contains data on the user's
 * history. Other data can be included by modules. $user_profile['user_picture']
 * is available for showing the account picture.
 *
 * Available variables:
 *   - $user_profile: An array of profile items. Use render() to print them.
 *   - Field variables: for each field instance attached to the user a
 *     corresponding variable is defined; e.g., $account->field_example has a
 *     variable $field_example defined. When needing to access a field's raw
 *     values, developers/themers are strongly encouraged to use these
 *     variables. Otherwise they will have to explicitly specify the desired
 *     field language, e.g. $account->field_example['en'], thus overriding any
 *     language negotiation rule that was previously applied.
 *
 * @see user-profile-category.tpl.php
 *   Where the html is handled for the group.
 * @see user-profile-item.tpl.php
 *   Where the html is handled for each item in the group.
 * @see template_preprocess_user_profile()
 *
 * @ingroup themeable
 */
?>
<div class="profile"<?php // print $attributes; ?>>
  <?php //print render($user_profile); ?>
	<div class="col-md-4">
    <?php
      hide($user_profile['field_personal_website_link']);
      hide($user_profile['field_facebook_link']);
      hide($user_profile['field_twitter_link']);
      hide($user_profile['field_linkedin_link']);
      hide($user_profile['field_organization_location']);
      hide($user_profile['field_organization_name']);
      hide($user_profile['field_organization_type']);
      hide($user_profile['field_country']);
      hide($user_profile['field_name']);
      hide($user_profile['field_activity_year']);
      hide($user_profile['field_introduction']);
      print render($user_profile);
    ?>
    <p></p>
    <?php if ( render ($user_profile['field_introduction']) ): ?>
    <?php print render ($user_profile['field_introduction']); ?>
    <?php endif; ?>
  </div>
  <div class="col-md-4">
    <span class="thumb-info-social-icons">
      <?php if ( render ($user_profile['field_personal_website_link']) ): ?>
      <a rel="tooltip" data-placement="bottom" target="_blank" href="<?php print render ($user_profile['field_personal_website_link']); ?>" data-original-title="Personal Website"><i class="icon icon-plug"></i><span>Personal Website</span></a>
      <?php endif; ?>

      <?php if ( render ($user_profile['field_facebook_link']) ): ?>
      <a rel="tooltip" data-placement="bottom" target="_blank" href="<?php print render ($user_profile['field_facebook_link']); ?>" data-original-title="Facebook"><i class="icon icon-facebook"></i><span>Facebook</span></a>
      <?php endif; ?>

      <?php if ( render ($user_profile['field_twitter_link']) ): ?>
      <a rel="tooltip" data-placement="bottom" href="<?php print render ($user_profile['field_twitter_link']); ?>" data-original-title="Twitter"><i class="icon icon-twitter"></i><span>Twitter</span></a>
      <?php endif; ?>

      <?php if ( render ($user_profile['field_linkedin_link']) ): ?>
      <a rel="tooltip" data-placement="bottom" href="<?php print render ($user_profile['field_linkedin_link']); ?>" data-original-title="Linkedin"><i class="icon icon-linkedin"></i><span>Linkedin</span></a>
      <?php endif; ?>
    </span>
    <?php if ( render ($user_profile['field_name']) ): ?>
    <?php print render ($user_profile['field_name']); ?>
    <?php endif; ?>
    <?php if ( render ($user_profile['field_activity_year']) ): ?>
    <?php print render ($user_profile['field_activity_year']); ?>
    <?php endif; ?>
    <?php if ( render ($user_profile['field_organization_name']) ): ?>
    <?php print render ($user_profile['field_organization_name']); ?>
    <?php endif; ?>
    <?php if ( render ($user_profile['field_organization_type']) ): ?>
    <?php print render ($user_profile['field_organization_type']); ?>
    <?php endif; ?>
    <?php if ( render ($user_profile['field_country']) ): ?>
    <?php print render ($user_profile['field_country']); ?>
    <?php endif; ?>
  </div>
  <div class="col-md-4">
    <?php if ( render ($user_profile['field_organization_location']) ): ?>
    <?php print render ($user_profile['field_organization_location']); ?>
    <?php endif; ?>
  </div>
</div>
