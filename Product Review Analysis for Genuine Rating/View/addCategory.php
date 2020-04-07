<!DOCTYPE html>
<html>
    <head>
        <title>Add Category</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../pictures/category.png" type="image/png" rel="shortcut icon">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body id="body-add-cat">
        <header>
            
        </header>
        <div class="add-cat-big-div">
            <div class="add-cat-small-div">
                <h3>Category Name : </h3>
                <input type="text" placeholder="Enter Category Name " id="input">
            </div>
            <a><button id="addcateg-btn" onclick="addCategory()">Add Category</button></a>
        </div>
        
        <script>
            function addCategory()
            {
                var x = document.getElementById("input").value;
                if(x  < 0)
                    alert("No data is added");
                else
                    alert("You added category successfully");
            }
        </script>
    </body>
</html>
