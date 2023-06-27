<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/recipes.css">
    <title>Recipes</title>
  </head>
  <body>
    <?php 
    require_once './Components/API/fetchRecipes.php';
    session_start();
    include './Components/Navbar/navbar.php';

    // Usage example:
    $apiKey = "YOUR_API_KEY";
    $apiEndpoint = "https://api.spoonacular.com/recipes/random";
    $number = 5; // Number of recipes to retrieve

    $recipes = fetchRecipes($apiKey, $apiEndpoint, $number);

    // Iterate through each recipe and display the details
    foreach ($recipes as $recipe) {
        echo "<h2>Title: " . $recipe['title'] . "</h2>";
        echo "<img src='" . $recipe['image'] . "' alt='" . $recipe['title'] . "' />";
        echo "<h3>Ingredients:</h3>";
        echo "<ul>";
        foreach ($recipe['extendedIngredients'] as $ingredient) {
            echo "<li>" . $ingredient['originalString'] . "</li>";
        }
        echo "</ul>";
        echo "<h3>Nutrition:</h3>";
        echo "<ul>";
        echo "<li>Calories: " . $recipe['nutrition']['nutrients'][0]['amount'] . " " . $recipe['nutrition']['nutrients'][0]['unit'] . "</li>";
        echo "<li>Protein: " . $recipe['nutrition']['nutrients'][1]['amount'] . " " . $recipe['nutrition']['nutrients'][1]['unit'] . "</li>";
        echo "<li>Carbohydrates: " . $recipe['nutrition']['nutrients'][3]['amount'] . " " . $recipe['nutrition']['nutrients'][3]['unit'] . "</li>";
        echo "<li>Fat: " . $recipe['nutrition']['nutrients'][4]['amount'] . " " . $recipe['nutrition']['nutrients'][4]['unit'] . "</li>";
        echo "</ul>";
        echo "--------------------------------------------------<br>";
      }
    ?>
  </body>
</html>
