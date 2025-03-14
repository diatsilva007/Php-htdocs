function searchByCep() {
  const cep = document.getElementById("cepInput").value.replace(/\D/g, ""); // Remove caracteres não numéricos
  const resultDiv = document.getElementById("result");

  // Verificar se o CEP é válido (deve ter 8 dígitos)
  if (cep.length !== 8) {
    resultDiv.innerHTML = "Por favor, insira um CEP válido.";
    return;
  }

  const url = `https://viacep.com.br/ws/${cep}/json/`;

  // Fazer a requisição para a API ViaCEP
  fetch(url)
    .then((response) => response.json())
    .then((data) => {
      if (data.erro) {
        resultDiv.innerHTML = "CEP não encontrado.";
      } else {
        resultDiv.innerHTML = `
                    <p><strong>CEP:</strong> ${data.cep}</p>
                    <p><strong>Logradouro:</strong> ${data.logradouro}</p>
                    <p><strong>Bairro:</strong> ${data.bairro}</p>
                    <p><strong>Cidade:</strong> ${data.localidade}</p>
                    <p><strong>Estado:</strong> ${data.uf}</p>
                `;
      }
    })
    .catch((error) => {
      resultDiv.innerHTML = "Erro ao buscar o CEP. Tente novamente.";
      console.error(error);
    });
}

function resetForm() {
  // Limpa o campo de entrada e o resultado
  document.getElementById("cepInput").value = "";
  document.getElementById("result").innerHTML = "";
}
