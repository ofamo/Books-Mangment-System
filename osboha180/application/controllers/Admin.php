<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->library('pagination');
		$this->load->library('table');
		$this->load->library('session');

        $this->load->helper('form');
        $this->load->helper('url');
		$this->load->library('form_validation');

	    $this->output->set_header("Cache-Control: no-cache, must-revalidate");
	    		$this->session->keep_flashdata('success');
		$this->session->keep_flashdata('error');

	}
public function index()
	{
		//restrict users to go back to login if session has been set
		if($this->session->userdata('logged_in')){
		
			redirect('admin/B_book/');
		}
		else{				
		//	$this->load->view("book/register");
				redirect("admin/login","refresh");
		}
	}
	public function register(){
		if(isset($_POST['register'])){
			$this->form_validation->set_rules('Name','Name','required');
			$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[admin.email]');
			$this->form_validation->set_rules('Password','Password','required|min_length[8]|max_length[15]');

			//if form validation true
			if($this->form_validation->run()== TRUE){
				$data=array(
				'Name'=>$_POST['Name'],
				'email'=>$_POST['email'],
				'Password'=>$_POST['Password'],
				'flag'=>$_POST['flag']
				);
			$this->db->insert('sign_up',$data);
			$this->session->set_flashdata("success","التسجيل تم بنجاح. انتظر حتى يتم قبولك.");
			redirect("admin/register","refresh");
			}
		}
			
		$this->load->view("book/register");
	}
	
	public function login(){
	if(isset($_POST['login-submit'])){
	
			$this->form_validation->set_rules('email','Email','required|valid_email');
			$this->form_validation->set_rules('Password','Password','required|min_length[8]|max_length[15]');

			//if form validation true
			if($this->form_validation->run()== TRUE){
				$email=$_POST['email'];
				$password=$_POST['Password'];
				//check user in database
				$this->db->select('*');
				$this->db->from('admin');
				$this->db->where(array('email'=>$email,'Password'=>$password));
				$query=$this->db->get();
				$user=$query->row();
				//if user exists
				if($user){
$data['Name']= $user->Name;
$flag=$user->flag;
$id_refe=$user->id;
//redirect to profile page
  if($flag=="0"){ 	
$this->session->set_userdata('logged_in',$data);
redirect(base_url().'admin/B_book/');}
 else if($flag=="1"){
$this->session->set_userdata('logged_in',$data);
			redirect(base_url().'admin/reference/'.$id_refe);

					}
			}else{
					$this->session->set_flashdata("error","Password/ Email error!");
					redirect("admin/login");
				}
	}
		
		
}
$this->load->view("book/login");
}


//Rofaida
public function References(){
    	if($this->session->userdata('logged_in')){
    	    
       $config['base_url'] = 'https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/References/';
       $config['total_rows'] =$this->db->count_all('sign_up');
       $config['per_page'] ='5';
       $config["num_links"] = 2;
		// integrate bootstrap pagination
		$config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['first_link'] = false;
	    $config['last_link'] = false;
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['prev_link'] = 'الخلف';
	    $config['prev_tag_open'] = '<li class="prev">';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_link'] = 'التالي';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		$page = $page= $this->uri->segment(3);
		$this->data['Refe']        =$this->admin_model->get_allrefe($page);

	
		$this->data['pagination']   = $this->pagination->create_links();
	
		$this->template->load('default_layout', 'contents' , 'book/References', $this->data);


}
	else{
			redirect("admin/login","refresh");
		}
 
}

//Omar's Control Panel for users---

