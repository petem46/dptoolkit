<?php
App::uses('AppController', 'Controller');
/**
 * Processors Controller
 *
 * @property Processor $Processor
 * @property PaginatorComponent $Paginator
 */
class ProcessorsController extends AppController {

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
		$this->Processor->recursive = 0;
    $processors = $this->Processor->find('all', array(
      'order' => 'Processor.name ASC'
    ));
    $this->set(compact('processors'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Processor->exists($id)) {
			throw new NotFoundException(__('Invalid processor'));
		}
		$options = array('conditions' => array('Processor.' . $this->Processor->primaryKey => $id));
		$this->set('processor', $this->Processor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Processor->create();
			if ($this->Processor->save($this->request->data)) {
				$this->Session->setFlash(__('The processor has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The processor could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
    $suppliers = $this->Processor->Supplier->find('list', array('order' => 'Supplier.name ASC'));
    $datatransfermethods = $this->Processor->Datatransfermethod->find('list', array('order' => 'Datatransfermethod.method ASC'));
    $dataaccessgroups = $this->Processor->Dataaccessgroup->find('list', array('order' => 'Dataaccessgroup.name ASC'));
    $lawfulreasons = $this->Processor->Lawfulreason->find('list');
    $parentelements = $this->Processor->Parentelement->find('list', array('order' => 'Parentelement.name ASC'));
    $schools = $this->Processor->School->find('list', array('order' => 'School.name ASC'));
    $staffelements = $this->Processor->Staffelement->find('list', array('order' => 'Staffelement.name ASC'));
    $studentelements = $this->Processor->Studentelement->find('list', array('order' => 'Studentelement.name ASC'));
    $this->set(compact('suppliers', 'lawfulreasons', 'datatransfermethods', 'dataaccessgroups', 'parentelements', 'schools', 'staffelements', 'studentelements'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null, $name = null) {
		if (!$this->Processor->exists($id)) {
			throw new NotFoundException(__('Invalid processor'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Processor->save($this->request->data)) {
				$this->Session->setFlash(__('The processor has been updated.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'view', $id));
			} else {
				$this->Session->setFlash(__('The processor could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Processor.' . $this->Processor->primaryKey => $id));
			$this->request->data = $this->Processor->find('first', $options);
		}
		$suppliers = $this->Processor->Supplier->find('list', array('order' => 'Supplier.name ASC'));
    $datatransfermethods = $this->Processor->Datatransfermethod->find('list', array('order' => 'Datatransfermethod.method ASC'));
    $dataaccessgroups = $this->Processor->Dataaccessgroup->find('list', array('order' => 'Dataaccessgroup.name ASC'));
    $lawfulreasons = $this->Processor->Lawfulreason->find('list');
		$parentelements = $this->Processor->Parentelement->find('list', array('order' => 'Parentelement.name ASC'));
		$schools = $this->Processor->School->find('list', array('order' => 'School.name ASC'));
		$staffelements = $this->Processor->Staffelement->find('list', array('order' => 'Staffelement.name ASC'));
		$studentelements = $this->Processor->Studentelement->find('list', array('order' => 'Studentelement.name ASC'));
		$this->set(compact('suppliers', 'lawfulreasons', 'datatransfermethods', 'dataaccessgroups', 'parentelements', 'schools', 'staffelements', 'studentelements', 'id', 'name'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Processor->id = $id;
		if (!$this->Processor->exists()) {
			throw new NotFoundException(__('Invalid processor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Processor->delete()) {
			$this->Session->setFlash(__('The processor has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The processor could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
