<html>
	<head>
		<link rel="stylesheet" href="http://necolas.github.com/normalize.css/2.0.1/normalize.css">  
		<link rel="stylesheet" href="style.css" />  
		<script src="http://code.jquery.com/jquery-1.8.2.js"></script>  
		<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>

		<script>  
		    $(function() {
		        $( "#sortable" ).sortable({   
		            placeholder: "ui-sortable-placeholder"   
		        });  
		    });  
		</script>  

	</head>
	<body>

		<ul id="sortable">  
		<?php foreach ($tasks as $task): ?>
		    <!--li class="ui-state-default">Item 1</li>  
		    <li class="ui-state-default">Item 2</li>  
		    <li class="ui-state-default">Item 3</li>  
		    <li class="ui-state-default">Item 4</li>  
		    <li class="ui-state-default">Item 5</li>  
		    <li class="ui-state-default">Item 6</li>  
		    <li class="ui-state-default">Item 7</li--> 
		    <li class="ui-state-default"><?=$task['title']?></li>
		    <?php endforeach; ?>
		<?php unset($task); ?> 
		</ul>  
	
	</body>
</html>