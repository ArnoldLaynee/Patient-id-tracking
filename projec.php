<?php
// Veritabanı bağlantısı
$servername = "localhost";
$username = "root";
$password = "vegas";
$database = "veritabani";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$id = "";
$data = null;

if (isset($_GET['search'])) {
    $id = $_GET['search'];
    $stmt = $conn->prepare("SELECT * FROM veriler WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>ID Arama</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        .search-bar {
            position: absolute;
            top: 20px;
            left: 20px;
        }
        table {
            margin-top: 100px;
            border-collapse: collapse;
            width: 80%;
        }
        table, th, td {
            border: 1px solid #444;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        iframe {
            width: 300px;
            height: 200px;
            border: none;
        }
    </style>
</head>
<body>

<div class="search-bar">
    <form method="GET" action="projec.php">
        <label for="search">ID Ara:</label>
        <input type="text" name="search" id="search" value="<?= htmlspecialchars($id) ?>">
        <button type="submit">Ara</button>
    </form>
</div>

<?php if ($data): ?>
    <table>
        <tr>
            <th>ID</th>
            <th>İsim</th>
            <th>Soyisim</th>
            <th>Konum</th>
            <th>Tarih</th>
            <th>Saat</th>
            <th>Google Maps</th>
        </tr>
        <tr>
            <td><?= htmlspecialchars($data['id']) ?></td>
            <td><?= htmlspecialchars($data['isim']) ?></td>
            <td><?= htmlspecialchars($data['soyisim']) ?></td>
            <td><?= htmlspecialchars($data['konum']) ?></td>
            <td><?= htmlspecialchars($data['tarih']) ?></td>
            <td><?= htmlspecialchars($data['saat']) ?></td>
            <td>
                <iframe
                    src="https://www.google.com/maps?q=<?= urlencode($data['konum']) ?>&output=embed"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </td>
        </tr>
    </table>
<?php elseif ($id): ?>
    <p><strong>ID bulunamadı.</strong></p>
<?php endif; ?>

</body>
</html>

