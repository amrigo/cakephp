<?php

// Controller/TasksController.php

class TasksController extends AppController {

    public $components = array('RequestHandler');

    public function index() {

        $tasks = $this->Task->find('all', array(
                    'order' => 'priority ASC',
                )
            );
        
        $this->set(array(
            'tasks' => $tasks,
            '_serialize' => array('tasks')
        ));

    }

    public function view($id) {

        $task = $this->Task->findById($id);
        
        $this->set(array(
            'task' => $task,
            '_serialize' => array('task')
        ));

    }

    public function add() {

        if ( $this->request->is('post') ) {
        
            $this->Task->create();
        
            if ($this->Task->save($this->request->data)) {
                $message = 'Tarefa adicionada com sucesso!!';
            } else {
                $message = 'Error';
            }
        
            $this->set(array(
                'message' => $message,
                '_serialize' => array('message')
            ));
        }
    }

    public function edit($id) {
        
        $this->Task->id = $id;
        
        if ($this->Task->save($this->request->data)) {
            $message = 'Tarefa Editada com sucesso!!';
        } else {
            $message = 'Erro';
        }

        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));

    }

    public function delete($id) {
       
        if ($this->Task->delete($id)) {
            $message = 'Tarefa Deletada com sucesso!!';
        } else {
            $message = 'Erro';
        }

        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));

    }

    public function order() {
        
        if ($this->Task->order()) {
            $message = 'Lista de Tarefas ordenada com sucesso!!';
        } else {
            $message = 'Erro';
        }

        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));

    }
}