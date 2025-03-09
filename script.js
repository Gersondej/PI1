// Exemplo de interação simples com o formulário
document.getElementById('contact-form').addEventListener('submit', function (e) {
    e.preventDefault();
    alert('Mensagem enviada com sucesso! Entraremos em contato em breve.');
    this.reset();
});