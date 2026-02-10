
<?php
session_start();

if (!isset($_SESSION['all_reviews']) ) {
    $_SESSION['all_reviews'] = [];
}
if ($_SERVER["REQUEST_METHOD"] === "POST" ) {
   $newReview = [
        "nom" => $_POST['nom'],
        "email" => $_POST['mail'],
        "message" => $_POST['commentaire'],
        "date" => date("d/m/y - H:i") 
        ];
        $ligne = "<<".$newReview["nom"]."|".$newReview["email"]."|".$newReview["message"]."|".$newReview["date"] .">>\n";
        file_put_contents("information.txt", $ligne, FILE_APPEND);
        array_unshift($_SESSION['all_reviews'],$newReview);
        header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    if (isset($_SESSION['all_reviews'][$id])) {
        unset($_SESSION['all_reviews'][$id]); // Remove the specific item
        // Re-index the array so there are no holes
        $_SESSION['all_reviews'] = array_values($_SESSION['all_reviews']);
    }
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
if(isset($_POST['remove'])){
    $_SESSION['all_reviews'] = [];
     header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

  <?php
if (isset($_SESSION['all_reviews'])) {
    $count = 0;
    foreach ($_SESSION['all_reviews'] as $key => $review) {
        echo "
        <div class=\"review-card\">
            <div class=\"card-meta\">
                <strong>".htmlspecialchars($review['nom'])."</strong>
                <a href=\"?delete=$key\" style=\"color:red; float:right;\">Supprimer</a>
            </div>
            <p class=\"card-text\">".htmlspecialchars($review['message'])."</p>
            <p class=\"date\">".htmlspecialchars($review['date'])."</p>
        </div>";
        if(++$count == 5) break;
    }
}
?>

