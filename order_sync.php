

<?php
// Connessione al database Access
$dsn = "odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};C:\Geometria\SQL\dbwp.accdb";

// Ricezione dei dati dell'ordine dal webhook
$order_data = json_decode(file_get_contents('php://input'), true);

// Connessione al database Access
try {
    $conn = new PDO($dsn);
} catch (PDOException $e) {
    die("Connessione al database fallita: " . $e->getMessage());
}

// Verifica dei dati ricevuti
if(isset($order_data['id']) && isset($order_data['date_created']) && isset($order_data['billing'])) {
    // Preparazione dei dati per l'inserimento nel database Access
    $order_id = $order_data['id'];
    $order_date = $order_data['date_created'];
    $customer_first_name = $order_data['billing']['first_name'];
    $customer_last_name = $order_data['billing']['last_name'];
    $customer_email = $order_data['billing']['email'];
    $customer_phone = $order_data['billing']['phone'];

    // Preparazione della query per l'inserimento dei dati dell'ordine nel database Access
    $query = "INSERT INTO Orders (order_id, order_date, customer_first_name, customer_last_name, customer_email, customer_phone) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    
    // Esecuzione della query
    $stmt->execute([$order_id, $order_date, $customer_first_name, $customer_last_name, $customer_email, $customer_phone]);
    
    echo "Dati dell'ordine inseriti con successo nel database Access.";
} else {
    echo "Errore: dati dell'ordine non validi.";
}
?>
