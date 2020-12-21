Vue.component('todo-item', {
  props: ['todo'], // income element
  template:  '<li >{{ todo.text }}</li>'
})
  
var app = new Vue({
  el: '#app',
   data: {
    groceryList: [
      { id: 0, text: 'Овощи' },
      { id: 1, text: 'Сыр' },
      { id: 2, text: 'Что там ещё люди едят?' }
    ],
    photoList:[
     {id:0,link:"ph.png",text:"Python"},
     {id:1,link:"js.png", text:"JavaScript"},
     {id:2,link:"java.png",text:"Java"}
    ]
  }
  
})