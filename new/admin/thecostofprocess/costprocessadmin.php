<?php
    require'../adminheader.php';
    require'../includes/auth_check.php';
?>


<!--MAIN-->
</div>
<div style="background:#999999">
<div class="column-66" style="color:#000000">

<form action="costprocessdone.php" method="POST">
  <div class="mod">
      <div class="modhead" style="text-align:center">
            <h1 style="color:#000000"><i class="far fa-file-alt"></i></i> <b>Reports</b></h1>
          </div>
          <div class="modcontainer">

<div class="ex2">
  <table>
    <caption><h3>Outstanding</h3></caption>
    <tr>
      <th style="font-size: 15px; width:50px">ID:</th>
      <th style="font-size: 15px; width:100px">Date:</th>
        <th style="font-size: 15px; width:200px">Email:</th>
        <th style="font-size: 15px; width:100px">Name:</th>
        <th style="font-size: 15px; width:400px">Q1:</th>
        <th style="font-size: 15px; width:400px">Q2:</th>
        <th style="font-size: 15px; width:400px">Question:</th>
        <th style="font-size: 15px; width:50px">Opt-in:</th>
    </tr>

    <tr>
      <?php
      require'../includes/dbh.inc.php';
          $sql = "SELECT * FROM download WHERE done='0'";
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
              <td>'.$row['q1'].'</td>
              <td>'.$row['q2'].'</td>
              <td>'.$row['question'].'</td>
              <td>'.$row['optin'].'</td></tr>';
            }
          }
      ?>
    </tr>

  </table>
</div>

  <br>
  <button type="submit" class="btn5 vda">UPDATE</button>
  <a href="costprocessarchived.php"><button class="btn5 vda">Archived</button></a>
</form>
<br><br><br>
</div>
</div>
</div>



<div class="column-33">
  <form action="feedbackdone.php" method="POST">
    <div class="mod">
        <div class="modhead" style="text-align:center">
              <h1 style="color:#000000"><i class="far fa-file-alt"></i></i> <b>Reports</b></h1>
            </div>
            <div class="modcontainer">

<div class="ex2">
    <table>
      <tr>
        <th style="font-size: 15px; width:50px">ID:</th>
        <th style="font-size: 15px; width:80px">Date:</th>
          <th style="font-size: 15px; width:70px">Name:</th>
          <th style="font-size: 15px; width:150px">Question 1:</th>
          <th style="font-size: 15px; width:130px">Question 2:</th>
      </tr>

      <tr>
          <?php
          require'../includes/dbh.inc.php';
              $sql = "SELECT * FROM feedback WHERE done='0'";
              $result = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($result);

              if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                  echo
                  '<tr><td>'.$row['id'].'<input type="radio" name="id" value="'.$row['id'].'"></td>
                  <td>'.$row['date'].'</td>
                  <td>'.$row['name'].'</td>
                  <td>'.$row['q1'].'</td>
                  <td>'.$row['q2'].'</td></tr>';
                }
              }
          ?>
      </tr>

    </table>
</div>

    <br>
    <button type="submit" class="btn5 vda">UPDATE</button>
  </form>
    </div>

</div>
<?php
  require '../../footer.php';
?>
