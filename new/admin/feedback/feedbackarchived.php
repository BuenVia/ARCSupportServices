<?php
    require'../adminheader.php';
    require'../includes/auth_check.php';
?>
</div>
<!--MAIN-->

<div class="column-66" style="color:#000000">
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
      <th style="font-size: 15px; width:80px">Date:</th>
        <th style="font-size: 15px; width:70px">Name:</th>
        <th style="font-size: 15px; width:150px">Question 1:</th>
        <th style="font-size: 15px; width:130px">Question 2:</th>
    </tr>

    <tr>
        <?php
        require'includes/dbh.inc.php';
            $sql = "SELECT * FROM feedback WHERE done='1' ORDER BY id DESC;";
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
  <br>
</div>
</div>
</form>
<a href="feedbackadmin.php"><button class="btn5 vda">Back</button></a>
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
