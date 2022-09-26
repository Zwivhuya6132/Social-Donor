let Fname = document.getElementById('firstName');
let Lname = document.getElementById('lastName');
let IdNumber = document.getElementById('idNumber');
let Day = document.getElementById('day');
let Month = document.getElementById('month');
let Year = document.getElementById('year');
let Gender = document.getElementById('gender');
let Race = document.getElementById('race');
let BloodType = document.getElementById('bloodType');
let StreetAdd = document.getElementById('streetAdd');
let City = document.getElementById('city');
let Town = document.getElementById('town');
let PostalCode = document.getElementById('postalCode');
let Email = document.getElementById('email');
let CEmail = document.getElementById('cEmail');
let password = document.getElementById('password');
let CPassword = document.getElementById('cPassword');
let toggleBtn = document.getElementById('toggleBtn');
let lowerCase = document.getElementById('lower');
let upperCase = document.getElementById('upper');
let digit = document.getElementById('number');
let specialChar = document.getElementById('special');
let minLength = document.getElementById('length');
let phpDataBase = "";
let errorMess = "This field is required *";




function validateInput(){
  //check if First Name is empty
  if(Fname.value.trim()===""){
    onError(Fname,errorMess);
  }else{
    onSuccess(Fname);
  }

  //check if last Name is empty
  if(Lname.value.trim()===""){
    onError(Lname,errorMess);
  }else{
    onSuccess(Lname);
  }

  //check if ID Number is empty
  if(IdNumber.value.trim()===""){
    onError(IdNumber,errorMess);
  }else if(!isValidId(IdNumber.value.trim())){
    onError(IdNumber,'Please enter a valid SA ID number');
  }else{
    onSuccess(IdNumber);
  }

  //check if day is selected
  if (Day.value==""){
    onError(Day,errorMess);
    Day.style.border= "2px solid rgb(228, 28, 22)";
  }else{
    onSuccess(Day);
    Day.style.border= "2px solid black";
  }

    //check if month is selected
    if (Month.value==""){
      onError(Month,errorMess);
      Month.style.border= "2px solid rgb(228, 28, 22)";
    }else{
      onSuccess(Month);
      Month.style.border= "2px solid black";
    }

  //check if Year is selected
  if (Year.value==""){
    onError(Year,errorMess);
    Year.style.border= "2px solid rgb(228, 28, 22)";
  }else{
    onSuccess(Year);
    Year.style.border= "2px solid black";
  }

    //check if Gender is selected
    if (Gender.value==""){
      onError(Gender,errorMess);
      Gender.style.border= "2px solid rgb(228, 28, 22)";
    }else{
      onSuccess(Gender);
      Gender.style.border= "2px solid black";
    }

      //check if Race is selected
  if (Race.value==""){
    onError(Race,errorMess);
    Race.style.border= "2px solid rgb(228, 28, 22) ";
  }else{
    onSuccess(Race);
    Race.style.border= "2px solid black";
  }

    // check if Blood Type is selected
    if (BloodType.value==""){
      onError(BloodType,errorMess);
      BloodType.style.border= "2px solid rgb(228, 28, 22)";
    }else{
      onSuccess(BloodType);
      BloodType.style.border= "2px solid black";
    }

  //check if Street Address is empty
  if(StreetAdd.value.trim()===""){
    onError(StreetAdd,errorMess);
  }else{
    onSuccess(StreetAdd);
  }

  //check if City is empty
  if(City.value.trim()===""){
    onError(City,errorMess);
  }else{
    onSuccess(City);
  }

  //check if Town is empty
  if(Town.value.trim()===""){
    onError(Town,errorMess);
  }else{
    onSuccess(Town);
  }

  //check if Postal Code is empty
  if(PostalCode.value.trim()===""){
    onError(PostalCode,errorMess);
  }else{
    onSuccess(PostalCode);
  }

  //check if Email is empty
  if(Email.value.trim()===""){
    onError(Email,errorMess);

  }else{
    onSuccess(Email);
  }

  //check if Confirm Email is empty
  if(CEmail.value.trim()===""){
    onError(CEmail,errorMess);

  }else if(Email.value.trim()!==CEmail.value.trim()){
    onError(CEmail,"Email do not match");
  }else{
    onSuccess(CEmail);
  }

  //check if password is empty
  if(password.value.trim()===""){
    onError(password,errorMess);

  } else{
    onSuccess(password);
  }

    //check if confirm password match with password
    if(CPassword.value.trim()===""){
      onError(CPassword,errorMess);
    }else if(password.value.trim()!==CPassword.value.trim()){
      onError(CPassword,"Password do not match")
    }else{
      onSuccess(CPassword);
    }
}

// document.getElementById('submit')
// .addEventListener('click',(event)=>{
// event.preventDefault();
// validateInput();

// });

// if ( window.history.replaceState ) {
//   window.history.replaceState( null, null, window.location.href );
// }


function onSuccess(input){
  let parent = input.parentElement;
  let messageEle = parent.querySelector('small');
  messageEle.style.visibility = "hidden";
  messageEle.innerText ="";
  parent.classList.remove('error')
  parent.classList.add('success');
}
function onError(input,message){
  let parent = input.parentElement;
  let messageEle = parent.querySelector('small');
  messageEle.style.visibility = "visible";
  messageEle.innerText = message;
  parent.classList.add('error')
  parent.classList.remove('success');

}

function isValidId(IdNumber){
  return /^(((\d{2}((0[13578]|1[02])(0[1-9]|[12]\d|3[01])|(0[13456789]|1[012])(0[1-9]|[12]\d|30)|02(0[1-9]|1\d|2[0-8])))|([02468][048]|[13579][26])0229))(( |-)(\d{4})( |-)(\d{3})|(\d{7}))/.test(IdNumber);
}

function isValidEmail(email){
  return (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email));
}

function checkPassword(data){
  //Java Script regularexpression pattern
  const lower = new RegExp('(?=.*[a-z])');
  const upper = new RegExp('(?=.*[A-Z])');
  const number = new RegExp('(?=.*[0-9])');
  const special = new RegExp('(?=.*[!@#\$%\^&\*])');
  const length = new RegExp('(?=.{8,})');

  //Lowercase Validation check
  if (lower.test(data)){
    lowerCase.classList.add('valid');
  }else{
    lowerCase.classList.remove('valid');
  }

  //uppercase Validation check
  if (upper.test(data)){
    upperCase.classList.add('valid');
  }else{
    upperCase.classList.remove('valid');
  }

  //number Validation check
  if (number.test(data)){
    digit.classList.add('valid');
  }else{
    digit.classList.remove('valid');
  }

  //Special Character Validation check
  if (special.test(data)){
    specialChar.classList.add('valid');
  }else{
    specialChar.classList.remove('valid');
  }

  //Length Validation check
  if (length.test(data)){
    minLength.classList.add('valid');
  }else{
    minLength.classList.remove('valid');
  }
        
  
};

//Show Hide Password
toggleBtn.onclick = function(){
  
  if (password.type === 'password'){
    password.setAttribute('type', 'text');
    toggleBtn.classList.add('hide');
  } else{
    password.setAttribute('type', 'password');
    toggleBtn.classList.remove('hide');
  }
};
