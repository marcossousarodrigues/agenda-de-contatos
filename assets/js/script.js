
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

        const newPassword = document.querySelector(".newpassword");
        const confirmNewPassword = document.querySelector(".confirmnewpassword");


        // butoes e messagens de validação
        const btnSalvar = document.querySelector('.btn-salvar');
        const btnEnter = document.querySelector('.btn-login');
        const btnRegister = document.querySelector('.btn-register');
        const btnAlterUser = document.querySelector('.btn-alter-user');
        const btnAlterPassword = document.querySelector('.btn-alter-password');
        const messageError = document.querySelector(".message-error")
        
        return {form, name, surname, tel, email, password, confirmpassword, newPassword, confirmNewPassword, btnSalvar, btnEnter, btnRegister, btnAlterUser, btnAlterPassword, messageError}
    } 

    eventsElements()
    {
        const {form, name, surname, tel, email, password, confirmpassword, newPassword, confirmNewPassword, btnEnter, btnSalvar, btnRegister, btnAlterUser, btnAlterPassword, messageError} = this.getElements();
        

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

        
        if(btnAlterUser)
        {
            btnAlterUser.addEventListener("click", (e)=>{
                e.preventDefault();
                
                this.clearElements(name, surname, email, messageError);

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
                    return messageError.innerHTML = "O campo email é obrigatorio, por favor preencher";
                }
               
                form.submit();
            });
        }


        if(btnAlterPassword)
        {
            btnAlterPassword.addEventListener("click", (e)=>{
                e.preventDefault();
                
                this.clearElements(password, newPassword, confirmNewPassword, messageError);

                if(!password.value)
                {
                    password.style.border = "3px solid red";
                    return messageError.innerHTML = "O campo senha é obrigatorio, por favor preencher";
                }

                if(!newPassword.value)
                {
                    newPassword.style.border = "3px solid red";
                    return messageError.innerHTML = "O campo nova senha é obrigatorio, por favor preencher";
                }

                if(!confirmNewPassword.value)
                {
                    confirmNewPassword.style.border = "3px solid red";
                    return messageError.innerHTML = "O campo confirmação da nova senha é obrigatorio, por favor preencher";
                }

                if(newPassword.value !== confirmNewPassword.value)
                {
                    newPassword.style.border = "3px solid red";
                    confirmNewPassword.style.border = "3px solid red";
                    return messageError.innerHTML = "Os campos nova senha e confirmação da nova senha são obrigatorios, por favor preencher";
                }
               
                form.submit();
            });
        }

        

    }
    clearElements(name = '', surname = '', tel = '', email = '', password = '', confirmpassword = '', newPassword ='', confirmNewPassword = '', message = ''){
        name ? name.style.border = "none" : '';
        surname ? surname.style.border = "none" : '';
        tel ? tel.style.border = "none" : '';
        email ? email.style.border = "none" : '';
        password ? password.style.border = "none" : '';
        confirmpassword ? confirmpassword.innerHTML = '' : '';
        newPassword ? newPassword.innerHTML = '' : '';
        confirmNewPassword ? confirmNewPassword.innerHTML = '' : '';
        message ? message.innerHTML = '' : '';
    }
    
}


// instaciar a classe e carregar elementos

const formContact = new FormContact();

formContact.eventsElements();

