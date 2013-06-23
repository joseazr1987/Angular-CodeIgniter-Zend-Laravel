<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Persons extends CI_Controller {

/**
 * @var $_getFormData   this var get the data send from the php form
 * @var $_person        this var format to json the var $_getFormData
 * @access protected
 */

  protected $_getFormData, $_person;

  public function __construct(){
    parent::__construct();

    /**
     * @see for more data see http://php.net/manual/en/function.file-get-contents.php
     */
    $this->_getFormData = file_get_contents("php://input");

    // convert the data to json format
    $this->_person = json_decode($this->_getFormData);

    // model person
    $this->load->model('personsModel');
  }

  public function index(){
    // This way we can do one page with the structure and only change the content
    // @see structure view('load the view', 'data send to view', return value)
    $c['content'] = $this->load->view('Person/persons.php', '', true);
    $this->load->view('_shared/_layout.php', $c);
  }

  public function PersonsList()
  {
    $res = $this->personsModel->PersonsList();
    echo json_encode($res);
  }

  public function Add()
  {
    // this time only need the view
    $data['action'] = "Add";
    $this->load->view('Person/person.php', $data);
  }

  public function Create()
  {
    // send the object person with values to the method model Create and print the result of the query
    echo $this->personsModel->Create($this->_person);
  }

  public function Edit()
  {
    // this time only need the view
    $data['action'] = "Edit";
    $this->load->view('Person/person.php', $data);
  }

  public function Update()
  {
    // send the object person with values to the method model Update and print the result of the query
    echo $this->personsModel->Update($this->_person);
  }

  public function Delete()
  {
    // send the object person with values to the method model Delete and print the result of the query
    echo $this->personsModel->Delete($this->_person);
  }
}

/* End of file persons.php */
/* Location: ./application/controllers/persons.php */