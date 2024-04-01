<?php

# Brahiam Montero -> 2022-2034
require("../common/template.php");
define('CURRENT_PAGE', 'home');
template::apply();

?>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 h-auto">
	<div class="flex w-full mt-10">

		<div class="max-w-sm w-full bg-white rounded-lg shadowp-4 md:p-6">
			<div class="flex justify-between">
				<div>
					<h5 class="leading-none text-3xl font-bold text-gray-900">$12,423</h5>
					<p class="text-base font-normal text-gray-500">Sales this week</p>
				</div>
				<div class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500text-center">
					12%
					<svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4" />
					</svg>
				</div>
			</div>
			<div id="area-chart"></div>
			<div class="grid grid-cols-1 items-center border-gray-200 border-tjustify-between">
				<div class="flex justify-between items-center pt-5">
					<!-- Button -->
					<button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown" data-dropdown-placement="bottom" class="text-sm font-medium text-gray-500 hover:text-gray-900 text-center inline-flex items-center" type="button">
						Last 7 days
						<svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
						</svg>
					</button>
					<!-- Dropdown menu -->
					<div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
						<ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
							<li>
								<a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Yesterday</a>
							</li>
							<li>
								<a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Today</a>
							</li>
							<li>
								<a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Last 7 days</a>
							</li>
							<li>
								<a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Last 30 days</a>
							</li>
							<li>
								<a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Last 90 days</a>
							</li>
						</ul>
					</div>
					<a href="#" class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 hover:bg-gray-100 px-3 py-2">
						Users Report
						<svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
						</svg>
					</a>
				</div>
			</div>
		</div>

		<script>
			var options = {
				chart: {
					height: "100%",
					maxWidth: "100%",
					type: "area",
					fontFamily: "Inter, sans-serif",
					dropShadow: {
						enabled: false,
					},
					toolbar: {
						show: false,
					},
				},
				tooltip: {
					enabled: true,
					x: {
						show: false,
					},
				},
				fill: {
					type: "gradient",
					gradient: {
						opacityFrom: 0.55,
						opacityTo: 0,
						shade: "#1C64F2",
						gradientToColors: ["#1C64F2"],
					},
				},
				dataLabels: {
					enabled: false,
				},
				stroke: {
					width: 6,
				},
				grid: {
					show: false,
					strokeDashArray: 4,
					padding: {
						left: 2,
						right: 2,
						top: 0
					},
				},
				series: [{
					name: "New users",
					data: [6500, 6418, 6456, 6526, 6356, 6456],
					color: "#1A56DB",
				}, ],
				xaxis: {
					categories: ['01 February', '02 February', '03 February', '04 February', '05 February', '06 February', '07 February'],
					labels: {
						show: false,
					},
					axisBorder: {
						show: false,
					},
					axisTicks: {
						show: false,
					},
				},
				yaxis: {
					show: false,
				},
			}

			if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
				const chart = new ApexCharts(document.getElementById("area-chart"), options);
				chart.render();
			}
		</script>

		<div class="max-w-sm w-full bg-white rounded-lg shadow  p-4 md:p-6">
			<div class="flex justify-between">
				<div>
					<h5 class="leading-none text-3xl font-bold text-gray-900  pb-2">$12,423</h5>
					<p class="text-base font-normal text-gray-500 ">Sales this week</p>
				</div>
				<div class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500  text-center">
					23%
					<svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4" />
					</svg>
				</div>
			</div>
			<div id="data-series-chart"></div>
			<div class="grid grid-cols-1 items-center border-gray-200 border-t  justify-between mt-5">
				<div class="flex justify-between items-center pt-5">
					<!-- Button -->
					<button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown" data-dropdown-placement="bottom" class="text-sm font-medium text-gray-500  hover:text-gray-900 text-center inline-flex items-center " type="button">
						Last 7 days
						<svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
						</svg>
					</button>
					<!-- Dropdown menu -->
					<div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
						<ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
							<li>
								<a href="#" class="block px-4 py-2 hover:bg-gray-100  ">Yesterday</a>
							</li>
							<li>
								<a href="#" class="block px-4 py-2 hover:bg-gray-100  ">Today</a>
							</li>
							<li>
								<a href="#" class="block px-4 py-2 hover:bg-gray-100  ">Last 7 days</a>
							</li>
							<li>
								<a href="#" class="block px-4 py-2 hover:bg-gray-100  ">Last 30 days</a>
							</li>
							<li>
								<a href="#" class="block px-4 py-2 hover:bg-gray-100  ">Last 90 days</a>
							</li>
						</ul>
					</div>
					<a href="#" class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700   hover:bg-gray-100    px-3 py-2">
						Sales Report
						<svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
						</svg>
					</a>
				</div>
			</div>
		</div>

		<script>
			var options = {
				// add data series via arrays, learn more here: https://apexcharts.com/docs/series/
				series: [{
						name: "Developer Edition",
						data: [1500, 1418, 1456, 1526, 1356, 1256],
						color: "#1A56DB",
					},
					{
						name: "Designer Edition",
						data: [643, 413, 765, 412, 1423, 1731],
						color: "#7E3BF2",
					},
				],
				chart: {
					height: "100%",
					maxWidth: "100%",
					type: "area",
					fontFamily: "Inter, sans-serif",
					dropShadow: {
						enabled: false,
					},
					toolbar: {
						show: false,
					},
				},
				tooltip: {
					enabled: true,
					x: {
						show: false,
					},
				},
				legend: {
					show: false
				},
				fill: {
					type: "gradient",
					gradient: {
						opacityFrom: 0.55,
						opacityTo: 0,
						shade: "#1C64F2",
						gradientToColors: ["#1C64F2"],
					},
				},
				dataLabels: {
					enabled: false,
				},
				stroke: {
					width: 6,
				},
				grid: {
					show: false,
					strokeDashArray: 4,
					padding: {
						left: 2,
						right: 2,
						top: 0
					},
				},
				xaxis: {
					categories: ['01 February', '02 February', '03 February', '04 February', '05 February', '06 February', '07 February'],
					labels: {
						show: false,
					},
					axisBorder: {
						show: false,
					},
					axisTicks: {
						show: false,
					},
				},
				yaxis: {
					show: false,
					labels: {
						formatter: function(value) {
							return '$' + value;
						}
					}
				},
			}

			if (document.getElementById("data-series-chart") && typeof ApexCharts !== 'undefined') {
				const chart = new ApexCharts(document.getElementById("data-series-chart"), options);
				chart.render();
			}
		</script>


		<div class="max-w-sm w-full bg-white rounded-lg shadow  p-4 md:p-6">
			<div class="flex justify-between mb-5">
				<div class="grid gap-4 grid-cols-2">
					<div>
						<h5 class="inline-flex items-center text-gray-500  leading-none font-normal mb-2">Clicks
							<svg data-popover-target="clicks-info" data-popover-placement="bottom" class="w-3 h-3 text-gray-400 hover:text-gray-900  cursor-pointer ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
								<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
							</svg>
							<div data-popover id="clicks-info" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72   ">
								<div class="p-3 space-y-2">
									<h3 class="font-semibold text-gray-900 ">Clicks growth - Incremental</h3>
									<p>Report helps navigate cumulative growth of community activities. Ideally, the chart should have a growing trend, as stagnating chart signifies a significant decrease of community activity.</p>
									<h3 class="font-semibold text-gray-900 ">Calculation</h3>
									<p>For each date bucket, the all-time volume of activities is calculated. This means that activities in period n contain all activities up to period n, plus the activities generated by your community in period.</p>
									<a href="#" class="flex items-center font-medium text-blue-600   hover:text-blue-700 hover:underline">Read more <svg class="w-2 h-2 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
											<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
										</svg></a>
								</div>
								<div data-popper-arrow></div>
							</div>
						</h5>
						<p class="text-gray-900  text-2xl leading-none font-bold">42,3k</p>
					</div>
					<div>
						<h5 class="inline-flex items-center text-gray-500  leading-none font-normal mb-2">CPC
							<svg data-popover-target="cpc-info" data-popover-placement="bottom" class="w-3 h-3 text-gray-400 hover:text-gray-900  cursor-pointer ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
								<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
							</svg>
							<div data-popover id="cpc-info" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72   ">
								<div class="p-3 space-y-2">
									<h3 class="font-semibold text-gray-900 ">CPC growth - Incremental</h3>
									<p>Report helps navigate cumulative growth of community activities. Ideally, the chart should have a growing trend, as stagnating chart signifies a significant decrease of community activity.</p>
									<h3 class="font-semibold text-gray-900 ">Calculation</h3>
									<p>For each date bucket, the all-time volume of activities is calculated. This means that activities in period n contain all activities up to period n, plus the activities generated by your community in period.</p>
									<a href="#" class="flex items-center font-medium text-blue-600   hover:text-blue-700 hover:underline">Read more <svg class="w-2 h-2 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
											<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
										</svg></a>
								</div>
								<div data-popper-arrow></div>
							</div>
						</h5>
						<p class="text-gray-900  text-2xl leading-none font-bold">$5.40</p>
					</div>
				</div>
				<div>
					<button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown" data-dropdown-placement="bottom" type="button" class="px-3 py-2 inline-flex items-center text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200      ">Last week <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
						</svg></button>
					<div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
						<ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
							<li>
								<a href="#" class="block px-4 py-2 hover:bg-gray-100  ">Yesterday</a>
							</li>
							<li>
								<a href="#" class="block px-4 py-2 hover:bg-gray-100  ">Today</a>
							</li>
							<li>
								<a href="#" class="block px-4 py-2 hover:bg-gray-100  ">Last 7 days</a>
							</li>
							<li>
								<a href="#" class="block px-4 py-2 hover:bg-gray-100  ">Last 30 days</a>
							</li>
							<li>
								<a href="#" class="block px-4 py-2 hover:bg-gray-100  ">Last 90 days</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="line-chart"></div>
			<div class="grid grid-cols-1 items-center border-gray-200 border-t  justify-between mt-2.5">
				<div class="pt-5">
					<a href="#" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center   ">
						<svg class="w-3.5 h-3.5 text-white me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
							<path d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2Zm-3 15H4.828a1 1 0 0 1 0-2h6.238a1 1 0 0 1 0 2Zm0-4H4.828a1 1 0 0 1 0-2h6.238a1 1 0 1 1 0 2Z" />
							<path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z" />
						</svg>
						View full report
					</a>
				</div>
			</div>
		</div>


		<script>
			var options = {
				chart: {
					height: "100%",
					maxWidth: "100%",
					type: "line",
					fontFamily: "Inter, sans-serif",
					dropShadow: {
						enabled: false,
					},
					toolbar: {
						show: false,
					},
				},
				tooltip: {
					enabled: true,
					x: {
						show: false,
					},
				},
				dataLabels: {
					enabled: false,
				},
				stroke: {
					width: 6,
				},
				grid: {
					show: true,
					strokeDashArray: 4,
					padding: {
						left: 2,
						right: 2,
						top: -26
					},
				},
				series: [{
						name: "Clicks",
						data: [6500, 6418, 6456, 6526, 6356, 6456],
						color: "#1A56DB",
					},
					{
						name: "CPC",
						data: [6456, 6356, 6526, 6332, 6418, 6500],
						color: "#7E3AF2",
					},
				],
				legend: {
					show: false
				},
				stroke: {
					curve: 'smooth'
				},
				xaxis: {
					categories: ['01 Feb', '02 Feb', '03 Feb', '04 Feb', '05 Feb', '06 Feb', '07 Feb'],
					labels: {
						show: true,
						style: {
							fontFamily: "Inter, sans-serif",
							cssClass: 'text-xs font-normal fill-gray-500'
						}
					},
					axisBorder: {
						show: false,
					},
					axisTicks: {
						show: false,
					},
				},
				yaxis: {
					show: false,
				},
			}

			if (document.getElementById("line-chart") && typeof ApexCharts !== 'undefined') {
				const chart = new ApexCharts(document.getElementById("line-chart"), options);
				chart.render();
			}
		</script>
		<!-- 
		<div class="max-w-sm w-full bg-white rounded-lg shadow  p-4 md:p-6">
			<div class="flex justify-between pb-4 mb-4 border-b border-gray-200 ">
				<div class="flex items-center">
					<div class="w-12 h-12 rounded-lg bg-gray-100  flex items-center justify-center me-3">
						<svg class="w-6 h-6 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
							<path d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z" />
							<path d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z" />
						</svg>
					</div>
					<div>
						<h5 class="leading-none text-2xl font-bold text-gray-900  pb-1">3.4k</h5>
						<p class="text-sm font-normal text-gray-500 ">Leads generated per week</p>
					</div>
				</div>
				<div>
					<span class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md  ">
						<svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4" />
						</svg>
						42.5%
					</span>
				</div>
			</div>

			<div class="grid grid-cols-2">
				<dl class="flex items-center">
					<dt class="text-gray-500  text-sm font-normal me-1">Money spent:</dt>
					<dd class="text-gray-900 text-sm  font-semibold">$3,232</dd>
				</dl>
				<dl class="flex items-center justify-end">
					<dt class="text-gray-500  text-sm font-normal me-1">Conversion rate:</dt>
					<dd class="text-gray-900 text-sm  font-semibold">1.2%</dd>
				</dl>
			</div>

			<div id="column-chart"></div>
			<div class="grid grid-cols-1 items-center border-gray-200 border-t  justify-between">
				<div class="flex justify-between items-center pt-5">
		<button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown" data-dropdown-placement="bottom" class="text-sm font-medium text-gray-500  hover:text-gray-900 text-center inline-flex items-center " type="button">
			Last 7 days
			<svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
			</svg>
		</button>
		<div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
			<ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
				<li>
					<a href="#" class="block px-4 py-2 hover:bg-gray-100  ">Yesterday</a>
				</li>
				<li>
					<a href="#" class="block px-4 py-2 hover:bg-gray-100  ">Today</a>
				</li>
				<li>
					<a href="#" class="block px-4 py-2 hover:bg-gray-100  ">Last 7 days</a>
				</li>
				<li>
					<a href="#" class="block px-4 py-2 hover:bg-gray-100  ">Last 30 days</a>
				</li>
				<li>
					<a href="#" class="block px-4 py-2 hover:bg-gray-100  ">Last 90 days</a>
				</li>
			</ul>
		</div>
		<a href="#" class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700   hover:bg-gray-100    px-3 py-2">
			Leads Report
			<svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
			</svg>
		</a>
	</div>
