// Função para mostrar uma mensagem de agradecimento quando a newsletter é assinada.
function assinarNewsletter() {
  alert("Obrigado por assinar nossa newsletter!");
}

// Eventos para mudar a cor do botão quando o mouse passa por cima.
const btnInscrever = document.querySelector(".btn");
btnInscrever.addEventListener("mouseover", function () {
  btnInscrever.style.backgroundColor = "#0A4D46";
});
btnInscrever.addEventListener("mouseout", function () {
  btnInscrever.style.backgroundColor = "#127E71";
});

//Evento para quando o usuario assinar a newsletter!
const btnAssinar = document.getElementById("btn-assinar");
btnAssinar.addEventListener("click", function () {
  assinarNewsletter();
});
