<!-- File: /app/View/Tasks/add.ctp -->
<h1>Add Task</h1>

<?php
	echo $this->Form->create('Task');
	echo $this->Form->input('title');
	echo $this->Form->input('body', array('rows' => '3'));
	echo $this->Form->input('datelimit');
	echo $this->Form->input('week', array('type'=>'hidden', 'value'=>date('W')));
	echo $this->Form->end('Save Task');
?>