<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
     <script
      src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"
      data-auto-a11y="true"
    ></script> 
    <title>Brainster Labs - Contact Page</title>
  </head>
  <body>

    
    <!-- HEADER SECTION -->

    <header>

    <!-- Navbar -->

    <nav
      class="
        navbar navbar-expand-sm
        background-orange
        navbar-style
        font-bold
        py-lg-4
        text-start text-sm-center
      "
    >
      <div
        class="
          brainster-logo
          d-flex
          justify-content-center
          align-items-center
          flex-column
          ml-lg-3 ml-1
          my-1 my-sm-0
          mb-sm-3 mb-md-0
          mt-md-2 mt-lg-0
        "
        id="logo"
      >
        <a href="index.html"
          ><img class="logo" src="images/Logo.png" alt="Brainster logo"
        /></a>
        <span class="text-uppercase pt-1">Brainster</span>
      </div>
      <button
        class="navbar-toggler menu"
        data-target="#navbarSupportedContent"
        data-toggle="collapse"
        aria-label="Toggle navigation"
      >
        <span class="line-one line"></span>
        <span class="line-two line"></span>
        <span class="line-three line"></span>
      </button>
      <div
        class="collapse navbar-collapse mb-sm-3 mb-lg-0"
        id="navbarSupportedContent"
      >
        <ul class="navbar-nav mx-auto">
          <li class="nav-item mt-3 mt-sm-0">
            <a
              class="nav-link contact-link"
              href="https://marketpreneurs.brainster.co"
              target="_blank"
              >Академија за маркетинг
              <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link contact-link"
              href="https://codepreneurs.brainster.co"
              target="_blank"
              >Академија за програмирање</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link contact-link"
              href="https://datascience.brainster.co/"
              target="_blank"
              >Академија за data science</a
            >
          </li>
          <li class="nav-item mb-3 mb-sm-0">
            <a
              class="nav-link contact-link"
              href="https://design.brainster.co"
              target="_blank"
              >Академија за дизајн</a
            >
          </li>
</ul>
      <a href="contact.php" id="nav-contact" class="button nav-button mr-md-2 ml-2 border-white">
          Вработи наш студент</a
        >
      </div>
      </nav>

</header>

<!-- Connection to Database -->

<?php

if(isset($_POST['firstLastName']))
{

$con = mysqli_connect('localhost', 'root', '','project_01');

$firstLastName = $_POST['firstLastName'];
$companyName = $_POST['companyName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$academyName = $_POST['academyName'];


$sql = "INSERT INTO `client_info` (`id`, `firstLastName`, `companyName`, `email`, `phone`, `academyName`) VALUES ('0', '$firstLastName', '$companyName', '$email', '$phone', '$academyName')";


$rs = mysqli_query($con, $sql);
if($rs)
{
  echo "<p style='color:green; font-size: 4rem; margin-bottom:0; text-align:center; background-color: rgb(226, 193, 6);'>Успешно се пријавивте!</p>";
}
}
else
{
	echo "";
	
}
?>

  
<!-- MAIN SECTION -->

    <main class="background-orange-contact">
       <div class="container-fluid contact-height d-flex justify-content-center align-items-center">

       <!-- Form -->

        <form action="contact.php" method="POST" class="row mb-sm-5 pb-5 mx-auto">
          <div class="col-12 mb-5 mt-4">
          <h1 class="text-center contact-title">Вработи студенти</h1>
        </div>
        <div class="col-lg-4 col-sm-5 offset-sm-1 offset-lg-2 form-group">
          <label for="firstLastName" class="font-bold">Вашето име и презиме</label>
            <input type="name" class="form-control py-4 px-3" id="firstLastName" name="firstLastName" placeholder="Име и презиме" required>
          </div>
          <div class="col-lg-4 col-sm-5 form-group">
            <label for="companyName" class="font-bold">Име на компанија</label>
            <input type="name" class="form-control py-4 px-3" id="companyName" name="companyName" placeholder="Име на вашата компанија" required>
          </div>
         <div class="col-lg-4 col-sm-5 offset-sm-1 offset-lg-2 form-group">
           <label for="email" class="font-bold">Контакт имејл</label>
            <input type="email" class="form-control py-4 px-3" id="email" name="email" placeholder="Контакт имелј на вашата компанија" required>
          </div>
          <div class="col-lg-4 col-sm-5 form-group">
            <label for="phone" class="font-bold">Контакт телефон</label>
            <input type="tel" class="form-control py-4 px-3" id="phone" name="phone" placeholder="Контакт телефон на вашата компанија" required>
          </div>
           <div class="col-lg-4 col-sm-5 offset-sm-1 offset-lg-2 form-group mb-1">
            <label for="academyName" class="font-bold">Тип на студенти</label>
            <select class="form-control select" id="academyName" name="academyName" required>
              <option selected disabled>Изберете тип на студент</option>
              <?php
        $conn = mysqli_connect("localhost", "root", "", "project_01");
        if ($conn-> connect_error) {
            die("Connection failed:". $conn-> connect_error);
        }
     $sql = "SELECT id, academyName from academy_name";
     $result = $conn-> query($sql);
     
     if ($result-> num_rows > 0) {
         while($row = $result-> fetch_assoc()) { 
         echo "<option>". $row["academyName"] ."</option>";
     }
     echo "</select>";
    }
  else {
      echo "0 result";
  }
   $conn-> close();
     
        ?>
            </select>
          </div>
          <div class="col-lg-4 col-sm-5 form-group">
            <label for=""></label>
            <button type="submit" value="submit" class="btn btn-block contact-button mt-sm-2 text-light">Испрати</button>
          </div>
        </form>
      </div>
           
  
    </main>

    <!-- FOOTER SECTION -->

    <footer class="background-black">
      <p class="text-center mb-1 text-light">Изработено со <i class="fas fa-heart"></i> од студентите на Brainster</p>  
    </footer>


    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>