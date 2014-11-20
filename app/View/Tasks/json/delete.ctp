<?php

// View code - app/View/Tasks/json/index.ctp
foreach ($tasks as &$task) {
    unset($task['Task']['generated_html']);
}

echo json_encode(compact('tasks', 'body'));