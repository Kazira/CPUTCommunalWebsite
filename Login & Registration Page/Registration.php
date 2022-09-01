<!-- 
    Student Nambe Edvalter Jamba
    Student Number 220446571
    Email:Edvalterjamba9@gmail.com
    Student Email:220446571@gmail.com

    Task Given and Done:LOGIN AND REGISTRATION PAGE OF CPUT STUDENT COMUNITY WEBSITE

-->
<?php
include 'connection.php';


if (isset($_POST['Registrar'])) {
    $student_email = $_POST['Student_Email'];
    $student_fname = $_POST['Student_FName'];
    $student_lname = $_POST['Student_LName'];
    $password=$_POST['Password'];

       
        if($student_email == "" || $student_fname == "" || $student_lname == ""|| $password=="" )
        {
          echo '<script>alert("Please Fill the Spaces in Blank!")</script>';
        }
        else
           if (!filter_var($student_email, FILTER_VALIDATE_EMAIL)) {
            echo '<script>alert("Invalid Email")</script>';
        } else {
            $sql = "insert into user (student_email,student_fname,student_lname,password) values(' $student_email','$student_fname','$student_lname','$password')";
            $result = mysqli_query($con, $sql);      
                if ($result) 
                {
                echo '<script>alert("Successfully Registered")</script>';
                header('location:Login_Student.php');
                }
                else
                {
                   echo '<script>alert("Please check the details")</script>';
               }
        }  
       
    
}

if (isset($_POST['btnLogin'])) 
{
    header('location:Login_Student.php');
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">


    <meta charset="utf-8">
    <title>www.CPUT Student Community/Login.com</title>
    <link rel="stylesheet" href="css/Registration.css">
    

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="./css/icons.css">

  <body>

<!-- ----------------------------  Navigation ---------------------------------------------- -->

<nav class="nav">
        
  <div class="nav-menu flex-row">

      <div class="nav-brand">
        <h1 class="text-light"><a href="index.html"><span>CPUT Student Community</span></a></h1>
          <!---<img src="img/CPUT_logo.jpg">---->
      </div>

      <div class="toggle-collapse">
          <div class="toggle-icons">
              <i class="fas fa-bars"></i>
          </div>
</div>

<div>
  <ul class="nav-items">
      <li class="nav-link">
        
          <a  href="index.php">Home</a>
      </li>
      <li class="nav-link">
        
          <a href="#">About</a>
      </li>
      <li class="nav-link">
          <a href="#">Marketplace</a>
      </li>
      <li class="nav-link">
          <a href="#">Accomodation</a>
      </li>
      <li class="nav-link">
       <a href="#">Emergency</a>
    </li>
    <li class="nav-link">
        <a href="#">StudentSupport</a>
    </li>

  </ul>
</div>

      
  </div>
</nav>

<!-- ------------x---------------  Navigation --------------------------x------------------- -->

        
<!-- Falata endereitar as posicoes dos botoes e check se os dados estao na base de dados para fazer o login...ja esta a salvar e mostrar usuarios-->
    <div class="pnlprincipal">
      
        <div class="pnlotherslogin first-content">

            <div class="second-column">

                <h2 class="title title-second">Registration</h2>            
               
                <form class="form" method="POST">

                   
                        <label class="label-input" for="">
                            <i class="far fa-user icon-modify"></i>
                            <input type="email" name="Student_Email" placeholder="Student email">
                        </label>

                        <label class="label-input" for="">
                            <i class="far fa-user icon-modify"></i>
                            <input type="name" name="Student_FName" placeholder="First Name" >
                        </label>

                        <label class="label-input" for="">
                            <i class="far fa-user icon-modify"></i>
                            <input type="name" name="Student_LName" placeholder="Last Name" >
                        </label>

                        <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="Password" placeholder="Password" >
                    </label>

                     <div class="buttons">  
                        <input type="submit" name="Registrar" class="btn_submit" value="Register">
                        <input  type="submit" name="btnLogin" class="btn_submi" value="Login">
                      </div>
                    <!-- aqui falta confirmar se os dados do usuario esta certo onclick="window.open('#','_self')"-->
                </form>

                 
       
                </div>
           </div>
      </div>
      

  </body>
  
</html>
