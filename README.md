# Mind Matter

## Overview
**Mind Matter** is a web application designed to improve mental health through engaging games and quizzes. The project focuses on interactive activities that help users manage stress, develop mindfulness, and enhance overall well-being.

The application is built using modern web technologies, including **HTML**, **CSS**, **JavaScript**, **PHP**, **MySQL**, and **SCSS**. It provides a clean and user-friendly interface with responsive design to ensure accessibility across different devices.

## Features

1. **Games**:
   - The games are designed to be both fun and therapeutic, helping users take a break from stress and anxiety. Each game is tailored to specific mental health conditions or general cognitive exercises. 
   - The website offers the following condition-based games:

     - **ADHD Analyses**:
         - **Simon Says Game**: Users must focus on patterns displayed on the screen and mimic the sequence, helping improve memory and attention span.
         - **Memory Match Game**: Players match card pairs, a helpful activity to boost memory, which can be challenging for individuals with ADHD.
     
     - **Autism Analyses**:
         - **Social Scenario Game**: The player is presented with real-life scenarios and selects an option, encouraging thinking from different perspectives, which can be difficult for individuals with autism.
         - **Expression Recognition Game**: This game helps users identify facial expressions, assisting with understanding social cues.
     
     - **Depression Analyses**:
         - **CBT Game**: Encourages critical thinking by having players identify right and wrong behavior patterns, providing feedback based on their choices.
         - **Daily Mood Chart**: Users can log their daily moods at different times, helping them track patterns in their feelings and recognize if they should seek consultation.
     
     - **OCD Analyses**:
         - **Match Me Game**: Introduces imperfect matches or variations to challenge the player's need for perfection, supporting Exposure and Response Prevention (ERP), a popular treatment for OCD.
         - **Personal Precision Game**: This game tests users' precision by challenging their need for accuracy, recording frustration patterns, and providing feedback based on those patterns.

2. **Quizzes**:
   - Quizzes are designed to assess mental well-being and help users understand their mental state. Some of the key quizzes include:
     - **Stress Level Quiz**: Measures users' current stress levels and provides recommendations for stress management.
     - **Personality Quiz**: Offers insights into the user’s personality traits and how these traits affect their mental health.

## Technology Stack

- **Frontend**:
  - HTML5: Used for structuring the content.
  - CSS3 & SCSS: For styling the application and maintaining a clean and organized codebase using SCSS for advanced styling.
  - JavaScript: Handles dynamic behavior on the frontend, such as interactive games and quizzes.
  - Bootstrap (if used): Ensuring a responsive design and easy-to-use components.

- **Backend**:
  - PHP: Server-side scripting to handle form submissions, user authentication, and interaction with the database.
  - MySQL: Database for storing user data, quiz results, and game progress.

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/yourusername/mind-matter.git
   cd mind-matter

2. **Set up a local server**:
   Use WAMP or XAMPP for local development. Follow their documentation for installation and setup.

4. **Configure the database**:
   Create a MySQL database and import the SQL file located in the <em>/database directory</em>
```bash
CREATE DATABASE mind_matter_db;
USE mind_matter_db;
SOURCE /path/to/mind_matter_db.sql;
```

4. **Update database configuration**:
    Modify the **config.php** file with your database credentials.

5. Run the project:
   Start your local server and open the project in a web browser:
```bash
http://localhost/mind-matter


## License

This project is licensed under the MIT License.

## Template Credits

- **Template Name**: Terapia - Physical Therapy Website Template
- **Template Link**: [Terapia Template](https://htmlcodex.com/physical-therapy-website-template)
- **Template License**: [License Information](https://htmlcodex.com/license) (or read the LICENSE.txt file)
- **Template Author**: HTML Codex
- **Author Website**: [HTML Codex](https://htmlcodex.com)

