
# Online Clearance System

## Table of Contents
- [Introduction](#introduction)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Acknowledgements](#acknowledgements)

## Introduction
The **Online Clearance System** is a web-based application designed to streamline the due clearance process for students at Bajaj Institute of Technology, Wardha, Maharashtra, India. This system aims to significantly reduce the effort and time required for both students and the in-charge personnel by automating and digitizing the clearance process.

## Features
- **User-Friendly Interface**: Intuitive and easy-to-use interface for both students and administrators.
- **Efficient Clearance Process**: Streamlines the clearance process, reducing manual work and errors.
- **Real-Time Updates**: Provides real-time updates on the clearance status.
- **Secure Database**: Uses MySQL for secure and efficient data management.
- **Notifications**: Automated email notifications for updates and alerts.
- **Role-Based Access**: Different access levels for students, faculty, and administrators.

## Technologies Used
- ![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
- ![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
- ![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
- ![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
- ![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
- ![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
- ![Git](https://img.shields.io/badge/Git-F05032?style=for-the-badge&logo=git&logoColor=white)


## Installation

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/Atharvawarade/Ocs.git

2. **Navigate to the Project Directory**:
   ```bash
   cd OCS

3. **Set Up the Database**:
   - Import the `ocs.sql` file into your MySQL server.
   - Update the database configuration in `connection.php` with your MySQL credentials.

4. **Run the Application**:
   - Set up a local server using XAMPP or WAMP.
   - Place the project folder in the server's root directory (`htdocs` for XAMPP).
   - Start the server and navigate to `https://localhost/ocs`.

## Usage

1. **Login**:
   - Students and staff can log in using their credentials.
   
2. **Dashboard**:
   - Access the dashboard to view and manage clearance status.
   
3. **Clearance Requests**:
   - Students can submit clearance requests.
   - Staff can review and approve requests.

4. **Notifications**:
   - Receive real-time notifications for updates and alerts.
  
## Snapshots of the Application:
Select User Page:
<br><br>
<img src="https://github.com/user-attachments/assets/59bc74b6-8981-4444-821d-ee390706abc2" width="1000">


1. Student:

   <table>
       <tr>
           <td align="center">Student Login Page</td>
           <td align="center">Register Page</td>
       </tr>
       <tr>
           <td align="center"><img src="https://github.com/user-attachments/assets/a38dec33-19a3-4867-8cc8-4152b173eab9" width="500"></td>
           <td align="center"><img src="https://github.com/user-attachments/assets/d93800c2-e713-487c-939e-d4d29f13c274" width="500"></td>
       </tr>
      <tr>
           <td align="center">Student Dashboard</td>
           <td align="center">Student Profile</td>
       </tr>
       <tr>
           <td align="center"><img src="https://github.com/user-attachments/assets/b4d3b7dc-a7d1-42a1-a034-8b0baf9b9d91" width="500"></td>
           <td align="center"><img src="https://github.com/user-attachments/assets/f8b29bd0-a3fd-4db7-90cd-975faafbde74" width="500"></td>
       </tr>
       
   </table>

2. Incharge:
   <table>
      <tr>
         <td align="center">Incharge Login Page</td>
         <td align="center">Incharge Dashboard</td>
      </tr>
      <tr>
         <td align="center"><img src="https://github.com/user-attachments/assets/5459e446-5759-4878-a365-5f06ba5d6d58" width="500"></td>
         <td align="center"><img src="https://github.com/user-attachments/assets/6e3c6f36-d1cf-4683-9703-76aa8214abbf" width="500"></td>
      </tr>

      <tr>
         <td align="center">Incharge Profile</td>
         <td align="center">Password Change</td>
      </tr>
      <tr>
         <td align="center"><img src="https://github.com/user-attachments/assets/f02f91b6-9c92-4caa-95a4-d6da6c829ed5" width="500"></td>
         <td align="center"><img src="https://github.com/user-attachments/assets/d7926c24-4fbc-431b-aed0-4e18d06e3be1" width="500"></td>
      </tr>
      
      <tr>
         <td align="center">Requested Students</td>
         <td align="center">Pending Students</td>
      </tr>
      <tr>
         <td align="center"><img src="https://github.com/user-attachments/assets/be04a19d-aad4-477f-936a-08b831e58795" width="500"></td>
         <td align="center"><img src="https://github.com/user-attachments/assets/230996d6-d96a-4d59-a63e-abfbf4885bbb" width="500"></td>
      </tr>
      <tr>
         <td align="center">All Students</td>
      </tr>
      <tr>
         <td align="center"><img src="https://github.com/user-attachments/assets/20a35f79-aeac-4e06-a413-25a67f210faf" width="500"></td>
      </tr>
      
   </table>     

   3. Accountant:
   <table>
      <tr>
         <td align="center">Accountant Login Page</td>
         <td align="center">Accountant Dashboard</td>
      </tr>
      <tr>
         <td align="center"><img src="https://github.com/user-attachments/assets/25acfcba-419c-4ec6-92d8-f81fd2f831a0" width="500"></td>
         <td align="center"><img src="https://github.com/user-attachments/assets/c7b4ff7f-ea6c-4c1a-b02c-45327c736c19" width="500"></td>
      </tr>

      <tr>
         <td align="center">Manage Incharges</td>
         <td align="center">Password Change</td>
      </tr>
      <tr>
         <td align="center"><img src="https://github.com/user-attachments/assets/437deae6-7d1b-485a-935a-7618f1b3bb53" width="500"></td>
         <td align="center"><img src="https://github.com/user-attachments/assets/8261f6f5-9e47-43b6-9707-3251baf46993" width="500"></td>
      </tr>
      
      <tr>
         <td align="center">Requested Students</td>
         <td align="center">Pending Students</td>
      </tr>
      <tr>
         <td align="center"><img src="https://github.com/user-attachments/assets/be04a19d-aad4-477f-936a-08b831e58795" width="500"></td>
         <td align="center"><img src="https://github.com/user-attachments/assets/230996d6-d96a-4d59-a63e-abfbf4885bbb" width="500"></td>
      </tr>
      <tr>
         <td align="center">All Students</td>
      </tr>
      <tr>
         <td align="center"><img src="https://github.com/user-attachments/assets/20a35f79-aeac-4e06-a413-25a67f210faf" width="500"></td>
      </tr>
      
   </table>  


## Acknowledgements

- Bajaj Institute of Technology, Wardha
- All contributors and developers
