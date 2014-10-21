<?php
App::uses('AppController', 'Controller');
/**
 * Alumnosmaterias Controller
 *
 * @property Alumnosmateria $Alumnosmateria
 * @property PaginatorComponent $Paginator
 */
class AlumnosmateriasController extends AppController {

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
		$this->Alumnosmateria->recursive = 0;
		$this->set('alumnosmaterias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Alumnosmateria->exists($id)) {
			throw new NotFoundException(__('Invalid alumnosmateria'));
		}
		$options = array('conditions' => array('Alumnosmateria.' . $this->Alumnosmateria->primaryKey => $id));
		$this->set('alumnosmateria', $this->Alumnosmateria->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Alumnosmateria->create();
			if ($this->Alumnosmateria->save($this->request->data)) {
				$this->Session->setFlash(__('The alumnosmateria has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alumnosmateria could not be saved. Please, try again.'));
			}
		}
		$materias = $this->Alumnosmateria->Materium->find('list');
		$alumnos = $this->Alumnosmateria->Alumno->find('list');
		$this->set(compact('materias', 'alumnos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Alumnosmateria->exists($id)) {
			throw new NotFoundException(__('Invalid alumnosmateria'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Alumnosmateria->save($this->request->data)) {
				$this->Session->setFlash(__('The alumnosmateria has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alumnosmateria could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Alumnosmateria.' . $this->Alumnosmateria->primaryKey => $id));
			$this->request->data = $this->Alumnosmateria->find('first', $options);
		}
		$materias = $this->Alumnosmateria->Materium->find('list');
		$alumnos = $this->Alumnosmateria->Alumno->find('list');
		$this->set(compact('materias', 'alumnos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Alumnosmateria->id = $id;
		if (!$this->Alumnosmateria->exists()) {
			throw new NotFoundException(__('Invalid alumnosmateria'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Alumnosmateria->delete()) {
			$this->Session->setFlash(__('The alumnosmateria has been deleted.'));
		} else {
			$this->Session->setFlash(__('The alumnosmateria could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
