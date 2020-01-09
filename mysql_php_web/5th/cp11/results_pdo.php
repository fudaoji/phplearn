<!DOCTYPE html>
<html>
<head>
    <title>Book-O-Rama Search Results</title>
</head>
<body>
<h1>Book-O-Rama Search Results</h1>
<?php
header("Content-type:text/html;charset=utf-8");
require_once "../include/database.php";
// create short variable names
$searchtype=$_POST['searchtype'];
$searchterm="%{$_POST['searchterm']}%";

if (!$searchtype || !$searchterm) {
    echo '<p>You have not entered search details.<br/>
       Please go back and try again.</p>';
    exit;
}

// whitelist the searchtype
switch ($searchtype) {
    case 'Title':
    case 'Author':
    case 'ISBN':
        break;
    default:
        echo '<p>That is not a valid search type. <br/>
        Please go back and try again.</p>';
        exit;
}

try{
    $dsn = "mysql:host=".DB_HOST.";dbname=books";
    $db = new PDO($dsn, DB_USER, DB_PWD);
    $params = [
        ':search_param' => $searchterm,
        ':price' => 20
    ];

    $query = "SELECT ISBN, Author, Title, Price FROM Books WHERE ($searchtype like :search_param) or (Price < :price)"; //set up query

    $stmt = $db->prepare($query);  //constructs a statement
    foreach ($params as $k => $v){
        $stmt->bindParam($k, $v); //bind the parameters
    }
    exit($stmt->queryString);
    $stmt->execute(); //run the query

    echo "<p>Number of books found: ".$stmt->rowCount()."</p>";

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<p><strong>Title: ".$row['Title']."</strong>";
        echo "<br />Author: ".$row['Author'];
        echo "<br />ISBN: ".$row['ISBN'];
        echo "<br />Price: \$".number_format($row['Price'],2)."</p>";
    }

    $db = null; //disconnect from the db
}catch (PDOException $e){
    echo $e->getMessage();
}

?>
</body>
</html>
