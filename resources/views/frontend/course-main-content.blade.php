 
 <div class="rbt-lesson-rightsidebar overflow-hidden lesson-video">
    <div class="lesson-top-bar">
        <div class="lesson-top-left">
            <div class="rbt-lesson-toggle">
                <button class="lesson-toggle-active btn-round-white-opacity" title="Toggle Sidebar"><i class="feather-arrow-left"></i></button>
            </div>
            <h5>The Complete Histudy 2023: From Zero to Expert!</h5>
        </div>
        <div class="lesson-top-right">
            <div class="rbt-btn-close">
                <a href="course-details.html" title="Go Back to Course" class="rbt-round-btn"><i class="feather-x"></i></a>
            </div>
        </div>
    </div>
    <div class="inner">
        <div style="width:100%; height:100%;" class="player plyr__video-embed rbtplayer" id="player">
          

        </div>
        <div class="content">
            <div class="section-title">
                <h4>About Lesson</h4>
                <p>Let us analyze the greatest hits of the past and learn what makes these tracks so
                    special. </p>
            </div>
        </div>
    </div>

    <div class="bg-color-extra2 ptb--15 overflow-hidden">
        <div class="rbt-button-group">

            <a class="rbt-btn icon-hover icon-hover-left btn-md bg-primary-opacity" href="#">
                <span class="btn-icon"><i class="feather-arrow-left"></i></span>
                <span class="btn-text">Previous</span>
            </a>

            <a id="completionButton" style="display: none;" class="rbt-btn icon-hover btn-md" href="#">
                <span class="btn-text">Next</span>
                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
            </a>
            
            

        </div>
    </div>

</div>





<script>
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

function showCompletionButton() {
  document.getElementById('completionButton').style.display = 'block';
}

// Function to record video completion
function recordVideoCompletion(videoId) {
  var userId = getLoggedInUserId(); // Get the logged-in user's ID
  var data = {
    userId: userId,
    videoId: videoId
  };

  // Display an alert to indicate the request is being sent
  alert('Sending AJAX request to record video completion...');

  $.ajax({
    type: 'POST',
    url: 'record_completion.php',
    data: data,
    success: function(response) {
      console.log(response); // Display server response
    },
    error: function(xhr, status, error) {
      console.error('Error:', error);
    }
  });
}

</script>
<script src="https://www.youtube.com/iframe_api"></script>

