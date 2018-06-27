<?php
    // require "/Applications/MAMP/htdocs/ProjectePsicoWeb/Business/business_usuari.php"; //<--apple
    require "../Business/business_usuari.php"; //<--windows
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salome-Psicolegs Infanto-juvenil Barcelona</title>
    <link rel="stylesheet" href="css/normalize.css"> 
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>

<body>
    
<h1>LOGIN</h1>

<form action="usuari_04_login.php" method="post">
    <input type="email" name="email" id="CustomerEmail" class="" placeholder="Email...">
    <br><br>
    <input type="password" name="contrasenya" id="CustomerPassword" class="" placeholder="Contrasenya...">
    <br><br>
    <input type="submit" name="btsignin" class="button" value="Sign In">
    <br><br>
</form>


<?php

if (isset($_POST['btsignin'])) {

    $error="";         
    $usuari = new business_usuari();
    $objusuari = $usuari -> cercarperemail($_POST['email'], $_POST['contrasenya']);


    if ($objusuari){
        if ($objusuari->getcontrasenya_usuari() == $_POST['contrasenya']){
            if($objusuari->gettipus_usuari() == 2){
				redirect("09_admin.php");
            }
            elseif($objusuari->gettipus_usuari() == 1){
				redirect("09_doctor.php");
            }
            elseif($objusuari->gettipus_usuari() == 0){
				redirect("09_pacient.php");
            }
        }
        else{
            echo "No existeix Usuari amb aquest Email: $error";
        }
    }
    else{
        echo "Contrasenya invalida: $error";   
    }
}

?>


<!-- <form class="login100-form validate-form" method="post" >
				
                <span class="login100-form-title p-b-59">
                    Sign Up
                </span>

                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Full Name</span>
                    <input class="input100" type="text" name="name" placeholder="Name...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="text" name="email" placeholder="Email addess...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Username is required">
                    <span class="label-input100">Username</span>
                    <input class="input100" type="text" name="username" placeholder="Username...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="text" name="pass" placeholder="*************">
                    <span class="focus-input100"></span>
                </div>

                <div class="flex-m w-full p-b-33">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="checkbox">
                        <label class="label-checkbox100" for="ckb1">
                            <span class="txt1">
                                I agree to the
                                <a href="#" class="txt2 hov1">
                                    Terms of User
                                </a>
                            </span>
                        </label>
                    </div>

                    
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" name="btnsignup">
                            Sign Up
                        </button>
                    </div>

                    <a href="../SIGNIN/index.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                        Sign in
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
</form>






<form method="post">
    <div class="form-group">
        <label for="exampleUser">Username:</label>
        <input type="text" class="form-control" id="exampleUser" aria-describedby="emailHelp" value="<?php echo $usernameUser ?>" name="username">
        
    </div>
    <div class="form-group">
        <label for="exampleName">Name:</label>
        <input type="text" class="form-control" id="exampleName" aria-describedby="emailHelp" value="<?php echo $nameUser ?>" name="name">
        
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Email address:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $emailUser ?>" name="email">
    
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" value="<?php echo $passwordUser ?>" name="pass">
    
    </div>
    <button type="submit" class="btn btn-primary" name="modify">MODIFICA</button>
    <button type="submit" class="btn btn-danger" name="delete">ELIMINAR CUENTA</button>

</form> -->




<!-- <br><br>
<a href="09_administrador.html">
    Tornar Pagina principal
    <i class="fas fa-long-arrow-alt-right"></i>
</a> -->
    
</body>
</html>