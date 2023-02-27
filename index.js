let contactBtn = document.getElementById('contactBtn');
contactBtn.addEventListener('click',(e)=> {
    e.preventDefault()
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let number = document.getElementById('number').value;
    let subject = document.getElementById('subject').value;
    let message = document.getElementById('message').value;
    let body = 'name: ' +name + '<br/> email: ' +email + '<br/> number: ' +number +'<br/> subject: ' +subject +'<br/> message: '+message;
    Email.send({
        Host : "smtp.gmail.com",
        // SecureToken : "C973D7AD-F097-4B95-91F4-40ABC5567812",
        Username : "soulsoftinfotech@gmail.com",
        Password : "wqstikneclxcmtzu",
        To : 'soulsoftinfotech@gmail.com',
        From : email,
        Subject : subject,
        Body : body
    }).then(
      message => alert(message)
    );
    s
})
