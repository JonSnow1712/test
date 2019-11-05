<?php
$server = "localhost";
$user = "root";
$pwd = "";
$dbname = "testdb";
$con = mysqli_connect($server, $user, $pwd, $dbname);
if ($con) {
    $sql = "select * from user";
    $result = mysqli_query($con, $sql);
}
?>
<html>


<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
</head>

<body>


    <h1>User Details</h1>

    <?php
    echo "<select id='ddlemp'>";

    echo "<option value=''>Select Employee</option>";

    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['Name'] . "'>" . $row['Name'] . "</option>";
    }
    echo  "</select>";

    ?>
    <table border="1">
        <tr>
            <td>Name :</td>
            <td>Email:</td>
            <td>Salary:</td>
            <td>Phone:</td>
        </tr>
        <tr>
            <td><span id="N"></td>
            <td><span id="E"></td>
            <td><span id="S"></td>
            <td><span id="P"></td>
        </tr>
    </table>
    <button type="button" id="btnOK">Click Me!</button>


</body>

</html>
<script>
    $(document).ready(function() {

        $("#btnOK").click(function() {

            var name = $("#ddlemp").val();

            $.ajax({

                method: "POST",
                url: "emp.php",
                data: {
                    Name: name
                },
                dataType: "JSON",
                success: function(data) {
                    console.log(data)
                    $("#N").text(data["Name"]);
                    $("#E").text(data["Email"]);
                    $("#S").text(data["Salary"]);
                    $("#P").text(data["Phone"]);

                }

            });

        }); //click event

    }); //document.ready
</script>