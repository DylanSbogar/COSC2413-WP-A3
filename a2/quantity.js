var quantityvalue = 0;
function incrementValue() {
    document.getElementById('quantitynumber').value = ++quantityvalue;
}

function decrementValue() {
  if (document.getElementById('quantitynumber').value > 0)
  {
    document.getElementById('quantitynumber').value = --quantityvalue;
  }
}
