<?php
App::uses('AppController', 'Controller');
/**
 * ParentelementsProcessors Controller
 *
 * @property ParentelementsProcessor $ParentelementsProcessor
 * @property PaginatorComponent $Paginator
 */
class ParentelementsProcessorsController extends AppController {

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
		$this->ParentelementsProcessor->recursive = 0;
		$this->set('parentelementsProcessors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ParentelementsProcessor->exists($id)) {
			throw new NotFoundException(__('Invalid parentelements processor'));
		}
		$options = array('conditions' => array('ParentelementsProcessor.' . $this->ParentelementsProcessor->primaryKey => $id));
		$this->set('parentelementsProcessor', $this->ParentelementsProcessor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ParentelementsProcessor->create();
			if ($this->ParentelementsProcessor->save($this->request->data)) {
				$this->Session->setFlash(__('The parentelements processor has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parentelements processor could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$processors = $this->ParentelementsProcessor->Processor->find('list');
		$parentelements = $this->ParentelementsProcessor->Parentelement->find('list');
		$this->set(compact('processors', 'parentelements'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ParentelementsProcessor->exists($id)) {
			throw new NotFoundException(__('Invalid parentelements processor'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ParentelementsProcessor->save($this->request->data)) {
				$this->Session->setFlash(__('The parentelements processor has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parentelements processor could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ParentelementsProcessor.' . $this->ParentelementsProcessor->primaryKey => $id));
			$this->request->data = $this->ParentelementsProcessor->find('first', $options);
		}
		$processors = $this->ParentelementsProcessor->Processor->find('list');
		$parentelements = $this->ParentelementsProcessor->Parentelement->find('list');
		$this->set(compact('processors', 'parentelements'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ParentelementsProcessor->id = $id;
		if (!$this->ParentelementsProcessor->exists()) {
			throw new NotFoundException(__('Invalid parentelements processor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ParentelementsProcessor->delete()) {
			$this->Session->setFlash(__('The parentelements processor has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The parentelements processor could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
