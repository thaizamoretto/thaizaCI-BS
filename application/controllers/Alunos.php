<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alunos extends CI_Controller {

    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('estou_logado')){
            redirect('Login');
        }
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
        $result = $this->alunos->inserir($dados);
        
        if($result==true){
            $this->session->set_flashdata ('true','msg');
            redirect('alunos');
        }else{
            $this->session->set_flashdata ('err','msg');
            redirect('alunos');
        }
    }

    public function excluir($id) {
        $result = $this->alunos->deletar($id);
        if($result==true){
            $this->session->set_flashdata ('excluirSucesso','msg');
            redirect('alunos');
        }else{
            $this->session->set_flashdata ('err','msg');
            redirect('alunos');
        }
    }

    public function editar($id) {
        $data['alunosEditar'] = $this->alunos->editar($id);
        $this->load->view('template/header');
        $this->load->view('alunosEditar', $data);
        $this->load->view('template/footer');
    }

    public function atualizar() {
        $dados['Id_Aluno'] = $this->input->post('Id_Aluno');
        $dados['Nome'] = mb_convert_case($this->input->post('Nome'), MB_CASE_UPPER);
        $dados['RG'] = $this->input->post('RG');
        $dados['Endereco'] = mb_convert_case($this->input->post('Endereco'), MB_CASE_UPPER);
        $dados['CPF'] = $this->input->post('CPF');
        $dados['Sexo'] = mb_convert_case($this->input->post('Sexo'), MB_CASE_UPPER);
        
        $result= $this->alunos->atualizar($dados);
        if($result==true){
            $this->session->set_flashdata ('trueUpdate','msg');
            redirect('alunos');
        }else{
            $this->session->set_flashdata ('err','msg');
            redirect('alunos');
        }
    }
}