<?php 
	include "system_config.php";
    //connect to database
    $search = new ismart();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <!-- Font Awesome -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    



    <title>รายงาน Weight - Score</title>

</head>

<body>
    
     <?php  include 'navbar.php' ?>
    <?php  include 'tabbar.php' ?> 

    <div class="content-head">
        <h3>รายงาน Weight - Score</h3>
    </div>
    
    
    
    <div class="beforesubmit">
     
        
        <?php 
            //fetch data from plo_table
            
            $search = new ismart();
            $plo_number  = $search->query("SELECT  * FROM plo_table");

        ?>
        <div class="selection">
        <!------------------------ form for selection ---------------------------------- -->
    <form action="" method="post" enctype="multipart/form-data">

        <select class="form-select form-select-lg " aria-label=".form-select-lg example" name="num">


        <option value="">Choose</option>
        <option value="<?php echo $phpVariable = 1;?>"> รายงานรายวิชาในแต่ละชั้นปี </option>
        <option value="<?php echo $phpVariable = 2;?>"> รายงานแบบ PLO </option>
        


        </select>
        
        <div class="submitbutton">
            <button type="submit" name="submit" class="btn btn-success " style="margin-left: 25%;">Select</button>
            
        </div>


        
        
    </form>
            </div>
        <?php
        //after click submit, fetch data from table
                if (isset($_POST['submit'])) {
                    $phpVariable = $_POST['num'];
                    $weight_score=$search->query_fetch_all("SELECT * from weight_score ORDER BY year Asc");
                    $weight_score_PLO=$search->query_fetch_all("SELECT * from weight_score_plo ORDER BY PLO,Subplo Asc");
                    
                }
        //if dont click submit , fetch only table weight_score
                else{
                    $phpVariable = 1;
                    $weight_score=$search->query_fetch_all("SELECT * from weight_score ORDER BY year Asc");
                   
                    
                }
                
                ?>
        <div class="editbutton">
        <!------------------------ link for the button  ---------------------------------- -->
                <?php if ($phpVariable == 1){ ?>

                        <a href="edit.php" class="btn btn-info" role="button">Edit</a>

                <?php } 
                    
                else {?>

                        <a href="editplo.php" class="btn btn-info" role="button">Edit</a>

                <?php } ?>
        </div>
    </div>
        <div class="content">

         <!-------------------------------------------------- TABLE---------------------------------------------------- -->
         
         <h4 id="forh4"><?php if($phpVariable == 1  ):echo 'รายงานรายวิชาในแต่ละชั้นปี'; else : echo 'รายงานแบบ PLO' ; endif;?></h4>

                <div class="tablescore">
        <table name="tables" border="1px" width='550px' height='100px'>
            
                    <thead border="1px" align="center">  
                        
                        <th><?php if($phpVariable == 1): echo 'Year'; else : echo 'PLO'; endif; ?></th>
                        <th><?php if($phpVariable == 1): echo 'Course No'; else : echo 'Subplo'; endif; ?></th>
                        <th>1.1</th><th>1.2</th><th>1.3</th><th>1.4</th><th>1.5</th><th>1.6</th><th>1.7</th>
                        <th>2.1</th>
                        <th>2.2</th>
                        <th>2.3</th>
                        <th>2.4</th>
                        <th>2.5</th>
                        <th>2.6</th>
                        <th>2.7</th>
                        <th>2.8</th>
                        <th>3.1</th>
                        <th>3.2</th>
                        <th>3.3</th>
                        <th>3.4</th>
                        <th>4.1</th>
                        <th>4.2</th>
                        <th>4.3</th>
                        <th>4.4</th>
                        <th>4.5</th>
                        <th>4.6</th>
                    
                        <th>5.1</th>
                        <th>5.2</th>
                        <th>5.3</th>
                        <th>5.4</th>
                        <th>Total</th>
                </thead>
                <tbody>
                        <?php if($phpVariable == 1) { ?>
                            <?php for($i=0;$i<count($weight_score);$i++) { 
                                ?> 

                                <tr> 
                                    <td id = "tdcolors" align="center"><?php echo $weight_score[$i]["year"]; ?></td>

                                    <td id = "tdcolors" align="center"><?php echo $weight_score[$i]["course_no"]; ?></td>

                                    <td align="center"><?php echo $weight_score[$i]["1.1"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["1.2"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["1.3"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["1.4"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["1.5"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["1.6"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["1.7"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["2.1"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["2.2"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["2.3"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["2.4"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["2.5"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["2.6"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["2.7"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["2.8"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["3.1"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["3.2"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["3.3"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["3.4"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["4.1"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["4.2"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["4.3"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["4.4"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["4.5"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["4.6"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["5.1"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["5.2"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["5.3"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["5.4"]; ?></td>
                                    <td id = "tdcolors2" align="center"><?php echo $weight_score[$i]["Total"]; ?></td>

                                </tr>
                                <?php 
                                } ?>
                        <?php
                        }
                        elseif ($phpVariable == 2){ ?>
                           <?php for($i=0;$i<count($weight_score_PLO);$i++) { 
                                ?> 

<tr> 
                                    <td align="center" <?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?> <?php echo $weight_score_PLO[$i]["PLO"]; ?></td>

                                    <!-------------------------------------------------- substr ตัด string ---------------------------------------------------- -->

                                    <td align="center" <?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo substr($weight_score_PLO[$i]["Subplo"],1); ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?> <?php echo $weight_score_PLO[$i]["1.1"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["1.2"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["1.3"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["1.4"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["1.5"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["1.6"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["1.7"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["2.1"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["2.2"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["2.3"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["2.4"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["2.5"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["2.6"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["2.7"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["2.8"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["3.1"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["3.2"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["3.3"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["3.4"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["4.1"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["4.2"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["4.3"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["4.4"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["4.5"]; ?></td>
                                    
                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["4.6"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["5.1"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["5.2"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["5.3"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["5.4"]; ?></td>

                                    <td align="center"<?php if($weight_score_PLO[$i]["PLO"] == 1 ): echo "<div class='plostyle'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 2 ): echo "<div class='plostyle2'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 3 ): echo "<div class='plostyle3'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 4 ): echo "<div class='plostyle4'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 5 ): echo "<div class='plostyle5'></div> ";
                                    elseif($weight_score_PLO[$i]["PLO"] == 6 ): echo "<div class='plostyle6'></div> "; 
                                    endif;  ?><?php echo $weight_score_PLO[$i]["Total"]; ?></td>

                                </tr>
                                <?php 
                                } ?>

                        <?php } 

                        ?>
                        
                    

                         

                                
                        
                        
                </tbody>
        </table>
    
    <!-------------------------------------------------- TABLE---------------------------------------------------- -->
    </div>

    </div>
    
</body>
<style>
        table, th, td {
             border: 1px solid black;
        }
        th{
            background-color:#9ADCFF;
        }
        #tdcolors{
            background-color: #FFF89A;
        }
        #forh4{
            padding-top: 13px;
            padding-bottom: 10px;
        }
        #tdcolors2{
            background-color: #BCFFB9;
        }
        .plostyle{
            background-color: #CAF7E3;
            
        }
        .plostyle2{
            background-color: #FFDCDC;
            
        }
        .plostyle3{
            background-color: #CAF7E3;
            
        }
        .plostyle4{
            background-color: #FFDCDC;
            
        }
        .plostyle5{
            background-color: #CAF7E3;
            
        }
        .plostyle6{
            background-color: #FFDCDC;
            
        }

        table{
            width: 100%;
            height: 100%;
            border-collapse: collapse;
            font-size: 18px;
            margin-left: -20px;
        }
        div.content-head{
            margin-left: 320px;
            margin-top: 20px;
        }
        button.btn-success{
            background-color: #8E44AD;
            text-decoration: none; 
            border: none;
            margin-top: -70px;
        
        }
        h4{
            padding-left: 30px;
        }
        .btn-info{
            margin-bottom: 10px;
            background-color: #EF6D6D;
            color:white;
            border: none;
            margin-top: -60px;
            
        }
        .submitbutton{
            margin-right: 100px;
        }
        .tablescore{
            margin-left: 50px;
        }

    	div.content {
        
        margin: 0;
		margin-left: 320px;
        top: 30%;
		padding: 0;
		height: 90%;
		border-radius: 30px;
		width: 100%;
		background-color: white;
        
        	}
            div.beforesubmit{
                margin: 0;
		margin-left: 320px;
        top: 30%;
		padding: 0;

		
        

            }
        .form-select-lg{
            height: 43px;
            width: 20%;
        }
        div.editbutton{
            margin-top: -30px;
            margin-left: 350px;
        }
        body{
            height: 100%px;
        }

</style>


</html>