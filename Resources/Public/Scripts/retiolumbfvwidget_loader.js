var retiolumbfvwidget = retiolumbfvwidget || [];
function retiolumbfvwidget_loader() {
	retiolumbfvwidget.forEach(function(widgetData) {
		var widget = new BFVLigaWidget();
		widget.setzeLigaNr(widgetData.league);
		if (widgetData.team) {
			widget.setzeVereinNr(widgetData.team);
		}
		widget[widgetData.tab](widgetData.id);
	});
}
window.addEventListener('load', retiolumbfvwidget_loader, false);
