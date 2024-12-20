﻿# HackMotion-wordpress
# WordPress Docker Setup with Custom Theme

This project is a WordPress installation running on Docker with a custom theme designed for an e-commerce landing page. The landing page dynamically adapts to user input and includes interactive video, collapsible content, and other dynamic elements.

## Project Overview

The main goal of this project is to recreate an e-commerce landing page where the content adapts to the user's selection. The page includes dynamic video, interactive elements, and personalized content based on user input.

## Features

- **Custom WordPress Theme**: A theme built from scratch with custom templates and dynamic content.
- **Responsive Design**: The page is fully responsive, ensuring it adapts to different screen sizes and devices.
- **Dynamic Content**: The page dynamically adapts to the user's selection (e.g. "Break 80", "Break Par", etc.).
- **Interactive Video**: The page features interactive videos with timestamps and collapsible cards, enhancing user experience.
- **Custom Hero Section**: Based on URL parameters, the Hero section dynamically displays content (“We’ve built a swing-enhancing solution to help you break 80”).

## Prerequisites

To run this project locally, you need:

- Docker
- Docker Compose
- Git

### Docker and Docker Compose Installation

If you haven't installed Docker and Docker Compose, follow the installation instructions:

- [Docker Installation Guide](https://docs.docker.com/get-docker/)
- [Docker Compose Installation Guide](https://docs.docker.com/compose/install/)

## Setup

### 1. Clone the Repository

Clone this repository to your local machine:
```
git clone https://github.com/sean0v/HackMotion-wordpress.git
cd HackMotion-wordpress
```

### 2. Start Docker Containers
```
docker-compose up -d
```
### 3. Configure Wordpress 
Open your browser and navigate to http://localhost:8000

### 4. Activate the Custom Theme
Once WordPress is set up, log in to the WordPress Admin Dashboard at http://localhost:8000/wp-admin.
- Navigate to Appearance → Themes.
- Activate the custom theme that is included in the project.


### Dynamic Content
The landing page includes dynamic content based on URL parameters. The hero section updates based on a URL parameter (e.g., ?swing_type=break80), which adjusts the content displayed on the page. Make sure to pass the correct URL parameter to see the changes.

### Interactive Video Section
The video section contains three interactive timestamps:

- 5 seconds: Static top drill
- 14 seconds: Dynamic top drill
- 24 seconds: Top full swing challenge
