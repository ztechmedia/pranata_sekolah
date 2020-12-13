<ul class="breadcrumb">
	<li class="active">Beranda</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-desktop"></span> Beranda</h2>
</div>

<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-3">
			<div class="widget widget-default widget-item-icon">
				<div class="widget-item-left">
					<span class="fa fa-user"></span>
				</div>
				<div class="widget-data">
					<div class="widget-int num-count"><?=$students?></div>
					<div class="widget-title">Siswa</div>
					<div class="widget-subtitle"></div>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="widget widget-default widget-item-icon">
				<div class="widget-item-left">
					<span class="fa fa-users"></span>
				</div>
				<div class="widget-data">
					<div class="widget-int num-count"><?=$teachers?></div>
					<div class="widget-title">Guru</div>
					<div class="widget-subtitle"></div>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="widget widget-default widget-item-icon">
				<div class="widget-item-left">
					<span class="fa fa-book"></span>
				</div>
				<div class="widget-data">
					<div class="widget-int num-count"><?=$subjects?></div>
					<div class="widget-title">Mata Pelajaran</div>
					<div class="widget-subtitle"></div>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="widget widget-default widget-item-icon">
				<div class="widget-item-left">
					<span class="fa fa-sitemap"></span>
				</div>
				<div class="widget-data">
					<div class="widget-int num-count"><?=$class?></div>
					<div class="widget-title">Kelas</div>
					<div class="widget-subtitle"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	// Highcharts.chart('month', {
	// 	chart: {
	// 		type: 'line'
	// 	},
	// 	title: {
	// 		text: 'Penjualan Bulanan'
	// 	},
	// 	subtitle: {
	// 		text: 'Net Musik Indonesia'
	// 	},
	// 	xAxis: {
	// 		categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
	// 	},
	// 	yAxis: {
	// 		title: {
	// 			text: 'Rupiah'
	// 		}
	// 	},
	// 	plotOptions: {
	// 		line: {
	// 			dataLabels: {
	// 				enabled: true
	// 			},
	// 			enableMouseTracking: false
	// 		}
	// 	},
	// 	series: [{
	// 		name: 'Penjualan',
	// 		data: ''
	// 	}]
	// });
</script>