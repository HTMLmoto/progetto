 $(document).ready(function() {
	$('.pop').popover({
		placement: 'top',
		html: true,
		//content: '<table class=\'studenti-container\'><tr><td>Antonini Filippo</td><td>Dippolito Manuel</td></tr><tr><td>Barbieri Andrea</td><td>Franceschini Lorenzo</td></tr><tr><td>Chirita Raul Sorin</td><td>Kozak Anatoliy</td></tr><tr><td>Cicoletti Tommaso</td><td>Mariani Leonardo</td></tr><tr><td>Colonna Zoe</td><td>Niculae Filippo Leonardo</td></tr><tr><td>De Angelis Andrea</td><td>Quercia Riccardo</td></tr><tr><td>Della Ciana Emiliano</td><td>Rosetti Aurora</td></tr><tr><td>Di Giacomo Od Esposto\n Diego</td><td>Straccini Giacomo</td></tr><tr><td>Dinica Angelo Ilie</td><td>Tulli Emilio</td></tr></table>',
		content:'<div class="row">\
            <div class="col-sm-6 col-xs-12">Barbieri Andrea</div>\
            <div class="col-sm-6 col-xs-12">Della Ciana Emiliano</div>\
        </div>\
        <div class="row">\
            <div class="col-sm-6 col-xs-12">Di Giacomo Od Esposto Diego</div>\
            <div class="col-sm-6 col-xs-12">Dinica Angelo Ilie</div>\
        </div>\
        <div class="row">\
            <div class="col-sm-6 col-xs-12">Dippolito Manuel</div>\
            <div class="col-sm-6 col-xs-12">Franceschini Lorenzo</div>\
        </div>\
        <div class="row">\
            <div class="col-sm-6 col-xs-12">Pannuzzi Filippo</div>\
            <div class="col-sm-6 col-xs-12">Kozak Anatoliy</div>\
        </div>\
        <div class="row">\
            <div class="col-sm-6 col-xs-12">Rosetti Aurora</div>\
            <div class="col-sm-6 col-xs-12">Vladyslav Prodanchuk</div>\
        </div>\
        <div class="row">\
            <div class="col-sm-6 col-xs-12">Tulli Emilio</div>\
            <div class="col-sm-6 col-xs-12">Duti Antonio</div>\
        </div>\
        <div class="row">\
            <div class="col-sm-6 col-xs-12">Mastrapasqua Simone (chap)</div>\
            <div class="col-sm-6 col-xs-12">Petrucci Emanuele</div>\
        </div>',
		template:'<div class="popover my-popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body my-popover-body"></div></div>',
	});
	
});