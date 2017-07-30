(function(){
  function antiSpam(){
    var elements = document.getElementsByName("antispam");

    for(var i=0;i < elements.length; i++){
      var el = elements[i];

      if (el) {
        if (isNaN(el.value) == true) {
          el.value = 0;
        } else {
          el.value = parseInt(el.value) + 1;
        }
      }
    }

    setTimeout(function(){ antiSpam(); }, 1000);
  }

  antiSpam();
})()
