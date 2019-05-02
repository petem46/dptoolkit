<?php
App::uses('AppController', 'Controller');
/**
 * ProcessorsStudentelements Controller
 *
 * @property ProcessorsStudentelement $ProcessorsStudentelement
 * @property PaginatorComponent $Paginator
 */
class ProcessorsStudentelementsController extends AppController {

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
		$this->ProcessorsStudentelement->recursive = 0;
		$this->set('processorsStudentelements', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProcessorsStudentelement->exists($id)) {
			throw new NotFoundException(__('Invalid processors studentelement'));
		}
		$options = array('conditions' => array('ProcessorsStudentelement.' . $this->ProcessorsStudentelement->primaryKey => $id));
		$this->set('processorsStudentelement', $this->ProcessorsStudentelement->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProcessorsStudentelement->create();
			if ($this->ProcessorsStudentelement->save($this->request->data)) {
				$this->Session->setFlash(__('The processors studentelement has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The processors studentelement could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$processors = $this->ProcessorsStudentelement->Processor->find('list');
		$studentelements = $this->ProcessorsStudentelement->Studentelement->find('list');
		$this->set(compact('processors', 'studentelements'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProcessorsStudentelement->exists($id)) {
			throw new NotFoundException(__('Invalid processors studentelement'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProcessorsStudentelement->save($this->request->data)) {
				$this->Session->setFlash(__('The processors studentelement has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The processors studentelement could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ProcessorsStudentelement.' . $this->ProcessorsStudentelement->primaryKey => $id));
			$this->request->data = $this->ProcessorsStudentelement->find('first', $options);
		}
		$processors = $this->ProcessorsStudentelement->Processor->find('list');
		$studentelements = $this->ProcessorsStudentelement->Studentelement->find('list');
		$this->set(compact('processors', 'studentelements'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProcessorsStudentelement->id = $id;
		if (!$this->ProcessorsStudentelement->exists()) {
			throw new NotFoundException(__('Invalid processors studentelement'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProcessorsStudentelement->delete()) {
			$this->Session->setFlash(__('The processors studentelement has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The processors studentelement could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
