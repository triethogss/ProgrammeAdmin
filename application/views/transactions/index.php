<div class="col-lg-12">
<?php if(isset($results)):?>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>sales_id</th>
				<th>paid_at</th>
				<th>title</th>
				<th>quantity</th>
				<th></th>
			</tr>
		</thead>
	<?php foreach($results as $transaction): ?>
		<tbody>
		<?php
		$id                    = isset($transaction->id) ? $transaction->id : '';
		$sales_id              = isset($transaction->sales_id) ? $transaction->sales_id : '';
		$currency_code         = isset($transaction->currency_code) ? $transaction->currency_code : '';
		$paypal_transaction_id = isset($transaction->paypal_transaction_id) ? $transaction->paypal_transaction_id : '';
		$paid_at               = isset($transaction->paid_at) ? $transaction->paid_at : '';
		$total                 = isset($transaction->total) ? $transaction->total : '';
		$account_id            = isset($transaction->account_id) ? $transaction->account_id : '';
		$quantity              = isset($transaction->quantity) ? $transaction->quantity : '';
		$name                  = isset($transaction->name) ? $transaction->name : '';
		$title                 = isset($transaction->title) ? $transaction->title : '';
		?>
			<tr>
				<td><?php echo $sales_id; ?></td>
				<td><?php echo $paid_at; ?></td>
				<td><?php echo $title; ?></td>
				<td><?php echo $quantity; ?></td>
				<td><?php echo $total; ?></td>
				<td>
					<a href="<?php echo site_url("deals/{$id}"); ?>" class="btn btn-info">View</a>
				</td>
			</tr>
	<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>
</div>