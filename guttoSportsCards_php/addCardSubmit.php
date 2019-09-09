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
     //'CREATE TABLE cards(playerName varchar(20), year varchar(4), brand varchar(11), grade varchar(13), value varchar(10))');
     if($db = sqlite_open('cards.db', 0666, $sqliteError))
      {
	      sqlite_query($db,"INSERT INTO cards VALUES('$name','$year','$brand','$grade','$value')");
	      printf("%s by %s from %s with a %s grade for an estimate value of $%s INSERTED", $name, $brand, $year, $grade, $value); 
      }
      else
      {
	      die($sqliteError);
      }
     
     
    ?>
           
   <br /><img src= "griffey.jpg" /><br />
  </body>



</html>