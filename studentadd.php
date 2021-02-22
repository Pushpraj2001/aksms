<?php
include('inc/header.php');
if (isset($_SESSION['ROLE']) + $_SESSION['ROLE'] != '2') +$_SESSION['ROLE'] != '1'{

  header('location:login.php')}


?>
<script src='js/myjs.js' type="text/javascript"></script>
<div class="container-fluid">
  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-fw fa-user"></i>
      Add Student
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <!-- student registraion form -->
      </div>
      <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Admission Form </h4>
        <form class="needs-validation" method="post" action="database/stdadd.php">
          <div class="row">
            <!-- name -->
            <hr>
<center>
<h3> Personal Details</h3></center>
<hr>
            <div class="col-md-6 mb-3">
              <hr>
              <label for="student Name">Name on Certificate</label>
              <input name="studentname" type="text" class="form-control" id="studentname" placeholder="Student Name " value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <!-- father name -->
            <div class="col-md-6 mb-3">
              <label for="fathername">Mother Name</label>
              <input name="mothername" type="text" class="form-control" id="mothername" placeholder="Mother Name" value="" required>
              <div class="invalid-feedback">
                Valid Mother name is required.
              </div>
            </div>

            <div class="col-md-6 mb-3">
              <label for="fathername">Father Name</label>
              <input name="fathername" type="text" class="form-control" id="fathername" placeholder="Father Name" value="" required>
              <div class="invalid-feedback">
                Valid Father name is required.
              </div>
            </div>
          </div>
          <div class="row">

            <!-- dob -->
            <div class="col-md-6 mb-3">
              <label for="dob">Date Of Birth</label>
              <input name="dob" type="text" class="form-control" id="dob" placeholder="Date of Birth" value="" required>
              <div class="invalid-feedback">
                Date Of birth is required.
              </div>
            </div>
            <!-- Gender -->
            <div class="col-md-6 mb-3">
              <label for="gender">Gender</label>

              <select name="gender" id="cars">
                <option name="gender" value="Genral">Genral</option>
                <option name="gender" value="saab">Saab</option>
                <option name="gender" value="opel">Opel</option>
                <option name="gender" value="audi">Audi</option>
              </select>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <!-- marital stauts -->
            <div class="col-md-6 mb-3">
              <label for="marital">Marital Status</label>
              <br>
              <input type="radio" id="maried" name="marital" value="maried">
              <label for="maried">Maried</label><br>
              <input type="radio" id="single" name="marital" value="single">
              <label for="single">Single</label><br>

              <div class="invalid-feedback">
                Valid Marital Status is required.
              </div>
            </div>
            <!-- blood group -->
            <div class="col-md-6 mb-3">
              <label for="bloodgroup">Blood Group</label>
              <input type="text" class="form-control" name="bloodgroup" id="bloodgroup" placeholder="Blood group" value="" required>
              <div class="invalid-feedback">
                Valid Blood group is required.
              </div>
            </div>
            <!-- adhar card -->

            <div class="col-md-6 mb-3">
              <label for="adharcard">Adhar Card</label>
              <input type="text" class="form-control" id="adharcard" name="adharcard" placeholder="Adhar Card" value="" required>
              <div class="invalid-feedback">
                Valid Adhar Card is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="category">Category</label>
              <input type="text" class="form-control" id="category" placeholder="category" name="category" value="" required>
              <div class="invalid-feedback">
                Valid Category is required.
              </div>
            </div>

          </div>

          <!-- image -->
          <label for="imageupload">Student Photo</label>
          <div class="custom-file">

            <input type="file" name="studentphoto" class="custom-file-input" id="studentphoto" required>
            <label class="custom-file-label" for="stuentphoto">Choose file...</label>
          </div>

<hr>
<center>
<h1> Login Details</center>
          <!-- email or username  -->

          <div class="mb-3">
            <label for="email">Email <span class="text-muted"></span></label>
            <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
            <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.
            </div>
             </div>
            <!-- password  -->
         
          <div class="mb-3">
            <label for="password">Password</label>
            <div class="input-group">

              <input type="Password" class="form-control" id="password" name="password" placeholder="Password" required>
              <div class="invalid-feedback" style="width: 100%;">
                Your Password is required.
              </div>
            </div>
          </div>
          <hr>