</div>
</div>
<script>
	var options = {
		colors: ["#1A56DB", "#FDBA8C"],
		series: [{
				name: "Organic",
				color: "#1A56DB",
				data: [{
						x: "Mon",
						y: 231
					},
					{
						x: "Tue",
						y: 122
					},
					{
						x: "Wed",
						y: 63
					},
					{
						x: "Thu",
						y: 421
					},
					{
						x: "Fri",
						y: 122
					},
					{
						x: "Sat",
						y: 323
					},
					{
						x: "Sun",
						y: 111
					},
				],
			},
			{
				name: "Social media",
				color: "#FDBA8C",
				data: [{
						x: "Mon",
						y: 232
					},
					{
						x: "Tue",
						y: 113
					},
					{
						x: "Wed",
						y: 341
					},
					{
						x: "Thu",
						y: 224
					},
					{
						x: "Fri",
						y: 522
					},
					{
						x: "Sat",
						y: 411
					},
					{
						x: "Sun",
						y: 243
					},
				],
			},
		],
		chart: {
			type: "bar",
			height: "320px",
			fontFamily: "Inter, sans-serif",
			toolbar: {
				show: false,
			},
		},
		plotOptions: {
			bar: {
				horizontal: false,
				columnWidth: "70%",
				borderRadiusApplication: "end",
				borderRadius: 8,
			},
		},
		tooltip: {
			shared: true,
			intersect: false,
			style: {
				fontFamily: "Inter, sans-serif",
			},
		},
		states: {
			hover: {
				filter: {
					type: "darken",
					value: 1,
				},
			},
		},
		stroke: {
			show: true,
			width: 0,
			colors: ["transparent"],
		},
		grid: {
			show: false,
			strokeDashArray: 4,
			padding: {
				left: 2,
				right: 2,
				top: -14
			},
		},
		dataLabels: {
			enabled: false,
		},
		legend: {
			show: false,
		},
		xaxis: {
			floating: false,
			labels: {
				show: true,
				style: {
					fontFamily: "Inter, sans-serif",
					cssClass: 'text-xs font-normal fill-gray-500'
				}
			},
			axisBorder: {
				show: false,
			},
			axisTicks: {
				show: false,
			},
		},
		yaxis: {
			show: false,
		},
		fill: {
			opacity: 1,
		},
	}

	if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
		const chart = new ApexCharts(document.getElementById("column-chart"), options);
		chart.render();
	}
