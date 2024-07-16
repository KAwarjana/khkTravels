function sendmassage() {

    var f = new FormData();
    f.append("fname", document.getElementById("fname").value);
    f.append("lname", document.getElementById("lname").value);
    f.append("email", document.getElementById("email").value);
    f.append("mobile", document.getElementById("mobile").value);
    f.append("message", document.getElementById("message").value);

  


    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            if (r.responseText == "Message Sent successfully") {
                document.getElementById("fname").value = "";
                document.getElementById("lname").value = "";
                document.getElementById("email").value = "";
                document.getElementById("mobile").value = "";
                document.getElementById("message").value = "";
                swal("Message sent", "We'll get back to you soon", "success");


            } else {
                swal("Try Again", r.responseText, "error");
            }

            document.getElementById("btn").disabled = false;
            // document.getElementById("btn").classList.remove("disable");

        }
    }

    r.open("POST", "../mail/sendEmailProcess.php", true);
    r.send(f);
    document.getElementById("btn").disabled = true;
    // document.getElementById("btn").classList.add("disable");


}