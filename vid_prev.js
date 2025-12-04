window.addEventListener('load', function() {
    var video = document.getElementById('bg-vid');
    var button = document.getElementById('mute-unmute-btn');

    // Ensure the video plays when the page loads
    video.play();

    // Event listener for the button click
    button.addEventListener('click', function() {
        if (video.muted) {
            video.muted = false; // Unmute the video
            button.innerText = 'Mute'; // Change button text to "Mute"
        } else {
            video.muted = true; // Mute the video
            button.innerText = 'Unmute'; // Change button text to "Unmute"
        }
    });
});