
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management Module</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 40px 20px;
            font-family: Arial, sans-serif;
            background: #050b18;
            color: #ffffff;
        }

        /* Main Container */
        .container {
            max-width: 1000px;
            margin: auto;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #080808, #0d47a1);
            padding: 25px 30px;
            border-radius: 15px;
            margin-bottom: 25px;
            border: 1px solid #1565c0;
            box-shadow: 0 8px 25px rgba(0, 102, 255, 0.2);
        }

        .header h1 {
            margin: 0;
            font-size: 30px;
        }

        .header p {
            margin: 8px 0 0;
            color: #b8c7e0;
        }

        /* Table Card */
        .table-card {
            background: #0b1220;
            padding: 20px;
            border-radius: 15px;
            border: 1px solid #1e3a5f;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
            overflow-x: auto;
        }

        /* Table */
        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 700px;
        }

        th {
            background: #0d47a1;
            color: white;
            padding: 15px;
            text-align: left;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        td {
            padding: 14px 15px;
            border-bottom: 1px solid #1c2b40;
            color: #dce6f5;
        }

        /* Row Hover */
        tbody tr {
            transition: 0.2s ease;
        }

        tbody tr:hover {
            background: #111f35;
            transform: scale(1.005);
        }

        /* ID */
        td:first-child {
            color: #42a5f5;
            font-weight: bold;
        }

        /* Username */
        td:last-child {
            color: #64b5f6;
            font-weight: bold;
        }

        /* No Users */
        .no-users {
            text-align: center;
            padding: 30px;
            color: #9aa9bd;
        }

        /* Responsive */
        @media (max-width: 700px) {
            body {
                padding: 20px 10px;
            }

            .header h1 {
                font-size: 24px;
            }

            .table-card {
                padding: 10px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <!-- Header -->
    <div class="header">
        <h1>👥 User Management</h1>
        <p>Manage and view registered users from the database.</p>
    </div>

    <!-- Table -->
    <div class="table-card">

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Username</th>
                </tr>
            </thead>

            <tbody>

                <?php if (!empty($users)) : ?>

                    <?php foreach ($users as $user) : ?>

                        <tr>
                            <td>
                                <?= htmlspecialchars($user->id ?? $user['id']) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($user->firstname ?? $user['firstname']) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($user->lastname ?? $user['lastname']) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($user->email ?? $user['email']) ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($user->username ?? $user['username']) ?>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                <?php else : ?>

                    <tr>
                        <td colspan="5" class="no-users">
                            No users found.
                        </td>
                    </tr>

                <?php endif; ?>

            </tbody>
        </table>

    </div>

</div>

</body>
</html>

