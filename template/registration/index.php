<?php

try
{
  $pdo = new PDO('mysql:host=localhost;dbname=jasminki_registration', 'jasminki_sports', '_p-8rR;ku@#p');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include '../includes/error.html.php';
  exit();
}

if (isset($_POST['name']))
  {
    // If the if statement above is true, save each form field value as a variable. These variable values will be used in the thank you page and possibly in the bindValue below. Whether you use in the bindValue or not is up to you.

    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
        $honeypot = $_POST['honeypot'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone= $_POST['phone'];
        $aorv = $_POST['aorv'];
        $event = $_POST['event'];
        $event2 = $_POST['event2'];
        $tshirt = $_POST['tshirt'];
        $gender = $_POST['gender'];
        $emergname = $_POST['emergname'];
        $emergphone = $_POST['emergphone'];
    
    try {
      $sql = 'INSERT INTO registration SET
        name = :name,
        email = :email,
        phone= :phone,
        aorv = :aorv,
        event = :event,
        event2 = :event2,
        tshirt = :tshirt,
        gender = :gender,
        emergname = :emergname,
        emergphone = :emergphone'; 
      $s = $pdo->prepare($sql);
      $s->bindValue(':name', $_POST['name']);
      $s->bindValue(':email', $_POST['email']);
      $s->bindValue(':phone', $_POST['phone']);
      $s->bindValue(':aorv', $_POST['aorv']);
      $s->bindValue(':event', $_POST['event']);
      $s->bindValue(':event2', $_POST['event2']);
      $s->bindValue(':tshirt', $_POST['tshirt']);
      $s->bindValue(':gender', $_POST['gender']);
      $s->bindValue(':emergname', $_POST['emergname']);
      $s->bindValue(':emergphone', $_POST['emergphone']);
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error adding submitted field: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }

include 'success.html.php';
 
} else if (isset($_POST['honeypot'])) {
    include 'registration.html.php';
} else {

include 'registration.html.php'; 

}
