     // to check full name
     function checkName() {
    let fullName = document.getElementById("name").value;
    if(fullName == "") {
   alert("Error: The name field is Empty.");
    }
    else if(fullName.length > 20) {
        alert("Error: The name field must contain less than 20 characters.");
    }
    else{
        alert("Your name is valid.")
        return true;
    }
}
    

    // to check email
    function checkEmail() {
        // Get the value from the input field
        const emailInput = document.getElementById("email");
        const email = emailInput.value;
      
        // Regular expression for email validation
        const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
      
        // Check if the email matches the regular expression
        if (emailRegex.test(email)) {
          alert("Valid email address");
          return true;
        } else {
          alert("Invalid email address");
        }
      }
      

    // to check password
    
    function checkPassword() {
        // Get the value from the password input field
        const passwordInput = document.getElementById("create");
        const password = passwordInput.value;
      
        // Define a regular expression for password validation
        const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,15}$/;
      
        // Check if the password matches the regular expression
        if (passwordRegex.test(password)) {
          alert("Valid password");
          const a = true;
          return a;
        } else {
          alert("Invalid password. Password must be 8 to 15 characters long and include at least one letter, one digit, and one special character (@, $, !, %, *, ?, or &).");
        }
      }
      

    // to check confirm password
    function checkConfirmPassword() {
        if (document.getElementById('create').value ==
            document.getElementById('confirm').value) {
            alert("Password Matched");
            return true;
        }
        else if(document.getElementById('confirm').value == ""){
            alert("Error: The confirm password field is Empty.");
        }
        else{
            alert("Error: The password and confirm password fields must match.");
        }
    }


    function checkAll(){
      
    if(checkName() && checkEmail() && checkPassword() && checkConfirmPassword() == true){
        alert("Registration Successful");
        // window.location.href = "login.php";
        return true;
    }
}
