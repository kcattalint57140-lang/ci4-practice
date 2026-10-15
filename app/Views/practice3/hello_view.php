<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice3</title>
</head>
<body>
    <h1>Input Your Nmae!</h1>
    <form action="<?= base_url('practice3/hello') ?>" method="POST">
        <label>ชื่อเล่น:</label>
        <input type="text" name="nickname" required>

        <br><br>

        <label>คะแนนสอบ (0-100):</label>
        <input type="number" name="score" min="0" max="100" required>

        <br><br>
        <button type="submit">ส่งขอมูล</button>
    </form>
    <hr>

    <?php if (isset($status)): ?>
        <h3>ผลการประเมิน</h3>
        <p>ชื่อเล่น: <strong><?= $nickname ?></strong></p>
        <p>สถานะ: <strong><?= $status ?></strong></p>
    <?php endif; ?>
</body>
</html>