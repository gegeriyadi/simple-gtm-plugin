<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://gegeriyadi.com/
 * @since      1.0.0
 *
 * @package    Simple_Gtm_Plugin
 * @subpackage Simple_Gtm_Plugin/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<?php
if ( isset( $_GET['settings-updated'] ) ) {
	add_settings_error( 'simple_gtm_messages', 'simple_gtm_message', __( 'Settings Saved', 'simple-gtm-group' ), 'updated' );
}

settings_errors( 'simple_gtm_messages' );
?>

<div class="wrap">
<h1>Simple GTM Plugin</h1>

<form action="options.php" method="POST">
	<?php settings_fields( 'simple-gtm-group' ); ?>
	<?php do_settings_sections( 'simple-gtm-group' ); ?>

<table class="form-table">
	<tbody>
		<tr>
			<th scope="row"><label for="simplegtm_containerid">Your GTM Container ID</label></th>
			<td><input type="text" name="simplegtm_containerid" id="simplegtm_containerid" value="<?= $containerId ?>" placeholder="GTM-XXXXXXX"></td>
		</tr>
	</tbody>
</table>

<?php submit_button(); ?>
</form>

</div>