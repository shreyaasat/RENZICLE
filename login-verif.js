function printError(Id, Msg) {
    document.getElementById(Id).innerHTML = Msg;
}

function validateForm() {
    // var email = document.Form.email.value;
    // var pwd = document.Form.pwd.value;
    var email =document.getElementById("email").value;
    var emailErr=pwdErr=true;   
    var pwd = document.forms['Form']['pwd'];
    if(email == "") {
        printError("emailErr", "Please enter your email address");
         var elem = document.getElementById("email");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
            
     } 
    else {
        
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
            var elem = document.getElementById("email");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
            email.value="";
        } else{
            printError("emailErr", "");
            emailErr = false;
             var elem = document.getElementById("email");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

        }
    }

    if(pwd.value.length < 6) {
        printError("pwdErr", "Please enter a valid password");
        var elem = document.getElementById("pwd");
        
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
            pwd.value="";
    }  else{
        printError("pwdErr", "");
        pwdErr = false;
         var elem = document.getElementById("pwd");
        elem.classList.add("input-1");
        elem.classList.remove("input-2");
        

    }
   
    
    if(( emailErr || pwdErr ) == true) {
       return false;
    } 


}

function myFunction() {
    document.getElementById("container").style.display = "none";
    document.getElementById("forgot").style.display = "block";
  }



function validateform2(){
   
    var email2 = document.getElementById("email2").value;
    
    var emailErr2=true;   
   
    
    if(email2 == "") {
        printError("emailErr2", "Please enter your email address");
         var elem = document.getElementById("email2");
            elem.classList.add("input2");
            elem.classList.remove("input1");
            email2.value="";
    } 
    else {
        
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email2) === false) {
            printError("emailErr2", "Please enter a valid email address");
            var elem = document.getElementById("email2");
            elem.classList.add("input2");
            elem.classList.remove("input1");
            email2.value="";
        } else{
            printError("emailErr2", "");
            emailErr2 = true;
            email2.value="";
             var elem = document.getElementById("email2");
            elem.classList.add("input1");
            elem.classList.remove("input2");
            openpopup();
            
        }
       
    }
    if( emailErr2  == true) {
       
        
        return false;
     } 
    }

   
   
   function openpopup(){
        popup.classList.add("open-popup");
    }

   function closepopup(){
    popup.classList.remove("open-popup");
    document.getElementById("forgot").style.display = "none";
    document.getElementById("container").style.display = "flex";
    

  }


  function enable() {
    document.getElementById("fname").disabled = false;

    }