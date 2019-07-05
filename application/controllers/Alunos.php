<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alunos extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Alunos_model', 'alunos'); // 'alunos' é um alias para 'Alunos_model'
    }

    public function index() {
        $this->load->view('template/header');
        $lista['alunos'] = $this->alunos->listar();
        $this->load->view('alunosCadastro', $lista);
        $this->load->view('template/footer');
    }

    public function inserir() {
        //nome do campo do vetor deve ser o mesmo campo da tabela no BD
        $dados['Nome'] = mb_convert_case($this->input->post('Nome'), MB_CASE_UPPER);
        $dados['RG'] = $this->input->post('RG');
        $dados['Endereco'] = mb_convert_case($this->input->post('Endereco'), MB_CASE_UPPER);
        $dados['CPF'] = $this->input->post('CPF');
        $dados['Sexo'] = mb_convert_case($this->input->post('Sexo'), MB_CASE_UPPER);
        $this->alunos->inserir($dados);
        redirect('alunos');
    }

    function excluir($id) {
        $this->alunos->deletar($id);
        redirect('alunos');
    }

    function editar($id) {
        $data['alunosEditar'] = $this->alunos->editar($id);
        $this->load->view('template/header');
        $this->load->view('alunosEditar', $data);
        $this->load->view('template/footer');
    }

    function atualizar() {
        $dados['Id_Aluno'] = $this->input->post('Id_Aluno');
        $dados['Nome'] = mb_convert_case($this->input->post('Nome'), MB_CASE_UPPER);
        $dados['RG'] = $this->input->post('RG');
        $dados['Endereco'] = mb_convert_case($this->input->post('Endereco'), MB_CASE_UPPER);
        $dados['CPF'] = $this->input->post('CPF');
        $dados['Sexo'] = mb_convert_case($this->input->post('Sexo'), MB_CASE_UPPER);
        
        $this->alunos->atualizar($dados);
        redirect('alunos');
    }

}
