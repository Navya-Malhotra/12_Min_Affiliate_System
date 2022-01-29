<?php 
include("connection.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" type="text/css">
    <title>12 Minute Affiliate System™ Official #1</title>
</head>
<body>
    <p class="title">Ready To make 50% Monthly RECURRING COMMISSIONS? - HOT OFFER! </p>
    <form action="">
        <div class="form_div">
        <input type="text" name="fullname" id="fullname" placeholder="Your Full Name" required/>
        <input type="number" name="age" id="age" placeholder="Your Age" required/>
        <input type="email" name="email" id="email" placeholder="Your Email Address" required/>
        </div>
        
        <button type="submit" name="submit" id="submit">GO!</button>
    </form>
</body>
</html>
<?php 
$fullname = $_GET['fullname'];
$age = $_GET['age'];
$email = $_GET['email'];

$query = "INSERT INTO imp_details VALUES('$fullname','$age','$email')";
$data = mysqli_query($conn,$query);
if($data){
    echo "Data Secured";
}else{
    echo "Service Unreachable".mysqli_connect_error();
}
?>