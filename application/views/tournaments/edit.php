<div class="span9">
	<h1>Edit Tournament Information</h1>
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
    <form action="<?php echo site_url('tournaments/edit'); ?>" method="post" enctype="multipart/form-data" id="TournamentFormCreate">
    <input type="hidden" name="tournament_id" value="<?php echo $id; ?>">
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
            <input type="text" id="" name="tournament_name" class="span12" required="required" value="<?php echo $name;?>">
        </td>
    </tr>
    <tr>
        <td>
            Tournament Image Poster
        </td>
        <td>
            <img src="<?php echo $tournament_m; ?>"><br>
            <input type="file" id="" name="tournament_poster" class="">
        </td>
    </tr>
    <tr>
    	<td>
    		Start Date
    	</td>
        <td>
            <div id="tournament_start_date" class="input-append date datetimepicker">
                <input name="tournament_start_date" data-format="dd-MM-yyyy hh:mm:ss" type="text" required="required" value="<?php echo strtotime($start_at) * 1000;?>">
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
            <div id="tournament_end_date" class="input-append date datetimepicker">
                <input name="tournament_end_date" data-format="dd-MM-yyyy hh:mm:ss" type="text" required="required" value="<?php echo strtotime($end_at) * 1000;?>">
                <span class="add-on">
                    <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                </span>
            </div>
        </td>
    </tr>
    <tr>
    	<td>
    		Terms and Condition
    	</td>
        <td>
            <textarea id="" name="tournament_toc"><?php echo $terms_condition;?></textarea>
        </td>
    </tr>
    <tr>
        <td>
            Tournament Cost to join
        </td>
        <td>
            <input type="text" id="" name="tournament_cost" class="span12" required="required" value="<?php echo $cost; ?>">
        </td>
    </tr>
<!--     <tr>
    	<td>
    		Status
    	</td>
        <td>
        	<?php echo $status;?>
        </td>
    </tr> -->
    </tbody>
    </table>
    
    <div class="tournament_prizes_container">
    <?php foreach($tournament_prizes as $prize): ?>
    <?php 
        $prize_id          = $prize->id;
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
    
    <h3>Tournament Prize </h3>
    <table class="table table-striped">
        <tr>
            <td>Prize Name</td>
            <td>
                <input type="text" name="prize_name[]" class="span12" required="required" value="<?php echo $name; ?>">
                <input type="hidden" name="prize_id[]" required="required" value="<?php echo $prize_id; ?>">
            </td>
        </tr>
        <tr>
            <td>Terms and Condition</td>
            <td>
                <textarea name="prize_toc[]" id=""><?php echo $terms_condition; ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Redemption Detail</td>
            <td>
                <textarea name="prize_detail[]" id=""><?php echo $detail_redeemtion; ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Winner Rank</td>
            <td>
                <input type="text" name="prize_start_rank[]" class="span3" required="required" value="<?php echo $start_rank; ?>">
                &nbsp; to &nbsp;
                <input type="text" name="prize_end_rank[]" class="span3" required="required" value="<?php echo $end_rank; ?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <img src="<?php echo $photo_s; ?>"><br>
                <input type="file" id="" name="prize_image[]" class="">
                <input type="hidden" name="prize_index[]" value="">
            </td>
        </tr>
        <tr>
            <td>
            </td>
            <td>
                
            </td>
        </tr>
    </table>
    <?php endforeach; ?>
    </div>
    <button type="button" class="btn btn-inverse addTournamentBtn" ><i class="icon-plus icon-white"></i> Add tournament prize</button>

    <a href="<?php echo site_url('tournaments'); ?>" class="btn"><i class="icon-arrow-left"></i> return</a>
    <input type="submit" class="btn btn-success" value="Edit Tournament">
    </form>
    <div class="tournament_prizes_container_tpl" style="display:none;">
        <h3>Tournament Prize <button class="btn btn-danger deleteTournamentBtn"><i class="icon-minus icon-white"></i> Delete Prize</button></h3>
        <table class="table table-striped">
            <tr>
                <td>Prize Name</td>
                <td>
                    <input type="text" name="prize_name[]" class="span12" required="required">
                </td>
            </tr>
            <tr>
                <td>Prize TnC</td>
                <td>
                    <textarea name="prize_toc[]" id=""></textarea>
                </td>
            </tr>
            <tr>
                <td>Redemption detail</td>
                <td>
                    <textarea name="prize_detail[]" id=""></textarea>
                </td>
            </tr>
            <tr>
                <td>Winner rank</td>
                <td>
                    <input type="text" name="prize_start_rank[]" class="span3" required="required">
                    &nbsp; to &nbsp;
                    <input type="text" name="prize_end_rank[]" class="span3" required="required">
                </td>
            </tr>
            <tr>
                <td>Prize Image</td>
                <td>
                    <input type="file" id="" name="prize_image[]" class="" required="required">
                    <input type="hidden" name="prize_index[]" value="">
                </td>
            </tr>
        </table>
    </div>
    <?php endif;?>
</div>