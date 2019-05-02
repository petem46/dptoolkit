<?php
App::uses('AppController', 'Controller');
/**
 * ProcessorsSchools Controller
 *
 * @property ProcessorsSchool $ProcessorsSchool
 * @property PaginatorComponent $Paginator
 */
class ProcessorsSchoolsController extends AppController {

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
		$this->ProcessorsSchool->recursive = 0;
		$this->set('processorsSchools', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProcessorsSchool->exists($id)) {
			throw new NotFoundException(__('Invalid processors school'));
		}
		$options = array('conditions' => array('ProcessorsSchool.' . $this->ProcessorsSchool->primaryKey => $id));
		$this->set('processorsSchool', $this->ProcessorsSchool->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProcessorsSchool->create();
			if ($this->ProcessorsSchool->save($this->request->data)) {
				$this->Session->setFlash(__('The processors school has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The processors school could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$processors = $this->ProcessorsSchool->Processor->find('list');
		$schools = $this->ProcessorsSchool->School->find('list');
		$this->set(compact('processors', 'schools'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProcessorsSchool->exists($id)) {
			throw new NotFoundException(__('Invalid processors school'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProcessorsSchool->save($this->request->data)) {
				$this->Session->setFlash(__('The processors school has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The processors school could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ProcessorsSchool.' . $this->ProcessorsSchool->primaryKey => $id));
			$this->request->data = $this->ProcessorsSchool->find('first', $options);
		}
		$processors = $this->ProcessorsSchool->Processor->find('list');
		$schools = $this->ProcessorsSchool->School->find('list');
		$this->set(compact('processors', 'schools'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProcessorsSchool->id = $id;
		if (!$this->ProcessorsSchool->exists()) {
			throw new NotFoundException(__('Invalid processors school'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProcessorsSchool->delete()) {
			$this->Session->setFlash(__('The processors school has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The processors school could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
