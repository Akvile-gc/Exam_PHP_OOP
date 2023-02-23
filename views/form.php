<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tax Form</title>
</head>
<body>
    <div class="wrapper">
        <div class="text">
            <h1>Please enter the data</h1>
            <p>Please enter this data in the form: the kilowatts, tariff, type of tariff, month to be paid for</p>
        </div>
        <div class="form">
            <form action="data_entered.php" method="post">
                <label for="data_entered">Please enter this data in this format: xxxx.xx;xx.xx;day/night;xx</label>
                <input type="text" name="data_entered" id="data_entered" placeholder="xxxx.xx;xx.xx;day/night;xx">
                <input type="submit" name="add" id="add" value="Add the data">
            </form>
        </div>
        <div>
            <form action="total.php" method="post"></form>
            <input type="submit" name="total" id="total" value="Count total">
        </div>
    </div>
</body>
</html>