<!DOCTYPE HTML>
<html>
    <style type="text/css">
    .login {
          height:180px; 
          width:230px;
          margin:0;
          padding:10px;
          border:1px #CCC solid;
    }
    .login input {
          padding:5px; margin:5px;
          width:100%;
    }
    </style>  
<body>
    <form method="post" >
        <div class="login">
            <h2>Login</h2>
            <input type="text" name="username" size="30"  placeholder="username" />
            <input type="password" name="password" size="30" placeholder="password" />
            <input type="submit" value="Sign in"/>
        </div>
    </form>

    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST" ) {
        $userName = $_POST["username"];
        $passWord = $_POST["password"];

        if($userName == "admin" && $passWord == "admin") {
            echo "<h2>Welcome <span style='color:red'>" .$userName. "</span> to website</h2>";
        } else {
            echo "<h2><span style='color:red'>Login Error</span></h2>";
        }
    }

?>


</body>
</html>