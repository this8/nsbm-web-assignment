function validate(){
    // name alert
    if(document.fmCreatingPost.fname.value.length==0){
        window.alert("Please fill the your first name");
    }
    if(document.fmCreatingPost.lname.value.length==0){
        window.alert("Please fill the your last name");
    }

    var a = -1;
    a = document.fmCreatingPost.email.value.indexOf("@");


    // email alert
    var b = document.fmCreatingPost.email.value.lastIndexOf(".");
    if (a == -1) {
        window.alert("Invalid email address. \nEmail address must have '@' sign.");
    }

    if (a < 1 || b - a < 2 || b + 2 >= document.fmCreatingPost.value.length) {
        window.alert("Invalid Email addresss");
    }

    //phone number alert
    if(document.fmCreatingPost.PhoneNumber.value.length==0){
        window.alert("Please enter the Phone number");
    }
    if (isNaN(document.fmCreatingPost.PhoneNumber.value)) {
        window.alert("Please don't enter the letters..");
    }

    // address alert
    if (document.fmCreatingPost.address.value.length < 10) {
        window.alert("Please enter correct address");
    }

    //amount alert
    if(document.fmCreatingPost.rqAmount.value.length<4){
            window.alert("Please fill the required amount number");
        }

    //date alert    
    if(document.fmCreatingPost.date.value.length==0){
           window.alert("Please fill the required date");
       }
}