<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ระบบคำนวณเงินเดือนพนักงาน</title>
</head>
<body>
    <h2>💼 ระบบคำนวณเงินเดือน (OOP Inheritance Practice)</h2>

    <form action="<?= base_url('practice2/payroll') ?>" method="POST">
        <p>
            <label>ชื่อพนักงาน:</label><br>
            <input type="text" name="name" required value="<?= $empName ?? '' ?>">
        </p>
        <p>
            <label>ประเภทพนักงาน:</label><br>
            <select name="type">
                <option value="fulltime">พนักงานประจำ (Full-Time)</option>
                <option value="parttime">พนักงานรายชั่วโมง (Part-Time)</option>
            </select>
        </p>
        <p>
            <label>ฐานเงินเดือน / ค่าจ้างต่อชั่วโมง (บาท):</label><br>
            <input type="number" step="any" name="amount" required>
        </p>
        <button type="submit">คำนวณเงินเดือนสุทธิ</button>
    </form>

    <hr>

    <?php if (isset($totalSalary)): ?>
        <h3>ผลลัพธ์การคำนวณ:</h3>
        <p><strong>ชื่อ:</strong> <?= $empName ?? '' ?></p>
        <p><strong>ประเภท:</strong> <?= $empType ?? '' ?></p>
        <p><strong>รับเงินสุทธิ:</strong> <u><?= $totalSalary ?></u> บาท</p>
    <?php endif; ?>

    <br>
    <a href="<?= base_url('/') ?>">← กลับหน้าหลัก</a>
</body>
</html>