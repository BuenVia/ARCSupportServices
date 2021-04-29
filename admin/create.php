<?php
    require 'header.php';
?>

<main>

    <div class="box">
        <form action="includes/create.inc.php" method="POST">
        <h1>Create User</h1>
            <label for="">Email</label><br>
            <input type="text" name="user" id="" placeholder="..."/><br>

            <label for="">First Name</label><br>
            <input type="text" name="psw" id="" placeholder="..."/><br>

            <label for="">Last Name</label><br>
            <input type="text" name="rpsw" id="" placeholder="..."/><br>

            <label for="">Bodyshop</label><br>
            <select name="bodyshop" id="">
                <option>Select Bodyshop</option>
            </select><br>

            <input type="submit" name="create-user-submit">
        </form>
    </div>

    <div class="box">
        <form action="includes/create.inc.php" method="POST">
        <h1>Create Bodyshop</h1>
            <label for="">Bodyshop</label><br>
            <input type="text" name="bodyshop" id="" /><br>

            <label for="">Street</label><br>
            <input type="text" name="street" id=""/><br>

            <label for="">Town</label><br>
            <input type="text" name="town" id="" /><br>

            <label for="">County</label><br>
            <input type="text" name="county" id=""/><br>

            <label for="">Postcode</label><br>
            <input type="text" name="pcode" id="" /><br>

            <label for="">Phone</label><br>
            <input type="text" name="phone" id=""/><br>


            <input type="submit" name="create-bodyshop-submit">
        </form>
    </div>

    <div class="box">
        <h1>Create Admin</h1>
        <form action="includes/create.inc.php" method="POST">
            <label for="">Email</label><br>
            <input type="text" name="user" id="" /><br>

            <label for="">Password</label><br>
            <input type="password" name="psw" id=""/><br>

            <label for="">Repeat Password</label><br>
            <input type="password" name="rpsw" id="" /><br>

            <input type="submit" name="create-admin-submit">
        </form>
    </div>

</main>

<?php
    require 'footer.php';
?>