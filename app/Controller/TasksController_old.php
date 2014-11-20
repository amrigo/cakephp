<?php

    class TasksController extends AppController {
        
        public $helpers = array('Html', 'Form');
        
        public function index() {
            $this->set('tasks', $this->Task->find('all'));
        }

        public function view($id = null) {
			
			if (!$id) {
				throw new NotFoundException(__('Invalid task'));
			}
			
			$task = $this->Task->findById($id);
			
			if (!$task) {
				throw new NotFoundException(__('Invalid task'));
			}
			
			$this->set('task', $task);
		}

		public function add() {
			//if ($this->request->is('tasks')) {
			if ( $this->request->is('post') ) {
				$this->Task->create();
				var_dump($this->Task->save($this->request->data));
				if ($this->Task->save($this->request->data)) {
					$this->Session->setFlash(__('Your task has been saved.'));
					return $this->redirect(array('action' => 'index'));
				}

				$this->Session->setFlash(__('Unable to add your post.'));
			} 
		} 
		
		public function edit($id = null) {
			if (!$id) {
				throw new NotFoundException(__('Invalid post'));
			}
			$task = $this->Task->findById($id);
			if (!$task) {
				throw new NotFoundException(__('Invalid post'));
			}
			if ($this->request->is(array('post', 'put'))) {
				$this->Task->id = $id;
				if ($this->Task->save($this->request->data)) {
					$this->Session->setFlash(__('Your post has been updated.'));
					return $this->redirect(array('action' => 'index'));
				}
				$this->Session->setFlash(__('Unable to update your post.'));
			}
			if (!$this->request->data) {
				$this->request->data = $task;
			}
		}

		public function delete($id) {
			if ($this->request->is('get')) {
				throw new MethodNotAllowedException();
			}
			if ($this->Task->delete($id)) {
				$this->Session->setFlash(__('The post with id: %s has been deleted.', h($id)));
				return $this->redirect(array('action' => 'index'));
			}
		}



    }