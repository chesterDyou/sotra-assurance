<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SOTRA ASSUR — Votre protection, notre engagement.</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f7f9fc;
            color: #172033;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* NAVIGATION */
        .navbar {
            height: 76px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 7%;
            border-bottom: 1px solid #e8ecf2;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-icon {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            background: #f58220;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            font-weight: bold;
        }

        .logo-text {
            font-size: 22px;
            font-weight: 800;
            color: #102a43;
            letter-spacing: .5px;
        }

        .logo-text span {
            color: #f58220;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 32px;
            list-style: none;
        }

        .nav-links a {
            color: #52606d;
            font-size: 15px;
            font-weight: 600;
        }

        .nav-links a:hover {
            color: #f58220;
        }

        .nav-buttons {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .btn-login {
            padding: 11px 20px;
            color: #102a43;
            font-weight: 700;
        }

        .btn-primary {
            background: #f58220;
            color: white;
            padding: 12px 21px;
            border-radius: 8px;
            font-weight: 700;
            display: inline-block;
        }

        .btn-primary:hover {
            background: #dd6b0b;
        }

        /* HERO */
        .hero {
            min-height: 570px;
            padding: 80px 7%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 50px;
            background:
                linear-gradient(135deg, #eef5fb 0%, #ffffff 60%);
        }

        .hero-content {
            max-width: 650px;
        }

        .badge {
            display: inline-block;
            background: #fff1e6;
            color: #d96508;
            padding: 8px 14px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 22px;
        }

        .hero h1 {
            font-size: clamp(42px, 5vw, 68px);
            line-height: 1.08;
            color: #102a43;
            margin-bottom: 22px;
        }

        .hero h1 span {
            color: #f58220;
        }

        .hero p {
            font-size: 19px;
            line-height: 1.7;
            color: #627d98;
            margin-bottom: 32px;
            max-width: 590px;
        }

        .hero-actions {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .btn-secondary {
            padding: 12px 21px;
            border: 1px solid #ccd6e0;
            border-radius: 8px;
            font-weight: 700;
            background: white;
            color: #102a43;
        }

        .hero-card {
            width: 390px;
            min-height: 350px;
            background: white;
            border-radius: 24px;
            padding: 35px;
            box-shadow: 0 20px 50px rgba(16, 42, 67, .12);
            position: relative;
        }

        .shield {
            width: 85px;
            height: 100px;
            margin: 0 auto 25px;
            background: #f58220;
            clip-path: polygon(
                50% 0%,
                90% 15%,
                90% 55%,
                75% 78%,
                50% 100%,
                25% 78%,
                10% 55%,
                10% 15%
            );
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 36px;
            font-weight: bold;
        }

        .hero-card h3 {
            text-align: center;
            font-size: 23px;
            color: #102a43;
            margin-bottom: 12px;
        }

        .hero-card p {
            text-align: center;
            font-size: 15px;
            line-height: 1.6;
            margin: 0;
            color: #627d98;
        }

        /* SERVICES */
        .services {
            padding: 80px 7%;
            background: white;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 38px;
            color: #102a43;
            margin-bottom: 12px;
        }

        .section-title p {
            color: #627d98;
            font-size: 17px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 22px;
        }

        .card {
            padding: 30px 24px;
            border: 1px solid #e5eaf0;
            border-radius: 15px;
            background: white;
            transition: .25s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(16, 42, 67, .09);
        }

        .card-icon {
            width: 55px;
            height: 55px;
            border-radius: 12px;
            background: #fff1e6;
            color: #f58220;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
            margin-bottom: 20px;
        }

        .card h3 {
            color: #102a43;
            margin-bottom: 10px;
            font-size: 19px;
        }

        .card p {
            color: #627d98;
            line-height: 1.6;
            font-size: 14px;
        }

        /* FOOTER */
        footer {
            background: #102a43;
            color: white;
            padding: 35px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        footer p {
            color: #bcccdc;
            font-size: 14px;
        }

        .footer-logo {
            font-weight: 800;
            font-size: 20px;
        }

        .footer-logo span {
            color: #f58220;
        }

        /* RESPONSIVE */
        @media (max-width: 950px) {
            .nav-links {
                display: none;
            }

            .hero {
                flex-direction: column;
                text-align: center;
                padding-top: 60px;
            }

            .hero p {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-actions {
                justify-content: center;
            }

            .cards {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .navbar {
                padding: 0 5%;
            }

            .btn-login {
                display: none;
            }

            .hero {
                padding: 55px 5%;
            }

            .hero-card {
                width: 100%;
            }

            .cards {
                grid-template-columns: 1fr;
            }

            footer {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <!-- NAVIGATION -->
    <nav class="navbar">

        <a href="/" class="logo">
            <div class="logo-icon">S</div>

            <div class="logo-text">
                SOTRA <span>ASSUR</span>
            </div>
        </a>

        <ul class="nav-links">
            <li><a href="/">Accueil</a></li>
            <li><a href="#assurances">Nos assurances</a></li>
            <li><a href="#apropos">À propos</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

        <div class="nav-buttons">
            <a href="/login" class="btn-login">Se connecter</a>
            <a href="/register" class="btn-primary">Créer un compte</a>
        </div>

    </nav>


    <!-- HERO -->
    <section class="hero">

        <div class="hero-content">

            <div class="badge">
                Une protection pensée pour vous
            </div>

            <h1>
                Votre sécurité.<br>
                <span>Notre engagement.</span>
            </h1>

            <p>
                Avec SOTRA ASSUR, protégez ce qui compte vraiment.
                Découvrez des solutions d'assurance simples, fiables
                et adaptées à vos besoins.
            </p>

            <div class="hero-actions">
                <a href="/register" class="btn-primary">
                    Découvrir nos assurances
                </a>

                <a href="/login" class="btn-secondary">
                    Mon espace client
                </a>
            </div>

        </div>


        <div class="hero-card">

            <div class="shield">✓</div>

            <h3>Protégé avec SOTRA ASSUR</h3>

            <p>
                Une assurance à vos côtés pour vous accompagner
                au quotidien et dans les moments qui comptent.
            </p>

        </div>

    </section>


    <!-- ASSURANCES -->
    <section class="services" id="assurances">

        <div class="section-title">

            <h2>Nos solutions d'assurance</h2>

            <p>
                Des protections adaptées à votre quotidien.
            </p>

        </div>


        <div class="cards">

            <div class="card">

                <div class="card-icon">🚗</div>

                <h3>Assurance automobile</h3>

                <p>
                    Protégez votre véhicule et bénéficiez
                    d'une couverture adaptée à vos besoins.
                </p>

            </div>


            <div class="card">

                <div class="card-icon">🏠</div>

                <h3>Assurance habitation</h3>

                <p>
                    Protégez votre logement et vos biens
                    contre les principaux risques.
                </p>

            </div>


            <div class="card">

                <div class="card-icon">❤️</div>

                <h3>Assurance santé</h3>

                <p>
                    Une protection pour vous accompagner
                    dans vos besoins de santé.
                </p>

            </div>


            <div class="card">

                <div class="card-icon">👨‍👩‍👧</div>

                <h3>Prévoyance</h3>

                <p>
                    Anticipez les imprévus et protégez
                    votre famille et vos proches.
                </p>

            </div>

        </div>

    </section>


    <!-- FOOTER -->
    <footer id="contact">

        <div class="footer-logo">
            SOTRA <span>ASSUR</span>
        </div>

        <p>
            © {{ date('Y') }} SOTRA ASSUR — Votre protection, notre engagement.
        </p>

    </footer>

</body>
</html>