<?php 
	include "system_config.php";

    // ismart คือไฟล์ที่เก็บพวก function และ เป็น database

    $updatedata =new ismart();
    
    $search = new ismart();
    
 
    



    
  
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
    
     <?php  include 'navbar.php' ?>
    <?php  include 'tabbar.php' ?> 

    <div class="content-head">
        <h3>รายชื่อวิชาประเมินคะแนนสอบ</h3>
    </div>
    
    <div class="content">
    
     
    <div class="addCourse">
    <?php 
        
        $search = new ismart();
        $clo=$search->query_fetch_all("SELECT * from clo  INNER JOIN subplo ON subplo.subploID = clo.subplo_num where subploID = subplo_num");
        $subplo=$search->query_fetch_all("SELECT * from subplo  INNER JOIN clo ON subplo.subploID = clo.subplo_num where subploID = subplo_num");
        $course_name = ['Fundamentals of Programming','Principles Of Computing','Object-Oriented Programming','Computer Organization and Architecture'
        ,'Computer Networks and Protocols','Data Structures','Ethics for Computer Professionals'
        ,'Organization of Programming Languages','Database Systems','Parallel Processing ','Software Engineering','Object-oriented Design','Algorithm Design and Analysis','Research in Computer Science','Computer Job Training'
        ,'Independent Study 1','Seminar in Computer Science','Cooperative Education','Independent Study 2'];
    ?>  <!--111 113 211 231 232 251 306 315 321 341 361 362 451 490 390 491 497 496 499 -->




    </div>

     <!-------------------------------------------------- TABLE---------------------------------------------------- -->
     <div class='tdname'>
         <tr>
     <?php
        
        $weight_score_data= $search->query_fetch_all("SELECT * from weight_score ");
        for($i=0;$i<count($weight_score_data);$i++){

        ?> 
        
        <td class="tdname"><a href="crit.php?id=<?php echo $weight_score_data[$i]['course_no']; ?>"><?php echo $weight_score_data[$i]['course_no'] . '&nbsp' ; echo $course_name[$i] ?></a></td>
            <?php echo "<br>"; ?>
        <?php } ?>
        

     
     </tr>
    </div>

<!-------------------------------------------------- TABLE---------------------------------------------------- -->


</div>

</body>
<style>
    table, th, td {
         border: 1px solid black;
    }
    div.tdname{
        
        padding: 20px;
        
    }
    div.tdname a {
        
        
        color:#9400D3;
        
        
    }
    div.tdname a:hover {
        color: red;
        background-color: transparent;
        text-decoration: underline;
    }
    a:link{
        text-decoration: none;
        
    }
    div.content-head{
        margin-left: 320px;
        margin-top: 20px;
    }
    div.selection{
        position: fixed;;
    }
    div.content {
    
    margin: 0;
    margin-left: 320px;
    top: 30%;
    padding: 0;
    height: 63%;
    border-radius: 30px;
    width: 75%;
    background-color: white;
    
        }
    body{
        height: 1000px;
    }

</style>


</html>