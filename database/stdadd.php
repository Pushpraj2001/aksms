<?php
$studentname = $_POST['studentname']
$fathername = $_POST['fathername'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$martial = $_POST['martial'];
$bloodgroup = $_POST['bloodgroup'];
$adharcard = $_POST['adharcard'];
$category = $_POST['category'];
$studentphoto = $_POST['studentphoto'];
$email = $_POST['email'];
$password = $_POST['password'];
$village = $_POST['village'];
$block = $_POST['block'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$cvillage = $_POST['cvillage'];
$cblock = $_POST['cblock'];
$ccountry = $_POST['ccountry'];
$cstate = $_POST['cstate'];
$ccity = $_POST['ccity'];

$throllno = $_POST['10throllno'];
$thboard = $_POST['10thboard'];
$throllcode = $_POST['10rollcode'];
$ndboard = $_POST['12thboard'];
$ndrollno = $_POST['12throllnumber'];
$ndrollcode = $_POST['12throllcode'];
$guni = $_POST['guni'];
$gstream = $_POST['gstream'];
$gyear = $_POST['gyear'];
$regno = $_POST['regno'];
$regdate = $_POST['regdate'];
$payment = $_POST['payment'];
$paymetndat = $_POST['paymetndat'];
$drccdate = $_POST['drccdate'];
$batchsdate = $_POST['batchsdate'];
$batchcode = $_POST['batchcode'];
$batchname = $_POST['batchname'];
$batchtime1 = $_POST['batchtime1'];
$batchtime2 = $_POST['batchtime2'];
$acname = $_POST['acname'];
$acnumber = $_POST['acnumber'];
$ifsccode = $_POST['ifsccode'];
$remarks = $_POST['remarks'];
$phone = $_POST['phone'];
if (!empty($studentname) || !empty($fathername) || !empty($dob) || !empty($gender) || !empty($martial) || !empty($bloodgroup) || !empty($adharcard) || !empty($category) || !empty($studentphoto) || !empty($email) || !empty($password) || !empty($village) || !empty($block) || !empty($country) || !empty($state) || !empty($city) || !empty($pincode) || !empty($cvillage) || !empty($cblock) || !empty($ccountry) || !empty($cstate) || !empty($ccity) || !empty($cpincode) || !empty($throllno) || !empty($thboard) || !empty($ndboard) || !empty($ndrollno) || !empty($ndrollcode) || !empty($guni) || !empty($gstream) || !empty($gyear) || !empty($regno) || !empty($regdate) || !empty($payment) || !empty($paymetndat) || !empty($drccdate) || !empty($batchsdate) || !empty($batchcode) || !empty($batchname) || !empty($batchtime1) || !empty($batchtime2) || !empty($acname) || !empty($acnumber) || !empty($ifsccode) || !empty($remarks) || !empty($phoneCode) || !empty($phone)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "youtube";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From register Where email = ? Limit 1";
     $INSERT = "INSERT Into register (studentname, fathername, dob, gender, martial, bloodgroup, adharcard, category, studentphoto, email, password, village, block, country, state, city, cvillage, cblock, ccountry, cstate, ccity, cpincode, 10throllno, 10thboard, 10throllcode, 12thboard, 12throllnumber, 12throllcode, guni, gstream, gyear, regno, regdate, payment, paymetndat, drccdate, batchsdate, batchcode, batchname, batchtime1, batchtime2, acname, acnumber, ifsccode, remarks, phoneCode,  phone) values(?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssii", $studentname, $fathername, $dob, $gender, $martial,  $bloodgroup,  $adharcard,  $category,  $studentphoto,  $email,  $password,  $village,  $block,  $country,  $state,  $city,  $pincode,  $cvillage,  $cblock,  $ccountry,  $cstate,  $ccity,  $cpincode,  $throllno,  $thboard,  $thboard,  $ndboard,  $ndrollno,  $ndrollcode,  $guni,  $gstream,  $gyear,  $regno,  $regdate,  $payment,  $paymetndat,  $drccdate,  $batchsdate,  $batchcode,  $batchname,  $batchtime1,  $batchtime2,  $acname,  $acnumber,  $ifsccode,  $remarks, $phone);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>