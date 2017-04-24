function InfoBox() {
  this.messages=[];

  this.init = function() {
    $.get("Classes\\UpdateMessagetab.php",function(data){
      //this.messages = data;
      console.log(data);
    });
  };

  this.show = function() {
    infoBoxDom =$("#InfoBox");
    trash = $('<span>').addClass("glyphicon glyphicon-trash")
                       .click(function(){deleteObject();});

    for (message of this.messages) {
      tr=('<tr>');
      $('<td>').text(message['id'])
               .css('visibility', "hidden")
               .appendTo(tr);
      $('<td>').text(message['message'])
               .appendTo(tr);
      $('<td>').text(message['DateFin'])
               .appendTo(tr);
      $('<td>').append(trash)
               .appendTo(tr);
      tr.appendTo(infoBoxDom);
    }
  };
}
