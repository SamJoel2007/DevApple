<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevApple | AI Code Generator</title>
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>

    <header>
        <h1>DevApple</h1>
        <p>What would you like to build today Soldier?</p>
    </header>

    <div class="container">
        <div class="input-group">
            <form action="generate.php" method="post">
            <span class="label">Describe the code you need:</span>
            <textarea id="promptInput" name="user_prompt" placeholder="e.g. Create a professional portfolio website in dark theme..."></textarea>
            <button type="submit">Generate Code</button>
        </form>
        </div>

        <div class="output-section">
            <div class="output-header">
                <span class="label">Generated Output:</span>
            </div>
            <pre><code id="codeDisplay">
                <?php
                $filePath = __DIR__ . DIRECTORY_SEPARATOR . 'code.txt';
                if (is_readable($filePath) && filesize($filePath) > 0) {
                    echo file_get_contents($filePath);
                } else {
                    echo "Your code will appear here...";
                }
                ?>
            </code></pre>
        </div>
    </div>

    <script>
        function generateCode() {
            const prompt = document.getElementById('promptInput').value;
            const display = document.getElementById('codeDisplay');

            if (!prompt) {
                alert("Please enter a prompt first!");
                return;
            }

            // Placeholder for your backend integration
            display.innerText = "Connecting to DevApple engine...\n\n// Logic for: " + prompt;
        }
    </script>
    <footer>
        <p style="margin-top: 2rem; font-size: 0.8rem; color: #94a3b8;">&copy; 2026 DevApple. Build with Love & Caffeine</p>
    </footer>
</body>
</html>