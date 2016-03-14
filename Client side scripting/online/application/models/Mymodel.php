<?php
class Mymodel extends CI_Model{
function __construct()
{
parent::__construct();
$this->load->library('session');

}


	 
	public function insert()
	{
		$data=array
		(

          'username' =>$this->input->post('uname'),
          'password' =>$this->input->post('pswrd'),
          'fname' =>$this->input->post('fname'),
          'lname' =>$this->input->post('lname'),
          'address' =>$this->input->post('add'),
          'dob' =>$this->input->post('rbirth'),
          'gender' =>$this->input->post('gender'),
          'mob' =>$this->input->post('phone'),
          
          
          'country' =>$this->input->post('country')
		);
		//print_r($data);

		$this->db->query("call csp_insert2(?,?,?,?,?,?,?,?,?)",$data);
     echo "you are successfully registerd";

	}
	public function  logininsert()

	
	{
		$data= array
		(
		  'user_name' =>$this->input->post('uname'),
          'password' =>$this->input->post('pswrd'),
          );

       $this->db->select('*');
        $this->db->from('tbl_login');
        $where=$this->db->where($data);
        $query=$this->db->get();
        foreach ($query->result() as $row )
         {
          //print_r($row);
          $role=$row->fk_int_userrole_id;
          $id=$row->pk_int_login_id;
          $sess['id']=$id;
          $sess['name']=$row->user_name;
          $this->session->set_userdata($sess);


        // echo ($role);
        }


        if($query->result()==NULL)
        {
        	echo "Invalid Email Address";
        }
        else if($query!==""&&$role==1)
        {
          $this->load->helper('url');
              // $this->load->view('header');
              $this->load->view('admin');
              $this->load->view('footer');
        }
       else if($query!==""&&$role==2)
        {


        
          $idd['fk_int_login_id']=$row->pk_int_login_id;
          //print_r($imidhundd);
          $this->db->select('*');
          $this->db->from('tbl_reg');
          $where=$this->db->where($idd);
          $query1=$this->db->get();
        foreach ($query1->result() as $row1 )

         {
            $stts=$row1->vchr_status;
            //echo ($stts);
         
          }
          if($stts==0)
          {
            $this->load->helper('url');
            $this->load->view('blocked');
          }
          
        	else if ($role==2&&$stts==1)

        	 {
            
        		$this->load->helper('url');
		        // $this->load->view('customer');
		        $this->load->view('newcust');
		        $this->load->view('footer');
        	}

            
            
           }
         
  }
    
    
    public function addcategory()
    {
      $data= array
    (
          'catname' =>$this->input->post('cat'),
          'descri' =>$this->input->post('desc'),
          );
    print_r($data);

        $this->db->query("call csp_addcategory(?,?)",$data);
    }
	public function subcategory()
  {
    $query=$this->db->query('select * from tbl_category');
    return $query->result();
  }
  
  public function insertsubc()
  {

    $data = array
    (
       
       'subcatname'=>$this->input->post('scnme'),
       'subdes'=>$this->input->post('dsc'),
       'fk'=>$this->input->post('fkct')
     );

    $this->db->query("call csp_addsubcat(?,?,?)",$data);
  }
  public function addproduct($images)
  {
    $data = array
    (
    'pname'=>$this->input->post('pname'),
    'pdes'=>$this->input->post('pdes'),
    'color'=>$this->input->post('pcolor'),
    'sprice'=>$this->input->post('fsprice'),
    'bprice'=>$this->input->post('fbprice'),
    'pimg'=>$images['upload_data']['file_name'],
    
    'fk_subcat_id'=>$this->input->post('pscatname'),
    'stock'=>$this->input->post('pstock')
    );
    $this->db->query("call csp_product(?,?,?,?,?,?,?,?)",$data);
  }

  function updatecategory()
  {
  $data = array
  (
    
    'id'=>$this->input->post('cid'),
    'name'=>$this->input->post('cname')

   );
  $this->db->query("call csp_edit(?,?)",$data);
   
  }
  function deletecategory()
  {
    $data = array
    (
       'id'=>$this->input->post('name')

     );
    $this->db->query("call csp_deletecat(?)",$data);
  }

