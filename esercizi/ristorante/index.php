<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Restaurant Menu</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #eeeeee;
      padding: 0em 0em 2em 0em;
    }
    .body {
      background-color: #333;
      color: #fff;
      padding: 1em 1em 1em 1em;
      border-radius: 10px;
    }

    .first-courses { background-color: #FFD700; color: #333; } 
    .second-courses { background-color: #66cdaa; color: #333; } 
    .desserts { background-color: #bc8f8f; color: #333; } 
    .first-courses-item { background-color: #fff2cc; color: #333; }
    .second-courses-item { background-color: #d9ead3; color: #333; }
    .desserts-item { background-color: #f4cccc; color: #333; }
    .appetizers { background-color: #ff6347; color: #333; } 
    .drinks { background-color: #87ceeb; color: #333; } 
  </style>
</head>

<body>

  <div class="container mt-5 body">
    <h2>Menu</h2>

    <?php
    
    $menuItems = array(
      "first_courses" => array(
      array("name" => "Spaghetti alla Carbonara", "description" => "Spaghetti al dente con una cremosa salsa carbonara a base di uova, pancetta croccante e pecorino grattugiato.", "price" => "12.50"),
      array("name" => "Risotto ai Funghi Porcini", "description" => "Risotto cremoso arricchito con funghi porcini freschi, prezzemolo e una spruzzata di parmigiano.", "price" => "14.00"),
      array("name" => "Gnocchi al Pesto di Basilico", "description" => "Gnocchi fatti in casa con una delicata salsa al pesto di basilico, pinoli, aglio, parmigiano e olio d'oliva.", "price" => "13.50"),
      array("name" => "Lasagne alla Bolognese", "description" => "Strati di pasta fresca intercalati con ragù bolognese, besciamella e formaggio gratinato al forno.", "price" => "17.50"),
      ),
      "second_courses" => array(
      array("name" => "Filetto di Salmone alla Griglia", "description" => "Salmone fresco alla griglia con una salsa leggera al limone, accompagnato da contorno di verdure di stagione.", "price" => "16.50"),
      array("name" => "Tagliata di Manzo con Riduzione di Balsamico", "description" => "Succulenta tagliata di manzo cotta alla perfezione, servita con una riduzione al balsamico, patate arrosto e spinaci saltati.", "price" => "19.00"),
      array("name" => "Pollo al Curry con Riso Basmati", "description" => "Petto di pollo tenero in una salsa al curry cremosa, servito con riso basmati e contorno di verdure croccanti.", "price" => "14.50"),
      array("name" => "Cotoletta alla Milanese con Insalata di Rucola", "description" => "Cotoletta di vitello impanata e fritta a regola d'arte, accompagnata da un'insalata fresca di rucola e pomodorini.", "price" => "17.00"),
      ),
      "desserts" => array(
      array("name" => "Tiramisù Classico", "description" => "Strati di savoiardi inzuppati nel caffè, alternati a una crema di mascarpone leggera e cacao amaro.", "price" => "8.00"),
      array("name" => "Panna Cotta alla Vaniglia con Frutti di Bosco", "description" => "Panna cotta setosa aromatizzata alla vaniglia, servita con una composta di frutti di bosco freschi e salsa alla frutta.", "price" => "9.50"),
      array("name" => "Torta al Cioccolato Fondente con Gelato alla Vaniglia", "description" => "Torta al cioccolato ricca e morbida, accompagnata da una generosa pallina di gelato alla vaniglia e salsa al cioccolato calda.", "price" => "10.50"),
      ),
    );
      function generateMenu($category, $items, $colorClassBackground, $colorClassItem) {
      ?>
      <?php echo "<div class='card mt-4 $colorClassBackground'>"; ?>
        <div class='card-header'>
          <h3>
            <?=$category?>
          </h3>
        </div>
        <div class='card-body'>
          <?php
            foreach ($items as $item) {
              ?>
                <?php echo "<div class='card mb-3 $colorClassItem'>" ?>
                  <div class='card-body d-flex justify-content-between align-items-center'>
                    <div>
                      <?php
                      echo "<h5 class='card-title'>{$item['name']}</h5>";
                      echo "<p class='card-text'>{$item['description']}</p>";
                      ?>
                    </div>
                    <?php
                      echo "<p class='card-text'> <span class='float-right'>{$item['price']}€</span></p>";
                    ?>
                  </div>
                </div>
              <?php
            }
          ?>
        </div>
      </div>
      <?php
    }
  generateMenu("Primi piatti", $menuItems['first_courses'], 'first-courses', 'first-courses-item');
  generateMenu("Secondi piatti", $menuItems['second_courses'], 'second-courses', 'second-courses-item');
  generateMenu("Desserts", $menuItems['desserts'], 'desserts', 'desserts-item');
    ?>

  </div>

</body>
</html>