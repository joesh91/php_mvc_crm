# 🏦 CRM System (Full Stack PHP + MySQL Project)

A clean full-stack CRM system built using Core PHP and MySQL, demonstrating MVC architecture, CRUD operations, and backend validation from scratch.

This project simulates a basic banking style customer management system, where users can manage customer records with secure database handling and a structured backend design.

---

## 🚀 Features

- Full CRUD Operations (Create, Read, Update, Delete)
- MVC Architecture (Model - View - Controller)
- Secure database interaction using Prepared Statements
- Custom validation layer for form inputs
- Dynamic customer management system
- Clean routing system without frameworks
- Real-world banking-style customer data handling

---

## 🧠 Concepts Used

- MVC Design Pattern
- Object-Oriented PHP (OOP)
- Database Normalization Basics
- Prepared Statements (SQL Injection Protection)
- Input Validation Layer
- Separation of Concerns
- Manual Routing System
- Server-side Form Handling

---

## 📁 Project Structure
```
crm-system/
│
├─ config/
│   └─ dbConnection.php        → Database connection handler
│
├─ models/
│   └─ customer.php            → Customer model (CRUD logic)
│
├─ controllers/
│   └─ customerController.php  → Business logic + request handling
│
├─ core/
│   └─ Validator.php           → Custom validation rules
│
├─ views/
│   └─ customers/
│       ├─ add.php             → Add customer form
│       ├─ view.php            → Customer listing page
│       └─ update.php          → Update customer form
│
├─ database/
│   └─ database.sql            → Database schema
│
├─ routes.php                  → Application routing logic
└─ index.php                   → Entry point

```
---

## ⚙️ How It Works

1. User interacts with the **View** (HTML forms & tables)
2. Requests are handled by the **Controller**
3. Controller validates input using the **Validator class**
4. Data is processed through the **Model**
5. Model interacts with the **MySQL database**
6. Results are returned back to the **View**

---

## 🔄 System Flow

User Request → Routes → Controller → Validator → Model → Database → Response View


---

## 🗄️ Database Overview

**Table: CUSTOMERS**

- ID (Primary Key)
- FULL_NAME
- NIC (Unique)
- DOB
- ADDRESS
- PHONE_NO
- EMAIL (Unique)
- ACCOUNT_TYPE (SAVINGS / CURRENT / TERM_DEPOSIT)
- BALANCE
- CREATED_AT (Auto Timestamp)

---

## 🔐 Validation Rules

- Full name is required
- NIC must follow valid Sri Lankan NIC format
- Email must be in valid format
- Minimum deposit must be ≥ 1000
- Required fields must not be empty

---

## 🧪 Security Features

- Prepared statements used for all database queries
- Parameter binding for SQL safety
- Input validation before database insertion
- Protection against SQL Injection attacks

---

## 💡 What I Learned

- How MVC architecture works in real applications
- Backend request lifecycle in PHP
- Secure database handling techniques
- Designing scalable CRUD systems
- Manual routing without frameworks
- Building validation logic from scratch

---

## 📌 Purpose of This Project

This project was built to strengthen my understanding of:

- Backend development fundamentals
- MVC architecture in PHP
- Real world database driven application design
- Clean separation of logic and structure

It represents my first full-stack development journey built entirely from scratch.

---

## 🚀 Future Improvements

- Add authentication (Login / Logout system)
- Role-based access control (Admin / Staff)
- REST API version of the system
- Frontend upgrade using React or Vue
- Export customer data (PDF / Excel)
- Dashboard with analytics

---

## 👨‍💻 Author

**Shamal Gunathilake**  
🤖	Bachelor of Information Technology (BIT) Student Passionate about Software Development, AI, and Core CS Fundamentals
💻 	Full Stack Developer (PHP | MySQL | OOP | MVC)  
📍 	Building my journey in backend engineering