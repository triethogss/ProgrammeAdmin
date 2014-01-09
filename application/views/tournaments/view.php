<div class="span9">
	<h1>Tournament Information</h1>
	<a href="<?php echo site_url('tournaments'); ?>" class=""><i class="icon-arrow-left"></i> return</a>
    <hr>
	<?php echo theme_view('general/alert'); ?>
	<?php if(isset($results)):?>
    <?php
    	$tour = $results;

        $id              = isset($tour->id) ? $tour->id : '';
        $name            = isset($tour->name) ? $tour->name : '';
        $start_at        = isset($tour->start_at) ? $tour->start_at : '';
        $end_at          = isset($tour->end_at) ? $tour->end_at : '';
        $terms_condition = isset($tour->end_at) ? $tour->terms_condition : '';
        $cost            = isset($tour->end_at) ? $tour->cost : '';
        $is_publish      = isset($tour->end_at) ? $tour->is_publish : '';
        
        $tournament_m = isset($tour->tournament_m) ? $tour->tournament_m : '';
        $tournament_s = isset($tour->tournament_s) ? $tour->tournament_s : '';
        $tournament_o = isset($tour->tournament_o) ? $tour->tournament_o : '';
        $tournament_b = isset($tour->tournament_b) ? $tour->tournament_b : '';

        $tournament_prizes = isset($tour->tournament_prizes) ? $tour->tournament_prizes : array();

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
    <img src="<?php echo $tournament_m; ?>">
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
    		Terms and Condition
    	</td>
        <td>
        	<?php echo $terms_condition;?>
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
    </tbody>
    </table>
    
    <h3>Tournament Prize</h3>
    <?php foreach($tournament_prizes as $prize): ?>
    <?php 
        // $id                = $prize->id;
        $name              = isset($prize->name) ? $prize->name : '';
        $terms_condition   = isset($prize->terms_condition) ? $prize->terms_condition : '';
        $detail_redeemtion = isset($prize->detail_redeemtion) ? $prize->detail_redeemtion : '';
        $start_rank        = isset($prize->start_rank) ? $prize->start_rank : '';
        $end_rank          = isset($prize->end_rank) ? $prize->end_rank : '';
        $photo_m           = isset($prize->photo_m) ? $prize->photo_m : '';
        $photo_s           = isset($prize->photo_s) ? $prize->photo_s : '';
        $photo_o           = isset($prize->photo_o) ? $prize->photo_o : '';
        $photo_b           = isset($prize->photo_b) ? $prize->photo_b : '';
    ?>
    <table class="table table-striped">
        <tr>
            <td>Prize Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Terms and Condition</td>
            <td><?php echo $terms_condition; ?></td>
        </tr>
        <tr>
            <td>Redemption Detail</td>
            <td><?php echo $detail_redeemtion; ?></td>
        </tr>
        <tr>
            <td>Winner Rank</td>
            <td><?php echo $start_rank; ?> to <?php echo $end_rank; ?></td>
        </tr>
        <tr>
            <td></td>
            <td><img src="<?php echo $photo_s; ?>"></td>
        </tr>
    </table>
    <?php endforeach; ?>

    <a href="<?php echo site_url('tournaments'); ?>" class="btn"><i class="icon-arrow-left"></i> return</a>
    <?php if(!$is_publish): ?>
        <a href="<?php echo site_url('tournaments/publish'); ?>" class="btn btn-info publishBtn">Publish</a>
        <a href='<?php echo site_url("tournaments/view?id={$id}&edit=true"); ?>' class="btn btn-warning editBtn">Edit</a>
        <a href="<?php echo site_url('tournaments/delete'); ?>" class="btn btn-danger deleteBtn">Delete</a>
    <?php endif; ?>
    <?php endif;?>
</div>