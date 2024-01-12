<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/book.css">
    <title>Checkpoint PHP 1</title>
</head>

<body>
    <?php require_once '../src/models/bribesModel.php '; ?>
    <?php $bribes = getAllBribes(); ?>
    <?php require_once 'connec.php' ?>
    <?php include 'header.php'; ?>

    <main class="container">

        <section class="desktop">
            <div class="whisky_glasses">
                <img src="image/whisky.png" alt="a whisky glass" class="whisky" />
                <img src="image/empty_whisky.png" alt="an empty whisky glass" class="empty-whisky" />
            </div>

            <div class="pages">
                <div class="page leftpage">
                    <h1>Add a bribe</h1>
                    
                    <form action="index.php" method="post">
                        <div>
                            <label for="name">Name :</label>
                            <input type="text" id="name" name="name">
                        </div>
                        <div>
                            <label for="payment">Payment :</label>
                            <input type="text" id="payment" name="payment"></input>
                        </div>
                        <div class="button">
                            <button type="submit">Envoyer la note</button>
                        </div>
                    </form>

                    <div class="page rightpage">
                        <table>
                            <tr>
                                <th>Name</th>
                                <th>Payment</th>
                            </tr>
                            <?php foreach ($bribes as $bribe) : ?>
                                <td><?= $bribe['name'] ?></td>
                                <td><?= $bribe['payement'] ?>$</td>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="pen">
                <img src="image/inkpen.png" alt="an ink pen" class="inkpen" />
            </div>
        </section>
    </main>
</body>

</html>