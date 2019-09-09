<html>
  <head>
    <title>Gutto's Sports Cards!</title>
  </head>
  <body>
    Gutto's Home Page! <br /><br />
    <a href="index.php">Home Page! </a><br />
    <a href="addCard.php">Add Your Card! </a><br />
    <a href="listAllCards.php">List All Cards! </a><br />
    <a href="listByGrade.php">List by Grade! </a><br /><br />
    <a href="http://www.google.com">Google</a><br />
    <a href="http://www.ebay.com">eBay</a><br />
    <a href="phpinfo.php">Server Info </a><br /><br />
    
    
    <?php
    
      if($db = sqlite_open('cards.db', 0666, $sqliteError))
      {
	      sqlite_query($db, 'DROP TABLE cards');
	      sqlite_query($db, 'CREATE TABLE cards(playerName varchar(20), year varchar(4), brand varchar(11), grade varchar(13), value varchar(10))');
	      printf("database created");
      }
      else
      {
	      die($sqliteError);
      }
    ?>
   
           
    <img src= "griffey.jpg" /><br />
  </body>



</html>