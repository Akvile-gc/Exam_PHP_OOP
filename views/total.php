<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Total</title>
</head>
<body>
    <div class="wrapper">
        <p>List of the cars:</p>
        <table>
            <thead>
            <tr style="font-weight: bold">
                <td>Kilowatts</td>
                <td>Tariff</td>
                <td>Type of Tariff</td>
                <td>Month</td>
                <td>Total</td>
            </tr>
            </thead>
            <tbody>
            <?php $total = 0?>
            <?php foreach ($taxList as $tax):?>

                <tr>
                    <td><?php echo $tax->getKw() ?></td>
                    <td><?php echo $tax->getTariff() ?></td>
                    <td><?php echo $tax->getType() ?></td>
                    <td><?php echo $tax->getMonth() ?></td>
                    <?php $itemTotal = ($tax->getKw() * $tax->getTariff()) ?>
                    <td><?php echo $itemTotal ?></td>
                    <?php $total+=$itemTotal?>
                </tr>
            <?php endforeach; ?>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="4">Total</td>
                <td><?php echo $total?></td>
            </tr>
            </tfoot>
        </table>

<!--        needs to change tax details to PAID-->
        <button><a href="./form.php">Back to the form</a></button>
    </div>


</body>
</html>