  function updatesubcategory()
  {
    $data  = array
    (
       'id'=>$this->input->post('scid'),
       'name'=>$this->input->post('ssname'),
       'dscr'=>$this->input->post('sdes')

     );
    // echo $this->input->post('scid');
    // echo $this->input->post('ssname');
    $this->db->query("call csp_editsub(?,?,?)",$data);
  }
  function deletesubcategory()
  {
    $data['catid']=$this->input->post('name');
    $this->db->query("call csp_deletesub(?)",$data);
  }
  function updateproduct()
  {
    $data = array
    (
        'id'=>$this->input->post('productid'),
        'name'=>$this->input->post('pname'),
        'descr'=>$this->input->post('pdesc'),
        'clr'=>$this->input->post('pcolor'),
        'sprc'=>$this->input->post('fsprice'),
        'bprc'=>$this->input->post('fbprice'),
        'imag'=>$this->input->post('img'),
        'stck'=>$this->input->post('pstock')

      );
    $this->db->query("call csp_editpro(?,?,?,?,?,?,?,?)",$data);
  }
  function removepro()
  {
    $data['id']=$this->input->post('name');
    $this->db->query("call csp_deletepro(?)",$data);
  }
 function removecustomer()
 {
  $data['id']=$this->input->post('name');
  $this->db->query("call csp_suspend(?)",$data);
 }
  public function selectcat()
  {
    $query=$this->db->query('select * from tbl_category');
    return $query->result();

  }
  function selectreg()
  {
    $query=$this->db->query('select * from tbl_reg');
    return $query->result();
  }
  public function showcat(){
    $data['pk_int_category_id']=$this->input->post('name');
    $this->db->select('*');
    $this->db->from('tbl_category');
    $where=$this->db->where($data);
    $query=$this->db->get();
    return $query->result();
  }
  function pksubcategory()
  {
    $data['pk_int_subcategory_id']=$this->input->post('name');

    $this->db->select('*');
    $this->db->from('tbl_subcategory');
    $where=$this->db->where($data);
    $query=$this->db->get();
    return $query->result();
  }
  
  function viewsubc()
  {
    $data['fk_int_category_id']=$this->input->post('name');
    $this->db->select('*');
    $this->db->from('tbl_subcategory');
    $where=$this->db->where($data);
    $query=$this->db->get();
    
    return $query->result();
  }
  function selectsubcat()
  {

    $data['fk_int_category_id']=$this->input->post('name');

    $this->db->select('*');
    $this->db->from('tbl_subcategory');
    $where=$this->db->where($data);
    $query=$this->db->get();
    return $query->result();
  }
  function tblproduct()
  {
    
    $data['fk_int_subcategory_id']=$this->input->post('name');
    //print_r ($data);
    $this->db->select('*');
    $this->db->from('tbl_stock');
    
    $this->db->join('tbl_product','pk_int_productid=fk_int_product_id');
    $where=$this->db->where($data);
    $query=$this->db->get();
    return $query->result();
  }
  function modifyproduct()
  {
    $data['pk_int_productid']=$this->input->post('name');
    $this->db->select('*');
    $this->db->from('tbl_product');
    $where=$this->db->where($data);
    $query=$this->db->get();
    return $query->result();
   
  }
  function productbuy()
  {
     $ids=$this->session->userdata();
    
    $data = array
    (
       'fk_product_id'=>$this->input->post('name'),
       'fk_int_login_id'=>$ids['id'],
          
       'amtt'=>$this->input->post('amount'),
       'qua'=>$this->input->post('quantityq'),
        );
print_r($data);
     $this->db->query("call csp_purchase(?,?,?,?)",$data);

  }
  function brougtproduct()
  {
     $ids=$this->session->userdata();
     $data= array
     (
         'fk_product_id'=>$this->input->post('name'),
         'fk_int_login_id'=>$ids['id'],
         'amtt'=>$this->input->post('amount'),
         'qua'=>$this->input->post('quantityq')
      );
     print_r($data);
     $this->db->query("call csp_purchase(?,?,?,?)",$data);
  }

  function purchde()
  {
    
    $data['fk_int_login_id']=$this->input->post('name');
    
    $this->db->select('*');
    $this->db->from('tbl_purchase');
    $this->db->join('tbl_product','fk_int_productid=pk_int_productid');
    $where=$this->db->where($data);
    $query=$this->db->get();
    return $query->result();
   }

   function viewproductdetails()
   {
    $data['pk_int_productid']=$this->input->post('name');
   
    $this->db->select('*');
    $this->db->from('tbl_product');
    $this->db->join('tbl_stock','fk_int_product_id=pk_int_productid');
    $where=$this->db->where($data);
    $query=$this->db->get();
    //echo ($query);
    return $query->result();
   }
    
    function homprdct()
    {
      $this->db->select('*');
      $this->db->from('tbl_product');
      $this->db->join('tbl_stock','fk_int_product_id=pk_int_productid');
       $query=$this->db->get();
  
    return $query->result();
    }
}
