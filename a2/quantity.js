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

function submitCheck() {
  var elem = document.getElementById('invalidwarning');
  if (document.forms["order"]["qty"].value < 1)
  {
    elem.style.visibility = 'visible';
    return false;
  }
}
