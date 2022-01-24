<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Sample Form</title>
</head>
<body>

<?php
$formTitle = $firstParagraph = "";

//if(empty($formTitle)){}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formTitle = inputCheckher($_POST['formtitle']);
    $firstParagraph = inputCheckher($_POST['firstparag']);
}

try {
    $db = new PDO("mysql:host=localhost; dbname=test; charset=utf8", "root", "");
} catch (Exception $e) {
    echo $e;
}

selectOne();
selectAll();
insertQuery();
updateQuery();
deleteQuery();


function inputCheckher($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

function selectOne() {
    global $db;
    $id = 3;
    $getOneQuery = $db->query("SELECT * FROM deneme WHERE den_id = $id")->fetch(PDO::FETCH_ASSOC);

    //$getOneQuery = $db->query("SELECT * FROM deneme WHERE den_id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
    //print_r($getOneQuery);

    echo $getOneQuery['den_ad'];
}

function selectAll() {
    global $db;
    $getAllQuery = $db->query("SELECT * FROM deneme", PDO::FETCH_ASSOC);
    echo $getAllQuery->rowCount() . "<br>"; //if
    foreach ($getAllQuery as $row) {
        echo $row['den_ad'] . "<br>";
    }
}

function insertQuery() {
    global $db;
    $insertQuery = $db->prepare("INSERT INTO deneme(den_ad) values (?)");
    //$insertQuery = $db->prepare("INSERT INTO deneme SET den_ad = ?");

    $insertOK = $insertQuery->execute(array("deneme"));

    //if ($insertQuery->rowCount()){}
    if ($insertOK) {
        $last_id = $db->lastInsertId();
        echo "insertOK";
        echo $last_id;
    }
}

function updateQuery() {
    global $db;
    $updateQuery = $db->prepare("UPDATE deneme SET den_ad = ? WHERE den_id = ?");
    $updateQuery->execute(array("denemeyeni", "3"));
}

function deleteQuery() {
    global $db;
    $deleteQuery = $db->prepare("DELETE FROM deneme WHERE den_id = ?");
    $deleteQuery->execute(array(5)); //$delete = ...
}

$db = null;
?>

<h1>Php Sample Form</h1>

<form action="<?php echo inputCheckher($_SERVER["PHP_SELF"]) ?>" method="post">
    <label for="formtitle">Form Title:</label><br>
    <input type="text" name="formtitle" placeholder="enter form title"><br><br>

    <label for="firstparag">First name:</label><br>
    <input type="text" name="firstparag" placeholder="enter some text"><br><br>

    <input type="submit" value="Submit">
</form>

<h1>Your Input</h1>
<h2>Form Title: <?= $formTitle ?></h2>
<h3>First Paragraph: <?= $firstParagraph ?></h3>

</body>
</html>


