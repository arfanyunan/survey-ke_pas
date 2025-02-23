$(() => {
	const graf_ranap = document.getElementById('cnv_grafik_ranap');
	if (graf_ranap != null || graf_ranap != undefined) {
				$.ajax({
					url: base_url + "admin/grafik_ranap",
					method: "GET",
					dataType: "JSON",
					data: {
						tahun: $('#cmb_tahun').val()
					},
					success: (result) => {
							new Chart(graf_ranap, {
								type: 'bar',
								data: {
									labels: result.labels,
									datasets: [{
										label : "Bulan",
										backgroundColor : [
											'rgba(255, 99, 132, 0.5)',
											'rgba(255, 159, 64, 0.5)',
											'rgba(255, 205, 86, 0.5)',
											'rgba(75, 192, 192, 0.5)',
											'rgba(153, 102, 255, 0.5)',
											'rgba(201, 203, 207, 0.5)',
											'rgba(255, 99, 132, 0.5)',
											'rgba(255, 159, 64, 0.5)',
											'rgba(255, 205, 86, 0.5)',
											'rgba(75, 192, 192, 0.5)',
											'rgba(255, 99, 132, 0.5)',
											'rgba(255, 159, 64, 0.5)'],
											borderColor: [
												'rgb(255, 99, 132)',
												'rgb(255, 159, 64)',
												'rgb(255, 205, 86)',
												'rgb(75, 192, 192)',
												'rgb(153, 102, 255)',
												'rgb(201, 203, 207)',
												'rgb(255, 99, 132)',
												'rgb(255, 159, 64)',
												'rgb(255, 205, 86)',
												'rgb(75, 192, 192)',
												'rgb(255, 99, 132)',
												'rgb(255, 159, 64)'
											  ],
										data: result.data,
										borderWidth: 1
									}]
								},
								options: {
									scales: {
										yAxes: [{
											display: true,
											ticks: {
												suggestedMin: 0, 
												beginAtZero: true,   
												stepSize: 10
											}
										}]
									},
									
									plugins: {
										datalabels: {
											color: [
												'rgba(255, 99, 132)',
												'rgba(255, 159, 64)',
												'rgba(255, 205, 86)',
												'rgba(75, 192, 192)',
												'rgba(153, 102, 255)',
												'rgba(201, 203, 207)',
												'rgba(255, 99, 132)',
												'rgba(255, 159, 64)',
												'rgba(255, 205, 86)',
												'rgba(75, 192, 192)',
												'rgba(255, 99, 132)',
												'rgba(255, 159, 64)'],
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