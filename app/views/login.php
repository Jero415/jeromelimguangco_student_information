
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Student Portal</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #dceeff;
            color: #17324d;
            padding: 20px;
        }

        .login-wrapper {
            width: 100%;
            max-width: 430px;
        }

        .brand {
            text-align: center;
            margin-bottom: 25px;
        }

        .brand-icon {
            width: 65px;
            height: 65px;
            margin: 0 auto 15px;
            border-radius: 20px;
            background: #eaf5ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            font-weight: bold;
            color: #1769aa;
            box-shadow:
                8px 8px 18px rgba(90, 130, 165, 0.25),
                -8px -8px 18px rgba(255, 255, 255, 0.9);
        }

        .brand h1 {
            font-size: 28px;
            letter-spacing: 1px;
            color: #123b5d;
            margin-bottom: 6px;
        }

        .brand p {
            font-size: 14px;
            color: #66829a;
        }

        .login-card {
            background: #eaf5ff;
            border-radius: 28px;
            padding: 38px;
            box-shadow:
                14px 14px 30px rgba(91, 132, 169, 0.25),
                -14px -14px 30px rgba(255, 255, 255, 0.95);
        }

        .login-title {
            margin-bottom: 25px;
        }

        .login-title h2 {
            font-size: 22px;
            color: #173e60;
            margin-bottom: 6px;
        }

        .login-title p {
            font-size: 13px;
            color: #718ba0;
        }

        .error {
            background: #ffe7e7;
            color: #b42323;
            border-radius: 12px;
            padding: 12px 14px;
            margin-bottom: 20px;
            font-size: 13px;
            box-shadow:
                inset 3px 3px 7px rgba(190, 80, 80, 0.08),
                inset -3px -3px 7px rgba(255, 255, 255, 0.8);
        }

        .test-account {
            background: #d9efff;
            border: 1px solid #b8ddf5;
            border-radius: 12px;
            padding: 12px 14px;
            margin-bottom: 20px;
            color: #315873;
            font-size: 13px;
            line-height: 1.7;
        }

        .test-account strong {
            color: #173e60;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 8px;
            color: #315873;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper span {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 15px;
            color: #6590ad;
        }

        .input-wrapper input {
            width: 100%;
            height: 48px;
            border: none;
            outline: none;
            border-radius: 14px;
            padding: 0 15px 0 42px;
            background: #eaf5ff;
            color: #17324d;
            font-size: 14px;
            box-shadow:
                inset 5px 5px 10px rgba(100, 140, 175, 0.18),
                inset -5px -5px 10px rgba(255, 255, 255, 0.9);
            transition: 0.2s ease;
        }

        .input-wrapper input:focus {
            box-shadow:
                inset 4px 4px 8px rgba(100, 140, 175, 0.18),
                inset -4px -4px 8px rgba(255, 255, 255, 0.9),
                0 0 0 2px rgba(43, 130, 205, 0.18);
        }

        .input-wrapper input::placeholder {
            color: #91a8ba;
        }

        .login-button {
            width: 100%;
            height: 50px;
            border: none;
            border-radius: 15px;
            background: #2785c7;
            color: white;
            font-size: 15px;
            font-weight: bold;
            letter-spacing: 0.5px;
            cursor: pointer;
            box-shadow:
                7px 7px 14px rgba(76, 126, 164, 0.25),
                -5px -5px 12px rgba(255, 255, 255, 0.8);
            transition: 0.2s ease;
        }

        .login-button:hover {
            background: #1f76b4;
            transform: translateY(-1px);
        }

        .login-button:active {
            transform: translateY(1px);
            box-shadow:
                inset 4px 4px 8px rgba(0, 70, 130, 0.25),
                inset -4px -4px 8px rgba(255, 255, 255, 0.15);
        }

        .footer {
            text-align: center;
            margin-top: 22px;
            font-size: 12px;
            color: #7892a7;
        }

        @media (max-width: 480px) {
            .login-card {
                padding: 28px 22px;
                border-radius: 22px;
            }

            .brand h1 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>

    <div class="login-wrapper">

        <div class="brand">
            <div class="brand-icon">SP</div>
            <h1>STUDENT PORTAL</h1>
            <p>Secure Product Management System</p>
        </div>

        <div class="login-card">

            <div class="login-title">
                <h2>Welcome Back</h2>
                <p>Sign in to access the management dashboard.</p>
            </div>

            <?php if (!empty($error)) : ?>
                <div class="error">
                    <?= html_escape($error) ?>
                </div>
            <?php endif; ?>

            <div class="test-account">
                Username: <strong>labadmin</strong><br>
                Password: <strong>Lab@12345</strong>
            </div>

            <form method="post" action="<?= site_url('login') ?>">

                <div class="form-group">
                    <label for="username">Username</label>

                    <div class="input-wrapper">
                        <span>👤</span>
                        <input
                            type="text"
                            id="username"
                            name="username"
                            value="<?= html_escape($username ?? '') ?>"
                            placeholder="Enter your username"
                            required
                        >
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>

                    <div class="input-wrapper">
                        <span>🔒</span>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Enter your password"
                            required
                        >
                    </div>
                </div>

                <button type="submit" class="login-button">
                    Login to Portal
                </button>

            </form>

        </div>

        <div class="footer">
            &copy; <?= date('Y') ?> Student Portal &nbsp;•&nbsp; Secure Access
        </div>

    </div>

</body>
</html>

