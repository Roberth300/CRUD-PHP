<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="staly.css">
    <title> RGB.ING </title>
  
</head>
<body>
  <main>
    <?php
    // start by including our classes
    
    include ('validate.php');
    require_once ('database.php');
    // create our class objects
    $valid = new validate();

    if (!empty($_POST['Submit'])) {
      // using our escape_string function
      $name = $_POST['name'];
      $career = $_POST['career'];
      $years_experience = $_POST['years_experience'];
      $email = $_POST['email'];
      $cell_phone = $_POST['cell_phone'];
      // using our functions found in our validate class 
      // (checkEmpty validAge validEmail)
      // $msg = $valid->checkEmpty($_POST, array('name', 'age', 'email'));
      $msg = $valid->checkEmpty($_POST);
      $checkName = $valid->validName($_POST['name']);
     // $checkCareer = $valid->validCareer($_POST['career']);
     // $checkYears_experience = $valid->validYears_experience($_POST['years_experience']);
      $checkEmail = $valid->validEmail($_POST['email']);
      $checkCell_phone = $valid->validCell_phone($_POST['cell_phone']);
      // now handle any empty fields
      if ($msg != null) {
        echo $msg;
        //link to the previous page
        echo "<a href='javascript:self.history.back();'>Go Back</a>";
      } elseif (!$checkName) {
        echo '<p>Please provide a valid Name.</p>';
        echo "<a href='javascript:self.history.back();'>Go Back</a>";
      } elseif (!$checkEmail) {
        echo '<p>Please provide a valid email.</p>';
        echo "<a href='javascript:self.history.back();'>Go Back</a>";
      } elseif (!$checkCell_phone) {
        echo '<p>Please provide a valid cell phone.</p>';
        echo "<a href='javascript:self.history.back();'>Go Back</a>";
      } else {
        // if all the fields are valid
        $result = $database->execute($name, $career, $years_experience,$email,$cell_phone);
        // let the user know that the record has been added
        if ($result) {
          echo "<p>Data added successfully.</p>";
          echo "<a href='view.php'>View Result</a>";
        }

      }
    }
    ?>
  </main>
</body>
