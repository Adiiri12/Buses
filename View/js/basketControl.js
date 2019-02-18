
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