<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qute Progress Bar</title>
    <style>
        body {
            text-align: center;
            padding: 50px;
        }

        #barContainer {
            width: 80%;
            height: 30px;
            background-color: rgb(177, 176, 176);
            border-radius: 20px;
            margin: 40px auto;
            overflow: hidden;
        }

        #bar {
            height: 100%;
            background-color: #4caf50;
            width: 0%;
            transition: width 0.5s;
        }

        #message {
            margin-top: 20px;
            font-size: 1.2rm;
            color: #555;
        }
    </style>
</head>

<body>

    <h1>Installing Progress....</h1>
    <div id="barContainer">
        <div id="bar"></div>
    </div>
    <div id="message">Starting up...</div>
    <script>
        const messages = [
            "Installing Motivation...",
            "Calibrating Laziness...",
            "Downloading Energy...",
            "Pretending to Work...",
            "Buffering Confidence...",
            "Generating Ideas...",
            "Compiling Thoughts...",
            "Charging Braincells...",
            "Finalizing Nothingness...",
            "Almost There...",
            "Just a Moment...",
            "Loading Inspiration...",
            "Preparing to Do Nothing...",
            "Wrapping Things Up...",
            "Just a Few More Seconds...",
        ];
        let progress = 0;

        const bar = document.getElementById("bar");
        const message = document.getElementById("message");

        function updateProgress() {
            const direction = Math.random() < 0.75 ? 1 : -1;
            const step = Math.floor(Math.random() * 20) + 1;

            progress += direction * step;

            if (progress > 95) progress = 95;
            if (progress < 0) progress = 0;

            bar.style.width = progress + "%";

            const msgIndex = Math.floor(Math.random() * messages.length);
            message.innerText = messages[msgIndex];

            const delay = Math.floor(Math.random() * 800) + 400;
            setTimeout(updateProgress, delay);
        }
        updateProgress();
    </script>
</body>

</html>