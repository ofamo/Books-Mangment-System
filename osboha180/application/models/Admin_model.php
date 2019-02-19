<?php
class Admin_model extends CI_Model{
	public function checkLogin($email)
	{
		$this->db->where('email',$email);
		$query = $this->db->get('admin');
		return $query->row_array();
	} 
	public function register_user($user)
	{ 
	  $query = $this->db->get_where('admin', array('email' => $user['email']));
if ($query->num_rows() == 0) 
    {
		$query = $this->db->insert('admin',$user);
	}
	
else 
{
  return false;
}	
}
	
	function get_admin_by_id($id)
	{
		$this->db->where('id',$id);
		$this->db->limit(1);
		return $this->db->get('admin');
	}
    public function where_get_books($limit,$start, $st = NULL)
	{
		 if ($st == "NIL") $st = "";
        $sql = "select * from cp_admin where BookCategory like '%$st%' limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result_array();
	}
	public function where_get_D_books($limit,$start, $st = NULL)
	{
		if ($st == "NIL") $st = "";
        $sql = "select * from book_delete where BookCategory like '%$st%' limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result_array();
		
	}	
    public function get_books_count($BookCategory)
	{
		$this->db->where('BookCategory', $BookCategory);
		return $this->db->count_all_results('cp_admin');
    }
      public function get_D_books_count($BookCategory)
	{
		$this->db->where('BookCategory', $BookCategory);
		return $this->db->count_all_results('book_delete');
    }
    public function get_book($book_id){
    	$this->db->select('No, BookName, BookCategory, AboutBook, Link ,PublishingHouse, ReferencesI,ReferencesII,ReferenceOpinion,ReferenceOpinion2');
		$this->db->where('No', $book_id);
		$query = $this->db->get('cp_admin');

		return $query->row_array();
    }
    public function get_restor_book($book_id){
    	$this->db->select('No, BookName, BookCategory, AboutBook,PublishingHouse ,Link');
		$this->db->where('No', $book_id);
		$query = $this->db->get('book_delete');

		return $query->row_array();
    }

    public function update_book($book_id, $data)
	{
		$this->db->where('No', $book_id);
		$this->db->update('cp_admin', $data);
	}
	public function del_book($book_id,$name,$ClassBook,$AboutBook,$PublishingHouse,$Link)
	{
	   $data['No']=$book_id;
	   $data['BookName']=$name;
	   $data['BookCategory']=$ClassBook;
	   $data['AboutBook']=$AboutBook;
	   $data['PublishingHouse']=$PublishingHouse;
	   $data['Link']=$Link;
	   $this->db->insert('book_delete',$data);


		$this->db->where('No', $book_id);
		$this->db->delete('cp_admin');
	}
	public function res_book($book_id,$name,$ClassBook,$AboutBook,$PublishingHouse,$Link)
	{
	   $data['No']=$book_id;
	   $data['BookName']=$name;
	   $data['BookCategory']=$ClassBook;
	   $data['AboutBook']=$AboutBook;
	   $data['PublishingHouse']=$PublishingHouse;
	   $data['Link']=$Link;
	   $this->db->insert('cp_admin',$data);


		$this->db->where('No', $book_id);
		$this->db->delete('book_delete');
	}
	
