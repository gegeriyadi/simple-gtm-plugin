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

<div class="wrap">
<h1>Simple GTM Plugin</h1>

<form method="POST">

<table class="form-table">
	<tbody>
		<tr>
			<th scope="row">Your GTM Container ID</th>
			<td><input type="text" name="containerId" id="containerId" value="<?= $containerId ?>" placeholder="GTM-XXXXXXX"></td>
		</tr>
	</tbody>
</table>

<button class="button-primary">Save Changes</button>

</form>

</div>