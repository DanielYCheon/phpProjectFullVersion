#   FindMyProfessor
<br>
The application leverages PHP for server-side logic, MySQL for database management, and a combination of HTML, CSS, and JavaScript for the client-side interface.
The primary goal of this project is to provide a user-friendly platform where schools can quickly find qualified substitute teachers, and teachers can manage their profiles and availability.<br><br><br>

<p align="center">
  <img src="https://github.com/user-attachments/assets/d319b988-ed05-40f2-9efa-30cb774bddcb"><br><br>
</p>



## :beginner:  Overview

- The "FindMyProfessor" service within the application allows users to register for a specific field and log in to access their accounts. Once logged in, users can update their profile information, including personal details.

- To ensure the security of user data, the application implements password hashing using secure algorithms such as Blowfish, Argon2, or bcrypt. When users register, their passwords are hashed using **_password_hash_** before being stored in the database. During login, the application verifies the hashed password to authenticate the user.

- To prevent SQL injection attacks, the application uses **_mysqli_real_escape_string_** to sanitize user inputs before executing SQL queries. This ensures that any special characters in user inputs are properly escaped, protecting the database from malicious queries.
  
## :star: Key Features

- **Registration and Login:** Users can sign up and log in to the application.

- **Profile Management:** Users can update their profile information.

- **Secure Password Hashing:** Passwords are securely hashed using algorithms like bcrypt

- **SQL Injection Prevention:** User inputs are sanitized using mysqli_real_escape_string to prevent SQL injection.

## :wrench: Built With

<div align="center">
  <br /> <br /> <br />
	 <code><img width="50" src="https://user-images.githubusercontent.com/25181517/192158954-f88b5814-d510-4564-b285-dff7d6400dad.png" alt="HTML" title="HTML"/></code>
	<code><img width="50" src="https://user-images.githubusercontent.com/25181517/183898674-75a4a1b1-f960-4ea9-abcb-637170a00a75.png" alt="CSS" title="CSS"/></code>
	<code><img width="50" src="https://user-images.githubusercontent.com/25181517/117447155-6a868a00-af3d-11eb-9cfe-245df15c9f3f.png" alt="JavaScript" title="JavaScript"/></code>
	<code><img width="50" src="https://user-images.githubusercontent.com/25181517/183570228-6a040b9f-3ddf-47a2-a201-743121dac664.png" alt="php" title="php"/></code>
	<code><img width="50" src="https://user-images.githubusercontent.com/25181517/183896128-ec99105a-ec1a-4d85-b08b-1aa1620b2046.png" alt="MySQL" title="MySQL"/></code>
	<code><img width="50" src="https://user-images.githubusercontent.com/25181517/192108372-f71d70ac-7ae6-4c0d-8395-51d8870c2ef0.png" alt="Git" title="Git"/></code>
	<code><img width="50" src="https://user-images.githubusercontent.com/25181517/192108374-8da61ba1-99ec-41d7-80b8-fb2f7c0a4948.png" alt="GitHub" title="GitHub"/></code>

   <br /> <br /> <br />
</div>

## Getting Started

### 1. Set up the WAMP stacks 
WAMP Stack - A Windows-based stack that includes Apache, MySQL, and PHP for local development.
- Download and install WAMP stack  <a href="https://bitnami.com/">
  <img  width="100" src="https://github.com/user-attachments/assets/125e541b-f755-4a2f-b68f-dd8acd32b884">
</a>

- Start the WAMP server.

### 2. Set up the Database
- Create a MySQL database named **_senior_project_**
  ```Mysql
  CREATE DATABASE senior_project;
  ```
- Update the database credentials in **_senior_database_connect.php_** (_ex_. hostName, userName, password, and databaseName)
  
  ```php
  $db = mysqli_connect('hostName', 'userName', 'password', 'databaseName');
  ```
  or you can use default setting
  
  ```php
  $db = mysqli_connect('localhost', 'root', 'password', 'senior_project');
  ```
- Create table "users"
  ```Mysql
  CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    address VARCHAR(255) NOT NULL,
    city VARCHAR(100) NOT NULL,
    zipcode VARCHAR(20) NOT NULL,
    user_id VARCHAR(50) NOT NULL UNIQUE,
    user_pass VARCHAR(255) NOT NULL );
  ```
### 3. Clone the repository
```git
git clone https://github.com/DanielYCheon/phpProjectFullVersion.git
```
- Navigate to the Project Directory
```git
cd phpProjectFullVersion
```


### 4. Start the server

- Place the project files in the **_htdocs_** directory of your WAMP installation directory.
- Open web browser type http://localhost/phpProjectFullVersion/index.php


## :zap: Usage
#### 1. Go to ```http://localhost/phpProjectFullVersion/index.php```
#### 2. Register a new account, and sign in with an existing account.
#### 3. Navigate your accout and update your information/.



