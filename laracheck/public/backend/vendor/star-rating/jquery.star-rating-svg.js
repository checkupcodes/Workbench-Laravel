$(document).ready(function(){$('#stars li').on('mouseover',function(){var onStar=parseInt($(this).data('value'),10);$(this).parent().children('li.star').each(function(e){if(e<onStar){$(this).addClass('hover');}
else{$(this).removeClass('hover');}});}).on('mouseout',function(){$(this).parent().children('li.star').each(function(e){$(this).removeClass('hover');});});$('#stars li').on('click',function(){var onStar=parseInt($(this).data('value'),10);var stars=$(this).parent().children('li.star');for(i=0;i<stars.length;i++){$(stars[i]).removeClass('selected');}
for(i=0;i<onStar;i++){$(stars[i]).addClass('selected');}
var ratingValue=parseInt($('#stars li.selected').last().data('value'),10);var msg="";if(ratingValue>1){msg="Thanks! You rated this "+ratingValue+" stars.";}
else{msg="We will improve ourselves. You rated this "+ratingValue+" stars.";}
responseMessage(msg);});});function responseMessage(msg){alert(msg);}