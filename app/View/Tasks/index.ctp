<!-- File: /app/View/Posts/index.ctp (edit links added) -->
	<h1>Tasks</h1>
	
	<table>
		<tr>
			<th>Id</th>
			<th>Title</th>
			<th>Action</th>
			<th>Created</th>
		</tr>
		<!-- Here’s where we loop through our $posts array, printing out post info -->
		<?php foreach ($tasks as $task): ?>
		<tr>
			<td><?php echo $task['Task']['id']; ?></td>
			<td>
			<?php
			echo $this->Html->link(
				$task['Task']['title'],
				array('action' => 'view', $task['Task']['id'])
			);
			?>
			</td>
			
			<td>
				<?php
				echo $this->Form->postLink(
				'Delete',
				array('action' => 'delete', $task['Task']['id']),
				array('confirm' => 'Are you sure?')
				);
				?>
				<?php
				echo $this->Html->link(
				'Edit', array('action' => 'edit', $task['Task']['id'])
				);
				?>
				</td>
			<td>
			<?php echo $task['Task']['created']; ?>
			</td>
		</tr>
		<?php endforeach; ?>
		<?php unset($task); ?>
	</table>