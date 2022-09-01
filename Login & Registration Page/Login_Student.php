<!-- 
    Student Nambe Edvalter Jamba
    Student Number 220446571
    Email:Edvalterjamba9@gmail.com
    Student Email:220446571@gmail.com

    Task Given and Done:LOGIN AND REGISTRATION PAGE OF CPUT STUDENT COMUNITY WEBSITE

    include 'connection.php';


if (isset($_POST['submit'])) {
    
    $student_email = $_POST['Student_email'];
    $password=$_POST['Password'];

       $sql = "SELECT id FROM admin WHERE student_email = '$student_email' and password = '$password'";
            $result = mysqli_query($con, $sql);    
            
            

            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $active = $row['active'];
            
            $count = mysqli_num_rows($result);
            
            // If result matched $myusername and $mypassword, table row must be 1 row
              
            if($count == 1) {
                echo '<script>alert("Successfully Logged")</script>';
              
            }else {
                echo '<script>alert("Your Login Name or Password is invalid")</script>';
              
            }
         }
-->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">


    <meta charset="utf-8">
    <title>www.CPUT Student Community/Login.com</title>
    <link rel="stylesheet" href="css/Login_Student.css">
    

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

                <h2 class="title title-second">Login</h2>            
               
                <form class="form" method="POST">
                   <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="email" name="Student_email" placeholder="Student email" required>
                    </label>
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="Password" placeholder="Password" required>
                    </label>
                    <a class="password" href="Registration.php">Forgot Passoword? Or Want to Register?</a>
                    <input type="submit" name="submit" class="btn_submit" value="Login">
                
                    <!-- aqui falta confirmar se os dados do usuario esta certo -->
                </form>
               
                </div>
           </div>
      </div>
      

  </body>
  
</html>
