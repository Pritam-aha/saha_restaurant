<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchTerm = $_POST["search"];

    // Redirect based on the search term
    switch ($searchTerm) {
        case "biriyani":
            header("Location: category-foods-biryani.html");
            break;
        case "cake":
            header("Location: category-foods-cake.html");
            break;
        case "burger":
            header("Location: category-foods-burger.html");
            break;
        case "pizzas":
            header("Location: category-foods-pizza.html");
            break;
        case "ice cream":
            header("Location: category-foods-ice-cream.html");
            break;
        default:
            // Handle other cases or redirect to a general search page
            header("Location: search-results-general.php?search=$searchTerm");
            break;
    }
}
?>
