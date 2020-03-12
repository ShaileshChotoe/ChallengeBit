<?php 
$randomcode = '4268';

// function generateRandomCode() {
//     return rand(1000, 8000);
// }

$host = 'localhost';
$dbname = 'bit';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);

$sql = "DELETE FROM admin;
INSERT INTO admin (code)
VALUES (?);";
$stmt = $pdo->prepare($sql);
$stmt->execute([$randomcode]);

$pdo2 = new PDO($dsn, $user, $pass);

$sql2 = "SELECT * FROM users where code = ?";
$stmt2 = $pdo2->prepare($sql2);
$stmt2->execute([$randomcode]);

$data = $stmt2->fetchAll(PDO::FETCH_OBJ);


function showQuestions() {
    global $naam;
    global $question;
    global $data;
    foreach ($data as $key => $value) {
        echo  
        "<div onclick='show(this)' class='vragenlijst'>" . 
                "<div class='naamuser'>$value->naam</div>" . 
                "<div class='vraaguser'>$value->question</div>" . 
        "</div>";
    }
}

?>