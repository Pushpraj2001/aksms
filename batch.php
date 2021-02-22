<?php 
include('inc\header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
	header('location:login.php');
	die();
	
}

include('db.php');
$sql = "SELECT id, bname , sdate , teacher  FROM batch";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
 
}

mysqli_close($con);

?>
<div class="container-fluid">
   <!-- DataTables Example -->
   <div class="card mb-3">
	  <div class="card-header">
		 <i class="fa fa-fw fa-user"></i>
		 Batch Detail
	  </div>
	  <div class="card-body">
		 <div class="table-responsive">
			<table class="display nowrap" id="example"  width="100%" cellspacing="0">
			<a class="btn btn-success" href="addbatch.php" role="button">Add New Batch</a>
			   <thead>
				  <tr>
					 <th>Name</th>
					 <th>Batch Id</th>
					 <th>Student No </th>
					 <th>Teacher Id</th>
					 <th>Time</th>
					 <th>Date</th>
					 <th>Action</th>
				  </tr>
			   </thead>
			   
			   <tbody>
				  <tr>
					 <td>Vishal Gupta</td>
					 <td>Delhi</td>
					 <td>vishal@gmail.com</td>
					 <td></td>
					 <td></td>
					 <td></td>
					 <td><button type="button" class="btn btn-primary">Edit</button>
					 <button type="button" class="btn btn-danger">Danger</button></td>
				  </tr>
				  <tr>
					 <td>Vishal Gupta</td>
					 <td>Delhi</td>
					 <td>vishal@gmail.com</td>
					 <td></td>
					 <td></td>
					 <td></td>
					 <td><button type="button" class="btn btn-primary">Edit</button>
					 <button type="button" class="btn btn-danger">Danger</button></td>
				  </tr>
				
				
			   </tbody>
			</table>
		 </div>
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