let button = document.getElementById("register-button");
let conditions = document.getElementById("conditions-accept-check");
let info = document.getElementById("info-treatment-authorize-check");
if(conditions.checked && info.checked)
    button.disabled=false;                
else
    button.disabled=true;
$("#conditions-accept-check,#info-treatment-authorize-check").on('change', function(){
    if(conditions.checked && info.checked)
        button.disabled=false;                
    else
        button.disabled=true;
});