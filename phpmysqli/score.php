<?php 
	include "system_config.php";
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

    



    <title>รายละเอียด PLO</title>

</head>

<body>
    
     <?php  include 'navbar.php' ?>
    <?php  include 'tabbar.php' ?> 

    <div class="content-head">
    <h3 id="h3style"><?php echo 'รายงานสรุปผลการประเมินวิชา ' ; echo  $_SESSION['id']; ?></h3>
    </div>
    
    
    
    <div class="beforesubmit">
        <div class="addCourse">
        <?php 
            
            $search = new ismart();
            $plo_number  = $search->query("SELECT  * FROM plo_table");

        ?>
        <div class="selection">
            <form  action="" method="post" enctype="multipart/form-data">

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

        </div>
            <div class="content">
        <?php
            //$test = $search->store_plo(11,10,204111);

            $getid = $_SESSION['id'];
           
            $assessment_name = ['สอบกลางภาค','สอบปลายภาค','สอบย่อย ','สอบปฏิบัติ','แบบฝึกหัด (ทฤษฎี)','แบบฝึกหัด (ปฏิบัติการ)','รายงาน','โครงงาน & สาธิต','การนำเสนอ','พฤติกรรมการมีส่วนร่วม','คะแนนเข้าชั้นเรียน ','วินัยการส่งงาน','อื่นๆ'];
            $course_score = [
                '204111' => 0.58,
                '204113' => 0.83,
                '204211' => 0.96,
                '204231' => 0.98,
                '204232' => 1.00,
                '204251' => 0.76,
                '204306' => 0.93,
                '204315' => 0.87,
                '204321' => 0.88,
                '204341' => 0.98,
                '204361' => 1.00,
                '204362' => 0.86,
                '204451' => 0.81,
                '204490' => 0.98,
                '204390' => 1,
                '204491' => 1,
                '204497' => 1,
                '204496' => 1,
                '204499' => 1,
                
            ];
            $sum11=0;$sum12=0;$sum13=0;
            $sum14=0;$sum15=0;$sum16=0;$sum17=0;$sum21=0;
            $sum22=0;$sum23=0;$sum24=0;$sum25=0;$sum26=0;$sum27=0;$sum28=0;
            $sum31=0;$sum32=0;$sum33=0;$sum34=0;$sum41=0;$sum42=0;$sum43=0;
            $sum44=0;$sum45=0;$sum46=0;$sum51=0;$sum52=0;$sum53=0;$sum54=0;
            $a = 0;
            $k=0;
            $plo2=13;
            $plo3=26;
            $plo4=39;
            $plo5=52;
            $plo6=65;
            $_SESSION['total11']=array();
            $phpVariable = 1;
            $weight_score=$search->query_fetch_all("SELECT * from assessment where course_no = $getid  ORDER BY id Asc");

            $totalplo=$search->query_fetch("SELECT * from totalplo where PLO = 1  ORDER BY PLO Asc");
            $totalplo2=$search->query_fetch("SELECT * from totalplo where PLO = 2  ORDER BY PLO Asc");
            $totalplo3=$search->query_fetch("SELECT * from totalplo where PLO = 3  ORDER BY PLO Asc");
            $totalplo4=$search->query_fetch("SELECT * from totalplo where PLO = 4  ORDER BY PLO Asc");
            $totalplo5=$search->query_fetch("SELECT * from totalplo where PLO = 5  ORDER BY PLO Asc");
            $totalplo6=$search->query_fetch("SELECT * from totalplo where PLO = 6  ORDER BY PLO Asc");

            $weight_score_PLO=$search->query_fetch_all("SELECT * from weight_score_plo ORDER BY PLO,Subplo Asc");
           // echo count($weight_score);

            //sum each column
            $sumtqf11=$search->query_fetch("SELECT SUM(`1.1`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf12=$search->query_fetch("SELECT SUM(`1.2`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf13=$search->query_fetch("SELECT SUM(`1.3`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf14=$search->query_fetch("SELECT SUM(`1.4`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf15=$search->query_fetch("SELECT SUM(`1.5`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf16=$search->query_fetch("SELECT SUM(`1.6`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf17=$search->query_fetch("SELECT SUM(`1.7`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf21=$search->query_fetch("SELECT SUM(`2.1`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf22=$search->query_fetch("SELECT SUM(`2.2`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf23=$search->query_fetch("SELECT SUM(`2.3`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf24=$search->query_fetch("SELECT SUM(`2.4`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf25=$search->query_fetch("SELECT SUM(`2.5`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf26=$search->query_fetch("SELECT SUM(`2.6`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf27=$search->query_fetch("SELECT SUM(`2.7`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf28=$search->query_fetch("SELECT SUM(`2.8`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf31=$search->query_fetch("SELECT SUM(`3.1`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf32=$search->query_fetch("SELECT SUM(`3.2`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf33=$search->query_fetch("SELECT SUM(`3.3`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf34=$search->query_fetch("SELECT SUM(`3.4`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf41=$search->query_fetch("SELECT SUM(`4.1`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf42=$search->query_fetch("SELECT SUM(`4.2`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf43=$search->query_fetch("SELECT SUM(`4.3`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf44=$search->query_fetch("SELECT SUM(`4.4`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf45=$search->query_fetch("SELECT SUM(`4.5`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf46=$search->query_fetch("SELECT SUM(`4.6`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf51=$search->query_fetch("SELECT SUM(`5.1`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf52=$search->query_fetch("SELECT SUM(`5.2`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf53=$search->query_fetch("SELECT SUM(`5.3`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");
            $sumtqf54=$search->query_fetch("SELECT SUM(`5.4`) as sumtqf from assessment where course_no = $getid  ORDER BY id Asc");

            


        ?>


        

         <!-------------------------------------------------- TABLE---------------------------------------------------- -->
         <?php 
            
         
         if($phpVariable == 1) { ?>
         

                <div class="tablescore">
                <table>
        <h5 id="forh5"> Mapping</h5>

            <thead border="1px" align="center">  
                            
                <th><?php if($phpVariable == 1): echo 'คะแนนเต็ม'; endif;?></th>
                <th><?php if($phpVariable == 1): echo 'วิธีประเมิน'; endif;?></th>
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
                <th>4.4</th>
                <th>4.5</th>
                <th>4.6</th>
                <th>4.6</th>
                <th>5.1</th>
                <th>5.2</th>
                <th>5.3</th>
                <th>5.4</th>
               

            </thead>
            
            <tbody>
                        
                            <?php for($i=0;$i<count($weight_score);$i++) { 
                                ?> 

                                <tr> 
                                    <td id = "tdcolors2" align="center"><?php echo $weight_score[$i]["score"];echo "%"; ?></td>

                                    <td id = "tdcolors" align="center"><?php echo $assessment_name[$i]; ?></td>

                                    <td align="center"><?php if($weight_score[$i]["1.1"] > 0): echo 'x' ; else: echo $weight_score[$i]["1.1"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["1.2"] > 0): echo 'x' ; else: echo $weight_score[$i]["1.2"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["1.3"] > 0): echo 'x' ; else: echo $weight_score[$i]["1.3"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["1.4"] > 0): echo 'x' ; else: echo $weight_score[$i]["1.4"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["1.5"] > 0): echo 'x' ; else: echo $weight_score[$i]["1.5"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["1.6"] > 0): echo 'x' ; else: echo $weight_score[$i]["1.6"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["1.7"] > 0): echo 'x' ; else: echo $weight_score[$i]["1.7"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["2.1"] > 0): echo 'x' ; else: echo $weight_score[$i]["2.1"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["2.2"] > 0): echo 'x' ; else: echo $weight_score[$i]["2.2"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["2.3"] > 0): echo 'x' ; else: echo $weight_score[$i]["2.3"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["2.4"] > 0): echo 'x' ; else: echo $weight_score[$i]["2.4"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["2.5"] > 0): echo 'x' ; else: echo $weight_score[$i]["2.5"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["2.6"] > 0): echo 'x' ; else: echo $weight_score[$i]["2.6"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["2.7"] > 0): echo 'x' ; else: echo $weight_score[$i]["2.7"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["2.8"] > 0): echo 'x' ; else: echo $weight_score[$i]["2.8"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["3.1"] > 0): echo 'x' ; else: echo $weight_score[$i]["3.1"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["3.2"] > 0): echo 'x' ; else: echo $weight_score[$i]["3.2"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["3.3"] > 0): echo 'x' ; else: echo $weight_score[$i]["3.3"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["3.4"] > 0): echo 'x' ; else: echo $weight_score[$i]["3.4"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["4.1"] > 0): echo 'x' ; else: echo $weight_score[$i]["4.1"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["4.2"] > 0): echo 'x' ; else: echo $weight_score[$i]["4.2"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["4.3"] > 0): echo 'x' ; else: echo $weight_score[$i]["4.3"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["4.4"] > 0): echo 'x' ; else: echo $weight_score[$i]["4.4"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["4.5"] > 0): echo 'x' ; else: echo $weight_score[$i]["4.5"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["4.6"] > 0): echo 'x' ; else: echo $weight_score[$i]["4.6"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["5.1"] > 0): echo 'x' ; else: echo $weight_score[$i]["5.1"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["5.2"] > 0): echo 'x' ; else: echo $weight_score[$i]["5.2"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["5.3"] > 0): echo 'x' ; else: echo $weight_score[$i]["5.3"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["5.4"] > 0): echo 'x' ; else: echo $weight_score[$i]["5.4"]; endif; ?></td>
                                     

                                </tr>
                                <?php 
                                } ?>

 


                       


                                
                </tbody>


        </table>
<?php echo"<br>" ?>
        <table name="tables" border="1px" width='550px' height='100px'>
        <h5 id="forh5"> Weight </h5>
            
                    <thead border="1px" align="center">  
                        
                        <th><?php if($phpVariable == 1): echo 'คะแนนเต็ม'; else : echo 'PLO'; endif; ?></th>
                        <th><?php if($phpVariable == 1): echo 'วิธีประเมิน'; else : echo 'Subplo'; endif; ?></th>
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
                        <th>4.4</th>
                        <th>4.5</th>
                        <th>4.6</th>
                        <th>4.6</th>
                        <th>5.1</th>
                        <th>5.2</th>
                        <th>5.3</th>
                        <th>5.4</th>
                        
                </thead>
                <tbody>
                        
                            <?php for($i=0;$i<count($weight_score);$i++) { 
                                ?> 

                                <tr> 
                                    <td id = "tdcolors2" align="center"><?php echo $weight_score[$i]["score"];echo "%";  ?></td>

                                    <td id = "tdcolors" align="center"><?php echo $assessment_name[$i]; ?></td>

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
                                    

                                </tr>
                                <?php 
                                } ?>
                                
                                

                                <tr> 
                                    <td id = 'blankstyle' align="center"></td>

                                    <td id = 'blankstyle2' align="center"></td>

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
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf41['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf42['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf43['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf44['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf45['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf46['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf51['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf52['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf53['sumtqf'] ?></td>
                                    <td id = 'sumstyle' align="center"><?php echo $sumtqf54['sumtqf'] ?></td>
                                    

                                </tr>

                                <?php for($i=0;$i < count($weight_score) ;$i++) { 
                                    $totalsum2= array();
                                    $sum111 =  (float)$weight_score[$i]["1.1"]   ;
                                    $sum121 = (float)$weight_score[$i]["1.2"]  ;
                                    $sum131 = (float)$weight_score[$i]["1.3"]  ;
                                    $sum141 = (float)$weight_score[$i]["1.4"]  ;
                                    $sum151 = (float)$weight_score[$i]["1.5"]  ;
                                    $sum161 = (float)$weight_score[$i]["1.6"]  ;
                                    $sum171 = (float)$weight_score[$i]["1.7"]  ;
                                    $sum211 = (float)$weight_score[$i]["2.1"]  ;
                                    $sum221 = (float)$weight_score[$i]["2.2"]  ;
                                    $sum231 = (float)$weight_score[$i]["2.3"]  ;
                                    $sum241 = (float)$weight_score[$i]["2.4"]  ;
                                    $sum251 = (float)$weight_score[$i]["2.5"]  ;
                                    $sum261 = (float)$weight_score[$i]["2.6"]  ;
                                    $sum271 = (float)$weight_score[$i]["2.7"]  ;
                                    $sum281 = (float)$weight_score[$i]["2.8"]  ;
                                    $sum311 = (float)$weight_score[$i]["3.1"]  ;
                                    $sum321 = (float)$weight_score[$i]["3.2"]  ;
                                    $sum331 = (float)$weight_score[$i]["3.3"]  ;
                                    $sum341 = (float)$weight_score[$i]["3.4"]  ;
                                    $sum411 = (float)$weight_score[$i]["4.1"]  ;
                                    $sum421 = (float)$weight_score[$i]["4.2"]  ;
                                    $sum431 = (float)$weight_score[$i]["4.3"]  ;
                                    $sum441 = (float)$weight_score[$i]["4.4"]  ;
                                    $sum451 = (float)$weight_score[$i]["4.5"]  ;
                                    $sum461 = (float)$weight_score[$i]["4.6"]  ;
                                    $sum511 = (float)$weight_score[$i]["5.1"]  ;
                                    $sum521 = (float)$weight_score[$i]["5.2"]  ;
                                    $sum531 = (float)$weight_score[$i]["5.3"]  ;  
                                    $sum541 = (float)$weight_score[$i]["5.4"]  ;  
                                    
                                    
                                    $totalsum2 = $sum111 + $sum121 + $sum131 +
                                    $sum141 + $sum151 + $sum161 + $sum171 + $sum211 + $sum221 + $sum231 + $sum241 + $sum251 + $sum261 + $sum271 + $sum281+
                                    $sum311 + $sum321 + $sum331 + $sum341 + $sum411 + $sum421 + $sum431+
                                    $sum441 + $sum451 + $sum461 + $sum511 + $sum521 + $sum531 + $sum541;
                                    
                                    $j = $i;
                                    $j = $j +1;
                        
                                    
                                    $a = $search ->totalscore2($getid,$totalsum2, $j );
                                    
                                    } ?>
                                              
                </tbody>
                
        </table>

        <table>
        <h5 id="forh5"> Weight-score</h5>

            <thead border="1px" align="center">  
                            
                <th><?php if($phpVariable == 1): echo 'คะแนนเต็ม'; endif;?></th>
                <th><?php if($phpVariable == 1): echo 'วิธีประเมิน'; endif;?></th>
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
                <th>4.4</th>
                <th>4.5</th>
                <th>4.6</th>
                <th>4.6</th>
                <th>5.1</th>
                <th>5.2</th>
                <th>5.3</th>
                <th>5.4</th>
               

            </thead>
            
            <tbody>
                        
                            <?php for($i=0;$i<count($weight_score);$i++) { 
                                ?> 

                                <tr> 
                                    <td id = "tdcolors2" align="center"><?php echo $weight_score[$i]["score"];echo "%"; ?></td>

                                    <td id = "tdcolors" align="center"><?php echo $assessment_name[$i]; ?></td>

                                    <td align="center"><?php if($weight_score[$i]["1.1"] > 0): echo bcdiv($weight_score[$i]["1.1"] * $course_score[$getid] ,1 ,2) ;else: echo $weight_score[$i]["1.1"]; endif;?></td>
                                    <td align="center"><?php if($weight_score[$i]["1.2"] > 0): echo bcdiv($weight_score[$i]["1.2"] * $course_score[$getid] ,1 ,2) ;else: echo $weight_score[$i]["1.2"]; endif;?></td>
                                    <td align="center"><?php if($weight_score[$i]["1.3"] > 0): echo bcdiv($weight_score[$i]["1.3"] * $course_score[$getid] ,1 ,2) ;else: echo $weight_score[$i]["1.3"]; endif;?></td>
                                    <td align="center"><?php if($weight_score[$i]["1.4"] > 0): echo bcdiv($weight_score[$i]["1.4"] * $course_score[$getid] ,1 ,2) ;else: echo $weight_score[$i]["1.4"]; endif;?></td>
                                    <td align="center"><?php if($weight_score[$i]["1.5"] > 0): echo bcdiv($weight_score[$i]["1.5"] * $course_score[$getid] ,1 ,2) ;else: echo $weight_score[$i]["1.5"]; endif;?></td>
                                    <td align="center"><?php if($weight_score[$i]["1.6"] > 0): echo bcdiv($weight_score[$i]["1.6"] * $course_score[$getid] ,1 ,2) ;else: echo $weight_score[$i]["1.6"]; endif;?></td>
                                    <td align="center"><?php if($weight_score[$i]["1.7"] > 0): echo bcdiv($weight_score[$i]["1.7"] * $course_score[$getid] ,1 ,2) ;else: echo $weight_score[$i]["1.7"]; endif;?></td>
                                    <td align="center"><?php if($weight_score[$i]["2.1"] > 0): echo bcdiv($weight_score[$i]["2.1"] * $course_score[$getid] ,1,2) ; else: echo $weight_score[$i]["2.1"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["2.2"] > 0): echo bcdiv($weight_score[$i]["2.2"] * $course_score[$getid] ,1,2) ; else: echo $weight_score[$i]["2.2"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["2.3"] > 0): echo bcdiv($weight_score[$i]["2.3"] * $course_score[$getid] ,1,2) ; else: echo $weight_score[$i]["2.3"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["2.4"] > 0): echo bcdiv($weight_score[$i]["2.4"] * $course_score[$getid] ,1,2) ; else: echo $weight_score[$i]["2.4"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["2.5"] > 0): echo bcdiv($weight_score[$i]["2.5"] * $course_score[$getid] ,1,2) ; else: echo $weight_score[$i]["2.5"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["2.6"] > 0): echo bcdiv($weight_score[$i]["2.6"] * $course_score[$getid] ,1,2) ; else: echo $weight_score[$i]["2.6"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["2.7"] > 0): echo bcdiv($weight_score[$i]["2.7"] * $course_score[$getid] ,1,2) ; else: echo $weight_score[$i]["2.7"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["2.8"] > 0): echo bcdiv($weight_score[$i]["2.8"] * $course_score[$getid] ,1,2) ; else: echo $weight_score[$i]["2.8"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["3.1"] > 0): echo bcdiv($weight_score[$i]["3.1"] * $course_score[$getid] ,1,2) ; else: echo $weight_score[$i]["3.1"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["3.2"] > 0): echo bcdiv($weight_score[$i]["3.2"] * $course_score[$getid] ,1,2) ; else: echo $weight_score[$i]["3.2"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["3.3"] > 0): echo bcdiv($weight_score[$i]["3.3"] * $course_score[$getid] ,1,2) ; else: echo $weight_score[$i]["3.3"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["3.4"] > 0): echo bcdiv($weight_score[$i]["3.4"] * $course_score[$getid] ,1,2) ; else: echo $weight_score[$i]["3.4"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["4.1"] > 0): echo bcdiv($weight_score[$i]["4.1"] * $course_score[$getid] ,1,2) ; else: echo $weight_score[$i]["4.1"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["4.2"] > 0): echo bcdiv($weight_score[$i]["4.2"] * $course_score[$getid] ,1,2) ; else: echo $weight_score[$i]["4.2"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["4.3"] > 0): echo bcdiv($weight_score[$i]["4.3"] * $course_score[$getid] ,1,2) ; else: echo $weight_score[$i]["4.3"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["4.4"] > 0): echo bcdiv($weight_score[$i]["4.4"] * $course_score[$getid] ,1,2) ; else: echo $weight_score[$i]["4.4"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["4.5"] > 0): echo bcdiv($weight_score[$i]["4.5"] * $course_score[$getid] ,1,2) ; else: echo $weight_score[$i]["4.5"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["4.6"] > 0): echo bcdiv($weight_score[$i]["4.6"] * $course_score[$getid] ,1,2) ; else: echo $weight_score[$i]["4.6"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["5.1"] > 0): echo bcdiv($weight_score[$i]["5.1"] * $course_score[$getid] ,1,2) ; else: echo $weight_score[$i]["5.1"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["5.2"] > 0): echo bcdiv($weight_score[$i]["5.2"] * $course_score[$getid] ,1,2) ; else: echo $weight_score[$i]["5.2"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["5.3"] > 0): echo bcdiv($weight_score[$i]["5.3"] * $course_score[$getid] ,1,2) ; else: echo $weight_score[$i]["5.3"]; endif; ?></td>
                                    <td align="center"><?php if($weight_score[$i]["5.4"] > 0): echo bcdiv($weight_score[$i]["5.4"] * $course_score[$getid] ,1,2) ; else: echo $weight_score[$i]["5.4"]; endif; ?></td>
                                     

                                </tr>
                                <?php 
                                } ?>

                                <?php //$divide = (int)(count($weight_score)/2); echo $divide; 
                                for($i=0;$i < count($weight_score) ;$i++) {
                              
                                     if($weight_score[$i]["1.1"] > 0){$sum11 += bcdiv($weight_score[$i]["1.1"] * $course_score[$getid],1 ,2);} 
                                     if($weight_score[$i]["1.2"] > 0){$sum12 += bcdiv($weight_score[$i]["1.2"] * $course_score[$getid] ,1,2);}
                                    if($weight_score[$i]["1.3"] > 0){ $sum13 += bcdiv($weight_score[$i]["1.3"] * $course_score[$getid] ,1,2);}
                                    if($weight_score[$i]["1.4"] > 0){ $sum14 += bcdiv($weight_score[$i]["1.4"] * $course_score[$getid] ,1,2);}
                                    if($weight_score[$i]["1.5"] > 0){ $sum15 += bcdiv($weight_score[$i]["1.5"] * $course_score[$getid] ,1,2);}
                                    if($weight_score[$i]["1.6"] > 0){ $sum16 += bcdiv($weight_score[$i]["1.6"] * $course_score[$getid] ,1,2);}
                                    if($weight_score[$i]["1.7"] > 0){ $sum17 += bcdiv($weight_score[$i]["1.7"] * $course_score[$getid] ,1,2);}
                                    if($weight_score[$i]["2.1"] > 0){ $sum21 += bcdiv($weight_score[$i]["2.1"] * $course_score[$getid] ,1,2);}               
                                    if($weight_score[$i]["2.2"] > 0){ $sum22 += bcdiv($weight_score[$i]["2.2"] * $course_score[$getid] ,1,2) ;}
                                    if($weight_score[$i]["2.3"] > 0){ $sum23 += bcdiv($weight_score[$i]["2.3"] * $course_score[$getid] ,1,2) ;}
                                    if($weight_score[$i]["2.4"] > 0){ $sum24 += bcdiv($weight_score[$i]["2.4"] * $course_score[$getid] ,1,2) ;}
                                    if($weight_score[$i]["2.5"] > 0){ $sum25 += bcdiv($weight_score[$i]["2.5"] * $course_score[$getid] ,1,2) ;}
                                    if($weight_score[$i]["2.6"] > 0){ $sum26 += bcdiv($weight_score[$i]["2.6"] * $course_score[$getid] ,1,2) ;}
                                    if($weight_score[$i]["2.7"] > 0){ $sum27 += bcdiv($weight_score[$i]["2.7"] * $course_score[$getid] ,1,2) ;}
                                    if($weight_score[$i]["2.8"] > 0){ $sum28 += bcdiv($weight_score[$i]["2.8"] * $course_score[$getid] ,1,2) ;}
                                    if($weight_score[$i]["3.1"] > 0){ $sum31 += bcdiv($weight_score[$i]["3.1"] * $course_score[$getid] ,1,2) ;}
                                    if($weight_score[$i]["3.2"] > 0){ $sum32 += bcdiv($weight_score[$i]["3.2"] * $course_score[$getid] ,1,2) ;}
                                    if($weight_score[$i]["3.3"] > 0){ $sum33 += bcdiv($weight_score[$i]["3.3"] * $course_score[$getid] ,1,2) ;}
                                    if($weight_score[$i]["3.4"] > 0){ $sum34 += bcdiv($weight_score[$i]["3.4"] * $course_score[$getid] ,1,2) ;}
                                    if($weight_score[$i]["4.1"] > 0){ $sum41 += bcdiv($weight_score[$i]["4.1"] * $course_score[$getid] ,1,2) ;}
                                    if($weight_score[$i]["4.2"] > 0){ $sum42 += bcdiv($weight_score[$i]["4.2"] * $course_score[$getid] ,1,2) ;}
                                    if($weight_score[$i]["4.3"] > 0){ $sum43 += bcdiv($weight_score[$i]["4.3"] * $course_score[$getid] ,1,2) ;}
                                    if($weight_score[$i]["4.4"] > 0){ $sum44 += bcdiv($weight_score[$i]["4.4"] * $course_score[$getid] ,1,2) ;}
                                    if($weight_score[$i]["4.5"] > 0){ $sum45 += bcdiv($weight_score[$i]["4.5"] * $course_score[$getid] ,1,2) ;}
                                    if($weight_score[$i]["4.6"] > 0){ $sum46 += bcdiv($weight_score[$i]["4.6"] * $course_score[$getid] ,1,2) ;}
                                    if($weight_score[$i]["5.1"] > 0){ $sum51 += bcdiv($weight_score[$i]["5.1"] * $course_score[$getid] ,1,2) ;}
                                    if($weight_score[$i]["5.2"] > 0){ $sum52 += bcdiv($weight_score[$i]["5.2"] * $course_score[$getid] ,1,2) ;}
                                    if($weight_score[$i]["5.3"] > 0){ $sum53 += bcdiv($weight_score[$i]["5.3"] * $course_score[$getid] ,1,2) ;}   
                                    if($weight_score[$i]["5.4"] > 0){ $sum54 += bcdiv($weight_score[$i]["5.4"] * $course_score[$getid] ,1,2) ;}   
                                    
                                    //echo( $weight_score[5]["1.2"] * $course_score[$getid]);
                                    


                                     
                                    
                                   // $a += $sum21 + $sum22 +$sum31 + $sum34 ;
                                    //array_push($_SESSION['total11'], $a); 
                                    //echo $_SESSION['total11'][0]; 

                                     
                                } 
                                if($sum11==0){ $sum11=null;}if($sum12==0){$sum12=null;}if($sum13==0){$sum13=null;}if($sum14==0){$sum14=null;}if($sum15==0){$sum15=null;}
                                if($sum16==0){$sum16=null;}if($sum17==0){$sum17=null;}if($sum21==0){$sum21=null;}if($sum22==0){$sum22=null;}if($sum23==0){$sum23=null;}
                                if($sum24==0){$sum24=null;}if($sum25==0){$sum25=null;}if($sum26==0){$sum26=null;}if($sum27==0){$sum27=null;}if($sum28==0){$sum28=null;}
                                if($sum31==0){$sum31=null;}if($sum32==0){$sum32=null;}if($sum33==0){$sum33=null;}if($sum34==0){$sum34=null;}if($sum41==0){$sum41=null;}
                                if($sum42==0){$sum42=null;}if($sum43==0){$sum43=null;}if($sum44==0){$sum44=null;}if($sum45==0){$sum45=null;}if($sum46==0){$sum46=null;}
                                if($sum51==0){$sum51=null;}if($sum52==0){$sum52=null;}if($sum53==0){$sum53=null;}if($sum54==0){$sum54=null;}
                                
  
                                ?>

<tr> 
                                    <td id="blankstyle" align="center"></td>

                                    <td id="blankstyle2" align="center"></td>

                                    <td  id = 'sumstyle' align="center"><?php echo $sum11 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum12 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum13 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum14 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum15 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum16 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum17 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum21 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum22 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum23 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum24 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum25 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum26 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum27 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum28 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum31 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum32 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum33 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum34 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum41 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum42 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum43 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum44 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum45 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum46 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum51 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum52 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum53 ?></td>
                                    <td  id = 'sumstyle' align="center"><?php echo $sum54 ?></td>
                                     

                                </tr>

                                <?php for($i=0;$i < count($weight_score) ;$i++) {
                                    $totalsum= array();

                                    $sum11 = (float)$weight_score[$i]["1.1"] * (float)$course_score[$getid]   ;
                                    $sum12 = (float)$weight_score[$i]["1.2"] * (float)$course_score[$getid]  ;
                                    $sum13 = (float)$weight_score[$i]["1.3"] * (float)$course_score[$getid]  ;
                                    $sum14 = (float)$weight_score[$i]["1.4"] * (float)$course_score[$getid]  ;
                                    $sum15 = (float)$weight_score[$i]["1.5"] * (float)$course_score[$getid]  ;
                                    $sum16 = (float)$weight_score[$i]["1.6"] * (float)$course_score[$getid]  ;
                                    $sum17 = (float)$weight_score[$i]["1.7"] * (float)$course_score[$getid]  ;
                                    $sum21 = (float)$weight_score[$i]["2.1"] * (float)$course_score[$getid]  ;
                                    $sum22 = (float)$weight_score[$i]["2.2"] * (float)$course_score[$getid]  ;
                                    $sum23 = (float)$weight_score[$i]["2.3"] * (float)$course_score[$getid]  ;
                                    $sum24 = (float)$weight_score[$i]["2.4"] * (float)$course_score[$getid]  ;
                                    $sum25 = (float)$weight_score[$i]["2.5"] * (float)$course_score[$getid]  ;
                                    $sum26 = (float)$weight_score[$i]["2.6"] * (float)$course_score[$getid]  ;
                                    $sum27 = (float)$weight_score[$i]["2.7"] * (float)$course_score[$getid]  ;
                                    $sum28 = (float)$weight_score[$i]["2.8"] * (float)$course_score[$getid]  ;
                                    $sum31 = (float)$weight_score[$i]["3.1"] * (float)$course_score[$getid]  ;
                                    $sum32 = (float)$weight_score[$i]["3.2"] * (float)$course_score[$getid]  ;
                                    $sum33 = (float)$weight_score[$i]["3.3"] * (float)$course_score[$getid]  ;
                                    $sum34 = (float)$weight_score[$i]["3.4"] * (float)$course_score[$getid]  ;
                                    $sum41 = (float)$weight_score[$i]["4.1"] * (float)$course_score[$getid]  ;
                                    $sum42 = (float)$weight_score[$i]["4.2"] * (float)$course_score[$getid]  ;
                                    $sum43 = (float)$weight_score[$i]["4.3"] * (float)$course_score[$getid]  ;
                                    $sum44 = (float)$weight_score[$i]["4.4"] * (float)$course_score[$getid]  ;
                                    $sum45 = (float)$weight_score[$i]["4.5"] * (float)$course_score[$getid]  ;
                                    $sum46 = (float)$weight_score[$i]["4.6"] * (float)$course_score[$getid]  ;
                                    $sum51 = (float)$weight_score[$i]["5.1"] * (float)$course_score[$getid]  ;
                                    $sum52 = (float)$weight_score[$i]["5.2"] * (float)$course_score[$getid]  ;
                                    $sum53 = (float)$weight_score[$i]["5.3"] * (float)$course_score[$getid]  ;  
                                    $sum54 = (float)$weight_score[$i]["5.4"] * (float)$course_score[$getid]  ;  
                                    
                                    
                                    $totalsum = 
                                    $sum11 + 
                                    $sum12+
                                    $sum13+
                                    $sum14+
                                    $sum15 + 
                                    $sum16 + 
                                    $sum17 + 
                                    $sum21 +
                                    $sum22+
                                    $sum23 + 
                                    $sum24 + 
                                    $sum25 + 
                                    $sum26+
                                    $sum27 + 
                                    $sum28+
                                    $sum31+
                                    $sum32 + 
                                    $sum33 + 
                                    $sum34 + 
                                    $sum41+
                                    $sum42 + 
                                    $sum43+
                                    $sum44+
                                    $sum45 + 
                                    $sum46 + 
                                    $sum51 + 
                                    $sum52+
                                    $sum53 + 
                                    $sum54;
                                    
                                    $j = $i;
                                    $j = $j +1;
                                    
                                   
                                    
                                    $a = $search ->totalscore($getid,$totalsum, $j );
                            // $a += $sum21 + $sum22 +$sum31 + $sum34 ;
                             //array_push($_SESSION['total11'], $a); 
                             //echo $_SESSION['total11'][0]; 

                              
                                } ?>
                       


                                
                </tbody>


        </table>


        <table>
        <h5 id="forh5"> PLO 1</h5>

        <thead border="1px" align="center">  
                        
            <th><?php if($phpVariable == 1): echo 'คะแนนเต็ม'; endif;?></th>
            <th><?php if($phpVariable == 1): echo 'วิธีประเมิน'; endif;?></th>
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
            <th>4.4</th>
            <th>4.5</th>
            <th>4.6</th>
            <th>4.6</th>
            <th>5.1</th>
            <th>5.2</th>
            <th>5.3</th>
            <th>5.4</th>
        

        </thead>

        <tbody>
            
                    <?php for($i=0;$i<count($weight_score);$i++) { 
                         ?>
                    <tr> 
                        <td id = "tdcolors2" align="center"><?php echo $weight_score[$i]["score"];echo "%"; ?></td>

                        <td id = "tdcolors" align="center"><?php echo $assessment_name[$i]; ?></td>

                        <td align="center"><?php if($weight_score[$i]["1.1"] > 0): echo (bcdiv($weight_score[$i]["1.1"]  * (float)$totalplo["1.1"]  ,1 ,2)); else: echo $weight_score[$i]["1.1"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.2"] > 0): echo (bcdiv($weight_score[$i]["1.2"]  * (float)$totalplo["1.2"]  ,1 ,2)); else: echo $weight_score[$i]["1.2"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.3"] > 0): echo (bcdiv($weight_score[$i]["1.3"]  * (float)$totalplo["1.3"]  ,1 ,2)); else: echo $weight_score[$i]["1.3"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.4"] > 0): echo (bcdiv($weight_score[$i]["1.4"]  * (float)$totalplo["1.4"]  ,1 ,2)); else: echo $weight_score[$i]["1.4"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.5"] > 0): echo (bcdiv($weight_score[$i]["1.5"]  * (float)$totalplo["1.5"]  ,1 ,2)); else: echo $weight_score[$i]["1.5"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.6"] > 0): echo (bcdiv($weight_score[$i]["1.6"]  * (float)$totalplo["1.6"]  ,1 ,2)); else: echo $weight_score[$i]["1.6"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.7"] > 0): echo (bcdiv($weight_score[$i]["1.7"]  * (float)$totalplo["1.7"]  ,1 ,2)); else: echo $weight_score[$i]["1.7"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["2.1"] > 0): echo (bcdiv($weight_score[$i]["2.1"]  * (float)$totalplo["2.1"]  ,1,2)) ; else: echo $weight_score[$i]["2.1"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.2"] > 0): echo (bcdiv($weight_score[$i]["2.2"] *  (float)$totalplo["2.2"]  ,1,2)) ; else: echo $weight_score[$i]["2.2"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.3"] > 0): echo (bcdiv($weight_score[$i]["2.3"] *  (float)$totalplo["2.3"]  ,1,2)) ; else: echo $weight_score[$i]["2.3"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.4"] > 0): echo (bcdiv($weight_score[$i]["2.4"] *  (float)$totalplo["2.4"]  ,1,2)) ; else: echo $weight_score[$i]["2.4"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.5"] > 0): echo (bcdiv($weight_score[$i]["2.5"] *  (float)$totalplo["2.5"]  ,1,2)) ; else: echo $weight_score[$i]["2.5"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.6"] > 0): echo (bcdiv($weight_score[$i]["2.6"] *  (float)$totalplo["2.6"]  ,1,2)) ; else: echo $weight_score[$i]["2.6"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.7"] > 0): echo (bcdiv($weight_score[$i]["2.7"] *  (float)$totalplo["2.7"]  ,1,2)) ; else: echo $weight_score[$i]["2.7"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.8"] > 0): echo (bcdiv($weight_score[$i]["2.8"] *  (float)$totalplo["2.8"]  ,1,2)) ; else: echo $weight_score[$i]["2.8"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["3.1"] > 0): echo (bcdiv($weight_score[$i]["3.1"] *  (float)$totalplo["3.1"]  ,1,2)) ; else: echo $weight_score[$i]["3.1"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["3.2"] > 0): echo (bcdiv($weight_score[$i]["3.2"] *  (float)$totalplo["3.2"]  ,1,2)) ; else: echo $weight_score[$i]["3.2"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["3.3"] > 0): echo (bcdiv($weight_score[$i]["3.3"] *  (float)$totalplo["3.3"]  ,1,2)) ; else: echo $weight_score[$i]["3.3"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["3.4"] > 0): echo (bcdiv($weight_score[$i]["3.4"] *  (float)$totalplo["3.4"]  ,1,2)) ; else: echo $weight_score[$i]["3.4"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.1"] > 0): echo (bcdiv($weight_score[$i]["4.1"] *  (float)$totalplo["4.1"]  ,1,2)) ; else: echo $weight_score[$i]["4.1"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.2"] > 0): echo (bcdiv($weight_score[$i]["4.2"] *  (float)$totalplo["4.2"]  ,1,2)) ; else: echo $weight_score[$i]["4.2"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.3"] > 0): echo (bcdiv($weight_score[$i]["4.3"] *  (float)$totalplo["4.3"]  ,1,2)) ; else: echo $weight_score[$i]["4.3"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.4"] > 0): echo (bcdiv($weight_score[$i]["4.4"] *  (float)$totalplo["4.4"]  ,1,2)) ; else: echo $weight_score[$i]["4.4"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.5"] > 0): echo (bcdiv($weight_score[$i]["4.5"] *  (float)$totalplo["4.5"]  ,1,2)) ; else: echo $weight_score[$i]["4.5"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.6"] > 0): echo (bcdiv($weight_score[$i]["4.6"] *  (float)$totalplo["4.6"]  ,1,2)) ; else: echo $weight_score[$i]["4.6"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["5.1"] > 0): echo (bcdiv($weight_score[$i]["5.1"] *  (float)$totalplo["5.1"]  ,1,2)) ; else: echo $weight_score[$i]["5.1"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["5.2"] > 0): echo (bcdiv($weight_score[$i]["5.2"] *  (float)$totalplo["5.2"]  ,1,2)) ; else: echo $weight_score[$i]["5.2"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["5.3"] > 0): echo (bcdiv($weight_score[$i]["5.3"] *  (float)$totalplo["5.3"]  ,1,2)) ; else: echo $weight_score[$i]["5.3"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["5.4"] > 0): echo (bcdiv($weight_score[$i]["5.4"] *  (float)$totalplo["5.4"]  ,1,2)) ; else: echo $weight_score[$i]["5.4"]; endif; ?></td>

                    </tr>
                            <?php } ?>

                            <?php for($i=0;$i<count($weight_score);$i++) { 

                                if($weight_score[$i]["1.1"] > 0){ (bcdiv($weight_score[$i]["1.1"]  *  (float)$totalplo["1.1"],2))  ;}
                                if($weight_score[$i]["1.2"] > 0){ (bcdiv($weight_score[$i]["1.2"]  *  (float)$totalplo["1.2"],2))  ;}
                                if($weight_score[$i]["1.3"] > 0){ (bcdiv($weight_score[$i]["1.3"]  *  (float)$totalplo["1.3"],2))  ;}
                                if($weight_score[$i]["1.4"] > 0){ (bcdiv($weight_score[$i]["1.4"]  *  (float)$totalplo["1.4"],2))  ;}
                                if($weight_score[$i]["1.5"] > 0){ (bcdiv($weight_score[$i]["1.5"]  *  (float)$totalplo["1.5"],2))  ;}
                                if($weight_score[$i]["1.6"] > 0){ (bcdiv($weight_score[$i]["1.6"]  *  (float)$totalplo["1.6"],2))  ;}
                                if($weight_score[$i]["1.7"] > 0){ (bcdiv($weight_score[$i]["1.7"]  *  (float)$totalplo["1.7"],2))  ;}
                                if($weight_score[$i]["2.1"] > 0){ (bcdiv($weight_score[$i]["2.1"]  *  (float)$totalplo["2.1"],2))  ;}
                                if($weight_score[$i]["2.2"] > 0){ (bcdiv($weight_score[$i]["2.2"]  *  (float)$totalplo["2.2"],2))  ;}
                                if($weight_score[$i]["2.3"] > 0){ (bcdiv($weight_score[$i]["2.3"]  *  (float)$totalplo["2.3"],2))  ;}
                                if($weight_score[$i]["2.4"] > 0){ (bcdiv($weight_score[$i]["2.4"]  *  (float)$totalplo["2.4"],2))  ;}
                                if($weight_score[$i]["2.5"] > 0){ (bcdiv($weight_score[$i]["2.5"]  *  (float)$totalplo["2.5"],2))  ;}
                                if($weight_score[$i]["2.6"] > 0){ (bcdiv($weight_score[$i]["2.6"]  *  (float)$totalplo["2.6"],2))  ;}
                                if($weight_score[$i]["2.7"] > 0){ (bcdiv($weight_score[$i]["2.7"]  *  (float)$totalplo["2.7"],2))  ;}
                                if($weight_score[$i]["2.8"] > 0){ (bcdiv($weight_score[$i]["2.8"]  *  (float)$totalplo["2.8"],2))  ;}
                                if($weight_score[$i]["3.1"] > 0){ (bcdiv($weight_score[$i]["3.1"]  *  (float)$totalplo["3.1"],2))  ;}
                                if($weight_score[$i]["3.2"] > 0){ (bcdiv($weight_score[$i]["3.2"]  *  (float)$totalplo["3.2"],2))  ;}
                                if($weight_score[$i]["3.3"] > 0){ (bcdiv($weight_score[$i]["3.3"]  *  (float)$totalplo["3.3"],2))  ;}
                                if($weight_score[$i]["3.4"] > 0){ (bcdiv($weight_score[$i]["3.4"]  *  (float)$totalplo["3.4"],2))  ;}
                                if($weight_score[$i]["4.1"] > 0){ (bcdiv($weight_score[$i]["4.1"]  *  (float)$totalplo["4.1"],2))  ;}
                                if($weight_score[$i]["4.2"] > 0){ (bcdiv($weight_score[$i]["4.2"]  *  (float)$totalplo["4.2"],2))  ;}
                                if($weight_score[$i]["4.3"] > 0){ (bcdiv($weight_score[$i]["4.3"]  *  (float)$totalplo["4.3"],2))  ;}
                                if($weight_score[$i]["4.4"] > 0){ (bcdiv($weight_score[$i]["4.4"]  *  (float)$totalplo["4.4"],2))  ;}
                                if($weight_score[$i]["4.5"] > 0){ (bcdiv($weight_score[$i]["4.5"]  *  (float)$totalplo["4.5"],2))  ;}
                                if($weight_score[$i]["4.6"] > 0){ (bcdiv($weight_score[$i]["4.6"]  *  (float)$totalplo["4.6"],2))  ;}
                                if($weight_score[$i]["5.1"] > 0){ (bcdiv($weight_score[$i]["5.1"]  *  (float)$totalplo["5.1"],2))  ;}
                                if($weight_score[$i]["5.2"] > 0){ (bcdiv($weight_score[$i]["5.2"]  *  (float)$totalplo["5.2"],2))  ;}
                                if($weight_score[$i]["5.3"] > 0){ (bcdiv($weight_score[$i]["5.3"]  *  (float)$totalplo["5.3"],2))  ;}
                                if($weight_score[$i]["5.4"] > 0){ (bcdiv($weight_score[$i]["5.4"]  *  (float)$totalplo["5.4"],2))  ;}
                                

                                } // $a += $sum21 + $sum22 +$sum31 + $sum34 ;
                                //array_push($_SESSION['total11'], $a); 
                                //echo $_SESSION['total11'][0];
                                
                                ?>
                                <?php for($i=0;$i < count($weight_score) ;$i++) {
                                    $totalsum= array();
                                    $sum11 = (float)$weight_score[$i]["1.1"]   *  (float)$totalplo["1.1"]  ;
                                    $sum12 = (float)$weight_score[$i]["1.2"]   * (float)$totalplo["1.2"] ;
                                    $sum13 = (float)$weight_score[$i]["1.3"]   * (float)$totalplo["1.3"] ;
                                    $sum14 = (float)$weight_score[$i]["1.4"]   * (float)$totalplo["1.4"] ;
                                    $sum15 = (float)$weight_score[$i]["1.5"]   * (float)$totalplo["1.5"] ;
                                    $sum16 = (float)$weight_score[$i]["1.6"]   * (float)$totalplo["1.6"] ;
                                    $sum17 = (float)$weight_score[$i]["1.7"]   * (float)$totalplo["1.7"] ;
                                    $sum21 = (float)$weight_score[$i]["2.1"]   * (float)$totalplo["2.1"] ;
                                    $sum22 = (float)$weight_score[$i]["2.2"]  *  (float)$totalplo["2.2"] ;
                                    $sum23 = (float)$weight_score[$i]["2.3"]  *  (float)$totalplo["2.3"] ;
                                    $sum24 = (float)$weight_score[$i]["2.4"]  *  (float)$totalplo["2.4"] ;
                                    $sum25 = (float)$weight_score[$i]["2.5"]  *  (float)$totalplo["2.5"] ;
                                    $sum26 = (float)$weight_score[$i]["2.6"]  *  (float)$totalplo["2.6"] ;
                                    $sum27 = (float)$weight_score[$i]["2.7"]  *  (float)$totalplo["2.7"] ;
                                    $sum28 = (float)$weight_score[$i]["2.8"]  *  (float)$totalplo["2.8"] ;
                                    $sum31 = (float)$weight_score[$i]["3.1"]  *  (float)$totalplo["3.1"] ;
                                    $sum32 = (float)$weight_score[$i]["3.2"]  *  (float)$totalplo["3.2"] ;
                                    $sum33 = (float)$weight_score[$i]["3.3"]  *  (float)$totalplo["3.3"] ;
                                    $sum34 = (float)$weight_score[$i]["3.4"]  *  (float)$totalplo["3.4"] ;
                                    $sum41 = (float)$weight_score[$i]["4.1"]  *  (float)$totalplo["4.1"] ;
                                    $sum42 = (float)$weight_score[$i]["4.2"]  *  (float)$totalplo["4.2"] ;
                                    $sum43 = (float)$weight_score[$i]["4.3"]  *  (float)$totalplo["4.3"] ;
                                    $sum44 = (float)$weight_score[$i]["4.4"]  *  (float)$totalplo["4.4"] ;
                                    $sum45 = (float)$weight_score[$i]["4.5"]  *  (float)$totalplo["4.5"] ;
                                    $sum46 = (float)$weight_score[$i]["4.6"]  *  (float)$totalplo["4.6"] ;
                                    $sum51 = (float)$weight_score[$i]["5.1"]  *  (float)$totalplo["5.1"] ;
                                    $sum52 = (float)$weight_score[$i]["5.2"]  *  (float)$totalplo["5.2"] ;
                                    $sum53 = (float)$weight_score[$i]["5.3"]  *  (float)$totalplo["5.3"] ;  
                                    $sum54 = (float)$weight_score[$i]["5.4"]  *  (float)$totalplo["5.4"] ;  
                                    
                                    
                                    $totalsum = 
                                    $sum11 + 
                                    $sum12+
                                    $sum13+
                                    $sum14+
                                    $sum15 + 
                                    $sum16 + 
                                    $sum17 + 
                                    $sum21 +
                                    $sum22+
                                    $sum23 + 
                                    $sum24 + 
                                    $sum25 + 
                                    $sum26+
                                    $sum27 + 
                                    $sum28+
                                    $sum31+
                                    $sum32 + 
                                    $sum33 + 
                                    $sum34 + 
                                    $sum41+
                                    $sum42 + 
                                    $sum43+
                                    $sum44+
                                    $sum45 + 
                                    $sum46 + 
                                    $sum51 + 
                                    $sum52+
                                    $sum53 + 
                                    $sum54;
                                    
                                    $j = $i;
                                    $j = $j +1;
                                    
                                    $a = $search ->totalscore3($getid,$totalsum, $j );
                        
                                  
                                   
                            // $a += $sum21 + $sum22 +$sum31 + $sum34 ;
                             //array_push($_SESSION['total11'], $a); 
                             //echo $_SESSION['total11'][0]; 

                              
                                } ?>
                            
    </tbody>


</table>
<?php echo "<br>"; ?>
<table>
        <h5 id="forh5"> PLO 2</h5>

        <thead border="1px" align="center">  
                        
            <th><?php if($phpVariable == 1): echo 'คะแนนเต็ม'; endif;?></th>
            <th><?php if($phpVariable == 1): echo 'วิธีประเมิน'; endif;?></th>
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
            <th>4.4</th>
            <th>4.5</th>
            <th>4.6</th>
            <th>4.6</th>
            <th>5.1</th>
            <th>5.2</th>
            <th>5.3</th>
            <th>5.4</th>
        

        </thead>

        <tbody>
            
                    <?php for($i=0;$i<count($weight_score);$i++) { 
                         ?>
                    <tr> 
                        <td id = "tdcolors2" align="center"><?php echo $weight_score[$i]["score"];echo "%"; ?></td>

                        <td id = "tdcolors" align="center"><?php echo $assessment_name[$i]; ?></td>

                        <td align="center"><?php if($weight_score[$i]["1.1"] > 0): echo (bcdiv($weight_score[$i]["1.1"]  * (float)$totalplo2["1.1"]  ,1 ,2)); else: echo $weight_score[$i]["1.1"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.2"] > 0): echo (bcdiv($weight_score[$i]["1.2"]  * (float)$totalplo2["1.2"]  ,1 ,2)); else: echo $weight_score[$i]["1.2"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.3"] > 0): echo (bcdiv($weight_score[$i]["1.3"]  * (float)$totalplo2["1.3"]  ,1 ,2)); else: echo $weight_score[$i]["1.3"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.4"] > 0): echo (bcdiv($weight_score[$i]["1.4"]  * (float)$totalplo2["1.4"]  ,1 ,2)); else: echo $weight_score[$i]["1.4"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.5"] > 0): echo (bcdiv($weight_score[$i]["1.5"]  * (float)$totalplo2["1.5"]  ,1 ,2)); else: echo $weight_score[$i]["1.5"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.6"] > 0): echo (bcdiv($weight_score[$i]["1.6"]  * (float)$totalplo2["1.6"]  ,1 ,2)); else: echo $weight_score[$i]["1.6"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.7"] > 0): echo (bcdiv($weight_score[$i]["1.7"]  * (float)$totalplo2["1.7"]  ,1 ,2)); else: echo $weight_score[$i]["1.7"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["2.1"] > 0): echo (bcdiv($weight_score[$i]["2.1"]  * (float)$totalplo2["2.1"]  ,1,2)) ; else: echo $weight_score[$i]["2.1"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.2"] > 0): echo (bcdiv($weight_score[$i]["2.2"] *  (float)$totalplo2["2.2"]  ,1,2)) ; else: echo $weight_score[$i]["2.2"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.3"] > 0): echo (bcdiv($weight_score[$i]["2.3"] *  (float)$totalplo2["2.3"]  ,1,2)) ; else: echo $weight_score[$i]["2.3"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.4"] > 0): echo (bcdiv($weight_score[$i]["2.4"] *  (float)$totalplo2["2.4"]  ,1,2)) ; else: echo $weight_score[$i]["2.4"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.5"] > 0): echo (bcdiv($weight_score[$i]["2.5"] *  (float)$totalplo2["2.5"]  ,1,2)) ; else: echo $weight_score[$i]["2.5"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.6"] > 0): echo (bcdiv($weight_score[$i]["2.6"] *  (float)$totalplo2["2.6"]  ,1,2)) ; else: echo $weight_score[$i]["2.6"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.7"] > 0): echo (bcdiv($weight_score[$i]["2.7"] *  (float)$totalplo2["2.7"]  ,1,2)) ; else: echo $weight_score[$i]["2.7"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.8"] > 0): echo (bcdiv($weight_score[$i]["2.8"] *  (float)$totalplo2["2.8"]  ,1,2)) ; else: echo $weight_score[$i]["2.8"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["3.1"] > 0): echo (bcdiv($weight_score[$i]["3.1"] *  (float)$totalplo2["3.1"]  ,1,2)) ; else: echo $weight_score[$i]["3.1"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["3.2"] > 0): echo (bcdiv($weight_score[$i]["3.2"] *  (float)$totalplo2["3.2"]  ,1,2)) ; else: echo $weight_score[$i]["3.2"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["3.3"] > 0): echo (bcdiv($weight_score[$i]["3.3"] *  (float)$totalplo2["3.3"]  ,1,2)) ; else: echo $weight_score[$i]["3.3"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["3.4"] > 0): echo (bcdiv($weight_score[$i]["3.4"] *  (float)$totalplo2["3.4"]  ,1,2)) ; else: echo $weight_score[$i]["3.4"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.1"] > 0): echo (bcdiv($weight_score[$i]["4.1"] *  (float)$totalplo2["4.1"]  ,1,2)) ; else: echo $weight_score[$i]["4.1"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.2"] > 0): echo (bcdiv($weight_score[$i]["4.2"] *  (float)$totalplo2["4.2"]  ,1,2)) ; else: echo $weight_score[$i]["4.2"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.3"] > 0): echo (bcdiv($weight_score[$i]["4.3"] *  (float)$totalplo2["4.3"]  ,1,2)) ; else: echo $weight_score[$i]["4.3"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.4"] > 0): echo (bcdiv($weight_score[$i]["4.4"] *  (float)$totalplo2["4.4"]  ,1,2)) ; else: echo $weight_score[$i]["4.4"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.5"] > 0): echo (bcdiv($weight_score[$i]["4.5"] *  (float)$totalplo2["4.5"]  ,1,2)) ; else: echo $weight_score[$i]["4.5"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.6"] > 0): echo (bcdiv($weight_score[$i]["4.6"] *  (float)$totalplo2["4.6"]  ,1,2)) ; else: echo $weight_score[$i]["4.6"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["5.1"] > 0): echo (bcdiv($weight_score[$i]["5.1"] *  (float)$totalplo2["5.1"]  ,1,2)) ; else: echo $weight_score[$i]["5.1"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["5.2"] > 0): echo (bcdiv($weight_score[$i]["5.2"] *  (float)$totalplo2["5.2"]  ,1,2)) ; else: echo $weight_score[$i]["5.2"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["5.3"] > 0): echo (bcdiv($weight_score[$i]["5.3"] *  (float)$totalplo2["5.3"]  ,1,2)) ; else: echo $weight_score[$i]["5.3"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["5.4"] > 0): echo (bcdiv($weight_score[$i]["5.4"] *  (float)$totalplo2["5.4"]  ,1,2)) ; else: echo $weight_score[$i]["5.4"]; endif; ?></td>

                    </tr>
                            <?php } ?>

                            <?php for($i=0;$i<count($weight_score);$i++) { 

                                if($weight_score[$i]["1.1"] > 0){ (bcdiv($weight_score[$i]["1.1"]  *  (float)$totalplo2["1.1"],2))  ;}
                                if($weight_score[$i]["1.2"] > 0){ (bcdiv($weight_score[$i]["1.2"]  *  (float)$totalplo2["1.2"],2))  ;}
                                if($weight_score[$i]["1.3"] > 0){ (bcdiv($weight_score[$i]["1.3"]  *  (float)$totalplo2["1.3"],2))  ;}
                                if($weight_score[$i]["1.4"] > 0){ (bcdiv($weight_score[$i]["1.4"]  *  (float)$totalplo2["1.4"],2))  ;}
                                if($weight_score[$i]["1.5"] > 0){ (bcdiv($weight_score[$i]["1.5"]  *  (float)$totalplo2["1.5"],2))  ;}
                                if($weight_score[$i]["1.6"] > 0){ (bcdiv($weight_score[$i]["1.6"]  *  (float)$totalplo2["1.6"],2))  ;}
                                if($weight_score[$i]["1.7"] > 0){ (bcdiv($weight_score[$i]["1.7"]  *  (float)$totalplo2["1.7"],2))  ;}
                                if($weight_score[$i]["2.1"] > 0){ (bcdiv($weight_score[$i]["2.1"]  *  (float)$totalplo2["2.1"],2))  ;}
                                if($weight_score[$i]["2.2"] > 0){ (bcdiv($weight_score[$i]["2.2"]  *  (float)$totalplo2["2.2"],2))  ;}
                                if($weight_score[$i]["2.3"] > 0){ (bcdiv($weight_score[$i]["2.3"]  *  (float)$totalplo2["2.3"],2))  ;}
                                if($weight_score[$i]["2.4"] > 0){ (bcdiv($weight_score[$i]["2.4"]  *  (float)$totalplo2["2.4"],2))  ;}
                                if($weight_score[$i]["2.5"] > 0){ (bcdiv($weight_score[$i]["2.5"]  *  (float)$totalplo2["2.5"],2))  ;}
                                if($weight_score[$i]["2.6"] > 0){ (bcdiv($weight_score[$i]["2.6"]  *  (float)$totalplo2["2.6"],2))  ;}
                                if($weight_score[$i]["2.7"] > 0){ (bcdiv($weight_score[$i]["2.7"]  *  (float)$totalplo2["2.7"],2))  ;}
                                if($weight_score[$i]["2.8"] > 0){ (bcdiv($weight_score[$i]["2.8"]  *  (float)$totalplo2["2.8"],2))  ;}
                                if($weight_score[$i]["3.1"] > 0){ (bcdiv($weight_score[$i]["3.1"]  *  (float)$totalplo2["3.1"],2))  ;}
                                if($weight_score[$i]["3.2"] > 0){ (bcdiv($weight_score[$i]["3.2"]  *  (float)$totalplo2["3.2"],2))  ;}
                                if($weight_score[$i]["3.3"] > 0){ (bcdiv($weight_score[$i]["3.3"]  *  (float)$totalplo2["3.3"],2))  ;}
                                if($weight_score[$i]["3.4"] > 0){ (bcdiv($weight_score[$i]["3.4"]  *  (float)$totalplo2["3.4"],2))  ;}
                                if($weight_score[$i]["4.1"] > 0){ (bcdiv($weight_score[$i]["4.1"]  *  (float)$totalplo2["4.1"],2))  ;}
                                if($weight_score[$i]["4.2"] > 0){ (bcdiv($weight_score[$i]["4.2"]  *  (float)$totalplo2["4.2"],2))  ;}
                                if($weight_score[$i]["4.3"] > 0){ (bcdiv($weight_score[$i]["4.3"]  *  (float)$totalplo2["4.3"],2))  ;}
                                if($weight_score[$i]["4.4"] > 0){ (bcdiv($weight_score[$i]["4.4"]  *  (float)$totalplo2["4.4"],2))  ;}
                                if($weight_score[$i]["4.5"] > 0){ (bcdiv($weight_score[$i]["4.5"]  *  (float)$totalplo2["4.5"],2))  ;}
                                if($weight_score[$i]["4.6"] > 0){ (bcdiv($weight_score[$i]["4.6"]  *  (float)$totalplo2["4.6"],2))  ;}
                                if($weight_score[$i]["5.1"] > 0){ (bcdiv($weight_score[$i]["5.1"]  *  (float)$totalplo2["5.1"],2))  ;}
                                if($weight_score[$i]["5.2"] > 0){ (bcdiv($weight_score[$i]["5.2"]  *  (float)$totalplo2["5.2"],2))  ;}
                                if($weight_score[$i]["5.3"] > 0){ (bcdiv($weight_score[$i]["5.3"]  *  (float)$totalplo2["5.3"],2))  ;}
                                if($weight_score[$i]["5.4"] > 0){ (bcdiv($weight_score[$i]["5.4"]  *  (float)$totalplo2["5.4"],2))  ;}
                                

                                } // $a += $sum21 + $sum22 +$sum31 + $sum34 ;
                                //array_push($_SESSION['total11'], $a); 
                                //echo $_SESSION['total11'][0];
                                
                                ?>
                                <?php for($i=0;$i < count($weight_score) ;$i++) {
                                    $totalsum= array();
                                    $sum11 = (float)$weight_score[$i]["1.1"]   * (float)$totalplo2["1.1"]  ;
                                    $sum12 = (float)$weight_score[$i]["1.2"]   * (float)$totalplo2["1.2"] ;
                                    $sum13 = (float)$weight_score[$i]["1.3"]   * (float)$totalplo2["1.3"] ;
                                    $sum14 = (float)$weight_score[$i]["1.4"]   * (float)$totalplo2["1.4"] ;
                                    $sum15 = (float)$weight_score[$i]["1.5"]   * (float)$totalplo2["1.5"] ;
                                    $sum16 = (float)$weight_score[$i]["1.6"]   * (float)$totalplo2["1.6"] ;
                                    $sum17 = (float)$weight_score[$i]["1.7"]   * (float)$totalplo2["1.7"] ;
                                    $sum21 = (float)$weight_score[$i]["2.1"]   * (float)$totalplo2["2.1"] ;
                                    $sum22 = (float)$weight_score[$i]["2.2"]  *  (float)$totalplo2["2.2"] ;
                                    $sum23 = (float)$weight_score[$i]["2.3"]  *  (float)$totalplo2["2.3"] ;
                                    $sum24 = (float)$weight_score[$i]["2.4"]  *  (float)$totalplo2["2.4"] ;
                                    $sum25 = (float)$weight_score[$i]["2.5"]  *  (float)$totalplo2["2.5"] ;
                                    $sum26 = (float)$weight_score[$i]["2.6"]  *  (float)$totalplo2["2.6"] ;
                                    $sum27 = (float)$weight_score[$i]["2.7"]  *  (float)$totalplo2["2.7"] ;
                                    $sum28 = (float)$weight_score[$i]["2.8"]  *  (float)$totalplo2["2.8"] ;
                                    $sum31 = (float)$weight_score[$i]["3.1"]  *  (float)$totalplo2["3.1"] ;
                                    $sum32 = (float)$weight_score[$i]["3.2"]  *  (float)$totalplo2["3.2"] ;
                                    $sum33 = (float)$weight_score[$i]["3.3"]  *  (float)$totalplo2["3.3"] ;
                                    $sum34 = (float)$weight_score[$i]["3.4"]  *  (float)$totalplo2["3.4"] ;
                                    $sum41 = (float)$weight_score[$i]["4.1"]  *  (float)$totalplo2["4.1"] ;
                                    $sum42 = (float)$weight_score[$i]["4.2"]  *  (float)$totalplo2["4.2"] ;
                                    $sum43 = (float)$weight_score[$i]["4.3"]  *  (float)$totalplo2["4.3"] ;
                                    $sum44 = (float)$weight_score[$i]["4.4"]  *  (float)$totalplo2["4.4"] ;
                                    $sum45 = (float)$weight_score[$i]["4.5"]  *  (float)$totalplo2["4.5"] ;
                                    $sum46 = (float)$weight_score[$i]["4.6"]  *  (float)$totalplo2["4.6"] ;
                                    $sum51 = (float)$weight_score[$i]["5.1"]  *  (float)$totalplo2["5.1"] ;
                                    $sum52 = (float)$weight_score[$i]["5.2"]  *  (float)$totalplo2["5.2"] ;
                                    $sum53 = (float)$weight_score[$i]["5.3"]  *  (float)$totalplo2["5.3"] ;  
                                    $sum54 = (float)$weight_score[$i]["5.4"]  *  (float)$totalplo2["5.4"] ;  
                                    
                                    
                                    $totalsum = 
                                    $sum11 + 
                                    $sum12+
                                    $sum13+
                                    $sum14+
                                    $sum15 + 
                                    $sum16 + 
                                    $sum17 + 
                                    $sum21 +
                                    $sum22+
                                    $sum23 + 
                                    $sum24 + 
                                    $sum25 + 
                                    $sum26+
                                    $sum27 + 
                                    $sum28+
                                    $sum31+
                                    $sum32 + 
                                    $sum33 + 
                                    $sum34 + 
                                    $sum41+
                                    $sum42 + 
                                    $sum43+
                                    $sum44+
                                    $sum45 + 
                                    $sum46 + 
                                    $sum51 + 
                                    $sum52+
                                    $sum53 + 
                                    $sum54;
                                    
                                    $j = $plo2;
                                    $j = $j +1;
                                    $plo2 +=1;
                                    

                                    $a = $search ->totalscore3($getid,$totalsum, $j );
                                    
                        
                                  
                                   
                            // $a += $sum21 + $sum22 +$sum31 + $sum34 ;
                             //array_push($_SESSION['total11'], $a); 
                             //echo $_SESSION['total11'][0]; 

                              
                                } ?>
                            
    </tbody>


</table>
<?php echo "<br>"; ?>
<table>
        <h5 id="forh5"> PLO 3</h5>

        <thead border="1px" align="center">  
                        
            <th><?php  if($phpVariable == 1): echo 'คะแนนเต็ม'; endif;?></th>
            <th><?php if($phpVariable == 1): echo 'วิธีประเมิน'; endif;?></th>
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
            <th>4.4</th>
            <th>4.5</th>
            <th>4.6</th>
            <th>4.6</th>
            <th>5.1</th>
            <th>5.2</th>
            <th>5.3</th>
            <th>5.4</th>
        

        </thead>

        <tbody>
            
                    <?php for($i=0;$i<count($weight_score);$i++) { 
                         ?>
                    <tr> 
                        <td id = "tdcolors2" align="center"><?php echo $weight_score[$i]["score"];echo "%"; ?></td>

                        <td id = "tdcolors" align="center"><?php echo $assessment_name[$i]; ?></td>

                        <td align="center"><?php if($weight_score[$i]["1.1"] > 0): echo (bcdiv($weight_score[$i]["1.1"]  * (float)$totalplo3["1.1"]  ,1 ,2)); else: echo $weight_score[$i]["1.1"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.2"] > 0): echo (bcdiv($weight_score[$i]["1.2"]  * (float)$totalplo3["1.2"]  ,1 ,2)); else: echo $weight_score[$i]["1.2"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.3"] > 0): echo (bcdiv($weight_score[$i]["1.3"]  * (float)$totalplo3["1.3"]  ,1 ,2)); else: echo $weight_score[$i]["1.3"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.4"] > 0): echo (bcdiv($weight_score[$i]["1.4"]  * (float)$totalplo3["1.4"]  ,1 ,2)); else: echo $weight_score[$i]["1.4"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.5"] > 0): echo (bcdiv($weight_score[$i]["1.5"]  * (float)$totalplo3["1.5"]  ,1 ,2)); else: echo $weight_score[$i]["1.5"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.6"] > 0): echo (bcdiv($weight_score[$i]["1.6"]  * (float)$totalplo3["1.6"]  ,1 ,2)); else: echo $weight_score[$i]["1.6"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.7"] > 0): echo (bcdiv($weight_score[$i]["1.7"]  * (float)$totalplo3["1.7"]  ,1 ,2)); else: echo $weight_score[$i]["1.7"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["2.1"] > 0): echo (bcdiv($weight_score[$i]["2.1"]  * (float)$totalplo3["2.1"]  ,1,2)) ; else: echo $weight_score[$i]["2.1"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.2"] > 0): echo (bcdiv($weight_score[$i]["2.2"] *  (float)$totalplo3["2.2"]  ,1,2)) ; else: echo $weight_score[$i]["2.2"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.3"] > 0): echo (bcdiv($weight_score[$i]["2.3"] *  (float)$totalplo3["2.3"]  ,1,2)) ; else: echo $weight_score[$i]["2.3"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.4"] > 0): echo (bcdiv($weight_score[$i]["2.4"] *  (float)$totalplo3["2.4"]  ,1,2)) ; else: echo $weight_score[$i]["2.4"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.5"] > 0): echo (bcdiv($weight_score[$i]["2.5"] *  (float)$totalplo3["2.5"]  ,1,2)) ; else: echo $weight_score[$i]["2.5"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.6"] > 0): echo (bcdiv($weight_score[$i]["2.6"] *  (float)$totalplo3["2.6"]  ,1,2)) ; else: echo $weight_score[$i]["2.6"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.7"] > 0): echo (bcdiv($weight_score[$i]["2.7"] *  (float)$totalplo3["2.7"]  ,1,2)) ; else: echo $weight_score[$i]["2.7"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.8"] > 0): echo (bcdiv($weight_score[$i]["2.8"] *  (float)$totalplo3["2.8"]  ,1,2)) ; else: echo $weight_score[$i]["2.8"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["3.1"] > 0): echo (bcdiv($weight_score[$i]["3.1"] *  (float)$totalplo3["3.1"]  ,1,2)) ; else: echo $weight_score[$i]["3.1"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["3.2"] > 0): echo (bcdiv($weight_score[$i]["3.2"] *  (float)$totalplo3["3.2"]  ,1,2)) ; else: echo $weight_score[$i]["3.2"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["3.3"] > 0): echo (bcdiv($weight_score[$i]["3.3"] *  (float)$totalplo3["3.3"]  ,1,2)) ; else: echo $weight_score[$i]["3.3"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["3.4"] > 0): echo (bcdiv($weight_score[$i]["3.4"] *  (float)$totalplo3["3.4"]  ,1,2)) ; else: echo $weight_score[$i]["3.4"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.1"] > 0): echo (bcdiv($weight_score[$i]["4.1"] *  (float)$totalplo3["4.1"]  ,1,2)) ; else: echo $weight_score[$i]["4.1"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.2"] > 0): echo (bcdiv($weight_score[$i]["4.2"] *  (float)$totalplo3["4.2"]  ,1,2)) ; else: echo $weight_score[$i]["4.2"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.3"] > 0): echo (bcdiv($weight_score[$i]["4.3"] *  (float)$totalplo3["4.3"]  ,1,2)) ; else: echo $weight_score[$i]["4.3"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.4"] > 0): echo (bcdiv($weight_score[$i]["4.4"] *  (float)$totalplo3["4.4"]  ,1,2)) ; else: echo $weight_score[$i]["4.4"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.5"] > 0): echo (bcdiv($weight_score[$i]["4.5"] *  (float)$totalplo3["4.5"]  ,1,2)) ; else: echo $weight_score[$i]["4.5"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.6"] > 0): echo (bcdiv($weight_score[$i]["4.6"] *  (float)$totalplo3["4.6"]  ,1,2)) ; else: echo $weight_score[$i]["4.6"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["5.1"] > 0): echo (bcdiv($weight_score[$i]["5.1"] *  (float)$totalplo3["5.1"]  ,1,2)) ; else: echo $weight_score[$i]["5.1"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["5.2"] > 0): echo (bcdiv($weight_score[$i]["5.2"] *  (float)$totalplo3["5.2"]  ,1,2)) ; else: echo $weight_score[$i]["5.2"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["5.3"] > 0): echo (bcdiv($weight_score[$i]["5.3"] *  (float)$totalplo3["5.3"]  ,1,2)) ; else: echo $weight_score[$i]["5.3"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["5.4"] > 0): echo (bcdiv($weight_score[$i]["5.4"] *  (float)$totalplo3["5.4"]  ,1,2)) ; else: echo $weight_score[$i]["5.4"]; endif; ?></td>

                    </tr>
                            <?php } ?>

 
                                
                                
                                <?php for($i=0;$i < count($weight_score) ;$i++) {
                                    $totalsum= array();
                                    $sum11 = (float)$weight_score[$i]["1.1"]   * (float)$totalplo3["1.1"]  ;
                                    $sum12 = (float)$weight_score[$i]["1.2"]   * (float)$totalplo3["1.2"] ;
                                    $sum13 = (float)$weight_score[$i]["1.3"]   * (float)$totalplo3["1.3"] ;
                                    $sum14 = (float)$weight_score[$i]["1.4"]   * (float)$totalplo3["1.4"] ;
                                    $sum15 = (float)$weight_score[$i]["1.5"]   * (float)$totalplo3["1.5"] ;
                                    $sum16 = (float)$weight_score[$i]["1.6"]   * (float)$totalplo3["1.6"] ;
                                    $sum17 = (float)$weight_score[$i]["1.7"]   * (float)$totalplo3["1.7"] ;
                                    $sum21 = (float)$weight_score[$i]["2.1"]   * (float)$totalplo3["2.1"] ;
                                    $sum22 = (float)$weight_score[$i]["2.2"]  *  (float)$totalplo3["2.2"] ;
                                    $sum23 = (float)$weight_score[$i]["2.3"]  *  (float)$totalplo3["2.3"] ;
                                    $sum24 = (float)$weight_score[$i]["2.4"]  *  (float)$totalplo3["2.4"] ;
                                    $sum25 = (float)$weight_score[$i]["2.5"]  *  (float)$totalplo3["2.5"] ;
                                    $sum26 = (float)$weight_score[$i]["2.6"]  *  (float)$totalplo3["2.6"] ;
                                    $sum27 = (float)$weight_score[$i]["2.7"]  *  (float)$totalplo3["2.7"] ;
                                    $sum28 = (float)$weight_score[$i]["2.8"]  *  (float)$totalplo3["2.8"] ;
                                    $sum31 = (float)$weight_score[$i]["3.1"]  *  (float)$totalplo3["3.1"] ;
                                    $sum32 = (float)$weight_score[$i]["3.2"]  *  (float)$totalplo3["3.2"] ;
                                    $sum33 = (float)$weight_score[$i]["3.3"]  *  (float)$totalplo3["3.3"] ;
                                    $sum34 = (float)$weight_score[$i]["3.4"]  *  (float)$totalplo3["3.4"] ;
                                    $sum41 = (float)$weight_score[$i]["4.1"]  *  (float)$totalplo3["4.1"] ;
                                    $sum42 = (float)$weight_score[$i]["4.2"]  *  (float)$totalplo3["4.2"] ;
                                    $sum43 = (float)$weight_score[$i]["4.3"]  *  (float)$totalplo3["4.3"] ;
                                    $sum44 = (float)$weight_score[$i]["4.4"]  *  (float)$totalplo3["4.4"] ;
                                    $sum45 = (float)$weight_score[$i]["4.5"]  *  (float)$totalplo3["4.5"] ;
                                    $sum46 = (float)$weight_score[$i]["4.6"]  *  (float)$totalplo3["4.6"] ;
                                    $sum51 = (float)$weight_score[$i]["5.1"]  *  (float)$totalplo3["5.1"] ;
                                    $sum52 = (float)$weight_score[$i]["5.2"]  *  (float)$totalplo3["5.2"] ;
                                    $sum53 = (float)$weight_score[$i]["5.3"]  *  (float)$totalplo3["5.3"] ;  
                                    $sum54 = (float)$weight_score[$i]["5.4"]  *  (float)$totalplo3["5.4"] ;  
                                    
                                    
                                    $totalsum = 
                                    $sum11 + 
                                    $sum12+
                                    $sum13+
                                    $sum14+
                                    $sum15 + 
                                    $sum16 + 
                                    $sum17 + 
                                    $sum21 +
                                    $sum22+
                                    $sum23 + 
                                    $sum24 + 
                                    $sum25 + 
                                    $sum26+
                                    $sum27 + 
                                    $sum28+
                                    $sum31+
                                    $sum32 + 
                                    $sum33 + 
                                    $sum34 + 
                                    $sum41+
                                    $sum42 + 
                                    $sum43+
                                    $sum44+
                                    $sum45 + 
                                    $sum46 + 
                                    $sum51 + 
                                    $sum52+
                                    $sum53 + 
                                    $sum54;
                                    
                                    $j = $plo3;
                                    $j = $j +1;
                                    $plo3 +=1;
                                    

                                    $a = $search ->totalscore3($getid,$totalsum, $j );
                                    
                        
                                  
                                   
                            // $a += $sum21 + $sum22 +$sum31 + $sum34 ;
                             //array_push($_SESSION['total11'], $a); 
                             //echo $_SESSION['total11'][0]; 

                              
                                } ?>
                            
    </tbody>


</table>
<?php echo "<br>"; ?>
<table>
        <h5 id="forh5"> PLO 4</h5>

        <thead border="1px" align="center">  
                        
            <th><?php if($phpVariable == 1): echo 'คะแนนเต็ม'; endif;?></th>
            <th><?php if($phpVariable == 1): echo 'วิธีประเมิน'; endif;?></th>
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
            <th>4.4</th>
            <th>4.5</th>
            <th>4.6</th>
            <th>4.6</th>
            <th>5.1</th>
            <th>5.2</th>
            <th>5.3</th>
            <th>5.4</th>
        

        </thead>

        <tbody>
            
                    <?php for($i=0;$i<count($weight_score);$i++) { 
                         ?>
                    <tr> 
                        <td id = "tdcolors2" align="center"><?php echo $weight_score[$i]["score"];echo "%"; ?></td>

                        <td id = "tdcolors" align="center"><?php echo $assessment_name[$i]; ?></td>

                        <td align="center"><?php if($weight_score[$i]["1.1"] > 0): echo (bcdiv($weight_score[$i]["1.1"]  * (float)$totalplo4["1.1"]  ,1 ,2)); else: echo $weight_score[$i]["1.1"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.2"] > 0): echo (bcdiv($weight_score[$i]["1.2"]  * (float)$totalplo4["1.2"]  ,1 ,2)); else: echo $weight_score[$i]["1.2"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.3"] > 0): echo (bcdiv($weight_score[$i]["1.3"]  * (float)$totalplo4["1.3"]  ,1 ,2)); else: echo $weight_score[$i]["1.3"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.4"] > 0): echo (bcdiv($weight_score[$i]["1.4"]  * (float)$totalplo4["1.4"]  ,1 ,2)); else: echo $weight_score[$i]["1.4"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.5"] > 0): echo (bcdiv($weight_score[$i]["1.5"]  * (float)$totalplo4["1.5"]  ,1 ,2)); else: echo $weight_score[$i]["1.5"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.6"] > 0): echo (bcdiv($weight_score[$i]["1.6"]  * (float)$totalplo4["1.6"]  ,1 ,2)); else: echo $weight_score[$i]["1.6"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.7"] > 0): echo (bcdiv($weight_score[$i]["1.7"]  * (float)$totalplo4["1.7"]  ,1 ,2)); else: echo $weight_score[$i]["1.7"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["2.1"] > 0): echo (bcdiv($weight_score[$i]["2.1"]  * (float)$totalplo4["2.1"]  ,1,2)) ; else: echo $weight_score[$i]["2.1"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.2"] > 0): echo (bcdiv($weight_score[$i]["2.2"] *  (float)$totalplo4["2.2"]  ,1,2)) ; else: echo $weight_score[$i]["2.2"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.3"] > 0): echo (bcdiv($weight_score[$i]["2.3"] *  (float)$totalplo4["2.3"]  ,1,2)) ; else: echo $weight_score[$i]["2.3"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.4"] > 0): echo (bcdiv($weight_score[$i]["2.4"] *  (float)$totalplo4["2.4"]  ,1,2)) ; else: echo $weight_score[$i]["2.4"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.5"] > 0): echo (bcdiv($weight_score[$i]["2.5"] *  (float)$totalplo4["2.5"]  ,1,2)) ; else: echo $weight_score[$i]["2.5"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.6"] > 0): echo (bcdiv($weight_score[$i]["2.6"] *  (float)$totalplo4["2.6"]  ,1,2)) ; else: echo $weight_score[$i]["2.6"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.7"] > 0): echo (bcdiv($weight_score[$i]["2.7"] *  (float)$totalplo4["2.7"]  ,1,2)) ; else: echo $weight_score[$i]["2.7"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.8"] > 0): echo (bcdiv($weight_score[$i]["2.8"] *  (float)$totalplo4["2.8"]  ,1,2)) ; else: echo $weight_score[$i]["2.8"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["3.1"] > 0): echo (bcdiv($weight_score[$i]["3.1"] *  (float)$totalplo4["3.1"]  ,1,2)) ; else: echo $weight_score[$i]["3.1"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["3.2"] > 0): echo (bcdiv($weight_score[$i]["3.2"] *  (float)$totalplo4["3.2"]  ,1,2)) ; else: echo $weight_score[$i]["3.2"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["3.3"] > 0): echo (bcdiv($weight_score[$i]["3.3"] *  (float)$totalplo4["3.3"]  ,1,2)) ; else: echo $weight_score[$i]["3.3"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["3.4"] > 0): echo (bcdiv($weight_score[$i]["3.4"] *  (float)$totalplo4["3.4"]  ,1,2)) ; else: echo $weight_score[$i]["3.4"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.1"] > 0): echo (bcdiv($weight_score[$i]["4.1"] *  (float)$totalplo4["4.1"]  ,1,2)) ; else: echo $weight_score[$i]["4.1"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.2"] > 0): echo (bcdiv($weight_score[$i]["4.2"] *  (float)$totalplo4["4.2"]  ,1,2)) ; else: echo $weight_score[$i]["4.2"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.3"] > 0): echo (bcdiv($weight_score[$i]["4.3"] *  (float)$totalplo4["4.3"]  ,1,2)) ; else: echo $weight_score[$i]["4.3"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.4"] > 0): echo (bcdiv($weight_score[$i]["4.4"] *  (float)$totalplo4["4.4"]  ,1,2)) ; else: echo $weight_score[$i]["4.4"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.5"] > 0): echo (bcdiv($weight_score[$i]["4.5"] *  (float)$totalplo4["4.5"]  ,1,2)) ; else: echo $weight_score[$i]["4.5"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.6"] > 0): echo (bcdiv($weight_score[$i]["4.6"] *  (float)$totalplo4["4.6"]  ,1,2)) ; else: echo $weight_score[$i]["4.6"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["5.1"] > 0): echo (bcdiv($weight_score[$i]["5.1"] *  (float)$totalplo4["5.1"]  ,1,2)) ; else: echo $weight_score[$i]["5.1"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["5.2"] > 0): echo (bcdiv($weight_score[$i]["5.2"] *  (float)$totalplo4["5.2"]  ,1,2)) ; else: echo $weight_score[$i]["5.2"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["5.3"] > 0): echo (bcdiv($weight_score[$i]["5.3"] *  (float)$totalplo4["5.3"]  ,1,2)) ; else: echo $weight_score[$i]["5.3"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["5.4"] > 0): echo (bcdiv($weight_score[$i]["5.4"] *  (float)$totalplo4["5.4"]  ,1,2)) ; else: echo $weight_score[$i]["5.4"]; endif; ?></td>

                    </tr>
                            <?php } ?>

 
                                
                                
                                <?php for($i=0;$i < count($weight_score) ;$i++) {
                                    $totalsum= array();
                                    $sum11 = (float)$weight_score[$i]["1.1"]   * (float)$totalplo4["1.1"]  ;
                                    $sum12 = (float)$weight_score[$i]["1.2"]   * (float)$totalplo4["1.2"] ;
                                    $sum13 = (float)$weight_score[$i]["1.3"]   * (float)$totalplo4["1.3"] ;
                                    $sum14 = (float)$weight_score[$i]["1.4"]   * (float)$totalplo4["1.4"] ;
                                    $sum15 = (float)$weight_score[$i]["1.5"]   * (float)$totalplo4["1.5"] ;
                                    $sum16 = (float)$weight_score[$i]["1.6"]   * (float)$totalplo4["1.6"] ;
                                    $sum17 = (float)$weight_score[$i]["1.7"]   * (float)$totalplo4["1.7"] ;
                                    $sum21 = (float)$weight_score[$i]["2.1"]   * (float)$totalplo4["2.1"] ;
                                    $sum22 = (float)$weight_score[$i]["2.2"]  *  (float)$totalplo4["2.2"] ;
                                    $sum23 = (float)$weight_score[$i]["2.3"]  *  (float)$totalplo4["2.3"] ;
                                    $sum24 = (float)$weight_score[$i]["2.4"]  *  (float)$totalplo4["2.4"] ;
                                    $sum25 = (float)$weight_score[$i]["2.5"]  *  (float)$totalplo4["2.5"] ;
                                    $sum26 = (float)$weight_score[$i]["2.6"]  *  (float)$totalplo4["2.6"] ;
                                    $sum27 = (float)$weight_score[$i]["2.7"]  *  (float)$totalplo4["2.7"] ;
                                    $sum28 = (float)$weight_score[$i]["2.8"]  *  (float)$totalplo4["2.8"] ;
                                    $sum31 = (float)$weight_score[$i]["3.1"]  *  (float)$totalplo4["3.1"] ;
                                    $sum32 = (float)$weight_score[$i]["3.2"]  *  (float)$totalplo4["3.2"] ;
                                    $sum33 = (float)$weight_score[$i]["3.3"]  *  (float)$totalplo4["3.3"] ;
                                    $sum34 = (float)$weight_score[$i]["3.4"]  *  (float)$totalplo4["3.4"] ;
                                    $sum41 = (float)$weight_score[$i]["4.1"]  *  (float)$totalplo4["4.1"] ;
                                    $sum42 = (float)$weight_score[$i]["4.2"]  *  (float)$totalplo4["4.2"] ;
                                    $sum43 = (float)$weight_score[$i]["4.3"]  *  (float)$totalplo4["4.3"] ;
                                    $sum44 = (float)$weight_score[$i]["4.4"]  *  (float)$totalplo4["4.4"] ;
                                    $sum45 = (float)$weight_score[$i]["4.5"]  *  (float)$totalplo4["4.5"] ;
                                    $sum46 = (float)$weight_score[$i]["4.6"]  *  (float)$totalplo4["4.6"] ;
                                    $sum51 = (float)$weight_score[$i]["5.1"]  *  (float)$totalplo4["5.1"] ;
                                    $sum52 = (float)$weight_score[$i]["5.2"]  *  (float)$totalplo4["5.2"] ;
                                    $sum53 = (float)$weight_score[$i]["5.3"]  *  (float)$totalplo4["5.3"] ;  
                                    $sum54 = (float)$weight_score[$i]["5.4"]  *  (float)$totalplo4["5.4"] ;  
                                    
                                    
                                    $totalsum = 
                                    $sum11 + 
                                    $sum12+
                                    $sum13+
                                    $sum14+
                                    $sum15 + 
                                    $sum16 + 
                                    $sum17 + 
                                    $sum21 +
                                    $sum22+
                                    $sum23 + 
                                    $sum24 + 
                                    $sum25 + 
                                    $sum26+
                                    $sum27 + 
                                    $sum28+
                                    $sum31+
                                    $sum32 + 
                                    $sum33 + 
                                    $sum34 + 
                                    $sum41+
                                    $sum42 + 
                                    $sum43+
                                    $sum44+
                                    $sum45 + 
                                    $sum46 + 
                                    $sum51 + 
                                    $sum52+
                                    $sum53 + 
                                    $sum54;
                                    
                                    $j = $plo4;
                                    $j = $j +1;
                                    $plo4 +=1;
                                    

                                    $a = $search ->totalscore3($getid,$totalsum, $j );
                                    
                        
                                  
                                   
                            // $a += $sum21 + $sum22 +$sum31 + $sum34 ;
                             //array_push($_SESSION['total11'], $a); 
                             //echo $_SESSION['total11'][0]; 

                              
                                } ?>
                            
    </tbody>


</table>

<?php echo "<br>"; ?>
<table>
        <h5 id="forh5"> PLO 5</h5>

        <thead border="1px" align="center">  
                        
            <th><?php if($phpVariable == 1): echo 'คะแนนเต็ม'; endif;?></th>
            <th><?php if($phpVariable == 1): echo 'วิธีประเมิน'; endif;?></th>
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
            <th>4.4</th>
            <th>4.5</th>
            <th>4.6</th>
            <th>4.6</th>
            <th>5.1</th>
            <th>5.2</th>
            <th>5.3</th>
            <th>5.4</th>
        

        </thead>

        <tbody>
            
                    <?php for($i=0;$i<count($weight_score);$i++) { 
                         ?>
                    <tr> 
                        <td id = "tdcolors2" align="center"><?php echo $weight_score[$i]["score"];echo "%"; ?></td>

                        <td id = "tdcolors" align="center"><?php echo $assessment_name[$i]; ?></td>

                        <td align="center"><?php if($weight_score[$i]["1.1"] > 0): echo (bcdiv($weight_score[$i]["1.1"]  * (float)$totalplo5["1.1"]  ,1 ,2)); else: echo $weight_score[$i]["1.1"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.2"] > 0): echo (bcdiv($weight_score[$i]["1.2"]  * (float)$totalplo5["1.2"]  ,1 ,2)); else: echo $weight_score[$i]["1.2"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.3"] > 0): echo (bcdiv($weight_score[$i]["1.3"]  * (float)$totalplo5["1.3"]  ,1 ,2)); else: echo $weight_score[$i]["1.3"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.4"] > 0): echo (bcdiv($weight_score[$i]["1.4"]  * (float)$totalplo5["1.4"]  ,1 ,2)); else: echo $weight_score[$i]["1.4"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.5"] > 0): echo (bcdiv($weight_score[$i]["1.5"]  * (float)$totalplo5["1.5"]  ,1 ,2)); else: echo $weight_score[$i]["1.5"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.6"] > 0): echo (bcdiv($weight_score[$i]["1.6"]  * (float)$totalplo5["1.6"]  ,1 ,2)); else: echo $weight_score[$i]["1.6"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.7"] > 0): echo (bcdiv($weight_score[$i]["1.7"]  * (float)$totalplo5["1.7"]  ,1 ,2)); else: echo $weight_score[$i]["1.7"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["2.1"] > 0): echo (bcdiv($weight_score[$i]["2.1"]  * (float)$totalplo5["2.1"]  ,1,2)) ; else: echo $weight_score[$i]["2.1"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.2"] > 0): echo (bcdiv($weight_score[$i]["2.2"] *  (float)$totalplo5["2.2"]  ,1,2)) ; else: echo $weight_score[$i]["2.2"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.3"] > 0): echo (bcdiv($weight_score[$i]["2.3"] *  (float)$totalplo5["2.3"]  ,1,2)) ; else: echo $weight_score[$i]["2.3"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.4"] > 0): echo (bcdiv($weight_score[$i]["2.4"] *  (float)$totalplo5["2.4"]  ,1,2)) ; else: echo $weight_score[$i]["2.4"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.5"] > 0): echo (bcdiv($weight_score[$i]["2.5"] *  (float)$totalplo5["2.5"]  ,1,2)) ; else: echo $weight_score[$i]["2.5"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.6"] > 0): echo (bcdiv($weight_score[$i]["2.6"] *  (float)$totalplo5["2.6"]  ,1,2)) ; else: echo $weight_score[$i]["2.6"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.7"] > 0): echo (bcdiv($weight_score[$i]["2.7"] *  (float)$totalplo5["2.7"]  ,1,2)) ; else: echo $weight_score[$i]["2.7"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.8"] > 0): echo (bcdiv($weight_score[$i]["2.8"] *  (float)$totalplo5["2.8"]  ,1,2)) ; else: echo $weight_score[$i]["2.8"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["3.1"] > 0): echo (bcdiv($weight_score[$i]["3.1"] *  (float)$totalplo5["3.1"]  ,1,2)) ; else: echo $weight_score[$i]["3.1"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["3.2"] > 0): echo (bcdiv($weight_score[$i]["3.2"] *  (float)$totalplo5["3.2"]  ,1,2)) ; else: echo $weight_score[$i]["3.2"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["3.3"] > 0): echo (bcdiv($weight_score[$i]["3.3"] *  (float)$totalplo5["3.3"]  ,1,2)) ; else: echo $weight_score[$i]["3.3"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["3.4"] > 0): echo (bcdiv($weight_score[$i]["3.4"] *  (float)$totalplo5["3.4"]  ,1,2)) ; else: echo $weight_score[$i]["3.4"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.1"] > 0): echo (bcdiv($weight_score[$i]["4.1"] *  (float)$totalplo5["4.1"]  ,1,2)) ; else: echo $weight_score[$i]["4.1"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.2"] > 0): echo (bcdiv($weight_score[$i]["4.2"] *  (float)$totalplo5["4.2"]  ,1,2)) ; else: echo $weight_score[$i]["4.2"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.3"] > 0): echo (bcdiv($weight_score[$i]["4.3"] *  (float)$totalplo5["4.3"]  ,1,2)) ; else: echo $weight_score[$i]["4.3"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.4"] > 0): echo (bcdiv($weight_score[$i]["4.4"] *  (float)$totalplo5["4.4"]  ,1,2)) ; else: echo $weight_score[$i]["4.4"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.5"] > 0): echo (bcdiv($weight_score[$i]["4.5"] *  (float)$totalplo5["4.5"]  ,1,2)) ; else: echo $weight_score[$i]["4.5"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.6"] > 0): echo (bcdiv($weight_score[$i]["4.6"] *  (float)$totalplo5["4.6"]  ,1,2)) ; else: echo $weight_score[$i]["4.6"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["5.1"] > 0): echo (bcdiv($weight_score[$i]["5.1"] *  (float)$totalplo5["5.1"]  ,1,2)) ; else: echo $weight_score[$i]["5.1"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["5.2"] > 0): echo (bcdiv($weight_score[$i]["5.2"] *  (float)$totalplo5["5.2"]  ,1,2)) ; else: echo $weight_score[$i]["5.2"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["5.3"] > 0): echo (bcdiv($weight_score[$i]["5.3"] *  (float)$totalplo5["5.3"]  ,1,2)) ; else: echo $weight_score[$i]["5.3"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["5.4"] > 0): echo (bcdiv($weight_score[$i]["5.4"] *  (float)$totalplo5["5.4"]  ,1,2)) ; else: echo $weight_score[$i]["5.4"]; endif; ?></td>

                    </tr>
                            <?php } ?>

 
                                
                                
                                <?php for($i=0;$i < count($weight_score) ;$i++) {
                                    $totalsum= array();
                                    $sum11 = (float)$weight_score[$i]["1.1"]   * (float)$totalplo5["1.1"]  ;
                                    $sum12 = (float)$weight_score[$i]["1.2"]   * (float)$totalplo5["1.2"] ;
                                    $sum13 = (float)$weight_score[$i]["1.3"]   * (float)$totalplo5["1.3"] ;
                                    $sum14 = (float)$weight_score[$i]["1.4"]   * (float)$totalplo5["1.4"] ;
                                    $sum15 = (float)$weight_score[$i]["1.5"]   * (float)$totalplo5["1.5"] ;
                                    $sum16 = (float)$weight_score[$i]["1.6"]   * (float)$totalplo5["1.6"] ;
                                    $sum17 = (float)$weight_score[$i]["1.7"]   * (float)$totalplo5["1.7"] ;
                                    $sum21 = (float)$weight_score[$i]["2.1"]   * (float)$totalplo5["2.1"] ;
                                    $sum22 = (float)$weight_score[$i]["2.2"]  *  (float)$totalplo5["2.2"] ;
                                    $sum23 = (float)$weight_score[$i]["2.3"]  *  (float)$totalplo5["2.3"] ;
                                    $sum24 = (float)$weight_score[$i]["2.4"]  *  (float)$totalplo5["2.4"] ;
                                    $sum25 = (float)$weight_score[$i]["2.5"]  *  (float)$totalplo5["2.5"] ;
                                    $sum26 = (float)$weight_score[$i]["2.6"]  *  (float)$totalplo5["2.6"] ;
                                    $sum27 = (float)$weight_score[$i]["2.7"]  *  (float)$totalplo5["2.7"] ;
                                    $sum28 = (float)$weight_score[$i]["2.8"]  *  (float)$totalplo5["2.8"] ;
                                    $sum31 = (float)$weight_score[$i]["3.1"]  *  (float)$totalplo5["3.1"] ;
                                    $sum32 = (float)$weight_score[$i]["3.2"]  *  (float)$totalplo5["3.2"] ;
                                    $sum33 = (float)$weight_score[$i]["3.3"]  *  (float)$totalplo5["3.3"] ;
                                    $sum34 = (float)$weight_score[$i]["3.4"]  *  (float)$totalplo5["3.4"] ;
                                    $sum41 = (float)$weight_score[$i]["4.1"]  *  (float)$totalplo5["4.1"] ;
                                    $sum42 = (float)$weight_score[$i]["4.2"]  *  (float)$totalplo5["4.2"] ;
                                    $sum43 = (float)$weight_score[$i]["4.3"]  *  (float)$totalplo5["4.3"] ;
                                    $sum44 = (float)$weight_score[$i]["4.4"]  *  (float)$totalplo5["4.4"] ;
                                    $sum45 = (float)$weight_score[$i]["4.5"]  *  (float)$totalplo5["4.5"] ;
                                    $sum46 = (float)$weight_score[$i]["4.6"]  *  (float)$totalplo5["4.6"] ;
                                    $sum51 = (float)$weight_score[$i]["5.1"]  *  (float)$totalplo5["5.1"] ;
                                    $sum52 = (float)$weight_score[$i]["5.2"]  *  (float)$totalplo5["5.2"] ;
                                    $sum53 = (float)$weight_score[$i]["5.3"]  *  (float)$totalplo5["5.3"] ;  
                                    $sum54 = (float)$weight_score[$i]["5.4"]  *  (float)$totalplo5["5.4"] ;  
                                    
                                    
                                    $totalsum = 
                                    $sum11 + 
                                    $sum12+
                                    $sum13+
                                    $sum14+
                                    $sum15 + 
                                    $sum16 + 
                                    $sum17 + 
                                    $sum21 +
                                    $sum22+
                                    $sum23 + 
                                    $sum24 + 
                                    $sum25 + 
                                    $sum26+
                                    $sum27 + 
                                    $sum28+
                                    $sum31+
                                    $sum32 + 
                                    $sum33 + 
                                    $sum34 + 
                                    $sum41+
                                    $sum42 + 
                                    $sum43+
                                    $sum44+
                                    $sum45 + 
                                    $sum46 + 
                                    $sum51 + 
                                    $sum52+
                                    $sum53 + 
                                    $sum54;
                                    
                                    $j = $plo5;
                                    $j = $j +1;
                                    $plo5 +=1;
                                    

                                    $a = $search ->totalscore3($getid,$totalsum, $j );
                                    
                        
                                  
                                   
                            // $a += $sum21 + $sum22 +$sum31 + $sum34 ;
                             //array_push($_SESSION['total11'], $a); 
                             //echo $_SESSION['total11'][0]; 

                              
                                } ?>
                            
    </tbody>


