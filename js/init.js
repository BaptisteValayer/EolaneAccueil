function setCookie(sName, sValue) {
  var today = new Date(), expires = new Date();
  expires.setTime(today.getTime() + (365*24*60*60*1000));
  document.cookie = sName + "=" + encodeURIComponent(sValue) + ";expires=" + expires.toGMTString();
}

$.getJSON("init\\init.php",function(data){
  setCookie("ExtractionOF",data[0]['path']);
  setCookie("IprValide",data[1]['path']);
  setCookie("IprAutorise",data[2]['path']);
})
