<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    

<?php
// ВВОЗНАЯ ПОШЛИНА

    

$money = $_POST['money'];
$money1 = $_POST['money1'];
    $percent = 100.0;
    $all = 10.0;
    $else = 4.3;
    $other = 7.5;
    $sum2 = 27.91 ;
   (float)$compute=$money * $all / $percent;
   (float)$compute1=$money1 * $all / $percent;

    


// switch($_POST['impo']){
    //     case "Физическое лицо":
            
    //         return (float) $sum ;
    //         break;
    // }
   
  
// АКЦИЗНЫЙ СБОР

 

function compute1(){
    $eng = $_POST['eng'];
    $year21 = 50;
    $cmq1 = 1000;
    $cmq = 1000;
    $diz=$year21+25;
    $sum2 = 	33.4509 ;


 

   
    switch($_POST["god"]){
        
        case "2021":
            $sum1 = $eng / $cmq * $year21 ;
            return (float) $sum1 ;
            break;
        case "2020":
            $sum1 = $eng / $cmq * $year21;
           return (float) $sum1 ;
            break;
        case "2019":
            $sum1 = $eng / $cmq * $year21;        
            return (float) $sum1 ;
            break;
        case "2018":
            $sum1 = ($eng / $cmq) * ($year21 + 50);
            return (float) $sum1 ;
            break; 
        case "2017":
            $sum1 = ($eng / $cmq) * ($year21 + 100);
            return (float) $sum1 ;
            break; 
        case "2016":
            $sum1 = ($eng / $cmq) * ($year21 + 150);
            return (float) $sum1 ;
            break;
        case "2015":
            $sum1 = $eng / $cmq * ($year21 + 200);
            return (float) $sum1 ;
            break;
        case "2014":
            $sum1 = ($eng / $cmq) * ($year21 + 250);
            return (float) $sum1 ;
            break; 
        case "2013":
            $sum1 = ($eng / $cmq) * ($year21 + 300);
            return (float) $sum1 ;
            break;
        case "2012":
            $sum1 = ($eng / $cmq) * ($year21 + 350);
            return (float) $sum1 ;
            break; 
        case "2011":
            $sum1 = ($eng / $cmq) * ($year21 + 400);
            return (float) $sum1 ;
            break; 
        case "2010":
            $sum1 = ($eng / $cmq) * ($year21 + 450);
            return (float) $sum1 ;
            break;
        case "2009":
            $sum1 = ($eng / $cmq) * ($year21 + 500);
            return (float) $sum1 ;
            break;
        case "2008":
            $sum1 = ($eng / $cmq) * ($year21 + 550);
                return (float) $sum1 ;
                break; 
        case "2007":
            $sum1 = ($eng / $cmq) * ($year21 + 600);
                return (float) $sum1 ;
                break; 
        case "2006":
            $sum1 = ($eng / $cmq) * ($year21 + 650);
                return (float) $sum1 ;
                break;
        case "2005":
            $sum1 = ($eng / $cmq) * ($year21 + 700);
                return (float) $sum1 ;
                break;
                                                                
    
           
           
          
    }
 
    switch($_POST["god1"]){
        case "2021":
            $sum1 = $eng / $cmq1 * $diz;
            return (float)$sum1 ;
            break;
        case "2020":
            $sum1 = $eng / $cmq1 * $diz;
            return (float) $sum1 ;
            break;
        case "2019":
            $sum1 = $eng / $cmq1 * $diz;
            return (float) $sum1 ;
            break;
        case "2018":
            $sum1 = $eng / $cmq1 * ($diz + 75);         
             return (float) $sum1 ;
            break;
        case "2017":
        +
            $sum1 =$eng / $cmq1 * ($diz + 150);
            return (float) $sum1 ;
            break; 
        case "2016":
            $sum1 = $eng / $cmq1 * ($diz + 225);
            return (float) $sum1 ;
            break;
        case "2015":
            $sum1 = $eng / $cmq1 * ($diz + 300);
            return (float) $sum1 ;
            break;
        case "2014":
            $sum1 = $eng / $cmq1 * ($diz + 375);
            return (float) $sum1 ;
            break; 
        case "2013":
            $sum1 = $eng / $cmq1 * ($diz + 450);
            return (float) $sum1 ;
            break;
        case "2012":
            $sum1 = $eng / $cmq1 * ($diz + 525);
            return (float) $sum1 ;
            break; 
        case "2011":
            $sum1 = $eng / $cmq1 * ($diz + 600);
            return (float) $sum1 ;
            break; 
        case "2010":
            $sum1 = $eng / $cmq1 * ($diz + 675);
            return (float) $sum1 ;
            break;
        case "2009":
            $sum1 = $eng / $cmq1 * ($diz + 750);
            return (float) $sum1 ;
            break;
        case "2008":
            $sum1 = $eng / $cmq1 * ($diz + 825);
                return (float) $sum1 ;
                break; 
        case "2007":
            $sum1 = $eng / $cmq1 * ($diz + 900);
                return (float) $sum1 ;
                break; 
        case "2006":
            $sum1 = $eng / $cmq1 * ($diz + 975);
                return (float) $sum1 ;
                break;
        case "2005":
            $sum1 = $eng / $cmq1 * ($diz + 1050);
                return (float) $sum1 ;
                break;
              
                                                                
       
           
    }
    switch($_POST["god2"]){
        case "2021":
            $sum1 = $eng;
            return (float) $sum1 ;
            break;
        case "2020":
            $sum1 = $eng;
            return (float) $sum1 ;
            break;
        case "2019":
            $sum1 = $eng;
            return (float) $sum1 ;
            break;
        case "2018":
            $sum1 = $eng ;         
             return (float) $sum1 ;
            break;
        case "2017":
            $sum1 = $eng ;
            return (float) $sum1 ;
            break; 
        case "2016":
            $sum1 = $eng ;
            return (float) $sum1 ;
            break;
        case "2015":
            $sum1 = $eng ;
            return (float) $sum1 ;
            break;
        case "2014":
            $sum1 = $eng ;
            return (float) $sum1 ;
            break; 
        case "2013":
            $sum1 = $eng ;
            return (float) $sum1 ;
            break;
        case "2012":
            $sum1 = $eng ;
            return (float) $sum1 ;
            break; 
        case "2011":
            $sum1 = $eng ;
            return (float) $sum1 ;
            break; 
        case "2010":
            $sum1 = $eng ;
            return (float) $sum1 ;
            break;
        case "2009":
            $sum1 = $eng ;
            return (float) $sum1 ;
            break;
        case "2008":
            $sum1 = $eng ;
                return (float) $sum1 ;
                break; 
        case "2007":
            $sum1 = $eng ;
                return (float) $sum1 ;
                break; 
        case "2006":
            $sum1 = $eng ;
                return (float) $sum1 ;
                break;
        case "2005":
            $sum1 = $eng ;
                return (float) $sum1 ;
                break;
              
                                                                
       
           
           
          
    }
 
}
function compute3(){
    $money = $_POST['money1'];
    $eng1 = $_POST['1'];
    switch($_POST["type"]){
        case "ЭЛЕКТРИЧЕСКИЙ":
            $sum1 = $eng1;
            return (float) $sum1;
            break;
    }
        }

  function compute4(){
    $money = $_POST['money1'];
    $sum2 = 27.91 ;
    switch($_POST["type"]){
        case "ГИБРИД":
            $sum1 = ($money/100*10)+100;
            return (float) $sum1;
            break; 
        }
    }
   
              
    ?>
 <?php

