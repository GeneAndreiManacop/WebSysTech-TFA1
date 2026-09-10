<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?= base_url('public/src/style.css') ?>">
    <style>
        .hero-section {
            text-align: center;
            padding: 100px 20px;
        }

        .hero-section h1 {
            font-size: 2.5rem;
            color: #1f2937;
            margin-bottom: 20px;
        }

        .hero-section p {
            font-size: 1.2rem;
            color: #6b7280;
        }

        .quick-nav {
            margin-top: 40px;
        }

        .quick-nav .btn {
            display: inline-block;
            padding: 20px 24px;
            margin: 10px;
            background-color: #1f2937;
            color: white;
            text-decoration: none;
            border-radius: 32px;
            min-width: 128px;
            transition: background-color 0.3s ease;
        }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <?= $this->include('components/navbar') ?>

    <!-- CONTENT -->
     <section class="hero-section">
        <h1>Welcome to the P.O.S System</h1>
        <p>The best solution for managing your business transactions.</p>

        <div class="quick-nav">
            <!-- two buttons for "Manage Users" and "Manage Customers" -->
            <a href="<?= base_url('users') ?>" class="btn">Manage Users</a>
            <a href="<?= base_url('customers') ?>" class="btn">Manage Customers</a>
        </div>
     </section>
</body>
</html>