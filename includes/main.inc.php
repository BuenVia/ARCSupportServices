<?php


if (isset($_POST['comment-submit'])) {

    $name = $_POST['comName'];
    $email = $_POST['comEmail'];
    $msg = $_POST['comMsg'];

    if (empty($name) || empty($email) || empty($msg)){
      header("Location: ../index.html?error=emptyfields");
      exit();
      } else {
          ini_set( 'display_errors', 1 );
          error_reporting( E_ALL );
  
          $from = "webmaster@arcsupportservices.co.uk";
          $to = "james@arcsupportservices.co.uk";
          $subject = "ENQUIRY: ARC Support Services";
          $headers = "From:" . $from;
  
          $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $msg];
          $body = join(PHP_EOL, $bodyParagraphs);
  
          if(mail($to,$subject,$body,$headers)) {
            header("Location: ../index.html?commentsubmit=success");
          } else {
              header("Location: ../index.html?commentsubmit=fail");
          }
      }
  }

  if (isset($_POST['ebook-submit'])) {
    require 'dbh.inc.php';

    date_default_timezone_set('Europe/London');

    $name = $_POST['ebookName'];
    $email = $_POST['ebookEmail'];
    $date = date("Y-m-d H:i:s");

    if (empty($name) || empty($email)) {
        header("Location: ../index.html?error=emptyfields&name-".$name."&cname=".$email);
        exit();
    }
    else {
        $sql = "SELECT date FROM ebook WHERE date=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.html?error=sqlerror");
            exit();
        }
        else {
                $sql = "INSERT INTO ebook (date, name, email) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../index.html?error=sqlerror1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "sss", $date, $name, $email);
                    mysqli_stmt_execute($stmt);


                    ini_set( 'display_errors', 1 );
                    error_reporting( E_ALL );
            
                    $from = "webmaster@arcsupportservices.co.uk";
                    $to = "james@arcsupportservices.co.uk";
                    $subject = "DOWNLOAD: eBook";
                    $headers = "From:" . $from;
            
                    $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message: ", $date];
                    $body = join(PHP_EOL, $bodyParagraphs);
            
                    if(mail($to,$subject,$body,$headers)) {
                      header("Location: ../index.html?commentsubmit=success");
                    } else {
                        header("Location: ../index.html?commentsubmit=fail");
                    }


                    exit();
                    }
            }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}