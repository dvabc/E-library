function validateForm() {
  const emailRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  if (!emailRegex.test(email)) {
    alert('Please enter a valid email address.');
    return false;
  }

  if (password.length < 8) {
    alert('Please enter a password that is at least 8 characters long.');
    return false;
  }

 
  if (!/[A-Z]/.test(password)) {
    alert('Password must contain at least one uppercase letter.');
    return false;
  }


  if (!/[a-z]/.test(password)) {
    alert('Password must contain at least one lowercase letter.');
    return false;
  }

 
  if (!/\d/.test(password)) {
    alert('Password must contain at least one digit.');
    return false;
  }

  
  if (!/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
    alert('Password must contain at least one special character.');
    return false;
  }

 
  return true;
}
