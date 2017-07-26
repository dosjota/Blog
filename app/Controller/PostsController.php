<?php

class PostsController extends AppController {
	public $helpers = array('Html', 'Form', 'Flash', 'Time');
	public $components = array('Flash');

	/*
	*	Juan Gonzalez
	*	19/07/2017
	*	Metodo 'index'
	*/
	public function index() {
		$this->set('posts', $this->Post->find('all'));
	}

	/*
	*	Juan Gonzalez
	*	19/07/2017
	*	Metodo 'view'
	*	Acceso Publico
	*/
	public function view($id = null) {
		$this->set('post', $this->Post->findById($id));
		$this->set('sidebar', $this->Post->find('all'));

	}

	/*
	*	Juan Gonzalez
	*	19/07/2017
	*	Metodo 'add'
	*	Acceso Publico
	*/
	public function add() {
		if ($this->request->is('post')) {
			if ($this->Post->save($this->request->data)) {
				$this->Flash->set('Tu Publicación ha sido Almacenada.', [
					'params' => [
						'class' => 'alert alert-success'
					]
				]);

				$this->redirect(array('action' => 'admin'));
			}else{
				$this->Flash->set('Ops! No fue posible Almacenar tu Publicación.', [
					'params' => [
						'class' => 'alert alert-danger'
					]
				]);
			}
		}
	}

	/*
	*	Juan Gonzalez
	*	20/07/2017
	*	Metodo 'admin'
	*	Requiere autenticacion
	*	lista las publicaciones realizadas y los enlaces para las opcioens de edicion y eliminación
	*/
	public function admin() {

		$this->set('posts', $this->Post->find('all'));


	}

	/*
	*	Juan Gonzalez
	*	19/07/2017
	*	Metodo 'edit'
	*	Requiere Autenticación
	*	metodo para editar la publicación
	*/
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$post = $this->Post->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Invalid post'));
		}

		if ($this->request->is(array('post', 'put'))) {
			$this->Post->id = $id;
			if ($this->Post->save($this->request->data)) {
				$this->Flash->set('Tu Publicación ha sido Actualizada.', [
					'params' => [
						'class' => 'alert alert-success'
					]
				]);

				return $this->redirect(array('action' => 'admin'));
			}
			$this->Flash->set('Ops! No fue posible actualizar tu Publicación.', [
				'params' => [
					'class' => 'alert alert-danger'
				]
			]);

		}

		if (!$this->request->data) {
			$this->request->data = $post;
		}
	}

	/*
	*	Juan Gonzalez
	*	19/07/2017
	*	Metodo 'delete'
	*	Requiere Autenticación
	*/
	public function delete($id) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Post->delete($id)) {
			$this->Flash->set('Tu Publicación con ID '. $id .' ha sido Eliminada.', [
				'params' => [
					'class' => 'alert alert-success'
				]
			]);


			return $this->redirect(array('action' => 'admin'));
			/*
			$this->Flash->success('Post ID: ' . $id . ' fue Eliminado.');
			$this->redirect(array('action' => 'index'));
			*/
		}
		$this->Flash->set('Ops! No fue posible Eliminar tu Publicación.', [
			'params' => [
				'class' => 'alert alert-danger'
			]
		]);
	}

}
