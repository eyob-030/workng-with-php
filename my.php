<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="margin: 50px;">
    <h1>List of Employess</h1>
    <br>
    <table class="table">
        <thead>
       <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>phone</th>
        <th>Address</th>
        <th>Action</th>
    </tr> 
    </thead>

    <tbody class="table-group-divider">

    <?php
$servername="localhost";
$username="root";
$password="";
$database="mydb";

$connection= new mysqli($servername, $username, $password, $database);
   
if ($connection->connect_error){
    die("connection failed:" . $connection->connect_error );
}

$sql="select * from employees";
$result=$connection->query($sql);
if (!$result){
    die ("Invalid query:" . $connection->error);
}

while($row=$result->fetch_assoc()){

    echo  "<tr>
<td>".$row["id"]."</td>
<td>".$row["first_name"]."</td>
<td>".$row["last_name"]."</td>
<td>".$row["email"]."</td>
<td>".$row["phone"]."</td>
<td>".$row["address"]."</td>
<td>
<a class='btn btn-primary' btn-sm href='update'>update</a>
<a class='btn btn-danger' btn-sm href='delete'>delete</a>
</td>
        </tr>";

}

       
        ?>
    </tbody>

    </table>
</body>
</html>