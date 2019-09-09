<html>
  <head>
    <title>Add Card -Gutto's Sports Cards!</title>
  </head>
  <body>
   <form action="addCardSubmit.php">
    Add Your Card! <br /><br />
    <a href="index.php">Home Page! </a><br />
    <a href="addCard.php">Add Your Card! </a><br />
    <a href="listAllCards.php">List All Cards! </a><br />
    <a href="listByGrade.php">List by Grade! </a><br /><br />
    <a href="http://www.google.com">Google</a><br />
    <a href="http://www.ebay.com">eBay</a><br />
    <a href="phpinfo.php">Server Info </a><br /><br />
   
    
    Enter Player Name: <input name="playerName" type="text" size="20"/><br /><br />
    Enter Card Year: &nbsp&nbsp<input name= "year" type="text" size="4"/><br /><br />
    Enter Card Brand: <select name= "brand">
                       <option>Topps</option>
                       <option>Donruss</option>
                       <option>Upper Deck</option> 
                       <option>Bowman</option>
                       <option>Fleer</option>                 
                      </select><br /><br />
    Enter Card Grade: <select name= "grade">
                       <option>Uncirculated</option>
                       <option>Mint</option>
                       <option>Excellent</option> 
                       <option>Good</option>
                       <option>Okay</option>                 
                      </select><br /><br />
    Enter Est. Card Value: <input name= "value" type="text" size="10"/><br /><br />                  
    
    <input type="submit"/><br /><br />  
    <img src= "nolanRyan.jpg" />                 
    <img src= "griffey.jpg" /><br />
    </form>
  </body>



</html>