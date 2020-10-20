<?php
session_start();
if(!isset($_SESSION['IS_LOGIN'])){
	header('location:login.php');
	die();
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>AKS Management System</title>
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- Page level plugin CSS-->
      <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="css/sb-admin.css" rel="stylesheet">
   </head>
   <body id="page-top">
      <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
         <a class="navbar-brand ml-5" href="index.php">AKS Management System</a>
        
         <div class="d-none d-md-inline-block ml-auto"></div>
         <!-- Navbar -->
         <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow">
           
               <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-user-circle fa-fw"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="logout.php">Logout</a>
               </div>
            </li>
         </ul>
      </nav>
      <div id="wrapper">
         <!-- Sidebar -->
         <ul class="sidebar navbar-nav">
            <?php if($_SESSION['ROLE']==1){?>
			<li class="nav-item">
               <a class="nav-link" href="index.php">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span>
               </a>
                
         <li class="nav-item">
               <a class="nav-link" href="batch.php">
               <i class="fa fa-fw fa-newspaper"></i>
               <span>Batch</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="supervisor.php">
               <i class="fa fa-fw fa-newspaper"></i>
               <span>SupperVisor</span></a>
            </li>
           
            <li class="nav-item">
               <a class="nav-link" href="superattendace.php">
               <i class="fa fa-fw fa-newspaper"></i>
               <span>Supervisor Attendance </span></a>
            </li>
       
            <li class="nav-item">
               <a class="nav-link" href="studentattendace.php">
               <i class="fa fa-fw fa-newspaper"></i>
               <span>Student Attendance </span></a>
            </li>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="student.php">
               <i class="fa fa-fw fa-user"></i>
               <span>Student</span></a>

            </li>
           
            <?php } ?>



            <?php if($_SESSION['ROLE']==2){?>
			<li class="nav-item">
               <a class="nav-link" href="supervisorindex.php">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span>
               </a>
          
           
            <li class="nav-item">
               <a class="nav-link" href="studentattendace.php">
               <i class="fa fa-fw fa-newspaper"></i>
               <span>Student Attendance </span></a>
            </li>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="student.php">
               <i class="fa fa-fw fa-user"></i>
               <span>Student</span></a>

            </li>
           
            <?php } ?>
         
            </ul>
            
         <div id="content-wrapper">