<?php
// DATABASEGEGEVENS
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "j_k";

// Maak connectie
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connectie
if ($conn->connect_error) {
  die("Verbinding mislukt: " . $conn->connect_error);
}

// Controleer of formulier is verstuurd
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $naam = $_POST['naam'];
  $email = $_POST['email'];
  $telefoon = $_POST['telefoon'];
  $bericht = $_POST['bericht'];

  // Gegevens invoegen in database
  $sql = "INSERT INTO contactberichten (naam, email, telefoon, bericht)
          VALUES ('$naam', '$email', '$telefoon', '$bericht')";

  if ($conn->query($sql) === TRUE) {
    $melding = "✅ Bedankt voor je bericht! We nemen zo snel mogelijk contact met je op.";
  } else {
    $melding = "❌ Er is iets misgegaan: " . $conn->error;
  }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - J&K Autoservice</title>
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
        <li><a href="occasions.php">Occasions</a></li>
        <li><a href="overons.html">Over ons</a></li>
        <li><a href="contact.php" class="active">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero sectie -->
  <section class="hero">
    <h1>Neem contact met ons op</h1>
    <p>We helpen je graag met al je vragen of opmerkingen.</p>
  </section>

  <!-- Contactformulier sectie -->
  <section class="contact">
    <h2>Contactformulier</h2>

    <?php if (!empty($melding)) echo "<p style='color:green; text-align:center;'>$melding</p>"; ?>

    <form action="contact.php" method="post">
      <label for="naam">Naam:</label>
      <input type="text" id="naam" name="naam" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="telefoon">Telefoon:</label>
      <input type="text" id="telefoon" name="telefoon" required>

      <label for="bericht">Bericht:</label>
      <textarea id="bericht" name="bericht" rows="5" required></textarea>

      <button type="submit">Verstuur</button>
    </form>
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
