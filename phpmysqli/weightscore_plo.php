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
        <h3>รายงาน PLOs - score</h3>
    </div>
    
    <div class="content">
    
     
        <div class="addCourse">
        <?php 
            
            $search = new ismart();
            $plo_number  = $search->query("SELECT  * FROM plo_table");

        ?>
        <div class="selection">
    <form action="" method="post" enctype="multipart/form-data">

        <select name="num">


        <option value="">Choose</option>
        <option value="<?php echo $phpVariable = 1;?>"> รายงานรายวิชาในแต่ละชั้นปี </option>
        <option value="<?php echo $phpVariable = 2;?>"> รายงานแบบ PLO </option>
        


        </select>
        
        <div class="submitbutton">
            <button type="submit" name="submit" class="btn btn-success " style="margin-left: 25%;">submit</button>
            <a href="edit.php" class="btn btn-info" role="button">Edit</a>
        </div>


        
        
    </form>
            </div>
        <?php
                if (isset($_POST['submit'])) {
                    $phpVariable = $_POST['num'];
                    $weight_score=$search->query_fetch_all("SELECT * from weight_score ORDER BY year Asc");
                    $weight_score_PLO=$search->query_fetch_all("SELECT * from weight_score_plo ORDER BY year Asc");

                }
                else{
                    $phpVariable = 1;
                    $weight_score=$search->query_fetch_all("SELECT * from weight_score ORDER BY year Asc");
                    $weight_score_PLO=$search->query_fetch_all("SELECT * from weight_score_plo ORDER BY year Asc");
                }
                
                ?>


        </div>

         <!-------------------------------------------------- TABLE---------------------------------------------------- -->
                <div class="tablescore">
        <table name="tables" border="1px" width='550px' height='100px'>
                    <thead border="1px" align="center">  
                        
                        <th>Year</th>
                        <th>Course No</th>
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
                        <th>Total</th>
                </thead>
                <tbody>
                        <?php if($phpVariable == 1) { ?>
                            <?php for($i=0;$i<count($weight_score);$i++) { 
                                ?> 

                                <tr> 
                                    <td align="center"><?php echo $weight_score[$i]["year"]; ?></td>

                                    <td align="center"><?php echo $weight_score[$i]["course_no"]; ?></td>

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
                                    <td align="center"><?php echo $weight_score[$i]["Total"]; ?></td>

                                </tr>
                                <?php 
                                } ?>
                        <?php
                        }
                        elseif ($phpVariable == 2){ ?>
                           <?php for($i=0;$i<count($weight_score_PLO);$i++) { 
                                ?> 

<tr> 
                                    <td align="center"><?php echo $weight_score_PLO[$i]["year"]; ?></td>

                                    <td align="center"><?php echo $weight_score_PLO[$i]["course_no"]; ?></td>

                                    <td align="center"><?php echo $weight_score_PLO[$i]["PLO1"]; ?></td>
                                    <td align="center"><?php echo $weight_score_PLO[$i]["PLO2"]; ?></td>
                                    <td align="center"><?php echo $weight_score_PLO[$i]["PLO3"]; ?></td>
                                    <td align="center"><?php echo $weight_score_PLO[$i]["PLO4"]; ?></td>
                                    <td align="center"><?php echo $weight_score_PLO[$i]["PLO5"]; ?></td>
                                    <td align="center"><?php echo $weight_score_PLO[$i]["PLO6"];  ?></td>
                                    <td align="center"><?php echo $weight_score_PLO[$i]["Total"]; ?></td>

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
		width: 75%;
		background-color: white;
        
        	}
        body{
            height: 100%px;
        }

</style>


</html>