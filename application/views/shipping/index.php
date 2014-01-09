<div class="col-lg-12">
	<a href="<?php echo site_url('shipping/edit'); ?>" class="btn btn-info">Edit Rate</a>
	<?php if (isset($results)): ?>
	<table class="table table-condensed">
		<thead>
			<tr>
				<th>Country</th>
				<th>Region</th>
				<th>City</th>
				<th>Postcode From</th>
				<th>dest_postcode_to</th>
				<th>condition_name</th>
				<th>condition_from</th>
				<th>condition_to</th>
				<th>Price</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($results as $shipping): ?>
			<?php 
			$id                 = isset($shipping->id) ? $shipping->id : '';
			$dest_country_code  = isset($shipping->dest_country_code) ? $shipping->dest_country_code : '';
			$name               = isset($shipping->name) ? $shipping->name : '';
			$dest_region_code   = isset($shipping->dest_region_code) ? $shipping->dest_region_code : '';
			$dest_city          = isset($shipping->dest_city) ? $shipping->dest_city : '';
			$dest_postcode_from = isset($shipping->dest_postcode_from) ? $shipping->dest_postcode_from : '';
			$dest_postcode_to   = isset($shipping->dest_postcode_to) ? $shipping->dest_postcode_to : '';
			$condition_name     = isset($shipping->condition_name) ? $shipping->condition_name : '';
			$condition_from     = isset($shipping->condition_from) ? $shipping->condition_from : '';
			$condition_to       = isset($shipping->condition_to) ? $shipping->condition_to : '';
			$currency_code      = isset($shipping->currency_code) ? $shipping->currency_code : '';
			$price              = isset($shipping->price) ? $shipping->price : '';
			$created_at         = isset($shipping->created_at) ? $shipping->created_at : '';
			$updated_at         = isset($shipping->updated_at) ? $shipping->updated_at : '';
			$deleted_at         = isset($shipping->deleted_at) ? $shipping->deleted_at : '';
			?>
			<tr>
				<td><?php echo $name; ?></td>
				<td><?php echo $dest_region_code; ?></td>
				<td><?php echo $dest_city; ?></td>
				<td><?php echo $dest_postcode_from; ?></td>
				<td><?php echo $dest_postcode_to; ?></td>
				<td><?php echo $condition_name; ?></td>
				<td><?php echo $condition_from; ?></td>
				<td><?php echo $condition_to; ?></td>
				<td><?php echo $currency_code, $price; ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php endif; ?>
</div>