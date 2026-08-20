<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Denied | Student Portal</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #1e293b;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            width: 90%;
            max-width: 500px;
            background: white;
            border-radius: 16px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background: #e8f0fe;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 38px;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 12px;
            color: #1e3a8a;
        }

        p {
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .notice {
            background: #f8fafc;
            border-left: 4px solid #2563eb;
            padding: 14px;
            margin-bottom: 25px;
            text-align: left;
            border-radius: 6px;
            color: #475569;
        }

        .button {
            display: inline-block;
            padding: 12px 24px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }

        .button:hover {
            background: #1d4ed8;
        }

        .footer {
            margin-top: 25px;
            font-size: 13px;
            color: #94a3b8;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="icon">
            🔒
        </div>

        <h1>Access Denied</h1>

        <p>
            You currently don't have permission to access
            the Student Profile.
        </p>

        <div class="notice">
            <strong>Student Profile Restricted</strong><br>
            Please contact the administrator if you believe
            you should have access to this page.
        </div>

        <a href="<?= site_url('student') ?>" class="button">
            Back to Student Page
        </a>

        <div class="footer">
            Student Portal
        </div>

    </div>

</body>
</html>