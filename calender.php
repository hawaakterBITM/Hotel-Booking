<?php include_once 'template/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='<?=BASE_URLI?>fullcalendar/fullcalendar.min.css' rel='stylesheet' />
<link href='<?=BASE_URLI?>fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='<?=BASE_URLI?>fullcalendar/lib/moment.min.js'></script>
<script src='<?=BASE_URLI?>fullcalendar/lib/jquery.min.js'></script>
<script src='<?=BASE_URLI?>fullcalendar/fullcalendar.min.js'></script>
<?php 
	$packageName = 'Luxary Cabin';
	$packageName1 = 'Original Cabin';
	$startDate1 = '2017-10-07';
	$startDate = '2017-10-05';
	$endDate1 = '2017-10-20';
	$endDate = '2017-10-16';
?>

<script>
	$(document).ready(function() {

		$('#calendar').fullCalendar({
			defaultDate: '2017-09-12',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2017-09-01'
				},
				{
					title: '<?=$packageName1?>',
					start: '<?=$startDate1?>',
					end: '<?=$endDate1?>'
				},
				{
					title: '<?=$packageName?>',
					start: '<?=$startDate?>',
					end: '<?=$endDate?>'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2017-09-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2017-09-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2017-09-11',
					end: '2017-09-13'
				},
				{
					title: 'Meeting',
					start: '2017-09-12T10:30:00',
					end: '2017-09-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2017-09-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2017-09-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2017-09-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2017-09-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2017-09-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2017-09-28'
				}
			]
		});
		
	});

</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>
</head>
<body>

	<div id='calendar'></div>

</body>
</html>
