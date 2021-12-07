<?php


class Form
{
    //Init DB Variable
	private $db;
	
	/*
	 *	Constructor
	 */
	 public function __construct(){
		$this->db = new Database();
	 }

    //  Create a new form
    public function create($data){
        // Insert Query
        $this->db->query("INSERT INTO `forms`(fname, lname, grade, dob, gender, nationality, contactaddress, mnumber, email, guardianname, guardianrelationship, guardiannumber, course, gpa, school) VALUES(:fname, :lname, :grade, :dob, :gender, :nationality, :contactaddress, :mnumber, :email, :guardianname, :guardianrelationship, :guardainnumber, :course, :gpa, :school)");
        // Bind Values
        $this->db->bind(':fname', $data['fname']);
        $this->db->bind(':lname', $data['lname']);
        $this->db->bind(':grade', $data['grade']);
        $this->db->bind(':dob', $data['dob']);
        $this->db->bind(':gender', $data['gender']);
        $this->db->bind(':nationality', $data['nationality']);
        $this->db->bind(':contactaddress', $data['contactaddress']);
        $this->db->bind(':mnumber', $data['mnumber']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':guardianname', $data['guardianname']);
        $this->db->bind(':guardianrelationship', $data['guardianrelationship']);
        $this->db->bind(':guardainnumber', $data['guardainnumber']);
        $this->db->bind(':course', $data['course']);
        $this->db->bind(':gpa', $data['gpa']);
        $this->db->bind(':school', $data['school']);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function getForm($id){
        $this->db->query("SELECT * FROM `forms` WHERE id = :formId");
        $this->db->bind(':formId', $id);
        $results = $this->db->single();
        return $results;
    }

    public function getForms()
    {
        $this->db->query("SELECT * FROM `forms`");
        $results = $this->db->resultset();
        return $results;
    }

    public function deleteForm($id)
    {
        $this->db->query("DELETE FROM `forms` WHERE id= :formId");
        $this->db->bind(':formId', $id);
        
        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
        
    }

}

?>