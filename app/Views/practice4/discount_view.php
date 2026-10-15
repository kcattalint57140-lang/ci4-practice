<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount Calculator</title>
</head>
<body>
    <form action="<?= base_url('practice4/discount') ?>" method="POST">
        <label>ราคาสินค้า:</label>
        <input type="number" name="price" required>
        <br><br>
        <label>ส่วนลด (%):</label>
        <input type="number" name="discount" required>
        <br>
        <button type="submit">คำนวนราคา</button>
    </form>
    <hr>

    <?php if (isset($netprice)): ?>
        <h3>ราคาสินค้าที่ต้องชำระ</h3>
        <p>ราคาสินค้า: <strong><?= $netprice ?></strong></p>
        <p><strong><?= $shippingfee ?></strong></p>  
    <?php endif; ?>
</body>
</html>