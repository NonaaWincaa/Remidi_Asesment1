<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroClima</title>
    
    <!-- Google Fonts & Font Awesome -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            /* Palette Soft Baby Blue & Warm Brown / Sand */
            --bg-primary: #FAF8F5;          /* Warm Cream Background */
            --bg-card: #FFFFFF;             /* Card Putih Bersih */
            
            --baby-blue: #7EB5D6;           /* Soft Baby Blue Utama */
            --baby-blue-hover: #699EC0;     /* Darker Baby Blue */
            --baby-blue-light: #EBF4FA;     /* Very Light Baby Blue Accent */
            
            --soft-brown: #C6A982;          /* Warm Brown / Sand */
            --soft-brown-hover: #B3946C;
            --soft-brown-light: #F7F3ED;    /* Very Light Brown Accent */
            
            --border-soft: #EFE8E1;         /* Warm Soft Border */
            --text-dark: #333D45;           /* Soft Dark Charcoal */
            --text-muted: #8492A0;          /* Muted Blue-Grey */

            /* Soft Status Badges */
            --status-kering-bg: #FFF3EB;
            --status-kering-text: #D97706;
            --status-kering-border: #FFE3D1;

            --status-optimal-bg: #EBF6FC;
            --status-optimal-text: #3B82F6;
            --status-optimal-border: #D2E9FA;

            --status-lembap-bg: #F0F4F8;
            --status-lembap-text: #5A7D9A;
            --status-lembap-border: #D8E3EE;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background-color: var(--bg-primary);
            color: var(--text-dark);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            -webkit-font-smoothing: antialiased;
        }

        header {
            background: linear-gradient(135deg, #8EBEE0 0%, #6B9EC3 100%);
            color: #ffffff;
            padding: 2.8rem 1.5rem 2.2rem;
            text-align: center;
            border-bottom-left-radius: 28px;
            border-bottom-right-radius: 28px;
            box-shadow: 0 10px 30px rgba(126, 181, 214, 0.2);
        }

        header h1 {
            font-size: 1.8rem;
            font-weight: 700;
            letter-spacing: -0.3px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }

        header p {
            color: #F0F7FC;
            font-size: 0.92rem;
            margin-top: 8px;
            font-weight: 400;
            opacity: 0.95;
        }

        nav {
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(12px);
            border: 1px solid var(--border-soft);
            max-width: 900px;
            margin: -22px auto 0 auto;
            border-radius: 20px;
            padding: 0.5rem 1rem;
            position: sticky;
            top: 15px;
            z-index: 100;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.03);
        }

        .nav-container {
            display: flex;
            justify-content: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        .nav-link {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            font-size: 0.88rem;
            padding: 9px 20px;
            border-radius: 14px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-link:hover {
            background-color: var(--baby-blue-light);
            color: var(--baby-blue);
        }

        .nav-link.active {
            background-color: var(--baby-blue);
            color: #ffffff;
            box-shadow: 0 4px 14px rgba(126, 181, 214, 0.35);
        }

        main {
            flex: 1;
            max-width: 950px;
            width: 100%;
            margin: 2rem auto;
            padding: 0 1.5rem;
        }

        footer {
            background-color: #38424B;
            color: #E2E8F0;
            text-align: center;
            padding: 1.8rem;
            font-size: 0.85rem;
            margin-top: 3rem;
            border-top-left-radius: 24px;
            border-top-right-radius: 24px;
        }

        .card {
            background: var(--bg-card);
            border: 1px solid var(--border-soft);
            border-radius: 20px;
            padding: 2.2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
            margin-bottom: 1.8rem;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--baby-blue);
            margin-bottom: 1.2rem;
            display: flex;
            align-items: center;
            gap: 10px;
            border-bottom: 1px solid var(--border-soft);
            padding-bottom: 0.8rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            background-color: var(--baby-blue);
            color: #ffffff;
            padding: 11px 24px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.9rem;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: all 0.25s ease;
            box-shadow: 0 4px 14px rgba(126, 181, 214, 0.3);
        }

        .btn:hover {
            background-color: var(--baby-blue-hover);
            transform: translateY(-1px);
        }

        .btn-light-brown {
            background-color: var(--soft-brown);
            color: #ffffff;
            box-shadow: 0 4px 14px rgba(198, 169, 130, 0.3);
        }

        .btn-light-brown:hover {
            background-color: var(--soft-brown-hover);
            transform: translateY(-1px);
        }

        .badge {
            display: inline-block;
            padding: 6px 16px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.82rem;
            border: 1px solid transparent;
        }

        .badge-kering {
            background-color: var(--status-kering-bg);
            color: var(--status-kering-text);
            border-color: var(--status-kering-border);
        }

        .badge-optimal {
            background-color: var(--status-optimal-bg);
            color: var(--status-optimal-text);
            border-color: var(--status-optimal-border);
        }

        .badge-lembap {
            background-color: var(--status-lembap-bg);
            color: var(--status-lembap-text);
            border-color: var(--status-lembap-border);
        }

        .table-responsive {
            overflow-x: auto;
            border-radius: 14px;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin-top: 0.5rem;
        }

        th, td {
            padding: 14px 18px;
            text-align: left;
            border-bottom: 1px solid var(--border-soft);
            font-size: 0.9rem;
        }

        th {
            background-color: var(--baby-blue-light);
            color: var(--baby-blue);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover {
            background-color: #FAFCFF;
        }

        .form-group {
            margin-bottom: 1.3rem;
        }

        .form-label {
            display: block;
            font-weight: 600;
            font-size: 0.88rem;
            margin-bottom: 8px;
            color: var(--text-dark);
        }

        .form-control {
            width: 100%;
            padding: 11px 16px;
            border: 1px solid var(--border-soft);
            border-radius: 12px;
            font-size: 0.92rem;
            background-color: #FCFAFA;
            color: var(--text-dark);
            transition: all 0.25s ease;
        }

        .form-control:focus {
            outline: none;
            background-color: #FFFFFF;
            border-color: var(--baby-blue);
            box-shadow: 0 0 0 4px rgba(126, 181, 214, 0.18);
        }

        .grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
        }
    </style>
</head>
<body>
    <header>
        <h1><i class="fa-solid fa-leaf"></i> AgroClima Garut</h1>
        <p>Sistem Prediksi Mikroklimat & Rekomendasi Pertanian</p>
    </header>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} AgroClima  By wincarlin</p>
    </footer>
</body>
</html>