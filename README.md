# AskBridge – Online Q&A Platform

AskBridge is a simple and intuitive online Question and Answer platform built with PHP, MySQL, HTML, and Bootstrap. It allows users to ask questions, browse by category, and contribute answers—offering a lightweight community-driven knowledge-sharing system.

## 🔍 Features

- 📝 Ask and answer questions  
- 🗂️ Categorized browsing  
- 🔍 Search functionality  
- 👥 User-based question filtering  
- 🧹 Clean UI with Bootstrap styling  
- 🗑️ Delete questions (by user)  

## 💻 Tech Stack

- **Frontend:** HTML, CSS (Bootstrap)  
- **Backend:** PHP  
- **Database:** MySQL  

### 📁 Project Structure

```plaintext
ASK-BRIDGE/
├── client/                    # Client-side pages and UI logic
│   ├── answers.php           # View answers for a selected question
│   ├── ask.php               # Form to ask a new question
│   ├── category.php          # Filter and view questions by category
│   ├── categorylist.php      # Sidebar listing of all categories
│   ├── commonFiles.php       # Includes Bootstrap and common resources
│   ├── header.php            # Navigation bar for the site
│   ├── login.php             # User login form
│   ├── question-details.php  # Detailed view of a question and its answers
│   ├── questions.php         # Display list of all questions
│   └── signup.php            # User registration form
│
├── common/                   # Shared server-side files
│   └── db.php                # MySQL database connection
│
├── public/                   # Public assets
│   ├── newlogo.png           # Project logo
│   └── style.css             # Custom stylesheets
│
├── server/                   # Server-side request handling
│   └── requests.php          # Handles add/delete operations
│
├── index.php                 # Homepage entry point
└── README.md                 # Project documentation
```


🙋‍♂️ Author
Arshdeep Singh <br>
📧 arshpanesar007@gmail.com
