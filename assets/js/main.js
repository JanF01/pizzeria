var $ = require('jquery');
require('bootstrap-sass');
require('../css/main.scss')

$(document).ready(function (){

$('#search').on('click',function(){
    $look = $('#dane').val();
    location.replace('/szukaj/'+$look+'/id/0');
    
});

$(".search").submit(function(e){
    e.preventDefault();
});

});