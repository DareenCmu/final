<?php 
	include "system_config.php";
    $search = new ismart();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


    



    <title>รายละเอียด PLO</title>

</head>

<body>
    
     <?php  include 'navbar.php' ?>
    <?php  include 'tabbar.php' ?> 

    <div class="content-head">
        <h3 class="content-head">รายละเอียด PLO</h3>
    </div>
    
    
    <div class="beforesubmit">
     
        
        <?php 
            
            $search = new ismart();
            $plo_number  = $search->query("SELECT  * FROM plo_table");

        ?>
        

    <form  action="" method="post" enctype="multipart/form-data" >

        <select class="form-select form-select-lg " aria-label=".form-select-lg example" name="num">


        <option value="">เลือก PLO</option>
        <?php foreach($plo_number as $results){?>
        <option value="<?php echo $results["num"];?>">
        <?php echo 'PLO ';echo $results["num"]; ?>
        </option>
        <?php } ?>


        </select>
        <div class="submitbutton">
        <button type="submit" name="submit" class="btn btn-success " style="margin-left: 25%;">Select</button>
               </div>
        
        
        
    </form>

        <?php
                if (isset($_POST['submit'])) {
                    $phpVariable = $_POST['num'];
                    if(!$phpVariable){ $phpVariable = 1;};
                    $plo_num=$search->query_fetch("SELECT * from plo_table WHERE num=$phpVariable ");
                    $subplo=$search->query_fetch_all("SELECT * from subplo where ploID=$phpVariable ORDER BY ploID Asc");

                
                    $_SESSION['num'] = $phpVariable;
                    ?>



        
    </div>
         <!-------------------------------------------------- TABLE---------------------------------------------------- -->
         <div class="content">
         <div class="tableplo">
    
        <table id="tables" name="tables" border="1px" width='1000px' height='100px' >
        <div class="inside">
                    <thead border="1px" align="center">  
                        
                        <th  >ผลลัพธ์การเรียนรู้</th>
                        <th>กลยุทธ์การสอน</th>
                        <th>กลยุทธ์การประเมิน</th>
                </thead>
                <tbody>
                        <tr>
                            <td align="center" colspan="5" ;><?php if ($phpVariable == 1  ): echo $plo_num['PLO_detail']; elseif ($phpVariable == 2  ): echo $plo_num['PLO_detail'];
                            elseif ($phpVariable == 3  ): echo $plo_num['PLO_detail']; elseif ($phpVariable == 4  ): echo $plo_num['PLO_detail']; elseif ($phpVariable == 5  ): echo $plo_num['PLO_detail'];
                            else : echo $plo_num['PLO_detail']; endif;?>
                                
                            </td>
                        </tr>
                        
                        <?php for($i=0;$i<count($subplo);$i++) { $number_subploID = $subplo[$i]['subploID']; 

                        $strategy=$search->query_fetch_all("SELECT  Strategy from strategy 
                        where subploID1 = $number_subploID or subploID12 = $number_subploID or subploID13 = $number_subploID or subploID14 = $number_subploID or subploID15 = $number_subploID 
                        or subploID21 = $number_subploID or subploID22 = $number_subploID or subploID23 = $number_subploID or subploID24 = $number_subploID or subploID31 = $number_subploID or subploID32 = $number_subploID or subploID33 = $number_subploID
                        or subploID41 = $number_subploID or subploID42 = $number_subploID or subploID43 = $number_subploID or subploID44 = $number_subploID or subploID51 = $number_subploID or subploID52 = $number_subploID or subploID61 = $number_subploID or subploID62 = $number_subploID
                        "); 
                        
                        $measurement=$search->query_fetch_all("SELECT  Measurement from measurement 
                        where subploID1 = $number_subploID or subploID12 = $number_subploID or subploID13 = $number_subploID or subploID14 = $number_subploID or subploID15 = $number_subploID 
                        or subploID21 = $number_subploID or subploID22 = $number_subploID or subploID23 = $number_subploID or subploID24 = $number_subploID or subploID31 = $number_subploID or subploID32 = $number_subploID or subploID33 = $number_subploID
                        or subploID41 = $number_subploID or subploID42 = $number_subploID or subploID43 = $number_subploID or subploID44 = $number_subploID or subploID51 = $number_subploID or subploID52 = $number_subploID or subploID61 = $number_subploID or subploID62 = $number_subploID
                        "); 
                        ?>
                        

                        
                        <tr> 
                            <td align="left"><?php echo $subplo[$i]['subPLO'];  ?></td>

                            <td><?php for($j=0;$j<count($strategy);$j++) { echo ($j + 1),'.',' ' ; echo $strategy[$j]['Strategy'];
                            echo "</br>"; } echo "</br>";?></td>

                            <td><?php for($j=0;$j<count($measurement);$j++) { echo ($j + 1),'.',' ' ; echo $measurement[$j]['Measurement'];
                            echo "</br>"; } echo "</br>";?></td>
                         </tr>

                         <?php

                                }
                        
                        ?>
                        <?php } ?>
                </tbody>
        </div>
        </table>
        </div>
    
    <!-------------------------------------------------- TABLE---------------------------------------------------- -->


    </div>
    
</body>
<style>
        table, th, td {
             border: 1px solid black;
         
             
        }
        th{
            background-color: #dbaff6;
        }
        td{
            width: 38%;
        }

        div.content-head{
            margin-left: 320px;
            margin-top: 20px;
        }
        button.btn-success{
            background-color: #BA55D3;
           
            border-style: none;
            margin-top: -60px;
            height:40px;
        }
        .submitbutton{
            
            margin-top: -7px;
            margin-right: 500px;
        }
        .tableplo{
            margin-left: 50px;
            
            padding-top: 20px;
  
        }
        select{
            height:42px;
        }
        .form-select-lg{
            width: 12%;
           
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

            div.beforesubmit{
                margin: 0;
		margin-left: 320px;
        top: 30%;
		padding: 0;

            }
        body{
            height: 100%;
        }

</style>


</html>