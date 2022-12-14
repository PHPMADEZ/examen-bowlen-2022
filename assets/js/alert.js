//constantly check if an input amount is higher than 300, if so show an alert

 const amount = document.getElementById('amount');


amount.addEventListener('input', () => {
  if (amount.value > 300) {
    alert('Maximale nummer is 300');
    //reset input field
    amount.value = '';
  } 
});

// alert the user that the button has been pressed
const button = document.getElementById('button');
button.addEventListener('click', () => {
  alert('Succesvol toegevoegd!');
});


