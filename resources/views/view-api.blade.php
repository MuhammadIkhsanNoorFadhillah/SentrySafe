<?php
// Bearer Token yang diperoleh dari login
$bearerToken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJzdGFnaW5nLm9uZWJveC5jby5pZCIsInN1YiI6IjU1IiwiZXhwIjoxNzIzODAwMjY0LCJuYmYiOjE3MjM3OTEyNjQsImlhdCI6MTcyMzc5MTI2NCwianRpIjoiK0VXeW11aTRcLzhxY0JoYnN0K05sM1pvVnV5TXJwTUozMW1lOGg0VVIwZWs9Iiwic2VzaWQiOiI0MmRpMWw1NTF0Nzk1cmhqb2VnY2xtZ25kbCIsInVzaWQiOiIzOTMiLCJzaWQiOiIxNjkifQ.RAdQk1ONUEruwj18QJkPIYdXYSfifrQpHcGRj869gN4';

// Default ticket ID
$ticketId = 54745;

// Cek apakah ID dikirimkan melalui form
if (isset($_GET['ticket_id'])) {
    // Validasi agar hanya menerima angka
    if (ctype_digit($_GET['ticket_id'])) {
        $ticketId = $_GET['ticket_id'];
    } else {
        echo "Invalid Ticket ID. Please enter a valid number.";
        exit;
    }
}

// URL API
$ticketsApiUrl = 'https://staging.onebox.co.id/api/ticket/' . $ticketId;

// Inisialisasi cURL session
$ch = curl_init($ticketsApiUrl);

// Set opsi cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $bearerToken,
    'Accept: application/json'
]);

// Eksekusi cURL dan ambil hasil
$response = curl_exec($ch);

// Periksa jika ada error
if(curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
    exit;
}

// Ambil status kode HTTP dari cURL
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// Tutup cURL session
curl_close($ch);

// Decode JSON response
$data = json_decode($response, true);

$isTokenExpired = ($httpCode === 401); // Biasanya status 401 menunjukkan token kadaluwarsa

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tiket</h1>

        <!-- Form untuk mencari ticket ID -->
        <form method="GET" action="">
            <div class="row justify-content-start">
                <div class="col-lg-5 form-group">
                    <label for="ticket_id">Masukkan Id Tiket:</label>
                    <input type="number" placeholder="Cari id tiket anda" class="form-control rounded-pill"
                        id="ticket_id" name="ticket_id" required>
                </div>
                <div class="col-lg-1" style="margin-top: 33px;">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>

        <?php if ($isTokenExpired): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Token telah kedaluwarsa. Silakan masuk lagi.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php elseif ($data): ?>
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>Field</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $value): ?>
                <tr>
                    <td><b><?= htmlspecialchars($key) ?></b></td>
                    <td><?= htmlspecialchars(is_array($value) ? json_encode($value) : ($value === null ? 'null' : $value)) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php else: ?>
        <p>No data available.</p>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
