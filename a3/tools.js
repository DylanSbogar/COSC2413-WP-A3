function incrementValue() {
  var quantityvalue = document.getElementById('quantitynumber').value;
    document.getElementById('quantitynumber').value = ++quantityvalue;

    document.getElementById('price').innerHTML = "$" + document.getElementById('quantitynumber').value * document.getElementById('productprice').value;
}

function decrementValue() {
  if (document.getElementById('quantitynumber').value > 0)
  {
    var quantityvalue = document.getElementById('quantitynumber').value;
    document.getElementById('quantitynumber').value = --quantityvalue;

    document.getElementById('price').innerHTML = "$" + document.getElementById('quantitynumber').value * document.getElementById('productprice').value;

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