public function Panel(){
    	if($this->session->userdata('logged_in')){
    	    
       $config['base_url'] = 'https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/Panel/';
       $config['total_rows'] =$this->db->count_all('admin');
       $config['per_page'] ='5';
       $config["num_links"] = 2;
		// integrate bootstrap pagination
		$config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['first_link'] = false;
	    $config['last_link'] = false;
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['prev_link'] = 'الخلف';
	    $config['prev_tag_open'] = '<li class="prev">';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_link'] = 'التالي';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		$page = $page= $this->uri->segment(3);
		$this->data['Refe']        =$this->admin_model->get_allusers($page);

	
		$this->data['pagination']   = $this->pagination->create_links();
	
		$this->template->load('default_layout', 'contents' , 'book/Users', $this->data);


}
	else{
			redirect("admin/login","refresh");
		}
}

public function delete_user($id_refe){
$data=$this->admin_model->get_user($id_refe);
$id=$data['id'];	
$this->admin_model->del_user($id);	
redirect('admin/Panel/');
}

//Control Panel for users...

public function add_refe($dail,$id_refe){
$data=$this->admin_model->get_reg($id_refe);
$id=$data['id'];	
$Name=$data['Name'];	
$pass=$data['Password'];
$email=$data['email'];
$this->admin_model->add_refe($id,$Name,$pass,$email,$dail);	
redirect('admin/References/');
}

//
	//****************Nour***********************//
	public function reference($id_refe){
	    if($this->session->userdata('logged_in')){
		$config['base_url'] = 'http://localhost/osboha180/admin/reference/'.$id_refe;
		$config['total_rows'] = $this->admin_model->get_num();

		$this->pagination->initialize($config);
		$page=$this->uri->segment(4);	
		$books=$this->admin_model->get_all($page);
		$view['books']=$books;
		$view['id_refe']=$id_refe;
		$content=$this->load->view('body/index',$view,true);
		$arr['content']=$content;
		$data = $this->admin_model->get_refe($id_refe);
		$refe=$data['Name'];
		$arr['id_refe']=$refe;
		$total =$this->admin_model->get_num();
			$arr['total']=$total;
	//	$this->load->view('pages',$arr);
		$this->template->load('default_layout2', 'contents' , 'pages', $arr);
	        
	    }
	else{
			redirect("admin/login","refresh");
		}
	}
	