</table>

<?php echo "<br>"; ?>
<table>
        <h5 id="forh5"> PLO 6</h5>

        <thead border="1px" align="center">  
                        
            <th><?php if($phpVariable == 1): echo 'คะแนนเต็ม'; endif;?></th>
            <th><?php if($phpVariable == 1): echo 'วิธีประเมิน'; endif;?></th>
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
            <th>4.4</th>
            <th>4.5</th>
            <th>4.6</th>
            <th>4.6</th>
            <th>5.1</th>
            <th>5.2</th>
            <th>5.3</th>
            <th>5.4</th>
        

        </thead>

        <tbody>
            
                    <?php for($i=0;$i<count($weight_score);$i++) { 
                         ?>
                    <tr> 
                        <td id = "tdcolors2" align="center"><?php echo $weight_score[$i]["score"];echo "%"; ?></td>

                        <td id = "tdcolors" align="center"><?php echo $assessment_name[$i]; ?></td>

                        <td align="center"><?php if($weight_score[$i]["1.1"] > 0): echo (bcdiv($weight_score[$i]["1.1"]  * (float)$totalplo6["1.1"]  ,1 ,2)); else: echo $weight_score[$i]["1.1"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.2"] > 0): echo (bcdiv($weight_score[$i]["1.2"]  * (float)$totalplo6["1.2"]  ,1 ,2)); else: echo $weight_score[$i]["1.2"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.3"] > 0): echo (bcdiv($weight_score[$i]["1.3"]  * (float)$totalplo6["1.3"]  ,1 ,2)); else: echo $weight_score[$i]["1.3"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.4"] > 0): echo (bcdiv($weight_score[$i]["1.4"]  * (float)$totalplo6["1.4"]  ,1 ,2)); else: echo $weight_score[$i]["1.4"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.5"] > 0): echo (bcdiv($weight_score[$i]["1.5"]  * (float)$totalplo6["1.5"]  ,1 ,2)); else: echo $weight_score[$i]["1.5"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.6"] > 0): echo (bcdiv($weight_score[$i]["1.6"]  * (float)$totalplo6["1.6"]  ,1 ,2)); else: echo $weight_score[$i]["1.6"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["1.7"] > 0): echo (bcdiv($weight_score[$i]["1.7"]  * (float)$totalplo6["1.7"]  ,1 ,2)); else: echo $weight_score[$i]["1.7"]; endif;?></td>
                        <td align="center"><?php if($weight_score[$i]["2.1"] > 0): echo (bcdiv($weight_score[$i]["2.1"]  * (float)$totalplo6["2.1"]  ,1,2)) ; else: echo $weight_score[$i]["2.1"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.2"] > 0): echo (bcdiv($weight_score[$i]["2.2"] *  (float)$totalplo6["2.2"]  ,1,2)) ; else: echo $weight_score[$i]["2.2"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.3"] > 0): echo (bcdiv($weight_score[$i]["2.3"] *  (float)$totalplo6["2.3"]  ,1,2)) ; else: echo $weight_score[$i]["2.3"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.4"] > 0): echo (bcdiv($weight_score[$i]["2.4"] *  (float)$totalplo6["2.4"]  ,1,2)) ; else: echo $weight_score[$i]["2.4"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.5"] > 0): echo (bcdiv($weight_score[$i]["2.5"] *  (float)$totalplo6["2.5"]  ,1,2)) ; else: echo $weight_score[$i]["2.5"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.6"] > 0): echo (bcdiv($weight_score[$i]["2.6"] *  (float)$totalplo6["2.6"]  ,1,2)) ; else: echo $weight_score[$i]["2.6"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.7"] > 0): echo (bcdiv($weight_score[$i]["2.7"] *  (float)$totalplo6["2.7"]  ,1,2)) ; else: echo $weight_score[$i]["2.7"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["2.8"] > 0): echo (bcdiv($weight_score[$i]["2.8"] *  (float)$totalplo6["2.8"]  ,1,2)) ; else: echo $weight_score[$i]["2.8"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["3.1"] > 0): echo (bcdiv($weight_score[$i]["3.1"] *  (float)$totalplo6["3.1"]  ,1,2)) ; else: echo $weight_score[$i]["3.1"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["3.2"] > 0): echo (bcdiv($weight_score[$i]["3.2"] *  (float)$totalplo6["3.2"]  ,1,2)) ; else: echo $weight_score[$i]["3.2"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["3.3"] > 0): echo (bcdiv($weight_score[$i]["3.3"] *  (float)$totalplo6["3.3"]  ,1,2)) ; else: echo $weight_score[$i]["3.3"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["3.4"] > 0): echo (bcdiv($weight_score[$i]["3.4"] *  (float)$totalplo6["3.4"]  ,1,2)) ; else: echo $weight_score[$i]["3.4"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.1"] > 0): echo (bcdiv($weight_score[$i]["4.1"] *  (float)$totalplo6["4.1"]  ,1,2)) ; else: echo $weight_score[$i]["4.1"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.2"] > 0): echo (bcdiv($weight_score[$i]["4.2"] *  (float)$totalplo6["4.2"]  ,1,2)) ; else: echo $weight_score[$i]["4.2"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.3"] > 0): echo (bcdiv($weight_score[$i]["4.3"] *  (float)$totalplo6["4.3"]  ,1,2)) ; else: echo $weight_score[$i]["4.3"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.4"] > 0): echo (bcdiv($weight_score[$i]["4.4"] *  (float)$totalplo6["4.4"]  ,1,2)) ; else: echo $weight_score[$i]["4.4"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.5"] > 0): echo (bcdiv($weight_score[$i]["4.5"] *  (float)$totalplo6["4.5"]  ,1,2)) ; else: echo $weight_score[$i]["4.5"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["4.6"] > 0): echo (bcdiv($weight_score[$i]["4.6"] *  (float)$totalplo6["4.6"]  ,1,2)) ; else: echo $weight_score[$i]["4.6"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["5.1"] > 0): echo (bcdiv($weight_score[$i]["5.1"] *  (float)$totalplo6["5.1"]  ,1,2)) ; else: echo $weight_score[$i]["5.1"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["5.2"] > 0): echo (bcdiv($weight_score[$i]["5.2"] *  (float)$totalplo6["5.2"]  ,1,2)) ; else: echo $weight_score[$i]["5.2"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["5.3"] > 0): echo (bcdiv($weight_score[$i]["5.3"] *  (float)$totalplo6["5.3"]  ,1,2)) ; else: echo $weight_score[$i]["5.3"]; endif; ?></td>
                        <td align="center"><?php if($weight_score[$i]["5.4"] > 0): echo (bcdiv($weight_score[$i]["5.4"] *  (float)$totalplo6["5.4"]  ,1,2)) ; else: echo $weight_score[$i]["5.4"]; endif; ?></td>

                    </tr>
                            <?php } ?>

 
                                
                                
                                <?php for($i=0;$i < count($weight_score) ;$i++) {
                                    $totalsum= array();
                                    $sum11 = (float)$weight_score[$i]["1.1"]   * (float)$totalplo6["1.1"]  ;
                                    $sum12 = (float)$weight_score[$i]["1.2"]   * (float)$totalplo6["1.2"] ;
                                    $sum13 = (float)$weight_score[$i]["1.3"]   * (float)$totalplo6["1.3"] ;
                                    $sum14 = (float)$weight_score[$i]["1.4"]   * (float)$totalplo6["1.4"] ;
                                    $sum15 = (float)$weight_score[$i]["1.5"]   * (float)$totalplo6["1.5"] ;
                                    $sum16 = (float)$weight_score[$i]["1.6"]   * (float)$totalplo6["1.6"] ;
                                    $sum17 = (float)$weight_score[$i]["1.7"]   * (float)$totalplo6["1.7"] ;
                                    $sum21 = (float)$weight_score[$i]["2.1"]   * (float)$totalplo6["2.1"] ;
                                    $sum22 = (float)$weight_score[$i]["2.2"]  *  (float)$totalplo6["2.2"] ;
                                    $sum23 = (float)$weight_score[$i]["2.3"]  *  (float)$totalplo6["2.3"] ;
                                    $sum24 = (float)$weight_score[$i]["2.4"]  *  (float)$totalplo6["2.4"] ;
                                    $sum25 = (float)$weight_score[$i]["2.5"]  *  (float)$totalplo6["2.5"] ;
                                    $sum26 = (float)$weight_score[$i]["2.6"]  *  (float)$totalplo6["2.6"] ;
                                    $sum27 = (float)$weight_score[$i]["2.7"]  *  (float)$totalplo6["2.7"] ;
                                    $sum28 = (float)$weight_score[$i]["2.8"]  *  (float)$totalplo6["2.8"] ;
                                    $sum31 = (float)$weight_score[$i]["3.1"]  *  (float)$totalplo6["3.1"] ;
                                    $sum32 = (float)$weight_score[$i]["3.2"]  *  (float)$totalplo6["3.2"] ;
                                    $sum33 = (float)$weight_score[$i]["3.3"]  *  (float)$totalplo6["3.3"] ;
                                    $sum34 = (float)$weight_score[$i]["3.4"]  *  (float)$totalplo6["3.4"] ;
                                    $sum41 = (float)$weight_score[$i]["4.1"]  *  (float)$totalplo6["4.1"] ;
                                    $sum42 = (float)$weight_score[$i]["4.2"]  *  (float)$totalplo6["4.2"] ;
                                    $sum43 = (float)$weight_score[$i]["4.3"]  *  (float)$totalplo6["4.3"] ;
                                    $sum44 = (float)$weight_score[$i]["4.4"]  *  (float)$totalplo6["4.4"] ;
                                    $sum45 = (float)$weight_score[$i]["4.5"]  *  (float)$totalplo6["4.5"] ;
                                    $sum46 = (float)$weight_score[$i]["4.6"]  *  (float)$totalplo6["4.6"] ;
                                    $sum51 = (float)$weight_score[$i]["5.1"]  *  (float)$totalplo6["5.1"] ;
                                    $sum52 = (float)$weight_score[$i]["5.2"]  *  (float)$totalplo6["5.2"] ;
                                    $sum53 = (float)$weight_score[$i]["5.3"]  *  (float)$totalplo6["5.3"] ;  
                                    $sum54 = (float)$weight_score[$i]["5.4"]  *  (float)$totalplo6["5.4"] ;  
                                    
                                    
                                    $totalsum = 
                                    $sum11 + 
                                    $sum12+
                                    $sum13+
                                    $sum14+
                                    $sum15 + 
                                    $sum16 + 
                                    $sum17 + 
                                    $sum21 +
                                    $sum22+
                                    $sum23 + 
                                    $sum24 + 
                                    $sum25 + 
                                    $sum26+
                                    $sum27 + 
                                    $sum28+
                                    $sum31+
                                    $sum32 + 
                                    $sum33 + 
                                    $sum34 + 
                                    $sum41+
                                    $sum42 + 
                                    $sum43+
                                    $sum44+
                                    $sum45 + 
                                    $sum46 + 
                                    $sum51 + 
                                    $sum52+
                                    $sum53 + 
                                    $sum54;
                                    
                                    $j = $plo6;
                                    $j = $j +1;
                                    $plo6 +=1;
                                    

                                    $a = $search ->totalscore3($getid,$totalsum, $j );
                                    
                        
                                  
                                   
                            // $a += $sum21 + $sum22 +$sum31 + $sum34 ;
                             //array_push($_SESSION['total11'], $a); 
                             //echo $_SESSION['total11'][0]; 

                              
                                } ?>
                            
    </tbody>


</table>
        
        <?php
                        } ?>
    
    <!-------------------------------------------------- TABLE---------------------------------------------------- -->
    </div>

    </div>
    
</body>
<style>
        table, th, td {
             border: 1px solid black;
        }
        th{
            background-color:#6699ff;
        }

        #forh5{
            margin-left: -20px;
            text-decoration: underline;
        }
        #tdcolors{
            background-color: #FFEEAD;
        }
        #tdcolors2{
            background-color: #96CEB4;
        }
        select{
            margin-top: 10px;
            margin-left: 21%;
        }
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
            margin-top: -63px;
        
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
            margin-left: 290px;
        }
        .tablescore{
            margin-left: 50px;
        }

    	div.content {
        
       
		margin-left: 320px;
        top: 30%;
		
		height: 90%;
		border-radius: 30px;
		width: 75%;
		background-color: white;
        
        	}
        body{
            height: 100%px;
        }

</style>


</html>