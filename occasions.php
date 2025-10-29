<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Occasions - J&K Autoservice</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
  <!-- Header -->
  <header>
    <div class="logo">J&K Autoservice</div>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="occasions.php" class="active">Occasions</a></li>
        <li><a href="overons.html">Over ons</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero sectie -->
  <section class="hero">
    <h1>Onze Occasions</h1>
    <p>Bekijk ons actuele aanbod van tweedehands auto’s.</p>
  </section>

  <!-- PHP: Database connectie en data ophalen -->
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "j_k"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Verbinding mislukt: " . $conn->connect_error);
}

$sql = "SELECT * FROM ocassions";
$result = $conn->query($sql);
?>

<section class="occasions">
  <?php while ($row = $result->fetch_assoc()): ?>
    <div class="auto">
      <img src="images/<?php echo $row['afbeelding']; ?>" alt="<?php echo $row['merk']; ?>">
      <h3><?php echo $row['merk'] . ' ' . $row['model']; ?></h3>
      <p><?php echo $row['bouwjaar']; ?> | <?php echo $row['kilometerstand']; ?> km | €<?php echo $row['prijs']; ?></p>
      <a href="auto.php?id=<?php echo $row['id']; ?>" class="button">Meer info</a>
    </div>
  <?php endwhile; ?>
</section>



  <!-- Footer -->
  <footer>
    <div class="footer-left">
      <h4>Contact</h4>
      <p>Contactweg 27, Amsterdam</p>
      <p>+31612195049</p>
      <p>J&K@info.nl</p>
    </div>
    <div class="footer-center">
      <h4>Volg ons</h4>
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-pinterest-p"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
    <div class="footer-right">
      <a href="faq.html">FAQ</a>
    </div>
  </footer>
</body>
</html>
