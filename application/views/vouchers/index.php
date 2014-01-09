<div class="span9">
	<h1>Vouchers List</h1>
    <hr>
	<?php echo theme_view('general/alert'); ?>
	<form class="form-search">
        <input type="text" name="query" class="input-large search-query" placeholder="search keyword">
        <button type="submit" class="btn">Search</button>
    </form>
    <a href="<?php echo site_url('vouchers/create'); ?>" class="btn btn-info">Create a new Voucher</a>
	<?php if(isset($results)):?>
	<?php echo Template::block('pagination', 'general/pagination', $pagination); ?>
    <table class="table table-striped">
    <thead>
    <tr>
        <th></th>
        <th>Voucher Name</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Status</th>
        <!-- <th>Action</th> -->
    </tr>
    </thead>
    <tbody>
    <?php foreach($results as $voucher):?>
    <?php 
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

        $is_publish = ($is_publish ? 'Published' : 'inactive');
	?>
    <tr>
        <td>
            <img src="<?php echo $icon_s; ?>" height="48px" width="48px">
        </td>
        <td>
        	<a href="<?php echo site_url("vouchers/view?id={$id}"); ?>">
        	<?php echo $main_text; ?>
        	</a>
        </td>
        <td>
            <?php echo $start_at; ?>
        </td>
        <td>
            <?php echo $end_at; ?>
        </td>
        <td>
            <?php echo $is_publish; ?>
        </td>
        <!-- <td>
            <button class="btn btn-primary">View</button>
        </td> -->
    </tr>
    <?php endforeach;?>
    </tbody>
    </table>
    <?php endif;?>
</div>