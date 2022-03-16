
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DVCSS</title>
</head>
<body>
    <?php include 'navbar.php' ?>

    <div class="content">
    <?php 
        $mysqli = new mysqli('localhost', 'root', '', 'dvcss') or die(mysqli_error($mysql));
        $result = $mysqli -> query("SELECT * FROM course") or die($mysqli -> error);
    ?>

    <div class="row justify-conyent-center">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Course ID</th>
                    <th>Name</th>
                    <th>Year</th>

                </tr>
            </thead>

            <?php while ($row = $result -> fetch_assoc()): ?>

                <tr>
                    <td> <?php echo $row['crsNo'] ?> </td>
                    <td> <?php echo $row['crsName'] ?> </td>
                    <td> <?php echo $row['stdYear'] ?> </td>
                </tr>
            <?php endwhile; ?>

        </table>
    </div>

    <?php
        function pre_r($array) {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
    ?>

</div>

</body>
<style>
    div.content {
        position: absolute;
        margin: 0;
		left: 20%;
        top: 6%;
		padding: 0;
		height: 90%;
		border-radius: 30px;
		width: 75%;
		background-color: white;
	}

     .table {
        table-layout: auto;
        width: 70%;
        left: 50%;
        font-size: 20px;
        margin-left: 15%;
        margin-top: 5%;
        
    }
</style>
</html>