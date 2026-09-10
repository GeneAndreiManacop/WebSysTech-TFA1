<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About the POS System</title>
    <link rel="stylesheet" href="<?= base_url('public/src/style.css') ?>">

    <style>
        .about-container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .about-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .about-header h1 {
            color: #1f2937;
            margin-bottom: 10px;
        }

        .about-header p {
            color: #6b7280;
            font-size: 1.05rem;
        }

        .about-introduction {
            background: #f8fafc;
            border-left: 5px solid #2563eb;
            padding: 24px;
            margin-bottom: 35px;
        }

        .about-introduction h2 {
            margin-top: 0;
            color: #1e3a8a;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .feature-card {
            padding: 48px 24px;
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
            text-align: center;
        }

        .feature-card h3 {
            margin-top: 0;
        }

        .feature-card p {
            color: #6b7280;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .features {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <?= $this->include('components/navbar') ?>

    <main class="about-container">
        <header class="about-header">
            <h1>About the P.O.S. System</h1>
            <p>A simple and reliable system for managing daily sales operations.</p>
        </header>

        <section class="features">
            <article class="feature-card">
                <h3>Sales Management</h3>
                <p>Record and monitor transactions efficiently.</p>
            </article>

            <article class="feature-card">
                <h3>User Management</h3>
                <p>Manage staff accounts and assign appropriate roles.</p>
            </article>

            <article class="feature-card">
                <h3>Customer Records</h3>
                <p>Keep customer information organized and accessible.</p>
            </article>
        </section>
    </main>
</body>
</html>