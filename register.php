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
<body class="sing-up-page">
    <?php require_once("includes/connection.php"); ?>
    <?php
        if(isset($_POST["register"])){
            if(!empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])){
                $name = htmlspecialchars($_POST['name']);
                $surname = htmlspecialchars($_POST['username']);
                $email = htmlspecialchars($_POST['email']);
                $password = htmlspecialchars($_POST['password']);
                $confirm_password = htmlspecialchars($_POST['confirm_password']);
                $n1=mysql_connect("localhost","denis","123456","signup");
                $query=mysql_query("SELECT * FROM signup WHERE username='".$username."'");
                $numrows=mysql_num_rows($query);
                //$result=mysqli_query($n1, $sql);
                if($numrows==0){
                    $sql="INSERT INTO signup
                    (name, username, email, password, confirm_password)
                    VALUES('$name', '$username', '$email', '$password', '$confirm_password')";
                    $result = mysql_query($sql);
                    if ($result) {
                        $message = "Account Successfully Created";
                    } else {
                        $message = "Failed to insert data information!";
                    }
                }
                else {
                $message = "That username already exists! Please try another one!";
                }
            }
            else{
                $message = "All fields are required!";
            }
        }
     ?>
     <?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>
    <div id="log-in" class="site-form log-in-form">
        <div id="log-in-head">
            <h1>Регистрация</h1>
            <div id="logo">
                <a href="imdex.html">Students
                    <span>Blog</span>
                </a>
            </div>
        </div>
        <div class="form-output">
            <form action="register.php" id="registerform" method="post" name="registerform">
                <div class="form-group label-floating">
                    <label class="control-label">Веедите имя</label>
                    <input type="text" id="name" name="name" value="" class="form-control">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Веедите логин</label>
                    <input type="text" id="username" name="username" value="" class="form-control">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Введите Email</label>
                    <input type="email" id="email" name="email" value="" class="form-control">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Введите Пароль</label>
                    <input type="password" id="password" name="password" value="" class="form-control">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Подтвердите Пароль</label>
                    <input type="password" id="confirm_password" name="confirm_password" value="" class="form-control">
                </div>
                <p class="submit"><input class="button" id="register" name= "register" type="submit" value="Зарегистрироваться"></p>
                <div class="or"></div>
                <p>У вас есть аккаунт ? <a href="log-in.html">Войти !!</a> </p>
            </form>
        </div>
    </div>   
</body>
</html>