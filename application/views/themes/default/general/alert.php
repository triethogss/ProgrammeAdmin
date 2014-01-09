<?php if(isset($message) && !empty($message)):?>
<div class="obox-alert obox-info" data-uk-alert>
	<a href="" class="uk-alert-close uk-close"></a>
	<?php echo $message;?>
</div>
<?php endif;?>

<?php if(isset($success_message) && !empty($success_message)):?>
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php echo $success_message; ?>
</div>
<?php endif;?>

<?php if(isset($warning_message) && !empty($warning_message)):?>
<div class="alert">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php echo $error_message; ?>
</div>
<?php endif;?>

<?php if(isset($error_message) && !empty($error_message)):?>
<div class="alert alert-warning alert-dismissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php echo $error_message; ?>
</div>
<?php endif;?>

<?php if(isset($danger_message) && !empty($danger_message)):?>
<div class="obox-alert obox-failure" data-uk-alert>
	<a href="" class="uk-alert-close uk-close"></a>
	<?php echo $danger_message;?>
</div>
<?php endif;?>