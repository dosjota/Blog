/*
*	formato de fechas con moment.js
*/
moment.locale('es');
$(".fecha").html(function(index, value) { return moment(value, "YYYY-MM-DDTHH:mm:ss").format("[Publicado el: ] dddd D [de] MMMM [del] YYYY, h:mm:ss a"); });
