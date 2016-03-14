<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>Registration</title>
  <style type="text/css">
   
    p
    {
      color: red;
    }
  </style>

  <script type="text/javascript">

function  validateform()
 {
  var firstn=document.myform.fname.value;
  var lastn=document.myform.lname.value;
  var add=document.myform.add.value;
  var dob=document.myform.rbirth.value;
  var x=document.myform.uname.value;
  var psw=document.myform.pswrd.value;
  var conf=document.myform.cpswrd.value;
  var mob=document.myform.phone.value;
  var con=document.myform.country.value;

  if (firstn==null|| firstn=="") 
    {
      document.getElementById('a').innerHTML="First Name can't be blanck";
      return false;
    }
    else if (lastn==null|| lastn=="")
     {
      document.getElementById('b').innerHTML="Last Name can't be blanck";
      return false;
     }
     else if (add==null|| add=="") 
      {
        document.getElementById('c').innerHTML="Address can't be blanck";
      return false;
      }
      if (dob==null|| dob=="")
       {
        document.getElementById('d').innerHTML="Birth date can't be blanck";
      return false;
       }
       var atpos = x.indexOf("@");
       var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        document.getElementById('e').innerHTML="Not a valid e-mail address";
        return false;
      }
      if (psw==null || psw=="")
       {
      document.getElementById('f').innerHTML="*Password can't be blank.";
      return false;
       }
      if (psw.length<8) 
      {
      document.getElementById('f').innerHTML="*Password should have atleast 8 character";
    return false;
     }
    else if (conf==null || conf=="") 
    {
   document.getElementById('g').innerHTML="*Password should be confirmed.";
    return false;
      }
   else if (psw==conf) 
     {
        return true;
       }
else 
   {
     document.getElementById('g').innerHTML="*Password must be same.";
     return false;
   }
     if (isNaN(mob))
      alert(mob);

      {
        document.getElementById('h').innerHTML="please provide numbers only";
        return false;
      }


}



  </script>  
</head>
<body>
	<div class="container">
		<div class="row" id ="div1"style="margin-top:5%;">
            <div class="col-sm-5 col-sm-offset-5">
                  <div class="panel panel-default">
                  	<div class="panel-heading"style="background-color: #5cb85c;">
                  		<span class="glyphicon glyphicon-user"></span>Register Here</div>
                  		<div class="panel-body">
                  			 <form class="form-horizontal"name="myform"action="insertreg" method="post"onsubmit="return validateform()"enctype ="multipart/form-data">

                              <div class="form-group">
                              <label  class="col-sm-3 control-label">First name:</label>
                                 <div class="col-sm-7">
                                  <input type="text"placeholder="Enter first name"class="form-control" name="fname">
                                  <p id="a"></p>
                                  
                                 </div>
                               </div>

                                <div class="form-group">
                              <label class="col-sm-3 control-label">Last name:</label>
                                 <div class="col-sm-7">
                                  <input type="text"placeholder="Enter Last name"class="form-control" name="lname" >
                                  <p id="b"></p>
                                 </div>
                               </div>

                                <div class="form-group">
                              <label  class="col-sm-3 control-label">Address:</label>
                                 <div class="col-sm-7">
                                  <textarea type="text"placeholder="Address"class="form-control" name="add"></textarea>
                                  <p id="c"></p>
                                 </div>
                               </div>
                                <div class="form-group">
                              <label  class="col-sm-3 control-label">Birth:</label>
                                 <div class="col-sm-7">
                                  <input type="date"placeholder="Birth date"class="form-control" name="rbirth">
                                  <p id="d"></p>
                                 </div>
                               </div>





                             <div class="form-group">
                             	<label  class="col-sm-3 control-label">User Name:</label>
                                 <div class="col-sm-7">
                                 	<input type="text"placeholder="user name"class="form-control" name="uname">
                                  <p id="e"></p>
                                 </div>

                  		      </div>
                  		      <div class="form-group">
                             	<label class="col-sm-3 control-label">Password:</label>
                                 <div class="col-sm-7">
                                 	<input type="password"placeholder="password"class="form-control"  name="pswrd">
                                  <p id="f"></p>
                                 </div>
                               </div>
                                 <div class="form-group">
                              <label  class="col-sm-3 control-label">Confirm Password:</label>
                                 <div class="col-sm-7">
                                  <input type="password"placeholder="Confirm password"class="form-control" name="cpswrd">
                                  <p id="g"></p>
                                 </div>
                               </div>
                                <div class="form-group">
                              <label  class="col-sm-3 control-label">Gender:</label>
                                 <div class="col-sm-7">
                                  <input type="radio" name="gender"value="male"checked>male
                                  <input type="radio"name="gender"value="female">female
                                 </div>
                               </div>




                                  <div class="form-group">
                              <label  class="col-sm-3 control-label">Phone:</label>
                                 <div class="col-sm-7">
                                  <input type="tel"placeholder="Enter your number"class="form-control"name="phone">
                                  <p id="h"></p>
                                 </div>
                               </div>

                                <div class="form-group">
                              <label  class="col-sm-3 control-label">Country:</label>
                                 <div class="col-sm-7">
                                  <input type="text"class="form-control"  name="country">
                                  <p id="i"></p>
                                  <br>
                                 </div>
                               </div>
                                

                                <div class="form-group last">
                                       <div class="col-sm-offset-5 col-sm-7">
                                        <input type="submit" class="btn btn-success btn-mini " name="sub" value="Register">
                                          </div>
                                       
                                        

                                 </div>

                  		     

                               </form>






                  </div>
                  
            </div>
		</div>
	</div>
   </body>
   </html>