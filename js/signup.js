$(function(){
    
    'use strict';
    $('.textF').on('focusout',function () {
         if($(this).val() != '') {
             $(this).parent().addClass('has-data');
         }  else {
             $(this).parent.removeClass('has-data');
         }
    });
    
});

$(function(){
    var labelID;
    $('label').click(function(){
       labelID = $(this).attr('for') ;
        $('#'+labelID).trigger('click');
        
    });
    
});

var check = function() {
                if (document.getElementById('Pass').value == '' || document.getElementById('ConfirmPass').value == ''){
                    document.getElementById('message').style.visibility = 'hidden';
                }
                else if (document.getElementById('Pass').value ==
                         document.getElementById('ConfirmPass').value) {
                    document.getElementById('message').classList.remove('fa-times');
                    document.getElementById('message').classList.add('fa-check');
                    document.getElementById('message').style.color = 'green';
                    document.getElementById('message').style.visibility = 'visible';
                } else {
                    document.getElementById('message').classList.remove('fa-check');
                    document.getElementById('message').classList.add('fa-times');
                    document.getElementById('message').style.color = 'red';
                    document.getElementById('message').style.visibility = 'visible';
                }
            }