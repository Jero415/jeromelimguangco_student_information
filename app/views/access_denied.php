<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Access Denied | Student Portal</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;

            font-family: Arial, sans-serif;

            background: #0b1120;

            color: #e5e7eb;

            min-height: 100vh;

            display: flex;

            flex-direction: column;
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
           MAIN
        ========================= */

        .main {
            flex: 1;

            width: 90%;

            max-width: 700px;

            margin: auto;

            display: flex;

            align-items: center;

            justify-content: center;
        }


        /* =========================
           ACCESS DENIED BOX
        ========================= */

        .access-box {
            width: 100%;

            background: #111827;

            padding: 45px;

            text-align: center;

            border-left: 4px solid #22d3ee;

            border-top: 1px solid #1f2937;

            border-right: 1px solid #1f2937;

            border-bottom: 1px solid #1f2937;
        }


        /* =========================
           ICON
        ========================= */

        .icon {
            width: 90px;

            height: 90px;

            margin: 0 auto 25px;

            background: #164e63;

            color: #22d3ee;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 40px;

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


        /* =========================
           TEXT
        ========================= */

        .label {
            color: #22d3ee;

            font-size: 12px;

            font-weight: bold;

            letter-spacing: 2px;

            margin-bottom: 12px;
        }

        h1 {
            margin: 0 0 15px;

            color: white;

            font-size: 34px;
        }

        .message {
            max-width: 500px;

            margin: 0 auto 25px;

            color: #9ca3af;

            line-height: 1.7;
        }


        /* =========================
           NOTICE
        ========================= */

        .notice {
            background: #0b1120;

            border: 1px solid #1f2937;

            padding: 18px;

            margin-bottom: 25px;

            text-align: left;

            color: #9ca3af;

            line-height: 1.6;
        }

        .notice strong {
            display: block;

            color: #22d3ee;

            margin-bottom: 5px;
        }


        /* =========================
           BUTTON
        ========================= */

        .button {
            display: inline-block;

            padding: 13px 24px;

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

            padding: 30px;

            color: #4b5563;

            font-size: 13px;
        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 600px) {

            .navbar {
                padding: 0 5%;
            }

            .logo {
                font-size: 16px;
            }

            .nav-links {
                gap: 12px;
            }

            .nav-links a {
                font-size: 12px;
            }

            .main {
                width: 92%;
            }

            .access-box {
                padding: 35px 25px;
            }

            h1 {
                font-size: 28px;
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
        JLM / STUDENT
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

<main class="main">

    <div class="access-box">


        <!-- ICON -->

        <div class="icon">
            🔒
        </div>


        <!-- LABEL -->

        <div class="label">
            STUDENT PORTAL / RESTRICTED
        </div>


        <!-- TITLE -->

        <h1>
            Access Denied
        </h1>


        <!-- MESSAGE -->

        <p class="message">
            This student profile is currently unavailable.
            You do not have permission to view this page.
        </p>


        <!-- NOTICE -->

        <div class="notice">

            <strong>
                PROFILE RESTRICTED
            </strong>

            Access to the student profile has been
            restricted by the system administrator.
            Please return to the Student Hub.

        </div>


        <!-- BUTTON -->

        <a
            href="<?= site_url('student'); ?>"
            class="button"
        >
            ← BACK TO STUDENT HUB
        </a>


    </div>

</main>


<!-- =========================
     FOOTER
========================= -->

<footer class="footer">

    JLM Student Portal • 2026

</footer>


</body>

</html>