function review($book_id,$id_refe){
	if($this->session->userdata('logged_in')){
	$view['msg']='';
		if($this->input->post('submit')){
			
			$this->form_validation->set_rules('note','رأي المراجع','required|min_length[200]');
			if($this->form_validation->run()){
			$book['note']=$this->input->post('note');
			$this->admin_model->insert2($book['note'],$book_id,$id_refe);

		$view['msg']='تم حفظ التعديلات';

	}
else{
$view['msg']='تعذر حفظ التعديلات بسبب الأخطاء التالية: '.validation_errors();
}	
		}
		
	$book_q=$this->admin_model->get_by_id2($book_id);
		$view['book_q']=$book_q;
		$arr = array();
		$arr['title'] = 'review';
		$content=$this->load->view('body/review',$view,true);
			$arr['content']=$content;
		//$this->load->view('pages',$arr); 
				$this->template->load('default_layout2', 'contents' , 'pages', $arr);
	}
					else{
			redirect(base_url().'admin');
		}

}
//******************end********************************//
public function A_book($parameter)
	{
		//restrict users to go to home if not logged in
		
		//--------- Omar Work for suggestions control panel ----------
		 if($this->session->userdata('logged_in') && $parameter==3){
		     $data = array();
	$data['title'] = 'A_Book';
	$chk                   ='<input type="checkbox" id="master">';
	$data['pg']      =$parameter;
	    //pagination settings
	    $this->load->model('Admin_model');
		 $dates = $this->Admin_model->get_date();
										foreach ($dates as $date){
											$data['sd'] = $date['start_date'];
											$data['ed'] = $date['end_date'];
											$data['LastMod'] = $date['LastMod'];
										}
		     if($this->input->post('send') != NULL ){
									    
										$this->Admin_model->get_date();
										$postData = $this->input->post();
										$start=$postData['start'];
										$end=$postData['end'];
										$name = $this->session->userdata('logged_in');
										$LastMod = $name['Name'];
										$this->Admin_model->updateDate($start,$end,$LastMod);
									//	$data['response']='تم اعتماد الموعد';
										$this->session->set_flashdata("done","تم اعتماد التصويت بنجاح");
		                                redirect("admin/A_book/3","refresh");
		                                // $this->template->load('default_layout3', 'contents' , 'book/admin_views', $data);
									/*	header('Location:https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/A_book/3');*/
										
									
										
		     
		 }
	    
		/*$config['base_url'] = "https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/A_book/".$parameter;*/
		    
		    $this->template->load('default_layout3', 'contents' , 'book/admin_views', $data);
		}
		//--------- Omar's work ends here --------
		else{
		if($this->session->userdata('logged_in')){
	$data = array();
	$data['title'] = 'A_Book';
	$chk                   ='<input type="checkbox" id="master">';
	$data['pg']      =$parameter;
	    //pagination settings
		$config['base_url'] = "https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/A_book/".$parameter;
	    if($parameter==1)
	 	    {
	 	    	$data['heading'] =array($chk, 'اسم الكتاب', 'صنف الكتاب','دار النشر' ,'رابط الكتاب' ,'المراجع الاول' ,'المراجع الثاني ','إنجاز المراجعة','تعديل','حذف' );
        		$data['pg']     =1;
        		$config['total_rows'] = $this->db->count_all('cp_admin');
	    
	    }
        else if($parameter==2)
        	{
        		$data['heading'] =array($chk, 'اسم الكتاب', 'صنف الكتاب','دار النشر' ,'رابط الكتاب' ,'تعديل' );
        		$data['pg']     =2;
        		$config['total_rows'] = $this->db->count_all('book_delete');
	    }
	    //-------------- Omar's work starts here---------------------------------
	    else if($parameter==4){
	        $date['heading']=array('No', 'اسم المراجع','قبول الطلب' ,'رفض');
	 	    $config['total_rows'] =$this->db->count_all('references');
	    }
	    
	    $config['per_page'] ="5";
		$choice = $config["total_rows"]/$config["per_page"];
        $config["num_links"] = 2;
        //$config["num_links"] = floor($choice);

		// integrate bootstrap pagination
		$config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['first_link'] = false;
	    $config['last_link'] = false;
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['prev_link'] = 'الخلف';
	    $config['prev_tag_open'] = '<li class="prev">';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_link'] = 'التالي';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);

		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        if($parameter==1)
		$data['books']        =$this->admin_model->where_get_books($config["per_page"], $page, NULL);
	    else if($parameter==2)
	    $data['books']        =$this->admin_model->where_get_D_books($config["per_page"], $page, NULL);
	    $data['notes']         =$this->admin_model->get_note();
		$data['cbooks']       =$this->admin_model->get_class();
		$data['rbooks']       =$this->admin_model->get_reviews();
		$data['pagination']   =$this->pagination->create_links();

		//$this->load->view('book/admin_views', $data);
		$this->template->load('default_layout', 'contents' , 'book/admin_views', $data);

		}
		
		else{
			redirect(base_url().'admin');
		}
		}
		
	}
	public function search($parameter)
    {if($this->session->userdata('logged_in')){
        $data = array();
		$data['title'] = 'Search';
    $postData  =$this->input->post('selector');
    $search = ($this->input->post("selector"))? $this->input->post("selector") : "NIL";
    $search = ($this->uri->segment(4)) ? $this->uri->segment(4) : $search;
	$chk                   ='<input type="checkbox" id="master">';

	    //pagination settings
		    $config['base_url'] = "https://osboha180suggestion.000webhostapp.com/osboha180/index.php/admin/search/$parameter/$search/";
	     if($parameter==1)
	 	    {
	 	    	$data['heading'] =array($chk, 'اسم الكتاب', 'صنف الكتاب','دار النشر' ,'رابط الكتاب' ,'المراجع الاول' ,'المراجع الثاني ','إنجاز المراجعة','تعديل','حذف' );
        		$data['pg']     =1;
        		$config['total_rows'] = $this->db->count_all('cp_admin');
        		$config['total_rows'] =$this->admin_model-> get_books_count($search);	
	    
	    }
        else if($parameter==2)
        	{
        		$data['heading'] =array($chk, 'اسم الكتاب', 'صنف الكتاب','دار النشر' ,'رابط الكتاب' ,'تعديل' );
        		$data['pg']     =2;
        		$config['total_rows'] = $this->db->count_all('book_delete');
        		$config['total_rows'] =$this->admin_model-> get_D_books_count($search);	
	    
	    }
		$config['per_page'] ="5";
		$choice = $config["total_rows"]/$config["per_page"];

        $config["num_links"] = 2;
       // $config["num_links"] = floor($choice);

        // integrate bootstrap pagination
		$config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['first_link'] = false;
	    $config['last_link'] = false;
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['prev_link'] = 'الخلف';
	    $config['prev_tag_open'] = '<li class="prev">';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_link'] = 'التالي';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);

		$page= ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;

        // get books
         if($parameter==1)
		$data['books']        =$this->admin_model->where_get_books($config['per_page'],$page, $search);
	    else if($parameter==2)
	    $data['books']        =$this->admin_model->where_get_D_books($config['per_page'],$page, $search);

		$data['cbooks']       =$this->admin_model->get_class();
		$data['References']   =$this->admin_model->get_reviews();
		$data['pagination']   = $this->pagination->create_links();
	    $data['notes']        =$this->admin_model->get_note();
		$data['cbooks']       =$this->admin_model->get_class();
		$data['rbooks']       =$this->admin_model->get_reviews();

		//$this->load->view('book/admin_views', $data);
				$this->template->load('default_layout', 'contents' , 'book/admin_views', $data);
}
		else{
		    	redirect(base_url().'admin');
		}
    }

	public function edit_book($book_id,$ReferencesI,$ReferencesII) {
if($this->session->userdata('logged_in')){
$data=array();
	$data['title'] = 'Edit';
	$test=$this->admin_model->get_reviews();
	
	if (isset($_POST) && !empty($_POST))
	{		
	
		$data= array('ReferencesI' => $this->input->post('selec'));
		$data+= array('ReferencesII' => $this->input->post('selec2'));
		$this->admin_model->update_book($book_id,$data);
	}

	/*for ($i=0; $i <3 ; $i++) { 
		foreach ($test as $value) {
			if($dat[0]==$value['id'])
				$data= array('ReferencesI'      =>  $value['id']);
		 
		    if($dat[1]==$value['id'])
				$data+= array('ReferencesII'      =>  $value['id']);
		}	
	}*/
	$data['book']            =  $this->admin_model->get_book($book_id);
	$data['cbooks']          =  $this->admin_model->get_class();
	$data['reviews']         =  $this->admin_model->get_reviews();
	$data['ReferencesI']     =  $ReferencesI;
	$data['ReferencesII']    =  $ReferencesII;
	$data['notes']         =$this->admin_model->get_note();
	$this->load->view('book/edit_book', $data);
}else{
			redirect(base_url().'admin');
		}
	}
	function delete_book($book_id) {
if($this->session->userdata('logged_in')){
	$data=$this->admin_model->get_book($book_id);
	$BookName=$data['BookName'];
	$BookCategory=$data['BookCategory'];
	$AboutBook=$data['AboutBook'];
	$PublishingHouse=$data['PublishingHouse'];
	$Link=$data['Link'];

	$this->admin_model->del_book($book_id,$BookName,$BookCategory,$AboutBook,$PublishingHouse,$Link);

	redirect('admin/A_book/'.'1');
		}
	else{
			redirect(base_url().'admin');
		}
	}

	function restor_book($book_id) {
if($this->session->userdata('logged_in')){
	$data=$this->admin_model->get_restor_book($book_id);
	$BookName=$data['BookName'];
	$BookCategory=$data['BookCategory'];
	$AboutBook=$data['AboutBook'];
	$PublishingHouse=$data['PublishingHouse'];
	$Link=$data['Link'];
	$this->admin_model->res_book($book_id,$BookName,$BookCategory,$AboutBook,$PublishingHouse,$Link);
	redirect('admin/A_book/'.'2');
		}
	else{
			redirect(base_url().'admin');
		}
	}	
	public function deleteAll()
	{if($this->session->userdata('logged_in')){
	$ids= $this->input->post('ids');
	$a=explode(",", $ids);
	for ($i=0; $i <5 ; $i++) { 
		$data=$this->admin_model->get_book($a[$i]);
		$BookName=$data['BookName'];
		$BookCategory=$data['BookCategory'];
		$AboutBook=$data['AboutBook'];
		$PublishingHouse=$data['PublishingHouse'];
		$Link=$data['Link'];
		$this->admin_model->del_book($a[$i],$BookName,$BookCategory,$AboutBook,$PublishingHouse,$Link);
		
	}
	}
	else{
			redirect(base_url().'admin');
		}
}
	public function restorAll()
	{if($this->session->userdata('logged_in')){
	$ids= $this->input->post('ids');
	$a=explode(",", $ids);
	for ($i=0; $i <count($a) ; $i++) { 
		$data=$this->admin_model->get_restor_book($a[$i]);
		$BookName=$data['BookName'];
		$BookCategory=$data['BookCategory'];
		$AboutBook=$data['AboutBook'];
		$PublishingHouse=$data['PublishingHouse'];
		$Link=$data['Link'];
		$this->admin_model->res_book($a[$i],$BookName,$BookCategory,$AboutBook,$PublishingHouse,$Link);

		
	}
	}
	else{
			redirect(base_url().'admin');
		}

	}

