var path = window.location.pathname;
var page = path.split("/").pop();
console.log( page );

if (page == 'index.php') {
    var v = document.getElementById('acceuil');
    v.className = 'active';
}
if (page == 'autre.php') {
    var v = document.getElementById('autre');
    v.className = 'active';
}
if (page == 'contact.php') {
    var v = document.getElementById('contact');
    v.className = 'active';
}