</script>

</div>
</div>



<script>
	const options = {
		// add data series via arrays, learn more here: https://apexcharts.com/docs/series/
		series: [{
				name: "Developer Edition",
				data: [1500, 1418, 1456, 1526, 1356, 1256],
				color: "#1A56DB",
			},
			{
				name: "Designer Edition",
				data: [643, 413, 765, 412, 1423, 1731],
				color: "#7E3BF2",
			},
		],
		chart: {
			height: "100%",
			maxWidth: "100%",
			type: "area",
			fontFamily: "Inter, sans-serif",
			dropShadow: {
				enabled: false,
			},
			toolbar: {
				show: false,
			},
		},
		tooltip: {
			enabled: true,
			x: {
				show: false,
			},
		},
		legend: {
			show: false
		},
		fill: {
			type: "gradient",
			gradient: {
				opacityFrom: 0.55,
				opacityTo: 0,
				shade: "#1C64F2",
				gradientToColors: ["#1C64F2"],
			},
		},
		dataLabels: {
			enabled: false,
		},
		stroke: {
			width: 6,
		},
		grid: {
			show: false,
			strokeDashArray: 4,
			padding: {
				left: 2,
				right: 2,
				top: 0
			},
		},
		xaxis: {
			categories: ['01 February', '02 February', '03 February', '04 February', '05 February', '06 February', '07 February'],
			labels: {
				show: false,
			},
			axisBorder: {
				show: false,
			},
			axisTicks: {
				show: false,
			},
		},
		yaxis: {
			show: false,
			labels: {
				formatter: function(value) {
					return '$' + value;
				}
			}
		},
	}

	if (document.getElementById("data-series-chart") && typeof ApexCharts !== 'undefined') {
		const chart = new ApexCharts(document.getElementById("data-series-chart"), options);
		chart.render();
	}
</script> -->