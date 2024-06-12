<?php
class validate
{
  public function checkEmpty($data)
  {
    $msg = null;
    foreach ($data as $key => $value) {
      if (empty($value)) {
        $msg .= "<p>$key field empty</p>";
      }
    }
    return $msg;
  }
  // check our age field
  public function validName($name)
  {
    // check to see if the age is between 1 to 100
    // if (preg_match("/^[0-9]+$/", $age)) {
    //   return true;
    // }
    return true;
  }
  public function validCell_phone($cell_phone)
  {
    // check to see if the age is between 1 to 100
    // if (preg_match("/^[0-9]+$/", $age)) {
    //   return true;
    // }
    return true;
  }
  // check to see if our email follows the email format
  public function validEmail($email)
  {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return true;
    }
    return false;
  }
}
?>

