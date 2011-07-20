<?php
class AlbergadosController extends AppController {

	var $name = 'Albergados';
        var $helpers = array('Html','Form');
        var $components = array('Report');

	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }
	
	function index() {
		$this->Albergado->recursive = 0;
		$this->set('albergados', $this->paginate());
	}
        
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid albergado', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('albergado', $this->Albergado->read(null, $id));
	}

	function add() {
            $this->set('closeModalbox', false);
		if (!empty($this->data)) {
                        $this->Albergado->set($this->data);
                        if($this->Albergado->validates()){
                            $this->Albergado->create();
                            echo "
        <script type='text/javaScript'>
        alert(\"$this->data\");
           //status es el contenido del error
        </script>";
                            if ($this->Albergado->save($this->data)) {
                            	$this->Session->setFlash(__('The albergado has been saved', true));
                                    if (!$this->RequestHandler->isAjax()) {
                                            $this->redirect(array('action' => 'index'));
                                    }
                                    $this->set('closeModalbox', true);
                            } else {
                                    $Albergado = $this->Albergado->invalidFields;
                                    $data = compact('Albergado');
                                    $this->Session->setFlash(__('The albergado could not be saved. Please, try again.', true));
                                    $this->set('errors', compact('message','data'));
                            }
                        }else{
                            $Albergado = $this->Albergado->invalidFields;
                            $data = compact('Albergado');
                            $this->Session->setFlash(__('The albergado could not be saved. Please, try again.', true));
                            $this->set('errors', compact('message','data'));
                        }
		}
		$personas = $this->Albergado->Persona->find('list');
		$casas = $this->Albergado->Casa->find('list');
		$fotoImagens = $this->Albergado->FotoImagen->find('list');
		$this->set(compact('personas', 'casas', 'fotoImagens'));
	}
        
       	function edit($id = null) {
            $this->set('closeModalbox', false);
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid albergado', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
                    if($this->Albergado->validates()){
			if ($this->Albergado->save($this->data)) {
				$this->Session->setFlash(__('The albergado has been saved', true));
                                if(!$this->RequestHandler->isAjax()){
                                    $this->redirect(array('action' => 'index'));
                                }
                                $this->set('closeModalbox', true);

			} else {
				$this->Session->setFlash(__('The albergado could not be saved. Please, try again.', true));
			}
                    }
		}
		if (empty($this->data)) {
			$this->data = $this->Albergado->read(null, $id);
		}
		$personas = $this->Albergado->Persona->find('list');
		$casas = $this->Albergado->Casa->find('list');
		$fotoImagens = $this->Albergado->FotoImagen->find('list');
		$this->set(compact('personas', 'casas', 'fotoImagens'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for albergado', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Albergado->delete($id)) {
			$this->Session->setFlash(__('Albergado deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Albergado was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function createReport()
	{
		if (!empty($this->data))
		{
			//Determine if user is pulling existing report or deleting report
			if(isset($this->params['form']['existing']))
			{
				if($this->params['form']['existing']=='Pull')
				{
					//Pull report
					$this->Report->pull_report($this->data['Misc/saved_reports']);
				}
				else if($this->params['form']['existing']=='Delete')
				{
					//Delete report
					$this->Report->delete_report($this->data['Misc']['saved_reports']);

					//Return user to form
					$this->flash('Your report has been deleted.','/'.$this->name.'/'.$this->action.'');
				}
			}
			else
			{
				//Filter out fields
				$this->Report->init_display($this->data);

				//Set sort parameter
				if(!isset($this->params['form']['order_by_primary'])) { $this->params['form']['order_by_primary']=NULL; }
				if(!isset($this->params['form']['order_by_secondary'])) { $this->params['form']['order_by_secondary']=NULL; }
				$this->Report->get_order_by($this->params['form']['order_by_primary'], $this->params['form']['order_by_secondary']);

				//Store report name
				if(!empty($this->params['form']['report_name']))
				{
					$this->Report->save_report_name($this->params['form']['report_name']);
				}

				//Store report if save was executed
				if($this->params['form']['submit']=='Create And Save Report')
				{
					if(empty($this->params['form']['report_name']))
					{
						//Return user to form
						$this->flash('Must enter a report name when saving.','/'.$this->name.'/'.$this->action.'');
					}
					else
					{
						$this->Report->save_report();
					}
				}
			}

			//Set report fields
			$this->set('report_fields', $this->Report->report_fields);

			//Set report name
			$this->set('report_name', $this->Report->report_name);

			//Allow search to go 2 associations deep
			$this->{$this->modelClass}->recursive = 2;

			//Set report data
			$this->set('report_data', $this->{$this->modelClass}->find('all',NULL,$this->Report->order_by));
		}
		else
		{
			//Setup options for report component
			/*
				You can setup a level two association by doing the following:
				"VehicleDriver"=>"Employee" ie $models = Array ("Vehicle", "VehicleDriver"=>"Employee");
				Please note that all fields within a level two association cannot be sorted.
			*/
			$models = Array ("Albergado", "Casas"=>"Casa");

			//Set array of fields
			$this->set('report_form', $this->Report->init_form($models));

			//Set current controller
			$this->set('cur_controller', $this->name);

			//Pull all existing reports
			$this->set('existing_reports', $this->Report->existing_reports());
		}
	}
}
