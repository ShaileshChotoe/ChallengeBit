<?php

include 'host.php';

?>

<!DOCTYPE html>
<html>

<head>
    <title>Presentatie</title>
    <link rel="stylesheet" type="text/css" href="css/grootScherm.css">

</head>

<body>

    <div id="links">
        <div id="scrolvragen">
            <!-- <div class="vragenlijst">
                <div id="naamuser">dit is de naam</div>
                <div id="vraaguser">hier komt de vraag</div>
            </div> -->
            <?php showQuestions(); ?>
        </div>
    </div>

    <div id="rechts">
        <div id="tekst">
            <h1> code: <?php echo $randomcode; ?></h1>
        </div>
        <div class="vraag">
            <p class="naamtext"><?php echo $data[count($data) - 1]->naam;?></p>
            <p class="vraagtext"><?php echo $data[count($data) - 1]->question;?></p>
        </div>
    </div>
    <script src='script.js'></script>
</body>

</html>