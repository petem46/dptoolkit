<?php
App::uses('AppController', 'Controller');
/**
 * Dataaccessgroups Controller
 *
 * @property Dataaccessgroup $Dataaccessgroup
 * @property PaginatorComponent $Paginator
 */
class DataaccessgroupsController extends AppController {

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
		$this->Dataaccessgroup->recursive = 0;
		$this->set('dataaccessgroups', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Dataaccessgroup->exists($id)) {
			throw new NotFoundException(__('Invalid dataaccessgroup'));
		}
		$options = array('conditions' => array('Dataaccessgroup.' . $this->Dataaccessgroup->primaryKey => $id));
		$this->set('dataaccessgroup', $this->Dataaccessgroup->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dataaccessgroup->create();
			if ($this->Dataaccessgroup->save($this->request->data)) {
				$this->Session->setFlash(__('The data access group has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The data access group could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$processors = $this->Dataaccessgroup->Processor->find('list');
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
		if (!$this->Dataaccessgroup->exists($id)) {
			throw new NotFoundException(__('Invalid dataaccessgroup'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Dataaccessgroup->save($this->request->data)) {
				$this->Session->setFlash(__('The data access group has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The data access group could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Dataaccessgroup.' . $this->Dataaccessgroup->primaryKey => $id));
			$this->request->data = $this->Dataaccessgroup->find('first', $options);
		}
		$processors = $this->Dataaccessgroup->Processor->find('list');
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
		$this->Dataaccessgroup->id = $id;
		if (!$this->Dataaccessgroup->exists()) {
			throw new NotFoundException(__('Invalid dataaccessgroup'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Dataaccessgroup->delete()) {
			$this->Session->setFlash(__('The dataaccessgroup has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The dataaccessgroup could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
