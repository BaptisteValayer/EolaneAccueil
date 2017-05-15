function Bouton() {
  this.boutons = [];
  var self = this;

  this.init = function(user) {
    $.getJSON("Classes\\UpdateBtnTab.php",function(data){
      self.boutons = data;
      if(user == "admin" ) { self.showAdmin(); }
      else { self.showUsers(); }
    });
  }

  this.showAdmin = function() {
    BtnListBody = $("#listBtnBody");
    BtnListBody.empty();
      for (btn of this.boutons) {
      tr=$('<tr>');
      $('<td>').text(btn['id'])
               .css('visibility', "hidden")
               .appendTo(tr);
      $('<td>').text(btn['legende'])
               .appendTo(tr);
      $('<td>').text(btn['nomfichier'])
               .appendTo(tr);
      $('<td>').text(btn['url'])
               .appendTo(tr);
      $('<td>').append($('<span>').addClass("glyphicon glyphicon-trash")
                                  .click(function(){self.delete($(this).parent().parent())})
                )
               .appendTo(tr);
      tr.appendTo(BtnListBody);
    }
  }

  this.showUsers = function() {
    for (btn of this.boutons) {
      a = $('<a>').attr("href",btn['url']);
      figcaption = $('<figcaption>').text(btn['legende']);
      img = $('<img>').attr("src","img/"+btn['nomfichier']).attr("id","logo");
      $("<figure>").attr("id","figureimg").append(img).append(figcaption).appendTo(a);
      a.appendTo(".starter-template");
    }
  }

  this.delete = function(item) {
    idrow = item.children().first().text();
    $.post("Classes\\DeleteBtn.php?id="+idrow).done(function(data) {
  		alert("information supprimé");
      $("#TrinfoBoxDom").empty();
      self.init("admin");
  	});
  }
}
