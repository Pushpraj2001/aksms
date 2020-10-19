<form class="needs-validation" novalidate>
            <div class="row">
            <!-- name -->
              <div class="col-md-6 mb-3">
                <label for="student Name">Name</label>
                <input type="text" class="form-control" id="studentname" placeholder="Student Name " value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <!-- father name -->
              <div class="col-md-6 mb-3">
                <label for="fathername">Father Name</label>
                <input type="text" class="form-control" id="fathername" placeholder="Father Name" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
            <div class="row">
          
            <!-- dob -->
              <div class="col-md-6 mb-3">
                <label for="dob">Date Of Birth</label>
                <input type="text" class="form-control" id="dob" placeholder="Date of Birth" value="" required>
                <div class="invalid-feedback">
                  Date Of birth is required.
                </div>
              </div>
              <!-- Gender -->
              <div class="col-md-6 mb-3">
              <label for="gender">Gender</label>
              <br>
              <input type="radio" id="male" name="male" value="male">
              <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label><br>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label>
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
                <input type="text" class="form-control" id="bloodgroup" placeholder="Blood group" value="" required>
                <div class="invalid-feedback">
                  Valid Blood group is required.
                </div>
              </div>
              <!-- adhar card -->

              <div class="col-md-6 mb-3">
                <label for="adharcard">Adhar Card</label>
                <input type="text" class="form-control" id="adharcard" placeholder="Adhar Card" value="" required>
                <div class="invalid-feedback">
                  Valid Adhar Card is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="category">Category</label>
                <input type="text" class="form-control" id="category" placeholder="category" value="" required>
                <div class="invalid-feedback">
                  Valid Category is required.
                </div>
              </div>

            </div>

            <!-- image -->
            <label for="imageupload">Student Photo</label>
            <div class="custom-file">
            
      <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile" required>
      <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
    </div>
    <!-- education details -->
    

            <!-- email or username  -->

            <div class="mb-3">
              <label for="email">Email <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
<!-- password  -->
            </div>
            <div class="mb-3">
              <label for="password">Password</label>
              <div class="input-group">
               
                <input type="Password" class="form-control" id="password" placeholder="Password" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your Password is required.
                </div>
              </div>
            </div>
<!-- parmanent address  -->
<!-- village  -->
            <div class="mb-3">
              <label for="village">Village</label>
              <input type="text" class="form-control" id="address" placeholder="Village Name" required>
              <div class="invalid-feedback">
                Please enter your Village.
              </div>
            </div>
            <!-- block -->

            <div class="mb-3">
              <label for="block" required>Block  </span></label>
              <input type="text" class="form-control" id="block" placeholder="Block">
            </div>

            <div class="row">
              <form action="#" role="form" class="form-horizontal" id="location" method="post" accept-charset="utf-8">
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
</form>
<!-- jquery for country  -->

<script src="js/jquery.min.js"></script> 
<script src="js/countrystatecity.js"></script>      
</div>
<!-- pincode -->
              <div class="col-md-3 mb-3">
                <label for="pincode">Pincode</label>
                <input type="number" class="form-control" id="pincode" placeholder="Pincode" required>
                <div class="invalid-feedback">
                  Pincode required.
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
<span >Permanent and Current address are same .</span>
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
<!-- village -->
            <!-- village  -->
            <div class="mb-3">
              <label for="village">Village</label>
              <input type="text" class="form-control" id="address" placeholder="Village Name" required>
              <div class="invalid-feedback">
                Please enter your Village.
              </div>
            </div>
            <!-- block -->

            <div class="mb-3">
              <label for="block" required>Block  </span></label>
              <input type="text" class="form-control" id="block" placeholder="Block">
            </div>

            <div class="row">
              <form action="#" role="form" class="form-horizontal" id="location" method="post" accept-charset="utf-8">
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
</form>
<!-- jquery for country  -->

<script src="js/jquery.min.js"></script> 
<script src="js/countrystatecity.js"></script>      
</div>
<!-- pincode -->
              <div class="col-md-3 mb-3">
                <label for="pincode">Pincode</label>
                <input type="number" class="form-control" id="pincode" placeholder="Pincode" required>
                <div class="invalid-feedback">
                  Pincode required.
                </div>
              </div>
              
            </div>  
          
            <div class="row">
<h4>Matric details</h4>
<hr>
<label for="10thboard"> 10th Board </label>
                <input type="text" class="col-md-2 " id="10thboard" placeholder="10th Board" required>
                <div class="invalid-feedback">
                 required.
                </div>
  <div class="col-md-4">.col-md-4</div>
  <div class="col-md-4">.col-md-4</div>
</div>
</div>
<!-- education details  -->

</div>

            
            <hr class="mb-4">
            <!-- account details -->

            <h4 class="mb-3">Account Details</h4>

        
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="ac-name">Account Holder Name</label>
                <input type="text" class="form-control" id="Account Holder Name" placeholder="" required>
                <small class="text-muted">Full name of account holder</small>
                <div class="invalid-feedback">
                  Account Holdler Name is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="ac-number">Account number</label>
                <input type="text" class="form-control" id="ac-number" placeholder="" required>
                <div class="invalid-feedback">
                 Account number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="ifsc">IFSC Code</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  IFSC Code is required
                </div>
              </div>
              
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
          </form>
        </div>
      </div>

		 </div>
	  </div>
   </div>