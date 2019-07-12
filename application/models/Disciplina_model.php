<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Disciplina_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function inserir($p) {
        return $this->db->insert('disciplina', $p); //'disciplina' é o nome da tabela
    }

    function deletar($id) {
        $this->db->where('IdDisciplina', $id);
        return $this->db->delete('disciplina');
    }

    function editar($id) {
        $this->db->where('IdDisciplina', $id);
        $result = $this->db->get('disciplina');
        return $result->result();
    }

    function atualizar($data) {
        $this->db->where('IdDisciplina', $data['IdDisciplina']);
        $this->db->set($data);
        return $this->db->update('disciplina');
    }

    function listar() {
        $this->db->select('*');
        $this->db->from('disciplina');
        $query = $this->db->get();
        return $query->result();
    }

}