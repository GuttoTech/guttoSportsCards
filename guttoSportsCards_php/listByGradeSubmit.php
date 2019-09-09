<html>
  <head>
    <title>Grade List -Gutto's Sports Cards!</title>
  </head>
  <body>
    List Of Graded Cards! <br /><br />
    <a href="index.php">Home Page! </a><br />
    <a href="addCard.php">Add Your Card! </a><br />
    <a href="listAllCards.php">List All Cards! </a><br />
    <a href="listByGrade.php">List by Grade! </a><br /><br />
    <a href="http://www.google.com">Google</a><br />
    <a href="http://www.ebay.com">eBay</a><br />
    <a href="phpinfo.php">Server Info </a><br /><br />
    <img src= "griffey.jpg" /><br />
    
     <?php
    
      $grade= $_GET["grade"];
      if($db = sqlite_open('cards.db', 0666, $sqliteError))
      {
	      //CREATE TABLE cards(playerName varchar(20), year varchar(4), brand varchar(11), grade varchar(13), value varchar(10))');
	     $query= sqlite_query($db,"SELECT playerName, year, brand, grade, value FROM cards WHERE grade='$grade'");
	     $results = sqlite_fetch_all($query, SQLITE_ASSOC);
	     
	     foreach($results as $result)
	     {
		      printf("%s from %s by %s with a %s grade for an estimate value of $%s <br />", $result['playerName'],$result['year'],$result['brand'],$result['grade'],$result['value'] ); 
	     }
      }
      else
      {
	      die($sqliteError);
      }
    ?>
    
    
    
    
    
  </body>



</html>