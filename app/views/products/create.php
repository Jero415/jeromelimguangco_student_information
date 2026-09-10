<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>

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
            max-width: 700px;
            margin: auto;
        }

        .header {
            margin-bottom: 25px;
        }

        .header h1 {
            font-size: 32px;
            color: #ffffff;
        }

        .form-container {
            background: #111827;
            border: 1px solid #1e3a5f;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #93c5fd;
            font-size: 14px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 13px 14px;
            background: #0b1120;
            border: 1px solid #263b5a;
            border-radius: 8px;
            color: #ffffff;
            font-size: 15px;
            outline: none;
            transition: 0.2s;
        }

        input:focus,
        textarea:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 2px rgba(37, 99, 235, 0.15);
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        input::placeholder,
        textarea::placeholder {
            color: #6b7280;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }

        .save-btn,
        .cancel-btn {
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }

        .save-btn {
            background: #2563eb;
            color: white;
            border: none;
        }

        .save-btn:hover {
            background: #1d4ed8;
        }

        .cancel-btn {
            background: #374151;
            color: #d1d5db;
        }

        .cancel-btn:hover {
            background: #4b5563;
            color: white;
        }

        @media (max-width: 600px) {
            body {
                padding: 20px;
            }

            .form-container {
                padding: 20px;
            }

            .buttons {
                flex-direction: column;
            }

            .save-btn,
            .cancel-btn {
                text-align: center;
                width: 100%;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">
        <h1>Add Product</h1>
    </div>

    <div class="form-container">

        <form method="post" action="<?= site_url('products/create') ?>">

            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input
                    type="text"
                    id="product_name"
                    name="product_name"
                    maxlength="100"
                    placeholder="Enter product name"
                    required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea
                    id="description"
                    name="description"
                    rows="5"
                    placeholder="Enter product description"></textarea>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input
                    type="number"
                    id="price"
                    name="price"
                    min="0"
                    step="0.01"
                    placeholder="0.00"
                    required>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input
                    type="number"
                    id="quantity"
                    name="quantity"
                    min="0"
                    placeholder="Enter quantity"
                    required>
            </div>

            <div class="buttons">
                <button type="submit" class="save-btn">
                    Save Product
                </button>

                <a href="<?= site_url('products') ?>" class="cancel-btn">
                    Cancel
                </a>
            </div>

        </form>

    </div>

</div>

</body>
</html>
