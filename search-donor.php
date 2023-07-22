<?php
error_reporting(0);
include('includes/config.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blood Donor Management System | Become A Donar</title>
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
        <h1 class="mt-4 mb-3">Search <small>Donor</small></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Search  Donor</li>
        </ol>
            <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
        <!-- Content Row -->
        <form name="donar" method="post">
<div class="row">



<div class="col-lg-4 mb-4">
<div class="font-italic">Blood Group<span style="color:red">*</span> </div>
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
<div class="font-italic">District</div>
<div>
<select name="location" class="form-control" required ><option value=""> Select  </option> 
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
<option>Tirunelveli</option>
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
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 mb-4">
<div><input type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer"></div>
</div>
</div>
       <!-- /.row -->
</form>   

        <div class="row">
                   
<?php 
if(isset($_POST['submit']))
{
$bloodgroup=$_POST['bloodgroup'];
$location=$_POST['location'];
$sql = "SELECT * from tblblooddonars where ( BloodGroup=:bloodgroup) &&  (Address=:location)";
$query = $dbh -> prepare($sql);

$query->bindParam(':bloodgroup',$bloodgroup,PDO::PARAM_STR);
$query->bindParam(':location',$location,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>

            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top img-fluid" src="images/smk2.jpg" alt="" >
					<h4 class="card-title"><?php echo htmlentities($result->FullName);?></a></h4>
                    <div class="card-block">
                       <p class="card-text"><b>Blood Group :</b> <?php echo htmlentities($result->BloodGroup);?></p>
						<p class="card-text"><b> Age:</b> <?php echo htmlentities($result->Age);?></p>
						<p class="card-text"><b>  Gender :</b> <?php echo htmlentities($result->Gender);?></p>
                        <p class="card-text"><b>Mobile No : </b> <?php echo htmlentities($result->MobileNumber);?> 
                        
						<p class="card-text"><b> Email Id : </b><?php if($result->EmailId=="")
							
                        {
                        echo htmlentities("---");
                        } 
						else {
echo htmlentities($result->EmailId);
}
?>
                             </p>



<p class="card-text"><b>Address :</b>                  
<?php if($result->Address=="")
{
echo htmlentities('NA');
} else {
echo htmlentities($result->Address);
}
?></p>
     <p class="card-text"><b>Message :</b> <?php echo htmlentities($result->Message);?></p>

                    </div>
                </div>
            </div>

            <?php }}
else
{
echo htmlentities("Sorry No Available Blood Donor For This Blood Group");

}


            } ?>
          
 



        </div>
<div class="row">
            <div class="col-lg-6">
                <h2>BLOOD GROUPS</h2>
          <p>  blood group of any human being will mainly fall in any one of the following groups.</p>
                <ul>
                
                
<li>A positive or A negative</li>
<li>B positive or B negative</li>
<li>O positive or O negative</li>
<li>AB positive or AB negative.</li>
                </ul>
                <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>
            </div>
            <div class="col-lg-6">
                <a href="#"><img class="img-fluid rounded" src="images/sk2.gif" alt=""></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
                <p>
The most common blood type is O, followed by type A.

Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="contact.php">Help Me</a>
            </div>
        </div>


</div>
  <?php include('includes/footer.php');?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
