<?php
App::uses('AppController', 'Controller');
/**
 * Firmantes Controller
 *
 * @property Firmante $Firmante
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FirmantesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Firmante->recursive = 0;
		$this->set('firmantes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Firmante->exists($id)) {
			throw new NotFoundException(__('Invalid firmante'));
		}
		$options = array('conditions' => array('Firmante.' . $this->Firmante->primaryKey => $id));
		$this->set('firmante', $this->Firmante->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($empresa_id) {

		
		if ($this->request->is('post')) {
			$this->Firmante->create();
			if ($this->Firmante->save($this->request->data)) {
				$this->Session->setFlash(__('Se a registrado correctamente'));
				return $this->redirect(array('controller' => 'empresas','action' => 'editar',$empresa_id));
			} else {
				$this->Session->setFlash(__('Error en la carga'));
			}
		}

		$empresas = $this->Firmante->Empresa->find('list');
		
        $this->set('empresa_id',$empresa_id); 

		//$this->Firmante->Empresa->recursive=0;
		//$empresas = $this->Firmante->Empresa->find('list');
		//$anexos = $this->Firmante->Anexo->find('list');
		
		$this->set(compact('empresas', 'anexos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Firmante->exists($id)) {
			throw new NotFoundException(__('Invalid firmante'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Firmante->save($this->request->data)) {
				$this->Session->setFlash(__('The firmante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The firmante could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Firmante.' . $this->Firmante->primaryKey => $id));
			$this->request->data = $this->Firmante->find('first', $options);
		}
		$empresas = $this->Firmante->Empresa->find('list');
		$anexos = $this->Firmante->Anexo->find('list');
		$this->set(compact('empresas', 'anexos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Firmante->id = $id;
		if (!$this->Firmante->exists()) {
			throw new NotFoundException(__('Invalid firmante'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Firmante->delete()) {
			$this->Session->setFlash(__('The firmante has been deleted.'));
		} else {
			$this->Session->setFlash(__('The firmante could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
