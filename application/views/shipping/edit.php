<div class="col-lg-12">
	<!-- <table id="tblAppendGrid"></table> -->
	<!-- <?php // var_dump($countries); ?> -->
	<form method="post" class="formEditShipping" role="form">
	<table class="table table-condensed" style="overflow: scroll;">
		<thead>
			<tr>
				<th>Country</th>
				<th>Region</th>
				<th>City</th>
				<th>Postcode From</th>
				<th>Postcode To</th>
				<th>Condition Name</th>
				<th>Condition From</th>
				<th>Condition To</th>
				<th>Currency</th>
				<th>Price</th>
			</tr>
		</thead>
		<tbody>
			<?php if(isset($results)): foreach ($results as $key => $shipping): ?>
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
				<td>
					<select name="dest_country_code[]" class="form-control" data-key="dest_country_code" data-value="<?php echo $dest_country_code; ?>" required="required">
						<option value="<?php echo $dest_country_code; ?>"><?php echo $name; ?></option>
					</select>
				</td>
				<td>
					<select name="dest_region_code[]" class="form-control" data-key="dest_region_code" data-value="<?php echo $dest_region_code; ?>">
						<option value="">-- All --</option>
						<!-- <option value="<?php echo $dest_region_code; ?>"><?php echo $dest_region_code; ?></option> -->
					</select>
				</td>
				<td>
					<input type="text" name="dest_city[]" class="form-control" value="<?php echo $dest_city; ?>" required="required">
				</td>
				<td class="col-sm-1">
					<input type="text" name="dest_postcode_from[]" class="form-control" value="<?php echo $dest_postcode_from; ?>">
				</td>
				<td class="col-sm-1">
					<input type="text" name="dest_postcode_to[]" class="form-control" value="<?php echo $dest_postcode_to; ?>">
				</td>
				<td>
					<select name="condition_name[]" class="form-control" required="required">
						<option value="<?php echo $condition_name; ?>">Weight in Kg</option>
					</select>
				</td>
				<td class="col-sm-1">
					<input type="text" name="condition_from[]" class="form-control" value="<?php echo $condition_from; ?>" required="required">
				</td>
				<td class="col-sm-1">
					<input type="text" name="condition_to[]" class="form-control" value="<?php echo $condition_to; ?>" required="required">
				</td>
				<td class="col-sm-1">
					<select name="currency_code[]" class="form-control" required="required">
						<option value="<?php echo $currency_code; ?>"><?php echo $currency_code; ?></option>
					</select>
				</td>
				<td class="col-sm-1">
					<input type="text" name="price[]" class="form-control" value="<?php echo $price; ?>" required="required">
				</td>
				<td>
					<button type="button" class="btn btn-danger btnDelShippingRate"><i class="fa fa-trash-o"></i></button>
				</td>
			</tr>
			<?php endforeach; endif; ?>
		</tbody>
	</table>
	<div id="PersonTableContainer"></div>
	<button type="button" class="btn btn-info addRowShipping">Add Row</button>
	<button type="submit" class="btn btn-primary">Save</button>
	<button type="submit" class="btn btn-default" onclick="window.history.back(-1);">Cancel</button>
	</form>
</div>
<script id="shippingTpl" type="text/x-handlebars-template">
	<table class="table table-condensed">
		<thead>
			<tr>
				<th></th>
			</tr>
		</thead>
		<tbody>
			{{#each rates}}
			<tr>
				<td>
					{{{preselectCountry something}}}
				</td>
				<td>
					{{dest_city}}
				</td>
				<td>
					{{dest_postcode_from}}
				</td>
				<td>
					{{dest_postcode_to}}
				</td>
				<td>
					{{preselectCondition condition_name}}
				</td>
				<td>
					{{condition_from}}
				</td>
				<td>
					{{condition_to}}
				</td>
				<td>
					{{currency_code}}
				</td>
				<td>
					{{price}}
				</td>
			</tr>
			{{/each}}
		</tbody>
	</table>
</script>