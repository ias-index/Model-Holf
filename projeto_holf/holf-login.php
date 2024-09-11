    <?php
             if ((isset($_POST['email'])) && (isset($_POST['senha']) && ($_POST['usuario']))){
        $email = $_POST['email']; 
        $password = $_POST['senha'];
        $username = $_POST['usuario'];
       

       include("conexao-holf.php");

     $sql_code = "SELECT * FROM clientes WHERE email = '$email'";

     $sql_query = $mysqli-> query ($sql_code) or die ($mysqli-> error);

     if ($sql_query->num_rows == 0){

       echo "O email não existe";
      
     }else{
       $usuario = $sql_query->fetch_assoc();
     if ($password != $username['senha']){

        echo 'Senha invalido';

    }else {

       if(!isset($_SESSION))
       session_start();
     $_SESSION['usuario'] = $username['id'];
     $_SESSION['admin'] = $username['admin'];
     
     header("Location: holf.php");
    }
     
    
    }
    }
   
   
   ?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Howf-login</title>
    <link rel="stylesheet" href="holf_login.css">
</head>
<body>

 <div class="howf">
    <h1>𝑯Θ𝑳𝑭</h1>
 </div>

 <a class="href" href="https://www.tiktok.com/@souzaa.dev/video/7319524320768740614?q=curso%20de%20programa%C3%A7%C3%A3o&t=1720725683290">.</a>
 
 
    <div class="login-container">

        <form class="login-form" action="holf.php">
            <h2 id="register">REGISTER</h2>

            <div class="input-group">
                <input placeholder="Email:" type="email" id="email" name="email" required>
            </div>

            <div class="input-group">
                <input placeholder="User:" type="text" id="username" name="username" required>
            </div>

            <div class="input-group">
                <input placeholder="Password:" type="password" id="password" name="password" required>
            </div>

                <a href="holf.php"><button  class="enter">Sig In</button></a>

            
        </form> 
           
    </div>







    
</body>
</html>