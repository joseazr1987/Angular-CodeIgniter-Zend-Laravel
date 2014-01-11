<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Persons extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('personModel');
  }
  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {
    /*$res = $this->personModel->Persons();
    echo '<pre class="prettyprint>' , var_dump($res) , '</pre>';*/

    $p['persons'] = $this->personModel->Persons();

    $c['content'] = $this->load->view('Persons/persons.php', $p, true);
    $this->load->view('_shared/_layout.php', $c);
  }

  public function All()
  {
    $persons = $this->personModel->Persons();
    echo json_encode($persons);
  }

  public function Update()
  {
    $person = (Object)$_GET;

    if(!empty($person)){
      $this->personModel->Update($person);
    }
  }

  public function Delete()
  {
    $person = (Object)$_GET;

    if(!empty($person))
    {
      $this->personModel->delete($person);
    }
  }

  public function Create()
  {
    $person = (Object)$_GET;

    if(!empty($person))
    {
      $person->guid = uniqid('',true);
      $this->personModel->Create($person);
    }

  }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */