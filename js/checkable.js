 $(function unclickRadio() {
     $('input[type=radio').click(function () {
         if(document.getElementById('carte-credit').checked) {
    } else if(document.getElementById('cash').checked) {
    } else {
      alert ("Vous devez faire un choix");
      return false;
    }
     });
 });