$sum2 = 	33.45 ;
$dollar = 27.76;
$money = $_POST['money'];
$money1 = $_POST['money1'];
$eng = $_POST['eng'];
$eng1 = $_POST['1'];
$type = $_POST['type'];
$nds = ($money+$compute+compute1())*20/100;
$nds1 = compute3();
$ndsgib = (compute4() + $money1)/100*20;
$itogo = $compute + compute1() + $nds;
$compute = $compute ;
$itogo1 = compute3();
$itogo2 = (compute4()+$ndsgib);
if($type=="БЕНЗИНОВЫЙ"&$eng>2999){
    $acz = compute1() *2;
    $nds = ($acz+$money+$compute)/100*20;
    $itogo = $compute + $acz + $nds;
  

}
  elseif ($type=="БЕНЗИНОВЫЙ"&$eng<2999){
    $acz = compute1();
    $nds = ($acz+$money+$compute)/100*20;
    $itogo = $compute + $acz + $nds;
  
  }
  if($type=="ДИЗЕЛЬНЫЙ"&$eng>3500){
    $acz = compute1() *2;
    $nds = ($acz+$money+$compute)/100*20;
    $itogo = $compute + $acz + $nds;
  

}
  elseif ($type=="ДИЗЕЛЬНЫЙ"&$eng<3501){
    $acz = compute1();
    $nds = ($acz+$money+$compute)/100*20;
    $itogo = $compute + $acz + $nds;
  
  }
  
?>
<!-- ...........................БЕНЗИН+ДИЗЕЛЬ -->
<?php
if($type=="БЕНЗИНОВЫЙ"||$type=="ДИЗЕЛЬНЫЙ"){
?>
<h1>ввозная пошлина:  евро: <?php echo $compute?> грн: <?php echo $compute*$sum2?></h1>
<h1>АКЦИЗНЫЙ СБОР:  евро: <?php echo $acz?> грн: <?php echo $acz*$sum2?></h1>
<h1>НДС: евро: <?php echo $nds?> грн: <?php echo $nds*$sum2?></h1>
<h1>итого бензин/дизель:  евро: <?php echo $itogo?> грн: <?php echo $itogo*$sum2?></h1>
<?php
}?>
<!-- // ....................................ЭЛЕКТРО -->
<?php
if($type=="ЭЛЕКТРИЧЕСКИЙ"){
?>
<h1>ввозная пошлина:  евро: <?php echo 0?> грн: <?php echo 0?></h1>
<h1>АКЦИЗНЫЙ СБОР:  евро: <?php echo $eng1?> грн: <?php echo $eng1*$sum2?></h1>
<h1>НДС: евро: <?php echo 0?> грн: <?php echo 0?></h1>
<h1>итого электро: евро: <?php echo $itogo1?> грн: <?php echo $itogo1*$sum2?></h1>
<?php
}?>
<!-- .........................ГИБРИД -->
<?php
if($type=="ГИБРИД"){
?>
<h1>ввозная пошлина:  евро: <?php echo $compute1?> грн: <?php echo $compute1*$sum2?></h1>
<h1>АКЦИЗНЫЙ СБОР:  евро: <?php echo 100?> грн: <?php echo 100*$sum2?></h1>
<h1>НДС: евро: <?php echo $ndsgib?> грн: <?php echo $ndsgib*$sum2?></h1>
<h1>итого гибрид:  евро: <?php echo $itogo2?> грн: <?php echo $itogo2*$sum2?></h1>
<?php
}?>

</body>
</html>