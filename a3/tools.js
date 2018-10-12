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

function toggleDebugMode() {
  var x = document.getElementById("debugScript");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function checkVISA() {
    var x = document.getElementById("test").value;
    var visalogo = document.getElementById("visalogo");
    var re = new RegExp("^4[0-9]{12}(?:[0-9]{3})?$");
    if(re.test(x)) {
      visalogo.style.display = "inline";
      // alert("valid");
    } else {
      visalogo.style.display = "none";
      // alert("invalid");
    }

}
