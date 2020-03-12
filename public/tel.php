<?php

$naam = $_GET['naam'];
$code = $_GET['code'];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Stel een vraag</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

    <div id="text">
        <h1>Title</h1>
    </div>

    <form action="insert.php" method="get" class="form">
        <input type="hidden" name="naam" value=<?php echo $naam; ?>>
        <input type="hidden" name="code" value=<?php echo $code; ?>>
        <textarea id="vraag" class="input" placeholder="Stel hier je vraag" name="question" rows="10" cols="10" wrap="soft"></textarea>
        <input type="submit" value="Sent" class="knop">
    </form>

</body>

</html>