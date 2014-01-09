<div class="span9">
	<h1>Advertisement Information</h1>
	<a href="<?php echo site_url('ads'); ?>" class=""><i class="icon-arrow-left"></i> return</a>
    <hr>
	<?php echo theme_view('general/alert'); ?>
	<?php if(isset($results)):?>
    <?php
    	$ads = $results;

        $id             = isset($ads->id) ? $ads->id : '';
        $name           = isset($ads->name) ? $ads->name : '';
        $type           = isset($ads->type) ? $ads->type : '';
        $video_url      = isset($ads->video_url) ? $ads->video_url : '';
        $reward_def     = isset($ads->reward_def) ? $ads->reward_def : '';
        $chance         = isset($ads->chance) ? $ads->chance : '';
        $is_publish     = isset($ads->is_publish) ? $ads->is_publish : '';
        $start_at       = isset($ads->start_at) ? $ads->start_at : '';
        $end_at         = isset($ads->end_at) ? $ads->end_at : '';
        $ios_url        = isset($ads->ios_url) ? $ads->ios_url : '';
        $android_url    = isset($ads->android_url) ? $ads->android_url : '';
        $website_url    = isset($ads->website_url) ? $ads->website_url : '';
        
        $image_m        = isset($ads->image_m) ? $ads->image_m : '';
        $image_s        = isset($ads->image_s) ? $ads->image_s : '';
        $image_b        = isset($ads->image_b) ? $ads->image_b : '';
        $image_o        = isset($ads->image_o) ? $ads->image_o : '';
        
        $banner_image_m = isset($ads->banner_image_m) ? $ads->banner_image_m : '';
        $banner_image_s = isset($ads->banner_image_s) ? $ads->banner_image_s : '';
        $banner_image_o = isset($ads->banner_image_o) ? $ads->banner_image_o : '';
        $banner_image_b = isset($ads->banner_image_b) ? $ads->banner_image_b : '';

        $status = ($is_publish ? 'Published' : 'inactive');
	?>
    <h3><?php echo $name;?></h3>
    <?php if ($is_publish): ?>
        <span class="label label-success"><?php echo $status; ?></span>
    <?php else: ?>
        <span class="label label-info"><?php echo $status; ?></span>
    <?php endif; ?>
    <br>
    <br>
    <img src="<?php echo $image_s; ?>">
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
    		Name
    	</td>
        <td>
        	<?php echo $name;?>
        </td>
    </tr>
    <tr>
        <td>
            Type
        </td>
        <td>
            <?php echo $type;?>
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
    		Status
    	</td>
        <td>
        	<?php echo $status;?>
        </td>
    </tr>
    <tr>
        <td>
            Rewards
        </td>
        <td>
            <?php foreach($reward_def as $reward): ?>
                <div><?php echo $reward->quantity, ' - ', getItemName($reward->item_id, $itemsinfo); ?></div>
            <?php endforeach;?>
        </td>
    </tr>
    </tbody>
    </table>
    <br>
    <h3>Advertisement Information</h3>
    <table class="table table-striped">
    <?php switch ($type):
        case ADS_VIDEO:?>
        <tr>
            <td>Video URL</td>
            <td><?php echo $video_url; ?></td>
        </tr>
        <?php break;
        case ADS_WEBSITE:?>
        <tr>
            <td>Banner</td>
            <td>
                <img src="<?php echo $banner_image_s; ?>">                
            </td>
        </tr>
        <tr>
            <td>Website URL</td>
            <td><?php echo $website_url; ?></td>
        </tr>
        <?php break;
        case ADS_APP:?>
        <tr>
            <td>Banner</td>
            <td>
                <img src="<?php echo $banner_image_s; ?>">                
            </td>
        </tr>
        <tr>
            <td>Android URL</td>
            <td><?php echo $android_url; ?></td>
        </tr>
        <tr>
            <td>Iphone URL</td>
            <td><?php echo $ios_url; ?></td>
        </tr>
    <?php break; 
    endswitch; ?>
    </table>
    <a href="<?php echo site_url('ads'); ?>" class="btn"><i class="icon-arrow-left"></i> return</a>
    <?php if(!$is_publish): ?>
        <a href='<?php echo site_url("ads/view?id={$id}&edit=true"); ?>' class="btn btn-warning editBtn">Edit</a>
        <a href="<?php echo site_url('ads/publish'); ?>" class="btn btn-info publishBtn">Publish</a>
    <?php endif; ?>
    <?php endif;?>
</div>