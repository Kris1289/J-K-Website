<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Occasion details - J&K Autoservice</title>
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
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <?php
  // ✅ Databaseverbinding
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "j_k"; // <-- pas dit aan naar jouw databasenaam

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("❌ Verbinding mislukt: " . $conn->connect_error);
  }

  // ✅ Controleer of er een ID is meegegeven
  if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // beveiliging tegen SQL-injectie

    $sql = "SELECT * FROM ocassions WHERE id = $id";
    $result = $conn->query($sql);

    // 🔍 Debugregel – laat foutmelding zien als query mislukt
    if (!$result) {
      die("❌ SQL-fout: " . $conn->error . "<br>Query: " . $sql);
    }

    // ✅ Toon resultaat
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      echo '<section class="auto-detail">';
      echo '<div class="auto-info">';
      echo '<img src="images/' . htmlspecialchars($row["afbeelding"]) . '" alt="' . htmlspecialchars($row["merk"] . ' ' . $row["model"]) . '">';
      echo '<h2>' . htmlspecialchars($row["merk"] . ' ' . $row["model"]) . '</h2>';
      echo '<p><strong>Bouwjaar:</strong> ' . htmlspecialchars($row["bouwjaar"]) . '</p>';
      echo '<p><strong>Kilometerstand:</strong> ' . number_format($row["kilometerstand"], 0, ',', '.') . ' km</p>';
      echo '<p><strong>Prijs:</strong> €' . number_format($row["prijs"], 0, ',', '.') . '</p>';
      echo '<p><strong>Beschrijving:</strong><br>' . nl2br(htmlspecialchars($row["beschrijving"])) . '</p>';
      echo '<a href="occasions.php" class="button">← Terug naar overzicht</a>';
      echo '</div>';
      echo '</section>';
    } else {
      echo "<p>❗ Auto niet gevonden.</p>";
    }
  } else {
    echo "<p>❗ Geen auto geselecteerd.</p>";
  }

  $conn->close();
  ?>

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
