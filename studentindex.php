<?php 

if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='3'){
	header('location:login.php');
	die();
}
session_start();
if(!isset($_SESSION['IS_LOGIN'])){
	header('location:login.php');
	die();
}

?>


<!-- header of supervisor -->

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Admin</title>
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- Page level plugin CSS-->
      <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="css/sb-admin.css" rel="stylesheet">
   </head>
   <body id="page-top">
      <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
         <a class="navbar-brand mr-1" href="index.php">Start Bootstrap</a>
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
         
			<li class="nav-item">
               <a class="nav-link" href="studentindex.php">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span>
               </a>
       
           
          
         
            </ul>
            
         <div id="content-wrapper">
<div class="container-fluid">
   <!-- DataTables Example -->
   <div class="card mb-3">
	  <div class="card-header">
		 <i class="fa fa-fw fa-user"></i>
		 Attendance Table
	  </div>
	  <div class="card-body">
		 <div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			   <thead>
				  <tr>
					 <th>Name</th>
					 <th>City</th>
					 <th>Email</th>
				  </tr>
			   </thead>
			   <tfoot>
				  <tr>
					 <th>Name</th>
					 <th>City</th>
					 <th>Email</th>
				  </tr>
			   </tfoot>
			   <tbody>
				  <tr>
					 <td>Vishal Gupta</td>
					 <td>Delhi</td>
					 <td>vishal@gmail.com</td>
				  </tr>
				  <tr>
					 <td>Bhaavit Gupta</td>
					 <td>Noida</td>
					 <td>bhaavit@gmail.com</td>
				  </tr>
			   </tbody>
			</table>
		 </div>
	  </div>
   </div>
</div>
<?php include('inc/footer.php')?>