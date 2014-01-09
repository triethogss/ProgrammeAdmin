<div class="col-lg-12">
	<div class="btn-group" style="margin: 10px 0px;">
		<a href="<?php echo site_url('deals/questions'); ?>" class="btn btn-info">Latest Questions Asked</a>
    </div>
	<form class="" role="form">
        <div class="form-group input-group">
            <input type="text" class="form-control" name="query" placeholder="search keyword">
            <span class="input-group-btn">
            	<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </form>
    <a href="<?php echo site_url('deals/create'); ?>" class="btn btn-primary">Create a new Deal</a>
<?php if(isset($results)):?>
    <?php echo Template::block('pagination', 'general/pagination', $pagination); ?>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Deal Name</th>
				<th>Start Date</th>
				<th>End Date</th>
				<th></th>
			</tr>
		</thead>
		<?php if (isset($results)): ?>
		<?php foreach ($results as $result): ?>
		<?php
			$id             = isset($result->id) ? $result->id : '';
			$admin_id       = isset($result->admin_id) ? $result->admin_id : '';
			$supplier_id    = isset($result->supplier_id) ? $result->supplier_id : '';
			$title          = isset($result->title) ? $result->title : '';
			$description    = isset($result->description) ? $result->description : '';
			$currency_code  = isset($result->currency_code) ? $result->currency_code : '';
			$original_price = isset($result->original_price) ? $result->original_price : '';
			$started_at     = isset($result->started_at) ? $result->started_at : '';
			$ended_at       = isset($result->ended_at) ? $result->ended_at : '';
			$expired_at     = isset($result->expired_at) ? $result->expired_at : '';
			$created_at     = isset($result->created_at) ? $result->created_at : '';
		?>
		<tbody>
			<tr>
				<td><?php echo $title; ?></td>
				<td><span class="datetimeformat"><?php echo $started_at; ?></span></td>
				<td><span class="datetimeformat"><?php echo $ended_at; ?></span></td>
				<td>
					<a href="<?php echo site_url("deals/{$id}"); ?>" class="btn btn-info">View</a>
				</td>
			</tr>
		</tbody>
		<?php endforeach; ?>
		<?php endif; ?>
	</table>
<?php endif; ?>
</div>