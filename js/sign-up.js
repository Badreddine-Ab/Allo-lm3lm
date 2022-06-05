const form = document.getElementById('form');
const username = document.getElementById('name-319a');
const email = document.getElementById('email-319a');
const address = document.getElementById('address-806e');
const phone = document.getElementById('phone-f871');

const password = document.getElementById('password');
const password2 = document.getElementById('password2');
let validationSuccess = true;




form.addEventListener('submit', (e)=>{
    if (!checkInputs()){
        e.preventDefault()
    }
    // else (checkInputs()){
    // }
    })
    
    function checkInputs(){
        // get values from the inputs
        
    
        const usernameValue = username.value.trim();
        const emailValue = email.value.trim();
        const adressValue = address.value.trim();
        const passwordValue = password.value.trim();
        const password2Value = password2.value.trim();
        const phoneValue = phone.value.trim();
        
        
    
        if(usernameValue === ''){-
            // add error class
            setErrorFor(username, 'Username cannot be blank');
        } else {
            validationSuccess = true;
            
            SetSuccessFor(username);
        } 
    
        if(emailValue === ''){
            setErrorFor(email, 'Email cannot be blank');
        } else if (!isEmail(emailValue)){
            setErrorFor(email, 'Email is not vlaid');
        } else {
            SetSuccessFor(email);
        }
    
        if(passwordValue === ''){
            setErrorFor(password, 'password cannot be blank');
        }else if(!isPassword(passwordValue) ) {
            setErrorFor(password, 'Password not valid')
        } else {
            SetSuccessFor(password);
        } 
    
        if(password2Value === ''){
            setErrorFor(password2, 'password cannot be blank');
        }else if(passwordValue !== password2Value ) {
            setErrorFor(password2, 'passwords does not match')
        } else {
            SetSuccessFor(password2);
        } 
    
        if(phoneValue === ''){
            setErrorFor(phone, 'phone cannot be blank');
        } else if (!isPhone(phoneValue)){
            setErrorFor(phone, 'phone is not vlaid');
        } else {
            SetSuccessFor(phone);
        }
    
        if(adressValue === ''){
            setErrorFor(address,'adress cannot be blank');
        // }else if (roleValue !== 'admin' || roleValue !== 'teacher' || roleValue !== 'student'){
        //     setErrorFor(role, 'please chose a valid role (teacher/student/admin)');
        }else {
            SetSuccessFor(address);
        }
       
    
        // show a success message
        return validationSuccess
    }
    
    
    function setErrorFor(input, message) {
        validationSuccess = false ;
        const formControl = input.parentElement; // /form-control
        const small = formControl.querySelector('small');
        // add error message inside small
        small.innerText = message ;
        small.style.visibility = "visible";
    // add error class
    
    }
    
    function SetSuccessFor(input){
        const formControl = input.parentElement;
        const small = formControl.querySelector('small');
        // add error message inside small
        
        small.style.visibility = "hidden";
    }
    
    function isEmail(email){
        return  /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
    }
    
    function isPhone(phone){
        return /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/.test(phone); // +XXX XXX XXX XXX.XXX.XXX XXX XXX XXX XXX XXXXXXXXXXXXXXX
        //
    }
    
    function isPassword(password){
        return /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/.test(password)
    }