
function checkName(){
    var nameError = document.getElementById('name-error');
    var name = document.getElementById('namecheck').value;


    if (name.length == 0){
        nameError.innerHTML='Name is required';
        return false;
    }
   if(!name.match(/^[A-Za-z]*\s{1}[A-za-z]*$/)){
        nameError.innerHTML='Write your full name';
        return false;
    }
        nameError.innerHTML='<i class="fa-solid fa-square-check"></i>';
        return true;

    
}

function checkNumber(){
    
    var number = document.getElementById('numbercheck').value;
    var numberError = document.getElementById('number-error');

    if(number.length == 0)
    {
        numberError.innerHTML = "Number is required";
        return false;
    }

    if(number.length !==10){
        numberError.innerHTML= 'Phone number is not right';
        return false;
    }

    if(!number.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/)){
        numberError.innerHTML = 'Phone Number invalid';
        return false;
    }

    numberError.innerHTML = '<i class="fa-solid fa-square-check"></i>';
    return true;



}
function centercheck(){
    var c = document.getElementById('ccheck').value;
    var cError = document.getElementById('c-error');


    if(c.length == 0) {
        cError.innerHTML = 'Please enter your preferences center';
        return false;
    
    }
        cError.innerHTML = '<i class="fa-solid fa-square-check"></i>';
        return true;

}


function checkage(){
    
    var age = document.getElementById('agecheck').value;
    var ageError = document.getElementById('age-error');

    let pattern = /\s/g;
    if(age.length == 0) {
        ageError.innerHTML = 'Please mention the age (__months or years) without space';
        return false;
    }
    if(age.match(pattern) ){
        ageError.innerHTML = 'Please mention the age (__months or __years)';
        return false;
    }

    ageError.innerHTML = '<i class="fa-solid fa-square-check"></i>';
    return true; 

    
}

function checkemail(){
    var emailError = document.getElementById('email-error');
    var email = document.getElementById('emailcheck').value;

    if(email.length == 0){
        emailError.innerHTML = 'Email is required';
        return false;
    }

    if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}\s*$/))
    {
        emailError.innerHTML = 'Email is invalid';
        return false;
    }

    emailError.innerHTML = '<i class="fa-solid fa-square-check"></i>';
    return true;
}

function checkmsg(){
    var messageError = document.getElementById('message-error');
    var message = document.getElementById('msgcheck').value;

    if(message.length == 0 || message.length <= 40){
        messageError.innerHTML = 'Please write your detailed message';
        return false;
    }
    messageError.innerHTML = '<i class="fa-solid fa-square-check"></i>';
    return true;

}

function addresscheck(){
var addressError = document.getElementById('address-error');
var address = document.getElementById('address').value;

if(address.length == 0){
    addressError.innerHTML = 'Please write your address';
        return false;
}
    addressError.innerHTML = '<i class="fa-solid fa-square-check"></i>';
    return true;

}


function cardcheck(){
    var cardError = document.getElementById('card-error');
    var card = document.getElementById('card').value;

    let cardno = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;

    if(card.match(cardno)){
        cardError.innerHTML ='<i class="fa-solid fa-square-check"></i>';
        return true;
    }
        cardError.innerHTML = 'Invalid number';
        return false;

}

function validateform(){
    var submitError = document.getElementById('submit-error');

    if(!checkName() || !checkNumber() || !checkemail() || !checkmsg()){
        submitError.style.display = 'block';
        submitError.innerHTML = 'Please Fill the every questions';
        setTimeout(function(){submitError.style.display ='none';},4000);
        return false;
    }
    window.open('popup.html',"","toolbar=no,status=no,menubar=no,location=middle,scrollbars=no,resizable=no,height=500,width=657"); 
    return true;
    
}


  







