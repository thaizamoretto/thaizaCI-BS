<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Disciplina extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Disciplina_model', 'disciplina'); // 'disciplina' é um alias para 'Disciplina_model'
    }

    public function index() {
        $this->load->view('template/header');
        $lista['disciplina'] = $this->disciplina->listar();
        $this->load->view('disciplina', $lista);
        $this->load->view('template/footer');
    }

    public function inserir() {
        //nome do campo do vetor deve ser o mesmo campo da tabela no BD
        $dados['Nome_Disciplina'] = mb_convert_case($this->input->post('Nome_Disciplina'), MB_CASE_UPPER);
        $this->disciplina->inserir($dados);
        redirect('disciplina');
    }

    public function excluir($id) {
        $this->disciplina->deletar($id);
        redirect('disciplina');
    }

    public function editar($id) {
        $data['disciplinaEditar'] = $this->disciplina->editar($id);
        $this->load->view('template/header');
        $this->load->view('disciplinaEditar', $data);
        $this->load->view('template/footer');
    }

    public function atualizar() {
        $dados['IdDisciplina'] = $this->input->post('IdDisciplina');
        $dados['Nome_Disciplina'] = mb_convert_case($this->input->post('Nome_Disciplina'), MB_CASE_UPPER);       
        $this->disciplina->atualizar($dados);
        redirect('disciplina');
    }

}