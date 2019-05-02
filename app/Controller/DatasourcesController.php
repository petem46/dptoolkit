<?php
App::uses('AppController', 'Controller');
/**
 * Datasources Controller
 *
 * @property Datasource $Datasource
 * @property PaginatorComponent $Paginator
 */
class DatasourcesController extends AppController {

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
		$this->Datasource->recursive = 0;
		$this->set('datasources', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Datasource->exists($id)) {
			throw new NotFoundException(__('Invalid datasource'));
		}
		$options = array('conditions' => array('Datasource.' . $this->Datasource->primaryKey => $id));
		$this->set('datasource', $this->Datasource->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Datasource->create();
			if ($this->Datasource->save($this->request->data)) {
				$this->Session->setFlash(__('The datasource has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The datasource could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Datasource->exists($id)) {
			throw new NotFoundException(__('Invalid datasource'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Datasource->save($this->request->data)) {
				$this->Session->setFlash(__('The datasource has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The datasource could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Datasource.' . $this->Datasource->primaryKey => $id));
			$this->request->data = $this->Datasource->find('first', $options);
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
		$this->Datasource->id = $id;
		if (!$this->Datasource->exists()) {
			throw new NotFoundException(__('Invalid datasource'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Datasource->delete()) {
			$this->Session->setFlash(__('The datasource has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The datasource could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