	public function get_class()
	{
		$this->db->select('id , BookCategory');
		$query = $this->db->get('book_categories');

		return $query->result_array();

    }
    public function get_reviews()
	{
		$this->db->select('id , Name,');
     	$this->db->where('flag', '1');
		$query = $this->db->get('admin');

		return $query->result_array();

    }
    

//nour

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function get_users($per_page, $offset, $sortfield, $orderBy, $id=0)
	{
		if(empty($id)){
			//echo $per_page.'fff'.$offset.'fff'.$sortfield.'fff'.$orderBy;
			
			$this->db->order_by("$sortfield", "$orderBy");
			$this->db->limit($per_page,$offset);
			$query = $this->db->get('quality_books_users');
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
					$data[] = $row;
				}
			return $data;
		}
	return $query->result_array();

		} else {
		$query = $this->db->get_where('quality_books_users', array('id' => $id));
		return $query->row_array();
		}
	}
	/*Get Total Pages,thesis,accepted_reviews**/
	   function cumulative_users($per_page, $offset, $sortfield, $orderBy)
	{
			$this->db->order_by("$sortfield", "$orderBy");
		
		$this->db->select('name,SUM(pages) as pages,SUM(thesis) as thesis,SUM(accepted_reviews) as accepted_reviews');
		$this->db->from('cumulative');
		 $this->db->group_by('id'); 
	
		$query = $this->db->get();
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
					$data[] = $row;
				}
			return $data;
		}
		
		return $query->AboutBook();

	}
	
	/***/
	function get_by_id($id)
	{
		$this->db->where('id',$id);
		$this->db->limit(1);
		return $this->db->get('quality_books_users');
	}
	/***/
    public function record_count() {
	
       return $this->db->count_all_results("quality_books_users");
    }
	/***/
	    public function record_count1() {
		
       return $this->db->count_all_results("cumulative");
    }
	/***/
	public	function insert($user)
	{
		$this->db->insert('quality_books_users',$user);	

	}
	/***/
	public function update($id,$user)
	{
		
	$this->db->where('id',$id);
	
	if($user['thesis']=='7'||$user['thesis']=='6'){
	$this->db->update('quality_books_users',$user);
	}
	else{
		if($this->db->update('quality_books_users',$user))
	{ 			
$this->db->where('id',$id);
	$this->db->insert('cumulative',$user);	
	}
	}
	}
	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('quality_books_users');
		if($this->db->get_where('cumulative',array('id' => $id))){
			$this->db->where('id', $id);
			$this->db->delete('cumulative');
		}
	}	   
	
	//****************nour********************//
		function get_all($page)
	{
	$this->db->limit(10,$page);
		return $this->db->get('cp_admin');
		
	}
	function get_num(){
		return $this->db->count_all_results('review_books');
	}
	function get_by_id2($id)
	{
		$this->db->where('No',$id);
		$this->db->limit(1);
		return $this->db->get('cp_admin');
	}
	function get_review_id($id)
	{
		$this->db->where('id',$id);
		$this->db->limit(1);
		return $this->db->get('add_review');
	}
function insert2($note,$book_id,$refe_id)
	{
		$data['ReferenceOpinion']=$note;
		$data['id_book']=$book_id;
		$data['id_reference']=$refe_id;
		$this->db->insert('add_review',$data);
		
		$this->db->where('No',$book_id);
		$query= $this->db->get('cp_admin');
		$query2= $this->db->get('add_review');
		foreach ($query->result() as $row)
		{
		  if($row->ReferencesI==$refe_id) 
		  {
		  	foreach ($query2->result() as $row2)
		  	{
			    $this->db->where('No',$book_id);
			    $this->db->update('cp_admin',array('ReferenceOpinion'    =>  $row2->id));
		  	}
		  }
		  if($row->ReferencesII==$refe_id) 
		  {
		  	foreach ($query2->result() as $row2)
		  	{
			    $this->db->where('No',$book_id);
			    $this->db->update('cp_admin',array('ReferenceOpinion2'    =>  $row2->id));
		  	}
		  }

		}

	}
	function get_refe($id_ref){
		$this->db->where('id',$id_ref);
		$query= $this->db->get('references');
		return $query->row_array();

	}

		function get_admin($id_ref){
		$this->db->where('No',$id_admin);
		$query= $this->db->get('admin');
		return $query->row_array();

	}
	function get_note(){
		$this->db->select('id , ReferenceOpinion, id_book, id_reference');
		$query = $this->db->get('add_review');

		return $query->result_array();

	}
	
	//omar's control panel models
	
	public function get_date(){
			$query = $this->db->query('SELECT start_date,end_date,LastMod FROM start_end WHERE id=1');
			return $query->result_array();
        
}
	
	public function updateDate($start,$end,$LastMod){
		$data['start_date'] = $start;
		$data['end_date'] = $end;
		$data['LastMod'] = $LastMod;
		$this->db->where('id', 1);
		$this->db->update('start_end', $data);
		
	}
	
//rofaida
    function get_allrefe($page)
	{
        $this->db->limit(5,$page);
		$query = $this->db->get('sign_up');

		return $query->result_array();

	}
//

    function add_refe($id,$Name,$pass,$email,$dail){
		

	if($dail == 0 || $dail == 1 ){	
	   $data['id']=$id;
	   $data['Name']=$Name;
	   $data['Password']=$pass;
	   $data['email']=$email;
	   $data['flag'] = $dail;
	   $this->db->insert('admin',$data);
	}
		
		

	   	$this->db->where('id', $id);
		$this->db->delete('sign_up');
	   
	

	}
	function get_reg($id_ref){
		$this->db->where('id',$id_ref);
		$query= $this->db->get('sign_up');
		return $query->row_array();

	}
	//Omar
	
	function get_allusers($page)
	{
        $this->db->limit(5,$page);
		$query = $this->db->get('admin');

		return $query->result_array();

	}
	function del_user($id){
		
	   	$this->db->where('id', $id);
		$this->db->delete('admin');
	}
	function get_user($id_ref){
		$this->db->where('id',$id_ref);
		$query= $this->db->get('admin');
		return $query->row_array();

	}

}