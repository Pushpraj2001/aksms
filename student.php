<?php 
include('inc/header.php');
if(isset($_SESSION['ROLE']) + $_SESSION['ROLE']!='2') + $_SESSION['ROLE']!='1'{
	
	header('location:login.php')

}





?>
<div class="container-fluid">
   <!-- DataTables Example -->
   <div class="card mb-3">
	  <div class="card-header">
		 <i class="fa fa-fw fa-user"></i>
		 Student Table
	  </div>
	  <div class="card-body">
		 
			<table class="table table-bordered display nowrap" id="example" width="100%" cellspacing="0">
			<a class="btn btn-success" href="studentadd.php" role="button">Add New Student</a>
			   <thead>
				  <tr>
					 <th>Name</th>
					 <th>City</th>
					 <th>Email</th>
					 <th>Action</th>
				  </tr>
			   </thead>
			  
			   <tbody>
				  <tr>
					 <td>Vishal Gupta</td>
					 <td>Delhi</td>
					 <td>vishal@gmail.com</td>
					 <td><button type="button"  class="btn btn-primary">Edit</button>
					 <button type="button" class="btn btn-danger">Danger</button></td>
				 
				  </tr>
				  <tr>
					 <td>Bhaavit Gupta</td>
					 <td>Noida</td>
					 <td>bhaavit@gmail.com</td>
					 <td><button type="button" class="btn btn-primary">Edit</button>
					 <button type="button" class="btn btn-danger">Danger</button></td>
				 
				  </tr>
			   </tbody>
			</table>
		 </div>
	  </div>
   </div>
<?php include('inc/footer.php')?>
<script src="script/buttons.flash.min.js" type="text/javascript"></script>
			<script src="script/buttons.html5.min.js" type="text/javascript"></script>
			<script src="script/buttons.print.min.js" type="text/javascript"></script>
			<script src="script/dataTables.buttons.min.js" type="text/javascript"></script>
			<script src="script/jquery-3.5.1.js" type="text/javascript"></script>
			<script src="script/jquery.dataTables.min.js" type="text/javascript"></script>
			<script src="script/pdfmake.min.js" type="text/javascript"></script>
			<script src="script/jszip.min.js" type="text/javascript"></script>
			<script src="script/vfs_fonts.js" type="text/javascript"></script>
			<script type="text/javascript" >
				   $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
				   </script>