Vue.component('button-counter', {
  data: function () {
    return {
      count: 0
    }
  },
  template: '<button v-on:click="count++">Счётчик кликов — {{ count }}</button>'
})



Vue.component('todo-item', {
  props: ['todo'], // income element
  template:  '<p>{{ todo.text }}</p><span></span>'
})
  
var app = new Vue({
  el: '#app',
   data: {
   	 visible: false,
   	 date_now:null,
   	 
   	//lists of data 
    groceryList: [
      { id: 0, text: 'Programming' },
      { id: 1, text: 'Observations' },
      { id: 2, text: 'Documentation' }
    ],
    photoList:[
     {id:0,link:"ph.png",text:"Python"},
     {id:1,link:"js.png", text:"JavaScript"},
     {id:2,link:"java.png",text:"Java"}
    ]

    
  },
  methods:{
  	tryme(){
  		this.date_now = Date()
  	}
  }
 
})