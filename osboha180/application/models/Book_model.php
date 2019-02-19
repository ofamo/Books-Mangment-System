<?php
class Book_model extends CI_Model{


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
    	$this->db->select('No, BookName, BookCategory, AboutBook, Link ,PublishingHouse, ReferencesI,ReferencesII,ReferenceOpinion');
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
		$this->db->select('id , References');
		$query = $this->db->get('References');

		return $query->result_array();

    }
    
    //omar's work
    
    public function get_date(){
			$query = $this->db->query('SELECT start_date,end_date FROM start_end WHERE id=1');
			return $query->result_array();
        
}
	
	public function updateDate($start,$end){
		$data['start_date'] = $start;
		$data['end_date'] = $end;
		$this->db->where('id', 1);
		$this->db->update('start_end', $data);
		
	}
    
}