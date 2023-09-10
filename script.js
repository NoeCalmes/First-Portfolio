const htmlElement = document.documentElement;
let darkMode = localStorage.getItem('darkMode') === 'true';

function setupDarkModeToggle() {
    const btnToggle = document.querySelector('.btn-toggle');
    const img = btnToggle.querySelector('#toggle-image');
    const darkModeToggleWrapper = document.querySelector('.dark-mode-toggle-wrapper');

    if (darkMode) {
        htmlElement.classList.add('dark-mode');
        img.src = 'img/mode sombre/Vector2.png';
        darkModeToggleWrapper.classList.add('dark-mode'); // Ajoutez la classe dark-mode à l'enveloppe
    }

    btnToggle.addEventListener('click', () => {
        darkMode = !darkMode;
        localStorage.setItem('darkMode', darkMode);

        if (darkMode) {
            img.src = 'img/mode sombre/Vector2.png';
            htmlElement.classList.add('dark-mode');
            darkModeToggleWrapper.classList.add('dark-mode'); // Ajoutez la classe dark-mode à l'enveloppe
        } else {
            img.src = 'img/mode sombre/Vector.svg';
            htmlElement.classList.remove('dark-mode');
            darkModeToggleWrapper.classList.remove('dark-mode'); // Supprimez la classe dark-mode de l'enveloppe
        }
    });
}

document.addEventListener('DOMContentLoaded', setupDarkModeToggle);


//gestion affichage bouton dark mode /FIN

const toggleButton = document.getElementById('toggle-buttont');
const toggleImage = document.getElementById('toggle-image');
const frElements = document.querySelectorAll('.fr');
const enElements = document.querySelectorAll('.en');

let isEnglish = localStorage.getItem('isEnglish') === 'true';

// Fonction pour mettre à jour l'affichage en fonction de la langue sélectionnée
function updateLanguage() {
    if (isEnglish) {
        // Afficher le texte en anglais et changer l'image
        frElements.forEach(element => element.style.display = 'none');
        enElements.forEach(element => element.style.display = 'block');
        toggleImage.src = 'img/langue/france.png';
    } else {
        // Afficher le texte en français et changer l'image
        enElements.forEach(element => element.style.display = 'none');
        frElements.forEach(element => element.style.display = 'block');
        toggleImage.src = 'img/langue/anglais.png';
    }
}

// Mettre à jour l'affichage initial
updateLanguage();

toggleButton.addEventListener('click', function () {
    isEnglish = !isEnglish;
    localStorage.setItem('isEnglish', isEnglish); // Enregistrez la langue sélectionnée dans localStorage
    updateLanguage();

    // Ajoutez la classe "clicked" pour déclencher l'animation
    toggleButton.classList.add('clicked');

    // Supprimez la classe "clicked" après l'animation
    setTimeout(() => {
        toggleButton.classList.remove('clicked');
    }, 300); // La durée doit correspondre à la durée de transition (0.3s)
});


//loader/spinner page 
const loader = document.querySelector('.loader');

window.addEventListener('load', () => {

    loader.classList.add('fondu-out');

})

//loader debut
// Fonction pour afficher le loader
function showLoader() {
    document.getElementById('loader-overlay').style.display = 'flex';
  }
  
  // Fonction pour masquer le loader
  function hideLoader() {
    document.getElementById('loader-overlay').style.display = 'none';
  }
  // Attachez l'événement pour afficher le loader lorsque la page commence à se charger
  window.addEventListener('load', hideLoader);
  // Attachez l'événement pour masquer le loader lorsque la page a terminé de se charger
  window.addEventListener('beforeunload', showLoader);
  