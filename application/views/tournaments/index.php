<div class="span9">
	<h1>Tournaments List</h1>
    <hr>
	<?php echo theme_view('general/alert'); ?>
	<form class="form-search">
        <input type="text" name="query" class="input-large search-query" placeholder="search keyword">
        <button type="submit" class="btn">Search</button>
    </form>
    <a href="<?php echo site_url('tournaments/create'); ?>" class="btn btn-info">Create a new Tournament</a>
	<?php if(isset($results)):?>
	<?php echo Template::block('pagination', 'general/pagination', $pagination); ?>
    <table class="table table-striped">
    <thead>
    <tr>
        <th>Tournament Name</th>
        <th>Start Date</th>
        <th>Status</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($results as $tour):?>
    <?php 
		$id           = isset($tour->id) ? $tour->id : '';
		$name         = isset($tour->name) ? $tour->name : '';
		$start_at     = isset($tour->start_at) ? $tour->start_at : '';
		$end_at       = isset($tour->end_at) ? $tour->end_at : '';
		$is_publish   = isset($tour->is_publish) ? $tour->is_publish : '';

		$tournament_m = isset($tour->tournament_m) ? $tour->tournament_m : '';
		$tournament_s = isset($tour->tournament_s) ? $tour->tournament_s : '';
		$tournament_o = isset($tour->tournament_o) ? $tour->tournament_o : '';
		$tournament_b = isset($tour->tournament_b) ? $tour->tournament_b : '';

        $status = ($is_publish ? 'Published' : 'inactive');
	?>
    <tr>
        <td>
        	<a href="<?php echo site_url("tournaments/view?id={$id}"); ?>">
        	<?php echo $name;?>
        	</a>
        </td>
        <td>
            <?php echo $start_at; ?>
        </td>
        <td>
            <?php echo $status; ?>
        </td>
        <td>
            <?php if ($is_publish): ?>
            <a class="btn btn-primary" href="<?php echo site_url("tournaments/result?id={$id}"); ?>">View Result</a>
            <?php endif; ?>
        </td>
    </tr>
    <?php endforeach;?>
    </tbody>
    </table>
    <?php endif;?>
</div>