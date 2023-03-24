var u_name =document.querySelector('#name')
var email = document.querySelector('#email')
var phone = document.querySelector('#phone')
var user_name = document.querySelector('#user_name')

var userName = document.querySelector('#hidden').value

var user = localStorage.getItem(userName);
var userDetails = JSON.parse(user);

u_name.innerHTML =userDetails.name;
email.innerHTML =userDetails.email
user_name.innerHTML=userDetails.user_name
phone.innerHTML =userDetails.phone