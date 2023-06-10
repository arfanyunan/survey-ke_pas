$(() => {
	console.log($('#cmb_tahun').val(),$('#cmb_bulan').val() )
	const graf_ralan_pertanyaan = document.getElementById('cnv_grafik_ralan_pertanyaan');
	if (graf_ralan_pertanyaan != null || graf_ralan_pertanyaan != undefined) {
				$.ajax({
					url: base_url + "admin/grafik_ralan_pertanyaan",
					method: "GET",
					dataType: "JSON",
					data: {
						tahun: $('#cmb_tahun').val(),
						bulan: $('#cmb_bulan').val() 
					},
					success: (result) => {
							new Chart(graf_ralan_pertanyaan, {
								type: 'bar',
								data: {
									labels: result.labels,
									datasets: [
										
									// Pertanyaan 1
									{
										label : "P1 Kurang Sekali", 
										backgroundColor : [
											'rgba(255, 99, 132)',
											'rgba(255, 99, 132)',
											'rgba(255, 99, 132)',
											'rgba(255, 99, 132)',
											'rgba(255, 99, 132)',
										],
											borderColor: [
												
											  ],
										data: result.data1,
										stack: 'Stack 0'
									},
									{
										label : "P1 Kurang", 
										backgroundColor : [
											'rgba(255, 99, 132, 0.8)',
											'rgba(255, 99, 132, 0.8)',
											'rgba(255, 99, 132, 0.8)',
											'rgba(255, 99, 132, 0.8)',
											'rgba(255, 99, 132, 0.8)',
										],
											borderColor: [

											  ],
										data: result.data2,
										stack: 'Stack 0'
									},{
										label : "P1 Cukup", 
										backgroundColor : [
											'rgba(255, 99, 132, 0.6)',
											'rgba(255, 99, 132, 0.6)',
											'rgba(255, 99, 132, 0.6)',
											'rgba(255, 99, 132, 0.6)',
											'rgba(255, 99, 132, 0.6)',
										],
											borderColor: [

											  ],
										data: result.data3,
										stack: 'Stack 0'
									},
									{
										label : "P1 Baik", 
										backgroundColor : [
											'rgba(255, 99, 132, 0.4)',
											'rgba(255, 99, 132, 0.4)',
											'rgba(255, 99, 132, 0.4)',
											'rgba(255, 99, 132, 0.4)',
											'rgba(255, 99, 132, 0.4)',
										],
											borderColor: [

											  ],
										data: result.data4,
										stack: 'Stack 0'
									},{
										label : "P1 Baik Sekali", 
										backgroundColor : [
											'rgba(255, 99, 132, 0.2)',
											'rgba(255, 99, 132, 0.2)',
											'rgba(255, 99, 132, 0.2)',
											'rgba(255, 99, 132, 0.2)',
											'rgba(255, 99, 132, 0.2)',
										],
											borderColor: [

											  ],
										data: result.data5,
										stack: 'Stack 0'
									},

									// Pertanyaan 2
									{
										label : "P2 Kurang Sekali", 
										backgroundColor : [
											'rgba(255, 159, 64)',
											'rgba(255, 159, 64)',
											'rgba(255, 159, 64)',
											'rgba(255, 159, 64)',
											'rgba(255, 159, 64)',
										],
											borderColor: [
											  ],
										data: result.data6,
										stack: 'Stack 1'
									},
									{
										label : "P2 Kurang", 
										backgroundColor : [
											'rgba(255, 159, 64, 0.8)',
											'rgba(255, 159, 64, 0.8)',
											'rgba(255, 159, 64, 0.8)',
											'rgba(255, 159, 64, 0.8)',
											'rgba(255, 159, 64, 0.8)',
										],
											borderColor: [
											  ],
										data: result.data7,
										stack: 'Stack 1'
									},{
										label : "P2 Cukup", 
										backgroundColor : [
											'rgba(255, 159, 64, 0.6)',
											'rgba(255, 159, 64, 0.6)',
											'rgba(255, 159, 64, 0.6)',
											'rgba(255, 159, 64, 0.6)',
											'rgba(255, 159, 64, 0.6)',
										],
											borderColor: [
											  ],
										data: result.data8,
										stack: 'Stack 1'
									},
									{
										label : "P2 Baik", 
										backgroundColor : [
											'rgba(255, 159, 64, 0.4)',
											'rgba(255, 159, 64, 0.4)',
											'rgba(255, 159, 64, 0.4)',
											'rgba(255, 159, 64, 0.4)',
											'rgba(255, 159, 64, 0.4)',
										],
											borderColor: [
											  ],
										data: result.data9,
										stack: 'Stack 1'
									},{
										label : "P2 Baik Sekali", 
										backgroundColor : [
											'rgba(255, 159, 64, 0.2)',
											'rgba(255, 159, 64, 0.2)',
											'rgba(255, 159, 64, 0.2)',
											'rgba(255, 159, 64, 0.2)',
											'rgba(255, 159, 64, 0.2)',
										],
											borderColor: [
											  ],
										data: result.data10,
										stack: 'Stack 1'
									},

									// Pertanyaan 3
									{
										label : "P3 Kurang Sekali", 
										backgroundColor : [
											'rgba(255, 205, 86)',
											'rgba(255, 205, 86)',
											'rgba(255, 205, 86)',
											'rgba(255, 205, 86)',
											'rgba(255, 205, 86)',
										],
											borderColor: [
											  ],
										data: result.data11,
										stack: 'Stack 2'
									},
									{
										label : "P3 Kurang", 
										backgroundColor : [
											'rgba(255, 205, 86, 0.8)',
											'rgba(255, 205, 86, 0.8)',
											'rgba(255, 205, 86, 0.8)',
											'rgba(255, 205, 86, 0.8)',
											'rgba(255, 205, 86, 0.8)',
										],
											borderColor: [
											  ],
										data: result.data12,
										stack: 'Stack 2'
									},{
										label : "P3 Cukup", 
										backgroundColor : [
											'rgba(255, 205, 86, 0.6)',
											'rgba(255, 205, 86, 0.6)',
											'rgba(255, 205, 86, 0.6)',
											'rgba(255, 205, 86, 0.6)',
											'rgba(255, 205, 86, 0.6)',
										],
											borderColor: [
											  ],
										data: result.data13,
										stack: 'Stack 2'
									},
									{
										label : "P3 Baik", 
										backgroundColor : [
											'rgba(255, 205, 86, 0.4)',
											'rgba(255, 205, 86, 0.4)',
											'rgba(255, 205, 86, 0.4)',
											'rgba(255, 205, 86, 0.4)',
											'rgba(255, 205, 86, 0.4)',
										],
											borderColor: [
											  ],
										data: result.data14,
										stack: 'Stack 2'
									},{
										label : "P3 Baik Sekali", 
										backgroundColor : [
											'rgba(255, 205, 86, 0.2)',
											'rgba(255, 205, 86, 0.2)',
											'rgba(255, 205, 86, 0.2)',
											'rgba(255, 205, 86, 0.2)',
											'rgba(255, 205, 86, 0.2)',
										],
											borderColor: [
											  ],
										data: result.data15,
										stack: 'Stack 2'
									},

									// Pertanyaan 4
									{
										label : "P4 Kurang Sekali", 
										backgroundColor : [
											'rgba(75, 192, 192)',
											'rgba(75, 192, 192)',
											'rgba(75, 192, 192)',
											'rgba(75, 192, 192)',
											'rgba(75, 192, 192)',
										],
											borderColor: [
											  ],
										data: result.data16,
										stack: 'Stack 3'
									},
									{
										label : "P4 Kurang", 
										backgroundColor : [
											'rgba(75, 192, 192, 0.8)',
											'rgba(75, 192, 192, 0.8)',
											'rgba(75, 192, 192, 0.8)',
											'rgba(75, 192, 192, 0.8)',
											'rgba(75, 192, 192, 0.8)',
										],
											borderColor: [
											  ],
										data: result.data17,
										stack: 'Stack 3'
									},{
										label : "P4 Cukup", 
										backgroundColor : [
											'rgba(75, 192, 192, 0.6)',
											'rgba(75, 192, 192, 0.6)',
											'rgba(75, 192, 192, 0.6)',
											'rgba(75, 192, 192, 0.6)',
											'rgba(75, 192, 192, 0.6)',
										],
											borderColor: [
											  ],
										data: result.data18,
										stack: 'Stack 3'
									},
									{
										label : "P4 Baik", 
										backgroundColor : [
											'rgba(75, 192, 192, 0.4)',
											'rgba(75, 192, 192, 0.4)',
											'rgba(75, 192, 192, 0.4)',
											'rgba(75, 192, 192, 0.4)',
											'rgba(75, 192, 192, 0.4)',
										],
											borderColor: [
											  ],
										data: result.data19,
										stack: 'Stack 3'
									},{
										label : "P4 Baik Sekali", 
										backgroundColor : [
											'rgba(75, 192, 192, 0.2)',
											'rgba(75, 192, 192, 0.2)',
											'rgba(75, 192, 192, 0.2)',
											'rgba(75, 192, 192, 0.2)',
											'rgba(75, 192, 192, 0.2)',
										],
											borderColor: [
											  ],
										data: result.data20,
										stack: 'Stack 3'
									},

									// Pertanyaan 5
									{
										label : "P5 Kurang Sekali", 
										backgroundColor : [
											'rgba(153, 102, 255)',
											'rgba(153, 102, 255)',
											'rgba(153, 102, 255)',
											'rgba(153, 102, 255)',
											'rgba(153, 102, 255)',
										],
											borderColor: [
											  ],
										data: result.data21,
										stack: 'Stack 4'
									},
									{
										label : "P5 Kurang", 
										backgroundColor : [
											'rgba(153, 102, 255, 0.8)',
											'rgba(153, 102, 255, 0.8)',
											'rgba(153, 102, 255, 0.8)',
											'rgba(153, 102, 255, 0.8)',
											'rgba(153, 102, 255, 0.8)',
										],
											borderColor: [
											  ],
										data: result.data22,
										stack: 'Stack 4'
									},{
										label : "P5 Cukup", 
										backgroundColor : [
											'rgba(153, 102, 255, 0.6)',
											'rgba(153, 102, 255, 0.6)',
											'rgba(153, 102, 255, 0.6)',
											'rgba(153, 102, 255, 0.6)',
											'rgba(153, 102, 255, 0.6)',
										],
											borderColor: [
											  ],
										data: result.data23,
										stack: 'Stack 4'
									},
									{
										label : "P5 Baik", 
										backgroundColor : [
											'rgba(153, 102, 255, 0.4)',
											'rgba(153, 102, 255, 0.4)',
											'rgba(153, 102, 255, 0.4)',
											'rgba(153, 102, 255, 0.4)',
											'rgba(153, 102, 255, 0.4)',
										],
											borderColor: [
											  ],
										data: result.data24,
										stack: 'Stack 4'
									},{
										label : "P5 Baik Sekali", 
										backgroundColor : [
											'rgba(153, 102, 255, 0.2)',
											'rgba(153, 102, 255, 0.2)',
											'rgba(153, 102, 255, 0.2)',
											'rgba(153, 102, 255, 0.2)',
											'rgba(153, 102, 255, 0.2)',
										],
											borderColor: [
											  ],
										data: result.data25,
										stack: 'Stack 4'
									},
								],
								},
								options: {
									scales: {
										yAxes: [{
											// stacked : true,
											display: true,
											offset: true,
											ticks: {
												suggestedMin: 0, 
												beginAtZero: true,   
												stepSize: 10
											}
										}],
										// XAxes: [{
										// 	stacked : true,
										// }]
									},
									
									plugins: {
										datalabels: {
											display: 'auto',
											align: 'end',
											anchor: 'start'
										},
										legend: {
											display: false
										}
									}
								},
								plugins: [ChartDataLabels]
							});
					},
					error: (err) => {
						console.log(err);
					}
				})
			}

}); //ready state