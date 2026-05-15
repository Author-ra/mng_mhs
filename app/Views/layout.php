<!doctype html>
<html>
<head>
    <title>AKADEMIK</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Rubik+Mono+One&display=swap" rel="stylesheet">

    <style>
        :root{
            /* Premium brutalist-elegant palette (not just black) */
            --bg: #070707;

            --text: #F7F7F8;
            --muted: rgba(173, 170, 170, 0.53);

            --surface: rgba(15, 15, 15, 0.74);
            --surface-2: rgba(255, 255, 255, 0.06);

            /* Accent (gold + emerald micro accents) */
            --accent: #D4AF37;     /* gold */
            --accent-2: #34D399;   /* emerald */

            --border: rgba(212, 175, 55, 0.22);
            --border-2: rgba(52, 211, 153, 0.20);

            --shadow: 0 18px 45px rgba(0,0,0,0.55);
            --shadow-soft: 0 10px 28px rgba(0,0,0,0.45);

            --radius: 18px;
        }

        html, body{ height: 100%; }

        body{
            margin: 0;
            color: var(--text);
            font-family: 'Space Grotesk', system-ui, -apple-system, Arial, sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;

            background:
                /* subtle spotlight */
                radial-gradient(1200px 700px at 15% -10%, rgba(212,175,55,0.14), transparent 55%),
                radial-gradient(900px 600px at 90% 0%, rgba(52,211,153,0.10), transparent 52%),
                /* grid/pattern (kotak-kotak) */
                linear-gradient(transparent 0 0),
                /* base */
                var(--bg);

            /* grid overlay */
            background-image:
                radial-gradient(1200px 700px at 15% -10%, rgba(212,175,55,0.14), transparent 55%),
                radial-gradient(900px 600px at 90% 0%, rgba(52,211,153,0.10), transparent 52%),
                linear-gradient(90deg, rgba(255,255,255,0.06) 1px, transparent 1px),
                linear-gradient(rgba(255,255,255,0.06) 1px, transparent 1px),
                linear-gradient(180deg, #0A0A0A 0%, #060606 100%);

            background-size:
                auto,
                auto,
                26px 26px,
                26px 26px,
                auto;

            background-position:
                center,
                center,
                0 0,
                0 0,
                center;

            background-attachment: fixed;
        }

        /* Layout */
        .container{ max-width: 1100px; }

        /* NAVBAR */
        .navbar{
            background: rgba(10,10,10,0.72);
            border-bottom: 1px solid rgba(212,175,55,0.20);
            box-shadow: 0 12px 34px rgba(0,0,0,0.55);
            backdrop-filter: blur(10px);
        }

        .navbar-brand{
            color: #fff !important;
            font-weight: 700;
            letter-spacing: 0.8px;
            font-size: 18px;
            text-transform: uppercase;
        }

        .nav-link{
            color: rgba(247, 247, 248, 0.88) !important;
            margin-left: 12px;
            transition: transform 0.15s ease, opacity 0.15s ease, color 0.15s ease;
            font-weight: 600;
            letter-spacing: 0.2px;
        }

        .nav-link:hover{
            opacity: 1;
            transform: translateY(-1px);
            color: #fff !important;
        }

        /* CARD */
        .card{
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: var(--radius);
            box-shadow: var(--shadow-soft);
            background:
                /* micro highlight */
                radial-gradient(900px 260px at 10% 0%, rgba(212,175,55,0.14), transparent 55%),
                radial-gradient(700px 220px at 80% 0%, rgba(52,211,153,0.10), transparent 52%),
                /* grid overlay inside cards */
                linear-gradient(90deg, rgba(255,255,255,0.06) 1px, transparent 1px),
                linear-gradient(rgba(255,255,255,0.06) 1px, transparent 1px),
                rgba(15, 15, 15, 0.78);
            backdrop-filter: blur(10px);
            background-size:
                auto,
                auto,
                24px 24px,
                24px 24px,
                auto;
            background-position:
                center,
                center,
                0 0,
                0 0,
                center;
        }

        h3, h4{
            font-weight: 800;
            letter-spacing: 0.2px;
        }

        /* BUTTONS */
        .btn{
            border-radius: 14px;
            border: 1px solid transparent;
            font-weight: 700;
            letter-spacing: 0.1px;
            transition: transform 0.12s ease, box-shadow 0.12s ease, background-color 0.12s ease, border-color 0.12s ease;
        }

        .btn:focus{
            box-shadow: 0 0 0 0.2rem rgba(212,175,55,0.20);
        }

        .btn-primary{
            background:
                radial-gradient(120% 140% at 20% 0%, rgba(255,255,255,0.20) 0%, rgba(255,255,255,0.05) 42%, rgba(0,0,0,0.0) 70%),
                linear-gradient(180deg, rgba(212,175,55,0.95) 0%, rgba(141,99,0,0.95) 100%);
            color: #0B0B0B;
            border-color: rgba(212,175,55,0.55);
            box-shadow: 0 14px 28px rgba(0,0,0,0.45);
        }

        .btn-primary:hover{
            transform: translateY(-1px);
            box-shadow: 0 18px 34px rgba(0,0,0,0.55);
            border-color: rgba(212,175,55,0.75);
            color: #0B0B0B;
        }

        .btn-secondary{
            border-radius: 14px;
            font-weight: 700;
            border: 1px solid rgba(255, 255, 255, 0.16);
            background: rgba(255, 255, 255, 0.05);
            color: var(--text);
            box-shadow: 0 10px 26px rgba(0,0,0,0.35);
        }

        .btn-warning{
            border-radius: 14px;
            font-weight: 700;
            border-color: rgba(212,175,55,0.60);
            background: rgba(212,175,55,0.10);
            color: rgba(255, 240, 190, 0.98);
        }

        .btn-danger{
            border-radius: 14px;
            font-weight: 700;
            border-color: rgba(244, 114, 182, 0.35);
            background: rgba(244, 114, 182, 0.12);
            color: #FCE7F3;
        }

        /* TABLE */
        .table{
            border-radius: 14px;
            overflow: hidden;
            margin-bottom: 0;
            color: var(--text);
            border: 1px solid rgba(255,255,255,0.10);
        }

        .table thead{
            background:
                radial-gradient(100% 120% at 10% 0%, rgba(212,175,55,0.28) 0%, rgba(255,255,255,0.02) 45%, rgba(0,0,0,0.0) 70%),
                linear-gradient(180deg, rgba(10,10,10,0.95) 0%, rgba(0,0,0,0.55) 100%);
            color: #fff;
            border-bottom: 1px solid rgba(212,175,55,0.22);
        }

        .table th, .table td{
            vertical-align: middle;
            border-color: rgba(255, 255, 255, 0.12);
        }

        .table tbody tr:hover{
            background: rgba(212,175,55,0.06);
        }

        /* FORM */
        .form-control, .form-select{
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.14);
            padding-top: 10px;
            padding-bottom: 10px;
            background:
                linear-gradient(90deg, rgba(255,255,255,0.06) 1px, transparent 1px),
                rgba(255, 255, 255, 0.03);
            color: var(--text);
        }

        .form-control::placeholder{ color: rgba(247, 247, 248, 0.55); }

        .form-control:focus{
            border-color: rgba(212,175,55,0.55);
            box-shadow: 0 0 0 0.2rem rgba(212,175,55,0.18);
            background: rgba(255, 255, 255, 0.04);
            color: var(--text);
        }

        .form-select:focus{
            border-color: rgba(212,175,55,0.55);
            box-shadow: 0 0 0 0.2rem rgba(212,175,55,0.18);
            background: rgba(255, 255, 255, 0.04);
            color: var(--text);
        }

        /* ALERT (NOTIF FLASH) */
        .alert-box{
            border-radius: 16px;
            border: 1px solid rgba(212,175,55,0.28);
            background:
                radial-gradient(100% 160% at 10% 0%, rgba(212,175,55,0.16) 0%, rgba(255,255,255,0.03) 35%, rgba(0,0,0,0) 70%),
                rgba(255,255,255,0.03);
            color: var(--text);
            font-weight: 700;
            padding: 12px 14px;
            box-shadow: 0 16px 30px rgba(0,0,0,0.35);
        }

        .alert-solid.alert-success{
            border-color: rgba(52, 211, 153, 0.45);
            background: rgba(52, 211, 153, 0.14);
            color: #D1FAE5;
        }

        .alert-solid.alert-danger{
            border-color: rgba(244, 114, 182, 0.40);
            background: rgba(244, 114, 182, 0.14);
            color: #FCE7F3;
        }

        .alert-solid.alert-info{
            border-color: rgba(52, 211, 153, 0.35);
            background: rgba(52, 211, 153, 0.10);
            color: #E6FFFA;
        }

        /* MODAL */
        .modal-content{
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.14);
            background:
                radial-gradient(1200px 420px at 0% 0%, rgba(212,175,55,0.10), transparent 55%),
                rgba(0,0,0,0.85);
            color: var(--text);
            box-shadow: var(--shadow);
        }

        .modal-header, .modal-footer{
            border-color: rgba(255, 255, 255, 0.10);
        }

        .btn-close{
            filter: invert(1);
            opacity: 0.9;
        }

        /* Links */
        a{
            color: rgba(247,247,248,0.92);
            text-decoration: none;
        }
        a:hover{
            color: #fff;
            text-decoration: none;
        }

        /* Typography consistency (avoid default Bootstrap grey tones) */
        .text-muted{
            color: var(--muted) !important;
        }
        small.text-muted{
            color: rgba(247,247,248,0.62) !important;
        }

        /* Ordered list numbers (1,3,5,7) should stay white/premium */
        ol, li{
            color: var(--text) !important;
        }

        /* Premium typography: keep labels/subtitles and table text white */
        .form-label,
        .table td,
        .table th,
        .text-muted,
        small,
        p.text-muted{
            color: var(--text) !important;
        }

        /* Slightly more premium headings inside views */
        .premium-title{
            font-family: 'Rubik Mono One', ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            letter-spacing: 0.6px;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('/') ?>">AKADEMIK</a>

        <div class="d-flex align-items-center gap-1 flex-wrap">
            <a href="<?= base_url('/mahasiswa') ?>" class="nav-link">Mahasiswa</a>
            <a href="<?= base_url('/dosen') ?>" class="nav-link">Dosen</a>
        </div>
    </div>
</nav>

<div class="container py-4">
    <?php foreach (['success', 'error', 'info'] as $type): ?>
        <?php $msg = session()->getFlashdata($type); ?>
        <?php if (!empty($msg)): ?>
            <?php
                $class = $type === 'success'
                    ? 'alert-solid alert-success'
                    : ($type === 'error' ? 'alert-solid alert-danger' : 'alert-solid alert-info');
            ?>
            <div class="alert alert-box <?= $class ?> mb-3" role="alert">
                <?= $msg ?>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>

    <?= $this->renderSection('content') ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
