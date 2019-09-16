<html>
  <head>
    <title>add submit -Gutto's Sports Cards!</title>
  </head>
  <body>
    add card submit! <br /><br />
    <a href="index.php">Home Page! </a><br />
    <a href="addCard.php">Add Your Card! </a><br />
    <a href="listAllCards.php">List All Cards! </a><br />
    <a href="listByGrade.php">List by Grade! </a><br /><br />
    <a href="http://www.google.com">Google</a><br />
    <a href="http://www.ebay.com">eBay</a><br />
    <a href="phpinfo.php">Server Info </a><br /><br />
   
    <?php
    
      $name= $_GET["playerName"];
      $year= $_GET["year"];
      $brand= $_GET["brand"];
      $grade= $_GET["grade"];
      $value= $_GET["value"];
      
      try {
        $db = new PDO('sqlite:cards.db');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } 
      catch (PDOException $e) 
      {
        echo $e->getMessage();
      }
      $query = "INSERT INTO cards VALUES('$name','$year','$brand','$grade','$value')";
        
      $sth = $db->prepare($query);
      $sth->execute();  
	    
	      printf("%s by %s from %s with a %s grade for an estimate value of $%s INSERTED", $name, $brand, $year, $grade, $value); 
      
      $db = null;
     
    ?>
           
   <br /><img src= "griffey.jpg" /><br />
  </body>



</html>