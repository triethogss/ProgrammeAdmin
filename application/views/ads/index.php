<div class="span9">
	<h1>Advertisement List</h1>
    <hr>
	<?php echo theme_view('general/alert'); ?>
	<form class="form-search">
        <input type="text" name="query" class="input-large search-query" placeholder="search keyword">
        <button type="submit" class="btn">Search</button>
    </form>
    <a href="<?php echo site_url('ads/create'); ?>" class="btn btn-info">Create a new Advertisement</a>
	<?php if(isset($results)):?>
	<?php echo Template::block('pagination', 'general/pagination', $pagination); ?>
    <table class="table table-striped">
    <thead>
    <tr>
        <th></th>
        <th>Advertisement Name</th>
        <th>Click View</th>
        <th>Type</th>
        <th></th>
        <th>Status</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($results as $ads):?>
    <?php
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

        $total_count    = isset($ads->total_count) ? $ads->total_count : '';

        $status = ($is_publish ? 'Published' : 'inactive');
	?>
    <tr>
        <td>
            <img src="<?php echo $image_s; ?>" height="48px" width="48px">
        </td>
        <td>
        	<a href="<?php echo site_url("ads/view?id={$id}"); ?>">
        	<?php echo $name; ?>
        	</a>
        </td>
        <td>
            <?php echo $total_count; ?>
        </td>
        <td>
            <?php echo $type; ?>
        </td>
        <td>
            <?php //echo $end_at; ?>
        </td>
        <td>
            <?php echo $status; ?>
        </td>
        <td>
            <a href="<?php echo site_url("ads/view?id={$id}"); ?>" class="btn">View</a>
        </td>
    </tr>
    <?php endforeach;?>
    </tbody>
    </table>
    <?php endif;?>
</div>