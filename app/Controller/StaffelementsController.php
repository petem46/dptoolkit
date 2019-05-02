<?php
App::uses('AppController', 'Controller');
/**
 * Staffelements Controller
 *
 * @property Staffelement $Staffelement
 * @property PaginatorComponent $Paginator
 */
class StaffelementsController extends AppController {

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
		$this->Staffelement->recursive = 0;
		$this->set('staffelements', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Staffelement->exists($id)) {
			throw new NotFoundException(__('Invalid staffelement'));
		}
		$options = array('conditions' => array('Staffelement.' . $this->Staffelement->primaryKey => $id));
		$this->set('staffelement', $this->Staffelement->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Staffelement->create();
			if ($this->Staffelement->save($this->request->data)) {
				$this->Session->setFlash(__('The staffelement has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The staffelement could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$processors = $this->Staffelement->Processor->find('list');
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
		if (!$this->Staffelement->exists($id)) {
			throw new NotFoundException(__('Invalid staffelement'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Staffelement->save($this->request->data)) {
				$this->Session->setFlash(__('The staffelement has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The staffelement could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Staffelement.' . $this->Staffelement->primaryKey => $id));
			$this->request->data = $this->Staffelement->find('first', $options);
		}
		$processors = $this->Staffelement->Processor->find('list');
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
		$this->Staffelement->id = $id;
		if (!$this->Staffelement->exists()) {
			throw new NotFoundException(__('Invalid staffelement'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Staffelement->delete()) {
			$this->Session->setFlash(__('The staffelement has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The staffelement could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
