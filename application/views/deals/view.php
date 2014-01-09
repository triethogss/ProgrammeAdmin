  	<?php

		$id               = isset($results->id) ? $results->id : '';
		$title            = isset($results->title) ? $results->title : '';
		$description      = isset($results->description) ? $results->description : '';
		$more_information = isset($results->more_information) ? $results->more_information : '';
		$weight_in_kg     = isset($results->weight_in_kg) ? $results->weight_in_kg : '';
		$currency_code    = isset($results->currency_code) ? $results->currency_code : '';
		$original_price   = isset($results->original_price) ? $results->original_price : '';
		// $deposit          = $results->deposit ? $results->deposit : '';
		$max_per_person   = isset($results->max_per_person) ? $results->max_per_person : '';
		$limit            = isset($results->limit) ? $results->limit : '';
		$started_at       = isset($results->started_at) ? $results->started_at : '';
		$ended_at         = isset($results->ended_at) ? $results->ended_at : '';
		$created_at       = isset($results->created_at) ? $results->created_at : '';
		$updated_at       = isset($results->updated_at) ? $results->updated_at : '';
		$deleted_at       = isset($results->deleted_at) ? $results->deleted_at : '';
		$expired_at       = isset($results->expired_at) ? $results->expired_at : '';
		$is_hidden        = isset($results->is_hidden) ? $results->is_hidden : '';
		$photo_o          = isset($results->photo_o) ? $results->photo_o : '';
		$photo_s          = isset($results->photo_s) ? $results->photo_s : '';
		$photo_m          = isset($results->photo_m) ? $results->photo_m : '';
		$photo_b          = isset($results->photo_b) ? $results->photo_b : '';
		$confirmed        = isset($results->confirmed) ? $results->confirmed : '';

		$is_publish       = ($is_hidden == 'N' ? 'Deal is On' : 'Unpublish');
	?>
<div class="col-lg-12">
	<h2><?php echo $title; ?> <small class="label label-warning"><?php echo $is_publish; ?></small></h2>
	<div class="tags">
	<?php foreach ($results->tags as $tag): ?>
		<span class="label label-info"><?php echo $tag->keyword; ?></span>
	<?php endforeach;?>
	</div><br>
	<ul class="nav nav-tabs">
		<li class="active"><a href="#detail" data-toggle="tab" data-href="">Detail</a></li>
		<li><a href="#more-information" data-toggle="tab" data-href="<?php echo site_url('deals/information/'.$id); ?>">More Information</a></li>
		<li><a href="#buyer" data-toggle="tab" data-href="<?php echo site_url('deals/buyer/'.$id); ?>"><span class="badge"><?php echo $confirmed; ?></span> Confirmed Buyer</a></li>
	</ul>
	<!-- <hr> -->
	<div class="tab-content">
		<div class="tab-pane active" id="detail">
			<img src="<?php echo $photo_s; ?>" class="img-thumbnail" height="200px" width="200px">
			<table class="table table-bordered">
				<tbody>
					<tr>
						<td>description</td>
						<td><?php echo $description; ?></td>
					</tr>
					<tr>
						<td>Weight</td>
						<td><?php echo $weight_in_kg; ?> KG</td>
					</tr>
					<tr>
						<td>currency_code</td>
						<td><?php echo $currency_code; ?></td>
					</tr>
					<tr>
						<td>original_price</td>
						<td><?php echo $original_price; ?></td>
					</tr>
					<tr>
						<td>max_per_person</td>
						<td><?php echo ($max_per_person < 0 ? 'Unlimited' : $max_per_person ); ?></td>
					</tr>
					<tr>
						<td>limit</td>
						<td><?php echo ($limit < 0 ? 'Unlimited' : $limit ); ?></td>
					</tr>
					<tr>
						<td>started_at</td>
						<td><span class="datetimeformat"><?php echo $started_at; ?></span></td>
					</tr>
					<tr>
						<td>ended_at</td>
						<td><span class="datetimeformat"><?php echo $ended_at; ?></span></td>
					</tr>
					<tr>
						<td>expired_at</td>
						<td><span class="datetimeformat"><?php echo $expired_at; ?></span></td>
					</tr>
				</tbody>
			</table>
			
			<table class="table">
				<tr>
					<th>Target Buyer</th>
					<th>Discounted Price</th>
				</tr>
			<?php foreach ($results->tier_price as $tier_price): ?>
				<tr>
					<td><?php echo $tier_price->target; ?></td>
					<td><?php echo $tier_price->currency_code, $tier_price->discounted_price; ?></td>
				</tr>
			<?php endforeach;?>
			</table>
		</div>
		<div class="tab-pane" id="more-information">
			<div class="tabcontainer"></div>
		</div>
		<div class="tab-pane" id="buyer">
			<div class="tabcontainer"></div>
		</div>
	</div>
	<div class="actionbar">
		<button type="button" class="btn btn-default" onclick="window.history.back()">Back</button>
		<button type="button" class="btn btn-default">Edit</button>
		<?php if ($is_hidden == 'N'): ?>
		<button type="button" class="btn btn-warning btnUnpublishDeal" data-dealID="<?php echo $id; ?>">Unpublish</button>
		<?php else: ?>
		<button type="button" class="btn btn-warning btnPublishDeal" data-dealID="<?php echo $id; ?>">Publish</button>
		<?php endif; ?>
	</div>
</div>

<script id="buyerTpl" type="text/x-handlebars-template">
	<table class="table">
		<thead>
			<tr>
				<th>Account Name</th>
				<th>Quantity Bought</th>
				<th>Date Confirmed</th>
				<th>Date Paid</th>
			</tr>
		</thead>
		<tbody>
			{{#each results}}
			<tr>
				<td>{{{link_to account_id name}}}</td>
				<td>{{quantity}}</td>
				<td>{{bought_at}}</td>
				<td>{{paid_at}}</td>
			</tr>
			{{/each}}
		</tbody>
	</table>
</script>