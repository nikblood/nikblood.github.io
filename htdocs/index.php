<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
   
    <title>Document</title>

</head>
<body>
<div class="wrapper">
<div class="fullscr">
<form action="main.php" method="POST">
<div class="menu">
<!-- ДВИГАТЕЛЬ -->
<div class="engine">
    <h1>Тип двигателя</h1>
    <select class="type" name="type" id="">
        <option value="БЕНЗИНОВЫЙ">БЕНЗИНОВЫЙ</option>
        <option value="ДИЗЕЛЬНЫЙ">ДИЗЕЛЬНЫЙ</option>
        <option value="ЭЛЕКТРИЧЕСКИЙ">ЭЛЕКТРИЧЕСКИЙ</option>
        <option value="ГИБРИД">ГИБРИД</option>

    </select>
</div>
    <!-- ОБЬЕМ ДВИГАТЕЛЯ -->
    <div class="cmq">
        <h1>Объем двигателя(см3)</h1>
        
        <input class="cmq1" type="text" name="eng">
        <input class="cmq2" type="text" name="1">
       
    </div>
    <!-- <div class="import"> -->
        <!-- ЛИЦО
    <h1>Импортер</h1>
  <select class="impo" name="impo" id="">
      <option value="Физическое лицо">Физическое лицо</option>
  </select> 

</div> -->
  <!-- СТРАНА
  <div class="country">
      <h1>СТРАНА</h1>
    

<select class="country1" name="country1" id="">
<option value=""></option>
<option value="AM">AM</option>
<option value="UA">UA</option>
<option value="RU">RU</option>
<option value="UK">UK</option>

</select>

   </div> -->
     <!-- ГОД выпуска -->
  <div class="year">
      <!-- ГОД выпуска -->
  <h1>Год выпуска</h1>
  <select class="god" name="god" id="god">
    <option value=""></option>
    <option value="2021">2021</option>
    <option value="2020">2020</option>
    <option value="2019">2019</option>
    <option value="2018">2018</option>
    <option value="2017">2017</option>
    <option value="2016">2016</option>
    <option value="2015">2015</option>
    <option value="2014">2014</option>
    <option value="2013">2013</option>
    <option value="2012">2012</option>
    <option value="2011">2011</option>
    <option value="2010">2010</option>
    <option value="2009">2009</option>
    <option value="2008">2008</option>
    <option value="2007">2007</option>
    <option value="2006">2006</option>
    <option value="2005">2005</option>
</select>
  <select class="god1" name="god1" id="god1">
    <option value=""></option>
    <option value="2021">2021</option>
    <option value="2020">2020</option>
    <option value="2019">2019</option>
    <option value="2018">2018</option>
    <option value="2017">2017</option>
    <option value="2016">2016</option>
    <option value="2015">2015</option>
    <option value="2014">2014</option>
    <option value="2013">2013</option>
    <option value="2012">2012</option>
    <option value="2011">2011</option>
    <option value="2010">2010</option>
    <option value="2009">2009</option>
    <option value="2008">2008</option>
    <option value="2007">2007</option>
    <option value="2006">2006</option>
    <option value="2005">2005</option>
</select> 
  <select class="god2" name="god2" id="god2">
    <option value=""></option>
    <option value="2021">2021</option>
    <option value="2020">2020</option>
    <option value="2019">2019</option>
    <option value="2018">2018</option>
    <option value="2017">2017</option>
    <option value="2016">2016</option>
    <option value="2015">2015</option>
    <option value="2014">2014</option>
    <option value="2013">2013</option>
    <option value="2012">2012</option>
    <option value="2011">2011</option>
    <option value="2010">2010</option>
    <option value="2009">2009</option>
    <option value="2008">2008</option>
    <option value="2007">2007</option>
    <option value="2006">2006</option>
    <option value="2005">2005</option>
</select>

</div>


<br>
<!-- СТОИМОСТЬ -->
<div class="price">
    <h1>СТОИМОСТЬ</h1>
    <input class="money" type="text" name="money" id="">
    <input class="money1" type="text" name="money1" id="">
    <input name="submit" type="submit" value="Enter">
 

</div>
</form>
</div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="js/main.js"></script>    
</body>
</html>