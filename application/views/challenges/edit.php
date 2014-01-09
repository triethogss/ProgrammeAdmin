<div class="span9">
	<h1>Edit Challenge Information</h1>
    <hr>
	<?php echo theme_view('general/alert'); ?>
	<?php if(isset($results)):?>
    <?php
    	$challenge = $results;

        $id          = isset($challenge->id) ? $challenge->id : '';
        $name        = isset($challenge->name) ? $challenge->name : '';
        $description = isset($challenge->description) ? $challenge->description : '';
        $rule_def    = isset($challenge->rule_def) ? $challenge->rule_def : '';
        $reward_def  = isset($challenge->reward_def) ? $challenge->reward_def : array();
        $is_publish  = isset($challenge->is_publish) ? $challenge->is_publish : '';
        
        $challenges_m = isset($challenge->challenges_m) ? $challenge->challenges_m : '';
        $challenges_s = isset($challenge->challenges_s) ? $challenge->challenges_s : '';
        $challenges_o = isset($challenge->challenges_o) ? $challenge->challenges_o : '';
        $challenges_b = isset($challenge->challenges_b) ? $challenge->challenges_b : '';

        $status = ($is_publish ? 'Published' : 'inactive');

        // @var $itemsinfo: list of items {"id": "7","name": "cabbage"}
	?>
    <form action="<?php echo site_url('challenges/edit'); ?>" method="post" enctype="multipart/form-data" id="ChallengeFormCreate">
    <input type="hidden" id="" name="challenge_id" required="required" value="<?php echo $id;?>">
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
            <input type="text" id="" name="challenge_name" class="span12" required="required" value="<?php echo $name;?>">
        </td>
    </tr>
    <tr>
    	<td>
    		Description
    	</td>
        <td>
            <input type="text" id="" name="challenge_description" class="span12" required="required" value="<?php echo $description;?>">
        </td>
    </tr>
    <tr>
        <td>
            Challenge Icon
        </td>
        <td>
            <img src="<?php echo $challenges_s; ?>" alt="<?php echo $name; ?>" class="img-polaroid" width="100px" height="100px">
            <input type="file" id="" name="challenge_icon_image" class="">
        </td>
    </tr>
<!--     <tr>
    	<td>
    		Status
    	</td>
        <td>
        	<?php //echo $status;?>
        </td>
    </tr> -->
    <tr>
        <td>
            Rule Definition
        </td>
        <td>
            <?php if (!empty($rule_def)) :
                // echo $rule_def->quantity, ' - ', getItemName($rule_def->item_id, $itemsinfo);
                endif; 
            ?>
            <div>
            <select name="challenge_rule_id" required="required">
                <option value="">-</option>
                <?php foreach ($itemsinfo as $item): 
                $selected = '';
                if ($rule_def->item_id == $item->id) {
                    $selected = 'selected="selected"';
                }
                ?>
                    <option value="<?php echo $item->id; ?>" <?php echo $selected; ?>><?php echo $item->name; ?></option>
                <?php endforeach; ?>
            </select>
            <input type="text" name="challenge_rule_quantity" class="span3" value="<?php echo $rule_def->quantity; ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Rewards
        </td>
        <td>
            <div class="challenge_reward_container">
            <?php foreach($reward_def as $reward): ?>
                <!-- <div><?php //echo $reward->quantity, ' - ', getItemName($reward->item_id, $itemsinfo); ?></div> -->
                <div class="challenge_reward_box">
                <select name="challenge_reward_id[]" required="required">
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
                <input type="text" name="challenge_reward_quantity[]" class="span3" value="<?php echo $reward->quantity; ?>">
                </div>
            <?php endforeach;?>
            </div>
            <button type="button" class="btn btn-inverse addChallengeRewardBtn" ><i class="icon-plus icon-white"></i> Add Reward</button>
        </td>
    </tr>
    </tbody>
    </table>
    <a href="<?php echo site_url('challenges'); ?>" class="btn"><i class="icon-arrow-left"></i> return</a>
    <input type="submit" class="btn btn-success" value="Edit Voucher">
    </form>
    <div class="deleteRewardTpl" style="display:none">
        <button class="btn btn-danger deleteRewardBtn"><i class="icon-minus icon-white"></i> Delete</button>
    </div>
    <?php endif;?>
</div>