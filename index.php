<?php
   /*
        The include and require methods, finds the file you are wanting and places it where you call
        the function.
        The difference between include and require is, with include, if it can't find the file you are
        wanting, it will still continue to render everything bellow it.
        With require, it will stop running, and nothing bellow the call will be rendered.
        So you need to have a think about if what you are wanting to include is important for the site
        or not. If it is, then use require, if not, use include.
    */

    // include("templates/header.php");

    $title="Home";
    $description = "Description of the Home page";
    require("templates/header.php");
?>

<main class="px-5 py-5 page-content para-index">
	<p class="mb-5"> May your coffe<br> kick in before reality<br> does </p>
</main>

<?php
    require("templates/footer.php");
?>
