<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">  
	    <title>用户登录</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
        
	    <link href='http://fonts.useso.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/templatemo-style.css" rel="stylesheet">
	    
	    <style type="text/css">
           body{
           	background-image: url("images/sunset-big.jpg");
           	background-size: 100%,100% ;
           }
       

	    </style>
	</head>
	<body class="light-gray-bg">
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	          <div class="square"></div>
	          <h1>用户登录</h1>
	        </header>
	        <form action="logindo.php" class="templatemo-login-form" method="post">
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" class="form-control" name="username" placeholder="用户名">           
		          	</div>	
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
		              	<input type="password" class="form-control"  name="passcode" placeholder="******">           
		          	</div>	
	        	</div>	  
	        	<div class="form-group">
	        		<div class="input-group">
		         		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>
		                <input type="text" name="input" placeholder="请输入验证码"/>
                        <img src="code.php" onclick="show()" id = "img" />    
		          	</div>	
	        	</div>	         	
	          	<div class="form-group">
				    <div class="checkbox ">
				        <input type="checkbox" id="c1" name="cc" />
						<label for="c1"><span></span>记住我</label>
				    </div>				    
				</div>
				<div class="form-group">
					<button type="submit" class="templatemo-blue-button width-100">Login</button>
				</div>
                                    <hr />
                                    未注册 ? <a href="register.php" >点我 </a> 
	        </form>

		</div>
		
	</body>
	<script>
    function show(){
     var img = document.getElementById("img");
     img.src = "code.php?id="+Math.random();

	}
</script>
</html>