function timer() {
  this.date;
  this.heures;
  this.minutes;

  this.init = function() {
    this.date = new Date();
    this.heures = this.date.getHours();
    this.minutes = this.date.getMinutes()
  }

  this.affiche = function() {
    TdHeure = $("#dateHeure > tbody").children().first().children().first();
    TdHeure.empty();
    if(this.minutes<10) {
      TdHeure.text(this.heures+"h0"+this.minutes);
    }
    else {
      TdHeure.text(this.heures+"h"+this.minutes);
    }
    this.update();
  };

  this.update = function() {
    if((this.minutes+1) == 60) {
      this.minutes = 0;
      this.heures += 1;
    }
    else {
      this.minutes += 1;
    }
  }
}
