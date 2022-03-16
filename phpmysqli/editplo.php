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
        <h3>แก้ไขตาราง</h3>
    </div>
    
    <div class="content">
    
     
    <div class="addCourse">
    <?php 
        
        $search = new ismart();
        $clo=$search->query_fetch_all("SELECT * from clo  INNER JOIN subplo ON subplo.subploID = clo.subplo_num where subploID = subplo_num");
        $subplo=$search->query_fetch_all("SELECT * from subplo  INNER JOIN clo ON subplo.subploID = clo.subplo_num where subploID = subplo_num");
    ?>




    </div>

     <!-------------------------------------------------- TABLE---------------------------------------------------- -->
     <div class='tdname'>
         <tr>
     <?php
        
        $plo_data= $search->query_fetch_all("SELECT * from subplo ");
        for($i=0;$i<count($plo_data);$i++){

        ?> 
        
        <td class="tdname"><a href="selected_plo.php?id=<?php echo $plo_data[$i]['subploID']; ?>"><?php echo "PLO"  . '&nbsp'; echo $plo_data[$i]['ploID'] . '&nbsp' ; echo " SubPLO  ". '&nbsp'; echo  $plo_data[$i]['subploIDname'] ?></a></td>
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
    a:link{
        text-decoration: none;
        
        
    }
    div.tdname a:hover {
        color: red;
        background-color: transparent;
        text-decoration: underline;
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
    height: 65%;
    border-radius: 30px;
    width: 75%;
    background-color: white;
    
        }
    body{
        height: 1000px;
    }

</style>


</html>