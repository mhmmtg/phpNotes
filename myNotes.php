<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Sample Form</title>
</head>
<body>

<?php
$formTitle = $firstParagraph = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $formTitle = inputCheckher($_POST['formtitle']);
    $firstParagraph = inputCheckher($_POST['firstparag']);
}

//if(empty($formTitle)){}
function inputCheckher($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

?>

<h1>Php Sample Form</h1>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <label for="formtitle">Form Title:</label><br>
    <input type="text" name="formtitle" placeholder="enter form title"><br><br>

    <label for="firstparag">First name:</label><br>
    <input type="text" name="firstparag" placeholder="enter some text"><br><br>

    <input type="submit" value="Submit">
</form>

<h1>Your Input</h1>
    <h2>Form Title: <?=$formTitle ?></h2>
    <h3>First Paragraph: <?=$firstParagraph ?></h3>

</body>
</html>
