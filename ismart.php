<?php
class ismart {
	  
	  //------------- Server ------------------ 

    var $dbconfig = array(  
      'hostname' => "localhost" ,
      'username' => "root" ,
      'password' => "",
	  'database' => "student_status_real",
      'key' =>"se@ct2541*7&"
      ); 

	
	public $conn="";

    //------------- สร้างตัวแปร Connection ------------------ 

    public function __construct() {
        $this->conn = mysqli_connect($this->dbconfig["hostname"], $this->dbconfig["username"], $this->dbconfig["password"],$this->dbconfig["database"]);
        if(!mysqli_connect_errno()){
			mysqli_query($this->conn,"SET names utf8");
			mysqli_query($this->conn,"SET character_set_results=utf8");
			mysqli_query($this->conn,"SET character_set_client=utf8");
			mysqli_query($this->conn,"SET character_set_connection=utf8");
		}else{
			echo"Cannot Connect Database";
		}
    }


    //-------------------------Insert & Update---------------------------------

    public function insert($StuID,$prefixThai,$StuNameThai,$Term,$Year){
        $result = mysqli_query( $this->conn, "INSERT INTO stu_undergrad(StuID,prefixThai,StuNameThai,Term,Year) 
        VALUES('$StuID','$prefixThai','$StuNameThai','$Term','$Year')");
        return $result;
    }


    public function update($StuID,$prefixThai,$StuNameThai,$Term,$Year, $userid) {
        $result = mysqli_query($this->conn, "UPDATE stu_undergrad SET 
            StuID = '$StuID',
            prefixThai = '$prefixThai',
            StuNameThai = '$StuNameThai',
            Term = '$Term',
            Year = '$Year',
            TimeStamp = current_timestamp
            WHERE StuID = '$userid'
        ");
        return $result;
    }

        public function insert_history($userid){
            $result = mysqli_query($this->conn, "INSERT INTO `stu_undergrad_history` (`StuID`,`prefixThai`,`StuNameThai`,`EduStatus`,`Term`,`Year`,`หมายเหตุ`,`เอกสารแนบ`,`ผู้บันทึกข้อมูล`)
            SELECT
                `StuID` as `StuID`,
                `prefixThai` as `prefixThai`,
                `StuNameThai` as `StuNameThai`,
                `EduStatus` as `StuID`,
                `Term` as `Term`,
                `Year` as `Year`,
                `หมายเหตุ` as `หมายเหตุ`,
                `เอกสารแนบ` as `เอกสารแนบ`,
                `ผู้บันทึกข้อมูล` as `ผู้บันทึกข้อมูล`

            
                FROM `stu_undergrad`
                WHERE `StuID` = '$userid';

            ");
        return $result;
    }

    public function history_info($reason ,$sign,$doc,$userid) {
        $result = mysqli_query($this->conn, "UPDATE stu_undergrad_history SET 
            `หมายเหตุ` = '$reason',
            `ผู้บันทึกข้อมูล` = '$sign',
            `เอกสารแนบ` = '$doc'
            WHERE history_id=(select max(history_id) from stu_undergrad_history)
        ");
        return $result;

    }

    public function update_status($EduStatus,$reason ,$sign,$doc,$userid) {
        $result = mysqli_query($this->conn, "UPDATE stu_undergrad SET 
             EduStatus = '$EduStatus',
            `หมายเหตุ` = '$reason',
            `ผู้บันทึกข้อมูล` = '$sign',
            `เอกสารแนบ` = '$doc',
            TimeStamp = current_timestamp

            WHERE StuID = '$userid'
        ");
        return $result;
        
    }
   

    public function totalscore($getid,$k,$i) {

            $result=mysqli_query($this->conn, "UPDATE estimated SET
            `".$getid."` = '$k'
            WHERE $getid = $getid AND id = $i"); return $result;
  
    }

    public function totalscore2($getid,$k,$i) {

        $result=mysqli_query($this->conn, "UPDATE estimated2 SET
        `".$getid."` = '$k'
        WHERE $getid = $getid AND id = $i"); return $result;

}
    public function totalscore3($getid,$k,$i) {

        $result=mysqli_query($this->conn, "UPDATE totalplo1 SET
        `".$getid."` = '$k'
        
        WHERE $getid = $getid AND id = $i"); return $result;

    }


    // edit weight-score

    public function update_table($course_no,$w1_1,$w1_2,$w1_3,$w1_4,$w1_5,$w1_6,$w1_7,$w2_1,$w2_2,$w2_3,$w2_4,$w2_5,$w2_6,$w2_7,$w2_8
    ,$w3_1,$w3_2,$w3_3,$w3_4,$w4_1,$w4_2,$w4_3,$w4_4,$w4_5,$w4_6,$w5_1,$w5_2,$w5_3,$w5_4,$total) {
        $result = mysqli_query($this->conn, "UPDATE weight_score SET 
             `1.1` = '$w1_1',
             `1.2` = '$w1_2',
             `1.3` = '$w1_3',
             `1.4` = '$w1_4',
             `1.5` = '$w1_5',
             `1.6` = '$w1_6',
             `1.7` = '$w1_7',
             `2.1` = '$w2_1',
             `2.2` = '$w2_2',
             `2.3` = '$w2_3',
             `2.4` = '$w2_4',
             `2.5` = '$w2_5',
             `2.6` = '$w2_6',
             `2.7` = '$w2_7',
             `2.8` = '$w2_8',
             `3.1` = '$w3_1',
             `3.2` = '$w3_2',
             `3.3` = '$w3_3',
             `3.4` = '$w3_4',
             `4.1` = '$w4_1',
             `4.2` = '$w4_2',
             `4.3` = '$w4_3',
             `4.4` = '$w4_4',
             `4.5` = '$w4_5',
             `4.6` = '$w4_6',
             `5.1` = '$w5_1',
             `5.2` = '$w5_2',
             `5.3` = '$w5_3',
             `5.4` = '$w5_4',
             Total = '$total'
            

            WHERE course_no = $course_no
           
        ");
        return $result;
    }
    public function changenull($course_no,$w1_1,$w1_2,$w1_3,$w1_4,$w1_5,$w1_6,$w1_7,$w2_1,$w2_2,$w2_3,$w2_4,$w2_5,$w2_6,$w2_7,$w2_8
    ,$w3_1,$w3_2,$w3_3,$w3_4,$w4_1,$w4_2,$w4_3,$w4_4,$w4_5,$w4_6,$w5_1,$w5_2,$w5_3,$w5_4) {
        $result = mysqli_query($this->conn, "UPDATE weight_score SET 
             `1.1` = if(`1.1`  ='',NULL,'$w1_1'),
             `1.2` = if(`1.2`='',NULL,'$w1_2'),
             `1.3` = if(`1.3`='',NULL,'$w1_3'),
             `1.4` = if(`1.4`='',NULL,'$w1_4'),
             `1.5` = if(`1.5`='',NULL,'$w1_5'),
             `1.6` = if(`1.6`='',NULL,'$w1_6'),
             `1.7` = if(`1.7`='',NULL,'$w1_7'),
             `2.1` = if(`2.1`='',NULL,'$w2_1'),
             `2.2` = if(`2.2`='',NULL,'$w2_2'),
             `2.3` = if(`2.3`='',NULL,'$w2_3'),
             `2.4` = if(`2.4`='',NULL,'$w2_4'),
             `2.5` = if(`2.5`='',NULL,'$w2_5'),
             `2.6` = if(`2.6`='',NULL,'$w2_6'),
             `2.7` = if(`2.7`='',NULL,'$w2_7'),
             `2.8` = if(`2.8`='',NULL,'$w2_8'),
             `3.1` = if(`3.1`='',NULL,'$w3_1'),
             `3.2` = if(`3.2`='',NULL,'$w3_2'),
             `3.3` = if(`3.3`='',NULL,'$w3_3'),
             `3.4` = if(`3.4`='',NULL,'$w3_4'),
             `4.1` = if(`4.1`='',NULL,'$w4_1'),
             `4.2` = if(`4.2`='',NULL,'$w4_2'),
             `4.3` = if(`4.3`='',NULL,'$w4_3'),
             `4.4` = if(`4.4`='',NULL,'$w4_4'),
             `4.5` = if(`4.5`='',NULL,'$w4_5'),
             `4.6` = if(`4.6`='',NULL,'$w4_6'),
             `5.1` = if(`5.1`='',NULL,'$w5_1'),
             `5.2` = if(`5.2`='',NULL,'$w5_2'),
             `5.3` = if(`5.3`='',NULL,'$w5_3'),
             `5.4` = if(`5.4`='',NULL,'$w5_4')

            WHERE course_no = $course_no
           
        ");
        return $result;
    }

    // edit plo

    public function update_table_plo($course_no,$w1_1,$w1_2,$w1_3,$w1_4,$w1_5,$w1_6,$w1_7,$w2_1,$w2_2,$w2_3,$w2_4,$w2_5,$w2_6,$w2_7,$w2_8
    ,$w3_1,$w3_2,$w3_3,$w3_4,$w4_1,$w4_2,$w4_3,$w4_4,$w4_5,$w4_6,$w5_1,$w5_2,$w5_3,$w5_4,$total) {
        $result = mysqli_query($this->conn, "UPDATE weight_score_plo SET 
             `1.1` = '$w1_1',
             `1.2` = '$w1_2',
             `1.3` = '$w1_3',
             `1.4` = '$w1_4',
             `1.5` = '$w1_5',
             `1.6` = '$w1_6',
             `1.7` = '$w1_7',
             `2.1` = '$w2_1',
             `2.2` = '$w2_2',
             `2.3` = '$w2_3',
             `2.4` = '$w2_4',
             `2.5` = '$w2_5',
             `2.6` = '$w2_6',
             `2.7` = '$w2_7',
             `2.8` = '$w2_8',
             `3.1` = '$w3_1',
             `3.2` = '$w3_2',
             `3.3` = '$w3_3',
             `3.4` = '$w3_4',
             `4.1` = '$w4_1',
             `4.2` = '$w4_2',
             `4.3` = '$w4_3',
             `4.4` = '$w4_4',
             `4.5` = '$w4_5',
             `4.6` = '$w4_6',
             `5.1` = '$w5_1',
             `5.2` = '$w5_2',
             `5.3` = '$w5_3',
             `5.4` = '$w5_4',
             Total = '$total'
            

            WHERE Subplo = $course_no
           
        ");
        return $result;
    }
    public function changenull_plo($course_no,$w1_1,$w1_2,$w1_3,$w1_4,$w1_5,$w1_6,$w1_7,$w2_1,$w2_2,$w2_3,$w2_4,$w2_5,$w2_6,$w2_7,$w2_8
    ,$w3_1,$w3_2,$w3_3,$w3_4,$w4_1,$w4_2,$w4_3,$w4_4,$w4_5,$w4_6,$w5_1,$w5_2,$w5_3,$w5_4) {
        $result = mysqli_query($this->conn, "UPDATE weight_score_plo SET 
             `1.1` = if(`1.1`  ='',NULL,'$w1_1'),
             `1.2` = if(`1.2`='',NULL,'$w1_2'),
             `1.3` = if(`1.3`='',NULL,'$w1_3'),
             `1.4` = if(`1.4`='',NULL,'$w1_4'),
             `1.5` = if(`1.5`='',NULL,'$w1_5'),
             `1.6` = if(`1.6`='',NULL,'$w1_6'),
             `1.7` = if(`1.7`='',NULL,'$w1_7'),
             `2.1` = if(`2.1`='',NULL,'$w2_1'),
             `2.2` = if(`2.2`='',NULL,'$w2_2'),
             `2.3` = if(`2.3`='',NULL,'$w2_3'),
             `2.4` = if(`2.4`='',NULL,'$w2_4'),
             `2.5` = if(`2.5`='',NULL,'$w2_5'),
             `2.6` = if(`2.6`='',NULL,'$w2_6'),
             `2.7` = if(`2.7`='',NULL,'$w2_7'),
             `2.8` = if(`2.8`='',NULL,'$w2_8'),
             `3.1` = if(`3.1`='',NULL,'$w3_1'),
             `3.2` = if(`3.2`='',NULL,'$w3_2'),
             `3.3` = if(`3.3`='',NULL,'$w3_3'),
             `3.4` = if(`3.4`='',NULL,'$w3_4'),
             `4.1` = if(`4.1`='',NULL,'$w4_1'),
             `4.2` = if(`4.2`='',NULL,'$w4_2'),
             `4.3` = if(`4.3`='',NULL,'$w4_3'),
             `4.4` = if(`4.4`='',NULL,'$w4_4'),
             `4.5` = if(`4.5`='',NULL,'$w4_5'),
             `4.6` = if(`4.6`='',NULL,'$w4_6'),
             `5.1` = if(`5.1`='',NULL,'$w5_1'),
             `5.2` = if(`5.2`='',NULL,'$w5_2'),
             `5.3` = if(`5.3`='',NULL,'$w5_3'),
             `5.4` = if(`5.4`='',NULL,'$w5_4')

            WHERE Subplo = $course_no
           
        ");
        return $result;
    }

    public function update_total($plo,$t21) {
        $result = mysqli_query($this->conn, "UPDATE totalplo SET 
             `2.1` = '$t21'
            WHERE PLO = $plo 
           
        ");
        return $result;
    }

    // edit plo

    public function scoring($w1_1,$w1_2,$w1_3,$w1_4,$w1_5,$w1_6,$w1_7,$w2_1,$w2_2,$w2_3,$w2_4,$w2_5,$w2_6,$w2_7,$w2_8
    ,$w3_1,$w3_2,$w3_3,$w3_4,$w4_1,$w4_2,$w4_3,$w4_4,$w4_5,$w4_6,$w5_1,$w5_2,$w5_3,$w5_4) {
        $result = mysqli_query($this->conn, "UPDATE scoring SET 
             `1.1` = '$w1_1',
             `1.2` = '$w1_2',
             `1.3` = '$w1_3',
             `1.4` = '$w1_4',
             `1.5` = '$w1_5',
             `1.6` = '$w1_6',
             `1.7` = '$w1_7',
             `2.1` = '$w2_1',
             `2.2` = '$w2_2',
             `2.3` = '$w2_3',
             `2.4` = '$w2_4',
             `2.5` = '$w2_5',
             `2.6` = '$w2_6',
             `2.7` = '$w2_7',
             `2.8` = '$w2_8',
             `3.1` = '$w3_1',
             `3.2` = '$w3_2',
             `3.3` = '$w3_3',
             `3.4` = '$w3_4',
             `4.1` = '$w4_1',
             `4.2` = '$w4_2',
             `4.3` = '$w4_3',
             `4.4` = '$w4_4',
             `4.5` = '$w4_5',
             `4.6` = '$w4_6',
             `5.1` = '$w5_1',
             `5.2` = '$w5_2',
             `5.3` = '$w5_3',
             `5.4` = '$w5_4',
             
            

            
           
        ");
        return $result;
    }

    //-----------------------------แสดงข้อความ--------------------------
    public function alert($msg) {
        echo"<script language=\"javascript\">alert('$msg');</script>";
    }

    //----------------------Query ข้อมูลจาก Database---------------------
    public function query($sql_query) {
        $res_qry = mysqli_query($this->conn,$sql_query);
        return $res_qry;
    }

    public function rows($sql_query) {
        $res_qry = mysqli_query($this->conn,$sql_query);
        $row = mysqli_num_rows($res_qry);
        return $row;
    }

    public function query_fetch($sql_query) {
        $res_qry = mysqli_query($this->conn,$sql_query);
        $res_fet = mysqli_fetch_array($res_qry);
		foreach ($res_fet as $key=>$value) {
			$res_fet[$key] = stripslashes($value);
		}
        return $res_fet ;
    }


    public function query_fetch_all($sql_query) {
        $res_qry = mysqli_query($this->conn,$sql_query);

        while ($res_rows = mysqli_fetch_array($res_qry)) {
                foreach ($res_rows as $key=>$value) {
                    $res_rows[$key] = stripslashes($value);
                }
                $res_fet[] = $res_rows;
        }
        if($res_qry){
            return $res_fet;
        }
        else{
            return NULL;
        }


    }
	
    public function get_thai_day($dt) {
        $exp = explode("-", $dt);
        switch ($exp[1]) {
            case '1' :$res = (int)$exp[2] . "   มกราคม " . ($exp[0] + 543);
                break;
            case '2' :$res = (int)$exp[2] . "   กุมภาพันธ์ " . ($exp[0] + 543);
                break;
            case '3' :$res = (int)$exp[2] . "   มีนาคม " . ($exp[0] + 543);
                break;
            case '4' :$res = (int)$exp[2] . "   เมษายน " . ($exp[0] + 543);
                break;
            case '5' :$res = (int)$exp[2] . "   พฤษภาคม " . ($exp[0] + 543);
                break;
            case '6' :$res = (int)$exp[2] . "   มิถุนายน " . ($exp[0] + 543);
                break;
            case '7' :$res = (int)$exp[2] . "   กรกฎาคม " . ($exp[0] + 543);
                break;
            case '8' :$res = (int)$exp[2] . "  สิงหาคม " . ($exp[0] + 543);
                break;
            case '9' :$res = (int)$exp[2] . "   กันยายน " . ($exp[0] + 543);
                break;
            case '10' :$res = (int)$exp[2] . "   ตุลาคม " . ($exp[0] + 543);
                break;
            case '11' :$res = (int)$exp[2] . "   พฤศจิกายน " . ($exp[0] + 543);
                break;
            case '12' :$res = (int)$exp[2] . "  ธันวาคม " . ($exp[0] + 543);
                break;
            //default: $res = (int)$exp[2] . " " . $res . "   มกราคม " . ($exp[0] + 543);
        }
		if($dt == null || $dt=="0000-00-00" || $dt==""){
			$res="-";
		}
        return $res;
    }
	
	public function get_month_year($my,$lg){
		$arrMonthTh=array('มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม');
		$arrMonthEn=array("January","February","March","April","May","June","July","August","September","October","November","December");
		$resExp=explode("-",$my);
		if($lg=="th"){
			$MY= $arrMonthTh[(int)$resExp[1]-1]." ".($resExp[0]+543);
		}else{
			$MY= $arrMonthEn[(int)$resExp[1]-1]." ".($resExp[0]);
		}
		return $MY;
	}
	

    public function get_thai_shot_day($dt) {
        $exp = explode("-", $dt);
        switch ($exp[1]) {
            case '1' :$res = (int) $exp[2] . "  ม.ค. " . ($exp[0] + 543);
                break;
            case '2' :$res = (int) $exp[2] . "   ก.พ. " . ($exp[0] + 543);
                break;
            case '3' :$res = (int) $exp[2] . "   มี.ค. " . ($exp[0] + 543);
                break;
            case '4' :$res = (int) $exp[2] . "   เม.ย. " . ($exp[0] + 543);
                break;
            case '5' :$res = (int) $exp[2] . "   พ.ค. " . ($exp[0] + 543);
                break;
            case '6' :$res = (int) $exp[2] . "   มิ.ย. " . ($exp[0] + 543);
                break;
            case '7' :$res = (int) $exp[2] . "   ก.ค. " . ($exp[0] + 543);
                break;
            case '8' :$res = (int) $exp[2] . "  ส.ค. " . ($exp[0] + 543);
                break;
            case '9' :$res = (int) $exp[2] . "   ก.ย. " . ($exp[0] + 543);
                break;
            case '10' :$res = (int) $exp[2] . "   ต.ค. " . ($exp[0] + 543);
                break;
            case '11' :$res = (int) $exp[2] . "   พ.ย. " . ($exp[0] + 543);
                break;
            case '12' :$res = (int) $exp[2] . "  ธ.ค. " . ($exp[0] + 543);
                break;
            default: $res = "-";
        }
        return $res;
    }
	
	
	public function get_eng_date($dt) {
        $exp = explode("-", $dt);
        switch ($exp[1]) {
            case '1' :$res = (int) $exp[2] . "  January " . ($exp[0]);
                break;
            case '2' :$res = (int) $exp[2] . " February " . ($exp[0] );
                break;
            case '3' :$res = (int) $exp[2] . "   March " . ($exp[0] );
                break;
            case '4' :$res = (int) $exp[2] . "   April " . ($exp[0] );
                break;
            case '5' :$res = (int) $exp[2] . "   May " . ($exp[0] );
                break;
            case '6' :$res = (int) $exp[2] . "   June " . ($exp[0]);
                break;
            case '7' :$res = (int) $exp[2] . "   July " . ($exp[0] );
                break;
            case '8' :$res = (int) $exp[2] . "  August " . ($exp[0] );
                break;
            case '9' :$res = (int) $exp[2] . "   September " . ($exp[0] );
                break;
            case '10' :$res = (int) $exp[2] . "   October " . ($exp[0] );
                break;
            case '11' :$res = (int) $exp[2] . "  November " . ($exp[0] );
                break;
            case '12' :$res = (int) $exp[2] . " December " . ($exp[0] );
                break;
            default: $res = "-";
        }
        return $res;
    }

    public function get_thai_shot_day_time($dt) {
        $sr = explode(" ", $dt);
        $exp = explode("-", $sr[0]);
        switch ($exp[1]) {
            case '1' :$res = (int) $exp[2] . "  ม.ค. " . ($exp[0] + 543);
                break;
            case '2' :$res = (int) $exp[2] . "   ก.พ. " . ($exp[0] + 543);
                break;
            case '3' :$res = (int) $exp[2] . "   มี.ค. " . ($exp[0] + 543);
                break;
            case '4' :$res = (int) $exp[2] . "   เม.ย. " . ($exp[0] + 543);
                break;
            case '5' :$res = (int) $exp[2] . "   พ.ค. " . ($exp[0] + 543);
                break;
            case '6' :$res = (int) $exp[2] . "   มิ.ย. " . ($exp[0] + 543);
                break;
            case '7' :$res = (int) $exp[2] . "   ก.ค. " . ($exp[0] + 543);
                break;
            case '8' :$res = (int) $exp[2] . "  ส.ค.  " . ($exp[0] + 543);
                break;
            case '9' :$res = (int) $exp[2] . "   ก.ย. " . ($exp[0] + 543);
                break;
            case '10' :$res = (int) $exp[2] . "   ต.ค. " . ($exp[0] + 543);
                break;
            case '11' :$res = (int) $exp[2] . "   พ.ย. " . ($exp[0] + 543);
                break;
            case '12' :$res = (int) $exp[2] . "  ธ.ค. " . ($exp[0] + 543);
                break;
            default: $res = "-";
        }
        return $res;
    }
	
	

    public function disconnect_db() {
        //mysql_close();
    }

}

// End Class
?>

