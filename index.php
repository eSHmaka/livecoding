<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./assets/style.css">
  <?php 
    include "./variables/funciton.php";
    include "./variables/massives.php";
  ?>

</head>
<body>
  <section class="first-section">
    <div class="container">
      <div>
        <h6>explore our work</h6>
        <h2>See what we can do together.</h2>
        <button>View All Projects</button>
      </div>
      
    </div>
  </section>

  <section class="second-section">
    <div class="suratebi">
      <?php 
        card($cards);
      ?>
  </section>

  <section>
    <div class="kards">
      <?php kard($kards)
      ?>

    </div>
  </section>
</body>
</html>