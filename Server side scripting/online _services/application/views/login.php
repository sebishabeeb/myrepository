<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row" id ="div1">
            <div class="col-sm-6 col-sm-offset-2">
                  <div class="panel panel-default"style="margin-top:113px;">
                  	<div class="panel-heading">
                  		<span class="glyphicon glyphicon-lock"></span> Login</div>
                  		<div class="panel-body">
                  			 <form class="form-horizontal"name=""action=""method="post">
                  			 	<div class="form-group">
                             	<label  class="col-sm-3 control-label">User Name:</label>
                                 <div class="col-sm-7">
                                 	<input type="text"placeholder="user name"class="form-control"required name="uname">
                                 </div>

                  		      </div>
                  		      <div class="form-group">
                             	<label  class="col-sm-3 control-label">Password:</label>
                                 <div class="col-sm-7">
                                 	<input type="password"placeholder="password"class="form-control" required name="pswrd">
                                 </div>
                               </div>
                                <div class="form-group">

                           <div class="col-sm-offset-3 col-sm-9">
                           	<div class="checkbox">
                            
                              <input type="checkbox"name="cheb">Remember Me
                          </div>
                           	</div>
                           	</div>
                           			<div class="form-group last">
                                       <div class="col-sm-offset-5 col-sm-7">
                                        <input type="submit" class="btn btn-primary btn-mini "name="sub"value="Login">
                                                                          
                                    </div>
                                        </div> 
                     <label id="lab4"><u>Forgot Password?</u></label>
                    </form>
                </div>
    </div>
        </div>
             </div>
                   </div>              		

</body>
</html>