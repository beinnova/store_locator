jQuery(document).ready(function(){
 
	var r = Raphael('map', 300,300),
			attributes = {
            fill: '#939393', //Interno regione
            stroke: '#f5d20a', //Bordo Regione
	    	"stroke-width": 0
            
        },
		 arr = new Array();
	

	for (var country in path) {
		
		var obj = r.path(path[country].path);		
		
		obj.attr(attributes);
		obj.attr({title:path[country].name});
		
		
		arr[obj.id] = country;
		
		
		
		
		obj.hover(function(){
			var word = path[arr[this.id]].name.split(" ",1)
			
			var linkTooltip = jQuery("#map a");
			
			//Modifica colore all'hover
			this.animate({
				fill: attributes.stroke,
				stroke: attributes.fill				
			}, 300);
			
		//Controla se iPad per modificare l'evento
		if (navigator.platform.indexOf("iPad") == -1 || navigator.platform == "Win32") {
			
			jQuery(linkTooltip).qtip({
				content: {
					text: path[arr[this.id]].name 
				},
				show : 'mouseover',
				hide: 'mouseout',
				position: {
					my: 'bottom center',
					target: 'mouse',
					adjust: {
						x: -2,
						y: -10
					}
				},
				style: {
					classes: 'ui-tooltip-jtools'
				}
				
			});
		}else{
			
			jQuery(linkTooltip).qtip({
					content: {
						
						text: path[arr[this.id]].name
					},
					position: {
						my: 'bottom center',
						target: 'mouse',
						
						adjust: {
							mouse:false,
							x: -2,
							y: -10
						}
					},
					style: {
						classes: 'ui-tooltip-jtools'
					}
				})	
			
				
		}
		
	
		}, function(){
			//Ripristina il colore originale
			this.animate({
				fill: attributes.fill,
				stroke: attributes.stroke				
			}, 300);
			
		}).click(function(){	
				
				
				jQuery("#container").isotope({filter:'.'+path[arr[this.id]].name});
				jQuery("h5#regione").text(path[arr[this.id]].name);
			});		
			
			

	};

	
	
});

