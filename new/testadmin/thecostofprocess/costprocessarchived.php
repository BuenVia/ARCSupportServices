<?php
    require'../adminheader.php';
    require'../includes/auth_check.php';
?>

<!--HEADER-->
</div>
<!--MAIN-->

<div class="column-66" style="background-color:white">
<form>
  <div class="mod">
      <div class="modhead" style="text-align:center">
            <h1 style="color:#000000"><b>Archived</b></h1>
          </div>
          <div class="modcontainer">

            <table>
              <caption><h3>Outstanding</h3></caption>
              <tr>
                <th style="font-size: 15px; width:50px">ID:</th>
                <th style="font-size: 15px; width:100px">Date:</th>
                  <th style="font-size: 15px; width:150px">Email:</th>
                  <th style="font-size: 15px; width:100px">Name:</th>
                  <th style="font-size: 15px; width:400px">Question:</th>
                  <th style="font-size: 15px; width:50px">Opt-in:</th>
              </tr>

              <tr>
                <?php
                require'../includes/dbh.inc.php';
                    $sql = "SELECT * FROM download WHERE done='1'";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {


                        echo
                        '<tr>
                        <td>'.$row['id'].'<input type="radio" name="id" value="'.$row['id'].'"></td>
                        <td>'.$row['date'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['question'].'</td>
                        <td>'.$row['optin'].'</td></tr>';
                      }
                    }
                ?>
              </tr>

            </table>
  <br>
</div>
</div>
</form>
<a href="costprocessadmin.php"><button class="btn5 vda">Back</button></a>
<br><br><br>
</div>



<div class="column-33">
  <div class="mod">
      <div class="modhead" style="text-align:center">
        <h1 style="color:#000000"><b>All Files</b></h1>
      </div>
          <div class="modcontainer">

          </div>
    </div>
</div>


<?php
  require '../../footer.php';
?>
