<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Clock</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        #clock {
            font-size: 2em;
        }
    </style>
</head>
<body>
    <div id="clock"></div>

    <script>
        function updateClock() {
            // Get the current time
            const now = new Date();

            // Extract hours, minutes, and seconds
            const hours = now.getHours();
            const minutes = now.getMinutes();
            const seconds = now.getSeconds();

            // Format the time (add leading zeros if necessary)
            const formattedTime = `${formatTime(hours)}:${formatTime(minutes)}:${formatTime(seconds)}`;

            // Update the clock element
            document.getElementById('clock').innerText = formattedTime;
        }

        function formatTime(time) {
            return time < 10 ? `0${time}` : time;
        }

        // Update the clock every second
        setInterval(updateClock, 1000);

        // Initial call to display the clock immediately
        updateClock();
    </script>
</body>
</html>
