<div class="span9">
	<h1>Challenges List</h1>
    <hr>
	<?php echo theme_view('general/alert'); ?>
	<a href="<?php echo site_url('challenges/create'); ?>" class="btn btn-info">Create a new Challenge</a>
	<?php if(isset($results)):?>
	<?php echo Template::block('pagination', 'general/pagination', $pagination); ?>
    <table class="table table-striped">
    <thead>
    <tr>
        <th>Challenge Name</th>
        <th>Rules</th>
        <th>Status</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($results as $challenge):?>
    <?php 
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

	?>
    <tr>
        <td>
            <img src="<?php echo $challenges_s; ?>" height="48px" width="48px">
        	<a href="<?php echo site_url("challenges/view?id={$id}"); ?>">
        	<?php echo $name;?>
        	</a>
        </td>
        <td>
            <?php if (!empty($rule_def)) :
                echo $rule_def->quantity, ' - ', getItemName($rule_def->item_id, $itemsinfo);
                endif; 
            ?>
        </td>
        <td>
            <?php echo $status; ?>
        </td>
        <td>
        </td>
    </tr>
    <?php endforeach;?>
    </tbody>
    </table>
    <?php endif;?>
</div>