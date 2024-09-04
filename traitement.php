<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress Bar with OK Message</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f0f0f0;
}

.progress-container {
    width: 80%;
    background-color: #e0e0e0;
    border-radius: 25px;
    overflow: hidden;
    margin-bottom: 20px;
}

.progress-bar {
    height: 30px;
    width: 0;
    background-color: #76c7c0;
    border-radius: 25px 0 0 25px;
}

.ok-message {
    font-size: 50px;
    color: green;
    display: none; /* Caché par défaut */
}

</style>
<body>
    <div class="progress-container">
        <div class="progress-bar" id="progress-bar"></div>
    </div>
    <div id="ok-message" class="ok-message"></div> <!-- Message OK caché au départ -->
    <script >
        window.onload = function() {
    const progressBar = document.getElementById('progress-bar');
    const okMessage = document.getElementById('ok-message');

    progressBar.style.transition = 'width 5s';
    progressBar.style.width = '100%';

    // Afficher "OK" après 5 secondes
    setTimeout(function() {
        okMessage.textContent = 'Checked <?php 
            include("Function.php");
            $fichier1name = $_FILES["fichier1"]["name"];
            $fichier2name = $_FILES["fichier2"]["name"];
            
            if (isset($_FILES["fichier1"]  , $_FILES["fichier2"]) &&  strcmp($fichier1name , $fichier2name) != 0 ) {
                upload("fichier1");
                upload("fichier2");
                $fichier1text = getContent($_FILES["fichier1"]["name"]);
                $fichier2text = getContent($_FILES["fichier2"]["name"]);
               echo  comparaison($fichier1text , $fichier2text);
                // upload("fichier2");
            }
            
            ?> '; // Affiche le message "OK"
        okMessage.style.display = 'block'; // Affiche le texte en le passant à display:block
    }, 5000); // 5000ms = 5s
};

    </script>
</body>
</html>



