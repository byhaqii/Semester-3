<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$total_price = '';
$discount = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $floor = $_POST['floor'];
    $type = $_POST['type'];
    $days = $_POST['days'];
    $discount_option = $_POST['discount'];

    // Room price calculation
    $price_per_day = $type == "Standard" ? 1500000 : ($type == "Superior" ? 1600000 : 2000000);
    $total_price = $price_per_day * $days;

    // Floor-based surcharge
    if ($floor > 5) {
        $total_price += 100000;
    }

    // Discount calculation
    if ($discount_option == "Member") {
        $discount = 0.2 * $total_price;
    } elseif ($discount_option == "Birthday Promo") {
        $discount = 50000;
    }

    $total_price -= $discount;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Hotel - Price Check</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f4e2dc;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            flex-grow: 1;
            padding-top: 50px;
        }

        h3 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .form-control, select {
            border-radius: 8px;
            border: 1px solid #ccc;
            padding: 6px;
        }

        .btn-primary {
            background-color: #ff6f61;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #d84315;
        }

        .result-section {
            margin-top: 30px;
            text-align: center;
        }

        .result-section .total-price-card {
            background: linear-gradient(45deg, #ff6f61, #ffafcc);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            color: white;
        }

        .total-price-card h4 {
            font-size: 2rem;
            font-weight: bold;
            margin: 0;
        }

        .total-price-card p {
            font-size: 1.2rem;
            margin-top: 10px;
        }

        .footer {
            background-color: #ffafcc;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: auto;
        }
    </style>
</head>
<body>
<?php include('navbar.php'); ?>

    <div class="container">
        <h3>Price Check</h3>
        <form action="" method="POST">
            <div class="form-group">
                <label for="floor">Floor</label>
                <input type="number" name="floor" id="floor" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="type">Room Type</label>
                <select name="type" id="type" class="form-control">
                    <option value="Standard">Standard</option>
                    <option value="Superior">Superior</option>
                    <option value="Deluxe">Deluxe</option>
                </select>
            </div>
            <div class="form-group">
                <label for="days">Number of Days</label>
                <input type="number" name="days" id="days" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="discount">Discount</label>
                <select name="discount" id="discount" class="form-control">
                    <option value="None">None</option>
                    <option value="Member">Member</option>
                    <option value="Birthday Promo">Birthday Promo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Check</button>
        </form>

        <?php if ($total_price !== ''): ?>
            <div class="result-section">
                <div class="total-price-card">
                    <h4>Total Price: <?= number_format($total_price) ?> IDR</h4>
                    <p>Total Discount: <?= number_format($discount) ?> IDR</p>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <footer class="footer">
        <p>Muhammad Rizal Al Baihaqi - 20 - 2341720225 - TI 2I</p>
    </footer>
</body>
</html>
