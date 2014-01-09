<div class="col-lg-12">
	<h4>Notification will be published to all devices</h4>
	<form class="form-horizontal formNotification" action="<?php echo site_url('notifications/create'); ?>" method="post" role="form">
		<div class="form-group">
			<label for="message" class="col-sm-2 control-label">Message</label>
			<div class="col-sm-10">
				<textarea name="message" class="form-control" id="" cols="20" rows="5" required="required"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="message" class="col-sm-2 control-label"></label>
			<div class="col-sm-10">
				<input type="submit" class="btn btn-primary" value="Send Notification">
			</div>
		</div>
	</form>
</div>