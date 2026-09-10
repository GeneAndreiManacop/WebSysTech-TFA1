# IT0049 TFA1 - Point of Sale System

A basic Point-of-Sale (POS) web application developed using CodeIgniter 4 for the IT0049 Web System Technologies course.

This project demonstrates the basic use of CodeIgniter's routing, controllers, views, and static PHP arrays in a multi-page web application.

## Features

The application contains four pages:

- **Home** - Landing page of the application
- **About** - Basic information about the application
- **Customer Accounts** - Displays customer records including full name, email, and phone number
- **User Accounts** - Displays user/staff records including username, full name, and role

Customer and user records currently use static PHP arrays as temporary data sources. No database is used in this version of the application.

## Built With

- PHP
- CodeIgniter 4
- HTML
- CSS

## Requirements

To run the project locally, you will need:

- PHP
- Apache (such as through XAMPP)
- A web browser

## Local Setup

1. Clone the repository:

   ```bash
   git clone <repository-url>
   ```

2. Place the project directory inside your XAMPP `htdocs` directory.

3. Create a `.env` file from the provided `env` template.

4. Configure the application's base URL in `.env` for your local environment.

5. Start **Apache** through the XAMPP Control Panel.

6. Open the application through your browser using the configured local URL.

## Application Routes

| Page | Route |
|---|---|
| Home | `/` |
| About | `/about` |
| Customer Accounts | `/customers` |
| User Accounts | `/users` |

## Deployment

The application is hosted using InfinityFree.

**Live Website:**  
https://manacop-possystem-tfa1.infinityfree.me/

## Project Structure

```text
app/
├── Config/          # Application configuration and routes
├── Controllers/     # Page, customer, and user controllers
└── Views/           # Application views

public/              # Public assets
system/              # CodeIgniter framework files
writable/            # Logs, cache, and other writable data
```

## Academic Information

**Course:** IT0049 - Web System Technologies  
**Activity:** Technical Formative Assessment 1  
**Project:** From Zero to Four Pages: Your First CodeIgniter Application
