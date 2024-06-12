<?php include_once 'database.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="staly.css">
    <title> Document</title>

</head>

<body>
    <nav>
        <ul>
            <li><img src="enel.jpg" alt="Descripción de la imagen"></li>
            <li><a href="index.php">HOME</a></li>
            <li><a href="view.php">VIEW</a></li>
        </ul>
    </nav>
  <div class="container">
  <div class="row">
    <table class="table">
      <?php
        $result = $database->getData();
      ?>
      <!-- add our table headings -->
      <tr>
        <th>Name</th>
        <th>Career</th>
        <th>Years_experience</th>
        <th>Email</th>
        <th>Cell_phone</th>
      </tr>
      <!-- now run our loop to display our query -->
      <?php
      while($r = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$r['name']."</td>";
        echo "<td>".$r['career']."</td>";
        echo "<td>".$r['years_experience']."</td>";
        echo "<td>".$r['email']."</td>";
        echo "<td>".$r['cell_phone']."</td>";
        echo "</tr>";
        }
      ?>
    </table>
  </div>
</div>

    
    <footer>
        <center><h2>WWW.ENEL GREEN POWER</h2></center>
    </footer>
</body>
</html>