<div class="col-lg-12">
	<form class="" role="form">
        <div class="form-group input-group">
            <input type="text" class="form-control" name="query" placeholder="search keyword">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </form>

	<?php if(isset($results)):?>
	<?php echo Template::block('pagination', 'general/pagination', $pagination); ?>
    <table class="table table-striped">
    <thead>
    <tr>
        <th></th>
        <th>Name</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($results as $account):?>
    <?php 

		$id            = isset($account->id) ? $account->id : '';
        $name          = isset($account->name) ? $account->name : '';
        $email         = isset($account->email) ? $account->email : '';
        $is_verified   = isset($account->is_verified) ? $account->is_verified : '';
        $contact       = isset($account->contact) ? $account->contact : '';
        $gender        = isset($account->gender) ? $account->gender : '';
        $dob           = isset($account->dob) ? $account->dob : '';
        $photo         = isset($account->photo) ? $account->photo : '';
        $last_accessed = isset($account->last_accessed) ? $account->last_accessed : '';

		if ($account->gender == 'm') {
			$gender = 'Male';
		} else if ($account->gender == 'f') {
			$gender = 'Female';
		} else {
			$gender = '-';
		}

		$photo_m   = isset($account->photo_m) ? $account->photo_m : '';
		$photo_s   = isset($account->photo_s) ? $account->photo_s : '';
		$photo_o   = isset($account->photo_o) ? $account->photo_o : '';
		$photo_b   = isset($account->photo_b) ? $account->photo_b : '';

		if (empty($photo_s)) {
			$avatar = base_url('assets/images/default-avatar.gif');
		} else {
			$avatar = $photo_s;
		}
	?>
    <tr>
        <td>
        	<img src="<?php echo $avatar; ?>" width="48px" height="48px">
        </td>
        <td>
        	<?php echo $name;?>
        </td>
        <td>
            <a class="btn btn-primary" href="<?php echo site_url("accounts/view?id={$id}"); ?>">View</a>
        </td>
    </tr>
    <?php endforeach;?>
    </tbody>
    </table>
    <?php endif;?>
</div>