if (document.getElementById("ButtonModal")) {

    var modal = document.getElementById("mymodal");
    var button = document.getElementById("ButtonModal");
    var span = document.getElementById("close");
    var body = document.getElementById("body");

    button.onclick = function(){
        modal.style.display = "block";
        body.style.position = "static";
        body.style.height = "100%";
        body.style.overflow = "hidden";
    }

    span.onclick = function() {
        modal.style.display = "none";
        body.style.position = "inherit";
        body.style.height = "auto";
        body.style.overflow = "visible";
    }
}


