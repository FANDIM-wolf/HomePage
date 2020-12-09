var OBJECT = {
		name:"Fedor",
		age:32,
        show:function(){
        	document.write("OBJECT"+":name"+this.name+"<br>");
        	document.write("OBJECT"+":age"+this.age+"<br>");
        }
     
	}
    OBJECT.age++;
	OBJECT.show();