<div class="col-lg-12">
	<form action="" method="post" class="formCreateDeal" role="form">
	<div class="row">
		<div class="col-lg-6 form-group">
			<label>Title</label>
            <input class="form-control" name="title">
	        <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="clearfix"></div>

        <div class="col-lg-8 form-group">
			<label>Description</label>
            <input class="form-control" name="description">
	        <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="clearfix"></div>

        <div class="col-lg-6 form-group">
        	<label>Image *</label>
        	<input type="file" class="" name="image" required="required">
		</div>
		<div class="col-lg-6 form-group">
			<label>Tags</label>
			<input type="text" class="form-control" name="tags" data-role="tagsinput" placeholder="Add tags" />
	        <p class="help-block">Press Enter to continue</p>
		</div>
        <div class="clearfix"></div>

        <div class="col-lg-6 form-group">
			<label>Supplier ID</label>
            <select class="form-control" name="supplier_id">
				<?php if (isset($suppliers)): ?>
				<?php foreach ($suppliers as $supplier):?>
				<option value="<?php echo $supplier->id; ?>"><?php echo $supplier->name; ?></option>
				<?php endforeach; ?>
				<?php endif; ?>
            </select>
	        <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="clearfix"></div>

        <div class="col-lg-4 form-group">
			<label>currency_code *</label>
            <select class="form-control" name="currency_code">
				<option value="SGD">SGD</option>
            </select>
	        <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="col-lg-4 form-group">
			<label>original_price *</label>
            <input class="form-control" name="original_price">
	        <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="clearfix"></div>

        <div class="col-lg-4 form-group">
        	<label>Weight *</label>
            <input class="form-control" name="weight">
        </div>

        <div class="col-lg-4 form-group">
			<label>max_per_person</label>
            <input class="form-control" name="max_per_person">
	        <p class="help-block">Leave blank if unlimited</p>
        </div>
        <div class="col-lg-4 form-group">
			<label>limit</label>
            <input class="form-control" name="limit">
	        <p class="help-block">Leave blank if unlimited</p>
        </div>
        <div class="clearfix"></div>

        <div class="col-lg-4 form-group">
			<label>started_at *</label>
            <div class="form-group">
                <div class='input-group date datetimepicker startdatetimepicker'>
                    <input type='text' class="form-control" name="started_at" data-format="DD-MM-YYYY HH:MM" readonly="readonly" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
	        <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="col-lg-4 form-group">
			<label>ended_at *</label>
            <div class="form-group">
                <div class='input-group date datetimepicker enddatetimepicker'>
                    <input type='text' class="form-control" name="ended_at" data-format="DD-MM-YYYY HH:MM" readonly="readonly" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
	        <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="col-lg-4 form-group">
			<label>expired_at *</label>
            <div class="form-group">
                <div class='input-group date datetimepicker expireddatetimepicker'>
                    <input type='text' class="form-control" name="expired_at" data-format="DD-MM-YYYY HH:MM" readonly="readonly" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
	        <p class="help-block">Example block-level help text here.</p>
        </div>

        <div class="col-lg-4 form-group">
			<label>Status</label>
            <select class="form-control" name="status">
				<option value="N">Draft</option>
				<option value="Y">Published</option>
            </select>
	        <p class="help-block">Example block-level help text here.</p>
        </div>
	</div>
	<div class="row">
		<div class="col-sm-10">
			<h3>Tier Price</h3>
			<table class="table">
				<tr>
					<th>Target Buyer</th>
					<th>Target Price</th>
					<th width="100px"></th>
				</tr>
				<tr>
					<td>
						<div class="form-group input-group">
							<span class="input-group-addon">Qty</span>
							<input type="text" class="form-control" name="qty[]" required="required" readonly="readonly" value="0">
						</div>
					</td>
					<td>
						<div class="form-group input-group">
							<span class="input-group-addon">$</span>
							<input type="text" class="form-control" name="price[]" required="required">
						</div>
					</td>
					<td>
						<button type="button" class="btn btn-primary btnAddTierPrice"><i class="fa fa-plus"></i></button>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<button type="submit" class="btn btn-default">Create Deal</button>
	</form>
	<script id="tierPriceTpl" type="text/x-handlebars-template">
		<tr>
			<td>
				<div class="form-group input-group">
					<span class="input-group-addon">Qty</span>
					<input type="text" class="form-control" name="qty[]" required="required">
				</div>
			</td>
			<td>
				<div class="form-group input-group">
					<span class="input-group-addon">$</span>
					<input type="text" class="form-control" name="price[]" required="required">
				</div>
			</td>
			<td>
				<button type="button" class="btn btn-primary btnAddTierPrice"><i class="fa fa-plus"></i></button>
				<button type="button" class="btn btn-danger btnDelTierPrice"><i class="fa fa-trash-o"></i></button>
			</td>
		</tr>
	</script>
</div>
