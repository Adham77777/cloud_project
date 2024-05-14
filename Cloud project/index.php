<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Data</title>
    <link rel="stylesheet" href="styles.css">
</head>
    <header>
        <h1>Team Data</h1>
        <nav>
        </nav>
    </header>

    <main>
        <section class="intro">
            <h2>Welcome to our Team Data Website!</h2>
            <p>Explore our team members and their details.</p>
        </section>
    </main>
<body>
<table>
    <tr>
       
    <th>Id</th>

    <th>Name</th>

    <th>Age</th>

    <th>CGPA</th>
   
    
    </tr>
    <?php
$conn = mysqli_connect("db","adham","123","Students_info");
if($conn->connect_error)
{
    die("Connection failed:". $conn ->connect_error);
}
$sql = "SELECT Id, Name , Age ,CGPA from Students_info";
$result = $conn -> query($sql);
if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        echo"<tr><td>". $row["Id"] ."</td><td>". $row["Name"] ."</td><td>". $row["Age"] ."</td><td>". $row["CGPA"] . "</td></tr>";
    }
}
?>
</table>
</body>

    <footer>
    </footer>
</body>
</html>

