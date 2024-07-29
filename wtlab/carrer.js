const username=document.getElementById("username");
const number=document.getElementById("number");
const gen =document.querySelectorAll('#gen');
const form=document.querySelector("form");
const email =document.getElementById('email');
const qualification=document.querySelector('#qualification');

form.addEventListener('submit',event=>{
    event.preventDefault();
    validate();
})
function validate()
{
    const pattern=/^[a-zA-Z\s]+$/;
    var value=username.value;
    valid_name="true";
    if(value=='')
    {
        setError(username,'enter name');
        valid_name="false";
    }
    else if(value.length<5)
    {
        setError(username,'length is less');
        valid_name="false";

    }
    else
    {
        setSuccess(username)
        valid_name="true";
    }
const pattern2=/^(0|91)?[6-9][0-9]{9}/;
let valid_number=true;
if(number.value=="")
{
    setError(number,"number is required");
    valid_id=false;
}
else if (!pattern2.test(number.value))
{
    setError(number,"pattern is not matched");
    valid_number=false;
}
else{
    setSuccess(number);
    valid_number=true;
}
let radio_valid=true;
for (i=0;i<gen.length;i++)
{
    if(gen[i].checked){
        break;
    }

}
if(i==gen.length){
    setError(gen[0],"select the option");
    radio_valid=false;
}
else
{
    setSuccess(gen[0]);
    radio_valid=true;

}
let valid_email=false;
if (email.value=="")
{
 setError(email,"please enter email")
  valid_email=false;
}
else
{
 setSuccess(email);
 valid_email="true";

}

let c=true;
if(qualification.value=="choose")
{
    setError(qualification,"please select option ");
    c=false;

}
else{
    setSuccess(qualification);
    c=true;

}


if(valid_name && valid_number  && radio_valid && valid_email  && qualification){
    const s=Object.getPrototypeOf(form).submit;
    s.call(form);
}


}

function setError(input,msg){
    let parent=input.parentElement;
    let small=parent.querySelector('small');
    small.innerText=msg;
    small.style.color="red";
}
function setSuccess(input){
    let parent=input.parentElement;
    let small=parent.querySelector('small');
    small.style.visibility="hidden";
}
