<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>
            Update Product
        </title>
        <link href="../css/style2.css" rel="stylesheet" />
    </head>
    <body>
        <div class="form_div">
            <form action="" method="POST">
                <p>Choose product category and enter product name</p>
                <div class="product-labels">
                    <label>Category</label>
                    <label>Product Name</label>
                    <label>Price</label>
                    <label id="expire_date_label">Expire Date</label>
                    <label id="serial_number_label">Serial Number</label>
                    <label id="product_image_label">Product Image</label>
                </div>
                <div class="product-inputs">
                    <select name="category">
                        <option value="category_1">category 1</option>
                        <option value="category_2">category 2</option>
                        <option value="category_3">category 3</option>
                    </select>
                    <input type="text" name="product_name" />
                    <input type="number" name="product_price" id="price_input" />
                    <input type="date" name="product_expire_date" id="expire_date_input"/>
                    <input type="number" name="product_serial_number" />
                    <input type="file" name="product_image" />
                </div>
  
                <textarea rows="10" cols="25" maxlength="255">Product Description.</textarea>
                <input type="submit" class="submit_input" value="Update" />
            </form>
        </div>
    </body>
</html>
