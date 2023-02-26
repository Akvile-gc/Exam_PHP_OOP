<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Viso</title>
</head>
<body>
    <div class="wrapper">
        <p>Įvesti duomenys:</p>
        <table>
            <thead>
            <tr style="font-weight: bold">
                <td>Kilovatai</td>
                <td>Tarifas</td>
                <td>Tarifo tipas</td>
                <td>Mėnesis</td>
                <td>Viso</td>
            </tr>
            </thead>
            <tbody>
            <?php $total = 0?>
            <?php foreach ($taxList as $tax):?>
            <?php if (count($tax) === 4):?>
                <tr>
                    <td><?php echo $tax['kw'] ?></td>
                    <td><?php echo $tax['tariff'] ?></td>
                    <td><?php echo $tax['type'] ?></td>
                    <td><?php echo $tax['month'] ?></td>
                    <?php $kw = (float)$tax['kw']?>
                    <?php $tariff = (float)$tax['tariff']?>
                    <?php $itemTotal = $kw * $tariff ?>
                    <td><?php echo $itemTotal ?></td>
                    <?php $total+=$itemTotal?>
                </tr>
            <?php endif;?>
            <?php endforeach; ?>
            </tbody>
            <tfoot>
            <tr style="font-weight: bold">
                <td colspan="4">Total</td>
                <td><?php echo $total?></td>
            </tr>
            </tfoot>
        </table>

<!--        needs to change tax details to PAID-->
        <div>
            <form action="./total" method="POST">
                <input type="submit" name="paid" id="paid" value="Deklaruoti ir sumokėti">
            </form>
        </div>
    </div>


</body>
</html>