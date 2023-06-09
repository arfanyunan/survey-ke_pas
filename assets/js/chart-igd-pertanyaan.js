$(() => {
	const graf_igd_pertanyaan = document.getElementById('cnv_grafik_igd_pertanyaan');
	if (graf_igd_pertanyaan != null || graf_igd_pertanyaan != undefined) {
				$.ajax({
					url: base_url + "admin/grafik_igd_pertanyaan",
					method: "GET",
					dataType: "JSON",
					data: {
						tahun: $('#cmb_tahun').val()
					},
					success: (result) => {
							new Chart(graf_igd_pertanyaan, {
								type: 'bar',
								data: {
									labels: result.labels,
									datasets: [{
										label : "P1 Ya", 
										backgroundColor : [
											'rgba(255, 99, 132)',
											'rgba(255, 99, 132)',
											'rgba(255, 99, 132)',
											'rgba(255, 99, 132)',
											'rgba(255, 99, 132)',
											'rgba(255, 99, 132)',
											'rgba(255, 99, 132)',
											'rgba(255, 99, 132)',
											'rgba(255, 99, 132)',
											'rgba(255, 99, 132)',
											'rgba(255, 99, 132)',
											'rgba(255, 99, 132)',
										],
											borderColor: [
												'rgb(255, 99, 132)',
												'rgb(255, 99, 132)',
												'rgb(255, 99, 132)',
												'rgb(255, 99, 132)',
												'rgb(255, 99, 132)',
												'rgb(255, 99, 132)',
												'rgb(255, 99, 132)',
												'rgb(255, 99, 132)',
												'rgb(255, 99, 132)',
												'rgb(255, 99, 132)',
												'rgb(255, 99, 132)',
												'rgb(255, 99, 132)',
											  ],
										data: result.data1,
										// stack: 'Stack 0'
									},
									{
										label : "P1 Tidak", 
										backgroundColor : [
											'rgba(255, 99, 132, 0.5)',
											'rgba(255, 99, 132, 0.5)',
											'rgba(255, 99, 132, 0.5)',
											'rgba(255, 99, 132, 0.5)',
											'rgba(255, 99, 132, 0.5)',
											'rgba(255, 99, 132, 0.5)',
											'rgba(255, 99, 132, 0.5)',
											'rgba(255, 99, 132, 0.5)',
											'rgba(255, 99, 132, 0.5)',
											'rgba(255, 99, 132, 0.5)',
											'rgba(255, 99, 132, 0.5)',
											'rgba(255, 99, 132, 0.5)',
										],
											borderColor: [
												'rgb(255, 99, 132)',
												'rgb(255, 99, 132)',
												'rgb(255, 99, 132)',
												'rgb(255, 99, 132)',
												'rgb(255, 99, 132)',
												'rgb(255, 99, 132)',
												'rgb(255, 99, 132)',
												'rgb(255, 99, 132)',
												'rgb(255, 99, 132)',
												'rgb(255, 99, 132)',
												'rgb(255, 99, 132)',
												'rgb(255, 99, 132)',
											  ],
										data: result.data2,
										// stack: 'Stack 0'
									},{
										label : "P2 Ya", 
										backgroundColor : [
											'rgba(255, 159, 64)',
											'rgba(255, 159, 64)',
											'rgba(255, 159, 64)',
											'rgba(255, 159, 64)',
											'rgba(255, 159, 64)',
											'rgba(255, 159, 64)',
											'rgba(255, 159, 64)',
											'rgba(255, 159, 64)',
											'rgba(255, 159, 64)',
											'rgba(255, 159, 64)',
											'rgba(255, 159, 64)',
											'rgba(255, 159, 64)',
										],
											borderColor: [
												'rgb(255, 159, 64)',
												'rgb(255, 159, 64)',
												'rgb(255, 159, 64)',
												'rgb(255, 159, 64)',
												'rgb(255, 159, 64)',
												'rgb(255, 159, 64)',
												'rgb(255, 159, 64)',
												'rgb(255, 159, 64)',
												'rgb(255, 159, 64)',
												'rgb(255, 159, 64)',
												'rgb(255, 159, 64)',
												'rgb(255, 159, 64)',

											  ],
										data: result.data3,
										// stack: 'Stack 1'
									},
									{
										label : "P2 Tidak", 
										backgroundColor : [
											'rgba(255, 159, 64, 0.5)',
											'rgba(255, 159, 64, 0.5)',
											'rgba(255, 159, 64, 0.5)',
											'rgba(255, 159, 64, 0.5)',
											'rgba(255, 159, 64, 0.5)',
											'rgba(255, 159, 64, 0.5)',
											'rgba(255, 159, 64, 0.5)',
											'rgba(255, 159, 64, 0.5)',
											'rgba(255, 159, 64, 0.5)',
											'rgba(255, 159, 64, 0.5)',
											'rgba(255, 159, 64, 0.5)',
											'rgba(255, 159, 64, 0.5)',
										],
											borderColor: [
												'rgb(255, 159, 64)',
												'rgb(255, 159, 64)',
												'rgb(255, 159, 64)',
												'rgb(255, 159, 64)',
												'rgb(255, 159, 64)',
												'rgb(255, 159, 64)',
												'rgb(255, 159, 64)',
												'rgb(255, 159, 64)',
												'rgb(255, 159, 64)',
												'rgb(255, 159, 64)',
												'rgb(255, 159, 64)',
												'rgb(255, 159, 64)',

											  ],
										data: result.data4,
										// stack: 'Stack 1'
									},{
										label : "P3 Ya", 
										backgroundColor : [
											'rgba(255, 205, 86)',
											'rgba(255, 205, 86)',
											'rgba(255, 205, 86)',
											'rgba(255, 205, 86)',
											'rgba(255, 205, 86)',
											'rgba(255, 205, 86)',
											'rgba(255, 205, 86)',
											'rgba(255, 205, 86)',
											'rgba(255, 205, 86)',
											'rgba(255, 205, 86)',
											'rgba(255, 205, 86)',
											'rgba(255, 205, 86)',
										],
											borderColor: [
												'rgba(255, 205, 86)',
												'rgba(255, 205, 86)',
												'rgba(255, 205, 86)',
												'rgba(255, 205, 86)',
												'rgba(255, 205, 86)',
												'rgba(255, 205, 86)',
												'rgba(255, 205, 86)',
												'rgba(255, 205, 86)',
												'rgba(255, 205, 86)',
												'rgba(255, 205, 86)',
												'rgba(255, 205, 86)',
												'rgba(255, 205, 86)',
										
											  ],
										data: result.data5,
										// stack: 'Stack 2'
									},
									{
										label : "P3 Tidak", 
										backgroundColor : [
											'rgba(255, 205, 86, 0.5)',
											'rgba(255, 205, 86, 0.5)',
											'rgba(255, 205, 86, 0.5)',
											'rgba(255, 205, 86, 0.5)',
											'rgba(255, 205, 86, 0.5)',
											'rgba(255, 205, 86, 0.5)',
											'rgba(255, 205, 86, 0.5)',
											'rgba(255, 205, 86, 0.5)',
											'rgba(255, 205, 86, 0.5)',
											'rgba(255, 205, 86, 0.5)',
											'rgba(255, 205, 86, 0.5)',
											'rgba(255, 205, 86, 0.5)',
										],
											borderColor: [
												'rgba(255, 205, 86)',
												'rgba(255, 205, 86)',
												'rgba(255, 205, 86)',
												'rgba(255, 205, 86)',
												'rgba(255, 205, 86)',
												'rgba(255, 205, 86)',
												'rgba(255, 205, 86)',
												'rgba(255, 205, 86)',
												'rgba(255, 205, 86)',
												'rgba(255, 205, 86)',
												'rgba(255, 205, 86)',
												'rgba(255, 205, 86)',
											
											  ],
										data: result.data6,
										// stack: 'Stack 2'
									},{
										label : "P4 Ya", 
										backgroundColor : [
											'rgba(75, 192, 192)',
											'rgba(75, 192, 192)',
											'rgba(75, 192, 192)',
											'rgba(75, 192, 192)',
											'rgba(75, 192, 192)',
											'rgba(75, 192, 192)',
											'rgba(75, 192, 192)',
											'rgba(75, 192, 192)',
											'rgba(75, 192, 192)',
											'rgba(75, 192, 192)',
											'rgba(75, 192, 192)',
											'rgba(75, 192, 192)',
										],
											borderColor: [
												'rgba(75, 192, 192)',
												'rgba(75, 192, 192)',
												'rgba(75, 192, 192)',
												'rgba(75, 192, 192)',
												'rgba(75, 192, 192)',
												'rgba(75, 192, 192)',
												'rgba(75, 192, 192)',
												'rgba(75, 192, 192)',
												'rgba(75, 192, 192)',
												'rgba(75, 192, 192)',
												'rgba(75, 192, 192)',
												'rgba(75, 192, 192)',
											
											  ],
										data: result.data7,
										// stack: 'Stack 3'
									},
									{
										label : "P4 Tidak", 
										backgroundColor : [
											'rgba(75, 192, 192, 0.5)',
											'rgba(75, 192, 192, 0.5)',
											'rgba(75, 192, 192, 0.5)',
											'rgba(75, 192, 192, 0.5)',
											'rgba(75, 192, 192, 0.5)',
											'rgba(75, 192, 192, 0.5)',
											'rgba(75, 192, 192, 0.5)',
											'rgba(75, 192, 192, 0.5)',
											'rgba(75, 192, 192, 0.5)',
											'rgba(75, 192, 192, 0.5)',
											'rgba(75, 192, 192, 0.5)',
											'rgba(75, 192, 192, 0.5)',
										],
											borderColor: [
												'rgba(75, 192, 192)',
												'rgba(75, 192, 192)',
												'rgba(75, 192, 192)',
												'rgba(75, 192, 192)',
												'rgba(75, 192, 192)',
												'rgba(75, 192, 192)',
												'rgba(75, 192, 192)',
												'rgba(75, 192, 192)',
												'rgba(75, 192, 192)',
												'rgba(75, 192, 192)',
												'rgba(75, 192, 192)',
												'rgba(75, 192, 192)',
											
											  ],
										data: result.data8,
										// stack: 'Stack 3'
									},{
										label : "P5 Ya", 
										backgroundColor : [
											'rgba(153, 102, 255)',
											'rgba(153, 102, 255)',
											'rgba(153, 102, 255)',
											'rgba(153, 102, 255)',
											'rgba(153, 102, 255)',
											'rgba(153, 102, 255)',
											'rgba(153, 102, 255)',
											'rgba(153, 102, 255)',
											'rgba(153, 102, 255)',
											'rgba(153, 102, 255)',
											'rgba(153, 102, 255)',
											'rgba(153, 102, 255)',
										],
											borderColor: [
												'rgba(153, 102, 255)',
												'rgba(153, 102, 255)',
												'rgba(153, 102, 255)',
												'rgba(153, 102, 255)',
												'rgba(153, 102, 255)',
												'rgba(153, 102, 255)',
												'rgba(153, 102, 255)',
												'rgba(153, 102, 255)',
												'rgba(153, 102, 255)',
												'rgba(153, 102, 255)',
												'rgba(153, 102, 255)',
												'rgba(153, 102, 255)',
											
											  ],
										data: result.data9,
										// stack: 'Stack 4'
									},
									{
										label : "P5 Tidak", 
										backgroundColor : [
											'rgba(153, 102, 255, 0.5)',
											'rgba(153, 102, 255, 0.5)',
											'rgba(153, 102, 255, 0.5)',
											'rgba(153, 102, 255, 0.5)',
											'rgba(153, 102, 255, 0.5)',
											'rgba(153, 102, 255, 0.5)',
											'rgba(153, 102, 255, 0.5)',
											'rgba(153, 102, 255, 0.5)',
											'rgba(153, 102, 255, 0.5)',
											'rgba(153, 102, 255, 0.5)',
											'rgba(153, 102, 255, 0.5)',
											'rgba(153, 102, 255, 0.5)',
										],
											borderColor: [
												'rgba(153, 102, 255)',
												'rgba(153, 102, 255)',
												'rgba(153, 102, 255)',
												'rgba(153, 102, 255)',
												'rgba(153, 102, 255)',
												'rgba(153, 102, 255)',
												'rgba(153, 102, 255)',
												'rgba(153, 102, 255)',
												'rgba(153, 102, 255)',
												'rgba(153, 102, 255)',
												'rgba(153, 102, 255)',
												'rgba(153, 102, 255)',
												
											  ],
										data: result.data10,
										// stack: 'Stack 4'
									},
								],
								},
								options: {
									scales: {
										yAxes: [{
											// stacked : true,
											display: true,
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
