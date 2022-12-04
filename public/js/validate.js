//Valida campos obrigatórios
(() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    //Valida senha
    const passwordInput = document.getElementById("password")
    passwordInput.addEventListener('keyup', event => {
      let password = document.getElementsByName("password")[0].value

      // Regex para validar senha
      const pattern = new RegExp('^(?=.*[0-9])(?=.*[A-Za-z]).{8,}$')

      // Condição para habilitar botão "Cadastrar"
      if(password.length >= 8 && pattern.test(password) == true){
        document.getElementById('send-data').disabled = false;
      } else {
        document.getElementById('send-data').disabled = true;
      }
    })
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()){
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
  })()

