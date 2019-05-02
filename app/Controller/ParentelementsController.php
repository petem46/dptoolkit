<?php
App::uses('AppController', 'Controller');
/**
 * Parentelements Controller
 *
 * @property Parentelement $Parentelement
 * @property PaginatorComponent $Paginator
 */
class ParentelementsController extends AppController {

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
		$this->Parentelement->recursive = 0;
		$this->set('parentelements', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Parentelement->exists($id)) {
			throw new NotFoundException(__('Invalid parentelement'));
		}
		$options = array('conditions' => array('Parentelement.' . $this->Parentelement->primaryKey => $id));
		$this->set('parentelement', $this->Parentelement->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Parentelement->create();
			if ($this->Parentelement->save($this->request->data)) {
				$this->Session->setFlash(__('The parentelement has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parentelement could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$processors = $this->Parentelement->Processor->find('list');
		$this->set(compact('processors'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Parentelement->exists($id)) {
			throw new NotFoundException(__('Invalid parentelement'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Parentelement->save($this->request->data)) {
				$this->Session->setFlash(__('The parentelement has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parentelement could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Parentelement.' . $this->Parentelement->primaryKey => $id));
			$this->request->data = $this->Parentelement->find('first', $options);
		}
		$processors = $this->Parentelement->Processor->find('list');
		$this->set(compact('processors'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Parentelement->id = $id;
		if (!$this->Parentelement->exists()) {
			throw new NotFoundException(__('Invalid parentelement'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Parentelement->delete()) {
			$this->Session->setFlash(__('The parentelement has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The parentelement could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
