<!--WEBSITE DESIGNED BY MATTHEW CLIFFORD-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ARC Support Services</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../design/new.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<!--HEADER-->
<div style="background:#000000">
<div class="container">
    <div class="row">

        <div class="column-33" style="text-align:centre">
            <a href="index.php"><img src="../../design/images/new_arc_logo.png" style="height:80px"></a>
        </div>



    </div>
</div>
</div>
<!--MAIN-->
<div style="background:#999999" style="padding:10px;margin:10px">
<div class="" style="color:#000000">

<form action="column-80" method="POST">
  <div class="mod">
      <div class="modhead" style="text-align:center">
            <h1 style="color:#000000"><i class="far fa-file-alt"></i></i> <b>Reports</b></h1>
          </div>
          <div class="modcontainer">

  <table>
    <caption><h3>Outstanding</h3></caption>
    <tr>
      <th style="font-size: 15px; width:50px">ID:</th>
      <th style="font-size: 15px; width:100px">Date:</th>
        <th style="font-size: 15px; width:150px">Email:</th>
        <th style="font-size: 15px; width:150px">Name:</th>
        <th style="font-size: 15px; width:400px">Question:</th>
    </tr>

    <tr>
        <?php
        require'../dbh.inc.php';
            $sql = "SELECT * FROM download";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
              while ($row = mysqli_fetch_assoc($result)) {


                echo
                '<tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['date'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['name'].'</td>
                <td>'.$row['question'].'</td></tr>';
              }
            }
        ?>
    </tr>

  </table>

</form>
<br><br><br>
</div>
</div>
</div>







<?php
  require '../../footer.php';
?>