<center>
<h3> Address Details</h3></center>
<hr>
          <!-- parmanent address  -->
          <!-- village  -->
          <div class="mb-3">
            <label for="village">Village</label>
            <input name="village" type="text" class="form-control" id="address" placeholder="Village Name" required>
            <div class="invalid-feedback">
              Please enter your Village.
            </div>
          </div>
          <!-- block -->

          <div class="mb-3">
            <label for="block" required>Block </span></label>
            <input type="text" name="block" class="form-control" id="block" placeholder="Block">
          </div>

          <div class="row">

            <div class="form-group">
              <div class="col-sm-12">
                <!-- country -->
                <select name="country" class="form-control countries" id="countryId" required="required">
                  <option value="">Select Country</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <!-- state -->
                <select name="state" class="form-control states" id="stateId" required="required">
                  <option value="">Select State</option>
                </select>
              </div>
            </div>
            <div class="form-group">

              <select name="city" class="form-control cities" id="cityId" required="required">
                <!-- city -->
                <option value="">Select City</option>
              </select>
            </div>
          </div>

          <!-- jquery for country  -->

          <script src="js/jquery.min.js"></script>
          <script src="js/countrystatecity.js"></script>
      </div>
      <!-- pincode -->
      <div class="col-md-3 mb-3">
        <label for="pincode">Pincode</label>
        <input name="pincode" type="number" class="form-control" id="pincode" placeholder="Pincode" required>
        <div class="invalid-feedback">
          Pincode required.
        </div>
      </div>
      <!-- mobile Number -->
      <div class="col-md-3 mb-3">
        <label for="mobile">Mobile No</label>
        <input name="mobileno" type="number" class="form-control" id="mobileno" placeholder="Mobile No" required>
        <div class="invalid-feedback">
          Mobile No required.
        </div>
      </div>
    </div>
    <!-- radio button for parmanent address are same or not  -->

    <script type="text/javascript">
      function ShowHideDiv() {
        var chkYes = document.getElementById("chkNo");
        var dvPassport = document.getElementById("dvPassport");
        dvPassport.style.display = chkNo.checked ? "block" : "none";
      }
    </script>

    <div class="custom-control custom-checkbox">
      <span>Permanent and Current address are same .</span>
      <label for="chkYes">
        <input type="radio" id="chkYes" name="chkPassPort" onclick="ShowHideDiv()" />
        Yes
      </label>
      <label for="chkNo">
        <input type="radio" id="chkNo" name="chkPassPort" onclick="ShowHideDiv()" />
        No
      </label>
      <hr />
      <div id="dvPassport" style="display: none">
        <div class="mb-3">
          <!-- current address -->

          <!-- village  -->
          <div class="mb-3">
            <label for="village">Village</label>
            <input name="cvillage" type="text" class="form-control" id="caddress" placeholder="Village Name">
            <div class="invalid-feedback">
              Please enter your Village.
            </div>
          </div>
          <!-- block -->

          <div class="mb-3">
            <label for="cblock" required>Block </span></label>
            <input name="cblock" type="text" class="form-control" id="cblock" placeholder="Block">
          </div>

          <div class="row">

            <div class="form-group">
              <div class="col-sm-12">
                <!-- country -->
                <select name="ccountry" class="form-control countries" id="countryId">
                  <option value="">Select Country</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <!-- state -->
                <select name="cstate" class="form-control states" id="state">
                  <option value="">Select State</option>
                </select>
              </div>
            </div>
            <div class="form-group">

              <select name="ccity" class="form-control cities" id="cityId">
                <!-- city -->
                <option value=" ">Select City</option>
              </select>
            </div>
          </div>

          <!-- jquery for country  -->

          <script src="js/jquery.min.js"></script>
          <script src="js/countrystatecity.js"></script>
        </div>
        <!-- pincode -->
        <div class="col-md-3 mb-3">
          <label for="pincode">Pincode</label>
          <input name="cpincode" type="number" class="form-control" id="pincode" placeholder="Pincode">
          <div class="invalid-feedback">
            Pincode required.
          </div>
        </div>

      </div>
      <!-- education details  -->
      <hr>
