



// if (userName == userDetails.user_name  && password == userDetails.password){

// }

  const form = document.getElementById('login-form');
  form.addEventListener('submit', function (event) {
    event.preventDefault();
   



var userName = document.getElementById("logindata").value
var password = document.querySelector("#password").value
  // var form = document.getElementById("login-form");
  console.log(userName)
var user = localStorage.getItem(userName);
  var userDetails = JSON.parse(user);
  console.log(userDetails)

var formData = new FormData();

formData.append('input_name', userName);
formData.append('input_password', password);
// formData.append('email', userDetails.email);
formData.append('password', userDetails.password);
formData.append('user_name', userDetails.user_name);

var xml = new XMLHttpRequest();
xml.open('POST', 'login_code.php', true);
xml.onreadystatechange = function () {
  if (xml.readyState == 4 && xml.status == 200) {
    console.log('AJAX request successful');
    document.getElementById('main_error').innerHTML = xml.responseText;
    var check = xml.responseText 
    console.log(check)
    if (check == 'your logined') {
      window.location.href = 'home.php'
    }
    else {
      console.log('error')
    }
   
  }
};
xml.send(formData);

  });

  // document.getElementById('submit-button').addEventListener('click', function () {
  //   document.getElementById('login-form').dispatchEvent(new Event('submit'));
  // });



