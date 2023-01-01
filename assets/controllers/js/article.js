file.addEventListener('change', () => {
   // verify if the file is a pdf
   if (file.files[0].type !== 'application/pdf') {
      errorDiv.innerHTML = 'Le fichier doit être un pdf';
      file.value = '';
   } else {
      errorDiv.innerHTML = '';
   }
});

const send = document.getElementById('send');

send.addEventListener('click', (event) => {
   event.preventDefault();
   // verify if the user has role of 2 or 3 else he can't submit an article
   if (userRole !== '2' && userRole !== '3') {
      errorDiv.innerHTML = 'Vous n\'avez pas les droits pour envoyer un article';
   }
   else {
      //send data to the back
      console.log('success');
   }
});