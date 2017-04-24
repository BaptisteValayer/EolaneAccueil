function InfoBox() {
  this.messages = [];
  var self = this;

  this.init = function() {
    $.getJSON("Classes\\UpdateMessagetab.php",function(data){
      self.messages = data;
      self.showAdmin();
    });
  }

  this.showAdmin = function() {
    infoBoxDom =$("#InfoBox");
    $("#TrinfoBoxDom").empty();
      for (message of this.messages) {
      tr=$('<tr>');
      $('<td>').text(message['id'])
               .css('visibility', "hidden")
               .appendTo(tr);
      $('<td>').text(message['message'])
               .appendTo(tr);
      date = message['dateFin'].split("-").reverse();
      if(date[2]=="9999"){
        $('<td>').text("Toujours valable")
               .appendTo(tr);
      }
      else {
        $('<td>').text(date[0]+"-"+date[1]+"-"+date[2])
               .appendTo(tr);
      }
      $('<td>').append($('<span>').addClass("glyphicon glyphicon-trash")
                                  .click(function(){self.delete($(this).parent().parent())})
                )
               .appendTo(tr);

      tr.appendTo(infoBoxDom);
    }
  }

  this.showUsers = function() {
    infoBoxDom =$("#InfoBox");
      for (message of this.messages) {
        tr=$('<tr>');
      $('<td>').text(message['message'])
               .appendTo(tr);
      date = message['dateFin'].split("-").reverse();
      if(date[2]=="9999"){
        $('<td>').text("Toujours valable")
               .appendTo(tr);
      }
      else {
        $('<td>').text(date[0]+"-"+date[1]+"-"+date[2])
               .appendTo(tr);
      }
      tr.appendTo(infoBoxDom);
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
