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

    



    <title>รายงานสรุปผล PLO</title>

</head>

<body>
    
     <?php  include 'navbar.php' ?>
    <?php  include 'tabbar.php' ?> 

    <div class="content-head">
        <h3>รายงานสรุปผล PLO</h3>
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
                    $sumofall=array();
                   // array_push($qbProductsArray, array($qbProduct => $authNetAmount));
                    $weight_score=$search->query_fetch_all("SELECT * from totalplo1 where plo = 1 ORDER BY id Asc");
                    $weight_score2=$search->query_fetch_all("SELECT * from totalplo1 where plo = 2 ORDER BY id Asc");
                    $weight_score3=$search->query_fetch_all("SELECT * from totalplo1 where plo = 3 ORDER BY id Asc");
                    $weight_score4=$search->query_fetch_all("SELECT * from totalplo1 where plo = 4 ORDER BY id Asc");
                    $weight_score5=$search->query_fetch_all("SELECT * from totalplo1 where plo = 5 ORDER BY id Asc");
                    $weight_score6=$search->query_fetch_all("SELECT * from totalplo1 where plo = 6 ORDER BY id Asc");
                    $weight_score_data= $search->query_fetch_all("SELECT * from weight_score ");
                    $plo_data= $search->query_fetch_all("SELECT * from plo_table ");

                    $sumtqf111=$search->query_fetch("SELECT (".$weight_score_data[0]["course_no"].") as r  from weight_score ");
                    //echo $sumtqf111['r']."<br>";
                    $sumtqf112=$search->query_fetch("SELECT SUM(`".$sumtqf111['r']."`) as sumtqf from totalplo1 where plo = 1 ORDER BY id Asc");
                    //echo $sumtqf112['sumtqf']."<br>";



                    // for($i=0 ; $i< 3 ; $i++){
                    //     $course_num=$search->query_fetch("SELECT (".$weight_score_data[$i]["course_no"].") as r  from weight_score ");
                    //     //echo  $course_num['r']."<br>";
                    //     $t = $course_num['r'];
                    //     //echo "It ".$i. " ".$t."<br>";
                    //     for($j=1 ; $j<= count($plo_data) ; $j++){
                           
                            
                    //         $values=$search->query_fetch("SELECT SUM(`".$t."`) as sumtqf from totalplo1 where plo = $j ORDER BY id Asc");
                    //         $sumofall[$t] = $values['sumtqf'];
                    //         echo "<br>";
                    //         print_r($sumofall);
                    //         //array_push($sumofall , $values);

                            
                    //         //echo "plo ".$j.$values['sumtqf']."<br>";
                    //     }
                    //     //$a = $search->query_fetch("SELECT SUM(`204111`) as sumtqf from totalplo1 where plo = 1 ORDER BY id Asc");
                    //     //array_push($sumtqf0,array());




                    // }
                    





                    $sumtqf11=$search->query_fetch("SELECT SUM(`204111`) as sumtqf from totalplo1 where plo = 1 ORDER BY id Asc");
                    $sumtqf12=$search->query_fetch("SELECT SUM(`204113`) as sumtqf from totalplo1 where plo = 1 ORDER BY id Asc");
                    $sumtqf13=$search->query_fetch("SELECT SUM(`204211`) as sumtqf from totalplo1 where plo = 1 ORDER BY id Asc");
                    $sumtqf14=$search->query_fetch("SELECT SUM(`204231`) as sumtqf from totalplo1 where plo = 1 ORDER BY id Asc");
                    $sumtqf15=$search->query_fetch("SELECT SUM(`204232`) as sumtqf from totalplo1 where plo = 1 ORDER BY id Asc");
                    $sumtqf16=$search->query_fetch("SELECT SUM(`204251`) as sumtqf from totalplo1 where plo = 1 ORDER BY id Asc");
                    $sumtqf17=$search->query_fetch("SELECT SUM(`204306`) as sumtqf from totalplo1 where plo = 1 ORDER BY id Asc");
                    $sumtqf21=$search->query_fetch("SELECT SUM(`204315`) as sumtqf from totalplo1 where plo = 1 ORDER BY id Asc");
                    $sumtqf22=$search->query_fetch("SELECT SUM(`204321`) as sumtqf from totalplo1 where plo = 1 ORDER BY id Asc");
                    $sumtqf23=$search->query_fetch("SELECT SUM(`204341`) as sumtqf from totalplo1 where plo = 1 ORDER BY id Asc");
                    $sumtqf24=$search->query_fetch("SELECT SUM(`204361`) as sumtqf from totalplo1 where plo = 1 ORDER BY id Asc");
                    $sumtqf25=$search->query_fetch("SELECT SUM(`204362`) as sumtqf from totalplo1 where plo = 1 ORDER BY id Asc");
                    $sumtqf26=$search->query_fetch("SELECT SUM(`204451`) as sumtqf from totalplo1 where plo = 1 ORDER BY id Asc");
                    $sumtqf27=$search->query_fetch("SELECT SUM(`204490`) as sumtqf from totalplo1 where plo = 1 ORDER BY id Asc");
                    $sumtqf28=$search->query_fetch("SELECT SUM(`204390`) as sumtqf from totalplo1 where plo = 1 ORDER BY id Asc");
                    $sumtqf31=$search->query_fetch("SELECT SUM(`204490`) as sumtqf from totalplo1 where plo = 1 ORDER BY id Asc");
                    $sumtqf32=$search->query_fetch("SELECT SUM(`204491`) as sumtqf from totalplo1 where plo = 1 ORDER BY id Asc");
                    $sumtqf33=$search->query_fetch("SELECT SUM(`204497`) as sumtqf from totalplo1 where plo = 1 ORDER BY id Asc");
                    $sumtqf34=$search->query_fetch("SELECT SUM(`204496`) as sumtqf from totalplo1 where plo = 1 ORDER BY id Asc");
                    $sumtqf41=$search->query_fetch("SELECT SUM(`204499`) as sumtqf from totalplo1 where plo = 1 ORDER BY id Asc");

                    $sumtqf112=$search->query_fetch("SELECT SUM(`204111`) as sumtqf from totalplo1 where plo = 2 ORDER BY id Asc");
                    $sumtqf122=$search->query_fetch("SELECT SUM(`204113`) as sumtqf from totalplo1 where plo = 2 ORDER BY id Asc");
                    $sumtqf132=$search->query_fetch("SELECT SUM(`204211`) as sumtqf from totalplo1 where plo = 2 ORDER BY id Asc");
                    $sumtqf142=$search->query_fetch("SELECT SUM(`204231`) as sumtqf from totalplo1 where plo = 2 ORDER BY id Asc");
                    $sumtqf152=$search->query_fetch("SELECT SUM(`204232`) as sumtqf from totalplo1 where plo = 2 ORDER BY id Asc");
                    $sumtqf162=$search->query_fetch("SELECT SUM(`204251`) as sumtqf from totalplo1 where plo = 2 ORDER BY id Asc");
                    $sumtqf172=$search->query_fetch("SELECT SUM(`204306`) as sumtqf from totalplo1 where plo = 2 ORDER BY id Asc");
                    $sumtqf212=$search->query_fetch("SELECT SUM(`204315`) as sumtqf from totalplo1 where plo = 2 ORDER BY id Asc");
                    $sumtqf222=$search->query_fetch("SELECT SUM(`204321`) as sumtqf from totalplo1 where plo = 2 ORDER BY id Asc");
                    $sumtqf232=$search->query_fetch("SELECT SUM(`204341`) as sumtqf from totalplo1 where plo = 2 ORDER BY id Asc");
                    $sumtqf242=$search->query_fetch("SELECT SUM(`204361`) as sumtqf from totalplo1 where plo = 2 ORDER BY id Asc");
                    $sumtqf252=$search->query_fetch("SELECT SUM(`204362`) as sumtqf from totalplo1 where plo = 2 ORDER BY id Asc");
                    $sumtqf262=$search->query_fetch("SELECT SUM(`204451`) as sumtqf from totalplo1 where plo = 2 ORDER BY id Asc");
                    $sumtqf272=$search->query_fetch("SELECT SUM(`204490`) as sumtqf from totalplo1 where plo = 2 ORDER BY id Asc");
                    $sumtqf282=$search->query_fetch("SELECT SUM(`204390`) as sumtqf from totalplo1 where plo = 2 ORDER BY id Asc");
                    $sumtqf312=$search->query_fetch("SELECT SUM(`204490`) as sumtqf from totalplo1 where plo = 2 ORDER BY id Asc");
                    $sumtqf322=$search->query_fetch("SELECT SUM(`204491`) as sumtqf from totalplo1 where plo = 2 ORDER BY id Asc");
                    $sumtqf332=$search->query_fetch("SELECT SUM(`204497`) as sumtqf from totalplo1 where plo = 2 ORDER BY id Asc");
                    $sumtqf342=$search->query_fetch("SELECT SUM(`204496`) as sumtqf from totalplo1 where plo = 2 ORDER BY id Asc");
                    $sumtqf412=$search->query_fetch("SELECT SUM(`204499`) as sumtqf from totalplo1 where plo = 2 ORDER BY id Asc");
                    
                    
                    $sumtqf113=$search->query_fetch("SELECT SUM(`204111`) as sumtqf from totalplo1 where plo = 3 ORDER BY id Asc");
                    $sumtqf123=$search->query_fetch("SELECT SUM(`204113`) as sumtqf from totalplo1 where plo = 3 ORDER BY id Asc");
                    $sumtqf133=$search->query_fetch("SELECT SUM(`204211`) as sumtqf from totalplo1 where plo = 3 ORDER BY id Asc");
                    $sumtqf143=$search->query_fetch("SELECT SUM(`204231`) as sumtqf from totalplo1 where plo = 3 ORDER BY id Asc");
                    $sumtqf153=$search->query_fetch("SELECT SUM(`204232`) as sumtqf from totalplo1 where plo = 3 ORDER BY id Asc");
                    $sumtqf163=$search->query_fetch("SELECT SUM(`204251`) as sumtqf from totalplo1 where plo = 3 ORDER BY id Asc");
                    $sumtqf173=$search->query_fetch("SELECT SUM(`204306`) as sumtqf from totalplo1 where plo = 3 ORDER BY id Asc");
                    $sumtqf213=$search->query_fetch("SELECT SUM(`204315`) as sumtqf from totalplo1 where plo = 3 ORDER BY id Asc");
                    $sumtqf223=$search->query_fetch("SELECT SUM(`204321`) as sumtqf from totalplo1 where plo = 3 ORDER BY id Asc");
                    $sumtqf233=$search->query_fetch("SELECT SUM(`204341`) as sumtqf from totalplo1 where plo = 3 ORDER BY id Asc");
                    $sumtqf243=$search->query_fetch("SELECT SUM(`204361`) as sumtqf from totalplo1 where plo = 3 ORDER BY id Asc");
                    $sumtqf253=$search->query_fetch("SELECT SUM(`204362`) as sumtqf from totalplo1 where plo = 3 ORDER BY id Asc");
                    $sumtqf263=$search->query_fetch("SELECT SUM(`204451`) as sumtqf from totalplo1 where plo = 3 ORDER BY id Asc");
                    $sumtqf273=$search->query_fetch("SELECT SUM(`204490`) as sumtqf from totalplo1 where plo = 3 ORDER BY id Asc");
                    $sumtqf283=$search->query_fetch("SELECT SUM(`204390`) as sumtqf from totalplo1 where plo = 3 ORDER BY id Asc");
                    $sumtqf313=$search->query_fetch("SELECT SUM(`204490`) as sumtqf from totalplo1 where plo = 3 ORDER BY id Asc");
                    $sumtqf323=$search->query_fetch("SELECT SUM(`204491`) as sumtqf from totalplo1 where plo = 3 ORDER BY id Asc");
                    $sumtqf333=$search->query_fetch("SELECT SUM(`204497`) as sumtqf from totalplo1 where plo = 3 ORDER BY id Asc");
                    $sumtqf343=$search->query_fetch("SELECT SUM(`204496`) as sumtqf from totalplo1 where plo = 3 ORDER BY id Asc");
                    $sumtqf413=$search->query_fetch("SELECT SUM(`204499`) as sumtqf from totalplo1 where plo = 3 ORDER BY id Asc");

                    
                    $sumtqf114=$search->query_fetch("SELECT SUM(`204111`) as sumtqf from totalplo1 where plo = 4 ORDER BY id Asc");
                    $sumtqf124=$search->query_fetch("SELECT SUM(`204113`) as sumtqf from totalplo1 where plo = 4 ORDER BY id Asc");
                    $sumtqf134=$search->query_fetch("SELECT SUM(`204211`) as sumtqf from totalplo1 where plo = 4 ORDER BY id Asc");
                    $sumtqf144=$search->query_fetch("SELECT SUM(`204231`) as sumtqf from totalplo1 where plo = 4 ORDER BY id Asc");
                    $sumtqf154=$search->query_fetch("SELECT SUM(`204232`) as sumtqf from totalplo1 where plo = 4 ORDER BY id Asc");
                    $sumtqf164=$search->query_fetch("SELECT SUM(`204251`) as sumtqf from totalplo1 where plo = 4 ORDER BY id Asc");
                    $sumtqf174=$search->query_fetch("SELECT SUM(`204306`) as sumtqf from totalplo1 where plo = 4 ORDER BY id Asc");
                    $sumtqf214=$search->query_fetch("SELECT SUM(`204315`) as sumtqf from totalplo1 where plo = 4 ORDER BY id Asc");
                    $sumtqf224=$search->query_fetch("SELECT SUM(`204321`) as sumtqf from totalplo1 where plo = 4 ORDER BY id Asc");
                    $sumtqf234=$search->query_fetch("SELECT SUM(`204341`) as sumtqf from totalplo1 where plo = 4 ORDER BY id Asc");
                    $sumtqf244=$search->query_fetch("SELECT SUM(`204361`) as sumtqf from totalplo1 where plo = 4 ORDER BY id Asc");
                    $sumtqf254=$search->query_fetch("SELECT SUM(`204362`) as sumtqf from totalplo1 where plo = 4 ORDER BY id Asc");
                    $sumtqf264=$search->query_fetch("SELECT SUM(`204451`) as sumtqf from totalplo1 where plo = 4 ORDER BY id Asc");
                    $sumtqf274=$search->query_fetch("SELECT SUM(`204490`) as sumtqf from totalplo1 where plo = 4 ORDER BY id Asc");
                    $sumtqf284=$search->query_fetch("SELECT SUM(`204390`) as sumtqf from totalplo1 where plo = 4 ORDER BY id Asc");
                    $sumtqf314=$search->query_fetch("SELECT SUM(`204490`) as sumtqf from totalplo1 where plo = 4 ORDER BY id Asc");
                    $sumtqf324=$search->query_fetch("SELECT SUM(`204491`) as sumtqf from totalplo1 where plo = 4 ORDER BY id Asc");
                    $sumtqf334=$search->query_fetch("SELECT SUM(`204497`) as sumtqf from totalplo1 where plo = 4 ORDER BY id Asc");
                    $sumtqf344=$search->query_fetch("SELECT SUM(`204496`) as sumtqf from totalplo1 where plo = 4 ORDER BY id Asc");
                    $sumtqf414=$search->query_fetch("SELECT SUM(`204499`) as sumtqf from totalplo1 where plo = 4 ORDER BY id Asc");

                    
                    $sumtqf115=$search->query_fetch("SELECT SUM(`204111`) as sumtqf from totalplo1 where plo = 5 ORDER BY id Asc");
                    $sumtqf125=$search->query_fetch("SELECT SUM(`204113`) as sumtqf from totalplo1 where plo = 5 ORDER BY id Asc");
                    $sumtqf135=$search->query_fetch("SELECT SUM(`204211`) as sumtqf from totalplo1 where plo = 5 ORDER BY id Asc");
                    $sumtqf145=$search->query_fetch("SELECT SUM(`204231`) as sumtqf from totalplo1 where plo = 5 ORDER BY id Asc");
                    $sumtqf155=$search->query_fetch("SELECT SUM(`204232`) as sumtqf from totalplo1 where plo = 5 ORDER BY id Asc");
                    $sumtqf165=$search->query_fetch("SELECT SUM(`204251`) as sumtqf from totalplo1 where plo = 5 ORDER BY id Asc");
                    $sumtqf175=$search->query_fetch("SELECT SUM(`204306`) as sumtqf from totalplo1 where plo = 5 ORDER BY id Asc");
                    $sumtqf215=$search->query_fetch("SELECT SUM(`204315`) as sumtqf from totalplo1 where plo = 5 ORDER BY id Asc");
                    $sumtqf225=$search->query_fetch("SELECT SUM(`204321`) as sumtqf from totalplo1 where plo = 5 ORDER BY id Asc");
                    $sumtqf235=$search->query_fetch("SELECT SUM(`204341`) as sumtqf from totalplo1 where plo = 5 ORDER BY id Asc");
                    $sumtqf245=$search->query_fetch("SELECT SUM(`204361`) as sumtqf from totalplo1 where plo = 5 ORDER BY id Asc");
                    $sumtqf255=$search->query_fetch("SELECT SUM(`204362`) as sumtqf from totalplo1 where plo = 5 ORDER BY id Asc");
                    $sumtqf265=$search->query_fetch("SELECT SUM(`204451`) as sumtqf from totalplo1 where plo = 5 ORDER BY id Asc");
                    $sumtqf275=$search->query_fetch("SELECT SUM(`204490`) as sumtqf from totalplo1 where plo = 5 ORDER BY id Asc");
                    $sumtqf285=$search->query_fetch("SELECT SUM(`204390`) as sumtqf from totalplo1 where plo = 5 ORDER BY id Asc");
                    $sumtqf315=$search->query_fetch("SELECT SUM(`204490`) as sumtqf from totalplo1 where plo = 5 ORDER BY id Asc");
                    $sumtqf325=$search->query_fetch("SELECT SUM(`204491`) as sumtqf from totalplo1 where plo = 5 ORDER BY id Asc");
                    $sumtqf335=$search->query_fetch("SELECT SUM(`204497`) as sumtqf from totalplo1 where plo = 5 ORDER BY id Asc");
                    $sumtqf345=$search->query_fetch("SELECT SUM(`204496`) as sumtqf from totalplo1 where plo = 5 ORDER BY id Asc");
                    $sumtqf415=$search->query_fetch("SELECT SUM(`204499`) as sumtqf from totalplo1 where plo = 5 ORDER BY id Asc");

                    
                    $sumtqf116=$search->query_fetch("SELECT SUM(`204111`) as sumtqf from totalplo1 where plo = 6 ORDER BY id Asc");
                    $sumtqf126=$search->query_fetch("SELECT SUM(`204113`) as sumtqf from totalplo1 where plo = 6 ORDER BY id Asc");
                    $sumtqf136=$search->query_fetch("SELECT SUM(`204211`) as sumtqf from totalplo1 where plo = 6 ORDER BY id Asc");
                    $sumtqf146=$search->query_fetch("SELECT SUM(`204231`) as sumtqf from totalplo1 where plo = 6 ORDER BY id Asc");
                    $sumtqf156=$search->query_fetch("SELECT SUM(`204232`) as sumtqf from totalplo1 where plo = 6 ORDER BY id Asc");
                    $sumtqf166=$search->query_fetch("SELECT SUM(`204251`) as sumtqf from totalplo1 where plo = 6 ORDER BY id Asc");
                    $sumtqf176=$search->query_fetch("SELECT SUM(`204306`) as sumtqf from totalplo1 where plo = 6 ORDER BY id Asc");
                    $sumtqf216=$search->query_fetch("SELECT SUM(`204315`) as sumtqf from totalplo1 where plo = 6 ORDER BY id Asc");
                    $sumtqf226=$search->query_fetch("SELECT SUM(`204321`) as sumtqf from totalplo1 where plo = 6 ORDER BY id Asc");
                    $sumtqf236=$search->query_fetch("SELECT SUM(`204341`) as sumtqf from totalplo1 where plo = 6 ORDER BY id Asc");
                    $sumtqf246=$search->query_fetch("SELECT SUM(`204361`) as sumtqf from totalplo1 where plo = 6 ORDER BY id Asc");
                    $sumtqf256=$search->query_fetch("SELECT SUM(`204362`) as sumtqf from totalplo1 where plo = 6 ORDER BY id Asc");
                    $sumtqf266=$search->query_fetch("SELECT SUM(`204451`) as sumtqf from totalplo1 where plo = 6 ORDER BY id Asc");
                    $sumtqf276=$search->query_fetch("SELECT SUM(`204490`) as sumtqf from totalplo1 where plo = 6 ORDER BY id Asc");
                    $sumtqf286=$search->query_fetch("SELECT SUM(`204390`) as sumtqf from totalplo1 where plo = 6 ORDER BY id Asc");
                    $sumtqf316=$search->query_fetch("SELECT SUM(`204490`) as sumtqf from totalplo1 where plo = 6 ORDER BY id Asc");
                    $sumtqf326=$search->query_fetch("SELECT SUM(`204491`) as sumtqf from totalplo1 where plo = 6 ORDER BY id Asc");
                    $sumtqf336=$search->query_fetch("SELECT SUM(`204497`) as sumtqf from totalplo1 where plo = 6 ORDER BY id Asc");
                    $sumtqf346=$search->query_fetch("SELECT SUM(`204496`) as sumtqf from totalplo1 where plo = 6 ORDER BY id Asc");
                    $sumtqf416=$search->query_fetch("SELECT SUM(`204499`) as sumtqf from totalplo1 where plo = 6 ORDER BY id Asc");

                
                ?>
    </div>
        <div class="content">

         <!-------------------------------------------------- TABLE---------------------------------------------------- -->
         
         

                <div class="tablescore">
                <h5 id="forh5"> PLO 1 </h5>
        <table name="tables" border="1px" width='550px' height='100px'>
            
                    <thead border="1px" align="center">  
                        
                    <th>วิธีประเมิน</th>
                        <th style="background-color:#D3DEDC; font-weight: normal">PLO 1</th>
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
                                    <td id = "tdcolors" align="center"><?php echo  $weight_score[$i]["detail"]; ?></td>
                                
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

        <h5 id="forh5"> PLO 2 </h5>
        <table name="tables" border="1px" width='550px' height='100px'>
            
                    <thead border="1px" align="center">  
                        
                    <th>วิธีประเมิน</th>
                    <th style="background-color:#D3DEDC; font-weight: normal">PLO 2</th>
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
                        
                            <?php $store2=0; $store=array(); for($i=0;$i<count($weight_score2);$i++) { 
                                $store[] = (float)$weight_score2[$i]["204111"]+
                                (float)$weight_score2[$i]["204113"]+
                                (float)$weight_score2[$i]["204211"]+
                                (float)$weight_score2[$i]["204231"]+
                                (float)$weight_score2[$i]["204232"]+
                                (float)$weight_score2[$i]["204251"]+
                                (float)$weight_score2[$i]["204306"]+
                                (float)$weight_score2[$i]["204315"]+
                                (float)$weight_score2[$i]["204321"]+
                                (float)$weight_score2[$i]["204341"]+
                                (float)$weight_score2[$i]["204361"]+
                                (float)$weight_score2[$i]["204362"]+
                                (float)$weight_score2[$i]["204451"]+
                                (float)$weight_score2[$i]["204490"]+
                                (float)$weight_score2[$i]["204390"]+
                                (float)$weight_score2[$i]["204491"]+
                                (float)$weight_score2[$i]["204497"]+
                                (float)$weight_score2[$i]["204496"]+
                                (float)$weight_score2[$i]["204499"];
                                $store2 += $store[$i];
                                //echo $store[$i]."<br>";
                                //echo ($store[$i] / $store2)."<br>";
                            }?> 
                            <?php for($i=0;$i<count($weight_score2);$i++) { ?>
                                <tr> 
                                    <td id = "tdcolors" align="center"><?php echo  $weight_score2[$i]["detail"]; ?></td>

                                <?php if ($weight_score2[$i]["204111"] == 0){$weight_score2[$i]["204111"] = NULL;} ?>
                                <?php if ($weight_score2[$i]["204113"] == 0){$weight_score2[$i]["204113"] = NULL;} ?>
                                <?php if ($weight_score2[$i]["204211"] == 0){$weight_score2[$i]["204211"] = NULL;} ?>
                                <?php if ($weight_score2[$i]["204231"] == 0){$weight_score2[$i]["204231"] = NULL;} ?>
                                <?php if ($weight_score2[$i]["204232"] == 0){$weight_score2[$i]["204232"] = NULL;} ?>
                                <?php if ($weight_score2[$i]["204251"] == 0){$weight_score2[$i]["204251"] = NULL;} ?>
                                <?php if ($weight_score2[$i]["204306"] == 0){$weight_score2[$i]["204306"] = NULL;} ?>
                                <?php if ($weight_score2[$i]["204315"] == 0){$weight_score2[$i]["204315"] = NULL;} ?>
                                <?php if ($weight_score2[$i]["204321"] == 0){$weight_score2[$i]["204321"] = NULL;} ?>
                                <?php if ($weight_score2[$i]["204341"] == 0){$weight_score2[$i]["204341"] = NULL;} ?>
                                <?php if ($weight_score2[$i]["204361"] == 0){$weight_score2[$i]["204361"] = NULL;} ?>
                                <?php if ($weight_score2[$i]["204362"] == 0){$weight_score2[$i]["204362"] = NULL;} ?>
                                <?php if ($weight_score2[$i]["204451"] == 0){$weight_score2[$i]["204451"] = NULL;} ?>
                                <?php if ($weight_score2[$i]["204490"] == 0){$weight_score2[$i]["204490"] = NULL;} ?>
                                <?php if ($weight_score2[$i]["204390"] == 0){$weight_score2[$i]["204390"] = NULL;} ?>
                                <?php if ($weight_score2[$i]["204491"] == 0){$weight_score2[$i]["204491"] = NULL;} ?>
                                <?php if ($weight_score2[$i]["204497"] == 0){$weight_score2[$i]["204497"] = NULL;} ?>
                                <?php if ($weight_score2[$i]["204496"] == 0){$weight_score2[$i]["204496"] = NULL;} ?>
                                <?php if ($weight_score2[$i]["204499"] == 0){$weight_score2[$i]["204499"] = NULL;} ?>
                                   
                                    <td align="center"><?php echo bcdiv((($store[$i] / $store2)* 100),1,2)." %"  ?></td>
                                    <td align="center"><?php echo $weight_score2[$i]["204111"]; ?></td>
                                    <td align="center"><?php echo $weight_score2[$i]["204113"]; ?></td>
                                    <td align="center"><?php echo $weight_score2[$i]["204211"]; ?></td>
                                    <td align="center"><?php echo $weight_score2[$i]["204231"]; ?></td>
                                    <td align="center"><?php echo $weight_score2[$i]["204232"]; ?></td>
                                    <td align="center"><?php echo $weight_score2[$i]["204251"]; ?></td>
                                    <td align="center"><?php echo $weight_score2[$i]["204306"]; ?></td>
                                    <td align="center"><?php echo $weight_score2[$i]["204315"]; ?></td>
                                    <td align="center"><?php echo $weight_score2[$i]["204321"]; ?></td>
                                    <td align="center"><?php echo $weight_score2[$i]["204341"]; ?></td>
                                    <td align="center"><?php echo $weight_score2[$i]["204361"]; ?></td>
                                    <td align="center"><?php echo $weight_score2[$i]["204362"]; ?></td>
                                    <td align="center"><?php echo $weight_score2[$i]["204451"]; ?></td>
                                    <td align="center"><?php echo $weight_score2[$i]["204490"]; ?></td>
                                    <td align="center"><?php echo $weight_score2[$i]["204390"]; ?></td>
                                    <td align="center"><?php echo $weight_score2[$i]["204491"]; ?></td>
                                    <td align="center"><?php echo $weight_score2[$i]["204497"]; ?></td>
                                    <td align="center"><?php echo $weight_score2[$i]["204496"]; ?></td>
                                    <td align="center"><?php echo $weight_score2[$i]["204499"]; ?></td>


                                </tr>
                                <?php 
                                }   //echo "here ".$store2?>
                                <tr> 
                                    
                                <td id = 'blankstyle' align="center"></td>
                                    <td id = 'blankstyle2' align="center"></td>

                                    <?php if($sumtqf112['sumtqf'] == 0 ){$sumtqf112['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf122['sumtqf'] == 0 ){$sumtqf122['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf132['sumtqf'] == 0 ){$sumtqf132['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf142['sumtqf'] == 0 ){$sumtqf142['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf152['sumtqf'] == 0 ){$sumtqf152['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf162['sumtqf'] == 0 ){$sumtqf162['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf172['sumtqf'] == 0 ){$sumtqf172['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf212['sumtqf'] == 0 ){$sumtqf212['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf222['sumtqf'] == 0 ){$sumtqf222['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf232['sumtqf'] == 0 ){$sumtqf232['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf242['sumtqf'] == 0 ){$sumtqf242['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf252['sumtqf'] == 0 ){$sumtqf252['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf262['sumtqf'] == 0 ){$sumtqf262['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf272['sumtqf'] == 0 ){$sumtqf272['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf282['sumtqf'] == 0 ){$sumtqf282['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf312['sumtqf'] == 0 ){$sumtqf312['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf322['sumtqf'] == 0 ){$sumtqf322['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf332['sumtqf'] == 0 ){$sumtqf332['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf342['sumtqf'] == 0 ){$sumtqf342['sumtqf'] = NULL;} ?>
2
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf112['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf122['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf132['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf142['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf152['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf162['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf172['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf212['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf222['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf232['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf242['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf252['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf262['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf272['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf282['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf312['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf322['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf332['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf342['sumtqf'] ?></td>
                                    

                                    

                                </tr>
 
                </tbody>
        </table>

        <h5 id="forh5"> PLO 3 </h5>
        <table name="tables" border="1px" width='550px' height='100px'>
            
                    <thead border="1px" align="center">  
                        
                    <th>วิธีประเมิน</th>
                    <th style="background-color:#D3DEDC; font-weight: normal">PLO 3</th>
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
                        
                            <?php $store2=0; $store=array(); for($i=0;$i<count($weight_score3);$i++) { 
                                $store[] = (float)$weight_score3[$i]["204111"]+
                                (float)$weight_score3[$i]["204113"]+
                                (float)$weight_score3[$i]["204211"]+
                                (float)$weight_score3[$i]["204231"]+
                                (float)$weight_score3[$i]["204232"]+
                                (float)$weight_score3[$i]["204251"]+
                                (float)$weight_score3[$i]["204306"]+
                                (float)$weight_score3[$i]["204315"]+
                                (float)$weight_score3[$i]["204321"]+
                                (float)$weight_score3[$i]["204341"]+
                                (float)$weight_score3[$i]["204361"]+
                                (float)$weight_score3[$i]["204362"]+
                                (float)$weight_score3[$i]["204451"]+
                                (float)$weight_score3[$i]["204490"]+
                                (float)$weight_score3[$i]["204390"]+
                                (float)$weight_score3[$i]["204491"]+
                                (float)$weight_score3[$i]["204497"]+
                                (float)$weight_score3[$i]["204496"]+
                                (float)$weight_score3[$i]["204499"];
                                $store2 += $store[$i];
                                //echo $store[$i]."<br>";
                                //echo ($store[$i] / $store2)."<br>";
                            }?> 
                            <?php for($i=0;$i<count($weight_score3);$i++) { ?>
                                <tr> 
                                    <td id = "tdcolors" align="center"><?php echo  $weight_score3[$i]["detail"]; ?></td>


                                <?php if ($weight_score3[$i]["204111"] == 0){$weight_score3[$i]["204111"] = NULL;} ?>
                                <?php if ($weight_score3[$i]["204113"] == 0){$weight_score3[$i]["204113"] = NULL;} ?>
                                <?php if ($weight_score3[$i]["204211"] == 0){$weight_score3[$i]["204211"] = NULL;} ?>
                                <?php if ($weight_score3[$i]["204231"] == 0){$weight_score3[$i]["204231"] = NULL;} ?>
                                <?php if ($weight_score3[$i]["204232"] == 0){$weight_score3[$i]["204232"] = NULL;} ?>
                                <?php if ($weight_score3[$i]["204251"] == 0){$weight_score3[$i]["204251"] = NULL;} ?>
                                <?php if ($weight_score3[$i]["204306"] == 0){$weight_score3[$i]["204306"] = NULL;} ?>
                                <?php if ($weight_score3[$i]["204315"] == 0){$weight_score3[$i]["204315"] = NULL;} ?>
                                <?php if ($weight_score3[$i]["204321"] == 0){$weight_score3[$i]["204321"] = NULL;} ?>
                                <?php if ($weight_score3[$i]["204341"] == 0){$weight_score3[$i]["204341"] = NULL;} ?>
                                <?php if ($weight_score3[$i]["204361"] == 0){$weight_score3[$i]["204361"] = NULL;} ?>
                                <?php if ($weight_score3[$i]["204362"] == 0){$weight_score3[$i]["204362"] = NULL;} ?>
                                <?php if ($weight_score3[$i]["204451"] == 0){$weight_score3[$i]["204451"] = NULL;} ?>
                                <?php if ($weight_score3[$i]["204490"] == 0){$weight_score3[$i]["204490"] = NULL;} ?>
                                <?php if ($weight_score3[$i]["204390"] == 0){$weight_score3[$i]["204390"] = NULL;} ?>
                                <?php if ($weight_score3[$i]["204491"] == 0){$weight_score3[$i]["204491"] = NULL;} ?>
                                <?php if ($weight_score3[$i]["204497"] == 0){$weight_score3[$i]["204497"] = NULL;} ?>
                                <?php if ($weight_score3[$i]["204496"] == 0){$weight_score3[$i]["204496"] = NULL;} ?>
                                <?php if ($weight_score3[$i]["204499"] == 0){$weight_score3[$i]["204499"] = NULL;} ?>

                                    <td align="center"><?php echo bcdiv((($store[$i] / $store2)* 100),1,2)." %"  ?></td>
                                    <td align="center"><?php echo $weight_score3[$i]["204111"]; ?></td>
                                    <td align="center"><?php echo $weight_score3[$i]["204113"]; ?></td>
                                    <td align="center"><?php echo $weight_score3[$i]["204211"]; ?></td>
                                    <td align="center"><?php echo $weight_score3[$i]["204231"]; ?></td>
                                    <td align="center"><?php echo $weight_score3[$i]["204232"]; ?></td>
                                    <td align="center"><?php echo $weight_score3[$i]["204251"]; ?></td>
                                    <td align="center"><?php echo $weight_score3[$i]["204306"]; ?></td>
                                    <td align="center"><?php echo $weight_score3[$i]["204315"]; ?></td>
                                    <td align="center"><?php echo $weight_score3[$i]["204321"]; ?></td>
                                    <td align="center"><?php echo $weight_score3[$i]["204341"]; ?></td>
                                    <td align="center"><?php echo $weight_score3[$i]["204361"]; ?></td>
                                    <td align="center"><?php echo $weight_score3[$i]["204362"]; ?></td>
                                    <td align="center"><?php echo $weight_score3[$i]["204451"]; ?></td>
                                    <td align="center"><?php echo $weight_score3[$i]["204490"]; ?></td>
                                    <td align="center"><?php echo $weight_score3[$i]["204390"]; ?></td>
                                    <td align="center"><?php echo $weight_score3[$i]["204491"]; ?></td>
                                    <td align="center"><?php echo $weight_score3[$i]["204497"]; ?></td>
                                    <td align="center"><?php echo $weight_score3[$i]["204496"]; ?></td>
                                    <td align="center"><?php echo $weight_score3[$i]["204499"]; ?></td>


                                </tr>
                                <?php 
                                }   //echo "here ".$store2?>
                                <tr> 
                                    
                                <td id = 'blankstyle' align="center"></td>
                                    <td id = 'blankstyle2' align="center"></td>

                                    <?php if($sumtqf113['sumtqf'] == 0 ){$sumtqf113['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf123['sumtqf'] == 0 ){$sumtqf123['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf133['sumtqf'] == 0 ){$sumtqf133['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf143['sumtqf'] == 0 ){$sumtqf143['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf153['sumtqf'] == 0 ){$sumtqf153['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf163['sumtqf'] == 0 ){$sumtqf163['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf173['sumtqf'] == 0 ){$sumtqf173['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf213['sumtqf'] == 0 ){$sumtqf213['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf223['sumtqf'] == 0 ){$sumtqf223['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf233['sumtqf'] == 0 ){$sumtqf233['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf243['sumtqf'] == 0 ){$sumtqf243['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf253['sumtqf'] == 0 ){$sumtqf253['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf263['sumtqf'] == 0 ){$sumtqf263['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf273['sumtqf'] == 0 ){$sumtqf273['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf283['sumtqf'] == 0 ){$sumtqf283['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf313['sumtqf'] == 0 ){$sumtqf313['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf323['sumtqf'] == 0 ){$sumtqf323['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf333['sumtqf'] == 0 ){$sumtqf333['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf343['sumtqf'] == 0 ){$sumtqf343['sumtqf'] = NULL;} ?>

                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf113['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf123['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf133['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf143['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf153['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf163['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf173['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf213['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf223['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf233['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf243['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf253['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf263['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf273['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf283['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf313['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf323['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf333['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf343['sumtqf'] ?></td>
                                    

                                    

                                </tr>
 
                </tbody>
        </table>

        <h5 id="forh5"> PLO 4 </h5>
        <table name="tables" border="1px" width='550px' height='100px'>
            
                    <thead border="1px" align="center">  
                        
                    <th>วิธีประเมิน</th>
                    <th style="background-color:#D3DEDC; font-weight: normal">PLO 4</th>
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
                        
                            <?php $store2=0; $store=array(); for($i=0;$i<count($weight_score4);$i++) { 
                                $store[] = (float)$weight_score4[$i]["204111"]+
                                (float)$weight_score4[$i]["204113"]+
                                (float)$weight_score4[$i]["204211"]+
                                (float)$weight_score4[$i]["204231"]+
                                (float)$weight_score4[$i]["204232"]+
                                (float)$weight_score4[$i]["204251"]+
                                (float)$weight_score4[$i]["204306"]+
                                (float)$weight_score4[$i]["204315"]+
                                (float)$weight_score4[$i]["204321"]+
                                (float)$weight_score4[$i]["204341"]+
                                (float)$weight_score4[$i]["204361"]+
                                (float)$weight_score4[$i]["204362"]+
                                (float)$weight_score4[$i]["204451"]+
                                (float)$weight_score4[$i]["204490"]+
                                (float)$weight_score4[$i]["204390"]+
                                (float)$weight_score4[$i]["204491"]+
                                (float)$weight_score4[$i]["204497"]+
                                (float)$weight_score4[$i]["204496"]+
                                (float)$weight_score4[$i]["204499"];
                                $store2 += $store[$i];
                                //echo $store[$i]."<br>";
                                //echo ($store[$i] / $store2)."<br>";
                            }?> 
                            <?php for($i=0;$i<count($weight_score4);$i++) { ?>
                                <tr> 
                                    <td id = "tdcolors" align="center"><?php echo  $weight_score4[$i]["detail"]; ?></td>

                                <?php if ($weight_score4[$i]["204111"] == 0){$weight_score4[$i]["204111"] = NULL;} ?>
                                <?php if ($weight_score4[$i]["204113"] == 0){$weight_score4[$i]["204113"] = NULL;} ?>
                                <?php if ($weight_score4[$i]["204211"] == 0){$weight_score4[$i]["204211"] = NULL;} ?>
                                <?php if ($weight_score4[$i]["204231"] == 0){$weight_score4[$i]["204231"] = NULL;} ?>
                                <?php if ($weight_score4[$i]["204232"] == 0){$weight_score4[$i]["204232"] = NULL;} ?>
                                <?php if ($weight_score4[$i]["204251"] == 0){$weight_score4[$i]["204251"] = NULL;} ?>
                                <?php if ($weight_score4[$i]["204306"] == 0){$weight_score4[$i]["204306"] = NULL;} ?>
                                <?php if ($weight_score4[$i]["204315"] == 0){$weight_score4[$i]["204315"] = NULL;} ?>
                                <?php if ($weight_score4[$i]["204321"] == 0){$weight_score4[$i]["204321"] = NULL;} ?>
                                <?php if ($weight_score4[$i]["204341"] == 0){$weight_score4[$i]["204341"] = NULL;} ?>
                                <?php if ($weight_score4[$i]["204361"] == 0){$weight_score4[$i]["204361"] = NULL;} ?>
                                <?php if ($weight_score4[$i]["204362"] == 0){$weight_score4[$i]["204362"] = NULL;} ?>
                                <?php if ($weight_score4[$i]["204451"] == 0){$weight_score4[$i]["204451"] = NULL;} ?>
                                <?php if ($weight_score4[$i]["204490"] == 0){$weight_score4[$i]["204490"] = NULL;} ?>
                                <?php if ($weight_score4[$i]["204390"] == 0){$weight_score4[$i]["204390"] = NULL;} ?>
                                <?php if ($weight_score4[$i]["204491"] == 0){$weight_score4[$i]["204491"] = NULL;} ?>
                                <?php if ($weight_score4[$i]["204497"] == 0){$weight_score4[$i]["204497"] = NULL;} ?>
                                <?php if ($weight_score4[$i]["204496"] == 0){$weight_score4[$i]["204496"] = NULL;} ?>
                                <?php if ($weight_score4[$i]["204499"] == 0){$weight_score4[$i]["204499"] = NULL;} ?>
                                   
                                    <td align="center"><?php echo bcdiv((($store[$i] / $store2)* 100),1,2)." %"  ?></td>
                                    <td align="center"><?php echo $weight_score4[$i]["204111"]; ?></td>
                                    <td align="center"><?php echo $weight_score4[$i]["204113"]; ?></td>
                                    <td align="center"><?php echo $weight_score4[$i]["204211"]; ?></td>
                                    <td align="center"><?php echo $weight_score4[$i]["204231"]; ?></td>
                                    <td align="center"><?php echo $weight_score4[$i]["204232"]; ?></td>
                                    <td align="center"><?php echo $weight_score4[$i]["204251"]; ?></td>
                                    <td align="center"><?php echo $weight_score4[$i]["204306"]; ?></td>
                                    <td align="center"><?php echo $weight_score4[$i]["204315"]; ?></td>
                                    <td align="center"><?php echo $weight_score4[$i]["204321"]; ?></td>
                                    <td align="center"><?php echo $weight_score4[$i]["204341"]; ?></td>
                                    <td align="center"><?php echo $weight_score4[$i]["204361"]; ?></td>
                                    <td align="center"><?php echo $weight_score4[$i]["204362"]; ?></td>
                                    <td align="center"><?php echo $weight_score4[$i]["204451"]; ?></td>
                                    <td align="center"><?php echo $weight_score4[$i]["204490"]; ?></td>
                                    <td align="center"><?php echo $weight_score4[$i]["204390"]; ?></td>
                                    <td align="center"><?php echo $weight_score4[$i]["204491"]; ?></td>
                                    <td align="center"><?php echo $weight_score4[$i]["204497"]; ?></td>
                                    <td align="center"><?php echo $weight_score4[$i]["204496"]; ?></td>
                                    <td align="center"><?php echo $weight_score4[$i]["204499"]; ?></td>


                                </tr>
                                <?php 
                                }   //echo "here ".$store2?>
                                <tr> 
                                    
                                <td id = 'blankstyle' align="center"></td>
                                    <td id = 'blankstyle2' align="center"></td>

                                    <?php if($sumtqf114['sumtqf'] == 0 ){$sumtqf114['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf124['sumtqf'] == 0 ){$sumtqf124['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf134['sumtqf'] == 0 ){$sumtqf134['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf144['sumtqf'] == 0 ){$sumtqf144['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf154['sumtqf'] == 0 ){$sumtqf154['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf164['sumtqf'] == 0 ){$sumtqf164['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf174['sumtqf'] == 0 ){$sumtqf174['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf214['sumtqf'] == 0 ){$sumtqf214['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf224['sumtqf'] == 0 ){$sumtqf224['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf234['sumtqf'] == 0 ){$sumtqf234['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf244['sumtqf'] == 0 ){$sumtqf244['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf254['sumtqf'] == 0 ){$sumtqf254['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf264['sumtqf'] == 0 ){$sumtqf264['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf274['sumtqf'] == 0 ){$sumtqf274['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf284['sumtqf'] == 0 ){$sumtqf284['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf314['sumtqf'] == 0 ){$sumtqf314['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf324['sumtqf'] == 0 ){$sumtqf324['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf334['sumtqf'] == 0 ){$sumtqf334['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf344['sumtqf'] == 0 ){$sumtqf344['sumtqf'] = NULL;} ?>

                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf114['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf124['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf134['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf144['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf154['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf164['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf174['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf214['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf224['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf234['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf244['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf254['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf264['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf274['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf284['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf314['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf324['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf334['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf344['sumtqf'] ?></td>
                                    

                                    

                                </tr>
 
                </tbody>
        </table>

        <h5 id="forh5"> PLO 5 </h5>
        <table name="tables" border="1px" width='550px' height='100px'>
            
                    <thead border="1px" align="center">  
                        
                    <th>วิธีประเมิน</th>
                    <th style="background-color:#D3DEDC; font-weight: normal">PLO 5</th>
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
                                $store[] = (float)$weight_score5[$i]["204111"]+
                                (float)$weight_score5[$i]["204113"]+
                                (float)$weight_score5[$i]["204211"]+
                                (float)$weight_score5[$i]["204231"]+
                                (float)$weight_score5[$i]["204232"]+
                                (float)$weight_score5[$i]["204251"]+
                                (float)$weight_score5[$i]["204306"]+
                                (float)$weight_score5[$i]["204315"]+
                                (float)$weight_score5[$i]["204321"]+
                                (float)$weight_score5[$i]["204341"]+
                                (float)$weight_score5[$i]["204361"]+
                                (float)$weight_score5[$i]["204362"]+
                                (float)$weight_score5[$i]["204451"]+
                                (float)$weight_score5[$i]["204490"]+
                                (float)$weight_score5[$i]["204390"]+
                                (float)$weight_score5[$i]["204491"]+
                                (float)$weight_score5[$i]["204497"]+
                                (float)$weight_score5[$i]["204496"]+
                                (float)$weight_score5[$i]["204499"];
                                $store2 += $store[$i];
                                //echo $store[$i]."<br>";
                                //echo ($store[$i] / $store2)."<br>";
                            }?> 
                            <?php for($i=0;$i<count($weight_score);$i++) { ?>
                                <tr> 
                                    <td id = "tdcolors" align="center"><?php echo  $weight_score5[$i]["detail"]; ?></td>

                                <?php if ($weight_score5[$i]["204111"] == 0){$weight_score5[$i]["204111"] = NULL;} ?>
                                <?php if ($weight_score5[$i]["204113"] == 0){$weight_score5[$i]["204113"] = NULL;} ?>
                                <?php if ($weight_score5[$i]["204211"] == 0){$weight_score5[$i]["204211"] = NULL;} ?>
                                <?php if ($weight_score5[$i]["204231"] == 0){$weight_score5[$i]["204231"] = NULL;} ?>
                                <?php if ($weight_score5[$i]["204232"] == 0){$weight_score5[$i]["204232"] = NULL;} ?>
                                <?php if ($weight_score5[$i]["204251"] == 0){$weight_score5[$i]["204251"] = NULL;} ?>
                                <?php if ($weight_score5[$i]["204306"] == 0){$weight_score5[$i]["204306"] = NULL;} ?>
                                <?php if ($weight_score5[$i]["204315"] == 0){$weight_score5[$i]["204315"] = NULL;} ?>
                                <?php if ($weight_score5[$i]["204321"] == 0){$weight_score5[$i]["204321"] = NULL;} ?>
                                <?php if ($weight_score5[$i]["204341"] == 0){$weight_score5[$i]["204341"] = NULL;} ?>
                                <?php if ($weight_score5[$i]["204361"] == 0){$weight_score5[$i]["204361"] = NULL;} ?>
                                <?php if ($weight_score5[$i]["204362"] == 0){$weight_score5[$i]["204362"] = NULL;} ?>
                                <?php if ($weight_score5[$i]["204451"] == 0){$weight_score5[$i]["204451"] = NULL;} ?>
                                <?php if ($weight_score5[$i]["204490"] == 0){$weight_score5[$i]["204490"] = NULL;} ?>
                                <?php if ($weight_score5[$i]["204390"] == 0){$weight_score5[$i]["204390"] = NULL;} ?>
                                <?php if ($weight_score5[$i]["204491"] == 0){$weight_score5[$i]["204491"] = NULL;} ?>
                                <?php if ($weight_score5[$i]["204497"] == 0){$weight_score5[$i]["204497"] = NULL;} ?>
                                <?php if ($weight_score5[$i]["204496"] == 0){$weight_score5[$i]["204496"] = NULL;} ?>
                                <?php if ($weight_score5[$i]["204499"] == 0){$weight_score5[$i]["204499"] = NULL;} ?>

                                    <td align="center"><?php echo bcdiv((($store[$i] / $store2)* 100),1,2)." %"  ?></td>
                                    <td align="center"><?php echo $weight_score5[$i]["204111"]; ?></td>
                                    <td align="center"><?php echo $weight_score5[$i]["204113"]; ?></td>
                                    <td align="center"><?php echo $weight_score5[$i]["204211"]; ?></td>
                                    <td align="center"><?php echo $weight_score5[$i]["204231"]; ?></td>
                                    <td align="center"><?php echo $weight_score5[$i]["204232"]; ?></td>
                                    <td align="center"><?php echo $weight_score5[$i]["204251"]; ?></td>
                                    <td align="center"><?php echo $weight_score5[$i]["204306"]; ?></td>
                                    <td align="center"><?php echo $weight_score5[$i]["204315"]; ?></td>
                                    <td align="center"><?php echo $weight_score5[$i]["204321"]; ?></td>
                                    <td align="center"><?php echo $weight_score5[$i]["204341"]; ?></td>
                                    <td align="center"><?php echo $weight_score5[$i]["204361"]; ?></td>
                                    <td align="center"><?php echo $weight_score5[$i]["204362"]; ?></td>
                                    <td align="center"><?php echo $weight_score5[$i]["204451"]; ?></td>
                                    <td align="center"><?php echo $weight_score5[$i]["204490"]; ?></td>
                                    <td align="center"><?php echo $weight_score5[$i]["204390"]; ?></td>
                                    <td align="center"><?php echo $weight_score5[$i]["204491"]; ?></td>
                                    <td align="center"><?php echo $weight_score5[$i]["204497"]; ?></td>
                                    <td align="center"><?php echo $weight_score5[$i]["204496"]; ?></td>
                                    <td align="center"><?php echo $weight_score5[$i]["204499"]; ?></td>


                                </tr>
                                <?php 
                                }   ?>
                                <tr> 
                                    
                                <td id = 'blankstyle' align="center"></td>
                                    <td id = 'blankstyle2' align="center"></td>

                                    <?php if($sumtqf115['sumtqf'] == 0 ){$sumtqf115['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf125['sumtqf'] == 0 ){$sumtqf125['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf135['sumtqf'] == 0 ){$sumtqf135['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf145['sumtqf'] == 0 ){$sumtqf145['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf155['sumtqf'] == 0 ){$sumtqf155['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf165['sumtqf'] == 0 ){$sumtqf165['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf175['sumtqf'] == 0 ){$sumtqf175['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf215['sumtqf'] == 0 ){$sumtqf215['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf225['sumtqf'] == 0 ){$sumtqf225['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf235['sumtqf'] == 0 ){$sumtqf235['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf245['sumtqf'] == 0 ){$sumtqf245['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf255['sumtqf'] == 0 ){$sumtqf255['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf265['sumtqf'] == 0 ){$sumtqf265['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf275['sumtqf'] == 0 ){$sumtqf275['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf285['sumtqf'] == 0 ){$sumtqf285['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf315['sumtqf'] == 0 ){$sumtqf315['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf325['sumtqf'] == 0 ){$sumtqf325['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf335['sumtqf'] == 0 ){$sumtqf335['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf345['sumtqf'] == 0 ){$sumtqf345['sumtqf'] = NULL;} ?>

                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf115['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf125['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf135['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf145['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf155['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf165['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf175['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf215['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf225['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf235['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf245['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf255['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf265['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf275['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf285['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf315['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf325['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf335['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf345['sumtqf'] ?></td>
                                    

                                    

                                </tr>
 
                </tbody>
        </table>

        <h5 id="forh5"> PLO 6 </h5>
        <table name="tables" border="1px" width='550px' height='100px'>
            
                    <thead border="1px" align="center">  
                        
                        <th>วิธีประเมิน</th>
                        <th style="background-color:#D3DEDC; font-weight: normal">PLO 6</th>
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
                                $store[] = (float)$weight_score6[$i]["204111"]+
                                (float)$weight_score6[$i]["204113"]+
                                (float)$weight_score6[$i]["204211"]+
                                (float)$weight_score6[$i]["204231"]+
                                (float)$weight_score6[$i]["204232"]+
                                (float)$weight_score6[$i]["204251"]+
                                (float)$weight_score6[$i]["204306"]+
                                (float)$weight_score6[$i]["204315"]+
                                (float)$weight_score6[$i]["204321"]+
                                (float)$weight_score6[$i]["204341"]+
                                (float)$weight_score6[$i]["204361"]+
                                (float)$weight_score6[$i]["204362"]+
                                (float)$weight_score6[$i]["204451"]+
                                (float)$weight_score6[$i]["204490"]+
                                (float)$weight_score6[$i]["204390"]+
                                (float)$weight_score6[$i]["204491"]+
                                (float)$weight_score6[$i]["204497"]+
                                (float)$weight_score6[$i]["204496"]+
                                (float)$weight_score6[$i]["204499"];
                                $store2 += $store[$i];
                                //echo $store[$i]."<br>";
                                //echo ($store[$i] / $store2)."<br>";
                            }?> 
                            <?php for($i=0;$i<count($weight_score);$i++) { ?>
                                <tr> 
                                    <td id = "tdcolors" align="center"><?php echo  $weight_score6[$i]["detail"]; ?></td>

                                <?php if ($weight_score6[$i]["204111"] == 0){$weight_score6[$i]["204111"] = NULL;} ?>
                                <?php if ($weight_score6[$i]["204113"] == 0){$weight_score6[$i]["204113"] = NULL;} ?>
                                <?php if ($weight_score6[$i]["204211"] == 0){$weight_score6[$i]["204211"] = NULL;} ?>
                                <?php if ($weight_score6[$i]["204231"] == 0){$weight_score6[$i]["204231"] = NULL;} ?>
                                <?php if ($weight_score6[$i]["204232"] == 0){$weight_score6[$i]["204232"] = NULL;} ?>
                                <?php if ($weight_score6[$i]["204251"] == 0){$weight_score6[$i]["204251"] = NULL;} ?>
                                <?php if ($weight_score6[$i]["204306"] == 0){$weight_score6[$i]["204306"] = NULL;} ?>
                                <?php if ($weight_score6[$i]["204315"] == 0){$weight_score6[$i]["204315"] = NULL;} ?>
                                <?php if ($weight_score6[$i]["204321"] == 0){$weight_score6[$i]["204321"] = NULL;} ?>
                                <?php if ($weight_score6[$i]["204341"] == 0){$weight_score6[$i]["204341"] = NULL;} ?>
                                <?php if ($weight_score6[$i]["204361"] == 0){$weight_score6[$i]["204361"] = NULL;} ?>
                                <?php if ($weight_score6[$i]["204362"] == 0){$weight_score6[$i]["204362"] = NULL;} ?>
                                <?php if ($weight_score6[$i]["204451"] == 0){$weight_score6[$i]["204451"] = NULL;} ?>
                                <?php if ($weight_score6[$i]["204490"] == 0){$weight_score6[$i]["204490"] = NULL;} ?>
                                <?php if ($weight_score6[$i]["204390"] == 0){$weight_score6[$i]["204390"] = NULL;} ?>
                                <?php if ($weight_score6[$i]["204491"] == 0){$weight_score6[$i]["204491"] = NULL;} ?>
                                <?php if ($weight_score6[$i]["204497"] == 0){$weight_score6[$i]["204497"] = NULL;} ?>
                                <?php if ($weight_score6[$i]["204496"] == 0){$weight_score6[$i]["204496"] = NULL;} ?>
                                <?php if ($weight_score6[$i]["204499"] == 0){$weight_score6[$i]["204499"] = NULL;} ?>
              
                                    <td align="center"><?php echo bcdiv((($store[$i] / $store2)* 100),1,2)." %"  ?></td>
                                    <td align="center"><?php echo $weight_score6[$i]["204111"]; ?></td>
                                    <td align="center"><?php echo $weight_score6[$i]["204113"]; ?></td>
                                    <td align="center"><?php echo $weight_score6[$i]["204211"]; ?></td>
                                    <td align="center"><?php echo $weight_score6[$i]["204231"]; ?></td>
                                    <td align="center"><?php echo $weight_score6[$i]["204232"]; ?></td>
                                    <td align="center"><?php echo $weight_score6[$i]["204251"]; ?></td>
                                    <td align="center"><?php echo $weight_score6[$i]["204306"]; ?></td>
                                    <td align="center"><?php echo $weight_score6[$i]["204315"]; ?></td>
                                    <td align="center"><?php echo $weight_score6[$i]["204321"]; ?></td>
                                    <td align="center"><?php echo $weight_score6[$i]["204341"]; ?></td>
                                    <td align="center"><?php echo $weight_score6[$i]["204361"]; ?></td>
                                    <td align="center"><?php echo $weight_score6[$i]["204362"]; ?></td>
                                    <td align="center"><?php echo $weight_score6[$i]["204451"]; ?></td>
                                    <td align="center"><?php echo $weight_score6[$i]["204490"]; ?></td>
                                    <td align="center"><?php echo $weight_score6[$i]["204390"]; ?></td>
                                    <td align="center"><?php echo $weight_score6[$i]["204491"]; ?></td>
                                    <td align="center"><?php echo $weight_score6[$i]["204497"]; ?></td>
                                    <td align="center"><?php echo $weight_score6[$i]["204496"]; ?></td>
                                    <td align="center"><?php echo $weight_score6[$i]["204499"]; ?></td>


                                </tr>
                                <?php 
                                }   //echo "here ".$store2?>
                                <tr> 
                                    
                                <td id = 'blankstyle' align="center"></td>
                                    <td id = 'blankstyle2' align="center"></td>

                                    <?php if($sumtqf116['sumtqf'] == 0 ){$sumtqf116['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf126['sumtqf'] == 0 ){$sumtqf126['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf136['sumtqf'] == 0 ){$sumtqf136['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf146['sumtqf'] == 0 ){$sumtqf146['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf156['sumtqf'] == 0 ){$sumtqf156['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf166['sumtqf'] == 0 ){$sumtqf166['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf176['sumtqf'] == 0 ){$sumtqf176['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf216['sumtqf'] == 0 ){$sumtqf216['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf226['sumtqf'] == 0 ){$sumtqf226['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf236['sumtqf'] == 0 ){$sumtqf236['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf246['sumtqf'] == 0 ){$sumtqf246['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf256['sumtqf'] == 0 ){$sumtqf256['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf266['sumtqf'] == 0 ){$sumtqf266['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf276['sumtqf'] == 0 ){$sumtqf276['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf286['sumtqf'] == 0 ){$sumtqf286['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf316['sumtqf'] == 0 ){$sumtqf316['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf326['sumtqf'] == 0 ){$sumtqf326['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf336['sumtqf'] == 0 ){$sumtqf336['sumtqf'] = NULL;} ?>
                                    <?php if($sumtqf346['sumtqf'] == 0 ){$sumtqf346['sumtqf'] = NULL;} ?>

                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf116['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf126['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf136['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf146['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf156['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf166['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf176['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf216['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf226['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf236['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf246['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf256['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf266['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf276['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf286['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf316['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf326['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf336['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf346['sumtqf'] ?></td>
                                    

                                    

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
        #forh5{
            margin-left: -20px;
            text-decoration: underline;
        }
        table, th, td {
             border: 1px solid black;
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