public function B_book()
	{//restrict users to go to home if not logged in
		if($this->session->userdata('logged_in')){
		
		$data = array();
		$data['title'] = 'B_book';
		$data['actions']='حذف/تعديل';
		$data['sort_cols'] = array(
		
			'accepted_reviews' => 'المراجعات المقبولة',
			'thesis' => 'عدد الأطروحات',
			'pages' => 'عدد الصفحات',
			'name' => 'الإسم'
		);
		$config = array();
		//base_url () . 'index.php/questions/page/'.$sortfield.'/'.$order.'/',
		
		
		$config["per_page"] = 5;
		//max number of page links
		$config['num_links'] = 2;
		//use page number as parameter
		$config['use_page_numbers'] = TRUE;

		//set default page uri 
		$page_uri = 5;
		$config["uri_segment"] = $page_uri;
		
		$config["total_rows"] = $this->admin_model->record_count();
		
		$data['page'] = $this->uri->segment($page_uri, 1);
		
		$data['sort_by'] = $this->uri->segment(3, 'name');
		$orderBy = $this->uri->segment(4, "desc");
		$offset = ((int)$data['page']-1) * (int)$config['per_page'];
		$data['total_rows'] = $config["total_rows"];
		if($orderBy == "asc") $data['sort_order'] = "desc"; else $data['sort_order'] = "asc";
		$config["base_url"] = 'https://osboha180suggestion.000webhostapp.com/osboha180/admin/B_book/'.$data['sort_by'].'/'.$orderBy;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		
		$data["data"] = $this->admin_model->get_users($config["per_page"], $offset, $data['sort_by'], $data['sort_order']);
	   
		$this->pagination->initialize($config);
		$data["links"] = $this->pagination->create_links();
	   
		$this->template->load('default_layout', 'contents' , 'home', $data);}
		else{
			redirect(base_url().'admin');
		}
	}
	
	//cumulative_users
	function cumulative_users(){
		if($this->session->userdata('logged_in')){
		$data = array();
		$data['title'] = 'Home';
		$data['sort_cols'] = array(
		
			'accepted_reviews' => 'المراجعات المقبولة',
			'thesis' => 'عدد الأطروحات التراكمية',
			'pages' => 'عدد الصفحات التراكمية',
			'name' => 'الإسم'
		);
		$config = array();
		//base_url () . 'index.php/questions/page/'.$sortfield.'/'.$order.'/',
		$config["per_page"] = 10;
		//max number of page links
		$config['num_links'] = 2;
		//use page number as parameter
		$config['use_page_numbers'] = TRUE;
		//set default page uri 
		$page_uri = 5;
		$config["uri_segment"] = $page_uri;
		
		$config["total_rows"] = $this->admin_model->record_count1();
		
		$data['page'] = $this->uri->segment($page_uri, 1);
		
		$data['sort_by'] = $this->uri->segment(3, 'name');
		$orderBy = $this->uri->segment(4, "desc");
		$offset = ($data['page']-1) * $config['per_page'];
		$data['total_rows'] = $config["total_rows"];
		if($orderBy == "asc") $data['sort_order'] = "desc"; else $data['sort_order'] = "asc";

		$config["base_url"] = base_url().'admin/cumulative_users/'.$data['sort_by'];
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		$id=$this->uri->segment(3);
		$data["data"] = $this->admin_model->cumulative_users($config["per_page"], $offset, $data['sort_by'], $data['sort_order']);
	  
		$this->pagination->initialize($config);
		$data["links"] = $this->pagination->create_links();
	   
	$this->template->load('default_layout', 'contents' , 'cumulative_users', $data);}
	else{
			redirect(base_url().'admin');
		}
	}
	
	//Add user in "quality_books_users"
