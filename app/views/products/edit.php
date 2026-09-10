<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>

    <form method="post" action="<?= site_url('products/edit/' . $product['id']) ?>">
        <p>
            <label for="product_name">Product Name</label><br>
            <input type="text" id="product_name" name="product_name" maxlength="100" value="<?= html_escape($product['product_name']) ?>" required>
        </p>
        <p>
            <label for="description">Description</label><br>
            <textarea id="description" name="description" rows="5"><?= html_escape($product['description'] ?? '') ?></textarea>
        </p>
        <p>
            <label for="price">Price</label><br>
            <input type="number" id="price" name="price" min="0" step="0.01" value="<?= html_escape($product['price']) ?>" required>
        </p>
        <p>
            <label for="quantity">Quantity</label><br>
            <input type="number" id="quantity" name="quantity" min="0" value="<?= html_escape($product['quantity']) ?>" required>
        </p>
        <button type="submit">Update Product</button>
        <a href="<?= site_url('products') ?>">Cancel</a>
    </form>
</body>
</html>