function InfoBox() {

  this.messages=[];

  this.init = function(messages) {
    $.getJSON("Classes\\UpdateMessagetab.php"),function(data){
      this.messages = data;
    });
  };

  this.show = function() {
    infoBoxDom =$("#InfoBox");

    for (message of this.messages) {
      tr=('<tr>');
      $('<td>'text(message['id'])
               .css('visibility', "hidden")
               .appendTo(tr);
      $('<td>').text(message['message'])
               .appendTo(tr);
      $('<td>').text(message['DateFin'])
               .appendTo(tr);
      $('<td>').append($('<button').attr('type', "button")
                        .addclass("btn btn-default")
                        .click("deleteObject();")
                        .append($('<span>').addclass("glyphicon glyphicon-trash"));)
              .appendTo(tr);
      tr.appendTo(infoBoxDom);
    }
  };
}
