<!DOCTYPE html>
<html>
<head>
    <title>Zean's Student Space</title>

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

        .hero {
            width: 90%;
            max-width: 800px;
            margin: 80px auto;
            padding: 60px 35px;
            text-align: center;
            background: linear-gradient(135deg, #dbeafe, #ede9fe);
            border-radius: 25px;
            box-shadow: 0 8px 25px rgba(99, 102, 241, 0.10);
        }

        .avatar {
            width: 90px;
            height: 90px;
            margin: 0 auto 20px;
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
            margin: 0;
            color: #4338ca;
            font-size: 32px;
        }

        .subtitle {
            margin: 15px auto;
            max-width: 600px;
            color: #64748b;
            font-size: 17px;
            line-height: 1.7;
        }

        .button {
            display: inline-block;
            margin-top: 20px;
            padding: 13px 25px;
            background: #6366f1;
            color: white;
            text-decoration: none;
            border-radius: 12px;
            font-weight: bold;
            transition: 0.3s;
        }

        .button:hover {
            background: #4f46e5;
            transform: translateY(-3px);
        }

        .footer {
            text-align: center;
            padding: 30px;
            color: #94a3b8;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 26px;
            }

            .hero {
                padding: 45px 20px;
                margin-top: 60px;
            }

            .navbar a {
                margin: 0 8px;
            }
        }
    </style>
</head>

<body>

<div class="navbar">
    <a href="<?= site_url('student'); ?>">Home</a>
    <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
</div>

<div class="hero">

    <div class="avatar">
        ZM
    </div>

    <h1>Welcome to Zean's Student Space</h1>

    <p class="subtitle">
        A personal student information page built with LavaLust.
        Get to know me, my studies, skills, hobbies, and interests.
    </p>

    <a class="button" href="<?= site_url('student/profile'); ?>">
        Explore My Profile
    </a>

</div>

<div class="footer">
    Zean's Student Space • Built with LavaLust
</div>

</body>
</html>