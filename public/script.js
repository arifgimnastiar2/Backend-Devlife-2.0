let camera_button = document.querySelector("#start-camera");
let video = document.querySelector("#video");
let click_button = document.querySelector("#click-photo");
let canvas = document.querySelector("#canvas");
// const video = document.getElementById('video')
// const canvas = document.getElementById('canvas')

Promise.all([
    faceapi.nets.tinyFaceDetector.loadFromUri('/models'),
    faceapi.nets.faceLandmark68Net.loadFromUri('/models'),
    faceapi.nets.faceRecognitionNet.loadFromUri('/models'),
    faceapi.nets.faceExpressionNet.loadFromUri('/models')
])

camera_button.addEventListener('click', async function() {
    let stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
 video.srcObject = stream;
});

click_button.addEventListener('click', function() {
    canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
    let image_data_url = canvas.toDataURL('image/jpeg');

    // data url of the image
    document.getElementById('base64').innerHTML = image_data_url;
});

// function startVideo() {
//     navigator.getUserMedia(
//         { video: {} },
//         stream => video.srcObject = stream,
//         err => console.error(err)
//     )
// }

video.addEventListener('play', () => {
    const canvas = faceapi.createCanvasFromMedia(video)
    document.body.append(canvas)
    const displaySize = { width: video.width, height: video.height }
    faceapi.matchDimensions(canvas, displaySize)
    setInterval(async () => {
        const detections = await faceapi.detectAllFaces(video, new faceapi.TinyFaceDetectorOptions()).withFaceLandmarks().withFaceExpressions()
        console.log(detections)
        const resizedDetections = faceapi.resizeResults(detections, displaySize)
        canvas.getContext('2d').clearRect(0, 0, canvas.width, canvas.height)
        faceapi.draw.drawDetections(canvas, resizedDetections)
        faceapi.draw.drawFaceLandmarks(canvas, resizedDetections)
        faceapi.draw.drawFaceExpressions(canvas, resizedDetections)
    }, 100)
})

// location GPS
var x = document.getElementById("demo");

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else { 
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            x.innerHTML = "Latitude: " + position.coords.latitude + 
            "<br>Longitude: " + position.coords.longitude;
        }

        function showError(error) {
            switch(error.code) {
                case error.PERMISSION_DENIED:
                x.innerHTML = "User denied the request for Geolocation."
                break;
                case error.POSITION_UNAVAILABLE:
                x.innerHTML = "Location information is unavailable."
                break;
                case error.TIMEOUT:
                x.innerHTML = "The request to get user location timed out."
                break;
                case error.UNKNOWN_ERROR:
                x.innerHTML = "An unknown error occurred."
                break;
            }
        }
