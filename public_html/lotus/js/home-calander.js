$('#calendar').fullCalendar({
    dayClick:function(date){
        alert(date.getData());
    }
});