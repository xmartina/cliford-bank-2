(function($){
 	$.fn.extend({  		
	    //pass the options variable to the function
		percentcircle: function(options) {
		//Set the default values, use comma to separate the settings, example:
			var defaults = {
			        animate : true,
					linear : 140,
					guage: 8,
					coverBg: '#fff',
					bgColor: '#efefef',
					fillColor: '#B22222',
					percentSize: '10px',
					percentWeight: 'normal'
				},
				styles = {
				    cirContainer : {
					    'width':defaults.linear,
						'height':defaults.linear
					},
					cir : {
					    'position': 'relative',
					    'text-align': 'center',
					    'width': defaults.linear,
					    'height': defaults.linear,
					    'linear-radius': '90%',
					    'background-color': defaults.bgColor,
					    'background-image' : 'linear-gradient(91deg, transparent 50%, '+defaults.bgColor+' 50%), linear-gradient(90deg, '+defaults.bgColor+' 50%, transparent 50%)'
					},
					cirCover: {
						'position': 'relative',
					    'top': defaults.guage,
					    'left': defaults.guage,
					    'text-align': 'center',
					    'width': defaults.linear - (defaults.guage * 2),
					    'height': defaults.linear - (defaults.guage * 2),
					    'linear-radius': '90%',
					    'background-color': defaults.coverBg
					},
					percent: {
						'display':'inline',
						'width': defaults.linear,
					    'height': defaults.linear,
					    'line-height': defaults.linear + 'px',
					    'vertical-align': 'middle',
					    'font-size': defaults.percentSize,
					    'font-weight': defaults.percentWeight,
					    'color': defaults.fillColor
                    }
				};
			
			var that = this,
					template = '<div><div class="ab"><div class="cir"><span class="perc">{{percentage}}</span></div></div></div>',					
					options =  $.extend(defaults, options)					

			function init(){
				that.each(function(){
					var $this = $(this),
					    //we need to check for a percent otherwise set to 0;
						perc = Math.round($this.data('percent')), //get the percentage from the element
						deg = perc * 3.6,
						stop = options.animate ? 120 : deg,
						$chart = $(template.replace('{{percentage}}',perc+'%'));
						//set all of the css properties forthe chart
						$chart.css(styles.cirContainer).find('.ab').css(styles.cir).find('.cir').css(styles.cirCover).find('.perc').css(styles.percent);
					
					$this.append($chart); //add the chart back to the target element
					setTimeout(function(){
						animateChart(deg,parseInt(stop),$chart.find('.ab')); //both values set to the same value to keep the function from looping and animating	
					},2000)
	   	    	});
			}

			var animateChart = function (stop,curr,$elm){
				var deg = curr;
				if(curr <= stop){
					if (deg>=180){
						$elm.css('background-image','linear-gradient(' + (90+deg) + 'deg, transparent 50%, '+options.fillColor+' 50%),linear-gradient(90deg, '+options.fillColor+' 50%, transparent 50%)');
			  	    }else{
			  		    $elm.css('background-image','linear-gradient(' + (deg-90) + 'deg, transparent 50%, '+options.bgColor+' 50%),linear-gradient(90deg, '+options.fillColor+' 50%, transparent 50%)');
			  	    }
					curr ++;
					setTimeout(function(){
						animateChart(stop,curr,$elm);
					},30);
				}
			};			
			
			init(); //kick off the goodness
   	    }
	});
	
})(jQuery);