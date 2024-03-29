<?php 

function createConnection(): PDO
{
    return new PDO("mysql:host=" . SERVER . ";dbname=" . DATABASE . ";charset=utf8", USER, PASSWORD);
}


function getAllBribes(): array
{
$pdo = createConnection();
$statement = $pdo->query('SELECT `id`, `name`, `payment` FROM checkpoint1');
$bribes = $statement->fetchAll(PDO::FETCH_ASSOC);
return $bribes;

}

function insert(array $bribe): void
{
    $pdo = createConnection();
    $statement = " INSERT INTO `bribe` (`name`, `payement`) VALUES (:name, :payment)";
    $query = $pdo->prepare($statement);
    $query->bindValue(':name', $bribe['name'], PDO::PARAM_STR );
    $query->bindValue(':payment', $bribe['payment'], PDO::PARAM_STR);

    $query->execute();
}
