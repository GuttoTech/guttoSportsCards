<html>

<head>
    <title>Card List -Gutto's Sports Cards!</title>
</head>

<body>
    List Of All Cards! <br /><br />
    <a href="index.php">Home Page! </a><br />
    <a href="addCard.php">Add Your Card! </a><br />
    <a href="listAllCards.php">List All Cards! </a><br />
    <a href="listByGrade.php">List by Grade! </a><br /><br />
    <a href="http://www.google.com">Google</a><br />
    <a href="http://www.ebay.com">eBay</a><br />
    <a href="phpinfo.php">Server Info </a><br /><br />
    <img src="griffey.jpg" /><br />

    <section>
        <?php

            try {
                $db = new PDO('sqlite:cards.db');
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } 
            catch (PDOException $e) 
            {
                echo $e->getMessage();
            }

            $query = "SELECT playerName, year, brand, grade, value FROM cards";
            //$results = $db->query($query);
            $sth = $db->prepare($query);
            $sth->execute();
            $sth->setFetchMode(PDO::FETCH_ASSOC);

            $results = $sth->fetchAll();

            foreach ($results as $result) 
            {
                printf("%s from %s by %s with a %s grade for an estimate value of $%s <br />", $result['playerName'], $result['year'], $result['brand'], $result['grade'], $result['value']);
            }

            $db = null;
        
        ?>
    </section>




</body>



</html>