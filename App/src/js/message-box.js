// app/src/js/message-box.js

class MessageBox extends HTMLElement {
    constructor() {
        super();

        this.attachShadow({ mode: 'open' });

        this.shadowRoot.innerHTML = `
            <style>
                /* Estilos específicos do componente */
            </style>
            <div id="messageBox">
                <p>Exemplo de mensagem.</p>
            </div>
        `;
    }
}

customElements.define('message-box', MessageBox);
