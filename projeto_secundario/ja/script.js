// Validação simples para o formulário de login e cadastro
document.getElementById("form-login")?.addEventListener("submit", function (e) {
  e.preventDefault();
  alert("Login realizado com sucesso!");
});

document.getElementById("form-cadastro")?.addEventListener("submit", function (e) {
  e.preventDefault();
  alert("Cadastro realizado com sucesso!");
});

document.getElementById("form-agendamento")?.addEventListener("submit", function (e) {
  e.preventDefault();
  const nome = this.querySelector('input[type="text"]').value;
  alert(`Agendamento confirmado para ${nome}!`);
});
