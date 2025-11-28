document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("formLogin");
    if (!form) return;

    form.addEventListener("submit", function (e) {
        const usuario = form.querySelector('[name="usuario"]').value.trim();
        const senha = form.querySelector('[name="senha"]').value.trim();

        const regexPermitidos = /^[a-zA-Z0-9_]+$/;

        if (!usuario || !senha) {
            alert("Preencha todos os campos!");
            e.preventDefault();
            return;
        }

        if (!regexPermitidos.test(usuario)) {
            alert("O usuário só pode conter letras, números e underline.");
            e.preventDefault();
            return;
        }

        if (senha.length < 3) {
            alert("Senha muito curta!");
            e.preventDefault();
            return;
        }
    });
});
