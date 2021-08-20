<!--WEBSITE DESIGNED BY MATTHEW CLIFFORD-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ARC Support Services</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/members.php">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<!--HEADER-->
<div style="background:#000000">
<div class="container">
    <div class="row">

        <div class="column-33" style="text-align:centre">
            <a href="index.php"><img src="../images/new_arc_logo.png" style="height:80px"></a>
        </div>



    </div>
</div>
</div>
<!--MAIN-->

<div class="column-66" style="color:#000000">
<form action="javascript:void(0)" method="POST">
  <div class="mod">
      <div class="modhead" style="text-align:center">
            <h1 style="color:#000000"><b>Archived</b></h1>
          </div>
          <div class="modcontainer">

  <table>
    <caption><h3>Outstanding</h3></caption>
    <tr>
      <th style="font-size: 15px; width:50px">ID:</th>
      <th style="font-size: 15px; width:80px">Date:</th>
        <th style="font-size: 15px; width:70px">Time:</th>
        <th style="font-size: 15px; width:150px">Company:</th>
        <th style="font-size: 15px; width:130px">Doc Name:</th>
        <th style="font-size: 15px; width:300px">File Name</th>
        <th style="font-size: 15px; width:50px">File</th>
    </tr>

    <tr>
        <?php
        require'includes/dbh.inc.php';
            $sql = "SELECT * FROM uploads WHERE done='yes' ORDER BY id DESC;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
              while ($row = mysqli_fetch_assoc($result)) {

                $fileName = $row['fileName'];

                echo
                '<tr><td>'.$row['id'].'<input type="radio" name="id" value="'.$row['id'].'"></td>
                <td>'.$row['date'].'</td>
                <td>'.$row['time'].'</td>
                <td>'.$row['company'].'</td>
                <td>'.$row['docName'].'</td>
                <td>'.$row['fileName'].'</td>
                <td><a href="../upload/uploads/archive/'.$fileName.'" class="button">Here</a></td></tr>';
              }
            }
        ?>
    </tr>

  </table>
  <button type="submit" class="btn5 lnk">UPDATE</button>
  <form>
<br><br><br>
</div>
</div>
</div>



<div class="column-33">
  <div class="mod">
      <div class="modhead" style="text-align:center">
            <h1 style="color:#000000"><b>All Files</b></h1>
          </div>
          <div class="modcontainer">

            <div class="column">
              <div class="mod">
                  <div class="modhead" style="text-align:center">
                        <h1 style="color:#000000"><b>All Unarchived Files</b></h1>
                      </div>
                      <div class="modcontainer">
<?php

           $blogposts = scandir("../upload/uploads/");
           $forbiddenChars = array(".", "_");

                foreach($blogposts as $blogposts){
                 $firstChar = substr($blogposts, 0, 1);
                 if(in_array($firstChar, $forbiddenChars)){
                  continue;
                 }

                    echo '<br><a href="../upload/uploads/'.$blogposts.'"><button class="btn6 upl">'.substr($blogposts, 0, 40).'</button></a>';
                }

            ?>
</div>
</div>
</div>
<div class="column">
</div>

            </div>
        </div>
    </div>



<?php
  require 'footer.php';
?>
