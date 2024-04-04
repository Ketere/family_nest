function sendEmail() {
    Email.send({
        Host: "smtp.gmail.com",
        Username: "keterel8@gmail.com",
        Password: "Namachanja-1",
        To: 'leonardketere@yahoo.com',
        From: "keterel8@gmail.com",
        Subject: "Website Feedback",
        Body: document.getElementById('emailBody').value
    }).then(
        message => alert("mail sent successfully")
    );
}
