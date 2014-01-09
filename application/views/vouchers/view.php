<div class="span9">
	<h1>Voucher Information</h1>
	<a href="<?php echo site_url('vouchers'); ?>" class=""><i class="icon-arrow-left"></i> return</a>
    <hr>
	<?php echo theme_view('general/alert'); ?>
	<?php if(isset($results)):?>
    <?php
    	$voucher = $results;

    	$id                = isset($voucher->id) ? $voucher->id : '';
        $main_text         = isset($voucher->main_text) ? $voucher->main_text : '';
        $sub_text          = isset($voucher->sub_text) ? $voucher->sub_text : '';
        $description       = isset($voucher->description) ? $voucher->description : '';
        $terms_condition   = isset($voucher->terms_condition) ? $voucher->terms_condition : '';
        $voucher_expiry_at = isset($voucher->voucher_expiry_at) ? $voucher->voucher_expiry_at : '';
        $quantity          = isset($voucher->quantity) ? $voucher->quantity : '';
        $hong_bao_type     = isset($voucher->hong_bao_type) ? $voucher->hong_bao_type : '';
        $voucher_code      = isset($voucher->voucher_code) ? $voucher->voucher_code : '';
        $chance            = isset($voucher->chance) ? $voucher->chance : '';
        $is_publish        = isset($voucher->is_publish) ? $voucher->is_publish : '';
        $start_at          = isset($voucher->start_at) ? $voucher->start_at : '';
        $end_at            = isset($voucher->end_at) ? $voucher->end_at : '';
        
        $icon_m            = isset($voucher->icon_m) ? $voucher->icon_m : '';
        $icon_s            = isset($voucher->icon_s) ? $voucher->icon_s : '';
        $icon_o            = isset($voucher->icon_o) ? $voucher->icon_o : '';
        $icon_b            = isset($voucher->icon_b) ? $voucher->icon_b : '';
        
        $main_m            = isset($voucher->main_m) ? $voucher->main_m : '';
        $main_s            = isset($voucher->main_s) ? $voucher->main_s : '';
        $main_o            = isset($voucher->main_o) ? $voucher->main_o : '';
        $main_b            = isset($voucher->main_b) ? $voucher->main_b : '';

		$merchant_name = isset($voucher->merchant_name) ? $voucher->merchant_name : '';
		$location      = isset($voucher->location) ? $voucher->location : '';
		$contact       = isset($voucher->contact) ? $voucher->contact : '';
		$email         = isset($voucher->email) ? $voucher->email : '';
		$website       = isset($voucher->website) ? $voucher->website : '';

        $status = ($is_publish ? 'Published' : 'inactive');
	?>
	<h3><?php echo $main_text;?></h3>
	<?php if ($is_publish): ?>
		<span class="label label-success"><?php echo $status; ?></span>
	<?php else: ?>
		<span class="label label-info"><?php echo $status; ?></span>
	<?php endif; ?>
    <table class="table table-striped">
    <thead>
    <tr>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <tr>
    	<td>Icon</td>
    	<td>
			<img src="<?php echo $icon_s; ?>" class="img-polaroid">
    	</td>
    </tr>
    <tr>
    	<td>
    		Sub text
    	</td>
        <td>
        	<?php echo $sub_text;?>
        </td>
    </tr>
    <tr>
    	<td>
    		Description
    	</td>
        <td>
        	<?php echo $description;?>
        </td>
    </tr>
    <tr>
    	<td>
    		Terms and Condition
    	</td>
        <td>
        	<?php echo $terms_condition;?>
        </td>
    </tr>
    <tr>
    	<td>
    		Start Date
    	</td>
        <td>
        	<?php echo $start_at;?>
        </td>
    </tr>
    <tr>
    	<td>
    		End Date
    	</td>
        <td>
        	<?php echo $end_at;?>
        </td>
    </tr>
    <tr>
    	<td>
    		Expiry Date
    	</td>
        <td>
        	<?php echo $voucher_expiry_at;?>
        </td>
    </tr>
    <tr>
    	<td>
    		Quantity
    	</td>
        <td>
        	<?php echo $quantity;?>
        </td>
    </tr>
    <tr>
    	<td>
    		Hong Bao type
    	</td>
        <td>
        	<?php echo $hong_bao_type;?>
        </td>
    </tr>
	<tr>
    	<td>
    		Chance
    	</td>
        <td>
        	<?php echo $chance;?>
        </td>
    </tr>
    <tr>
    	<td>
    		Main Image
    	</td>
    	<td>
			<img src="<?php echo $main_s; ?>" class="img-polaroid">
    	</td>
    </tr>
    </tbody>
    </table>
	
	<h3>Merchant Information</h3>
    <table class="table table-striped">
    	<tr>
    		<td>merchant_name</td>
    		<td>
    			<?php echo $merchant_name; ?>
    		</td>
    	</tr>
    	<tr>
    		<td>location</td>
    		<td>
    			<?php echo $location; ?>
    		</td>
    	</tr>
    	<tr>
    		<td>contact</td>
    		<td>
    			<?php echo $contact; ?>
    		</td>
    	</tr>
    	<tr>
    		<td>email</td>
    		<td>
    			<?php echo $email; ?>
    		</td>
    	</tr>
    	<tr>
    		<td>website</td>
    		<td>
    			<?php echo $website; ?>
    		</td>
    	</tr>
    </table>
    <a href="<?php echo site_url('vouchers'); ?>" class="btn"><i class="icon-arrow-left"></i> return</a>
    <?php if(!$is_publish): ?>
        <a href="<?php echo site_url('vouchers/publish'); ?>" class="btn btn-info publishBtn">Publish</a>
        <a href='<?php echo site_url("vouchers/view?id={$id}&edit=true"); ?>' class="btn btn-warning editBtn">Edit</a>
        <a href="<?php echo site_url('vouchers/delete'); ?>" class="btn btn-danger deleteBtn">Delete</a>
    <?php endif; ?>
    <?php endif;?>
</div>