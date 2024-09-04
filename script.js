window.onload = function() {
    const progressBar = document.getElementById('progress-bar');
    const okMessage = document.getElementById('ok-message');

    progressBar.style.transition = 'width 5s';
    progressBar.style.width = '100%';

    // Afficher "OK" après 5 secondes
    setTimeout(function() {
        okMessage.textContent = 'Checked'; // Affiche le message "OK"
        okMessage.style.display = 'block'; // Affiche le texte en le passant à display:block
    }, 5000); // 5000ms = 5s
};
