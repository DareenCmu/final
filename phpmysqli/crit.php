<?php 
	include "system_config.php";
    $search = new ismart();





    
?>
<?php
    if (isset($_POST['submit'])) {
        $_SESSION['id'] = $_GET['id'];
        header("Location: score.php");
        // for($i=0;$i<count($subplo);$i++) {
        //     for($j=0;$j<$rows;$j++) {
        //         if ($subplo[$i]['subploID'] == $subplo[$j]['subplo_num'] || $subplo[$i]['subploID'] == $subplo[$j]['subplo_num2'] ){
                    
        //             $total = ($scoring[$j]['num'] * 0.58)/100;
        //             echo $i ," " , $j;
        //             echo "<br>";
        //             echo $total;
        //             echo "<br>";

        //             //$score = $search->scoring();
                    
        //         }
        //     }
        // }
        
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
    
     <?php  include 'navbar.php' ?>
    <?php  include 'tabbar.php' ?> 

    <div class="content-head">
        <h3>ประเมินคะแนนสอบวิชา <?php echo (int) $_GET['id']  ?></h3>
    </div>
    
    <div class="content">
    
     
        <div class="addCourse">
        <?php 
            $id = $_GET['id'] ;
            $search = new ismart();
            $scoring=$search->query_fetch_all("SELECT * from scoring ");

            $get_crs=$search->query_fetch_all("SELECT course_no from clo where  course_no = $id");
            $counts = count($get_crs);
            
            if($counts >1){
            $subplo=$search->query_fetch_all("SELECT * from subplo  INNER JOIN clo ON subplo.subploID = clo.subplo_num where subploID = subplo_num and course_no = $id ");
            }
            //print_r($subplo[0][1]);


            #echo count($clo_name_column) ;
            

            
        ?>




        </div>

         <!-------------------------------------------------- TABLE---------------------------------------------------- -->
         <form action="" method="post" enctype="multipart/form-data">
         <div class="submitbutton">
            <button type="submit" name="submit" class="btn btn-success " style="margin-left: 25%;">คำนวณ</button>
            
        </div>
         </form>
         <div class="tableplo">
         <?php if (empty($counts)) { $count = 0;}?>
        <?php   if($counts > 1 && (!empty($subplo))) { ?>
        <table name="tables" border="1px" width='1000px' height='100px'>
                    <thead border="1px" align="center">  
                        <th  >PLO/CLO</th>
                        <?php for($i=0;$i<$counts;$i++) { ?>
                        
                            <th align="center" ><?php echo $subplo[$i]["PLO_detail"]; ?></th>

                        
                        <?php } ?>

                </thead>
                <tbody>
                <?php for($i=0;$i<$counts;$i++) {  ?>
                       
                        <tr>
                            <td align="center"><?php echo  $subplo[$i]["subPLO"] ;?></td>

                            <?php   for($j=0;$j<$counts;$j++) { echo '<td align="center">'; if ($subplo[$i]['subploID'] == $subplo[$j]['subplo_num'] ): echo ' <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>,
</svg> '; echo "</td>"; elseif( $subplo[$i]['subploID'] == $subplo[$j]['subplo_num2']): echo ' <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>,
  </svg> '; echo "</td>";  endif; ?>
                             
                                <?php } ?>
                            
                         </tr>
                
                <?php } ?>

                </tbody>
        </table>
        <?php } ?>
        
        </div>
    
    <!-------------------------------------------------- TABLE---------------------------------------------------- -->


    
</body>
<style>
        table, th, td {
             border: 1px solid black;
             font-size: 16px;
        }
        .tableplo{
            margin-left: 10px;
            
            padding-top: 20px;
  
        }
        table{
            margin-left: 20px;
            width: 87%;

        }
        .submitbutton{
           
            margin-left: 50.5em;
            margin-top: 18px;
            position: absolute;
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
		height: 90%;
		border-radius: 30px;
		width: 75%;
		background-color: white;
        
        	}
        body{
            height: 100%;
        }

</style>


</html>