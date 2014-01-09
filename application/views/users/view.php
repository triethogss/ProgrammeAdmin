<div class="span9">
	<h1>User Information</h1>
	<a href="<?php echo site_url('users'); ?>" class=""><i class="icon-arrow-left"></i> return</a>
    <hr>
	<?php echo theme_view('general/alert'); ?>
	<?php if(isset($results)):?>
    <?php
    	$user = $results;

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
		$avatar       = $user->avatar;
		$live_time_at = $user->live_time_at;
		
		$items              = $user->item;
		$item_live          = $items->live;
		$item_purchase_live = $items->purchase_live;
		$item_orange        = $items->orange;
		$item_magnet        = $items->magnet;
		$item_dragon_head   = $items->dragon_head;
		$item_cai_shen      = $items->cai_shen;
		$item_lion_doll     = $items->lion_doll;
		$item_total_point   = $items->total_point;

		$available_avatars = $user->available_avatars;

		if (empty($avatar_s)) {
			$avatar = base_url('assets/images/default-avatar.gif');
		} else {
			$avatar = $avatar_s;
		}
	?>
    <img src="<?php echo $avatar; ?>">
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
    		Email
    	</td>
        <td>
        	<?php echo $email;?>
        </td>
    </tr>
    <tr>
    	<td>
    		Contact
    	</td>
        <td>
        	<?php echo $contact;?>
        </td>
    </tr>
    <tr>
    	<td>
    		Gender
    	</td>
        <td>
        	<?php echo $gender;?>
        </td>
    </tr>
    <tr>
    	<td>
    		Date of Birth
    	</td>
        <td>
        	<?php echo $birth_year;?>
        </td>
    </tr>
    <tr>
    	<td>
    		NRIC
    	</td>
        <td>
        	<?php echo $nric;?>
        </td>
    </tr>

    </tbody>
    </table>
    
    <h3>Rank Information</h3>
    <div class="user_rank_container">Loading data....</div>
    <script type="text/javascript">
    var Config = Config || {};
    Config.BASE_URL = <?php echo json_encode(site_url()); ?>;
    </script>
    <script id="userRankTpl" type="text/x-handlebars-template">
        <table class="table ">
            <tr>
                <th>
                    Rank Name
                </th>
                <th>
                    Rank
                </th>
            </tr>
            <tr>
                <td>
                    Global Rank
                </td>
                <td>
                    {{log 'tournament_rank'}}
                    {{global_rank}}
                </td>
            </tr>
            {{#each tournament_rank}}
            <tr>
                <td>
                    {{name}} 
                </td>
                <td>
                    {{rank}}
                </td>
            </tr>
            {{/each}}
        </table>
    </script>
    <?php endif;?>
</div>