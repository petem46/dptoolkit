<?php
App::uses('AppController', 'Controller');
/**
 * Lawfulreasons Controller
 *
 * @property Lawfulreason $Lawfulreason
 * @property PaginatorComponent $Paginator
 */
class LawfulreasonsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Lawfulreason->recursive = 0;
		$this->set('lawfulreasons', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Lawfulreason->exists($id)) {
			throw new NotFoundException(__('Invalid lawfulreason'));
		}
		$options = array('conditions' => array('Lawfulreason.' . $this->Lawfulreason->primaryKey => $id));
		$this->set('lawfulreason', $this->Lawfulreason->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lawfulreason->create();
			if ($this->Lawfulreason->save($this->request->data)) {
				$this->Session->setFlash(__('The lawfulreason has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lawfulreason could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Lawfulreason->exists($id)) {
			throw new NotFoundException(__('Invalid lawfulreason'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Lawfulreason->save($this->request->data)) {
				$this->Session->setFlash(__('The lawfulreason has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lawfulreason could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Lawfulreason.' . $this->Lawfulreason->primaryKey => $id));
			$this->request->data = $this->Lawfulreason->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Lawfulreason->id = $id;
		if (!$this->Lawfulreason->exists()) {
			throw new NotFoundException(__('Invalid lawfulreason'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Lawfulreason->delete()) {
			$this->Session->setFlash(__('The lawfulreason has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The lawfulreason could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
