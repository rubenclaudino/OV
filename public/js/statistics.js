$(function(){
	Main.init();
	SVExamples.init();
	Index.init();
	Chart.defaults.global.responsive = true;
	var ctx=document.getElementById("dynamicChart").getContext("2d");
				var gradient = ctx.createLinearGradient(0, 0, 0, 400);
					gradient.addColorStop(0, 'rgba(31,174,206,0.4)');   
					gradient.addColorStop(1, 'rgba(53,182,210,0.2)');
	var ctx=document.getElementById("canvas2").getContext("2d");
				var gradient = ctx.createLinearGradient(0, 0, 0, 400);
					gradient.addColorStop(0, 'rgba(31,174,206,0.4)');   
					gradient.addColorStop(1, 'rgba(53,182,210,0.2)');
	var data= getData();
	var myLineChart=new Chart(document.getElementById("dynamicChart").getContext("2d")).Line(data, {responsive: true, maintainAspectRatio: true});
	
	new Chart(document.getElementById("canvas2").getContext("2d")).Line(data, {responsive: true, maintainAspectRatio: true});
	
	function equalHeight(el){
		var maxHeight = 0;
		$(el).each(function(){
		   if ($(el).height() > maxHeight) { 
				maxHeight = $(el).height();
			}					   
		});
		$(el).css({'height':maxHeight+'px'});
	}
	var el3=".equalThirdRow";
	equalHeight(el3);
	$("#graphGenerate").on("click",function(){	
		//var data= getData();
		//myLineChart.addData([1, 60], "August");
		myLineChart.datasets[0].points[2].value = 200;
		myLineChart.update();
	});
	
	function getData(){
		var myData = {
			  labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			  datasets: [/* {
				fillColor: "rgba(220,220,220,.5)",
				strokeColor: "rgba(220,220,220,1)",
				pointColor: "rgba(220,220,220,1)",
				pointStrokeColor: "#fff",
				data: [65, 59, 90, 81, 56, 55, 40, 33, 23, 32, 86, 98]
			  },  */{
				/* fillColor: "rgba(149,218,249,.5)",
				strokeColor: "rgba(149,218,249,1)",
				pointColor: "rgba(149,218,249,1)",
				pointStrokeColor: "#fff", */
				fillColor: gradient,
					strokeColor: '#1FAECE',
					pointColor: '#1FAECE',
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "rgba(1,117,178,1)",
				data: [45, 110, 50, 21, 78, 81, 60, 22, 61, 53, 67, 20]
			  }]
		}
		return myData;
	};
	
	
}); 