<?php
App::uses('AppController', 'Controller');
/**
 * Studentelements Controller
 *
 * @property Studentelement $Studentelement
 * @property PaginatorComponent $Paginator
 */
class StudentelementsController extends AppController {

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
    $this->Studentelement->recursive = 0;    
    $studentelements = $this->Studentelement->find('all', array(
      'order' => 'Studentelement.name ASC'
    ));
    $this->set(compact('studentelements'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Studentelement->exists($id)) {
			throw new NotFoundException(__('Invalid studentelement'));
		}
		$options = array('conditions' => array('Studentelement.' . $this->Studentelement->primaryKey => $id));
		$this->set('studentelement', $this->Studentelement->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Studentelement->create();
			if ($this->Studentelement->save($this->request->data)) {
				$this->Session->setFlash(__('The studentelement has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The studentelement could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$processors = $this->Studentelement->Processor->find('list');
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
		if (!$this->Studentelement->exists($id)) {
			throw new NotFoundException(__('Invalid studentelement'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Studentelement->save($this->request->data)) {
				$this->Session->setFlash(__('The studentelement has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The studentelement could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Studentelement.' . $this->Studentelement->primaryKey => $id));
			$this->request->data = $this->Studentelement->find('first', $options);
		}
		$processors = $this->Studentelement->Processor->find('list');
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
		$this->Studentelement->id = $id;
		if (!$this->Studentelement->exists()) {
			throw new NotFoundException(__('Invalid studentelement'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Studentelement->delete()) {
			$this->Session->setFlash(__('The studentelement has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The studentelement could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
