class Savings {

  constructor(initialBalance, monthlyInput, lengthInMonths, goal, canvasId) {
     this.initial = initialBalance;
     this.monthly = monthlyInput;
     this.months = lengthInMonths;
     this.goal = goal;
     this.canvas = document.getElementById(canvasId);
     this.ctx = this.canvas.getContext("2d");
  }

  get totalSaved() {
     return this.calcTotalSaved();
  }

  get feedback() {
     if (this.calcTotalSaved() === this.goal) {
        return "Du har nådd sparemålet!";
     } else if (this.calcTotalSaved() > this.goal) {
        return "Du har overgått sparemålet!";
     } else {
        return "Bra jobba - du ligger nå an til å spare " + this.percentageOfGoal() + "% av målet. Fortsett slik!";
     }
  }

  get graph() {
      this.drawPercentageInCanvas();
      this.drawLinesInCanvas();
      this.drawCurrentProgressLine();
 }

  percentageOfGoal() {
     return Math.round(100 * (this.totalSaved / this.goal));
 }

  calcTotalSaved() {
     return this.monthly * this.months + this.initial;
  }

  initialBalanceFloat() {
     return this.initial / this.goal;
  }

  monthlyInputFloat() {
     return this.monthly * this.months / this.goal;
  }

  currentValueFloat() {
     return this.initialBalanceFloat() + this.monthlyInputFloat();
  }

  drawPercentageInCanvas() {
   const height = (this.canvas.height) / 10;
   for (let i = 0, n = 11; i <= 10; i++) {
      n--;
      let graphPercentage = this.canvas.getContext("2d");
      graphPercentage.fillText(n * 10 + "%", this.canvas.width - 30, height * i);
      graphPercentage.fillStyle = "blue";
    }
 }

  drawLinesInCanvas() {
   const height = (this.canvas.height) / 10;
   for (let i = 0, n = 11; i <= 10; i++) {
      let graphLine = this.canvas.getContext("2d");
      graphLine.beginPath();
      graphLine.moveTo(this.canvas.width, height * i);
      graphLine.lineTo(0, height * i);
      graphLine.strokeStyle = "rgba(0,0,0,.125)";
      graphLine.lineWidth = 1;
      graphLine.stroke();
      graphLine.closePath();
    }
}

  drawCurrentProgressLine() {
   this.ctx.beginPath();
   this.ctx.moveTo(0, this.canvas.height);
   this.ctx.lineTo(this.canvas.width * this.currentValueFloat(), this.canvas.height * (1 - this.currentValueFloat()));
   this.ctx.strokeStyle = "green";
   this.ctx.lineWidth = 5;
   this.ctx.stroke();
   this.ctx.closePath();
}

}

const savings = new Savings(50000,2750,50,900000,"ola-graph");
savings.graph;

document.getElementById("savings-initial").innerHTML = savings.initial;
document.getElementById("savings-monthly").innerHTML = savings.monthly;
document.getElementById("savings-length-months").innerHTML = savings.months;
document.getElementById("savings-goal").innerHTML = savings.goal;
document.getElementById("savings-total").innerHTML = savings.totalSaved;
document.getElementById("savings-feedback").innerHTML = savings.feedback;
