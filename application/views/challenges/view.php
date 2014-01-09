<div class="span9">
	<h1>Challenge Information</h1>
	<a href="<?php echo site_url('challenges'); ?>" class=""><i class="icon-arrow-left"></i> return</a>
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
    <h3><?php echo $name;?></h3>
    <?php if ($is_publish): ?>
        <span class="label label-success"><?php echo $status; ?></span>
    <?php else: ?>
        <span class="label label-info"><?php echo $status; ?></span>
    <?php endif; ?>
    <br>
    <br>
    <img src="<?php echo $challenges_m; ?>" alt="<?php echo $name; ?>" class="img-polaroid" width="100px" height="100px">
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
    		Description
    	</td>
        <td>
        	<?php echo $description;?>
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
            Rule Definition
        </td>
        <td>
            <?php if (!empty($rule_def)) :
                echo $rule_def->quantity, ' - ', getItemName($rule_def->item_id, $itemsinfo);
                endif; 
            ?>
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
    <a href="<?php echo site_url('challenges'); ?>" class="btn"><i class="icon-arrow-left"></i> return</a>
    <?php if(!$is_publish): ?>
        <a href="<?php echo site_url('challenges/publish'); ?>" class="btn btn-info publishBtn">Publish</a>
        <a href='<?php echo site_url("challenges/view?id={$id}&edit=true"); ?>' class="btn btn-warning editBtn">Edit</a>
        <a href="<?php echo site_url('challenges/delete'); ?>" class="btn btn-danger deleteBtn">Delete</a>
    <?php endif; ?>
    
    <?php endif;?>
</div>