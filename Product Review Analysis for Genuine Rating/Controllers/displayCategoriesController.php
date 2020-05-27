<?php
function displayCategories()
{
    global $admin;
    $result = $admin->viewCategories();
    if ($result == 0) {
        echo "<p>something went wrong connecting to database</p>";
    } else {
        foreach ($result as $category) {
            $option = '<option value = "' . $category->getCategoryId() . '">' . $category->getCategoryName() . '</option>';
            echo $option;
        }
    }
}