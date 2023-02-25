<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Įvesta informacija</title>
</head>
<body>
    <div class="wrapper">
        <div class="text">
            <h1>Jūsų duomenys:</h1>
            <div>
                <?php if (true): ?>
                    <p><?php echo $message ?></p>
                <?php else:?>
                    <p><?php echo $errorMessage ?></p>
                <?php endif; ?>
            </div>

            <p>Norėdami pridėti daugiau duomenų, paspauskite mygtuką 'Atgal'. Norėdami pridėti daugiau duomenų, paspauskite mygtuką 'Viso'.</p>
        </div>
        <div>
            <button><a href="./form">Atgal</a></button>
        </div>

        <div>
            <form action="./total" method="POST">
                <input type="submit" name="total" id="total" value="Viso">
            </form>
        </div>
    </div>
</body>
</html>