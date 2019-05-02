<?php
App::uses('AppController', 'Controller');
/**
 * ProcessorsStaffelements Controller
 *
 * @property ProcessorsStaffelement $ProcessorsStaffelement
 * @property PaginatorComponent $Paginator
 */
class ProcessorsStaffelementsController extends AppController {

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
		$this->ProcessorsStaffelement->recursive = 0;
		$this->set('processorsStaffelements', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProcessorsStaffelement->exists($id)) {
			throw new NotFoundException(__('Invalid processors staffelement'));
		}
		$options = array('conditions' => array('ProcessorsStaffelement.' . $this->ProcessorsStaffelement->primaryKey => $id));
		$this->set('processorsStaffelement', $this->ProcessorsStaffelement->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProcessorsStaffelement->create();
			if ($this->ProcessorsStaffelement->save($this->request->data)) {
				$this->Session->setFlash(__('The processors staffelement has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The processors staffelement could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$processors = $this->ProcessorsStaffelement->Processor->find('list');
		$staffelements = $this->ProcessorsStaffelement->Staffelement->find('list');
		$this->set(compact('processors', 'staffelements'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProcessorsStaffelement->exists($id)) {
			throw new NotFoundException(__('Invalid processors staffelement'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProcessorsStaffelement->save($this->request->data)) {
				$this->Session->setFlash(__('The processors staffelement has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The processors staffelement could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ProcessorsStaffelement.' . $this->ProcessorsStaffelement->primaryKey => $id));
			$this->request->data = $this->ProcessorsStaffelement->find('first', $options);
		}
		$processors = $this->ProcessorsStaffelement->Processor->find('list');
		$staffelements = $this->ProcessorsStaffelement->Staffelement->find('list');
		$this->set(compact('processors', 'staffelements'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProcessorsStaffelement->id = $id;
		if (!$this->ProcessorsStaffelement->exists()) {
			throw new NotFoundException(__('Invalid processors staffelement'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProcessorsStaffelement->delete()) {
			$this->Session->setFlash(__('The processors staffelement has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The processors staffelement could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
