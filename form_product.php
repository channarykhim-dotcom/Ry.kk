<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Product</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            padding: 48px 20px;
            background: #edf4f2;
            color: #193b38;
            font-family: "Segoe UI", sans-serif;
        }

        main {
            width: min(100%, 440px);
            margin: 0 auto;
            padding: 32px;
            background: #ffffff;
            border: 1px solid #d7e5e1;
            border-top: 5px solid #3e09db;
            border-radius: 8px;
            box-shadow: 0 16px 40px rgba(25, 59, 56, 0.09);
        }

        h2 {
            margin: 0 0 24px;
            font-size: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 18px;
            color: #355b56;
            font-size: 0.9rem;
            font-weight: 600;
        }

        input[type="text"],
        input[type="number"] {
            display: block;
            width: 100%;
            margin-top: 8px;
            padding: 11px 12px;
            border: 1px solid #b9ceca;
            border-radius: 5px;
            background: #fbfdfc;
            color: #193b38;
            font: inherit;
        }

        input:focus {
            border-color: #3b0ce6;
            outline: 3px solid rgba(22, 132, 119, 0.16);
        }

        input[type="submit"] {
            width: 100%;
            margin-top: 4px;
            padding: 12px 16px;
            border: 0;
            border-radius: 5px;
            background: #1e0ddf;
            color: #ffffff;
            font: inherit;
            font-weight: 700;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: #460ce6;
        }

        @media (max-width: 480px) {
            body {
                padding: 24px 14px;
            }

            main {
                padding: 24px 20px;
            }
        }
    </style>
</head>
<body>
    <main>
        <h2>Add Product</h2>
        <form action="" method="post">
            <label for="product">Product
                <input type="text" name="product" id="product">
            </label>
            <label for="price">Price
                <input type="text" name="price" id="price">
            </label>
            <label for="qty">Quantity
                <input type="number" name="qty" id="qty">
            </label>

            <input type="submit" value="Save">
        </form>
    </main>
</body>
</html>