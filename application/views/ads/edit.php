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
    <form action="<?php echo site_url('ads/edit'); ?>" method="post" enctype="multipart/form-data" id="AdsFormCreate">
    <input type="hidden" name="ads_id" required="required" value="<?php echo $id;?>">
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
            Advertisement Name
        </td>
        <td>
            <input type="text" id="" name="ads_name" class="span12" required="required" value="<?php echo $name;?>">
        </td>
    </tr>
    <tr>
        <td>
            Advertisement Image
        </td>
        <td>
            <img src="<?php echo $image_s; ?>"><br>
            <input type="file" id="" name="ads_image" class="">
        </td>
    </tr>
    <tr>
        <td>
            Type
        </td>
        <td>
            <div>
                <input type="text" name="ads_type" value="<?php echo $type;?>" readonly="readonly">
            <!-- <select name="ads_type" required="required">
                <option value="">-</option><?php echo $type;?>
                <option value="<?php echo ADS_VIDEO; ?>" <?php echo ($type == ADS_VIDEO? 'selected="selected"': ''); ?>><?php echo ADS_VIDEO ?></option>
                <option value="<?php echo ADS_WEBSITE; ?>" <?php echo ($type == ADS_WEBSITE? 'selected="selected"': ''); ?>><?php echo ADS_WEBSITE ?></option>
                <option value="<?php echo ADS_APP; ?>" <?php echo ($type == ADS_APP? 'selected="selected"': ''); ?>><?php echo ADS_APP ?></option>
            </select> -->
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Start Date
        </td>
        <td>
            <div id="ads_start_date" class="input-append date datetimepicker">
                <input name="ads_start_date" data-format="dd-MM-yyyy hh:mm:ss" type="text" required="required" value="<?php echo strtotime($start_at) * 1000;?>">
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
            <div id="ads_end_date" class="input-append date datetimepicker">
                <input name="ads_end_date" data-format="dd-MM-yyyy hh:mm:ss" type="text" required="required" value="<?php echo strtotime($end_at) * 1000;?>">
                <span class="add-on">
                    <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                </span>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Advert Chance
        </td>
        <td>
            <input type="text" id="" name="ads_chance" class="span12" required="required" value="<?php echo $chance; ?>">
        </td>
    </tr>
    <tr>
        <td>
            Rewards
        </td>
        <td>
            <div class="ads_reward_container">
            <?php foreach($reward_def as $reward): ?>
                <!-- <div><?php echo $reward->quantity, ' - ', getItemName($reward->item_id, $itemsinfo); ?></div> -->
                <div class="ads_reward_box">
                <select name="ads_reward_id[]" required="required">
                    <option value="">-</option>
                    <?php foreach ($itemsinfo as $item):
                        $selected = '';
                        if ($reward->item_id == $item->id) {
                            $selected = 'selected="selected"';
                        }
                    ?>
                        <option value="<?php echo $item->id; ?>" <?php echo $selected; ?>><?php echo $item->name; ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="text" name="ads_reward_quantity[]" class="span3" required="required" value="<?php echo $reward->quantity; ?>">
                </div>
            <?php endforeach; ?>
            </div>
            <button type="button" class="btn btn-inverse addAdsRewardBtn" ><i class="icon-plus icon-white"></i> Add Reward</button>
        </td>
    </tr>
    </tbody>
    </table>
    <br>
    <h3>Advertisement Information</h3>
    <table class="table table-striped">
    <?php switch ($type):
        case ADS_VIDEO:
    ?>
        <tr>
            <td>Video URL</td>
            <td>
                <input type="text" id="" name="ads_video_url" class="span12" value="<?php echo $video_url; ?>">
            </td>
        </tr>
    <?php break;
        case ADS_WEBSITE:
    ?>
        <tr>
            <td>Banner</td>
            <td>
                <img src="<?php echo $banner_image_s; ?>"><br>
                <input type="file" id="" name="ads_website_banner">
            </td>
        </tr>
        <tr>
            <td>Website URL</td>
            <td>
                <input type="text" id="" name="ads_website_url" class="span12" value="<?php echo $website_url; ?>">
            </td>
        </tr>
    <?php break;
        case ADS_APP:
    ?>
        <tr>
            <td>Banner</td>
            <td>
                <img src="<?php echo $banner_image_s; ?>"><br>
                <input type="file" id="" name="ads_app_banner">
            </td>
        </tr>
        <tr>
            <td>Android URL</td>
            <td>
                <input type="text" id="" name="ads_android_url" class="span12" value="<?php echo $android_url; ?>">
            </td>
        </tr>
        <tr>
            <td>Iphone URL</td>
            <td>
                <input type="text" id="" name="ads_ios_url" class="span12" value="<?php echo $ios_url; ?>">
            </td>
        </tr>
    <?php break; endswitch; ?>
    </table>
    <a href="<?php echo site_url('ads'); ?>" class="btn"><i class="icon-arrow-left"></i> return</a>
    <input type="submit" class="btn btn-success" value="Edit Voucher">
    </form>
    <?php endif; ?>
    <div class="deleteRewardTpl" style="display:none">
        <button class="btn btn-danger deleteRewardBtn"><i class="icon-minus icon-white"></i> Delete</button>
    </div>
</div>