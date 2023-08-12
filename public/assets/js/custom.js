(function (window, document, $, undefined) {
    'use strict';
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    var player;

    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            
            videoId: '8U7b2FAsVEo',
            playerVars: {
                    controls: 0,        // Hide player controls
                    disablekb: 1,       // Disable keyboard controls
                    rel: 0,             // Disable related videos at the end
                    showinfo: 0,        // Hide video title and uploader info
                    modestbranding: 1,  // Hide YouTube logo
                    fs: 0               // Hide fullscreen button
                },
            events: {
            'onStateChange': onPlayerStateChange
            }
        });
    }

    function onPlayerStateChange(event) {
        if (event.data === YT.PlayerState.ENDED) {
          showCompletionButton();
        }
    }

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