
var vehicles =[];

function addToBasket (integer) {
    vehicles.push(integer);

    for(i=0; i<vehicles.length;i++)
    {
        console.log(vehicles[i]);
    }
}

function checkID(integer) {
 if(vehicles.includes(integer)) {
     return true;
 }
 else {
     return false;
 }
}
 
 newFunction();
function newFunction() {
    var date = new Date();
    date.setDate(date.getDate());
    $('#date').datepicker({
        startDate: date
    });
}
$('.btn-expand-collapse').click(function() {
    $('.navbar-primary').toggleClass('collapsed');
});

