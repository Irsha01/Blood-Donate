<?php
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit']))
  {
$fullname=$_POST['fullname'];
$mobile=$_POST['mobileno'];
$email=$_POST['emailid'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$blodgroup=$_POST['bloodgroup'];
$address=$_POST['address'];
$message=$_POST['message'];
$status=1;
$sql="INSERT INTO  tblblooddonars(FullName,MobileNumber,EmailId,Age,Gender,BloodGroup,Address,Message,status) VALUES(:fullname,:mobile,:email,:age,:gender,:blodgroup,:address,:message,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':fullname',$fullname,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':age',$age,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':blodgroup',$blodgroup,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Your info submitted successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Blood Donation managment System | Become A Donar</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>
        <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>


</head>

<body>

<?php include('includes/header.php');?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3"><small>Become a<font color="red" > </small>Donor</font></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Become a Donor</li>
        </ol>
            <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
        <!-- Content Row -->
        <form name="donar" method="post">
<div class="row">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="col-lg-3 mb-4">
               <img class="img-fluid rounded" src="images/sk.gif" alt="">
            </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div class="col-lg-3 mb-4">
               <img class="img-fluid rounded" src="images/sk.gif" alt="">
            </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div class="col-lg-3 mb-4">
               <img class="img-fluid rounded" src="images/sk.gif" alt="">
            </div>
			</div>
			<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Full Name<span style="color:red">*</span></div>
<div><input type="text" name="fullname" class="form-control" required></div>
</div>
		<div class="col-lg-4 mb-4">
<div class="font-italic">Age<span style="color:red">*</span></div>
<div><input type="text" name="age" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Mobile Number<span style="color:red">*</span></div>
<div><input type="text" name="mobileno" class="form-control" required></div>
</div>

</div>


<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Gender<span style="color:red">*</span></div>
<div><select name="gender" class="form-control" required>
<option value="">Select</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic"><font color=red >Blood Group</font><span style="color:red">*</span> </div>
<div><select name="bloodgroup" class="form-control" required>
<option value="">Select</option>
<?php $sql = "SELECT * from  tblbloodgroup ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  
<option value="<?php echo htmlentities($result->BloodGroup);?>"><?php echo htmlentities($result->BloodGroup);?></option>
<?php }} ?>
</select>
</div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">City<span style="color:red">*</span></div>
<div>
<select name="address" class="form-control" required >
 <option value="">Select</option> 
 <option>Melapalayam</option>
 <option>Achampudur</option>
<option>Alangulam</option>
<option>Alwarkurichi</option>
<option>Ambasamudram</option>
<option>Arianayagipuram</option>
<option>Aygudi</option>

 <option>Cheranmadevi</option>
<option>Cheranmahadevi</option>
<option>Chettikulam</option>
<option>Courtallam</option>
<option>Eruvadi</option>
<option>Gangaikondan</option>
<option>Gopalasamudram</option>
<option>Idaiyangudi</option>
<option>Ilanji</option>
<option>Ilathur</option>
<option>Kadayanallur</option>
<option>Kalakkad</option>
<option>Kalladaikurichi</option>
<option>Kallidaikurichi</option>
<option>Karumbanoor</option>
<option>Kavalkinaru</option>
<option>Keelapavoor</option>
<option>Keezhapavur</option>
<option>Kidarakulam</option>
<option>Kizhavaneri</option>
<option>Koodankulam</option>
<option>Kottakulam</option>
 <option>KTC nagar</option>
<option>Manimutharu</option>
<option>Melacheval</option>
<option>Melagaram</option>
<option>Mukkudal</option>
<option>Moolakaraipatti</option>
<option>Nallur, Tirunelveli</option>
<option>Nanguneri</option>
<option>Naranammalpuram</option>
<option>Palayamkottai</option>
<option>Panagudi</option>
<option>Panboli</option>
<option>Panpoli</option>
<option>Papanasam, Tirunelveli</option>
<option>Pattamadai</option>
<option>Pettai, Tirunelveli</option>
<option>Piranoor</option>
<option>Pudur (S)</option>
<option>Puliyankudi</option>
<option>Rayagiri</option>
<option>Sambavar1</option>
<option> Vadagarai</option>
<option> Sankaranayinarkoil</option>
<option>Sankarankovil</option>
<option>Sankarnagar</option>
<option>Sengottai</option>
<option>Sivagiri, Tirunelveli</option>
<option>Sivanthipuram</option>
<option>Sundarapandiapuram</option>
<option>Surandai</option>
<option>Tenkasi</option>
<option>Thalaiyuthu</option>
<option>Thattankulam</option>
<option>Thirukkurungudi</option>
<option>Thiruvenkatam</option>
<option>Thisayanvilai</option>

<option>Uvari</option>
<option>Vadakarai Keezhpadugai</option>
<option>Vadakkankulam</option>
<option>Vadakkuvalliyur</option>
<option>Vairavikinaru</option>
<option>Vasudevanallur</option>
<option>Veerakeralampudur</option>
<option>Veeravanallur</option>
<option>Vijayanarayanam</option>
<option>Vikramasingapuram</option>
 </select></div>
</div>
</div>
<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Email Id</div>
<div><input type="email" name="emailid" class="form-control"></div>
</div>
<div class="col-lg-8 mb-4">
<div class="font-italic">Message</span></div>
<div><textarea class="form-control" name="message" > Ready to giving blood</textarea></div>
</div>
</div>
<div class="row">
<div class="col-lg-4 mb-4">
<div><input type="submit" name="submit" class="btn btn-primary" value="SUBMIT" style="cursor:pointer"></div>
</div>
</div>






        <!-- /.row -->
</form>   
        <!-- /.row -->
</div>
  <?php include('includes/footer.php');?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
