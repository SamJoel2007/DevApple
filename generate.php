<?php

$user_prompt = $_POST['user_prompt'] ?? '';

if (empty($user_prompt)) {
    header("Location: index.php");
    exit;
}

$api_key = ""; 
$url = "https://api.anthropic.com/v1/messages";

$full_prompt = "
You are a skilled Developer with expertise in Python, Java, Javascript, C, C++, C#, Ruby, Go, Swift, PHP, HTML, CSS, SQL, MySQL, .NET, React, Angular, Vue, Node.js, Django, Flask, Spring Boot, Ruby on Rails, Laravel, Symfony, Express.js, ASP.NET, TensorFlow, PyTorch, Keras.

Make sure to finish the code within 200 lines
NOTE: Only give the code. No explanations, no comments, no markdown formatting, no code blocks, just the code itself.

USER'S REQUEST: $user_prompt
";

$data = [
    "model" => "claude-opus-4-7", 
    "max_tokens" => 4096,
    "messages" => [
        ["role" => "user", "content" => $full_prompt]
    ]
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "x-api-key: $api_key",
    "anthropic-version: 2023-06-01",
    "content-type: application/json"
]);

$response = curl_exec($ch);
$curlError = curl_error($ch);
$httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);



$result = json_decode($response, true);

if (isset($result['content'][0]['text'])) {
    $generated_code = $result['content'][0]['text'];
} elseif (isset($result['error']['message'])) {
    
    $generated_code = "API Error: " . $result['error']['message'];
} else {
    $generated_code = "Unknown Error. HTTP Status: $httpStatus. Response: $response";
}

file_put_contents('code.txt', $generated_code);

header("Location: index.php");
exit;