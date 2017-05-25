$(document).ready(function()
{
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    var url = "../../osmeetinglog/";
        
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        defaultDate: new Date(y, m, d),
        editable: true,
        eventLimit: true,
        events: [
            /*
            {
                title: 'All Day Event',
                start: new Date(y, m, 1)
            },
            {
                title: 'Long Event',
                start: new Date(y, m, d-5),
                end: new Date(y, m, d-2)
            },
            */
            {
                id: 999,
                title: 'Meeting',
                /*start: new Date(y, m, d+1, 20, 21),*/
                start: new Date(y, m, 1, 21, 24),
                url: url,
                allDay: false
            },
            {
                id: 999,
                title: 'Meeting',
                /*start: new Date(y, m, d+1, 20, 21),*/
                start: new Date(y, m, 8, 21, 24),
                url: url,
                allDay: false
            },
            {
                id: 999,
                title: 'Meeting',
                start: new Date(y, m, 15, 21, 24),
                url: url,
                allDay: false
            },
            {
                id: 999,
                title: 'Meeting',
                start: new Date(y, m, 22, 21, 24),
                url: url,
                allDay: false
            },
            {
                id: 999,
                title: 'Meeting',
                start: new Date(y, m, 29, 21, 24),
                url: url,
                allDay: false
            },
            {
                id: 999,
                title: 'Meeting',
                start: new Date(y, m+1, 6, 21, 24),
                url: url,
                allDay: false
            },
            {
                title: 'Dj Phil Birthday Party \r\n Tech House',
                start: new Date(y, m+2, 12, 12, 24),
                url: url,
                allDay: false
            },
            /*
            {
                id: 999,
                title: 'Meeting',
                start: new Date(y, m, d+15, 20, 21),
                allDay: false
            },
            {
                title: 'Meeting',
                start: new Date(y, m, d, 10, 30),
                allDay: false
            }, 
            {
                title: 'Lunch',
                start: new Date(y, m, d, 12, 0),
                end: new Date(y, m, d, 14, 0),
                allDay: false
            },
            {
                title: 'Click for Google',
                start: new Date(y, m, 28),
                end: new Date(y, m, 29),
                url: 'http://google.com/'
            }
            */
        ]
	});
});
