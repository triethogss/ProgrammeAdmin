<div class="span9">
	<h1>Create New Advertisement</h1>
    <hr>
    <form method="post" enctype="multipart/form-data" id="AdsFormCreate">
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
			<input type="text" id="" name="ads_name" class="span12" required="required">
        </td>
    </tr>
    <tr>
    	<td>
    		Advertisement Image
    	</td>
        <td>
			<input type="file" id="" name="ads_image" class="" required="required">
        </td>
    </tr>
    <tr>
    	<td>
    		Start Date
    	</td>
        <td>
			<div id="datetimepicker1" class="input-append date datetimepicker">
				<input name="ads_start_date" data-format="dd-MM-yyyy hh:mm:ss" type="text" required="required">
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
			<div id="datetimepicker1" class="input-append date datetimepicker">
				<input name="ads_end_date" data-format="dd-MM-yyyy hh:mm:ss" type="text" required="required">
				<span class="add-on">
					<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
				</span>
			</div>
        </td>
    </tr>
    <tr>
        <td>
            Advertisement Type
        </td>
        <td>
            <div>
            <select name="ads_type" required="required">
                <option value="">-</option>
                <option value="<?php echo ADS_VIDEO; ?>"><?php echo ADS_VIDEO ?></option>
                <option value="<?php echo ADS_WEBSITE; ?>"><?php echo ADS_WEBSITE ?></option>
                <option value="<?php echo ADS_APP; ?>"><?php echo ADS_APP ?></option>
            </select>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Advert Chance
        </td>
        <td>
            <input type="text" id="" name="ads_chance" class="span12">
            <p class="muted">Default: 1</p>
        </td>
    </tr>

    <tr class="ads_type_video">
        <td>
            Video URL
        </td>
        <td>
            <input type="text" id="" name="ads_video_url" class="span12">
        </td>
    </tr>
    <tr class="ads_type_website">
    	<td>
            Website URL
    	</td>
        <td>
			<input type="text" id="" name="ads_website_url" class="span12">
        </td>
    </tr>
    <tr class="ads_type_website">
        <td>
            Banner
        </td>
        <td>
            <input type="file" id="" name="ads_website_banner">
        </td>
    </tr>
    <tr class="ads_type_app">
        <td>
            Apple Store URL
        </td>
        <td>
            <input type="text" id="" name="ads_ios_url" class="span12">
        </td>
    </tr>
    <tr class="ads_type_app">
        <td>
            Google Play Store URL
        </td>
        <td>
            <input type="text" id="" name="ads_android_url" class="span12">
        </td>
    </tr>
    <tr class="ads_type_app">
        <td>
            Banner
        </td>
        <td>
            <input type="file" id="" name="ads_app_banner">
        </td>
    </tr>

    <tr>
    	<td>
    		Terms and Conditions
    	</td>
        <td>
			<textarea id="" name="ads_toc" required="required"></textarea>
        </td>
    </tr>
    <tr>
        <td>
            Advertisement Rewards
        </td>
        <td>
            <div class="ads_reward_container">
                <div class="ads_reward_box">
                <select name="ads_reward_id[]" required="required">
                    <option value="">-</option>
                    <?php foreach ($itemsinfo as $item): ?>
                        <option value="<?php echo $item->id; ?>"><?php echo $item->name; ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="text" name="ads_reward_quantity[]" class="span3" required="required">
                </div>
            </div>
            <button type="button" class="btn btn-inverse addAdsRewardBtn" ><i class="icon-plus icon-white"></i> Add Reward</button>
        </td>
        <div class="deleteRewardTpl" style="display:none">
            <button class="btn btn-danger deleteRewardBtn"><i class="icon-minus icon-white"></i> Delete</button>
        </div>
    </tr>
	</tbody>
	</table>

	<input type="submit" class="btn btn-success" value="Create Ads">
	</form>
</div>