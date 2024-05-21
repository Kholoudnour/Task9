<?php
  if($_SERVER["REQUEST_METHOD"] === "POST"){
    include_once('conn.php');
    $sid = $_POST[`id`];
    $Name = $_POST[`Name`];
    $Position = $_POST[`Position`];
    $Delete = $_POST[`Delete`];
    $Update = $_POST[`Update`];
 
    try{
        $sql = INSERT INTO `testmonials`(`id`, `Name`, `Position`, `Delete`, `Update`, `created_at`) VALUES ('?','?','?','?','?','?')
        $stmt->execute([ $sid, $Name, $Position, $Delete,  $Update,]);
        $msg = "Inserted Successfully";
        $alertType = "alert-success";
    } catch(PDOException $e) {
        $msg = $e->getMessage();
        $alertType = "alert-danger";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Testimonials</title>
    <link rel="stylesheet" href="cars.css">
</head>
<body>
    <body>
        <div id="wrapper">
         <h1>Testimonials List</h1>
         
         <table id="keywords" cellspacing="0" cellpadding="0">
           <thead>
             <tr>
               <th><span>Name</span></th>
               <th><span>Position</span></th>
               <th><span>Delete</span></th>
               <th><span>Update</span></th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td class="lalign">silly tshirts</td>
               <td>6,000</td>
               <td><img src="../img/delete.jpg"></td>
               <td><img src="../img/update.jpg"></td>
             </tr>
             <tr>
               <td class="lalign">desktop workspace photos</td>
               <td>2,200</td>
               <td><img src="../img/delete.jpg"></td>
               <td><img src="../img/update.jpg"></td>
             </tr>
             <tr>
               <td class="lalign">arrested development quotes</td>
               <td>13,500</td>
               <td><img src="../img/delete.jpg"></td>
               <td><img src="../img/update.jpg"></td>
             </tr>
             <tr>
               <td class="lalign">popular web series</td>
               <td>8,700</td>
               <td><img src="../img/delete.jpg"></td>
               <td><img src="../img/update.jpg"></td>
             </tr>
             <tr>
               <td class="lalign">2013 webapps</td>
               <td>9,900</td>
               <td><img src="../img/delete.jpg"></td>
               <td><img src="../img/update.jpg"></td>
             </tr>
             <tr>
               <td class="lalign">ring bananaphone</td>
               <td>10,500</td>
               <td><img src="../img/delete.jpg"></td>
               <td><img src="../img/update.jpg"></td>
             </tr>
           </tbody>
         </table>
        </div> 
       </body>
</body>
</html>
