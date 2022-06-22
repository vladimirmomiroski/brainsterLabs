<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Table</title>
    <style>
       
  .bg-table {
   height:100vh;
  }
  
  th, td {
      padding:1.2rem;
  }
    
    </style>
</head>
<body>
    <div class="d-flex flex-column align-items-center justify-content-center bg-table bg-info">
        <h1 class="pb-2">Регистрирани Клиенти</h1>
    <table class="table-dark table-striped table-bordered">
        <tr>
            <th>Id</th>
            <th>firstLastName</th>
            <th>companyName</th>
            <th>email</th>
            <th>phone</th>
            <th>academyName</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "project_01");
        if ($conn-> connect_error) {
            die("Connection failed:". $conn-> connect_error);
        }
     $sql = "SELECT id, firstLastName, companyName, email, phone, academyName from client_info";
     $result = $conn-> query($sql);
     
     if ($result-> num_rows > 0) {
         while($row = $result-> fetch_assoc()) { 
         echo "<tr><td>". $row["id"] ."</td><td>". $row["firstLastName"] ."</td><td>". $row["companyName"] ."</td><td>". $row["email"] ."</td><td>". $row["phone"] ."</td><td>". $row["academyName"] ."</td></tr>";
     }
     echo "</table>";
    }
  else {
      echo "0 result";
  }
   $conn-> close();
     
        ?>
    </table>
    </div>
</body>
</html>