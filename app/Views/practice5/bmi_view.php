<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>BMI Calculator</title>
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow p-4">
                    <h2 class="text-center mb-4 text-primary">โปรแกรมคำนวน BMI</h2>
                        <form action="<?= base_url('practice5/bmi_clac') ?>" method="POST">
                            <div class="mb-3">
                                <label class="form-label">น้ำหนัก (kg.)</label>
                                <input type="number" name="weight" step="0.1" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">ส่วนสูง (cm.)</label>
                                <input type="number" name="height" step="0.1" class="form-control" required>
                            </div>
                            <button type="submit">คำนวน BMI</button>
                        </form>

                        <?php if (isset($bmi) && isset($status)): ?>
                            <div class="alert alert-info mt-4 text-center">
                                <h3>ผลการคำนวน BMI</h3>
                                <p class="mb-1">BMI: <strong><?= $bmi ?></strong></p>
                                <p class="bm-0">สถานะ: <strong><?= $status ?></strong></p>
                            </div>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>