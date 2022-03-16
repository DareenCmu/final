<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@500&display=swap" rel="stylesheet">
    
</head>

<body>

<div class="sidebar">
	<img src="img/human.png" alt="" width="60" height="60" style="margin-left: 30%; margin-bottom: 10%; margin-top: 10%;">
	<div class="two">
	<h3  style="color: white">TEACHER NAME</h3> 
	<h5 style="color: white">teacher.name@cmu.ac.th</h5>
	</div>
	<a class="dropdown-btn" ><img src="img/book.png" alt="" width="40" height="40"> กระบวนวิชา
    <i class="fa fa-caret-down"></i>
  </a>
	<!--end profile -->

  <div class="dropdown-container">
    <a href="insertCourse.php"><img src="img/insert.png" alt="" width="30" height="30" id="insertCrs"> เพิ่มกระบวนวิชา</a>
    <a href="#"><img src="img/edit.png" alt="" width="30" height="30"> แก้ไขกระบวนวิชา</a>
    <a href="deleteCourse.php"><img src="img/bin.png" alt="" width="30" height="30"> ลบกระบวนวิชา</a>
  </div>
  <a href="#"><img src="img/books.png" alt="" width="40" height="40"> ประเมินหลักสูตร</a>
  <a href="homepage.php"><img src="img/login.png" alt="" width="40" height="40"> ออกจากระบบ</a>
  
</div>

	<!-- <div class="add-popup">
	<div class="close-btn">&times;</div> <br>
	<div class="form">
		<h2>เพิ่มกระบวนวิชา</h2>
			<br>
			<div class="form-element">
				<label for="crsNo">รหัสกระบวนวิชา</label>
				<input type="number" id="crsNo" placeholder="รหัสกระบวนวิชา" class="form-control">
			</div> <br>
			<div class="form-element">
				<label for="crsName">ชื่อกระบวนวิชา</label>
				<input type="text" id="crsName" placeholder="ชื่อกระบวนวิชา" class="form-control">
			</div> <br>
			<div class="form-element">
				<button type="reset" class="btn btn-danger" style="float: right;">ล้างข้อมูล</button> 
				<button type="submit" class="btn btn-success" style="float: right;">บันทึก</button>
			</div>
	</div>			
	</div> -->

</body>

<style>
	.two{
		padding-left: 20px;
	}
	body {
		margin: 0;
		font-family: 'Noto Sans Thai', sans-serif;
		font-size: 20px;
		background-color: #F4E7FD;
		
	}

	.sidebar {
		margin: 0;
		padding: 0;
		width: 280px;
		background-color: #AF4CEC;
		position: fixed;
		height: 100%;
		overflow: auto;
		border-radius: 0px 35px 35px 0px;
	}

	.sidebar a, .dropdown-btn {
		display: block;
		color: black;
		padding: 16px;
		text-decoration: none;
		width: auto;
		cursor: pointer;
		
		
	}
	
	.sidebar a:hover {
		background-color: #F4E7FD;
		color: black;
		
	}

	.sidenav a:hover, .dropdown-btn:hover {
  		color: black;
	}

	.active {
		background-color: #F4E7FD;
		color: black;
	}

	.fa-caret-down {
		float: right;
		padding-right: 8px;
	}


	.dropdown-container {
		display: none;
		background-color: #F4E7FD;
		padding-left: 8px;
		color: black;
	}

	.top-sidebar {
		background-color: white;
		margin: 0;
		padding: 0;
		width: 280px;
		height: 50%;
		position: fixed;
		overflow: auto;
		border-radius: 0px 35px 0px 0px;
	}

	/* insert course
	.add-popup {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%) scale(1.25);
		width: 380px;
		padding: 20px 30px;
		background: #fff;
		border-radius: 20px;
		border-color: #AF4CEC;
		box-shadow: 2px 2px 5px 5px;
		transition: top 0ms ease-in-out 200ms,
					opaciity 200ms ease-in-out 0ms,
					transform 0ms ease-in-out 0ms,;
	}

	.add-popup .active {
		top: 50%;
		opacity: 1;
		transform: translate(-50%, -50%) scale(1);
		transition: top 0ms ease-in-out 0ms,
					opaciity 200ms ease-in-out 0ms,
					transform 20ms ease-in-out 0ms,;
	}

	.add-popup .close-btn {
		position: absolute;
		top: 10px;
		right: 10px;
		width: 15px;
		height: 15px;
		background: #888;
		color: #eee;
		text-align: center;
		line-height: 15px;
		border-radius: 15px;
		cursor: pointer;
	}

	.add-popup .form h2 {
		text-align: center;
		margin: 15px 0px;
	}

	.add-popup .form .form-element input[type="number"],
	.add-popup .form .form-element input[type="text"] {
		margin-top: 5px;
		display: block;
		width: 100%;
		padding: 10px;
		outline: none;
		border: 1px solid #aaa;
		border-radius: 5px;
	}

	.add-popup .form .form-element button[type="submit"],
	.add-popup .form .form-element button[type="reset"] {
		float: right;
		cursor: pointer;
	} */


	@media screen and (max-width: 700px) {
	.sidebar {
		width: 100%;
		height: auto;
		position: relative;
	}
	.sidenav {padding-top: 15px;}
	.sidenav a {font-size: 18px;}
	.sidebar a {float: left;}
	div.content {margin-left: 0;}
	}

	@media screen and (max-width: 400px) {
	.sidebar a {
		text-align: center;
		float: none;
	}
	}
</style>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}

// document.querySelector("#insertCrs").addEventListener("click", function() {
// 	document.querySelector(".add-popup").classList("active");
// });
// document.querySelector(".add-popup .close-btn").addEventListener("click", function() {
// 	document.querySelector(".add-popup").classList.remove("active");
// });

</script>


</html>