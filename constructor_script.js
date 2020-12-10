// create constructor 
    function Fellow(name,age){
    	this.name = name;
    	this.age = age;
    	this.show=function(){
    		document.write(":name"+this.name+"<br>");
        	document.write("age"+this.age+"<br>");
        
    	}
    }
  var object_George= new Fellow("George",45);
  object_George.show();