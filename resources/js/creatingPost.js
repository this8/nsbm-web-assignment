function valid() {
    if (form.category.value==Category) {
      alert("category shoud not be null");
      form.category.focus();
      return false;
    }

    if (form.fname.value=="") {
      alert("First Name shoud not be null");
      form.fname.focus();
      return false;
    }

    if (form.lname.value=="") {
      alert("Last Name shoud not be null");
      form.lname.focus();
      return false;
    }

    if ((isNaN(form.fname.value)==false)||(isNaN(form.lname.value)==false)) {
      alert("Name invalid input");
      form.fname.focus();
      return false;
    }

    if (length(form.PhoneNumber.value)!=10){
      alert("Name invalid input");
      form.PhoneNumber.focus();
      return false;
    }

    if (form.amount.value==""){
      alert("Donation amount cannot be null");
      form.amount.focus();
      return false;
    }

    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(form.email.value))
    {
      return (true)
    }
    else {
        alert("You have entered an invalid email address!");
        return (false);
    }

  }