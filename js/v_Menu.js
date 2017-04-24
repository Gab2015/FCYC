$(document).ready(function () {
$(".navbar-nav li.desplazar a").click(function(event) {
$("nav.sidebar").css({
marginLeft:'-160px'});
$(".glyphicon").css({
marginLeft:'150px'});
$(".MenuPrincipal").css({
height:'20px'});
$("h1#HeadMenu").css({
marginLeft:'-160px'});
$("span#Cerrar").css({
marginLeft:'0px'});
});
$(".navbar-nav li.desplazar a").dblclick(function(event) {
$("nav.sidebar").css({
marginLeft:'0px'});
$(".glyphicon").css({
marginLeft:'0px'});
$("h1#HeadMenu").css({
marginLeft:'0px'});
$("span#Cerrar").css({
marginLeft:'0px'});
});
});