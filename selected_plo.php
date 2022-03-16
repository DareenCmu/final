<?php 
	include "system_config.php";

    // ismart คือไฟล์ที่เก็บพวก function และ เป็น database

    $updatedata =new ismart();
    
    $search = new ismart();
    
 
    

    if (isset($_POST['update'])) {

        $course_no = (int) $_GET['id'] ;
       
        $w1_1 = $_POST['w11'];
        $w1_2 = $_POST['w12'];
        $w1_3 = $_POST['w13'];
        $w1_4 = $_POST['w14'];
        $w1_5 = $_POST['w15'];
        $w1_6 = $_POST['w16'];
        $w1_7 = $_POST['w17'];
        $w2_1 = $_POST['w21'];
        $w2_2 = $_POST['w22'];
        $w2_3 = $_POST['w23'];
        $w2_4 = $_POST['w24'];
        $w2_5 = $_POST['w25'];
        $w2_6 = $_POST['w26'];
        $w2_7 = $_POST['w27'];
        $w2_8 = $_POST['w28'];
        $w3_1 = $_POST['w31'];
        $w3_2 = $_POST['w32'];
        $w3_3 = $_POST['w33'];
        $w3_4 = $_POST['w34'];
        $w4_1 = $_POST['w41'];
        $w4_2 = $_POST['w42'];
        $w4_3 = $_POST['w43'];
        $w4_4 = $_POST['w44'];
        $w4_5 = $_POST['w45'];
        $w4_6 = $_POST['w46'];
        $w5_1 = $_POST['w51'];
        $w5_2 = $_POST['w52'];
        $w5_3 = $_POST['w53'];
        $w5_4 = $_POST['w54'];

        
        $total = (float)$w1_1 + (float)$w1_2 + (float)$w1_3 + (float)$w1_4 + (float)$w1_5 + (float)$w1_6 + (float)$w1_7
        + (float)$w2_1 + (float)$w2_2 + (float)$w2_3 + (float)$w2_4 + (float)$w2_5 + (float)$w2_6 + (float)$w2_7 + (float)$w2_8 
        + (float)$w3_1 + (float)$w3_2 + (float)$w3_3 + (float)$w3_4 + (float)$w4_1 + (float)$w4_2 + (float)$w4_3 + (float)$w4_4 + (float)$w4_5 + (float)$w4_6
        + (float)$w5_1 + (float)$w5_2 + (float)$w5_3 + (float)$w5_4;
        // update database
        $update_weight_score = $updatedata->update_table_plo($course_no,$w1_1,$w1_2,$w1_3,$w1_4,$w1_5,$w1_6,$w1_7,$w2_1,$w2_2,$w2_3,$w2_4,$w2_5,$w2_6,$w2_7,$w2_8
        ,$w3_1,$w3_2,$w3_3,$w3_4,$w4_1,$w4_2,$w4_3,$w4_4,$w4_5,$w4_6,$w5_1,$w5_2,$w5_3,$w5_4,$total);

        $update_weight_score2 = $updatedata->changenull_plo($course_no,$w1_1,$w1_2,$w1_3,$w1_4,$w1_5,$w1_6,$w1_7,$w2_1,$w2_2,$w2_3,$w2_4,$w2_5,$w2_6,$w2_7,$w2_8
        ,$w3_1,$w3_2,$w3_3,$w3_4,$w4_1,$w4_2,$w4_3,$w4_4,$w4_5,$w4_6,$w5_1,$w5_2,$w5_3,$w5_4);
        $plo=1;
        $totalplo=$search->query_fetch("SELECT SUM(`2.1`) as totals from weight_score_plo where PLO = $plo  ORDER BY PLO Asc");
        
            $t21=$totalplo['totals'];
            
            
            $update_total = $updatedata->update_total($plo,
            $t21);
        
       
        if ($update_weight_score && $update_weight_score2 && $update_total ) {
            echo "<script type='text/javascript'>alert('Success');</script>";
        } else  {
            echo "<script type='text/javascript'>alert('Not Success');</script>";
        } 


    }

    
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    
    <link rel="stylesheet" href="../_system_library/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


    



    <title>รายละเอียด PLO</title>

