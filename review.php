<?php
include "config/database.php";
global $conn;

//if not set
$row=[
      "fullname"=>"N/A",
      "age"=>"N/A",
      "gender"=>"N/A",
      "email"=>"N/A",
      "phone"=>"N/A",
      "comment"=>"N/A"
];
if (isset($_GET["id"]) and is_numeric($_GET["id"])){
    $id=$_GET["id"];

    $sql="SELECT * FROM c_data WHERE id=$id";
    $result=$conn->query($sql);

    if($result && mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);

    }else{
        echo "<h3>No records found !!!</h3>";
        exit();
    }
    $result->close();

}else{
 echo "Invalid Request";
 exit();
}
$conn->close();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Submitted Form</title>
</head>
<body class="bg-light">
<h3 class="text-center text-success">Form submitted successfully</h3>
<table class="table table-bordered table-striped mt-3">
    <tr>
        <th>Full Name</th>
        <td><?php echo htmlspecialchars($row["fullname"])?></td>
    </tr>
    <tr>
        <th>Age</th>
        <td> <?php echo htmlspecialchars( $row["age"]) ?>  </td>
    </tr>
    <tr>
        <th>Gender</th>
        <td><?php echo htmlspecialchars($row["gender"]) ?> </td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?php echo htmlspecialchars($row["email"]) ?> </td>
    </tr>
    <tr>
        <th>Phone Number</th>
        <td><?php echo  htmlspecialchars($row["phone"]) ?> </td>
    </tr>
    <tr>
        <th>Comment</th>
        <td><?php echo htmlspecialchars($row["comment"])  ?> </td>
    </tr>

</table>
<div class="text-center">
<a href="index.php" class="btn btn-primary mt-3" > Resubmit Form</a>
</div>
</body>
</html>
