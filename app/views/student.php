<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Jerome | Student Hub</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;

            font-family: Arial, sans-serif;

            background: #0b1120;

            color: #e5e7eb;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            height: 70px;

            padding: 0 7%;

            display: flex;

            align-items: center;

            justify-content: space-between;

            background: #111827;

            border-bottom: 1px solid #1f2937;
        }

        .logo {
            font-size: 20px;

            font-weight: bold;

            color: #22d3ee;

            letter-spacing: 1px;
        }

        .nav-links {
            display: flex;

            gap: 25px;
        }

        .nav-links a {
            color: #9ca3af;

            text-decoration: none;

            font-size: 14px;

            transition: 0.2s;
        }

        .nav-links a:hover {
            color: #22d3ee;
        }


        /* =========================
           MAIN CONTAINER
        ========================= */

        .container {
            width: 86%;

            max-width: 1100px;

            margin: 60px auto;
        }


        /* =========================
           HERO
        ========================= */

        .hero {
            display: grid;

            grid-template-columns: 1.5fr 1fr;

            gap: 25px;
        }


        /* LEFT SIDE */

        .hero-content {
            background: #111827;

            padding: 50px;

            border-left: 4px solid #22d3ee;

            min-height: 380px;

            display: flex;

            flex-direction: column;

            justify-content: center;
        }

        .small-title {
            color: #22d3ee;

            font-size: 13px;

            font-weight: bold;

            letter-spacing: 2px;

            margin-bottom: 15px;
        }

        h1 {
            margin: 0;

            font-size: 45px;

            line-height: 1.1;

            color: white;
        }

        h1 span {
            color: #22d3ee;
        }

        .description {
            max-width: 600px;

            color: #9ca3af;

            line-height: 1.7;

            margin: 20px 0;
        }


        /* =========================
           PROFILE PREVIEW
        ========================= */

        .profile-preview {
            background: #164e63;

            display: flex;

            flex-direction: column;

            align-items: center;

            justify-content: center;

            padding: 30px;

            text-align: center;

            transition: 0.3s;
        }

        .profile-preview:hover {
            background: #155e75;

            transform: translateY(-4px);
        }

        .avatar {
            width: 110px;

            height: 110px;

            background: #22d3ee;

            color: #083344;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 34px;

            font-weight: bold;

            margin-bottom: 20px;

            clip-path: polygon(
                12% 0,
                88% 0,
                100% 12%,
                100% 88%,
                88% 100%,
                12% 100%,
                0 88%,
                0 12%
            );
        }

        .profile-preview h2 {
            margin: 0 0 8px;

            color: white;

            font-size: 22px;
        }

        .profile-preview p {
            margin: 0;

            color: #a5f3fc;

            font-size: 15px;
        }


        /* =========================
           BUTTON
        ========================= */

        .button {
            display: inline-block;

            width: fit-content;

            padding: 13px 22px;

            background: #22d3ee;

            color: #083344;

            text-decoration: none;

            font-weight: bold;

            transition: 0.2s;
        }

        .button:hover {
            background: #67e8f9;

            transform: translateX(5px);
        }


        /* =========================
           FOOTER
        ========================= */

        .footer {
            text-align: center;

            padding: 35px;

            color: #4b5563;

            font-size: 13px;
        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 800px) {

            .hero {
                grid-template-columns: 1fr;
            }

            h1 {
                font-size: 35px;
            }

            .container {
                width: 92%;

                margin: 40px auto;
            }

            .hero-content {
                padding: 35px;

                min-height: 330px;
            }

            .nav-links {
                gap: 12px;
            }

        }


        @media (max-width: 500px) {

            .navbar {
                padding: 0 5%;
            }

            .logo {
                font-size: 16px;
            }

            .nav-links a {
                font-size: 12px;
            }

            h1 {
                font-size: 30px;
            }

            .description {
                font-size: 14px;
            }

        }

    </style>

</head>


<body>


    <!-- =========================
         NAVBAR
    ========================= -->

    <nav class="navbar">

        <div class="logo">
            JL / STUDENT
        </div>


        <div class="nav-links">

            <a href="<?= site_url('student'); ?>">
                HOME
            </a>

            <a href="<?= site_url('student/profile'); ?>">
                PROFILE
            </a>

        </div>

    </nav>


    <!-- =========================
         MAIN
    ========================= -->

    <main class="container">


        <!-- HERO SECTION -->

        <section class="hero">


            <!-- LEFT -->

            <div class="hero-content">

                <div class="small-title">
                    STUDENT PORTAL / 2026
                </div>


                <h1>
                    Welcome to<br>
                    <span>Jerome's Hub.</span>
                </h1>


                <p class="description">
                    A personal student space where you can
                    explore academic information, personal
                    interests, skills, and activities.
                </p>


                <a
                    href="<?= site_url('student/profile'); ?>"
                    class="button"
                >
                    OPEN PROFILE →
                </a>

            </div>


            <!-- RIGHT -->

            <div class="profile-preview">

                <div class="avatar">
                    JL
                </div>


                <h2>
                    Jerome's Student Space
                </h2>


                <p>
                    BS Information Technology
                </p>

            </div>


        </section>


    </main>


    <!-- =========================
         FOOTER
    ========================= -->

    <footer class="footer">

        JL Student Portal • 2026

    </footer>


</body>

</html>
