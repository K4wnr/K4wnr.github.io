onload = function() {
    var e = document.getElementById('brokenBtn');
    var d = document.createElement('a');
    d.innerHTML = e.innerHTML;
    d.href =  "javascript:display('headers')";
    e.parentNode.replaceChild(d, e);
}
function display(id) {
var e = document.getElementById(id);
if (e.classList.contains('hidden')) {
    e.classList.add("block");
    e.classList.remove("hidden");
}
else {
    e.classList.add("hidden");
    e.classList.remove("block");

    }
}