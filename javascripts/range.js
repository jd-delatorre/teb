
function addCommas(nStr)
{
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}

$(function() {
$( "#slider-range-amount" ).slider({
range: true,
min: 120000,
max: 10000000,
step:1000,
values: [ 120000, 10000000 ],
slide: function( event, ui ) {
$( "#amount" ).val( "$" + addCommas(ui.values[ 0 ]) + "  -  $" + addCommas(ui.values[ 1 ]) );
}
});
$( "#amount" ).val( "$" + $( "#slider-range-amount" ).slider( "values", 0 ).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") +
"  -  $" + $( "#slider-range-amount" ).slider( "values", 1 ).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") );
});

$(function() {
$( "#slider-range-bath" ).slider({
range: true,
min: 1,
max: 6,
step:1,
values: [ 1, 6 ],
slide: function( event, ui ) {
$( "#bath" ).val( ui.values[ 0 ]+" Bathroom " + " -  " + ui.values[ 1 ] + " Bathrooms " );
}
});
$( "#bath" ).val( $( "#slider-range-bath" ).slider( "values", 0 )+" Bathroom " +
" -  " + $( "#slider-range-bath" ).slider( "values", 1 )+" Bathrooms " );
});

$(function() {
$( "#slider-range-bedroom" ).slider({
range: true,
min: 1,
max: 6,
step:1,
values: [ 1, 6 ],
slide: function( event, ui ) {
$( "#bedroom" ).val( ui.values[ 0 ]+" Bedrooms " + " -  " + ui.values[ 1 ] + " Bedrooms " );
}
});
$( "#bedroom" ).val( $( "#slider-range-bedroom" ).slider( "values", 0 )+" Bedrooms " +
" -  " + $( "#slider-range-bedroom" ).slider( "values", 1 )+" Bedrooms " );
});

$(function() {
$( "#slider-range-sqft" ).slider({
range: true,
min: 100,
max: 2000,
step:50,
values: [ 100, 2000 ],
slide: function( event, ui ) {
$( "#sqft" ).val( addCommas(ui.values[ 0 ])+" Sq. Ft. " + " -  " + addCommas(ui.values[ 1 ]) + " Sq. Ft. " );
}
});
$( "#sqft" ).val( $( "#slider-range-sqft" ).slider( "values", 0 )+" Sq. Ft. " +
" -  " + $( "#slider-range-sqft" ).slider( "values", 1 )+" Sq. Ft. " );
});

$(function() {
$( "#slider-range-amountmap" ).slider({
range: true,
min: 120000,
max: 10000000,
step:1000,
values: [ 120000, 10000000 ],
slide: function( event, ui ) {
$( "#amountmap" ).val( "$" + addCommas(ui.values[ 0 ]) + "  -  $" + addCommas(ui.values[ 1 ]) );
}
});
$( "#amountmap" ).val( "$" + $( "#slider-range-amountmap" ).slider( "values", 0 ).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") +
"  -  $" + $( "#slider-range-amountmap" ).slider( "values", 1 ).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") );
});

$(function() {
$( "#slider-range-bathmap" ).slider({
range: true,
min: 1,
max: 6,
step:1,
values: [ 1, 6 ],
slide: function( event, ui ) {
$( "#bathmap" ).val( ui.values[ 0 ]+" Bathroom " + " -  " + ui.values[ 1 ] + " Bathrooms " );
}
});
$( "#bathmap" ).val( $( "#slider-range-bathmap" ).slider( "values", 0 )+" Bathroom " +
" -  " + $( "#slider-range-bathmap" ).slider( "values", 1 )+" Bathrooms " );
});

$(function() {
$( "#slider-range-bedroommap" ).slider({
range: true,
min: 1,
max: 6,
step:1,
values: [ 1, 6 ],
slide: function( event, ui ) {
$( "#bedroommap" ).val( ui.values[ 0 ]+" Bedrooms " + " -  " + ui.values[ 1 ] + " Bedrooms " );
}
});
$( "#bedroommap" ).val( $( "#slider-range-bedroommap" ).slider( "values", 0 )+" Bedrooms " +
" -  " + $( "#slider-range-bedroommap" ).slider( "values", 1 )+" Bedrooms " );
});

$(function() {
$( "#slider-range-sqftmap" ).slider({
range: true,
min: 100,
max: 2000,
step:50,
values: [ 400, 2000 ],
slide: function( event, ui ) {
$( "#sqftmap" ).val( addCommas(ui.values[ 0 ])+" Sq. Ft. " + " -  " + addCommas(ui.values[ 1 ]) + " Sq. Ft. " );
}
});
$( "#sqftmap" ).val( $( "#slider-range-sqftmap" ).slider( "values", 0 )+" Sq. Ft. " +
" -  " + $( "#slider-range-sqftmap" ).slider( "values", 1 )+" Sq. Ft. " );
});