<center>
<h3> Education Details</h3></center>
<hr>
      <div class="row">
        <span>
          <!-- matric details -->

          <h4 class="mb-2 ml-2">Matric details :- </h4>
        </span>


        <input type="text" class="col-md-3 mr-3 ml-2 mb-5 " name="10thboard" id="10thboard" placeholder="10th Board">

        <input type="text" class="col-md-3 mr-3  ml-2 mb-5  " name="10throllno" id="10throllno" placeholder="10th Roll No">

        <input type="text" class="col-md-3 mr-3  mb-2 mb-5 " name="10throllcode" id="10throllcode" placeholder="10th Roll Code">

        <!-- INTERMIDATE details -->
        <hr>
        <span>
          <h4 class="mb-2 ml-2">Intermidate details :- </h4>
        </span>


        <input type="text" name="12thboard" class="col-md-3 mr-3 mb-5 ml-2  " id="12thboard" placeholder="12th Board">

        <input type="text" name="12throllno" class="col-md-3 mr-3 mb-5 ml-2" id="12throllno" placeholder="12th Roll No">

        <input type="text" name="12throllcode" class="col-md-3 mr-3 mb-5 ml-2" id="12throllcode" placeholder="12th Roll Code">
        <hr>
        <!-- Graduation details --> <span>
          <h4 class="mb-2 ml-2">Graduation details :- </h4>
        </span>

        <input type="text" name="guni" class="col-md-4 mr-3 mb-5 ml-2 " id="graduationboard" placeholder="Graduation University">
        <input type="text" name="gstream" class="col-md-4 mr-3 mb-5 ml-2 " id="graduationstream" placeholder="Graduation Stream">

        <input type="text" name="gyear" class="col-md-4 mr-3 mb-5 ml-2" id="graduationYear" placeholder="Graduation Year">
      </div>
      
    </div>


  </div>


  <hr class="mb-4">
  <!-- account details -->

  <h4 class="mb-3">Account Details</h4>


  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="ac-name">Account Holder Name</label>
      <input type="text" class="form-control" id="acname" name="acname" placeholder="Account Holder Name" required>
      <small class="text-muted">Full name of account holder</small>
      <div class="invalid-feedback">
        Account Holdler Name is required
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="ac-number">Account number</label>
      <input type="text" class="form-control" name="acnumber" id="ac-number" placeholder="Account Number" required>
      <div class="invalid-feedback">
        Account number is required
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 mb-3">
      <label for="ifsc">IFSC Code</label>
      <input type="text" class="form-control" name="ifsccode" id="ifsccode" placeholder="IFSC CODE" required>
      <div class="invalid-feedback">
        IFSC Code is required
      </div>
    </div>
    <hr>
 <!-- for office use details -->
 <br>
 <hr>
  
          <h4 >For Office Use :- </h4>
       <hr>


        <input type="text" name="regno" class="col-md-3 mr-3 mb-5 ml-2  " id="regno" placeholder="Reg No">

        <input type="text" name="regdate" class="col-md-3 mr-3 mb-5 ml-2" id="regdate" placeholder="Reg Date">

        <input type="text" name="payment" class="col-md-3 mr-3 mb-5 ml-2" id="payment" placeholder="Payment">
        <input type="text" name="paymentdat" class="col-md-3 mr-3 mb-5 ml-2" id="paymentdate" placeholder="Payment Date">
        <input type="text" name="drccdate" class="col-md-3 mr-3 mb-5 ml-2" id="drccdate" placeholder="DRCC Verifaction Date">
        <input type="text" name="batchsdate" class="col-md-3 mr-3 mb-5 ml-2" id="batchstartdate" placeholder="Batch Start Date">
        <input type="text" name="batchcode" class="col-md-3 mr-3 mb-5 ml-2" id="batchcode" placeholder="batchcode">
        <input type="text" name="batchname" class="col-md-3 mr-3 mb-5 ml-2" id="batchname" placeholder="Batch Name">
        <input type="text" name="batchtime1" class="col-md-3 mr-3 mb-5 ml-2" id="batchtime1" placeholder="Batch Time 1st">
        <input type="text" name="batchtime2" class="col-md-3 mr-3 mb-5 ml-2" id="batchtime2" placeholder="Batch Time 2nd">



   
    <div class="col-md-3 mb-3">
      <label for="remarks">Remarks</label>
      <input type="text" class="form-control" id="remarks" name="remarks" placeholder="Remarks" required>
      <div class="invalid-feedback">
        Remarks is required
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <div class="custom-file">
        <label for="Signature">Signature</label>
        <input type="file" class="custom-file-input" id="signature" name="signature" placeholer="Signature" required>
        <div class="invalid-feedback">
          Signature is required
        </div>
      </div>
    </div>
  </div>
  <hr class="mb-4">
  <button value="Submit" class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>

</div>
</div>

</div>
</div>
</form>
</div>
</div>
</div>

<?php include('inc/footer.php') ?>