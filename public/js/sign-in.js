const form = document.getElementById('form');

const email = document.getElementById('email-319a');


const password = document.getElementById('password');
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
        
    
        const emailValue = email.value.trim();
        const passwordValue = password.value.trim();
        
    
    
    
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
    
    
    
       
    
        // show a success message
        return validationSuccess
    }
    
    
    
    function setErrorFor(input, message) {
        validationSuccess = false ;
        const formControl = input.parentElement; // /form-control
        const small = formControl.querySelector('small');
        // add error message inside small
        small.style.visibility = "visible";
        small.innerText = message ;
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
  
    
    function isPassword(password){
        return /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/.test(password)
    }