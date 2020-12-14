 function main(){
         var Prize = 0;
         Winner_Name = document.getElementById('Winner');
         Winner_Prize = document.getElementById('Winner_Prize');   
         bet = document.getElementById('inp_1').value;
         bet = bet.toString();
         max = 700;
         min = 100;
         random_number_for_block1 = min + Math.floor((max - min) * Math.random()) ;  
         random_number_for_block1 = random_number_for_block1.toString();
         random_number_for_block2 = min + Math.floor((max - min) * Math.random()) ;  
         random_number_for_block2 = random_number_for_block2.toString();
         random_number_for_block3 = min + Math.floor((max - min) * Math.random()) ;  
         random_number_for_block3 = random_number_for_block3.toString();
          
         var winner; //variable to win
         if (random_number_for_block1 > random_number_for_block2 && random_number_for_block3){
            winner = "first";
         }
         if(random_number_for_block2 > random_number_for_block3 && random_number_for_block1){
            winner = "second";
         } 
         if (random_number_for_block3 > random_number_for_block2 && random_number_for_block1){
            winner = "third";
         }


         document.getElementById("block").style.width = random_number_for_block1+"px";
         document.getElementById("block2").style.width = random_number_for_block2+"px";
         document.getElementById("block3").style.width = random_number_for_block3+"px";
         Winner_Name.innerHTML=winner;

         if(bet==winner){
            Prize=Prize+1000;
            
            Winner_Prize.innerHTML=Prize;
         }  
        
    }