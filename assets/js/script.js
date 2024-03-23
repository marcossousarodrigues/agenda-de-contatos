
// validação do formulario para salvar contatos

class FormContact
{
    getElements()
    {
        // campos e formulario
        const form = document.querySelector("#form");
        const name = document.querySelector(".name");
        const surname = document.querySelector(".surname");
        const tel = document.querySelector(".tel");
        const email = document.querySelector(".email");
        const password = document.querySelector(".password");
        const confirmpassword = document.querySelector(".confirmpassword");

        // butoes e messagens de validação
        const btnSalvar = document.querySelector('.btn-salvar');
        const btnEnter = document.querySelector('.btn-login');
        const btnRegister = document.querySelector('.btn-register');
        const messageError = document.querySelector(".message-error")
        
        return {form, name, surname, tel, email, password, confirmpassword, btnSalvar, btnEnter, btnRegister, messageError}
    } 

    eventsElements()
    {
        const {form, name, surname, tel, email, password, confirmpassword, btnEnter, btnSalvar, btnRegister, messageError} = this.getElements();
        

        if(btnSalvar)
        {
            btnSalvar.addEventListener("click", (e)=>{
                e.preventDefault();

                this.clearElements(name, surname, tel, email, messageError);

                if(!name.value)
                {   
                    name.style.border = "3px solid red";
                    return messageError.innerHTML = "O campo nome é obrigatorio, por favor preencher";
                
                }
            
                if(!tel.value)
                {
                    tel.style.border = "3px solid red";
                    return messageError.innerHTML = "O campo telefone é obrigatorio, por favor preencher";
                }
                if(!email.value)
                {   
                    email.style.border = "3px solid red";
                    return messageError.innerHTML = "O campo e-mail é obrigatorio, por favor preencher";
                }

                form.submit();

            });

        }

        if(btnEnter)
        {
            btnEnter.addEventListener("click", (e)=>{
                e.preventDefault();
                
                this.clearElements(email, password, messageError);

                if(!email.value)
                {
                    email.style.border = "3px solid red";
                    return messageError.innerHTML = "O campo e-mail é obrigatorio, por favor preencher";
                }

                if(!password.value)
                {
                    password.style.border = "3px solid red";
                    return messageError.innerHTML = "O campo senha é obrigatorio, por favor preencher";
                }
               
                form.submit();
            });
        }

        if(btnRegister)
        {
            btnRegister.addEventListener("click", (e)=>{
                e.preventDefault();
                
                this.clearElements(name, surname, email, password, confirmpassword, messageError);

                if(!name.value)
                {
                    name.style.border = "3px solid red";
                    return messageError.innerHTML = "O campo nome é obrigatorio, por favor preencher";
                }
                if(!surname.value)
                {
                    surname.style.border = "3px solid red";
                    return messageError.innerHTML = "O campo sobrenome é obrigatorio, por favor preencher";
                }

                if(!email.value)
                {
                    email.style.border = "3px solid red";
                    return messageError.innerHTML = "O campo e-mail é obrigatorio, por favor preencher";
                }

                if(!password.value)
                {
                    password.style.border = "3px solid red";
                    return messageError.innerHTML = "O campo senha é obrigatorio, por favor preencher";
                }
                if(!confirmpassword.value)
                {
                    confirmpassword.style.border = "3px solid red";
                    return messageError.innerHTML = "O campo confirmação de senha é obrigatorio, por favor preencher";
                }
                if(password.value !== confirmpassword.value )
                {
                    password.style.border = "3px solid red";
                    confirmpassword.style.border = "3px solid red";
                    return messageError.innerHTML = "Os campos senha e confirmação de senha precisam ser iguais";
                }
                form.submit();
            });
        }

    }
    clearElements(name = '', surname = '', tel = '', email = '', password = '', confirmpassword = '', message = ''){
        name ? name.style.border = "none" : '';
        surname ? surname.style.border = "none" : '';
        tel ? tel.style.border = "none" : '';
        email ? email.style.border = "none" : '';
        password ? password.style.border = "none" : '';
        confirmpassword ? confirmpassword.innerHTML = '' : '';
        message ? message.innerHTML = '' : '';
    }
    
}


// instaciar a classe e carregar elementos

const formContact = new FormContact();

formContact.eventsElements();