function add_user(){
	if($this->session->userdata('logged_in')){
	$data = array();
	$data['title'] = 'Home';
	$user_id=$this->uri->segment(3);

		if($this->input->post('submit')){
			$this->form_validation->set_rules('name','اسم العضو','required');
			if($this->form_validation->run()){
			$user['name']=$this->input->post('name');
			$this->admin_model->insert($user);
			redirect('admin/B_book/');
	}
	else{
		redirect('admin/B_book/');
	}
	}
	}
	else{
			redirect(base_url().'admin');
		}	
}
	//delete user from "quality_books_users"
function delete()
	{if($this->session->userdata('logged_in')){
		$data = array();
		$data['title'] = 'Home';
		$user_id=$this->uri->segment(3);
		$this->admin_model->delete($user_id);
	redirect('admin/B_book/');}
	else{
		redirect(base_url().'admin');
	}
		
	}
	//update user from "quality_books_users" and insert copy in "cumulative" table
	public function edit(){
		if($this->session->userdata('logged_in')){
		$data = array();
		$data['title'] = 'Home';
	$user_id=$this->uri->segment(3);
	$view['msg']='';
		if($this->input->post('submit')){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('name','الإسم','required');
if($this->form_validation->run()){
		$user['id']=$user_id;
			$user['name']=$this->input->post('name');
			$user['pages']=$this->input->post('pages');
			$user['thesis']=$this->input->post('thesis');			
			$user['accepted_reviews']=$this->input->post('accepted_reviews');	
			$this->admin_model->update($user_id,$user);
	$view['msg']='تم التعديل بنجاح';
	}
else{
$view['msg']='تعذر التعديل بسببالأخطاء التالية: '.validation_errors();
}	
		}
	$user_q=$this->admin_model->get_by_id($user_id);

		$view['user_q']=$user_q;
		$contents=$this->load->view('edit',$view,true);
			$arr['contents']=$contents;
			$arr['title'] = 'Home';
		$this->template->load('default_layout', 'contents' , 'edit', $arr);}
	else{
		redirect(base_url().'admin');
	}		
}

public function logout(){
		//load session library
		$this->load->library('session');
		$this->session->unset_userdata('logged_in');
		  $this->session->sess_destroy();
	redirect(base_url().'admin/login');
		
	
	}


	}