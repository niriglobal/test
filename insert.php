<!--<?php
// PHP Data Objects(PDO) Sample Code:
//try {
//     $conn = new PDO("sqlsrv:server = tcp:ntestadmin.database.windows.net,1433; Database = testadmin", "niriadmin", "{admin@2023}");
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }
// catch (PDOException $e) {
//     print("Error connecting to SQL Server.");
//     die(print_r($e));
//}

// SQL Server Extension Sample Code:
// $connectionInfo = array("UID" => "niriadmin", "pwd" => "{admin@2023}", "Database" => "testadmin", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
// $serverName = "tcp:ntestadmin.database.windows.net,1433";
// $conn = sqlsrv_connect($serverName, $connectionInfo);
// $sql = "INSERT INTO testadmin (PersionID, LastName, Firstname, Address, City) VALUES        
// ('$PersionID', '$LastName', '$Firstname','$Address','$City')";
// ?> -->

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("tcp:ntestadmin.database.windows.net", "niriadmin", "admin@2023", "testadmin");  //database = Add your Own database_Name

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
//Column name = mysqli_real_escape_string($link, $_REQUEST['Html name']);
$PersionID = mysqli_real_escape_string($link, $_REQUEST['id']); 
$Firstname = mysqli_real_escape_string($link, $_REQUEST['First_Name']);           
$LastName = mysqli_real_escape_string($link, $_REQUEST['Last_name']);  
$City = mysqli_real_escape_string($link, $_REQUEST['City']);
$Address = mysqli_real_escape_string($link, $_REQUEST['Address']);

 
// Attempt insert query execution
$sql = "INSERT INTO Persons (id, First_Name, Last_name, City, Address) VALUES        
('$id', '$First_Name', '$Last_name','$City','$Address')";
?>