</head>

<body>
<?php include 'navbar.php' ?>
    <div class="crsname">
        <h2 class="headers">ประเมินหลักสูตร</h2>
    </div> <br>
    <div class="tabbar">
        <div class="row"> 
            <div class="btn-tab">  
                <!-- ใช้ a และ role="button" -->
                <a href="plo.php" role="button" class="btn">รายละเอียด PLO</a>
            
                <a href="weightscore.php" role="button" class="btn">รายงาน weight-score</a>

                <a href="coursename.php" class="btn" role="button">ประเมินคะแนนสอบ</a>
                
                <a href="score.php" class="btn" role="button">รายงานสรุปผลการประเมิน</a>
                
            </div>
        </div>
        
    </div>
     
    
    <?php $get_id = (int) $_GET['id'] ;$plo_data= $search->query_fetch("SELECT subploIDname from subplo where subploID= $get_id ");

    
    ?>
    <div class="content-head">
        <h3>แก้ไข PLO <?php echo $plo_data[0]  ?></h3>
    </div>
    
    <div class="content">
    
     
    <div class="addCourse">
    <?php 
        
        $search = new ismart();
        $clo=$search->query_fetch_all("SELECT * from clo  INNER JOIN subplo ON subplo.subploID = clo.subplo_num where subploID = subplo_num");
        $subplo=$search->query_fetch_all("SELECT * from subplo  INNER JOIN clo ON subplo.subploID = clo.subplo_num where subploID = subplo_num");
        $wvalue=$search->query_fetch("SELECT * from weight_score");
    ?>




    </div>

     <!-------------------------------------------------- TABLE---------------------------------------------------- -->

     <form action="" method="post" enctype="multipart/form-data" >
     <div class="row ">
        
            <div class="col-md-1 mb-1 ">
             
                <label for="1.1">1.1</label>
                <input class="form-control"  name='w11'>
            </div>
            <div class="col-md-1 mb-1">
                    <label for="1.2">1.2</label>
                    <input class="form-control"  name="w12">
            </div>
            <div class="col-md-1 mb-1">
                <label for="1.3">1.3</label>
                <input class="form-control" name="w13">
            </div>
            <div class="col-md-1 mb-1">
                <label for="1.4">1.4</label>
                <input  class="form-control" name="w14">
            </div>
            <div class="col-md-1 mb-1">
                <label for="1.">1.5</label>
                <input class="form-control"   name="w15">
            </div>
            <div class="col-md-1 mb-1">
                <label for="1.6">1.6</label>
                <input  class="form-control"  name="w16">
            </div>
            <div class="col-md-1 mb-1">
                <label for="1.6">1.7</label>
                <input  class="form-control"   name="w17">
            </div>
     </div>
     <div class="row">
        
        <div class="col-md-1 mb-1 ">
         
            <label for="2.1">2.1</label>
            <input class="form-control"  name='w21'>
        </div>
        <div class="col-md-1 mb-1">
                <label for="2.2">2.2</label>
                <input class="form-control"  name="w22">
        </div>
        <div class="col-md-1 mb-1">
            <label for="2.3">2.3</label>
            <input class="form-control" name="w23">
        </div>
        <div class="col-md-1 mb-1">
            <label for="2.4">2.4</label>
            <input  class="form-control"  name="w24">
        </div>
        <div class="col-md-1 mb-1">
            <label for="2.5">2.5</label>
            <input class="form-control"   name="w25">
        </div>
        <div class="col-md-1 mb-1">
            <label for="2.6">2.6</label>
            <input  class="form-control"   name="w26">
        </div>
        <div class="col-md-1 mb-1">
            <label for="2.6">2.7</label>
            <input  class="form-control"  name="w27">
        </div>
        <div class="col-md-1 mb-1">
            <label for="2.6">2.8</label>
            <input  class="form-control"  name="w28">
        </div>
 </div>

 <div class="row ">
        
        <div class="col-md-1 mb-1 ">
         
            <label for="3.1">3.1</label>
            <input class="form-control"  name='w31'>
        </div>
        <div class="col-md-1 mb-1">
                <label for="3.2">3.2</label>
                <input class="form-control"  name="w32">
        </div>
        <div class="col-md-1 mb-1">
            <label for="3.3">3.3</label>
            <input class="form-control" name="w33">
        </div>
        <div class="col-md-1 mb-1">
            <label for="3.4">3.4</label>
            <input  class="form-control"  name="w34">
        </div>

 </div>

 <div class="row ">
        
        <div class="col-md-1 mb-1 ">
         
            <label for="4.1">4.1</label>
            <input class="form-control"  name='w41'>
        </div>
        <div class="col-md-1 mb-1">
                <label for="4.2">4.2</label>
                <input class="form-control"  name="w42">
        </div>
        <div class="col-md-1 mb-1">
            <label for="4.3">4.3</label>
            <input class="form-control" name="w43">
        </div>
        <div class="col-md-1 mb-1">
            <label for="4.4">4.4</label>
            <input  class="form-control"  name="w44">
        </div>
        <div class="col-md-1 mb-1">
            <label for="4.5">4.5</label>
            <input class="form-control"   name="w45">
        </div>
        <div class="col-md-1 mb-1">
            <label for="4.6">4.6</label>
            <input  class="form-control"   name="w46">
        </div>

 </div>

 <div class="row ">
        
        <div class="col-md-1 mb-1 ">
         
            <label for="5.1">5.1</label>
            <input class="form-control"  name='w51'>
        </div>
        <div class="col-md-1 mb-1">
                <label for="5.2">5.2</label>
                <input class="form-control"  name="w52">
        </div>
        <div class="col-md-1 mb-1">
            <label for="5.3">5.3</label>
            <input class="form-control" name="w53">
        </div>
        <div class="col-md-1 mb-1">
            <label for="5.4">5.4</label>
            <input  class="form-control"  name="w54">
        </div>

 </div>

 
