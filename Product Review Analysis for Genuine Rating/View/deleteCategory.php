<!DOCTYPE html>
<html>
    <head>
        <title>Delete Category</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../pictures/category.png" type="image/png" rel="shortcut icon">
        <link href="../css/style1.css" rel="stylesheet">
    </head>
    <body id="body-delete-cat">
        
        <div class="delete-cat-big-div">
            <div class="delete-cat-small-div">
                <h3>Category Name : </h3>
                <select class="tech-options" id="select-categories">
                    <option value=""> ..... </option>
                    <option value="">Playstations</option>
                    <option value="">Mobiles</option>
                    <option value="">Laptops</option>
                    <option value="">Watches</option>
                    <option value="">Digital Cameras</option>
                    <option value="">Speakers</option>
                    <option value="">TVs</option>
                    <option value="">Receivers</option>
                </select>
            </div>
            <a><button onclick="removeCategory()" id="removecateg-btn">Remove Category</button></a>
        </div>
        
        <script>
            function removeCategory()
            {
                var x=document.getElementById("select-categories");
                x.remove(x.selectedIndex);
            }
            /*Take it and search in database and remove*/
        </script>
    </body>
</html>
