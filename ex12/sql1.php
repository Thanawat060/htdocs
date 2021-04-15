<?php
$db = $_GET['name'];
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "$db";
// Create connection
echo "<center>
<form action = 'sql1.php' method = 'get'>
    <table >
    <tr>
    <td>ชื่อฐานข้อมูล</td>
    <td><input type = 'text' name = 'name'></td>
    <tr>
    <td colspan = '2' align = 'center'><input type = 'submit' name = 'submit' value = 'Add'></td>
    </tr>
    <td colspan = '2' align = 'center'><input type = 'submit' name = 'submit1' value = 'Delete'></td>
    </tr>
    </tr>
    </tr>
    </table>
</form>";
    
if(isset($_GET['submit'])){
    $name = $_GET['name'];
    $conn = mysqli_connect($servername, $username, $password);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // Create database
    $sql = "CREATE DATABASE $name";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    } 
    else 
    {
        echo "Error creating database: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
//delete database
if(isset($_GET['submit1'])){
    $name = $_GET['name'];
    $conn = mysqli_connect($servername, $username, $password);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // Create database
    $sql = "DROP DATABASE $name";
    if (mysqli_query($conn, $sql)) {
        echo "Database Deleted successfully";
    } 
    else 
    {
        echo "Error delete database: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    // sql to create table
    $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
    } else {
    echo "Error creating table: " . $conn->error;
    }
    $conn->close();
?>