<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudController extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model('Crud_model');
    }

    // LISTAR TODOS OS USUARIOS
	public function index() {
        $data['result'] = $this->Crud_model->getAllData();
		$this->load->view('crudView', $data);
    }

    // CRIA O USUARIO E REDIRECIONA PARA A PAGINA LISTAR TODOS OS USUARIOS APÓS A CRIAÇÃO
    public function create() {
        $this->Crud_model->createData();
        redirect("CrudController");
    }

    // CARREGA A VIEW EDITAR TODOS OS USUARIOS E PEGA OS DADOS DO MODEL 
    public function edit($id) {
        $data['row'] = $this->Crud_model->getData($id);
        $this->load->view('crudEdit', $data);
    }

    // REDIRECIONA O USUARIO APÓS CONFIRMAR A EDIÇÃO 
    public function update($id) {
        $this->Crud_model->updateData($id);
        redirect("CrudController");
    }

    // CHAMA A FUNÇÃO DO MODEL DE DELETAR O USUARIO E REDIRECIONA PARA A MESMA PAGINA LISTAR TO OS USUARIOS 
    public function delete($id) {
        $this->Crud_model->deleteData($id);
        redirect("CrudController");
    }
}
