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
      try {
        $db = new PDO('sqlite:C:\Users\micha\OneDrive\Documents\development\guttoSportsCards_php\cards.db');
      }
      catch(PDOException $e) {
          echo $e->getMessage();
      }

      //create table
      $db->exec("CREATE TABLE cards(playerName TEXT, year INTEGER, brand TEXT, grade TEXT, value INTEGER)");
      	      
	    printf("Database Created");
      
    ?> 

   
           
    <img src= "griffey.jpg" /><br />
  </body>



</html>