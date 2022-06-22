<?php
require_once __DIR__ . "/database.php";
require_once __DIR__ . "/department.php";

$sql = "SELECT id, name FROM departments;";
$result = $connection->query($sql);


if($result && $result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $curr_department = new Department($row["id"], $row["name"]);
        $departments[] = $curr_department; 
    }
}elseif ($result){

}else{
    echo 'Error';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departments</title>
</head>
<body>
    
  <h1>Lista Dipartimenti</h1>
<?php foreach($departments as $department):?>
<section>
    <h2><?php echo $department->name;?></h2>
    <a href="specific_department.php">Info sul dipartimento</a>
</section>


    <?php endforeach?>
</body>
</html>