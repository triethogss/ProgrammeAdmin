<div class="span9">
	<h1>Tournaments Rank</h1>
    <hr>
	<?php echo theme_view('general/alert'); ?>

    <?php //var_dump($results); ?>
	<?php if(isset($results)):
		$prizes_list = $results->prizes_list;
	?>

	<select class="prize_filter">
		<option value="">Select Prize</option>
		<?php 
			foreach ($prizes_list as $prize):
		?>
			<option value="<?php echo url_title($prize->id); ?>" title="<?php echo url_title($prize->name); ?>"><?php echo $prize->name; ?></option>
		<?php 
			endforeach;
		?>
	</select>
    <table id="Grid" class="table table-bordered">
    	<tr>
    		<th>Rank</th>
    		<th>Name</th>
    		<th>Score</th>
    		<th>View Profile</th>
    	</tr>
	<?php
		$winner_list = $results->winner_list;

		if (empty($winner_list)) $winner_list = array();
		$rank = 0;
		foreach ($winner_list as $user):
	?>
	<?php 
			$rank      += 1;
			$id         = $user->id;
			$name       = $user->name;
			$email      = $user->email;
			$contact    = $user->contact;

			if ($user->gender == 'm') {
				$gender = 'Male';
			} else if ($user->gender == 'f') {
				$gender = 'Female';
			} else {
				$gender = '-';
			}

			$birth_year   = $user->birth_year;
			$nric         = $user->nric;
			$avatar_m     = $user->avatar_m;
			$avatar_s     = $user->avatar_s;
			$avatar_o     = $user->avatar_o;
			$avatar_b     = $user->avatar_b;
	?>
		<tr class="selector <?php echo getPrizeLabel($rank, $prizes_list); ?>">
			<td>
				<?php echo $rank; ?>
			</td>
			<td>
				<?php echo $name; ?>
			</td>
			<td>
				<?php echo ''; ?>
			</td>
			<td>
				<button class="btn btn-info viewProfileBtn">View Profile</button>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	<div class="emailWinnerContainer">
	Send Winner of <span class="prize-title"></span>
	<a href="<?php echo site_url('tournaments/message'); ?>" class="btn btn-inverse sendEmailWinnerBtn"> Send Email</a>
	</div>
	<?php endif; ?>
</div>
<script type="text/javascript">
	var winner_list = <?php echo json_encode($winner_list); ?>;
</script>
<div id="winner-modal" class="modal hide fade">
	
</div>
<script id="winner-user-template" type="text/x-handlebars-template">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h3>User Detail</h3>
</div>
<div class="modal-body">
<table class="table table-striped">
    <thead>
    <tr>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <tr>
    	<td></td>
    	<td>
    		<img src="{{avatar}}" width="48px" height="48px" class="img-polaroid">
    	</td>
    </tr>
    <tr>
    	<td>
    		Name
    	</td>
        <td>
        	{{name}}
        </td>
    </tr>
    <tr>
    	<td>
    		Email
    	</td>
        <td>
        	{{email}}
        </td>
    </tr>
    <tr>
    	<td>
    		Contact
    	</td>
        <td>
        	{{contact}}
        </td>
    </tr>
    <tr>
    	<td>
    		Gender
    	</td>
        <td>
        	{{gender}}
        </td>
    </tr>
    <tr>
    	<td>
    		Date of Birth
    	</td>
        <td>
        	{{birth_year}}
        </td>
    </tr>
    <tr>
    	<td>
    		NRIC
    	</td>
        <td>
        	{{nric}}
        </td>
    </tr>

    </tbody>
    </table>
</div>
{{! 
<div class="modal-footer">
<a href="#" class="btn">Close</a>
<a href="#" class="btn btn-primary">Save changes</a> }}
</div>
</script>