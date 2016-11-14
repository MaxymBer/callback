<?php
header("Content-type: text/plain; charset=UTF-8");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);



if(isset($_GET['unicmod'])){
       $host="localhost";
       $dbname="test";
       $user="root"; 
       $pass="";
      try {
       # MySQL через PDO_MYSQL 
       $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
      } 
       catch(PDOException $e) {
       echo $e->getMessage(); 
      }

      
       $stmt = $DBH->prepare("select 
*
  from 
    tof_link_la_typ 
  where 
    LAT_TYP_ID =  '".$_GET['unicmod'] ."'" );
  
//INNER JOIN TOF_COUNTRY_DESIGNATIONS ON TOF_COUNTRY_DESIGNATIONS.CDS_ID = TOF_MODELS_UA.MOD_CDS_ID 
//WHERE TOF_MODELS.MOD_MFA_ID = ".$_GET['brand']." AND TOF_COUNTRY_DESIGNATIONS.CDS_LNG_ID = '16' ORDER BY MOD_ID" );
       $stmt->execute();
       //$stm->execute(array($colName));
       /* $line = $stm->fetch();
       var_dump($line); */
       $number=1;
       foreach ($stmt as $row)
 {
//$resultJSON = json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
 }
}
echo $oneByOne;
?>