// initialize your calendar, once the page's DOM is ready
$(document).ready(function() {

    $("#calendar").evoCalendar({
        theme: 'Blue Coral',
        eventHeaderFormat: 'd MM ,yyyy'
    });
    $('#calendar').evoCalendar('toggleEventList');
    $("#calendar").evoCalendar('addCalendarEvent', [{
            id: '09nk7Ts1',
            name: "มีนา",
            date: "May/15/2021",
            type: "isAnimal",
            color: 'rgba(255, 57, 57)',
            idCow: "11",
            staus: "บันทึกเป็นสัตว์จริง"
        }, {
            id: '09nk7Ts2',
            name: "เมษา",
            date: "May/15/2021",
            type: "isAnimal",
            color: 'rgba(255, 57, 57)',
            idCow: "12",
            staus: "บันทึกเป็นสัตว์จริง"
        }, {
            id: '09nk7Ts3',
            name: "พฤษ",
            date: "May/15/2021",
            type: "anticipate",
            color: 'rgba(255, 136, 24)',
            idCow: "13",
            staus: "คาดการณ์"
        }, {
            id: '09nk7Ts4',
            name: "มิย",
            date: "May/15/2021",
            type: "safe",
            color: 'rgba(99, 216, 103)',
            idCow: "14",
            staus: "ปลอดภัย"
                // ,everyYear: true
        }

    ]);
    $('#calendar').on('selectDate', function(event, newDate, oldDate) {   
        $("#calendar").removeClass("event-hide");
    });

    $('#calendar').on('selectEvent', function(event, activeEvent) {     
        window.open('./DryMilk-Detail.php', '_self');
    });

});