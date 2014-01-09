<div class="col-lg-12">
	<?php if(isset($results)):?>
		<?php // echo Template::block('pagination', 'general/pagination', $pagination); ?>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Deal Name</th>
					<th>Contact Name</th>
					<th>Contact Number</th>
					<th>Contact Email</th>
					<th>Subject</th>
					<th>Message</th>
					<th>Ask At</th>
				</tr>
			</thead>
			<?php if (isset($results)): ?>
			<?php foreach ($results as $result): ?>
			<?php
					$id             = isset($result->id) ? $result->id : '';
					$title          = isset($result->title) ? $result->title : '';
					$group_deals_id = isset($result->group_deals_id) ? $result->group_deals_id : '';
					$first_name     = isset($result->first_name) ? $result->first_name : '';
					$last_name      = isset($result->last_name) ? $result->last_name : '';
					$contact        = isset($result->contact) ? $result->contact : '';
					$email          = isset($result->email) ? $result->email : '';
					$subject        = isset($result->subject) ? $result->subject : '';
					$message        = isset($result->message) ? $result->message : '';
					$created_at     = isset($result->created_at) ? $result->created_at : '';
			?>
			<tbody>
				<tr>
					<td><?php echo $title; ?></td>
					<td><?php echo $first_name, ' ', $last_name; ?></td>
					<td><?php echo $contact; ?></td>
					<td><?php echo $email; ?></td>
					<td><?php echo $subject; ?></td>
					<td><?php echo $message; ?></td>
					<td><?php echo $created_at; ?></td>
				</tr>
			</tbody>
			<?php endforeach; ?>
			<?php endif; ?>
		</table>
	<?php endif; ?>
</div>