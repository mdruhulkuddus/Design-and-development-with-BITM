
function checkFirstName(){
    var firstNameValue = $('#fname').val();
    var regExp = /^[a-zA-Z-\.]{2,25}$/; // small, capital and range 2 to 25 are allowed otherwise false
    if(regExp.test(firstNameValue))
    {
        $('#firstNameError').text(' ');
        return true;
    }
    else{
        $('#firstNameError').text('First Name should be 2 to 25 character');
        return false;
    }
}
function checkLastName(){
    var regExp = /^[a-zA-Z-\.]{2,25}$/; // small, capital and range 2 to 25 are allowed otherwise false
    var lastNameValue = $('#lname').val();
    if(regExp.test(lastNameValue)){
        $('#lastNameError').text(' ');
        return true;
    }
    else{
        $('#lastNameError').text('Last Name should be 3 to 23 character');
        return false;
    }
}
function checkEmail(){
    var emailValue = $('#email').val();
    if(emailValue.length > 0){
        $('#emailError').text(' ');
        return true;
    }
    else{
        $('#emailError').text('Fill up email address field');
        return false;
    }
}
function checkPassword(){
    var passwordValue = $('#password').val();
    if(passwordValue.length > 6 ){
        $('#passwordError').text(' ');
        return true;
    }
    else{
        $('#passwordError').text('Password should be 6 up character');
        return false;
    }
}
function checkConfirmPassword(){
    var confirmPasswordValue = $('#confirmPassword').val();
    var passwordValue = $('#password').val();
    if(confirmPasswordValue ==  passwordValue){
        $('#ConfirmEmailError').text(' ');
        return true;
    }
    else{
        $('#ConfirmEmailError').text('Password should be same');
        return false;
    }
}


$('#fname').keyup(function(){
    checkFirstName();
});

$('#lname').keyup(function(){
    checkLastName();
});

$('#email').keyup(function(){
    checkEmail();
});
$('#password').keyup(function(){
    checkPassword();
});
$('#confirmPassword').keyup(function(){
    checkConfirmPassword();
});



$('#registerForm').submit(function(){

    if(checkFirstName() == true && checkLastName() == true && checkEmail() == true && checkPassword() == true && checkConfirmPassword() == true){
        return true;
    }
    else
    return false;
});