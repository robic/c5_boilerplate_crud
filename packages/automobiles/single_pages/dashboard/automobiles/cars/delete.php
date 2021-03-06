<?php defined('C5_EXECUTE') or die(_("Access Denied."));

$dh = Loader::helper('concrete/dashboard');
$ih = Loader::helper('concrete/interface');
?>

<?php echo $dh->getDashboardPaneHeaderWrapper('Delete Car', false, 'span9 offset1', false); ?>

	<div class="ccm-pane-body">

		<h3>Are you sure you wish to permanently delete the following car?</h3>
	
		<br><br>
	
		<table class="form-table">
			<tr>
				<td class="right">Body Type:</td>
				<td><?php echo htmlentities($body_type_name); ?></td>
			</tr>
			<tr>
				<td class="right">Manufacturer:</td>
				<td><?php echo htmlentities($manufacturer_name); ?></td>
			</tr>
			<tr>
				<td class="right">Model Year:</td>
				<td><?php echo htmlentities($year); ?></td>
			</tr>
			<tr>
				<td class="right">Name:</td>
				<td><?php echo htmlentities($name); ?></td>
			</tr>
		</table>
		
	</div>
	
	<div class="ccm-pane-footer">
	
		<form method="post" action="<?php echo $this->action('delete', (int)$id); ?>" style="margin: 0;">
			<?php echo $token; ?>
			<?php echo $ih->submit('Delete', false, 'right', 'error'); ?>
			<?php echo $ih->button('Cancel', $this->action("view?type={$body_type_id}"), 'left'); ?>
		</form>
		
	</div>

<?php echo $dh->getDashboardPaneFooterWrapper(); ?>
