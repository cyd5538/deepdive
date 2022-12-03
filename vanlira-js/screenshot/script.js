const screenshotBtn = document.querySelector("#src-btn");
screenPreview = document.querySelector(".src-preview");
clonseBtn = screenPreview.querySelector("#close-btn")

const captureScreen = async () => {
    try {
        // asking permission to use a media input to record current tab
        const stream = await navigator.mediaDevices.getDisplayMedia({ preferCurrentTab: true});
        const video = document.createElement("video")
        
        video.addEventListener("loadedmetadata", () => {
            const canvas = document.createElement("canvas");
            const ctx = canvas.getContext("2d");

            // passing video width & height as canvas width & height
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;

            video.play()
            // drawing an image from the captured video stream
            ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
            stream.getVideoTracks()[0].stop(); //terminating first video track of the stream
            
            // passing canvas data url as screenshot preview src
            screenPreview.querySelector('img').src = canvas.toDataURL();
            screenPreview.classList.add("show");
        })
        video.srcObject = stream;
    } catch (error) {
        alert(error.message);
    }
}

clonseBtn.addEventListener("click", () => screenPreview.classList.toggle("show"))

screenshotBtn.addEventListener("click", captureScreen);