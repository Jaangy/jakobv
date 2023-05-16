function reloadPage() {
    location.href='igra.php';
}

function rezultati() {
    location.href='konec.php';
}

setTimeout(function() {
    document.getElementById('sestevek1').style.opacity = "1";}, 1250);
setTimeout(function() {
    document.getElementById('sestevek2').style.opacity = "1";}, 1250);
setTimeout(function() {
    document.getElementById('sestevek3').style.opacity = "1";}, 1250);

function animkocke1() {
    setTimeout("document.getElementById('anim1').style.display = 'none'; document.getElementById('kocke1').style.display = 'inline-block';",1200);
}
function animkocke2() {
    setTimeout("document.getElementById('anim2').style.display = 'none'; document.getElementById('kocke2').style.display = 'inline-block';",1200);
}
function animkocke3() {
    setTimeout("document.getElementById('anim3').style.display = 'none'; document.getElementById('kocke3').style.display = 'inline-block';",1200);
}
animkocke1();
animkocke2();
animkocke3();
