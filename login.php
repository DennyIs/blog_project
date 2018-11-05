<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bloge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Owl Carousel Assets -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"  type="text/css" />

        <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Raleway:400,500,700|Roboto:300,400,500,700,900|Ubuntu:300,300i,400,400i,500,500i,700" rel="stylesheet">
        <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css" />
        <!-- Responsive CSS -->

</head>
<body class="log_in">
    <?php session_start(); ?>
    <?php require_once("includes/connection.php"); ?>
    <?php 
    if (isset($_SESSION["session_username"])) {
        header("Location: intropage.php");
    }
    if(isset($_POST["login"])){
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);
            $n1=mysqli_connect("localhost","denis","123456","blog_project");
            $query =mysqli_query("SELECT * FROM usertbl WHEREusername='".$username."' AND password='".$password."'");
    $numrows=mysqli_num_rows($query);
    if($numrows!=0)
 {
while($row=mysqli_fetch_assoc($query))
 {
    $dbusername=$row['username'];
  $dbpassword=$row['password'];
 }
  if($username == $dbusername && $password == $dbpassword)
 {
    // старое место расположения
    //  session_start();
     $_SESSION['session_username']=$username;    
 /* Перенаправление браузера */
   header("Location: intropage.php");
    }
    } else {
    //  $message = "Invalid username or password!";
    
    echo  "Invalid username or password!";
 }
    } else {
    $message = "All fields are required!";
    }
    }
    ?>
     
        <div id="login" class="site-form log-in-form">
            <div id="log-in-head">
                <h1>Вход</h1>
                <div id="logo">
                    <a href="imdex.html">Students
                        <span>Blog</span>
                    </a>
                </div>
            </div>
             <div class="form-output">
                 <form action="" id="loginform" method="post" name="loginform">
                    <div class="form-group label-floating">
                        <label class="control-label">ваш Username:</label>
                        <input type="text" id="username" name="username" value="" class="form-control">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">ваш пароль:</label>
                        <input type="password" id="password" name="password" value="" class="form-control">
                    </div>
                    <div class="remember">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="optionsCheckboxes"> Запомнить меня
                            </label>
                            <a href="#" class="forgot">Напомнить пароль</a>
                        </div>
                    </div>
                    <a href="imdex.html" class="btn btn-lg btn-primary full-width">Войти</a>

                    <div class="or"></div>

                    <p>Нет акаунта ? <a href="sing-up.html" class="log-in-reg">Зарегистрироваться</a></p>
                 </form>
             </div>           
        </div>
</body>
</html>