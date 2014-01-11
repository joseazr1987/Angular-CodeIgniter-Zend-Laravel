<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class personModel extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function Persons()
    {
        return $this->db->get('persons')->result();
    }

    public function Update($person)
    {
        if(is_object($person)){
            $this->db->where('id', $person->id);
            return $this->db->update('persons', $person);
        }
    }

    public function Delete($person)
    {
        if(isset($person->id) && !is_null($person->id))
        {
            $this->db->where('id', $person->id);
            return $this->db->delete('persons');
        }
    }

    public function Create($person)
    {
        if(is_object($person))
        {
            $this->db->insert('persons', $person);
        }
    }
}