var RobotBet = {
   get_bet:function(){
   	bet = document.getElementById('inp_1').value;
    bet = bet.toString();
   }
   calculate_width:function(){
   	 max = 400;
     min = 100;
     random_number_for_block1 = min + Math.floor((max - min) * Math.random()) ;  
     random_number_for_block1 = random_number_for_block1.toString();
     random_number_for_block2 = min + Math.floor((max - min) * Math.random()) ;  
     random_number_for_block2 = random_number_for_block2.toString();
     random_number_for_block3 = min + Math.floor((max - min) * Math.random()) ;  
     random_number_for_block3 = random_number_for_block3.toString();
   }
   define_winner:function(){
   	var winner; //variable to win
         if (this.random_number_for_block1 > this.random_number_for_block2 && this.random_number_for_block3){
         	winner = "first";
         }
         if(this.random_number_for_block2 > this.random_number_for_block3 && this.random_number_for_block1){
         	winner = "second";
         } 
         if (this.random_number_for_block3 > this.random_number_for_block2 && this.random_number_for_block1){
         	winner = "third";
         }
   } 
   draw_blocks:function(){
   	     document.getElementById("block").style.width = this.random_number_for_block1+"px";
         document.getElementById("block2").style.width = this.random_number_for_block2+"px";
         document.getElementById("block3").style.width = this.random_number_for_block3+"px";
         if (this.bet == this.winner){
         	document.write("<h3>"+"You win"+this.winner+"</h3>");
         }
   }
}

function main(){
	RobotBet.get_bet();
    RobotBet.calculate_width();
    RobotBet.define_winner();
    RobotBet.draw_blocks();
}
