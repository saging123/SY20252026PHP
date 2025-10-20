<?php
include('parts/header.php');
?>


<form action="RegisterEndpoint.php" method="post">
    <div>
        <label> First Name</label>
        <input type="text" name="firstname">
    </div>
    <div>
        <label> Last Name</label>
        <input type="text" name="lastname">
    </div>
    <div>
        <label> Age</label>
        <input type="number" name="age" value="1">
    </div>
    <div>
        <label> Phone</label>
        <input type="text" name="phone">
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
</form>



<?php
include('parts/footer.php');
?>