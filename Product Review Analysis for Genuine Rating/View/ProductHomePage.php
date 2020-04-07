<!DOCTYPE html>
<html>
    <head>
        <title>Admin Home-Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/style1.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../pictures/gears.png" type="image/png" rel="shortcut icon">
    </head>
    <body id="body-index">
        <!-- The Header --> 
        <header>
            <div class="menu-bar">
                <a href="#">
                    <image src="../pictures/logo.png " id="logo-img" alt="logo">  
                    <p id="website-name">ChooseFreely</p>
                </a>
                
                <ul id="right-nav">
                    <li><a href="#"><i class="fa fa-edit"></i>Logout</a></li>
                    <li><a><i class="fa fa-clone"></i>Options</a>
                        <div class="sub-menu-1">
                            <ul>
                                <li><a href="../view/viewUsers.php">Users</a></li>
                                <li><a href="../view/feedbacks.php">Users' Feedback</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="HomePage.php"><i class="fa fa-home"></i>Home</a></li>
                </ul>
            </div>
        </header>
        
        <!-- The Body -->
        <div class="prod-div">
            <h3>Products</h3>
            <a href="../view/add_product.php"><button class="admin-btns">Add Product</button></a>
            <a href="../view/update_product.php"><button class="admin-btns">Update Product</button></a>
            <a href="../view/delete_product.php"><button class="admin-btns">Delete Product</button></a>
        </div>
        <div class="categ-div">
            <h3>Categories</h3>
            <a href="../view/addCategory.php"><button class="admin-btns2">Add Category</button></a>
            <a href="../view/deleteCategory.php"><button class="admin-btns2">Delete Category</button></a>
        </div>
        
        <footer>
            
        </footer>
    </body>
</html>
