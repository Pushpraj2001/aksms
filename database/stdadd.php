<?php
$studentname = $_POST['studentname'];
$fathername = $_POST['fathername'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$marital = $_POST['marital'];
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
$cpincode = $_POST['cpincode'];
$throllno = $_POST['10throllno'];
$thboard = $_POST['10thboard'];
$throllcode = $_POST['10throllcode'];
$ndboard = $_POST['12thboard'];
$ndrollno = $_POST['12throllno'];
$ndrollcode = $_POST['12throllcode'];
$guni = $_POST['guni'];
$gstream = $_POST['gstream'];
$gyear = $_POST['gyear'];
$regno = $_POST['regno'];
$regdate = $_POST['regdate'];
$payment = $_POST['payment'];
$paymentdat = $_POST['paymentdat'];
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
$mobileno = $_POST['mobileno'];
$signature = $_POST['signature'];


if (!empty($studentname) || !empty($fathername) || !empty($dob) || !empty($gender) || !empty($martial) || !empty($bloodgroup) || !empty($adharcard) || !empty($category) || !empty($studentphoto) || !empty($email) || !empty($password) || !empty($village) || !empty($block) || !empty($country) || !empty($state) || !empty($city) || !empty($pincode) ||  !empty($regno) || !empty($regdate) || !empty($payment) || !empty($paymentdat) || !empty($drccdate) || !empty($batchsdate) || !empty($batchcode) || !empty($batchname) || !empty($batchtime1) || !empty($batchtime2) || !empty($acname) || !empty($acnumber) || !empty($ifsccode) || !empty($remarks) || !empty($mobileno) || !empty($signature)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "admin_user";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
        die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
    } else {
        $SELECT = "SELECT email From studentdetail Where email = ? Limit 1";
        $INSERT = "INSERT Into studentdetail (studentname, fathername, dob, gender, martial, bloodgroup, adharcard, category, studentphoto, email, password, village, block, country, state, city, cvillage, cblock, ccountry, cstate, ccity, cpincode, 10throllno, 10thboard, 10throllcode, 12thboard, 12throllnumber, 12throllcode, guni, gstream, gyear, regno, regdate, payment, paymentdat, drccdate, batchsdate, batchcode, batchname, batchtime1, batchtime2, acname, acnumber, ifsccode, remarks, mobileno, signature ) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        //Prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        if ($rnum == 0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("attr-for-image","ssssssssssssssssssssssssssssssssssssssssssssssss", $studentname, $fathername, $dob, $gender, $martial,  $bloodgroup,  $adharcard,  $category,  $studentphoto,  $email,  $password,  $village,  $block,  $country,  $state,  $city,  $pincode,  $cvillage,  $cblock,  $ccountry,  $cstate,  $ccity,  $cpincode,  $throllno,  $thboard,  $thboard,  $ndboard,  $ndrollno,  $ndrollcode,  $guni,  $gstream,  $gyear,  $regno,  $regdate,  $payment,  $paymentdat,  $drccdate,  $batchsdate,  $batchcode,  $batchname,  $batchtime1,  $batchtime2,  $acname,  $acnumber,  $ifsccode,  $remarks, $phone);
            $stmt->execute();
            echo "New record inserted sucessfully";
        }if (isset($_POST ["submit"]))
        {
        $df = md5(time());
        $fnm = $_FILES ["studentphoto"] ["name"];
        $dst = "./image/student/". $df .$fnm ;
        move_uploaded_file($_FILES["studentphoto"] ["tmp_name"], $dst);
        }
        if (isset($_POST ["submit"]))
        {
        $df = md5(time());
        $fnm = $_FILES ["signature"] ["name"];
        $dst = "./image/student/". $df .$fnm ;
        move_uploaded_file($_FILES["signature"] ["tmp_name"], $dst);
        } 
        
        else {
            echo "Someone already register using this email";
        }
        $stmt->close();
        $conn->close();
    }
} else {
    echo "All field are required";
    die();
}
