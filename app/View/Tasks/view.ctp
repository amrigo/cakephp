<!-- File: /app/View/Tasks/view.ctp -->
<h1><?php echo h($task['Task']['title']); ?></h1>
<p>
	<small>
		Created: <?php echo $task['Task']['created']; ?>
	</small>
</p>
<p>
	<?php echo h($task['Task']['body']); ?>
</p>