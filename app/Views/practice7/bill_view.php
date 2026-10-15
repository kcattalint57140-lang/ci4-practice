<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Bill Splitter & Tip Calculator</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow p-4">
                    <h2 class="text-center mb-5 text-success">Bill Splitter & Tip Calculator</h2>
                    <form action="<?= base_url('practice7/bill') ?>" method="POST">
                        <div class="form-group mb-3">
                            <label for="total" class="form-label">Total Price:</label>
                            <input type="number" name="total_price" id="total" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="tip">Tip Percent(%):</label>
                            <input type="number" name="tip_percent" id="tip" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="pCount">People Count:</label>
                            <input type="number" name="people_count" id="pCount" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
    <?php if (isset($tip_amount, $grand_total, $per_person)): ?>
        <div class="alert alert-info mt-4 text-center">
            <h3>จำนวนเงินที่ต้องจ่าย</h3>
            <p class="mb-1">คำนวนเงินทิป: <strong><?= $tip_amount ?></strong></p>
            <p class="mb-1">ยอดรวมสุทธิ: <strong><?= $grand_total ?></strong></p>
            <p class="mb-1">ยอดที่แต่ละคนต้องจ่าย: <strong><?= $per_person ?></strong></p>
        </div>
    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>