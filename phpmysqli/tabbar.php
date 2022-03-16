<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</body>

<style>
    h2.headers{
        padding-top: 8px;
        margin-left: 120px;
    }
    div.crsname {
        margin-left: 400px;
        
		margin-right: 50px;
        padding-right: 0;
        height: 50px;
        width: 450px;
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
        margin-top: 20px;
        padding-top: 5px;
        font-size: 20px;
        cursor: pointer;
        text-align: center;
        opacity: 0.7;
        transition: 0.3s;
        border-radius: 20px; 
        color: white;
        background-color:#AF4CEC;
    } 

    .btn-tab .btn:hover {
        opacity: 1;       
    }

    

 

</style>
</html>