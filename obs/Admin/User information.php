<!DOCTYPE html>
<html>
<head>
<style type="text/css">
    td{
            border: 1px solid black;
            
        }
        .wraper
        {
            width: 70%;
    margin: auto;
    padding: auto;
    margin-top: 100px;
    transform: scale(1.1);
        }

  </style>
	</style>
</head>
<body>
<?php  
session_start();

if (isset($_SESSION['user_name']))
  {require 'head/Top1.php';
  require 'head/Top2.php';}
else
{
  header("location:login.php");
} 

if (!isset($_POST['name'])) 
{
  require_once ('model/model.php');
  $useres = showAlluser();
}
?>

<form class="wraper" >
<table style="border: 1px solid black ;margin: auto;">
      
  <tr style="background-color:gray; color: white; ">
    <th>Name</th>
    <th>User Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Gender</th>
    <th>Date Of Birth</th>
     <th colspan="2">Action</th>
  </tr>
 <?php 
        foreach ($useres as $i => $usere): 
        
        ?>
<tr>
    <td><?php echo $usere['name'] ?></td>
    <td><?php echo $usere['user_name'] ?></td>
    <td><?php echo $usere['email'] ?></td>
    <td><?php echo $usere['password'] ?></td>
    <td><?php echo $usere['gender'] ?></td>
    <td><?php echo $usere['dob'] ?></td>
    <td><a href="editUser.php? user_name=<?php echo $usere['user_name'] ?>">Edit</a></td>
    <td><a href="deleteUser.php? user_name=<?php echo $usere['user_name'] ?>">Delete</a></td>
  </tr>
 <?php  endforeach; ?>
    
</table>
<div style="text-decoration: none; text-align: center; margin: auto;width: 20%;height: 24px;
background: #1376D5;;border-radius: 5px; margin-top:10px ">
  <a style=" text-decoration: none;color: white; margin-top: 5px;" href="adduser.php">Add User</a>
</div>
<div style="text-decoration: none; text-align: center; margin: auto;width: 20%;height: 24px;
background: #1376D5;;border-radius: 5px; margin-top:10px ">
    <a style=" text-decoration: none;color: white; margin-top: 25px;" href="search_user.php">Search User</a>
</div>

</form>
<?php require 'fotter/Footer.php';?>
</body>
</html>