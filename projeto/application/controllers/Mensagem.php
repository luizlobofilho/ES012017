
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mensagem extends CI_Controller {

    public function index()
    {
        $idforum = $this->input->get('id');
        $dscforum = $this->input->get('forum');
        $this->load->model('Mensagem_model');

        // cria o objeto que recebe os dados da model
        $objModel = new mensagem_model();
        $mensagens = $objModel->getMensagens($idforum);
        $this->load->view('comum/header');
        $this->load->view('comum/menuLogged');
        $this->load->view('mensagem',array('mensagens' => $mensagens));


    }

}



