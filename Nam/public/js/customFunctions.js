function onRemoveClick(id, theUrl) {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", theUrl, true); // true for asynchronous 
    xmlHttp.send(null);
    xmlHttp.onload = function() {
        if(xmlHttp.status !== 200) {
            showToast("Hubo un error, intente de nuevo", false);
        }
    }
    let row = document.getElementById(id);
    row.parentNode.removeChild(row);
}

function onAddToCartClick(theUrl) {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", theUrl, true); // true for asynchronous 
    xmlHttp.send(null);
    xmlHttp.onload = function() {
        if(xmlHttp.status !== 200) {
            showToast("Hubo un error, intente de nuevo", false);
        } else {
            showToast("Producto agregado al carrito!");
        }
    }
}

function showToast(message, success = true) {
    var className = success? "show" : "show-error";
    var x = document.getElementById("toast");
    x.innerText = message;
    x.className = className;
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}

function searchTerm(uri) {
    var term = document.getElementById("search-text");
    document.location.replace(uri + '/' + term.value);
}