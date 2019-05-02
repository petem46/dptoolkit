<?php
App::uses('AppController', 'Controller');
/**
 * Datatransfermethods Controller
 *
 * @property Datatransfermethod $Datatransfermethod
 * @property PaginatorComponent $Paginator
 */
class DatatransfermethodsController extends AppController {

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
		$this->Datatransfermethod->recursive = 0;
		$this->set('datatransfermethods', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Datatransfermethod->exists($id)) {
			throw new NotFoundException(__('Invalid datatransfermethod'));
		}
		$options = array('conditions' => array('Datatransfermethod.' . $this->Datatransfermethod->primaryKey => $id));
		$this->set('datatransfermethod', $this->Datatransfermethod->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Datatransfermethod->create();
			if ($this->Datatransfermethod->save($this->request->data)) {
				$this->Session->setFlash(__('The datatransfermethod has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The datatransfermethod could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Datatransfermethod->exists($id)) {
			throw new NotFoundException(__('Invalid datatransfermethod'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Datatransfermethod->save($this->request->data)) {
				$this->Session->setFlash(__('The datatransfermethod has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The datatransfermethod could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Datatransfermethod.' . $this->Datatransfermethod->primaryKey => $id));
			$this->request->data = $this->Datatransfermethod->find('first', $options);
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
		$this->Datatransfermethod->id = $id;
		if (!$this->Datatransfermethod->exists()) {
			throw new NotFoundException(__('Invalid datatransfermethod'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Datatransfermethod->delete()) {
			$this->Session->setFlash(__('The datatransfermethod has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The datatransfermethod could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
