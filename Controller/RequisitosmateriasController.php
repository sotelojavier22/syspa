<?php
App::uses('AppController', 'Controller');
/**
 * Requisitosmaterias Controller
 *
 * @property Requisitosmateria $Requisitosmateria
 * @property PaginatorComponent $Paginator
 */
class RequisitosmateriasController extends AppController {

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
		$this->Requisitosmateria->recursive = 0;
		$this->set('requisitosmaterias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Requisitosmateria->exists($id)) {
			throw new NotFoundException(__('Invalid requisitosmateria'));
		}
		$options = array('conditions' => array('Requisitosmateria.' . $this->Requisitosmateria->primaryKey => $id));
		$this->set('requisitosmateria', $this->Requisitosmateria->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Requisitosmateria->create();
			if ($this->Requisitosmateria->save($this->request->data)) {
				$this->Session->setFlash(__('The requisitosmateria has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The requisitosmateria could not be saved. Please, try again.'));
			}
		}
		$ofertacarreas = $this->Requisitosmateria->Ofertacarrea->find('list');
		$materias = $this->Requisitosmateria->Materium->find('list');
		$this->set(compact('ofertacarreas', 'materias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Requisitosmateria->exists($id)) {
			throw new NotFoundException(__('Invalid requisitosmateria'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Requisitosmateria->save($this->request->data)) {
				$this->Session->setFlash(__('The requisitosmateria has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The requisitosmateria could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Requisitosmateria.' . $this->Requisitosmateria->primaryKey => $id));
			$this->request->data = $this->Requisitosmateria->find('first', $options);
		}
		$ofertacarreas = $this->Requisitosmateria->Ofertacarrea->find('list');
		$materias = $this->Requisitosmateria->Materium->find('list');
		$this->set(compact('ofertacarreas', 'materias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Requisitosmateria->id = $id;
		if (!$this->Requisitosmateria->exists()) {
			throw new NotFoundException(__('Invalid requisitosmateria'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Requisitosmateria->delete()) {
			$this->Session->setFlash(__('The requisitosmateria has been deleted.'));
		} else {
			$this->Session->setFlash(__('The requisitosmateria could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
