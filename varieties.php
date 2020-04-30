<?php
  $title = "Varieties";
  $description ="Description of the Varieties page";
  require("templates/header.php");
?>

<div class="row mt-5">

  <div class="col-6 card">
    <?php
      $src="images/Coffee/caffe_americano.jpg";
      $coffeeName="Caffe Americano";
      $instructions="
      DESCRIPTION
        What is a café Americano? It is made by
        adding hot water to an espresso shot.
        The water dilutes the espresso a bit,
        giving you the volume of a drip,
        but with an espresso taste. Read on to
        learn how to make the perfect tasting
        Americano yourself!

        SCALE
        1x
        2x
        3x

      INGREDIENTS

        14–18 grams espresso coffee beans
        hot or almost boiling water
        espresso machine
        scale
        grinder
        tamper



      INSTRUCTIONS

        Measure out your beans for a double shot.
        Grind them really fine.
        Tamp the beans, then put the portafilter
        into its spot on the machine.
        Make the espresso.
        Heat up the water to 160-170 degrees Fahrenheit.
        Pour the espresso into the hot water, mix 1
        part espresso to 2 parts water.
      ";

      $link="https://www.homegrounds.co/how-to-make-an-americano/";
      require("templates/card.php");
    ?>
  </div>


  <div class="col-6 card">
    <?php
      $src="images/Coffee/Cafe-Au-Lait.jpg";
      $coffeeName="Cafe Au Lait";
      $instructions="
      In France, equal parts of steamed milk and
      strong hot coffee are combined to make
      the perfect mellow beverage known as a café au lait.


      Prepare this easy recipe at home and serve it at a
      traditional French breakfast
      with flaky croissants or as an after-brunch coffee
      with a single square of dark chocolate.
      Your guests will think they've been transported
      to a sidewalk café in Paris.


      This recipe makes one serving, but the proportions
      can be increased for multiple
      cups of this gentle pick-me-up.


      In Spain, this identical drink is known as cafe con leche,
      while Germans call it milchkaffee.
      Vegans need not feel left out of this cafe au lait recipe.
      For those who like to eat their coffee for dessert,
      don't miss this café au lait creme brulée.

      Ingredients

      1 part hot strong coffee (French roast)
      1 part steamed milk

      ";
      $link="https://www.thespruceeats.com/cafe-au-lait-recipe-1374920";
      require("templates/card.php");
    ?>
  </div>


  <div class="col-6 card">
    <?php
      $src="images/Coffee/irish-coffee.jpg";
      $coffeeName="Irish Coffee";
      $instructions="How to Make the Best Irish Coffee

        Just start with the best ingredients!

        1) Brew your favorite coffee. I like dark roast
        best in Irish coffees,
        personally, but that’s my general preference.
        Freshly brewed coffee is the way to go!

        2) Add Irish whiskey to a mug. I’m partial to Jameson.
        It’s the brand we used to
        make Irish coffees when I was a bartender. Bushmills
        is a less expensive option.

        3) Add a little maple syrup to sweeten. Mind you,
        I like my coffee black in the mornings,
        but a little sweetener takes the edge off the whiskey.
        You could use regular sugar
        or brown sugar instead, but maple syrup tastes better
        and blends in more easily.

        4) Add a splash of coffee and gently stir to blend.
        Then fill the mug with coffee,
        leaving about 1/2″ at the top for whipped cream.

        5) Top with whipped cream. Bonus points if you’re 
        using real whipped cream. So good!";

        $link="https://cookieandkate.com/best-irish-coffee-recipe/";
      require("templates/card.php");

    ?>
  </div>
</div>

<?php
  require("templates/footer.php");
?>


