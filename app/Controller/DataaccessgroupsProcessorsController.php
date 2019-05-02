<?php
App::uses('AppController', 'Controller');
/**
 * DataaccessgroupsProcessors Controller
 *
 * @property DataaccessgroupsProcessor $DataaccessgroupsProcessor
 * @property PaginatorComponent $Paginator
 */
class DataaccessgroupsProcessorsController extends AppController {

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
		$this->DataaccessgroupsProcessor->recursive = 0;
		$this->set('dataaccessgroupsProcessors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DataaccessgroupsProcessor->exists($id)) {
			throw new NotFoundException(__('Invalid dataaccessgroups processor'));
		}
		$options = array('conditions' => array('DataaccessgroupsProcessor.' . $this->DataaccessgroupsProcessor->primaryKey => $id));
		$this->set('dataaccessgroupsProcessor', $this->DataaccessgroupsProcessor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DataaccessgroupsProcessor->create();
			if ($this->DataaccessgroupsProcessor->save($this->request->data)) {
				$this->Session->setFlash(__('The dataaccessgroups processor has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dataaccessgroups processor could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$dataaccessgroups = $this->DataaccessgroupsProcessor->Dataaccessgroup->find('list');
		$processors = $this->DataaccessgroupsProcessor->Processor->find('list');
		$this->set(compact('dataaccessgroups', 'processors'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DataaccessgroupsProcessor->exists($id)) {
			throw new NotFoundException(__('Invalid dataaccessgroups processor'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DataaccessgroupsProcessor->save($this->request->data)) {
				$this->Session->setFlash(__('The dataaccessgroups processor has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dataaccessgroups processor could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('DataaccessgroupsProcessor.' . $this->DataaccessgroupsProcessor->primaryKey => $id));
			$this->request->data = $this->DataaccessgroupsProcessor->find('first', $options);
		}
		$dataaccessgroups = $this->DataaccessgroupsProcessor->Dataaccessgroup->find('list');
		$processors = $this->DataaccessgroupsProcessor->Processor->find('list');
		$this->set(compact('dataaccessgroups', 'processors'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DataaccessgroupsProcessor->id = $id;
		if (!$this->DataaccessgroupsProcessor->exists()) {
			throw new NotFoundException(__('Invalid dataaccessgroups processor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DataaccessgroupsProcessor->delete()) {
			$this->Session->setFlash(__('The dataaccessgroups processor has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The dataaccessgroups processor could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
