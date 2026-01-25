<?php
session_start();

if (!isset($_SESSION['liste_avis'])) {
    $_SESSION['liste_avis'] = [];
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $newReview = [
        "nom" => $_POST['nom'],
        "email" => $_POST['mail'],
        "message" => $_POST['commentaire'],
        "date" => date("d/m/y - H:i") 
        ];
        array_unshift($_SESSION['all_reviews'],$newReview);
      
        
        


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
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre d'or Moderne</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .displayArea{
    display: none;
}
.less{
    display:none;
}
.on{
    display:none;
}
    </style>
</head>
<body>

    <div class="main-wrapper">
        <section class="form-section">
            <h2>Donnez votre avis</h2>
            <form  method="POST">
                <div class="input-group">
                    <label for="nom">Nom complet</label>
                    <input type="text" id="nom" name="nom" placeholder="Votre nom..." required>
                </div>

                <div class="input-group">
                    <label for="mail">Adresse Email</label>
                    <input type="email" id="mail" name="mail" placeholder="exemple@mail.com" required>
                </div>

                <div class="input-group">
                    <label for="commentaire">Votre message</label>
                    <textarea id="commentaire" name="commentaire" placeholder="Qu'en pensez-vous ?" required></textarea>
                </div>

                <div class="actions">
                    <button type="submit" class="btn-primary">Envoyer</button>
                    <button id="btn-secondary" type="button" class="btn-secondary"><span id="on" >Voir les avis </span> <span id="less" class="less">less</span></button>
                    <button type="button" name="remove" id="remove" style="background:red; margin:auto;" class="btn-primary remove">Supprime tout</button>
                </div>
            </form>
        </section>

   <section class="reviews-section">
            <h3>Derniers avis</h3>
            
            <div id="displayArea" class="displayArea">
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
        </div>";
        if(++$count == 5) break;
    }
}
?>


            </div>
        </section>
            </section>
    </div>
<script>
    
    document.getElementById('btn-secondary').onclick = function() {
        // console.log("good");
        document.getElementById("displayArea").classList.toggle("displayArea");
        document.getElementById("less").classList.toggle("less");
        document.getElementById("on").classList.toggle("on");
    };
</script>
</body>
</html>


