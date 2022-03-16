<?php 
	include "system_config.php";
    //connect to database
    $search = new ismart();
    if (isset($_POST['submit']) ) {
        $phpVariable = $_POST['num'] ;
        
        if( $phpVariable == 3){
            header("Location: scoreallcourse.php");
        }
        elseif($phpVariable == 2){
            header("Location: scoreallplo.php");
        }
        else{
            header("Location: score.php");
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

    



    <title>รายงานสรุปผลหลักสูตร</title>

</head>

<body>
    
     <?php  include 'navbar.php' ?>
    <?php  include 'tabbar.php' ?> 

    <div class="content-head">
        <h3>รายงานสรุปผลหลักสูตร</h3>
    </div>
    
    
    
    <div class="beforesubmit">
     
        

        <div class="selection">
        <!------------------------ form for selection ---------------------------------- -->
        <form action="" method="post" enctype="multipart/form-data">

            <select name="num">


            <option value="">Choose</option>
            <option value="<?php echo $phpVariable = 1;?>"> รายงานรายวิชา </option>
            <option value="<?php echo $phpVariable = 2;?>"> รายงาน PLO </option>
            <option value="<?php echo $phpVariable = 3;?>"> รายงานสรุปผลหลักสูตร </option>



            </select>

            <div class="submitbutton">
                <button type="submit" name="submit" class="btn btn-success " style="margin-left: 25%;">Select</button>
                
            </div>




            </form>

            </div>
        <?php
        //after click submit, fetch data from table
                   
                   
                    $weight_score=$search->query_fetch_all("SELECT * from estimated ORDER BY id Asc");
                    
                    $weight_score1=$search->query_fetch_all("SELECT * from estimated2 ORDER BY id Asc");

                    // score each column in estimated (weight2)
                    $sumtqf11=$search->query_fetch("SELECT SUM(`204111`) as sumtqf from estimated ORDER BY id Asc");
                    $sumtqf12=$search->query_fetch("SELECT SUM(`204113`) as sumtqf from estimated ORDER BY id Asc");
                    $sumtqf13=$search->query_fetch("SELECT SUM(`204211`) as sumtqf from estimated ORDER BY id Asc");
                    $sumtqf14=$search->query_fetch("SELECT SUM(`204231`) as sumtqf from estimated ORDER BY id Asc");
                    $sumtqf15=$search->query_fetch("SELECT SUM(`204232`) as sumtqf from estimated ORDER BY id Asc");
                    $sumtqf16=$search->query_fetch("SELECT SUM(`204251`) as sumtqf from estimated ORDER BY id Asc");
                    $sumtqf17=$search->query_fetch("SELECT SUM(`204306`) as sumtqf from estimated ORDER BY id Asc");
                    $sumtqf21=$search->query_fetch("SELECT SUM(`204315`) as sumtqf from estimated ORDER BY id Asc");
                    $sumtqf22=$search->query_fetch("SELECT SUM(`204321`) as sumtqf from estimated ORDER BY id Asc");
                    $sumtqf23=$search->query_fetch("SELECT SUM(`204341`) as sumtqf from estimated ORDER BY id Asc");
                    $sumtqf24=$search->query_fetch("SELECT SUM(`204361`) as sumtqf from estimated ORDER BY id Asc");
                    $sumtqf25=$search->query_fetch("SELECT SUM(`204362`) as sumtqf from estimated ORDER BY id Asc");
                    $sumtqf26=$search->query_fetch("SELECT SUM(`204451`) as sumtqf from estimated ORDER BY id Asc");
                    $sumtqf27=$search->query_fetch("SELECT SUM(`204490`) as sumtqf from estimated ORDER BY id Asc");
                    $sumtqf28=$search->query_fetch("SELECT SUM(`204390`) as sumtqf from estimated ORDER BY id Asc");
                    $sumtqf31=$search->query_fetch("SELECT SUM(`204490`) as sumtqf from estimated ORDER BY id Asc");
                    $sumtqf32=$search->query_fetch("SELECT SUM(`204491`) as sumtqf from estimated ORDER BY id Asc");
                    $sumtqf33=$search->query_fetch("SELECT SUM(`204497`) as sumtqf from estimated ORDER BY id Asc");
                    $sumtqf34=$search->query_fetch("SELECT SUM(`204496`) as sumtqf from estimated ORDER BY id Asc");
                    $sumtqf41=$search->query_fetch("SELECT SUM(`204499`) as sumtqf from estimated ORDER BY id Asc");

                    // score each column in estimated2 (weight)

                    $sumtqf111=$search->query_fetch("SELECT SUM(`204111`) as sumtqf from estimated2 ORDER BY id Asc");
                    $sumtqf121=$search->query_fetch("SELECT SUM(`204113`) as sumtqf from estimated2 ORDER BY id Asc");
                    $sumtqf131=$search->query_fetch("SELECT SUM(`204211`) as sumtqf from estimated2 ORDER BY id Asc");
                    $sumtqf141=$search->query_fetch("SELECT SUM(`204231`) as sumtqf from estimated2 ORDER BY id Asc");
                    $sumtqf151=$search->query_fetch("SELECT SUM(`204232`) as sumtqf from estimated2 ORDER BY id Asc");
                    $sumtqf161=$search->query_fetch("SELECT SUM(`204251`) as sumtqf from estimated2 ORDER BY id Asc");
                    $sumtqf171=$search->query_fetch("SELECT SUM(`204306`) as sumtqf from estimated2 ORDER BY id Asc");
                    $sumtqf211=$search->query_fetch("SELECT SUM(`204315`) as sumtqf from estimated2 ORDER BY id Asc");
                    $sumtqf221=$search->query_fetch("SELECT SUM(`204321`) as sumtqf from estimated2 ORDER BY id Asc");
                    $sumtqf231=$search->query_fetch("SELECT SUM(`204341`) as sumtqf from estimated2 ORDER BY id Asc");
                    $sumtqf241=$search->query_fetch("SELECT SUM(`204361`) as sumtqf from estimated2 ORDER BY id Asc");
                    $sumtqf251=$search->query_fetch("SELECT SUM(`204362`) as sumtqf from estimated2 ORDER BY id Asc");
                    $sumtqf261=$search->query_fetch("SELECT SUM(`204451`) as sumtqf from estimated2 ORDER BY id Asc");
                    $sumtqf271=$search->query_fetch("SELECT SUM(`204490`) as sumtqf from estimated2 ORDER BY id Asc");
                    $sumtqf281=$search->query_fetch("SELECT SUM(`204390`) as sumtqf from estimated2 ORDER BY id Asc");
                    $sumtqf311=$search->query_fetch("SELECT SUM(`204490`) as sumtqf from estimated2 ORDER BY id Asc");
                    $sumtqf321=$search->query_fetch("SELECT SUM(`204491`) as sumtqf from estimated2 ORDER BY id Asc");
                    $sumtqf331=$search->query_fetch("SELECT SUM(`204497`) as sumtqf from estimated2 ORDER BY id Asc");
                    $sumtqf341=$search->query_fetch("SELECT SUM(`204496`) as sumtqf from estimated2 ORDER BY id Asc");
                    $sumtqf411=$search->query_fetch("SELECT SUM(`204499`) as sumtqf from estimated2 ORDER BY id Asc");                    
1
                
                ?>
    </div>
        <div class="content">

         <!-------------------------------------------------- TABLE---------------------------------------------------- -->
         
         

                <div class="tablescore">
                <h5 id="forh5"> Weight-score</h5>
        <table name="tables" border="1px" width='550px' height='100px'>
            
                    <thead border="1px" align="center">  
                        
                        <th>วิธีประเมิน</th>
                        <th style="background-color:#D3DEDC; font-weight: normal"></th>
                        <th style="background-color:#f8cbad; font-weight: normal">204111</th>
                        <th style="background-color:#c6e0b4; font-weight: normal">204113</th>
                        <th style="background-color:#ddebf7; font-weight: normal">204211</th>
                        <th style="background-color:#fff2cc; font-weight: normal">204231</th>
                        <th style="background-color:#e2efda; font-weight: normal">204232</th>
                        <th style="background-color:#fce4d6; font-weight: normal">204251</th>
                        <th style="background-color:#f8cbad; font-weight: normal">204306</th>
                        <th style="background-color:#c6e0b4; font-weight: normal">204315</th>
                        <th style="background-color:#ddebf7; font-weight: normal">204321</th>
                        <th style="background-color:#fff2cc; font-weight: normal">204341</th>
                        <th style="background-color:#e2efda; font-weight: normal">204361</th>
                        <th style="background-color:#fce4d6; font-weight: normal">204362</th>
                        <th style="background-color:#c6e0b4; font-weight: normal">204451</th>
                        <th style="background-color:#ddebf7; font-weight: normal">204490</th>
                        <th style="background-color:#fff2cc; font-weight: normal">204390</th>
                        <th style="background-color:#e2efda; font-weight: normal">204491</th>
                        <th style="background-color:#fce4d6; font-weight: normal">204497</th>
                        <th style="background-color:#c6e0b4; font-weight: normal">204496</th>
                        <th style="background-color:#ddebf7; font-weight: normal">204499</th>

                      
                </thead>
                <tbody>
                        
                            <?php $store2=0; $store=array(); for($i=0;$i<count($weight_score);$i++) { 
                                $store[] = (float)$weight_score[$i]["204111"]+
                                (float)$weight_score[$i]["204113"]+
                                (float)$weight_score[$i]["204211"]+
                                (float)$weight_score[$i]["204231"]+
                                (float)$weight_score[$i]["204232"]+
                                (float)$weight_score[$i]["204251"]+
                                (float)$weight_score[$i]["204306"]+
                                (float)$weight_score[$i]["204315"]+
                                (float)$weight_score[$i]["204321"]+
                                (float)$weight_score[$i]["204341"]+
                                (float)$weight_score[$i]["204361"]+
                                (float)$weight_score[$i]["204362"]+
                                (float)$weight_score[$i]["204451"]+
                                (float)$weight_score[$i]["204490"]+
                                (float)$weight_score[$i]["204390"]+
                                (float)$weight_score[$i]["204491"]+
                                (float)$weight_score[$i]["204497"]+
                                (float)$weight_score[$i]["204496"]+
                                (float)$weight_score[$i]["204499"];
                                $store2 += $store[$i];
                                //echo $store[$i]."<br>";
                                //echo ($store[$i] / $store2)."<br>";
                            }?> 
                            <?php for($i=0;$i<count($weight_score);$i++) { ?>
                                <tr> 
                                    <td id = "tdcolors" align="center"><?php echo $weight_score[$i]["detail"]; ?></td>

                                    <?php if ($weight_score[$i]["204111"] == 0){$weight_score[$i]["204111"] = NULL;} ?>
                                    <?php if ($weight_score[$i]["204113"] == 0){$weight_score[$i]["204113"] = NULL;} ?>
                                    <?php if ($weight_score[$i]["204211"] == 0){$weight_score[$i]["204211"] = NULL;} ?>
                                    <?php if ($weight_score[$i]["204231"] == 0){$weight_score[$i]["204231"] = NULL;} ?>
                                    <?php if ($weight_score[$i]["204232"] == 0){$weight_score[$i]["204232"] = NULL;} ?>
                                    <?php if ($weight_score[$i]["204251"] == 0){$weight_score[$i]["204251"] = NULL;} ?>
                                    <?php if ($weight_score[$i]["204306"] == 0){$weight_score[$i]["204306"] = NULL;} ?>
                                    <?php if ($weight_score[$i]["204315"] == 0){$weight_score[$i]["204315"] = NULL;} ?>
                                    <?php if ($weight_score[$i]["204321"] == 0){$weight_score[$i]["204321"] = NULL;} ?>
                                    <?php if ($weight_score[$i]["204341"] == 0){$weight_score[$i]["204341"] = NULL;} ?>
                                    <?php if ($weight_score[$i]["204361"] == 0){$weight_score[$i]["204361"] = NULL;} ?>
                                    <?php if ($weight_score[$i]["204362"] == 0){$weight_score[$i]["204362"] = NULL;} ?>
                                    <?php if ($weight_score[$i]["204451"] == 0){$weight_score[$i]["204451"] = NULL;} ?>
                                    <?php if ($weight_score[$i]["204490"] == 0){$weight_score[$i]["204490"] = NULL;} ?>
                                    <?php if ($weight_score[$i]["204390"] == 0){$weight_score[$i]["204390"] = NULL;} ?>
                                    <?php if ($weight_score[$i]["204491"] == 0){$weight_score[$i]["204491"] = NULL;} ?>
                                    <?php if ($weight_score[$i]["204497"] == 0){$weight_score[$i]["204497"] = NULL;} ?>
                                    <?php if ($weight_score[$i]["204496"] == 0){$weight_score[$i]["204496"] = NULL;} ?>
                                    <?php if ($weight_score[$i]["204499"] == 0){$weight_score[$i]["204499"] = NULL;} ?>

                                    <td align="center"><?php echo bcdiv((($store[$i] / $store2)* 100),1,2)." %"  ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["204111"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["204113"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["204211"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["204231"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["204232"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["204251"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["204306"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["204315"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["204321"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["204341"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["204361"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["204362"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["204451"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["204490"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["204390"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["204491"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["204497"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["204496"]; ?></td>
                                    <td align="center"><?php echo $weight_score[$i]["204499"]; ?></td>


                                </tr>
                                <?php 
                                }   //echo "here ".$store2?>
                                <tr> 
                                    
                                <td id = 'blankstyle' align="center"></td>
                                    <td id = 'blankstyle2' align="center"></td>
                                    <?php if($sumtqf11['sumtqf'] == 0 ){$sumtqf11['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf12['sumtqf'] == 0 ){$sumtqf12['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf13['sumtqf'] == 0 ){$sumtqf13['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf14['sumtqf'] == 0 ){$sumtqf14['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf15['sumtqf'] == 0 ){$sumtqf15['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf16['sumtqf'] == 0 ){$sumtqf16['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf17['sumtqf'] == 0 ){$sumtqf17['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf21['sumtqf'] == 0 ){$sumtqf21['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf22['sumtqf'] == 0 ){$sumtqf22['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf23['sumtqf'] == 0 ){$sumtqf23['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf24['sumtqf'] == 0 ){$sumtqf24['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf25['sumtqf'] == 0 ){$sumtqf25['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf26['sumtqf'] == 0 ){$sumtqf26['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf27['sumtqf'] == 0 ){$sumtqf27['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf28['sumtqf'] == 0 ){$sumtqf28['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf31['sumtqf'] == 0 ){$sumtqf31['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf32['sumtqf'] == 0 ){$sumtqf32['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf33['sumtqf'] == 0 ){$sumtqf33['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf34['sumtqf'] == 0 ){$sumtqf34['sumtqf'] = NULL;} ?>

                                    
                                    

                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf11['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf12['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf13['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf14['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf15['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf16['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf17['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf21['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf22['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf23['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf24['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf25['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf26['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf27['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf28['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf31['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf32['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf33['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf34['sumtqf'] ?></td>
                                    

                                    

                                    

                                </tr>
                       
    
                </tbody>
        </table>
        <h5 id="forh5"> Weight </h5>
        <table name="tables" border="1px" width='550px' height='100px'>
            
            <thead border="1px" align="center">  
                
                <th>วิธีประเมิน</th>
                <th style="background-color:#D3DEDC; font-weight: normal"></th>
                <th style="background-color:#f8cbad; font-weight: normal">204111</th>
                        <th style="background-color:#c6e0b4; font-weight: normal">204113</th>
                        <th style="background-color:#ddebf7; font-weight: normal">204211</th>
                        <th style="background-color:#fff2cc; font-weight: normal">204231</th>
                        <th style="background-color:#e2efda; font-weight: normal">204232</th>
                        <th style="background-color:#fce4d6; font-weight: normal">204251</th>
                        <th style="background-color:#f8cbad; font-weight: normal">204306</th>
                        <th style="background-color:#c6e0b4; font-weight: normal">204315</th>
                        <th style="background-color:#ddebf7; font-weight: normal">204321</th>
                        <th style="background-color:#fff2cc; font-weight: normal">204341</th>
                        <th style="background-color:#e2efda; font-weight: normal">204361</th>
                        <th style="background-color:#fce4d6; font-weight: normal">204362</th>
                        <th style="background-color:#c6e0b4; font-weight: normal">204451</th>
                        <th style="background-color:#ddebf7; font-weight: normal">204490</th>
                        <th style="background-color:#fff2cc; font-weight: normal">204390</th>
                        <th style="background-color:#e2efda; font-weight: normal">204491</th>
                        <th style="background-color:#fce4d6; font-weight: normal">204497</th>
                        <th style="background-color:#c6e0b4; font-weight: normal">204496</th>
                        <th style="background-color:#ddebf7; font-weight: normal">204499</th>

              
        </thead>
        <tbody>
                
                    <?php $store2=0; $store=array(); for($i=0;$i<count($weight_score1);$i++) { 
                        $store[] = (float)$weight_score1[$i]["204111"]+
                        (float)$weight_score1[$i]["204113"]+
                        (float)$weight_score1[$i]["204211"]+
                        (float)$weight_score1[$i]["204231"]+
                        (float)$weight_score1[$i]["204232"]+
                        (float)$weight_score1[$i]["204251"]+
                        (float)$weight_score1[$i]["204306"]+
                        (float)$weight_score1[$i]["204315"]+
                        (float)$weight_score1[$i]["204321"]+
                        (float)$weight_score1[$i]["204341"]+
                        (float)$weight_score1[$i]["204361"]+
                        (float)$weight_score1[$i]["204362"]+
                        (float)$weight_score1[$i]["204451"]+
                        (float)$weight_score1[$i]["204490"]+
                        (float)$weight_score1[$i]["204390"]+
                        (float)$weight_score1[$i]["204491"]+
                        (float)$weight_score1[$i]["204497"]+
                        (float)$weight_score1[$i]["204496"]+
                        (float)$weight_score1[$i]["204499"];
                        $store2 += $store[$i];
                        //echo $store[$i]."<br>";
                        //echo ($store[$i] / $store2)."<br>";
                    }?> 
                    <?php for($i=0;$i<count($weight_score1);$i++) { ?>
                        <tr> 
                            <td id = "tdcolors" align="center"><?php echo $weight_score[$i]["detail"]; ?></td>

                            <?php if ($weight_score1[$i]["204111"] == 0){$weight_score1[$i]["204111"] = NULL;} ?>
                            <?php if ($weight_score1[$i]["204113"] == 0){$weight_score1[$i]["204113"] = NULL;} ?>
                            <?php if ($weight_score1[$i]["204211"] == 0){$weight_score1[$i]["204211"] = NULL;} ?>
                            <?php if ($weight_score1[$i]["204231"] == 0){$weight_score1[$i]["204231"] = NULL;} ?>
                            <?php if ($weight_score1[$i]["204232"] == 0){$weight_score1[$i]["204232"] = NULL;} ?>
                            <?php if ($weight_score1[$i]["204251"] == 0){$weight_score1[$i]["204251"] = NULL;} ?>
                            <?php if ($weight_score1[$i]["204306"] == 0){$weight_score1[$i]["204306"] = NULL;} ?>
                            <?php if ($weight_score1[$i]["204315"] == 0){$weight_score1[$i]["204315"] = NULL;} ?>
                            <?php if ($weight_score1[$i]["204321"] == 0){$weight_score1[$i]["204321"] = NULL;} ?>
                            <?php if ($weight_score1[$i]["204341"] == 0){$weight_score1[$i]["204341"] = NULL;} ?>
                            <?php if ($weight_score1[$i]["204361"] == 0){$weight_score1[$i]["204361"] = NULL;} ?>
                            <?php if ($weight_score1[$i]["204362"] == 0){$weight_score1[$i]["204362"] = NULL;} ?>
                            <?php if ($weight_score1[$i]["204451"] == 0){$weight_score1[$i]["204451"] = NULL;} ?>
                            <?php if ($weight_score1[$i]["204490"] == 0){$weight_score1[$i]["204490"] = NULL;} ?>
                            <?php if ($weight_score1[$i]["204390"] == 0){$weight_score1[$i]["204390"] = NULL;} ?>
                            <?php if ($weight_score1[$i]["204491"] == 0){$weight_score1[$i]["204491"] = NULL;} ?>
                            <?php if ($weight_score1[$i]["204497"] == 0){$weight_score1[$i]["204497"] = NULL;} ?>
                            <?php if ($weight_score1[$i]["204496"] == 0){$weight_score1[$i]["204496"] = NULL;} ?>
                            <?php if ($weight_score1[$i]["204499"] == 0){$weight_score1[$i]["204499"] = NULL;} ?>

                           
                            <td align="center"><?php echo bcdiv((($store[$i] / $store2)* 100),1,2)." %"  ?></td>
                            <td align="center"><?php echo $weight_score1[$i]["204111"]; ?></td>
                            <td align="center"><?php echo $weight_score1[$i]["204113"]; ?></td>
                            <td align="center"><?php echo $weight_score1[$i]["204211"]; ?></td>
                            <td align="center"><?php echo $weight_score1[$i]["204231"]; ?></td>
                            <td align="center"><?php echo $weight_score1[$i]["204232"]; ?></td>
                            <td align="center"><?php echo $weight_score1[$i]["204251"]; ?></td>
                            <td align="center"><?php echo $weight_score1[$i]["204306"]; ?></td>
                            <td align="center"><?php echo $weight_score1[$i]["204315"]; ?></td>
                            <td align="center"><?php echo $weight_score1[$i]["204321"]; ?></td>
                            <td align="center"><?php echo $weight_score1[$i]["204341"]; ?></td>
                            <td align="center"><?php echo $weight_score1[$i]["204361"]; ?></td>
                            <td align="center"><?php echo $weight_score1[$i]["204362"]; ?></td>
                            <td align="center"><?php echo $weight_score1[$i]["204451"]; ?></td>
                            <td align="center"><?php echo $weight_score1[$i]["204490"]; ?></td>
                            <td align="center"><?php echo $weight_score1[$i]["204390"]; ?></td>
                            <td align="center"><?php echo $weight_score1[$i]["204491"]; ?></td>
                            <td align="center"><?php echo $weight_score1[$i]["204497"]; ?></td>
                            <td align="center"><?php echo $weight_score1[$i]["204496"]; ?></td>
                            <td align="center"><?php echo $weight_score1[$i]["204499"]; ?></td>


                        </tr>
                        <?php 
                        }   //echo "here ".$store2?>
                        <tr> 
                            
                        <td id = 'blankstyle' align="center"></td>
                            <td id = 'blankstyle2' align="center"></td>

                            <?php if($sumtqf11['sumtqf'] == 0 ){$sumtqf11['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf12['sumtqf'] == 0 ){$sumtqf121['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf13['sumtqf'] == 0 ){$sumtqf131['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf14['sumtqf'] == 0 ){$sumtqf141['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf15['sumtqf'] == 0 ){$sumtqf151['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf16['sumtqf'] == 0 ){$sumtqf161['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf17['sumtqf'] == 0 ){$sumtqf171['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf21['sumtqf'] == 0 ){$sumtqf211['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf22['sumtqf'] == 0 ){$sumtqf221['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf23['sumtqf'] == 0 ){$sumtqf231['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf24['sumtqf'] == 0 ){$sumtqf241['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf25['sumtqf'] == 0 ){$sumtqf251['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf26['sumtqf'] == 0 ){$sumtqf261['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf27['sumtqf'] == 0 ){$sumtqf271['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf28['sumtqf'] == 0 ){$sumtqf281['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf31['sumtqf'] == 0 ){$sumtqf311['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf32['sumtqf'] == 0 ){$sumtqf321['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf33['sumtqf'] == 0 ){$sumtqf331['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf34['sumtqf'] == 0 ){$sumtqf341['sumtqf'] = NULL;} ?>

                            <td id = 'sumstyle' align="center"><?php echo $sumtqf111['sumtqf'] ?></td>
                            <td id = 'sumstyle' align="center"><?php echo $sumtqf121['sumtqf'] ?></td>
                            <td id = 'sumstyle' align="center"><?php echo $sumtqf131['sumtqf'] ?></td>
                            <td id = 'sumstyle' align="center"><?php echo $sumtqf141['sumtqf'] ?></td>
                            <td id = 'sumstyle' align="center"><?php echo $sumtqf151['sumtqf'] ?></td>
                            <td id = 'sumstyle' align="center"><?php echo $sumtqf161['sumtqf'] ?></td>
                            <td id = 'sumstyle' align="center"><?php echo $sumtqf171['sumtqf'] ?></td>
                            <td id = 'sumstyle' align="center"><?php echo $sumtqf211['sumtqf'] ?></td>
                            <td id = 'sumstyle' align="center"><?php echo $sumtqf221['sumtqf'] ?></td>
                            <td id = 'sumstyle' align="center"><?php echo $sumtqf231['sumtqf'] ?></td>
                            <td id = 'sumstyle' align="center"><?php echo $sumtqf241['sumtqf'] ?></td>
                            <td id = 'sumstyle' align="center"><?php echo $sumtqf251['sumtqf'] ?></td>
                            <td id = 'sumstyle' align="center"><?php echo $sumtqf261['sumtqf'] ?></td>
                            <td id = 'sumstyle' align="center"><?php echo $sumtqf271['sumtqf'] ?></td>
                            <td id = 'sumstyle' align="center"><?php echo $sumtqf281['sumtqf'] ?></td>
                            <td id = 'sumstyle' align="center"><?php echo $sumtqf311['sumtqf'] ?></td>
                            <td id = 'sumstyle' align="center"><?php echo $sumtqf321['sumtqf'] ?></td>
                            <td id = 'sumstyle' align="center"><?php echo $sumtqf331['sumtqf'] ?></td>
                            <td id = 'sumstyle' align="center"><?php echo $sumtqf341['sumtqf'] ?></td>
                            

                            

                        </tr>
               

        </tbody>
</table>
    
    <!-------------------------------------------------- TABLE---------------------------------------------------- -->
    </div>

    </div>
    
</body>
<style>
        #sumstyle{
            background-color:#33cc33;
            
        }
        #blankstyle{
            border-left-color: white;
            border-right-color: white;
            border-bottom-color: white;
            border-top-color: none;
        }
        #blankstyle2{
            border-left-color: white;
            
            border-bottom-color: white;
            border-top-color: none;
        }
        table, th, td {
             border: 1px solid black;
        }
        #forh5{
            margin-left: -20px;
            text-decoration: underline;
        }
        th{
            background-color:#66b3ff;
        }
        #tdcolors{
            background-color: #ffffb3;
        }
        .tablescore{
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .plostyle{
            background-color: #ff6699;
            
        }
        .plostyle2{
            background-color: #ffb380;
            
        }
        .plostyle3{
            background-color: #ff4d4d;
            
        }
        .plostyle4{
            background-color: #70db70;
            
        }
        .plostyle5{
            background-color: #bf80ff;
            
        }
        .plostyle6{
            background-color: #d98c8c;
            
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
            margin-top: -60px;
        
        }
        h4{
            padding-left: 30px;
        }
        .btn-info{
            margin-bottom: 10px;
            background-color: #D4AC0D;
            color:white;
            border: none;
            margin-top: -50px;
            
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

        div.editbutton{
            margin-top: -30px;
            margin-left: 350px;
        }
        body{
            height: 100%px;
        }

</style>


</html>