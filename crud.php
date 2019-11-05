<?php
$con = mysqli_connect('localhost', 'root', '', 'testdb');
if (mysqli_connect_errno()) {
    echo "Failed to connect";
}

$rows = new stdClass();
$flag = 0;
if (isset($_POST["Name"])) {
    $n = $_POST["Name"];
    $op = $_POST["crud"];

    if ($op == "Insert") {
        if (isset($_POST["Salary"]) && isset($_POST["Email"]) && isset($_POST["Phone"])) {
            $s = $_POST["Salary"];
            $e = $_POST["Email"];
            $p = $_POST["Phone"];

            $query = "INSERT INTO User VALUES('$n','$e','$s','$p')";
            mysqli_query($con, $query);
        }
    } elseif ($op == "Delete") {

        $query = "DELETE FROM User WHERE Name = '$n'";
        if (mysqli_query($con, $query)) {
            echo "";
        } else {
            echo "failed";
        }
    } elseif ($op == "Update") {
        if (isset($_POST["Salary"]) && isset($_POST["Email"]) && isset($_POST["Phone"])) {
            $s = $_POST["Salary"];
            $e = $_POST["Email"];
            $p = $_POST["Phone"];

            $query = "UPDATE User SET Email = '$e', Salary = '$s', Phone = '$p' WHERE Name = '$n'";
            if (mysqli_query($con, $query)) {
                echo "";
            } else {
                echo "failed";
            }
        }
    } elseif ($op == "Select") {

        $query = "SELECT * FROM User";
        if ($response = mysqli_query($con, $query)) {
            // $rows = mysqli_num_rows($response);
            $rows = $response;
            $flag = 1;
        } else {
            echo "failed";
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CRUD OP</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <label for="Name">Enter name: </label>
            <input type="text" name="Name" id="Name">
            <br>

            <label for="Email">Enter email: </label>
            <input type="text" name="Email" id="Email">
            <br>

            <label for="Salary">Enter salary: </label>
            <input type="number" name="Salary" id="Salary">
            <br>

            <label for="Phone">Enter phone: </label>
            <input type="number" name="Phone" id="Phone">
            <br>

            <input type="submit" name="crud" value="Insert">
            <input type="submit" name="crud" value="Delete">
            <input type="submit" name="crud" value="Update">
            <br>
            <input type="submit" name="crud" value="Select">
            <div>


                <H3>DATABASE</H3>

                <table border=1>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Salary</th>
                        <th>Phone</th>
                    </tr>
                    <?php
                    if ($flag == 1) {
                        while ($row = mysqli_fetch_assoc($rows)) {
                            echo "<tr><td>" . $row['Name'] . "</td><td>" . $row['Email'] . "</td><td>" . $row['Salary'] . "</td><td>" . $row['Phone'] . "</td></tr>";
                        }
                    }
                    ?>
                </table>



            </div>
        </fieldset>
    </form>
</body>

</html>