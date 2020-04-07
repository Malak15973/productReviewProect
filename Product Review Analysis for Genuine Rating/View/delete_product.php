<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>
            Delete Product
        </title>
        <link href="../css/style2.css" rel="stylesheet" />
    </head>
    <body>
        <div class="form_div">
            <form action="" method="POST">
                <div class="product-labels">
                    <br><br><br><br><br><br><br><br>
                    <label>Category</label>
                    <label>Product Name</label>
                </div>
                <div class="product-inputs">
                    <select name="category">
                        <option value="category_1">category 1</option>
                        <option value="category_2">category 2</option>
                        <option value="category_3">category 3</option>
                    </select>
                    <input type="text" name="product_name"/>
                </div>
                
                <input type="submit" class="submit_input" value="Delete" />
            </form>
        </div>
    </body>
</html>
