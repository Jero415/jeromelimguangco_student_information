<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #071a2f, #0b2d4d, #061426);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 15px;
        }

        .container {
            width: 100%;
            max-width: 620px;
        }

        .header {
            margin-bottom: 20px;
        }

        .brand {
            color: #38bdf8;
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 2px;
            margin-bottom: 8px;
        }

        .header h1 {
            font-size: 32px;
            margin-bottom: 6px;
        }

        .header p {
            color: #9fb3c8;
            font-size: 14px;
        }

        .form-card {
            background: #0d2742;
            border: 1px solid rgba(56, 189, 248, 0.18);
            border-radius: 22px;
            padding: 32px;
            box-shadow:
                12px 12px 25px rgba(0, 0, 0, 0.35),
                -8px -8px 20px rgba(32, 82, 120, 0.15),
                inset 1px 1px 2px rgba(255, 255, 255, 0.04);
        }

        .form-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 25px;
            color: #e8f6ff;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #b9d3e8;
            font-size: 14px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            background: #081d32;
            color: #ffffff;
            border: 1px solid #1b4568;
            border-radius: 12px;
            padding: 13px 15px;
            font-size: 14px;
            outline: none;
            box-shadow:
                inset 4px 4px 8px rgba(0, 0, 0, 0.3),
                inset -3px -3px 6px rgba(35, 91, 130, 0.12);
            transition: 0.2s ease;
        }

        input:focus,
        textarea:focus {
            border-color: #38bdf8;
            box-shadow:
                0 0 0 3px rgba(56, 189, 248, 0.12),
                inset 4px 4px 8px rgba(0, 0, 0, 0.3);
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        .row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .button-area {
            display: flex;
            gap: 12px;
            margin-top: 28px;
        }

        .btn {
            flex: 1;
            text-align: center;
            padding: 13px 18px;
            border-radius: 12px;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .btn-update {
            border: none;
            color: #03111e;
            background: linear-gradient(135deg, #38bdf8, #0ea5e9);
            box-shadow:
                0 7px 15px rgba(14, 165, 233, 0.25),
                inset 0 1px 1px rgba(255, 255, 255, 0.35);
        }

        .btn-update:hover {
            transform: translateY(-2px);
            box-shadow:
                0 10px 20px rgba(14, 165, 233, 0.35);
        }

        .btn-cancel {
            color: #c7d9e8;
            background: #102f4c;
            border: 1px solid #1d4b70;
            box-shadow:
                5px 5px 12px rgba(0, 0, 0, 0.25),
                -3px -3px 8px rgba(40, 90, 125, 0.1);
        }

        .btn-cancel:hover {
            background: #153b5d;
            color: #ffffff;
        }

        .product-id {
            display: inline-block;
            background: rgba(56, 189, 248, 0.1);
            border: 1px solid rgba(56, 189, 248, 0.2);
            color: #38bdf8;
            padding: 6px 10px;
            border-radius: 8px;
            font-size: 12px;
            margin-bottom: 20px;
        }

        @media (max-width: 600px) {
            .form-card {
                padding: 24px;
            }

            .header h1 {
                font-size: 27px;
            }

            .row {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .button-area {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">
        <div class="brand">STUDENT PORTAL</div>
        <h1>Edit Product</h1>
        <p>Update the information of your selected product.</p>
    </div>

    <div class="form-card">

        <div class="product-id">
            Product ID: #<?= html_escape($product['id']) ?>
        </div>

        <div class="form-title">
            Product Information
        </div>

        <form method="post" action="<?= site_url('products/edit/' . $product['id']) ?>">

            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input
                    type="text"
                    id="product_name"
                    name="product_name"
                    maxlength="100"
                    value="<?= html_escape($product['product_name']) ?>"
                    placeholder="Enter product name"
                    required
                >
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea
                    id="description"
                    name="description"
                    rows="5"
                    placeholder="Enter product description"
                ><?= html_escape($product['description'] ?? '') ?></textarea>
            </div>

            <div class="row">

                <div class="form-group">
                    <label for="price">Price</label>
                    <input
                        type="number"
                        id="price"
                        name="price"
                        min="0"
                        step="0.01"
                        value="<?= html_escape($product['price']) ?>"
                        placeholder="0.00"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input
                        type="number"
                        id="quantity"
                        name="quantity"
                        min="0"
                        value="<?= html_escape($product['quantity']) ?>"
                        placeholder="0"
                        required
                    >
                </div>

            </div>

            <div class="button-area">
                <button type="submit" class="btn btn-update">
                    Update Product
                </button>

                <a href="<?= site_url('products') ?>" class="btn btn-cancel">
                    Cancel
                </a>
            </div>

        </form>

    </div>

</div>

</body>
</html>