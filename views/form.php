<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mokesčių forma</title>
</head>
<body>
    <div class="wrapper">
        <div class="text">
            <h1>Įveskite mokesčių duomenis</h1>
            <p>Įveskite šiuos duomenis: kilovatai, tarifas, tarifo tipas (diena/naktis), mėnesis už kurį mokama</p>
        </div>
        <div class="form">
            <form action="./form" method="POST">
<!--                <form action="./data_entered" method="POST">-->

                <label for="data_entered">Įveskite duomenis šiuo formatu:</label>
                <label for="data_entered" style="font-weight: bold">xxxx.xx;xx.xx;tipas;xx</label>
                <br>
                <input type="text" name="data_entered" id="data_entered" placeholder="xxxx.xx;xx.xx;tipas;xx">
                <input type="submit" name="add" id="add" value="Pridėti duomenis">
            </form>
        </div>
        <br>
<!--        <div>-->
<!--            <form action="total.php" method="post"></form>-->
<!--            <input type="submit" name="total" id="total" value="Viso">-->
<!--        </div>-->
    </div>
</body>
</html>