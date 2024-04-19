var bt = document.getElementById("dark");

bt.addEventListener('click', function(){

    var stylesheet = document.getElementById("themeStylesheet"); //On récupère l'élément link avec l'id themeStylesheet

    if (stylesheet.getAttribute("href") === "../css/theme.css") {
        stylesheet.setAttribute("href", "../css/dark.css");
        bt.textContent = "Go in White";
    } else {
        stylesheet.setAttribute("href", "../css/theme.css");
        bt.textContent = "Go in Dark";
    }
})