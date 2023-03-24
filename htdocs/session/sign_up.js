var count = 0

function upload() {

  var name = document.getElementById('name').value
  var user_name = document.getElementById('user_name').value
  var email = document.getElementById('emaildata').value
  var password = document.getElementById('password').value
  var phone = document.getElementById('phone').value

 

  var user = {
    user_name:user_name,
    name: name,
    email: email,
    password: password,
    phone: phone
  };

  var userInfo = JSON.stringify(user);
  count = count + 1;
  // createCookie('new',user,2)
  localStorage.setItem(user_name, userInfo)

  if (localStorage.getItem(user_name) !== null) {
    // var myalert = document.getElementById('myalert')
    // myalert.innerHTML ='new record is craeted'
    alert("new record is craeted");
  } else {
    alert("error");
    // myalert.innerHTML = 'error'
  }

  name = ""
  email= ""
  password= ""
  phone= ""
  console.log(count)
}