<?php

$student_id  = $student_id ?? '';
$name        = $name ?? '';
$course      = $course ?? '';
$year        = $year ?? '';
$section     = $section ?? '';
$email       = $email ?? '';
$contact     = $contact ?? '';
$address     = $address ?? '';
$skills      = $skills ?? '';
$hobbies     = $hobbies ?? '';
$description = $description ?? '';
$facebook    = $facebook ?? '';
$github      = $github ?? '';

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($name) ?> | Student Profile</title>

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

            max-width: 1050px;

            margin: 50px auto;
        }


        /* =========================
           PROFILE HEADER
        ========================= */

        .profile-header {
            background: #111827;

            padding: 40px;

            display: flex;

            align-items: center;

            gap: 30px;

            border-left: 4px solid #22d3ee;

            margin-bottom: 25px;
        }


        /* AVATAR */

        .avatar {
            width: 110px;

            height: 110px;

            flex-shrink: 0;

            background: #22d3ee;

            color: #083344;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 34px;

            font-weight: bold;

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


        .profile-header h1 {
            margin: 0;

            font-size: 36px;

            color: white;
        }

        .profile-label {
            margin-top: 10px;

            color: #22d3ee;

            font-size: 13px;

            font-weight: bold;

            letter-spacing: 2px;
        }


        /* =========================
           INFORMATION GRID
        ========================= */

        .information {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 20px;
        }


        /* =========================
           SECTIONS
        ========================= */

        .section {
            background: #111827;

            padding: 28px;

            border: 1px solid #1f2937;

            transition: 0.25s;
        }

        .section:hover {
            border-color: #22d3ee;

            transform: translateY(-3px);
        }

        .section h2 {
            margin: 0 0 20px;

            padding-bottom: 12px;

            border-bottom: 1px solid #1f2937;

            color: #22d3ee;

            font-size: 18px;
        }


        /* =========================
           INFORMATION ITEMS
        ========================= */

        .item {
            margin-bottom: 18px;
        }

        .item:last-child {
            margin-bottom: 0;
        }

        .item label {
            display: block;

            margin-bottom: 6px;

            color: #6b7280;

            font-size: 11px;

            font-weight: bold;

            letter-spacing: 1px;

            text-transform: uppercase;
        }

        .item span {
            color: #e5e7eb;

            font-size: 15px;
        }


        /* =========================
           ABOUT
        ========================= */

        .about {
            grid-column: span 2;
        }

        .about p {
            color: #9ca3af;

            line-height: 1.8;

            margin: 0 0 22px;
        }


        /* =========================
           TAGS
        ========================= */

        .tag {
            display: inline-block;

            padding: 9px 14px;

            margin: 4px 4px 4px 0;

            background: #164e63;

            border: 1px solid #155e75;

            color: #a5f3fc;

            font-size: 13px;

            font-weight: bold;
        }


        /* =========================
           SOCIAL LINKS
        ========================= */

        .social {
            grid-column: span 2;

            display: flex;

            gap: 12px;
        }

        .social a {
            padding: 13px 22px;

            background: #22d3ee;

            color: #083344;

            text-decoration: none;

            font-weight: bold;

            transition: 0.2s;
        }

        .social a:hover {
            background: #67e8f9;

            transform: translateX(4px);
        }


        /* =========================
           BACK BUTTON
        ========================= */

        .back {
            display: inline-block;

            margin-top: 25px;

            padding: 12px 20px;

            border: 1px solid #1f2937;

            color: #22d3ee;

            text-decoration: none;

            font-weight: bold;

            transition: 0.2s;
        }

        .back:hover {
            background: #111827;

            border-color: #22d3ee;
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

        @media (max-width: 750px) {

            .profile-header {
                flex-direction: column;

                text-align: center;

                padding: 35px 25px;
            }

            .information {
                grid-template-columns: 1fr;
            }

            .about,
            .social {
                grid-column: span 1;
            }

            .container {
                width: 92%;

                margin: 35px auto;
            }

            .profile-header h1 {
                font-size: 30px;
            }

        }


        @media (max-width: 500px) {

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


    <!-- PROFILE HEADER -->

    <section class="profile-header">

        <div class="avatar">
            JL
        </div>

        <div>

            <div class="profile-label">
                STUDENT PROFILE
            </div>

            <h1>
                <?= htmlspecialchars($name) ?>
            </h1>

        </div>

    </section>


    <!-- INFORMATION -->

    <section class="information">


        <!-- ACADEMIC -->

        <div class="section">

            <h2>
                ACADEMIC INFORMATION
            </h2>


            <div class="item">

                <label>
                    Student ID
                </label>

                <span>
                    <?= htmlspecialchars($student_id) ?>
                </span>

            </div>


            <div class="item">

                <label>
                    Course
                </label>

                <span>
                    <?= htmlspecialchars($course) ?>
                </span>

            </div>


            <div class="item">

                <label>
                    Year Level
                </label>

                <span>
                    <?= htmlspecialchars($year) ?>
                </span>

            </div>


            <div class="item">

                <label>
                    Section
                </label>

                <span>
                    <?= htmlspecialchars($section) ?>
                </span>

            </div>

        </div>


        <!-- CONTACT -->

        <div class="section">

            <h2>
                CONTACT INFORMATION
            </h2>


            <div class="item">

                <label>
                    Email
                </label>

                <span>
                    <?= htmlspecialchars($email) ?>
                </span>

            </div>


            <div class="item">

                <label>
                    Contact Number
                </label>

                <span>
                    <?= htmlspecialchars($contact) ?>
                </span>

            </div>


            <div class="item">

                <label>
                    Address
                </label>

                <span>
                    <?= htmlspecialchars($address) ?>
                </span>

            </div>

        </div>


        <!-- ABOUT -->

        <div class="section about">

            <h2>
                ABOUT ME
            </h2>

            <p>
                <?= htmlspecialchars($description) ?>
            </p>


            <div class="item">

                <label>
                    Skills
                </label>

                <span class="tag">
                    <?= htmlspecialchars($skills) ?>
                </span>

            </div>


            <div class="item">

                <label>
                    Hobbies
                </label>

                <span class="tag">
                    <?= htmlspecialchars($hobbies) ?>
                </span>

            </div>

        </div>


        <!-- SOCIAL -->

        <?php if (!empty($facebook) || !empty($github)): ?>

            <div class="social">

                <?php if (!empty($facebook)): ?>

                    <a
                        href="<?= htmlspecialchars($facebook) ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        FACEBOOK →
                    </a>

                <?php endif; ?>


                <?php if (!empty($github)): ?>

                    <a
                        href="<?= htmlspecialchars($github) ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        GITHUB →
                    </a>

                <?php endif; ?>

            </div>

        <?php endif; ?>


    </section>


    <!-- BACK -->

    <a
        href="<?= site_url('student'); ?>"
        class="back"
    >
        ← BACK TO STUDENT HUB
    </a>


</main>


<footer class="footer">

    JLM Student Portal • 2026

</footer>


</body>
</html>
