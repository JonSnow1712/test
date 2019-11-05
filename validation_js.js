function OnSubmit() {

    var fname = document.forms['RegForm']["firstname"].value;
    var lname = document.forms['RegForm']["lastname"].value;
    var dob = document.forms['RegForm']["DOB"].value;
    // alert(dob.slice(0, 4));
    var con = document.forms["RegForm"]["contact"].value;
    var em = document.forms["RegForm"]["email"].value;
    var addr = document.forms["RegForm"]["Add_area"].value;
    var pin = document.forms["RegForm"]["Pin"].value;
    var cont = document.forms["RegForm"]["country"].value;
    var de = document.forms["RegForm"]["Dept"].value;

    var pass1 = document.forms["RegForm"]["pass"].value;
    var pass2 = document.forms["RegForm"]["Cpass"].value;

    if (fname == "") {
        // window.alert("Please enter first name !");
        var obj = document.getElementById("alertfname");
        obj.innerHTML = "Please enter Fname"
        obj.focus();

        return false;
    } else {
        var obj = document.getElementById("alertfname");
        obj.innerHTML = ""
    }
    if (lname == "") {
        var obj = document.getElementById("alertlname");
        obj.innerHTML = "Please enter Lastname"
        obj.focus();
        return false;
    } else {
        var obj = document.getElementById("alertlname");
        obj.innerHTML = ""
    }

    if (dob == "") {
        var obj = document.getElementById("alertdob");
        obj.innerHTML = "Please enter date of birth";
        obj.focus();
        return false;
    } else if (dob !== "") {

        var currentYear = new Date().getFullYear();
        if (currentYear - parseInt(dob.slice(0, 4), 10) < 18) {
            var obj = document.getElementById("alertdob");
            obj.innerHTML = "Your age is below 18";
            obj.focus();
            return false;

        }
    }

    if (con.length != 10) {
        var obj = document.getElementById("alertcontact");
        obj.innerHTML = "Please enter valid 10 digit number";
        obj.focus();
        return false;
    }

    if (em == "") {
        var obj = document.getElementById("alertemail");
        obj.innerHTML = "Please enter email";
        obj.focus();
        return false;
    }
    else if (em !== "") {
        if (!(em.includes("@") && em.includes(".", em.indexOf("@")))) {
            var obj = document.getElementById("alertemail");
            obj.innerHTML = "Please enter valid email address";
            obj.focus();
            return false;
        }
    }

    if (addr == "") {
        var obj = document.getElementById("alertaddress");
        obj.innerHTML = "Please enter address";
        obj.focus();
        return false;
    }

    if (pin == "") {
        var obj = document.getElementById("alertpin");
        obj.innerHTML = "Please enter pincode";
        obj.focus();
        return false;
    }

    if (cont == 0) {
        var obj = document.getElementById("alertcountryl");
        obj.innerHTML = "Please select country";
        obj.focus();
        return false;
    }
    if (de == 0) {
        var obj = document.getElementById("alertdept");
        obj.innerHTML = "Please  select dept";
        obj.focus();
        return false;
    }


    if (pass1 == "") {
        var obj = document.getElementById("alertpass");
        obj.innerHTML = "Please enter password";
        obj.focus();
        return false;
    }

    if (pass1 != pass2) {
        var obj = document.getElementById("alertcpass");
        obj.innerHTML = "password does not match";
        obj.focus();
        return false;
    }
    return true;

}