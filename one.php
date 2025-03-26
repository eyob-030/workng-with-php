<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> fetch</title>
</head>
<body>
    <div class="container my-4">
        <table class="table">
      <thead class="table-dark">
      <tr>
        <th>#</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
        
    </tr> 



      </thead>  
      <tbody class="table-group-divider">
        <?php
        
 $servername="localhost";
$username="root";
$password="";
$database="student";

$conn=mysqli_connect($servername, $username,$password,$database);
if(!$conn){
    die("connection is not sucessful");
}

$sql="select * from users";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){

    echo "<tr>
    <th scope='row'>".$row["id"]."</th>
    <th >".$row["firstName"]."</th>
    <th >".$row["lastName"]."</th>
    <th >".$row["email"]."</th>


<td>
    <a class='btn btn-primary' btn-sm href='http://localhost/phpmyadmin/index.php?route=/table/sql&db=student&table=users'>update</a>
<a class='btn btn-danger' btn-sm href='http://localhost/phpmyadmin/index.php?route=/table/sql&db=student&table=users'>delete</a>
</td>
    
</tr> ";

}
        ?>
      </tbody>
    
      </table>
</div>
</body>
</html>