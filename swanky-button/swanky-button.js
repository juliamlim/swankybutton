/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

Include this file to implement the ** SWANKY-BUTTON ** on your page

* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

window.onload = function () {
    "use strict";
    var get_swank = document.querySelector('link[rel="import"]').import;
    var swank_temp = get_swank.querySelector('#swanky-button'); // Selects the template from the imported document
    var swank_prot = Object.create(HTMLElement.prototype); // Creates a new prototype from the template
    swank_prot.createdCallback = function() {
        var root = this.attachShadow({mode: 'open'});
        root.appendChild(get_swank.importNode(swank_temp.content, true));
    }; // Function implements template everytime a **swanky-button** element appears in document
    var swank_butt = document.registerElement('swanky-button', {prototype: swank_prot}); // Creates the custom element
};