$( document ).ready(function() {
    $('div[data-type="label"]').each(function(index) {
        switch($(this).attr('data-subtype')) {
            case "Temperature":
                $(this).attr('data-get', 'temperature');
                $(this).attr('data-unit', ' %B0C%0A');
                $(this).attr('data-limits', '[0,10,15,21,23]');
                $(this).attr('data-colors', '["#ffffff","#6699ff","#AA6900","#AD3333","#FF0000"]');
                break;
            case "Humidity":
                $(this).attr('data-get', 'humidity');
                $(this).attr('data-unit', ' %');
                $(this).attr('data-limits', '[-1,20,39,59,65,79]');
                $(this).attr('data-colors', '["#ffffff","#6699ff","#AA6900","FFCC80","#AD3333","#FF0000"]');
                break;
        }
    });
    
    
    $('div[data-type="switch"]').each(function(index) {
        switch($(this).attr('data-subtype')) {
            case "PRESENCE":
                $(this).attr('data-get-on', $(this).attr('data-get-on') || 'present');
                $(this).attr('data-get-off', $(this).attr('data-get-off') || 'absent');
                $(this).attr('data-set-on', '');
                $(this).attr('data-set-off', '');
                break;
            case "MilightDevice":
                $(this).attr('data-get-on', $(this).attr('data-get-on') || 'on.*');
                $(this).attr('data-get-off', $(this).attr('data-get-off') || 'off');
                $(this).attr('data-set-on', $(this).attr('data-set-off') || 'on');
                $(this).attr('data-set-off', $(this).attr('data-set-off') || 'off');
                break;
            case "dummy10":
                $(this).attr('data-get-on', $(this).attr('data-get-on') || '1');
                $(this).attr('data-get-off', $(this).attr('data-get-off') || '0');
                $(this).attr('data-set-on', $(this).attr('data-set-on') || '1');
                $(this).attr('data-set-off', $(this).attr('data-set-off') || '0');
                break;
        }
     });
     
    $('div[data-type="contact"]').each(function(index) {
        switch($(this).attr('data-subtype')) {
            case "MAX":
                $(this).attr('data-get-on', $(this).attr('data-get-on') || 'opened');
                break;
        }
    });
    
    $('div[data-type="thermostat"]').each(function(index) {
        switch($(this).attr('data-subtype')) {
            case "MAX":
                $(this).attr('data-get', $(this).attr('data-get') || 'desiredTemperature');
                $(this).attr('data-set', $(this).attr('data-set') || 'desiredTemperature');
                $(this).attr('data-temp', $(this).attr('data-temp') || 'temperature');
                // $(this).attr('data-valve', $(this).attr('data-valve') || 'valveposition');
                break;
        }
    });

    
});