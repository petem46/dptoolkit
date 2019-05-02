<?php
App::uses('AppController', 'Controller');
/**
 * Dataelementsources Controller
 *
 * @property Dataelementsource $Dataelementsource
 * @property PaginatorComponent $Paginator
 */
class DataelementsourcesController extends AppController {

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
		$this->Dataelementsource->recursive = 0;
		$this->set('dataelementsources', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Dataelementsource->exists($id)) {
			throw new NotFoundException(__('Invalid dataelementsource'));
		}
		$options = array('conditions' => array('Dataelementsource.' . $this->Dataelementsource->primaryKey => $id));
		$this->set('dataelementsource', $this->Dataelementsource->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dataelementsource->create();
			if ($this->Dataelementsource->save($this->request->data)) {
				$this->Session->setFlash(__('The dataelementsource has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dataelementsource could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Dataelementsource->exists($id)) {
			throw new NotFoundException(__('Invalid dataelementsource'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Dataelementsource->save($this->request->data)) {
				$this->Session->setFlash(__('The dataelementsource has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dataelementsource could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Dataelementsource.' . $this->Dataelementsource->primaryKey => $id));
			$this->request->data = $this->Dataelementsource->find('first', $options);
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
		$this->Dataelementsource->id = $id;
		if (!$this->Dataelementsource->exists()) {
			throw new NotFoundException(__('Invalid dataelementsource'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Dataelementsource->delete()) {
			$this->Session->setFlash(__('The dataelementsource has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The dataelementsource could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
