<?php
$server = "localhost";
$user = "root";
$pwd = "";
$dbname = "testdb";
$con = mysqli_connect($server, $user, $pwd, $dbname);
if ($con) {
    if (isset($_POST["Name"])) {
        $sql = "select * from user where Name='" . $_POST['Name'] . "'";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result)) {
            $data["Name"] = $row["Name"];
            $data["Email"] = $row["Email"];
            $data["Salary"] = $row["Salary"];
            $data["Phone"] = $row["Phone"];
        }
        echo json_encode($data);
    }
}
