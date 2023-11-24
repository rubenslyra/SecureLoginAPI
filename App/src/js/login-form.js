// app/src/js/login-form.js

class LoginForm extends HTMLElement {
    constructor() {
        super();

        this.attachShadow({ mode: 'open' });

        this.shadowRoot.innerHTML = `
            <style>
                /* Estilos específicos do componente */
            </style>
            <form id="loginForm">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="button" id="loginButton">Login</button>
            </form>
        `;
    }

    connectedCallback() {
        this.shadowRoot.getElementById('loginButton').addEventListener('click', () => {
            // Lógica para enviar dados de login para a API
            const username = this.shadowRoot.getElementById('username').value;
            const password = this.shadowRoot.getElementById('password').value;

            // Substitua este console.log com a lógica real de envio para a API
            console.log(`Login: ${username}, Password: ${password}`);
        });
    }
}

customElements.define('login-form', LoginForm);
