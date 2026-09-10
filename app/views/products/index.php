<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #0b1120;
            color: #e5e7eb;
            padding: 40px;
        }

        .container {
            max-width: 1200px;
            margin: auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 32px;
            color: #ffffff;
        }

        .header p {
            margin: 0;
        }

        .add-btn {
            background: #2563eb;
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.2s;
        }

        .add-btn:hover {
            background: #1d4ed8;
        }

        .table-container {
            background: #111827;
            border: 1px solid #1e3a5f;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: #172554;
        }

        th {
            color: #93c5fd;
            text-align: left;
            padding: 16px;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        td {
            padding: 16px;
            border-top: 1px solid #1f2937;
            color: #d1d5db;
        }

        tbody tr {
            transition: 0.2s;
        }

        tbody tr:hover {
            background: #172033;
        }

        td:first-child {
            color: #60a5fa;
            font-weight: bold;
        }

        .price {
            color: #60a5fa;
            font-weight: bold;
        }

        .quantity {
            color: #93c5fd;
        }

        .action {
            display: flex;
            gap: 8px;
        }

        .edit-btn,
        .delete-btn {
            text-decoration: none;
            padding: 8px 13px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: bold;
            transition: 0.2s;
        }

        .edit-btn {
            background: #1d4ed8;
            color: white;
        }

        .edit-btn:hover {
            background: #2563eb;
        }

        .delete-btn {
            background: #374151;
            color: #fca5a5;
        }

        .delete-btn:hover {
            background: #4b5563;
            color: #fecaca;
        }

        .empty {
            background: #111827;
            border: 1px solid #1e3a5f;
            border-radius: 12px;
            padding: 40px;
            text-align: center;
            color: #9ca3af;
        }

        @media (max-width: 800px) {
            body {
                padding: 20px;
            }

            .header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .table-container {
                overflow-x: auto;
            }

            table {
                min-width: 800px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">
        <h1>Products</h1>

        <p>
            <a href="<?= site_url('products/create') ?>" class="add-btn">
                + Add Product
            </a>
        </p>
        <p>
            Logged in as <?= html_escape($_SESSION['username'] ?? '') ?> |
            <a href="<?= site_url('logout') ?>">Logout</a>
        </p>
    </div>

    <?php if (!empty($products)) : ?>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($products as $product) : ?>

                        <tr>
                            <td>
                                <?= html_escape($product['id']) ?>
                            </td>

                            <td>
                                <?= html_escape($product['product_name']) ?>
                            </td>

                            <td>
                                <?= html_escape($product['description'] ?? '') ?>
                            </td>

                            <td class="price">
                                ₱<?= html_escape($product['price']) ?>
                            </td>

                            <td class="quantity">
                                <?= html_escape($product['quantity']) ?>
                            </td>

                            <td>
                                <div class="action">

                                    <a
                                        href="<?= site_url('products/edit/' . $product['id']) ?>"
                                        class="edit-btn">
                                        Edit
                                    </a>

                                    <a
                                        href="<?= site_url('products/delete/' . $product['id']) ?>"
                                        class="delete-btn"
                                        onclick="return confirm('Delete this product?');">
                                        Delete
                                    </a>

                                </div>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    <?php else : ?>

        <div class="empty">
            <p>No products found.</p>
        </div>

    <?php endif; ?>

</div>

</body>
</html>
