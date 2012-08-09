$(function(){
var list = document.getElementById("list");
// SetItem
$("#list").keypress(function(){
  localStorage.setItem(user, this.innerHTML);
});

// GetItem
  if(localStorage.getItem(user)){
    list.innerHTML = localStorage.getItem(user);
     }
});