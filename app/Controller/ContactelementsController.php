<?php
App::uses('AppController', 'Controller');
/**
 * Contactelements Controller
 *
 * @property Contactelement $Contactelement
 * @property PaginatorComponent $Paginator
 */
class ContactelementsController extends AppController {

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
		$this->Contactelement->recursive = 0;
		$this->set('contactelements', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Contactelement->exists($id)) {
			throw new NotFoundException(__('Invalid contactelement'));
		}
		$options = array('conditions' => array('Contactelement.' . $this->Contactelement->primaryKey => $id));
		$this->set('contactelement', $this->Contactelement->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Contactelement->create();
			if ($this->Contactelement->save($this->request->data)) {
				$this->Session->setFlash(__('The contactelement has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contactelement could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Contactelement->exists($id)) {
			throw new NotFoundException(__('Invalid contactelement'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Contactelement->save($this->request->data)) {
				$this->Session->setFlash(__('The contactelement has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contactelement could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Contactelement.' . $this->Contactelement->primaryKey => $id));
			$this->request->data = $this->Contactelement->find('first', $options);
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
		$this->Contactelement->id = $id;
		if (!$this->Contactelement->exists()) {
			throw new NotFoundException(__('Invalid contactelement'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Contactelement->delete()) {
			$this->Session->setFlash(__('The contactelement has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The contactelement could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
