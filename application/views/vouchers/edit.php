<div class="span9">
	<h1>Edit Voucher Information</h1>
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
    <form action="<?php echo site_url('vouchers/edit'); ?>" method="post" enctype="multipart/form-data" id="VoucherFormCreate">
    <input type="hidden" id="" name="voucher_id" required="required" value="<?php echo $id;?>">
    <table class="table table-striped">
    <thead>
    <tr>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    
    <tr>
        <td>
            Voucher Name
        </td>
        <td>
            <input type="text" id="" name="voucher_main_text" class="span12" required="required" value="<?php echo $main_text; ?>">
        </td>
    </tr>
    <tr>
    	<td>
    		Sub text
    	</td>
        <td>
            <input type="text" id="" name="voucher_sub_text" class="span12" required="required" value="<?php echo $sub_text; ?>">
        </td>
    </tr>
    <tr>
    	<td>
    		Description
    	</td>
        <td>
            <textarea name="voucher_description"><?php echo $description;?></textarea>
        </td>
    </tr>
    <tr>
    	<td>
    		Terms and Condition
    	</td>
        <td>
            <textarea id="" name="voucher_toc"><?php echo $terms_condition;?></textarea>
        </td>
    </tr>
    <tr>
    	<td>
    		Start Date
    	</td>
        <td>
            <div id="voucher_start_date" class="input-append date datetimepicker">
                <input name="voucher_start_date" class="disabled" data-format="dd-MM-yyyy hh:mm:ss" type="text" required="required" value="<?php echo strtotime($start_at) * 1000;?>">
                <span class="add-on">
                    <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                </span>
            </div>
        </td>
    </tr>
    <tr>
    	<td>
    		End Date
    	</td>
        <td>
            <div id="voucher_end_date" class="input-append date datetimepicker">
                <input name="voucher_end_date" class="disabled" data-format="dd-MM-yyyy hh:mm:ss" type="text" required="required" value="<?php echo strtotime($end_at) * 1000;?>">
                <span class="add-on">
                    <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                </span>
            </div>
        </td>
    </tr>
    <tr>
    	<td>
    		Expiry Date
    	</td>
        <td>
            <div id="voucher_expiry_date" class="input-append date datetimepicker">
                <input name="voucher_expiry_at" class="disabled" data-format="dd-MM-yyyy hh:mm:ss" type="text" required="required" value="<?php echo strtotime($voucher_expiry_at) * 1000;?>">
                <span class="add-on">
                    <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                </span>
            </div>
        </td>
    </tr>
    <tr>
    	<td>
    		Quantity
    	</td>
        <td>
            <input type="text" id="" name="voucher_quantity" class="span12" required="required" value="<?php echo $quantity;?>">
        </td>
    </tr>
    <tr>
        <td>
            Voucher Code
        </td>
        <td>
            <input type="text" id="" name="voucher_code" class="span12" placeholder="Optional" value="<?php echo $voucher_code;?>">
        </td>
    </tr>
    <tr>
    	<td>
    		Hong Bao type
    	</td>
        <td>
            <select name="hong_bao_type" id="" required="required">
                <option value="" class=""> --- </option>
                <option value="red" class="" <?php echo $hong_bao_type=='red'?'selected="selected"':'';?>>Red</option>
                <option value="gold" class="" <?php echo $hong_bao_type=='gold'?'selected="selected"':'';?>>Gold</option>
            </select>
        </td>
    </tr>
	<tr>
    	<td>
    		Chance
    	</td>
        <td>
            <input type="text" id="" name="voucher_chance" class="span12" placeholder="default: 1" value="<?php echo $chance;?>">
        </td>
    </tr>
    <tr>
        <td>Icon</td>
        <td>
            <img src="<?php echo $icon_s; ?>" class="img-polaroid"><br>
            <input type="file" id="" name="voucher_icon_image" class="">
        </td>
    </tr>
    <tr>
    	<td>
    		Main Image
    	</td>
    	<td>
			<img src="<?php echo $main_s; ?>" class="img-polaroid"><br>
            <input type="file" id="" name="voucher_main_image" class="">
    	</td>
    </tr>
    </tbody>
    </table>
	
	<h3>Merchant Information</h3>
    <table class="table table-striped">
    	<tr>
    		<td>Merchant Name</td>
    		<td>
                <input type="text" id="" name="merchant_name" class="span12" required="required" value="<?php echo $merchant_name; ?>">
            </td>
    	</tr>
    	<tr>
    		<td>Merchant Location</td>
    		<td>
                <input type="text" id="" name="merchant_location" class="span12" required="required" value="<?php echo $location; ?>">
    		</td>
    	</tr>
    	<tr>
    		<td>Merchant Contact</td>
    		<td>
                <input type="text" id="" name="merchant_contact" class="span12" required="required" placeholder="eg. 67676767" value="<?php echo $contact; ?>">
    		</td>
    	</tr>
    	<tr>
    		<td>Merchant email</td>
    		<td>
                <input type="text" id="" name="merchant_email" class="span12" required="required" placeholder="eg. email@mail.com" value="<?php echo $email; ?>">
    		</td>
    	</tr>
    	<tr>
    		<td>Merchant Website</td>
    		<td>
                <input type="text" id="" name="merchant_website" class="span12" value="<?php echo $website; ?>">
    		</td>
    	</tr>
    </table>
    <a href="<?php echo site_url('vouchers'); ?>" class="btn"><i class="icon-arrow-left"></i> return</a>
    <input type="submit" class="btn btn-success" value="Edit Voucher">
    </form>
    <?php endif;?>
</div>