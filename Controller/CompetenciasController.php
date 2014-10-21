<?php
App::uses('AppController', 'Controller');
/**
 * Competencias Controller
 *
 * @property Competencia $Competencia
 * @property PaginatorComponent $Paginator
 */
class CompetenciasController extends AppController {

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
		$this->Competencia->recursive = 0;
		$this->set('competencias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Competencia->exists($id)) {
			throw new NotFoundException(__('Invalid competencia'));
		}
		$options = array('conditions' => array('Competencia.' . $this->Competencia->primaryKey => $id));
		$this->set('competencia', $this->Competencia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Competencia->create();
			if ($this->Competencia->save($this->request->data)) {
				$this->Session->setFlash(__('La competencia ha sido guardada.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The competencia could not be saved. Please, try again.'));
			}
		}
		$areas = $this->Competencia->Area->find('list');
		$this->set(compact('areas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Competencia->exists($id)) {
			throw new NotFoundException(__('Invalid competencia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Competencia->save($this->request->data)) {
				$this->Session->setFlash(__('La competencia ha sido guardada.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The competencia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Competencia.' . $this->Competencia->primaryKey => $id));
			$this->request->data = $this->Competencia->find('first', $options);
		}
		$areas = $this->Competencia->Area->find('list');
		$this->set(compact('areas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Competencia->id = $id;
		if (!$this->Competencia->exists()) {
			throw new NotFoundException(__('Invalid competencia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Competencia->delete()) {
			$this->Session->setFlash(__('La competencia ha sido eliminada.'));
		} else {
			$this->Session->setFlash(__('The competencia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
