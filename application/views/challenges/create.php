<div class="span9">
	<h1>Create New Challenge</h1>
    <hr>
    <form method="post" enctype="multipart/form-data" id="ChallengeFormCreate">
        <?php
        // @var $itemsinfo: list of items {"id": "7","name": "cabbage"}
        ?>
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
    		Challenge Name
    	</td>
        <td>
			<input type="text" id="" name="challenge_name" class="span12" required="required">
        </td>
    </tr>
    <tr>
    	<td>
    		Challenge Description
    	</td>
        <td>
            <input type="text" id="" name="challenge_description" class="span12" required="required">
        </td>
    </tr>
        <tr>
        <td>
            Challenge Icon
        </td>
        <td>
            <input type="file" id="" name="challenge_icon_image" class="" required="required">
        </td>
    </tr>
    <tr>
        <td>
            Challenge Rule
        </td>
        <td>
            <div>
            <select name="challenge_rule_id" required="required">
                <option value="">-</option>
                <?php foreach ($itemsinfo as $item): ?>
                    <option value="<?php echo $item->id; ?>"><?php echo $item->name; ?></option>
                <?php endforeach; ?>
            </select>
            <input type="text" name="challenge_rule_quantity" class="span3">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Challenge Rewards
        </td>
        <td>
            <div class="challenge_reward_container">
                <div class="challenge_reward_box">
                <select name="challenge_reward_id[]" required="required">
                    <option value="">-</option>
                    <?php foreach ($itemsinfo as $item): ?>
                        <option value="<?php echo $item->id; ?>"><?php echo $item->name; ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="text" name="challenge_reward_quantity[]" class="span3">
                </div>
            </div>
            <button type="button" class="btn btn-inverse addChallengeRewardBtn" ><i class="icon-plus icon-white"></i> Add Reward</button>
        </td>
        <div class="deleteRewardTpl" style="display:none">
            <button class="btn btn-danger deleteRewardBtn"><i class="icon-minus icon-white"></i> Delete</button>
        </div>
    </tr>
    </tbody>
    </table>
    <input type="submit" class="btn btn-success" value="Create Voucher">
    </form>
</div>