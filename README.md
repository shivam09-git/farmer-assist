# 🌾 Farmer Assist

**Farmer Assist** is a web-based platform designed to empower farmers by providing modern tools for **crop recommendation, cost analysis, and disease detection**.  
It bridges the gap between **technology and agriculture**, helping farmers make informed decisions with ease.

---

## 🚀 Features

- 🧑‍🌾 **User Authentication**
  - Secure Login & Signup for farmers and admin.
  - Supports Google OAuth-based login.

- 🌱 **Crop Recommendation**
  - Suggests best crops based on soil type, temperature, and rainfall.

- 💰 **Cost Analysis**
  - Helps farmers estimate and manage crop production costs.

- 🧬 **Disease Detection**
  - Upload crop images and detect possible diseases using AI integration (ready for ML model).

- 🧾 **Admin Dashboard**
  - Manage user data, uploads, and system updates.

- 🧑‍💻 **Responsive UI**
  - Clean, modern interface built with mobile-friendly design.

---

## 🛠️ Tech Stack

| Category | Technology |
|-----------|-------------|
| Frontend  | HTML, CSS, JavaScript |
| Backend   | PHP (XAMPP Localhost) |
| Database  | MySQL |
| Hosting   | GitHub (for source code) |
| Tools     | Git, VS Code, XAMPP |

---

## 📸 Screenshots

> Add your screenshots in the `assets/images/` folder and update the links below.

| Home Page | Crop Recommendation | Disease Detection |
|------------|---------------------|-------------------|
| ![Home](assets/images/homepage.png) | ![Crop Recommend](assets/images/crop-recommend.png) | ![Disease Detect](assets/images/disease-detect.png) |

---

## 🧩 Folder Structure
farmer-assist/
├── assets/
│ ├── css/
│ ├── js/
│ ├── images/
├── backend/
│ ├── api/
│ ├── uploads/
│ └── helpers/
├── database/
│ └── farmer_assist.sql
├── index.html
├── login.html
├── signup.html
├── crop-recommend.html
├── disease-detect.html
└── README.md


---

## ⚙️ Setup Instructions

### 🧱 Prerequisites
- Install [XAMPP](https://www.apachefriends.org/)
- Install [Git](https://git-scm.com/)
- Clone this repository

### 💻 Steps

```bash
# Clone the repository
git clone https://github.com/shivam09-git/farmer-assist.git

# Move into project folder
cd farmer-assist

# Place project in XAMPP htdocs folder
C:\xampp\htdocs\farmer-assist

# Start Apache and MySQL in XAMPP Control Panel

# Import the database
- Open phpMyAdmin
- Create a database named farmer_assist
- Import `database/farmer_assist.sql`

Then open:
http://localhost/farmer-assist/

🧠 Future Improvements

Add AI-powered disease detection model

Implement real-time weather-based crop suggestions

Build mobile-friendly PWA version

Add multi-language support

👨‍💻 Author

Shivam Naik
🌐 GitHub Profile

💼 Passionate about web development, UI design, and AI-powered solutions.

📜 License

This project is licensed under the MIT License — feel free to use and modify it for learning or research purposes.
