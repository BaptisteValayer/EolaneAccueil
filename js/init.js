function setCookie(sName, sValue) {
  var today = new Date(), expires = new Date();
  expires.setTime(today.getTime() + (365*24*60*60*1000));
  document.cookie = sName + "=" + encodeURIComponent(sValue) + ";expires=" + expires.toGMTString();
}

$.getJSON("init\\init.php",function(data){
  for (path of data){
    if(path['nom']!=null) {
      setCookie(path['nom'],path['path'])
    }
  }
})
