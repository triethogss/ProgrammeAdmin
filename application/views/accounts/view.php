<?php 
	$account       = $results;
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

	$avatar_m   = isset($account->photo_m) ? $account->photo_m : '';
	$avatar_s   = isset($account->photo_s) ? $account->photo_s : '';
	$avatar_o   = isset($account->photo_o) ? $account->photo_o : '';
	$avatar_b   = isset($account->photo_b) ? $account->photo_b : '';

	if (empty($avatar_s)) {
		$avatar = base_url('assets/images/default-avatar.gif');
	} else {
		$avatar = $avatar_s;
	}
?>
<div class="col-lg-12">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#detail" data-toggle="tab" data-href="">Detail</a></li>
		<!-- <li><a href="#more-information" data-toggle="tab" data-href="<?php echo site_url('deals/information/'.$id); ?>">More Information</a></li> -->
		<li><a href="#deal-bought" data-toggle="tab" data-href="<?php echo site_url('accounts/deals?id='.$id); ?>">Deal Bought</a></li>
	</ul>

	<div class="tab-content">
		<div class="tab-pane active" id="detail">
			<img src="<?php echo $avatar; ?>" class="img-thumbnail" height="200px" width="200px">
			<table class="table table-bordered">
				<tbody>
					<tr>
						<td>Name</td>
						<td><?php echo $name; ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $email; ?></td>
					</tr>
					<tr>
						<td>is_verified</td>
						<td><?php echo $is_verified; ?></td>
					</tr>
					<tr>
						<td>contact</td>
						<td><?php echo $contact; ?></td>
					</tr>
					<tr>
						<td>gender</td>
						<td><?php echo $gender; ?></td>
					</tr>
					<tr>
						<td>dob</td>
						<td><?php echo $dob; ?></td>
					</tr>
					<tr>
						<td>last_accessed</td>
						<td><?php echo $last_accessed; ?></td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="tab-pane" id="deal-bought">
			<div class="tabcontainer"></div>
		</div>
	</div>
</div>

<script id="dealBoughtTpl" type="text/x-handlebars-template">
	<table class="table">
		<thead>
			<tr>
				<th>Account Name</th>
				<th>Quantity Bought</th>
				<th>Date Bought</th>
			</tr>
		</thead>
		<tbody>
			{{#each results}}
			<tr>
				<td>{{{link_to group_deals_id title}}}</td>
				<td>{{quantity}}</td>
				<td>{{bought_at}}</td>
			</tr>
			{{/each}}
		</tbody>
	</table>
</script>