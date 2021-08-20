<?php
    require'../adminheader.php';
    require'../includes/auth_check.php';
?>
</div>
<!--MAIN-->
<div style="background:#999999">
<div class="column-66" style="color:#000000">

<form action="done.php" method="POST">
  <div class="mod">
      <div class="modhead" style="text-align:center">
            <h1 style="color:#000000"><i class="far fa-file-alt"></i></i> <b>Reports</b></h1>
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
    </tr>

    <tr>
        <?php
        require'../includes/dbh.inc.php';
            $sql = "SELECT * FROM uploads WHERE done='no'";
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
                <td><a href="../../upload/uploads/'.$fileName.'" class="button">'.$fileName.'</a></td>';
              }
            }
        ?>
    </tr>

  </table>
  <br>
  <button type="submit" class="btn5 vda">UPDATE</button>
</form>
<br><br><br>
</div>
</div>
</div>



<div class="column-33">
  <div class="mod">
      <div class="modhead" style="text-align:center">
            <h1 style="color:#000000"><i class="far fa-file-alt"></i></i> <b>Other</b></h1>
          </div>
          <div class="modcontainer">

<a href="archived.php"><button class="btn5 vda">Archived</button></a>

            </div>
        </div>
    </div>



<?php
  require '../../footer.php';
?>
