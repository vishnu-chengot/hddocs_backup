function validate() {
  var phone = document.getElementById('phone').value;
  var email = document.getElementById('emaildata').value;
  var first_name = document.getElementById('first_name').value;
  var second_name = document.getElementById('second_name').value;
  var phone_error = document.getElementById('phone_error');
  var email_error = document.getElementById('email_error');
  var first_name_error = document.getElementById('first_name_error');
  var second_name_error = document.getElementById('second_name_error');
  var main_error = document.getElementById('main_error');

  var isValid = true;

  if (first_name === '') {
    first_name_error.innerHTML = 'Please enter your first name';
    first_name_error.style.color = 'red';
    isValid = false;
  } else if (first_name.length < 4) {
    first_name_error.innerHTML = 'First name should have at least 2 characters';
    first_name_error.style.color = 'red';
    isValid = false;
  } else {
    first_name_error.innerHTML = '';
  }

  // Check second name
  if (second_name === '') {
    second_name_error.innerHTML = 'Please enter your second name';
    second_name_error.style.color = 'red';
    isValid = false;
  } else if (second_name.length < 2) {
    second_name_error.innerHTML = 'Second name should have at least 2 characters';
    second_name_error.style.color = 'red';
    isValid = false;
  } else {
    second_name_error.innerHTML = '';
  }


  // Check phone number
  if (phone === '') {
    phone_error.innerHTML = 'Please enter your phone number';
    phone_error.style.color = 'red';
    isValid = false;
  } else if (!/^\d{10}$/.test(phone)) {
    phone_error.innerHTML = 'Phone number should be 10 digits';
    phone_error.style.color = 'red';
    isValid = false;
  } else {
    phone_error.innerHTML = '';
  }

  // Check email
  if (email === '') {
    email_error.innerHTML = 'Please fill in your email';
    email_error.style.color = 'red';
    isValid = false;
  } else if (!/^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/.test(email)) {
    email_error.innerHTML = 'Email should be in a valid format';
    email_error.style.color = 'red';
    isValid = false;
  } else {
    email_error.innerHTML = '';
  }

  if (isValid) {
    document.getElementById('btn').disabled = false;
  }
  else{
    document.getElementById('btn').disabled = true;
    document.getElementById('Checkbox1').checked=""
  }
}