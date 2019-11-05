$(document).ready(function () {
    $("#RegForm").validate({

        rules: {
            firstname: {
                required: true,
                minlength: 3
            },
            lastname: {
                required: true,
                minlength: 3
            },
            DOB: {
                required: true,
            },
            contact: {
                required: true,
                maxlength: 10,
                minlength: 6
            },
            email: {
                required: true,
                email: true
            },
            Pin: {
                required: true,
                maxlength: 6,
                minlength: 5
            },
            country: {
                required: true
            },
            Dept: {
                required: true
            },
            pass: {
                required: true,
                minlength: 6
            },
            Cpass: {
                required: true,
                equalTo: "#pass"
            }

        },
        messages: {
            firstname: {
                minlength: "Firstname should be at least 3 characters !"
            },
            lastname: {
                minlength: "Lastname should be at leaast 3 characters !"
            },
            DOB: {
            },
            contact: {
                maxlength: "Contact number cannot exceed 10 digits !",
                minlentgh: "Contact number should at least have 6 digits !"
            },
            email: {
                email: "The email should be in the format: abc@domain.com"
            },
            Pin: {
                maxlength: "Pin number cannot exceed 6 digits !",
                minlentgh: "Pin number should at least have 5 digits !"
            },
            country: {

            },
            Dept: {
            },
            pass: {
                minlength: "Minimum password length is 6"
            },
            Cpass: {
                equalTo: "Password does not match"
            }

        },
        submitHandler: function (form) {
            form.submit();
        }



    }); // RegForm ends
}); // function ends