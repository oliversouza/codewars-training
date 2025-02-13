fetch("https://jsonplaceholder.typicode.com/users")
.then(response => response.json())
.then( data => {
    data.forEach(user => {
        if(user.email.includes(".biz")){
            console.log(`O usuário ${user.name} é dono do e-mail ${user.email}`)
        }
    });
})
.catch(error => console.error(error));