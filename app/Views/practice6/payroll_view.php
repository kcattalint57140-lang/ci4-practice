<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Payroll</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <div class="card shadow p-4">
                <h2 class="text-center mb-4 text-primary">
                    โปรแกรมคำนวณเงินเดือน
                </h2>
                <form action="<?= base_url('practice6/payroll') ?>" method="POST">
                    <div class="form-floating mb-3">
                        <input id="floatingName" type="text" name="emp_name" class="form-control" required>
                        <label for="floatingName">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input id="floatingSalary" type="number" name="salary" class="form-control" required>
                        <label for="floatingSalary">Salary</label>
                    </div>
                    <button type="submit">คำนวณ</button>
                    <?php if (isset($emp_name, $salary, $tax_rate, $tax_amont, $net_salary)): ?>
                        <div class="alert alert-info mt-4 text-center">
                            <h3>รายละเอียดเงินเดือน</h3>
                            <p class="mb-1">ชือพนักงาน: <strong><?= $emp_name ?></strong></p>
                            <p class="bm-0">เงินเดือนตั้งต้น: <strong><?= $salary ?></strong></p>
                            <p class="bm-0">อัตราภาษีที่โดนหัก: <strong><?= $tax_rate ?></strong> </p>
                            <p class="bm-0">จำนวนเงินภาษี: <strong><?= $tax_amont ?></strong></p>
                            <p class="mb-1">เงินเดือนสุทธิ: <strong><?= $net_salary ?></strong></p>
                            
                        </div>
                    <?php endif; ?>

                    
                </form>
            </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>