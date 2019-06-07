<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    // MODEL CRIAR USUARIO
    function createData() {
        $data = array (
            'nome' => $this->input->post('nome'),
            'CRM' => $this->input->post('CRM'),
            'telefone' => $this->input->post('telefone'),
            'estado' => $this->input->post('estado'),
            'cidade' => $this->input->post('cidade'),
            'especialidades' => $this->input->post('especialidades')
            
        );
        $this->db->insert('tbl_name', $data);

    }
    // MODEL LISTAR TODOS OS USUARIOS
    function getAllData() {
        $query = $this->db->query('SELECT * FROM tbl_name');
        return $query->result();
    }
    
    // MODEL EDITAR USUARIOS - GET PELO ID
    function getData($id) {
        $query = $this->db->query('SELECT * FROM tbl_name WHERE `id` =' .$id);
        return $query->row();
    }

    // MODEL GET TODOS AS INFORMAÇÕES DOS USUARIOS
    function updateData($id) {
        $data = array (
            'nome' => $this->input->post('nome'),
            'CRM' => $this->input->post('CRM'),
            'telefone' => $this->input->post('telefone'),
            'estado' => $this->input->post('estado'),
            'cidade' => $this->input->post('cidade'),
            'especialidades' => $this->input->post('especialidades')
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_name', $data);
    }

    // MODEL DELETAR USUARIO
    function deleteData($id) {
        $this->db->where('id', $id);
        $this->db->delete('tbl_name');
    }

}
