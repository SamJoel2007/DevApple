# 🍎 DevApple - AI Code Generator

<div align="center">

**Transform Your Ideas Into Clean Code Instantly**

[![PHP Version](https://img.shields.io/badge/PHP-8.0+-blue.svg)](https://www.php.net/)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)
[![Status](https://img.shields.io/badge/Status-Active-brightgreen.svg)]()

[Features](#-features) • [Installation](#-installation) • [Usage](#-usage) • [Tech Stack](#-tech-stack) • [Contributing](#-contributing)

</div>

---

## 🌟 Overview

**DevApple** is a powerful AI-powered code generator that transforms your ideas into clean, production-ready code in seconds. Simply describe what you need, and our intelligent engine—powered by Claude Opus 4.7—generates code across 50+ programming languages and frameworks.

Perfect for:
- ⚡ Rapid prototyping
- 🎓 Learning new languages
- 🚀 Accelerating development
- 🔧 Boilerplate generation

---

## ✨ Features

- 🤖 **AI-Powered Generation** - Leverages Claude Opus 4.7 for intelligent code synthesis
- 🌍 **Multi-Language Support** - Python, Java, JavaScript, C++, C#, PHP, Ruby, Go, Swift, and 40+ more
- 🎨 **Modern Dark UI** - Beautiful, responsive interface optimized for developers
- ⚙️ **Smart Frameworks** - React, Vue, Angular, Django, Flask, Spring Boot, Laravel, and more
- 📦 **Concise Output** - Maximum 200 lines of clean, documented code
- 🛡️ **Error Handling** - Detailed error messages for troubleshooting
- 🔐 **Secure API Integration** - Uses Anthropic's latest API standards
- ⚡ **Real-Time Display** - Instant code rendering in your browser

---

## 🚀 Quick Start

### Prerequisites

- **PHP 8.0+**
- **XAMPP** or any PHP-enabled server
- **Anthropic API Key** (get it from [console.anthropic.com](https://console.anthropic.com))
- **cURL extension** enabled (usually comes with PHP)

### Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/DevApple.git
   cd DevApple
   ```

2. **Set up your API key:**
   - Open `generate.php`
   - Replace the empty `$api_key` variable with your Anthropic API key:
     ```php
     $api_key = "sk-ant-api03-xxxxxxxxxxxxx";
     ```

3. **Deploy to XAMPP:**
   ```bash
   # Copy the project folder to XAMPP's htdocs
   cp -r DevApple C:\xampp\htdocs\
   ```

4. **Start your server:**
   - Open XAMPP Control Panel
   - Click "Start" for Apache
   - Navigate to `http://localhost/DevApple/`

---

## 💻 Usage

### Basic Workflow

1. **Open the Application** - Navigate to your DevApple instance
2. **Describe Your Code** - Enter what you want to build in the textarea
3. **Generate** - Click "Generate Code" and wait for the AI
4. **View & Copy** - Your generated code appears instantly below

### Example Prompts

```
"Create a Python function to sort an array using quicksort algorithm"
"Build a React component for a todo list with add/delete functionality"
"Write a SQL query to find users with duplicate emails"
"Generate a responsive HTML/CSS landing page for a tech startup"
```

### Output Format

Generated code includes:
- ✅ Clean, readable syntax
- ✅ Minimal comments (code is self-documenting)
- ✅ No markdown formatting
- ✅ Production-ready quality
- ✅ Error messages (if API fails)

---

## 🏗️ Project Structure

```
DevApple/
├── index.php          # Main UI & frontend logic
├── generate.php       # Backend API handler
├── config.php         # Configuration (reserved)
├── code.txt           # Generated code output
├── styles.css         # UI styling (if external)
└── README.md          # This file
```

### File Descriptions

| File | Purpose |
|------|---------|
| `index.php` | Main interface with HTML/CSS/JS; displays generated code |
| `generate.php` | Handles form submission & API communication |
| `code.txt` | Stores the latest generated code |

---

## 🔌 Tech Stack

| Technology | Purpose |
|------------|---------|
| **PHP 8.0+** | Backend server logic |
| **HTML5** | Semantic structure |
| **CSS3** | Modern styling & dark theme |
| **JavaScript** | Client-side interactivity |
| **Anthropic API** | AI code generation engine |
| **cURL** | HTTP API requests |

### Supported Languages & Frameworks

**Languages:** Python • Java • JavaScript • C • C++ • C# • Ruby • Go • Swift • PHP • TypeScript • Kotlin • Rust • Scala • R • MATLAB

**Frameworks:** React • Vue • Angular • Django • Flask • Spring Boot • Ruby on Rails • Laravel • Symfony • Express.js • ASP.NET • FastAPI

---

## 🔐 API Configuration

### Getting Your API Key

1. Visit [Anthropic Console](https://console.anthropic.com/account/keys)
2. Create a new API key
3. Copy and paste it into `generate.php`

### Current Configuration

```php
// Model: Claude Opus 4.7
// Max Tokens: 4096
// Max Code Lines: 200
// API Version: 2023-06-01
```

### Customization

To change the model or parameters, edit `generate.php`:

```php
$data = [
    "model" => "claude-opus-4-7",  // Change model here
    "max_tokens" => 4096,           // Adjust output length
];
```

---

## 🐛 Troubleshooting

### Common Issues

**Issue:** `Error: Could not generate code`
- **Solution:** Verify your API key is correct and has valid credits

**Issue:** `HTTP status 404: model not found`
- **Solution:** Update the model name to a valid Anthropic model

**Issue:** `Unable to open file!`
- **Solution:** Ensure `code.txt` has write permissions in the directory

**Issue:** `fread() - Argument #2 must be greater than 0`
- **Solution:** This is fixed in the latest version; update your files

### Debug Mode

Add this to `generate.php` after the API call to see raw responses:

```php
echo "Debug - Status: $httpStatus\n";
echo "Debug - Response: " . print_r($result, true);
```

---

## 📈 Performance & Limits

- **Response Time:** 2-10 seconds (depends on code complexity)
- **Max Output:** 200 lines of code
- **Max Tokens:** 4096
- **Concurrent Requests:** 1 per session
- **File Size Limit:** Limited by server (typically 100MB)

---

## 🤝 Contributing

We welcome contributions! Here's how:

1. **Fork** the repository
2. **Create** a feature branch (`git checkout -b feature/amazing-feature`)
3. **Commit** your changes (`git commit -m 'Add amazing feature'`)
4. **Push** to the branch (`git push origin feature/amazing-feature`)
5. **Open** a Pull Request

### Ideas for Contributions

- [ ] Support for more AI models
- [ ] Code snippet history/bookmarks
- [ ] Dark/light theme toggle
- [ ] Download as file functionality
- [ ] Code syntax highlighting
- [ ] Multiple language templates
- [ ] Real-time collaboration
- [ ] Code quality analysis

---

## 📝 License

This project is licensed under the **MIT License** - see the [LICENSE](LICENSE) file for details.

---

## 📧 Contact & Support

- **Issues:** [Report bugs on GitHub](https://github.com/SamJoel2007/DevApple/issues)
- **Discussions:** [Join our community](https://github.com/SamJoel2007/DevApple/discussions)
- **Email:** samgladson07@gmail.com

---

## 🙏 Acknowledgments

- 🤖 [Anthropic](https://www.anthropic.com/) for the amazing Claude API
- 💻 [XAMPP](https://www.apachefriends.org/) for local development
- 🎨 Inspired by modern dev tools and rapid prototyping platforms

---

## 📊 Roadmap

- [ ] v2.0 - Web-based editor with syntax highlighting
- [ ] v2.1 - Code version history & rollback
- [ ] v2.2 - Team collaboration features
- [ ] v2.3 - Custom model fine-tuning
- [ ] v3.0 - VS Code extension

---

<div align="center">

**Made with ❤️ by DevApple Team**

[⬆ Back to Top](#-devapple---ai-code-generator)

</div>