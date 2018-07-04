
<?php require_once 'base.php';?>

  <!-- /. NAV SIDE  -->
  
 <div class="templatemo-content-widget templatemo-login-widget white-bg">
      <header class="text-center">
            <div class="square"></div>
            <h1>修改密码</h1>
          </header>
          <form action="newpassworddo.php" class="templatemo-login-form" method="post">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>             
                    <input type="password" class="form-control" name="oldpassword" placeholder="原密码">           
                </div>  
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>              
                    <input type="password" class="form-control"  name="password" placeholder="新密码">           
                </div>  
            </div>       
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>              
                    <input type="password" class="form-control"  name="password2" placeholder="确认密码">           
                </div>  
            </div>              
              <div class="form-group">
                     
        </div>
        <div class="form-group">
          <button type="submit" class="templatemo-blue-button width-100">确认修改</button>
        </div>
                              
          </form>

    </div>
    
</body>
</html>