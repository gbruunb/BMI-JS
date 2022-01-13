<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Webpage Title -->
    <title>BMI | Prachya Sangkharat</title>
    
<?php include 'headTag.php'; ?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body class="container-fluid" data-bs-spy="scroll" data-bs-target="#navbarExample">
    <script src="bmi_process.js"></script>
    
<?php include 'header.php'; ?>
<link rel="stylesheet" href="card_color01.css">
    <!-- เนื้อหา -->
    <div class="mt-5"><br></div>
    
    
<div class="container">
    <h1 class="text-center my-5">คำนวณหาค่าดัชนีมวลกาย (BMI)</h1>
    <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3">น้ำหนัก (กิโลกรัม)</span>
  <input type="text" class="form-control" id="weight" aria-describedby="basic-addon3" name="weight">
  <span class="input-group-text" id="basic-addon3">ส่วนสูง (เซนติเมตร)</span>
  <input type="text" class="form-control" id="height" aria-describedby="basic-addon3" name="height">
  <input type="submit" value="คำนวณ" onclick="bmi()" class="btn btn-success">
</div>
    




    <div class="row justify-content-center">
        <div class="col-md-4 col-xl-3 ">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">ค่าดัชนีมวลกายของคุณคือ</h6>
                    

                    <h2 class="text-right"><i class="fa fa-weight f-left"></i><span id="bmi">...</span></h2>
                    <p class="m-b-0 text-white">อยู่ในเกณฑ์ <span id="meaning">...</span></p>
                </div>
            </div>
        </div>
        <script src="bmi_process.js"></script>
        
        
        
        
	</div>
</div>
    
    <?php 
    include 'footer.php';
    include 'footerScript.php'; 
    ?>
</body>
</html>