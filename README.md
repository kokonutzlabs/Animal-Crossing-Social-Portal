# Warehouse Social Portal  
### SQL Vulnerability Demonstration, Forensic Analysis, and Remediation Lab

---

## Project Overview

This project is a web-based application backed by an SQL database, designed to simulate an internal communication portal used in a warehouse or production environment.

The application intentionally includes common SQL-related security vulnerabilities to demonstrate how insecure database interactions can be exploited, how those attacks impact system data, and how digital forensic analysis can be used to investigate and remediate the incident.

This project is implemented as a controlled lab environment and focuses on the full security lifecycle: system design, attack simulation, forensic investigation, and secure remediation.

---

## Project Purpose

The purpose of this project is to demonstrate practical knowledge of:

- SQL-backed web application architecture
- Common database attack techniques
- Digital forensic investigation of web applications
- Secure remediation and hardening techniques

All vulnerabilities are intentional and exist solely for educational and defensive security purposes.

---

## Scenario Description

The application simulates an internal social and logging system used by warehouse personnel to share updates, communicate shift information, and record operational notes.

User roles include:
- Employee
- Supervisor
- Administrator

The system stores operational and personnel-related data that would be considered sensitive in a real production environment.

---

## Technology Stack

- **Frontend:** HTML, CSS  
- **Backend:** [PHP / Python / Node.js]  
- **Database:** [MySQL / MariaDB]  
- **Environment:** Localhost (lab-only deployment)

Optional components:
- Application logging
- Database query logging

---

## Application Architecture

The application follows a standard web architecture:

- Client-side HTML forms submit user input
- Backend logic processes requests and interacts with the SQL database
- The database stores user credentials, role information, and internal messages

Initial versions of the application use insecure database queries to demonstrate real-world vulnerabilities.

---

## Database Design

The database includes the following key tables:

- `users`  
  Stores user credentials and role assignments

- `posts`  
  Stores internal messages and operational notes

- `logs`  
  Records authentication and application events

The database is intentionally configured with insufficient input validation and access controls during the initial phase of the project.

---

## Demonstrated Vulnerabilities

The following vulnerabilities are intentionally implemented and documented:

- SQL Injection  
  - Authentication bypass  
  - Unauthorized data access  

- Weak Authentication Controls  
  - Insecure password storage  

- Insufficient Input Validation  

- Excessive Database Privileges  

These vulnerabilities reflect common issues found in poorly secured internal applications.

---

## Attack Simulation

Simulated attacks are conducted in a controlled lab environment to demonstrate:

- Bypassing authentication mechanisms
- Extracting unauthorized data from the database
- Escalating access privileges

The goal of the attack phase is to observe system behavior and identify what forensic evidence is generated during exploitation.

---

## Forensic Analysis

Digital forensic analysis focuses on identifying and reconstructing unauthorized activity using available evidence.

Analysis includes:
- Review of application logs
- Review of database query logs
- Identification of anomalous authentication events

Findings include:
- Timeline reconstruction of unauthorized access
- Identification of compromised accounts
- Documentation of gaps in logging and monitoring

This analysis highlights the importance of proper logging and visibility in production environments.

---

## Impact Assessment

The simulated attacks demonstrate potential risks to:

- **Confidentiality:** Exposure of employee and operational data  
- **Integrity:** Unauthorized modification of stored information  
- **Availability:** Potential disruption of internal systems  

These impacts are evaluated within the context of a warehouse or production environment.

---

## Remediation and Hardening

After forensic analysis, the application is hardened using secure coding practices, including:

- Parameterized SQL queries
- Secure password hashing
- Role-based access control
- Input validation and sanitization
- Improved logging and monitoring

Following remediation, the original attack methods are reattempted to validate that vulnerabilities have been successfully mitigated.

---

## Validation

Post-remediation testing confirms:

- SQL injection attempts are no longer effective
- Unauthorized access is prevented
- Improved forensic evidence is generated during suspicious activity

---

## Ethical Notice

This project is intended for educational and defensive security purposes only.

The vulnerable version of this application must not be deployed in a production environment or exposed to the public internet.

---

## Local Setup (Lab Environment)

1. Clone the repository
2. Configure database credentials
3. Import the provided SQL schema
4. Run the application locally using [XAMPP / Docker / etc.]

---

## Skills Demonstrated

- SQL database design
- Web application security testing
- Digital forensic analysis
- Incident response methodology
- Secure application development

---

## License

This project is provided for educational use only.