<!DOCTYPE html>
<html>
<head>
    <title>Zean's Digital Student Profile</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f6ff;
            color: #334155;
        }

        .navbar {
            background: #ffffff;
            padding: 18px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .navbar a {
            color: #64748b;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            transition: 0.3s;
        }

        .navbar a:hover {
            color: #6366f1;
        }

        .profile {
            width: 90%;
            max-width: 750px;
            margin: 50px auto;
        }

        .header-card {
            background: linear-gradient(135deg, #dbeafe, #ede9fe);
            padding: 40px;
            text-align: center;
            border-radius: 24px;
            margin-bottom: 20px;
            box-shadow: 0 8px 25px rgba(99, 102, 241, 0.10);
        }

        .avatar {
            width: 90px;
            height: 90px;
            margin: auto;
            border-radius: 50%;
            background: #6366f1;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            font-weight: bold;
        }

        h1 {
            margin-bottom: 8px;
            color: #4338ca;
        }

        .subtitle {
            color: #64748b;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 20px;
            margin-bottom: 20px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(99, 102, 241, 0.10);
        }

        .card h2 {
            margin-top: 0;
            color: #4f46e5;
            font-size: 21px;
        }

        .info {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 13px 0;
            border-bottom: 1px solid #eef2f7;
        }

        .info:last-child {
            border-bottom: none;
        }

        .label {
            font-weight: bold;
            color: #475569;
        }

        .value {
            text-align: right;
            color: #64748b;
        }

        .about {
            line-height: 1.7;
            color: #64748b;
            margin-bottom: 15px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .social-links a {
            display: inline-block;
            padding: 12px 20px;
            background: #eef2ff;
            color: #4f46e5;
            text-decoration: none;
            border-radius: 12px;
            font-weight: bold;
            transition: 0.3s;
        }

        .social-links a:hover {
            background: #6366f1;
            color: white;
            transform: translateY(-2px);
        }

        .back-button {
            display: block;
            width: fit-content;
            margin: 30px auto 0;
            padding: 12px 22px;
            background: #6366f1;
            color: white;
            text-decoration: none;
            border-radius: 12px;
            transition: 0.3s;
        }

        .back-button:hover {
            background: #4f46e5;
            transform: translateY(-2px);
        }

        @media (max-width: 600px) {
            .info {
                flex-direction: column;
                gap: 5px;
            }

            .value {
                text-align: left;
            }

            .profile {
                width: 94%;
            }
        }
    </style>
</head>

<body>

<?php
$student_id = isset($student_id) ? $student_id : '';
$name = isset($name) ? $name : '';
$course = isset($course) ? $course : '';
$year = isset($year) ? $year : '';
$section = isset($section) ? $section : '';
$email = isset($email) ? $email : '';
$contact = isset($contact) ? $contact : '';
$address = isset($address) ? $address : '';
$skills = isset($skills) ? $skills : '';
$hobbies = isset($hobbies) ? $hobbies : '';
$description = isset($description) ? $description : '';
$facebook = isset($facebook) ? $facebook : '';
$github = isset($github) ? $github : '';
?>

<div class="navbar">
    <a href="<?= site_url('student'); ?>">Home</a>
    <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
</div>

<div class="profile">

    <!-- Profile Header -->
    <div class="header-card">
        <div class="avatar">ZM</div>

        <h1>Zean's Digital Student Profile</h1>

        <div class="subtitle">
            BS Information Technology Student
        </div>
    </div>

    <!-- Personal Information -->
    <div class="card">
        <h2>Personal Information</h2>

        <div class="info">
            <span class="label">Student ID</span>
            <span class="value"><?= $student_id ?></span>
        </div>

        <div class="info">
            <span class="label">Student Name</span>
            <span class="value"><?= $name ?></span>
        </div>

        <div class="info">
            <span class="label">Course</span>
            <span class="value"><?= $course ?></span>
        </div>

        <div class="info">
            <span class="label">Year Level</span>
            <span class="value"><?= $year ?></span>
        </div>

        <div class="info">
            <span class="label">Section</span>
            <span class="value"><?= $section ?></span>
        </div>

        <div class="info">
            <span class="label">Email</span>
            <span class="value"><?= $email ?></span>
        </div>

        <div class="info">
            <span class="label">Contact Number</span>
            <span class="value"><?= $contact ?></span>
        </div>

        <div class="info">
            <span class="label">Address</span>
            <span class="value"><?= $address ?></span>
        </div>
    </div>

    <!-- About Me -->
    <div class="card">
        <h2>About Me</h2>

        <p class="about">
            <?= $description ?>
        </p>

        <div class="info">
            <span class="label">Skills</span>
            <span class="value"><?= $skills ?></span>
        </div>

        <div class="info">
            <span class="label">Hobbies</span>
            <span class="value"><?= $hobbies ?></span>
        </div>
    </div>

    <!-- Social Media -->
    <div class="card">
        <h2>Social Media</h2>

        <div class="social-links">

            <a href="<?= $facebook ?>" target="_blank">
                Facebook
            </a>

            <a href="<?= $github ?>" target="_blank">
                GitHub
            </a>

        </div>
    </div>

    <a class="back-button" href="<?= site_url('student'); ?>">
        Back to Student Hub
    </a>

</div>

</body>
</html>