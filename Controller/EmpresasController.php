<?php
App::uses('AppController', 'Controller');
/**
 * Empresas Controller
 *
 * @property Empresa $Empresa
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EmpresasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session','RequestHandler');
	public $helpers = array('Js'=>array('Jquery'));


	var $paginate = array(
		'limit' => 20, 
		'page' => 1,
		'order'=>array('Empresa.id ASC'));
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Empresa->recursive = 0;
		$this->set('empresas', $this->Paginator->paginate());
		
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Empresa->exists($id)) {
			throw new NotFoundException(__('Empresa invalida'));
		}
		$options = array('conditions' => array('Empresa.' . $this->Empresa->primaryKey => $id));
		$this->set('empresa', $this->Empresa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Empresa->create();
			if ($this->Empresa->save($this->request->data)) {
				$this->Session->setFlash(__('Empresa registrada satisfactoriamente'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Lo siento, no se pudo registrar la empresa'));
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
		if (!$this->Empresa->exists($id)) {
			throw new NotFoundException(__('Empresa invalida'));
		}
		//$empresa=$this->Empresa->find($id);
		//$CUIT=$empresa['Empresa']['EmpresaCUIT'];
		//$convenioFecha=$empresa['Empresa']['ConvenioFecha'];
		//$PorcentajeGasto=$empresa['Empresa']['PorcentajeGasto'];
		//$PagaObraSocial=$empresa['Empresa']['PagaObraSocial'];
		//$PagaseguroTrabajo=$empresa['Empresa']['PagaSeguroTrabajo'];
		//$PagaAsignacionEstimulo=$empresa['Empresa']['PagaAsignacionEstimulo'];

		if ($this->request->is(array('post', 'put'))) {
			if ($this->Empresa->save($this->request->data)) {
				$this->Session->setFlash(__('Se guardaron los cambios satisfactoriamente'));
				//$this->Anexos->add($CUIT,$convenioFecha,$PorcentajeGasto,$PagaObraSocial,$PagaseguroTrabajo,$PagaAsignacionEstimulo);
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudieron realizar los cambios'));
			}
		} else {
			$options = array('conditions' => array('Empresa.' . $this->Empresa->primaryKey => $id));
			$this->request->data = $this->Empresa->find('first', $options);
		}
	}


	public function editar($id = null) {
		if (!$this->Empresa->exists($id)) {
			throw new NotFoundException(__('Empresa Invalida'));
		}
		//esto es para ver algunos datos de la empresa a suspender
		$options = array('conditions' => array('Empresa.' . $this->Empresa->primaryKey => $id));
		$this->set('empresa', $this->Empresa->find('first', $options));
		//aca suspendo
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Empresa->save($this->request->data)) {
				$this->Session->setFlash(__('Se suspendio el convenio Sastifactoriamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo suspender el convenio.'));
			}
		} else {
			$options = array('conditions' => array('Empresa.' . $this->Empresa->primaryKey => $id));
			$this->request->data = $this->Empresa->find('first', $options);
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
		$this->Empresa->id = $id;
		if (!$this->Empresa->exists()) {
			throw new NotFoundException(__('Invalid empresa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Empresa->delete()) {
			$this->Session->setFlash(__('The empresa has been deleted.'));
		} else {
			$this->Session->setFlash(__('The empresa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function suspenderConvenio($id = null){

		if (!$this->Empresa->exists($id)) {
			throw new NotFoundException(__('Empresa Invalida'));
		}
		//esto es para ver algunos datos de la empresa a suspender
		$options = array('conditions' => array('Empresa.' . $this->Empresa->primaryKey => $id));
		$this->set('empresa', $this->Empresa->find('first', $options));
		//aca suspendo
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Empresa->save($this->request->data)) {
				$this->Session->setFlash(__('Se suspendio el convenio Sastifactoriamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo suspender el convenio.'));
			}
		} else {
			$options = array('conditions' => array('Empresa.' . $this->Empresa->primaryKey => $id));
			$this->request->data = $this->Empresa->find('first', $options);
		}

	}


	function search(){

        //$this->pageTitle = '- LISTADO DE FAMILIAS -'; 
        $this->autoRender = false;
        //$search = $this->data[$this->Empresa]['EmpresaCUIT'];
        $opciones=array('conditions' => array('Empresa.EmpresaCUIT LIKE' =>'%'.$this->request->query[''].'%'));	
	    $empresasEncontradas = $this->Empresa->find('all',$opciones);
        /*
        foreach($this->{$this->Empresa}->_schema as $field => $value){
            if($i>0){
            $cond = $cond. " OR ";
            }
            $cond = $cond. " ".$this->Empresa.".".$field." LIKE '%".$search."%' ";
            $i++;
        }
       	*/
       	//$conditions = "id = 1";
		//$this->paginate = array('limit' => 20, 'page' => 1,'conditions' => $conditions);
       	$this->paginate = $opciones;
        $this->set(strtolower($this->name), $this->paginate());
        $this->render('index');

    }


	    public function pdf($id = null){
	    	if (!$this->Empresa->exists($id)) {
			throw new NotFoundException(__('Empresa invalida'));
			}
			$options = array('conditions' => array('Empresa.' . $this->Empresa->primaryKey => $id));
			$this->set('empresa', $this->Empresa->find('first', $options));
	     	$this->layout = 'pdf';
		}


		

		public function download_pdf() {
	 
	    $this->viewClass = 'Media';
	 
	    $params = array(
	 
	        'id' => 'test.pdf',
	        'name' => 'your_test' ,
	        'download' => true,
	        'extension' => 'pdf',
	        'path' => APP . 'files/pdf' . DS
	    );
	 
	    $this->set($params);
 
}
    
}
