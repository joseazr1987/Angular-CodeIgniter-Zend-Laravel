<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class personsModel extends CI_Model {

  public function __construct(){
    parent::__construct();
  }

  // Basic CRUD

  public function PersonsList()
  {
    $this->db->where('delete', false); // All persons without delete logically
    return $this->db->get('persons')->result();
  }

  public function Create($person)
  {
    // insert into table persons the person object
    return $this->db->insert('persons', $person);
  }

  public function Update($person)
  {
    $this->db->where('id', $person->id);
    return $this->db->update('persons', $person);
  }

  public function Delete($person)
  {
    $this->db->where('id', $person->id);
    $person->delete = true;
    return $this->db->update('persons', $person);

  }
}

/* End of file  */
/* Location: ./application/models/ */