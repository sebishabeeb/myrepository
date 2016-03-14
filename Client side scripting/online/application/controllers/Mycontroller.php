<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mycontroller extends CI_Controller {

	function __construct()
  {
    parent::__construct();
    $this->load->model('Mymodel');
    $this->load->helper('url','form');
  }
  public function subc()
  {
     header('access-control-allow-origin: *');
     $this->load->model('Mymodel');
     $data['cat']=$this->Mymodel->subcategory();
     
      $this->load->helper('url');
      $this->load->view('admin');
$this->load->view('subca',$data);
    $this->load->view('footer'); 
    



  }
  function editcat()
  {
    header('access-control-allow-origin: *');
    $this->load->model('Mymodel');
  $data['edt']=$this->Mymodel->selectcat();

  $this->load->view('admin');
  $this->load->view('editcategory',$data);
  
  
    $this->load->view('footer'); 
  }
  function updateinput(){
    $this->load->model('Mymodel');
    $this->Mymodel->updatecategory($_POST);
  }
  function updatecat(){
    header('access-control-allow-origin: *');
    $this->load->model('Mymodel');
  $data['edtcat']=$this->Mymodel->showcat($_POST);
   
   $this->load->view('catedit',$data);
   
  }
  function deletecatnm()
  {  
    header('access-control-allow-origin: *');
    $this->load->model('Mymodel');
    $this->Mymodel->deletecategory($_POST);
  }
  function editsubcat()
  {
    header('access-control-allow-origin: *');
     $this->load->model('Mymodel');
     $data['vsb']=$this->Mymodel->selectcat();
      
      $this->load->view('admin');
  $this->load->view('editsubcategory',$data);
  
  
    $this->load->view('footer');
  }

  function updatesubcatshow(){
    header('access-control-allow-origin: *');
    $this->load->model('Mymodel');
  $data['encodesub']=$this->Mymodel->pksubcategory($_POST);
   
   $this->load->view('encodesub',$data);
   
  }
function updatesubinput(){
  header('access-control-allow-origin: *');
    $this->load->model('Mymodel');
    $this->Mymodel->updatesubcategory($_POST);
  }
  function suspendcus()
  {
    
    header('access-control-allow-origin: *');
    $this->load->model('Mymodel');
    $this->Mymodel->removecustomer($_POST);
  }
function removesub()
{
  header('access-control-allow-origin: *');
  $this->load->model('Mymodel');
  $this->Mymodel->deletesubcategory($_POST);
}
function editpro()
  {
    header('access-control-allow-origin: *');
     $this->load->model('Mymodel');
     $data['prdctcat']=$this->Mymodel->selectcat();
      
      $this->load->view('admin');
      $this->load->view('editproduct',$data);
      $this->load->view('footer');
  }
  function changesub()
  {
    header('access-control-allow-origin: *');
    $this->load->model('Mymodel');
    $data['product']=$this->Mymodel->viewsubc($_POST);
    $this->load->view('proencode',$data);
  }
  function pkproduct()
  {
    header('access-control-allow-origin: *');
    $this->load->model('Mymodel');
    $data['pkpp']=$this->Mymodel->modifyproduct($_POST);
    $this->load->view('pkproencode',$data);
  }
  function inputpro()
  {
    header('access-control-allow-origin: *');
    $this->load->model('Mymodel');
    $this->Mymodel->updateproduct($_POST);
    //echo "successfully updated";
  }
 function deleteprop()
 {
  header('access-control-allow-origin: *');
  $this->load->model('Mymodel');
  $this->Mymodel->removepro($_POST);
  echo "successfully deleted";
 }
public function vcat()
{
  header('access-control-allow-origin: *');
  $this->load->model('Mymodel');
  $data['vcat']=$this->Mymodel->selectcat();
  $this->load->view('admin');
  $this->load->view('vcp',$data);
  
    $this->load->view('footer'); 

}
function viewcutomer()
{
  header('access-control-allow-origin: *');
  $this->load->model('Mymodel');
  $data['vreg']=$this->Mymodel->selectreg();
  $this->load->view('admin');
  $this->load->view('vcustomer',$data);
  $this->load->view('footer');
}
function viewdetailse()
{
  header('access-control-allow-origin: *');
  $this->load->model('Mymodel');
  $data['preg']=$this->Mymodel->selectreg();
  $this->load->view('admin');
  $this->load->view('purchasedetailse',$data);
  $this->load->view('footer');
}
public function viewsub()
{
  header('access-control-allow-origin: *');
  $this->load->model('Mymodel');
  $data['vsb']=$this->Mymodel->selectcat();
  $this->load->view('admin');
   $this->load->view('viewsubcategory',$data);
  
    $this->load->view('footer'); 


}
function desplaysub()
  {
    header('access-control-allow-origin: *');
    $this->load->model('Mymodel');
  $data['abc']=$this->Mymodel->viewsubc($_POST);
  $this->load->view('desplay',$data);
  }

  function vviewproduct()
  {
    header('access-control-allow-origin: *');
    $this->load->model('Mymodel');
    $data['category']=$this->Mymodel->selectcat();
     $this->load->view('admin');
    $this->load->view('viewproduct',$data);
    $this->load->view('footer'); 
  }
  function productonchange()
  {
    header('access-control-allow-origin: *');
  $this->load->model('Mymodel');
  $data['ind']=$this->Mymodel->tblproduct($_POST);
  $this->load->view('proview',$data);
  }
  public function product()
  {
    if (isset($_POST['sub'])) 
    {
  
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '100';
    $config['max_width']  = '1024';
    $config['max_height']  = '768';

    $this->load->library('upload', $config);

    if (  $this->upload->do_upload())
    {
      $data = array('upload_data' => $this->upload->data());

      
      
    }
    else
    {
      $error = array('error' => $this->upload->display_errors());

      //$this->load->view('product', $error);
    }
  
$this->load->model('Mymodel');
$data['pcat']=$this->Mymodel->addproduct($data);


      $this->load->view('admin');
      $this->load->view('product',$data);
      $this->load->view('footer'); 
   }
   else{
$this->load->model('Mymodel');
$data['pcat']=$this->Mymodel->selectcat();
    $this->load->view('admin');
    $this->load->view('product',$data);
     $this->load->view('footer'); 
   }
 }
 public function prosub()
{
  header('access-control-allow-origin: *');
  $this->load->model('Mymodel');
  $data['psubc']=$this->Mymodel->selectsubcat($_POST);

  $this->load->view('viewsub',$data);
}


  public function addsub()
  {
    // if (isset($_POST['sub'])) 
    header('access-control-allow-origin: *');
     $this->load->model('Mymodel');
     $this->Mymodel->insertsubc();
    
  }



	public function index()
	{
		$this->load->helper('url');
		$this->load->view('homepage1');
		
		 
     
	}
        public function login()
        {
        	if(isset($_POST['sub'])) 
            {
   	          $this->load->model('Mymodel');
   	          $this->Mymodel->logininsert();
   	       }
   	       else{
        	$this->load->helper('url');
        	$this->load->view('head');
        	$this->load->view('login');
        	$this->load->view('footer');
        }
        }
       
     function insertreg()


    { 

    

 
	if(isset($_POST['sub'])) 
   {
	

	$this->load->model('Mymodel');
	$this->Mymodel->insert($_POST);

	
    }
    else
    {
       $this->load->helper('url');
       $this->load->view('header');
       $this->load->view('regi');
       $this->load->view('footer');	
      
	
    }
   }
   public function addcat()
    {
     $this->load->helper('url');
      $this->load->view('admin');
    $this->load->view('categ');
     $this->load->view('footer'); 
   }
   
public function admin()
{
// if(isset($_POST['sub'])) 
//    {
  header('access-control-allow-origin: *');
$this->load->model('Mymodel');
  $this->Mymodel->addcategory($_POST);
 
// }

}
function disp()
{
  header('access-control-allow-origin: *');
  $this->load->model('Mymodel');
  $data['slctcat']=$this->Mymodel->selectcat();
   $this->load->view('dispencode',$data);

}


function brougt()
{
  header('access-control-allow-origin: *');
  $this->load->model('Mymodel');
  $data['brt']=$this->Mymodel->brougtproduct();
  $this->load->view('buyyencode',$data);
  

} 

function phs()
{
  header('access-control-allow-origin: *');
  $this->load->model('Mymodel');

  $data['pr']=$this->Mymodel->purchde($_POST);
 
  $this->load->view('prencode',$data);

} 
function logout()
{
   $this->session->unset_userdata('$sess');
   session_destroy();
   redirect('mycontroller/homepage1');
      
      
  
}

function myfunc()
{
  $this->load->view('a');
}
function detailse1()
{
  
 // $data=$_REQUEST['c'];
  
  $dat['id']=$this->input->post('c');
  $dat['name']=$this->input->post('d');
  $dat['desc']=$this->input->post('e');
  $dat['img']=$this->input->post('f');
  $dat['pr']=$this->input->post('g');
   $dat['st']=$this->input->post('h');

  

     $this->load->view('head');
     $this->load->view('details',$dat);
     $this->load->view('footer'); 
}
function showdetails()
{
  header('Access-Control-Allow-Origin: *');
  $this->load->model('Mymodel');
  $data['pic']=$this->Mymodel->viewproductdetails();
  $this->load->view('productdetailedencode',$data);
  
}
function hmproduct()
{
   header('access-control-allow-origin: *');
  $this->load->model('Mymodel');
  $data['sss']=$this->Mymodel->homprdct();
  $this->load->view('hprdencode',$data);
}
}
