<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมแปลงอุณหภูมิ</title>
</head>
<body>
    <h2>🌡️ โปรแกรมแปลงอุณหภูมิ (Celsius -> Fahrenheit)</h2>

    <form action="<?= base_url('practice1/temp') ?>" method="POST">
        <label for="celsius">ใส่อค่าอุณหภูมิ (°C):</label>
        <input type="number" step="any" name="celsius" id="celsius" required
        value="<?= isset($celsius) ? $celsius : '' ?>">
        <button type="submit">แปลงค่า</button>
    </form>
    <hr>

    <?php if (isset($result)): ?>
        <h3>ผลลัพธ์:</h3>
        <p><?= $celsius ?> °C = <strong><?= $result ?> °F</strong></p>
        <?php endif; ?>
</body>
</html>