<!-------------------------------------------------- ROOOWWWW---------------------------------------------------- -->


        <div class="update">
            <button type="submit" name="update" id="update" class="btn btn-success">Submit</button>
        </div>
     </form>
<!-------------------------------------------------- TABLE---------------------------------------------------- -->


</div>

</body>
<style>
    table, th, td {
         border: 1px solid black;
    }
    div.content-head{
        margin-left: 320px;
        margin-top: 20px;
    }

    div.row{
        padding: 20px;
    }
    div.col-md-1  {
        margin-left: 20px;
    }

    div.update{
        padding-left : 30px;
        

    }
    div.selection{
        position: fixed;;
    }

    div.content {
    
    margin: 0;
    margin-left: 320px;
    top: 30%;
    padding: 0;
    height: 62%;
    border-radius: 30px;
    width: 75%;
    background-color: white;
    
        }
    body{
        height: 1000px;
    }

    h2.headers{
        margin-left: 150px;
    }
    div.crsname {
        margin-left: 400px;
        
		margin-right: 50px;
        padding-right: 0;
        height: 50px;
        width: 500px;
        background-color: white;
        border-radius: 10px;
    }

    div.tabbar {
        margin-left: 320px;
        margin-right: 50px;
        height: 80px;
        width: 1200px;
        background-color: white;
        border-radius: 10px;

    }

     .btn-tab .btn {
        margin-right: 50px;
        margin-left: 40px;
        opacity: 0.7;  
        font-size: 20px;
        cursor: pointer;
        text-align: center;
        border-radius: 20px; 
        color: white;
        background-color:#AF4CEC;
    } 
    .btn-tab .btn:hover {
        opacity: 1;       
    }




</style>


</html>