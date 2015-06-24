<html>
  <head>
    <title></title>
  </head>
  
  <body>
    <form action="">
      <input type="button">button</input></br>
      <input type="checkbox">checkbox</input></br>
      <input type="color">color</input></br>
      <input type="date">date</input></br>
      <input type="datetime">datetime</input></br>
      <input type="datetime-local">datetime-local</input></br>
      <input type="email">email</input></br>
      <input type="file">file</input></br>
      <input type="hidden">hidden</input></br>
      <input type="image">image</input></br>
      <input type="month">month</input></br>
      <input type="number">number</input></br>
      <input type="radio">radio</input></br>
      <input type="range">range</input></br>
      <input type="reset">reset</input></br>
      <input type="search">search</input></br>
      <input type="submit">submit</input></br>
      <input type="tel">tel</input></br>
      <input type="text">text</input></br>
      <input type="time">time</input></br>
      <input type="url">url</input></br>
      <input type="week">week</input></br>
    </form>
    
    <?php
      include "../model/open_db/open_db.php";
      include "../model/select/select.php";                    
     
      
      $conn2 = openDB();
      
      $query2 = "SELECT * FROM partidos ORDER BY idPartido";
      $result2 = mysqli_query($conn2,$query2);
      
      
      while($ri2 = mysqli_fetch_assoc($result2))
      {
        echo "<option value=" .$ri2['idPartido'] . ">" . $ri2['idPartido'] . " - " .  $ri2['nome'] . "</option>";
      }
      
      mysqli_close($conn2);
    ?>
    
  </body>
</html>