function mascaraTel(mascaraInput) {
    const tamanhoInput = document.getElementById('tefelone').maxLength
    let valorInput = document.getElementById('tefelone').value
    //console.log('tamanho máximo:', tamanhoInput, 'valor input:', valorInput)
    //let valorSemPonto = document.getElementById('tefelone').value.replace(/([^0-9]+)/g, "")
    const mascara = {
      telefone: valorInput.replace(/[^\d]/g,"").replace(/^(\d{2})(\d{5})(\d{4}).*/, "($1) $2-$3")
    };
  
    if (valorInput.length === tamanhoInput) {
      document.getElementById('tefelone').value = mascara[mascaraInput]
    } /* else{
      document.getElementById('tefelone').value = valorSemPonto
    } */
  }

  function mascaraCpf(mascaraInput) {
    const tamanhoInput = document.getElementById('cfp').maxLength
    let valorInput = document.getElementById('cfp').value
    console.log('tamanho máximo:', tamanhoInput, 'valor input:', valorInput)
    //let valorSemPonto = document.getElementById('telefoneInput').value.replace(/([^0-9]+)/g, "")
    const mascara = {
      cpf: valorInput.replace(/[^\d]/g,"").replace(/^(\d{3})(\d{3})(\d{3})(\d{2}).*/, "$1.$2.$3-$4")
    };
  
    if (valorInput.length === tamanhoInput) {
      document.getElementById('cfp').value = mascara[mascaraInput]
    } 
  }

  function mascaraCep(mascaraInput) {
    const tamanhoInput = document.getElementById('cpe').maxLength
    let valorInput = document.getElementById('cpe').value
  
    const mascara = {
      cep : valorInput.replace(/[^\d]/g, "").replace(/^(\d{5})(\d{3}).*/, "$1-$2")
    }
  
    if (valorInput.length === tamanhoInput) {
      document.getElementById('cpe').value = mascara[mascaraInput]
    }
  }