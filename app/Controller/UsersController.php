<?php

App::uses('AppController', 'Controller');

/*
*	Juan Gonzalez
*	20/07/2017
*	Cotnrolador 'Users'
*	Para efectos de la prueba solo se crearon los metodos login, logout y add
*/
class UsersController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter();
		// JGF (24-07-2017): Permitir acceder a los metodos add y logout
		$this->Auth->allow('add', 'logout');
	}

	/*
	*	Juan Gonzalez
	*	19/07/2017
	*	Metodo 'login'
	*/
	public function login() {

		// JGF (25-07-2017): En caso de estar autenticado redireccionar al metodo admin del controlador posts
		if($this->Auth->login($this->request->data)){
			return $this->redirect(array('controller' => 'posts', 'action' => 'admin'));
		}else{
			if ($this->request->is('post')) {
				if ($this->Auth->login()) {
					return $this->redirect(array('controller' => 'posts', 'action' => 'admin'));
				}
				$this->Session->setFlash(__('Usuario y/o contraseña incorrectos, Favor Verificar'), 'danger');
			}
		}
	}

	/*
	*	Juan Gonzalez
	*	19/07/2017
	*	Metodo 'logout'
	*/
	public function logout() {
		return $this->redirect($this->Auth->logout());
	}

	/*
	*	Juan Gonzalez
	*	19/07/2017
	*	Metodo 'add'
	*	Permite crear un nuevo usuario
	*/
	public function add() {
		if ( $this->request->is('post') ) {
			$this->User->create();
			if ( $this->User->save($this->request->data) ) {
				$this->Session->setFlash( __('Usuario Creado') );
				return $this->redirect('/admin');
			}
			$this->Session->setFlash( __('Ops! El usuario no pudo ser creado correctamente, Favor intente nuevamente'), 'danger' );
		}
	}
}
