<?php if (isset($pagination)): ?>
<div class="paginationcontainer">
<ul class="pagination">
</ul>
</div>
<script type="text/javascript">
	var pagination = {
		options : {
			bootstrapMajorVersion: 3,
            currentPage: <?php echo $pagination['curpage']; ?>,
            totalPages: <?php echo $pagination['totalpage']; ?>
        }
    };
</script>
<?php endif; ?>