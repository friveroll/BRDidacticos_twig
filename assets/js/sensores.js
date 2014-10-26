(function () {

	window.App ={
		Models: {},
		Collections: {},
		Views: {},
		Grids: {}
	};

	window.template = function(id) {
		return _.template( $('#' + id).html() );
	};

	App.Models.Sensors = Backbone.Model.extend({

		defaults: {
			Ingles: null,
			Espanol: null,
			code: null,
			interfases: []

		},
	});

	App.Collections.Sensors = Backbone.Collection.extend({
		model: App.Models.Sensors,
		search: function(opts){
			var result = this.where( opts );
			var resultCollection = new App.Collections.Sensors(result);
			return resultCollection;
		}

	});

	var SensorsCollection = new App.Collections.Sensors;

	SensorsCollection.url = '/assets/js/sensores.min.json';
	SensorsCollection.fetch();

	App.Grids.Sensors = new bbGrid.View({

		container: $('#bbGrid-search'),
		rows: 10,
		rowList: [10, 15, 25, 50, 100],
		collection: SensorsCollection,
		colModel: [{ title: 'Clave', index: true, name: 'id', filter: true, filterType: 'input', sorttype: 'string'},
		           { title: 'Nombre en Espa&ntilde;ol', index: true, name: 'Espanol', filter: true, filterType: 'input'},
		           { title: 'Interfases Compatibles', index: true, name: 'interfases', filter: true, filterType: 'input'}],

	});

})();