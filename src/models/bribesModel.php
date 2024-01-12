<?php 

function createConnection(): PDO
{
    return new PDO("mysql:host=" . SERVER . ";dbname=" . DATABASE . ";charset=utf8", USER, PASSWORD);
}


function getAllBribes(): array
{
    // Fetching all recipes from database - assuming the database is okay
$connection = createConnection();
$statement = $connection->query('SELECT `id`, `name`, `payment` FROM checkpoint1');
$bribes = $statement->fetchAll(PDO::FETCH_ASSOC);
return $bribes;

}

function insert(array $bribe): void
{
    $pdo = createConnection();
    $sql = " INSERT INTO `bribe` (`name`, `payement`) VALUES (:name, :payment)";
    $query = $pdo->prepare($sql);
    $query->bindValue(':name', $bribe['name'], PDO::PARAM_STR );
    $query->bindValue(':payment', $bribe['payment'], PDO::PARAM_STR);

    $query->execute();
}
