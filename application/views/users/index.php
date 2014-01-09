<div class="span9">
	<h1>Users List</h1>
    <hr>
	<?php echo theme_view('general/alert'); ?>
	<form class="form-search">
        <input type="text" name="query" class="input-large search-query" placeholder="search keyword">
        <button type="submit" class="btn">Search</button>
    </form>
	<?php if(isset($results)):?>
	<?php echo Template::block('pagination', 'general/pagination', $pagination); ?>
    <table class="table table-striped">
    <thead>
    <tr>
        <th>User Name</th>
        <!-- <th>Action</th> -->
    </tr>
    </thead>
    <tbody>
    <?php foreach($results as $user):?>
    <?php 
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

		$birth_year = $user->birth_year;
		$nric       = $user->nric;

		$avatar_m   = $user->avatar_m;
		$avatar_s   = $user->avatar_s;
		$avatar_o   = $user->avatar_o;
		$avatar_b   = $user->avatar_b;

		if (empty($avatar_s)) {
			$avatar = base_url('assets/images/default-avatar.gif');
		} else {
			$avatar = $avatar_s;
		}
	?>
    <tr>
        <td>
        	<img src="<?php echo $avatar; ?>" width="48px" height="48px">
        	<a href="<?php echo site_url("users/view?id={$id}"); ?>">
        	<?php echo $name;?>
        	</a>
        </td>
<!--         <td>
            <button class="btn btn-primary btn-enable-campaign" href="">Enable</button>
        </td> -->
    </tr>
    <?php endforeach;?>
    </tbody>
    </table>
    <?php endif;?>
</div>