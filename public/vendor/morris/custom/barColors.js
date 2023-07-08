// Morris Bar Colors
Morris.Bar({
	element: 'barColors',
	data: [
		{x: 'Mon', Sales: 6},
		{x: 'Tue', Sales: 1},
		{x: 'Wed', Sales: 2},
		{x: 'Thu', Sales: 3},
		{x: 'Fri', Sales: 2},
		{x: 'Sat', Sales: 4},
		{x: 'Sun', Sales: 7},	],
	xkey: 'x',
	ykeys: ['Sales'],
	labels: ['Sales'],
	resize: true,
	gridLineColor: "#e4e6f2",
	hideHover: "auto",
	barColors:['#4266b2', '#65ab53', '#ecb94a', '#ff9f41'],
});