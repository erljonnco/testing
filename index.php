<!DOCTYPE html>
<html>
<head>
    <title>Button Example</title>
    <style>
        #result {
            overflow: auto; /* Enable scrolling when content exceeds the height */
        }
        #progress {
            font-size: 16px; /* Adjust font size as needed */
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
$(document).ready(function() {
    var isStopped = false; // Flag to track if the requests should be stopped

    $('form').submit(function(e) {
        e.preventDefault(); // Prevent the form from submitting normally

        // Reset isStopped flag on form submit
        isStopped = false;

        // Get the number of lines in the 'name' textarea
        var totalLines = $('#name').val().split('\n').length;
        var totalRequests = totalLines > 0 ? totalLines : 1; // Set totalRequests based on lines in 'name'

        var currentRequest = 0;

        // Function to make a POST request
        function makeRequest() {
            if (isStopped) {
                return; // Exit function if stopped
            }

            // Get the first line of the 'name' textarea and remove it
            var name = $('#name').val().split('\n').shift();
            // Get the first line of the 'phone' textarea and remove it
            var phone = $('#phone').val().split('\n').shift();

            $.ajax({
                type: 'POST',
                url: 'process.php',
                data: { name: name, phone: phone }, // Send name and phone as data
                success: function(response) {
                    // Append the response to the textarea
                    $('#result').append(response + '\n');

                    // Update the progress text with the current request count
                    currentRequest++;
                    $('#progress').text("Progress: " + currentRequest + "/" + totalRequests);

                    // Remove the first line from 'name' and 'phone' textareas
                    $('#name').val($('#name').val().split('\n').slice(1).join('\n'));
                    $('#phone').val($('#phone').val().split('\n').slice(1).join('\n'));

                    // Make the next request if not reached the totalRequests limit
                    if (currentRequest < totalRequests) {
                        makeRequest();
                    }
                }
            });
        }

        // Start making requests
        makeRequest();
    });

    // Handle 'Stop' button click
    $('input[name="stop"]').click(function() {
        isStopped = true; // Set the flag to stop requests
        $('#progress').text("Progress: Stopped");
    });
});

    </script>
</head>
<body>
    <form action="process.php" method="POST">
        <input type="submit" name="start" value="Start">
        <input type="submit" name="stop" value="Stop">
    </form>
    <p id="progress">Progress: 0/100</p>

    <label for="result">Name:</label>
    <!-- Use a textarea instead of input for a larger text box -->
    <textarea id="name" name="name" rows="10" cols="50" ></textarea>

    <label for="result">Phone Number:</label>
    <!-- Use a textarea instead of input for a larger text box -->
    <textarea id="phone" name="phone" rows="10" cols="50" ></textarea>

    <label for="result">Result:</label>
    <!-- Use a textarea instead of input for a larger text box -->
    <textarea id="result" name="result" rows="10" cols="50" readonly></textarea>
</body>
</html>
