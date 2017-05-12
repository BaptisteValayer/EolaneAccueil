function InfoBox() {
  this.boutons = [];
  var self = this;

  this.init = function() {
    $.getJSON("Classes\\UpdateBtnTab.php",function(data){
      self.messages = data;
      self.showAdmin();
    });
  }

  this.showAdmin = function() {
    infoBoxBody = $("#listBtnBody");
    infoBoxBody.empty();
      for (message of this.messages) {
      tr=$('<tr>');
      $('<td>').text(message['id'])
               .css('visibility', "hidden")
               .appendTo(tr);
      $('<td>').text(message['legende'])
               .appendTo(tr);
      $('<td>').text(message['nomfichier'])
               .appendTo(tr);
      $('<td>').append($('<span>').addClass("glyphicon glyphicon-trash")
                                  .click(function(){self.delete($(this).parent().parent())})
                )
               .appendTo(tr);
      tr.appendTo(infoBoxBody);
    }
  }

  this.showUsers = function() {
    for (message of this.messages) {
      a = $('<a>').attr("href",data[i]['url']);
      figcaption = $('<figcaption>').text(data[i]['legende']);
      img = $('<img>').attr("src","img/"+data[i]['nomfichier']).attr("id","logo");
      $("<figure>").attr("id","figureimg").append(img).append(figcaption).appendTo(a);
      a.appendTo("#containere");
    }
  }

  this.delete = function(item) {
    idrow = item.children().first().text();
    $.post("Classes\\deleteRow.php?id="+idrow, {id : "idrow"}).done(function(data) {
  		alert("information supprimé");
      $("#TrinfoBoxDom").empty();
      self.init();
  	});
  }
}
