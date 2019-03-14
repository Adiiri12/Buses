  newFunction();
function newFunction() {
    var date = new Date();
    date.setDate(date.getDate());
    $('#date').datepicker({
        startDate: date
    });
}

