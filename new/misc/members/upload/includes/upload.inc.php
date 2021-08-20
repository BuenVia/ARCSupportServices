<?php
    if (isset($_POST['upload-submit'])){

      $docName = $_POST['docName'];
      $comp = $_POST['comp'];

      if (empty($docName) || empty($comp)) {
          header("Location: ../index.php?error=emptyfields&docName=".$docName."&comp=".$comp);
          exit();
      }
else {
  require 'dbh.inc.php';

      $file = $_FILES['file'];
      $fileName = $_FILES['file']['name'];
      $docName = $_POST['docName'];
      $fileTmpName = $_FILES['file']['tmp_name'];
      $fileSize = $_FILES['file']['size'];
      $fileError = $_FILES['file']['error'];
      $fileType = $_FILES['file']['type'];
      $docName = $_POST['docName'];
      $comp = $_POST['comp'];
      $date = date("Y/m/d");
      $time = gmdate("H:i");

      $fileExt = explode('.', $fileName);
      $fileActualExt = strtolower(end($fileExt));

      $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'zip', 'doc', 'docx');

      if (in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
          if ($fileSize < 1500000) {

            $sql = "SELECT fileName FROM uploads WHERE fileName=?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../index.php?error=sqlerror");
                exit();
            }
            else {

              $fileNameNew = $docName.uniqid('', true).".".$fileActualExt;
              $fileDestination = '../uploads/'.$fileNameNew;
              move_uploaded_file($fileTmpName, $fileDestination);

                    $sql = "INSERT INTO uploads (date, time, docName, fileName, company) VALUES (?, ?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location: ../index.php?error=sqlerror1");
                        exit();
                    }
                    else {

                        mysqli_stmt_bind_param($stmt, "sssss", $date, $time, $docName, $fileNameNew, $comp);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../index.php?answers=success".$fileNameNew);
                        exit();
                        }
                }
          } else {
            echo "Your file is too big!";
          }
        } else {
          echo "There was an error uploading your file!";
        }
      } else {
        echo "You cannot upload files of this type!";
      }
}
}
?>
