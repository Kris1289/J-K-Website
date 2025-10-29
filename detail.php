<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "j_k";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Verbinding mislukt: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
  $id = intval($_GET['id']);
  $sql = "SELECT * FROM occasions WHERE id = $id";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $auto = $result->fetch_assoc();
  } else {
    echo "Auto niet gevonden.";
    exit;
  }
} else {
  echo "Geen auto geselecteerd.";
  exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($auto["merk"]) . " " . htmlspecialchars($auto["model"]); ?></title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <div class="logo">J&K Autoservice</div>
  </header>

  <section class="auto-detail">
    <img src="images/<?php echo htmlspecialchars($auto["afbeelding"]); ?>" alt="<?php echo htmlspecialchars($auto["merk"]); ?>">
    <h2><?php echo htmlspecialchars($auto["merk"]) . " " . htmlspecialchars($auto["model"]); ?></h2>
    <p><strong>Bouwjaar:</strong> <?php echo htmlspecialchars($auto["bouwjaar"]); ?></p>
    <p><strong>Kilometerstand:</strong> <?php echo htmlspecialchars($auto["kilometerstand"]); ?> km</p>
    <p><strong>Prijs:</strong> €<?php echo number_format($auto["prijs"], 0, ',', '.'); ?></p>
    <p><strong>Beschrijving:</strong> <?php echo nl2br(htmlspecialchars($auto["beschrijving"])); ?></p>
    <a href="occasions.php" class="button">← Terug naar overzicht</a>
  </section>

  <footer>
    <p>&copy; 2025 J&K Autoservice</p>
  </footer>
</body>
</html>
 