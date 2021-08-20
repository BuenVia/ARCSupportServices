<script type="text/javascript">
function load()
{
window.open("http://www.google.com","_blank");
}
</script>

<?php

if (isset($_POST['download-submit'])) {

    require 'dbh.inc.php';

    date_default_timezone_set('Europe/London');

    $date = date("Y-m-d H:i:s");
    $email = $_POST['email'];
    $name = $_POST['name'];
    $question = $_POST['question'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $optin = $_POST['optin'];


    if (empty($name) || empty($email)) {
        header("Location: index.php?error=emptyfields&name-".$name."&cname=".$email);
        exit();
    }
    else {

        $sql = "SELECT date FROM download WHERE date=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: index.php?error=sqlerror");
            exit();
        }
        else {

                $sql = "INSERT INTO download (date, email, name, question, q1, q2, optin) VALUES (?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: index.php?error=sqlerror1");
                    exit();
                }
                else {

                    mysqli_stmt_bind_param($stmt, "sssssss", $date, $email, $name, $question, $q1, $q2, $optin);
                    mysqli_stmt_execute($stmt);
                    header("Location: download.php?dlsubmit=success");
                    exit();
                    }
            }

    }


    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}


else {
    header("Location: index.php");
    exit();
}
