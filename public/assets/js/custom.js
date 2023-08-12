(function (window, document, $, undefined) {
    'use strict';
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#course_video').on('ended',function(){
        $('#next-video').removeClass("d-none");
        $('#quiz-link').removeClass("d-none");
    });

    var timeout;
    $('#course_video').on('playing pause',function(e){
        var v = this;
        clearTimeout(timeout)
        console.log(Math.trunc(v.currentTime))
        updateDuration(Math.trunc(v.currentTime))
        if (e.type === "playing") {
            timeout = setInterval(function() {
                console.log(Math.trunc(v.currentTime))
                updateDuration(Math.trunc(v.currentTime))
            }, 5000)
        }
    });
    function updateDuration(time) {
        $.ajax({
            url:'update_duration',
            data:{'time':time},
            type:'POST',
            success: function(res){
                console.log(res);
            }
        });
    }
    $('#next-video').on('click', function(e) {
        location.reload(true);
    })
})(window, document, jQuery);