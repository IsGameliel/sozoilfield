<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
  function sendEmail(){
      Email.send({
          Host : "smtp.elasticemail.com",
          Username : "username",
          Password : "password",
          To : 'contact@Sozoilfield.com',
          From : document.getElementsById("email").value,
          Subject : document.getElementById("subject").value,
          Body : "Name: " + document.getElementById("name").value 
                  + "<br> Message: " + document.getElementById("message").value
      }).then(
          message => alert("request as been sent succesfully")
      );
  }
</script>