<?php    
    session_start();
    if (!isset($_SESSION['userid'])) {
        header("Location: login.php");
        exit;
    }
    $resume_data = [
        'personal' => [
            'name' => 'JOEL LAZERNIE A. AGUZAR',
            'role' => 'Junior Programmer',
            'address' => '049 Rizal Street, Lemery, Batangas',
            'phone' => '0976-370-2484',
            'email' => 'aguzarjoel07@gmail.com'
        ],
        
        'summary' => [
            'Developed practical experience building and maintaining software in team and solo settings, ensuring functionality and efficiency.',
            'Collaborated effectively to design and implement features; strong communication and teamwork.',
            'Experienced in debugging and resolving issues to improve performance and reliability.',
            'Always learning current development trends; adaptable problem-solver in technical environments.'
        ],
        
        'projects' => [
            [
                'title' => 'DAHON: Disease Assessment and Health Organization for Nature',
                'period' => 'Mar 2025 – May 2025',
                'description' => 'Web platform for plant disease identification and management',
                'achievements' => [
                    'Built AI-powered image recognition integrated with a curated disease database.',
                    'Implemented front end for disease scanning, health dashboards, and treatment handbook.'
                ],
                'link' => 'https://github.com/Brian-Kristofer-Perez/DAHON'
            ],
            [
                'title' => 'iKonek: Non-Profit Donation Tracking System',
                'period' => 'Oct 2024 – Dec 2024',
                'description' => 'Java + MySQL console application',
                'achievements' => [
                    'Independently built donor and fundraising management using OOP for maintainability.',
                    'Implemented user management and donation scheduling with data integrity.'
                ],
                'link' => 'https://github.com/joelaguzar/iKonek.git'
            ],
            [
                'title' => 'AutoPilot: Car Dealership Management System',
                'period' => 'Jun 2024 – Jul 2024',
                'description' => 'C++ console application',
                'achievements' => [
                    'Collaborated with a team of four to manage inventory and user transactions.',
                    'Debugged features like car recommendations for maintainability and performance.'
                ],
                'link' => 'https://github.com/joelaguzar/AutoPilot.git'
            ]
        ],
        
        'skills' => [
            'C++', 'Python', 'Java', 'C#', 'Dart', 'Flutter', 'HTML', 'CSS', 
            'JavaScript', 'React.js', 'MySQL', 'PostgreSQL', 'Git'
        ],
        
        'education' => [
            [
                'degree' => 'Bachelor of Science in Computer Science',
                'institution' => 'Batangas State University – The National Engineering University',
                'period' => 'Aug 2023 – May 2027'
            ],
            [
                'degree' => 'Senior High School',
                'institution' => 'Immaculate Heart of Mary Academy Inc.',
                'period' => 'Aug 2021 – Apr 2023',
            ]
        ],
        
        'certificates' => [
            [
                'title' => 'National AI Prompt Design Challenge (NAIPDC) Bootcamp Philippines 2025',
                'issuer' => 'Straits Interactive',
                'year' => '2025',
                'link' => 'https://drive.google.com/file/d/1Uq3A0r1Yi16tqwgirTUANLXOkw7JuFnf/view?usp=drive_link'
            ],
            [
                'title' => 'Data Analyst Compass: Step-by-Step Guide/Roadmap',
                'issuer' => 'DataSense Analytics Inc.',
                'year' => 'Jun 14, 2025',
                'link' => 'https://drive.google.com/file/d/1nYOUXFo84EiLk39X82gEzFCH3wbkafu6/view?usp=drive_link'
            ],
            [
                'title' => 'Webinar: "LaunchPad: Your Future in Tech Starts Here"',
                'issuer' => 'TMC, UP Diliman',
                'year' => 'May 24, 2025',
                'link' => 'https://drive.google.com/file/d/130XQj-eo4-xA-3dBpxoZU3y0EJ6uHiSz/view?usp=sharing'
            ]
        ]
    ];

    echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head>';
    echo '<meta charset="UTF-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
    echo '<title>' . htmlspecialchars($resume_data['personal']['name']) . ' - Resume</title>';

    echo '<style>';
    echo ':root {';
    echo '    --accent: #1a237e;';
    echo '    --text: #1a1a1a;';
    echo '    --muted: #666;';
    echo '    --line: #e6e6ee;';
    echo '    --bg: #f7f7fb;';
    echo '    --chip: #eef2ff;';
    echo '}';

    echo 'html, body {';
    echo '    margin: 0;';
    echo '    padding: 0;';
    echo '}';

    echo 'body {';
    echo '    font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif;';
    echo '    background: var(--bg);';
    echo '    color: var(--text);';
    echo '}';

    echo '.container {';
    echo '    max-width: 960px;';
    echo '    margin: 32px auto;';
    echo '    padding: 0 20px;';
    echo '}';

    echo '.resume {';
    echo '    background: #fff;';
    echo '    border-radius: 10px;';
    echo '    box-shadow: 0 10px 25px rgba(20, 20, 40, 0.08);';
    echo '    overflow: hidden;';
    echo '}';

    echo '.header {';
    echo '    padding: 28px 28px 12px 28px;';
    echo '    border-bottom: 1px solid var(--line);';
    echo '}';

    echo '.name {';
    echo '    font-size: 28px;';
    echo '    font-weight: 800;';
    echo '    color: var(--accent);';
    echo '    margin: 0;';
    echo '}';

    echo '.role {';
    echo '    font-size: 15px;';
    echo '    color: var(--muted);';
    echo '    margin: 6px 0 10px;';
    echo '}';

    echo '.contact {';
    echo '    display: flex;';
    echo '    flex-wrap: wrap;';
    echo '    gap: 12px;';
    echo '    font-size: 14px;';
    echo '    color: var(--muted);';
    echo '}';

    echo '.contact a {';
    echo '    color: var(--accent);';
    echo '    text-decoration: none;';
    echo '}';

    echo '.content {';
    echo '    display: grid;';
    echo '    grid-template-columns: 2.2fr 1fr;';
    echo '    gap: 24px;';
    echo '    padding: 22px;';
    echo '}';

    echo '.section {';
    echo '    margin-bottom: 8px;';
    echo '}';

    echo '.section h2 {';
    echo '    font-size: 16px;';
    echo '    color: var(--accent);';
    echo '    letter-spacing: 0.4px;';
    echo '    margin: 0 0 10px;';
    echo '    padding-bottom: 6px;';
    echo '    border-bottom: 2px solid var(--line);';
    echo '}';

    echo '.summary {';
    echo '    font-size: 14px;';
    echo '    line-height: 1.6;';
    echo '    color: #222;';
    echo '}';

    echo '.summary ul {';
    echo '    padding-left: 18px;';
    echo '    margin: 8px 0;';
    echo '}';

    echo '.projects .item {';
    echo '    border: 1px solid var(--line);';
    echo '    border-radius: 8px;';
    echo '    padding: 12px;';
    echo '    margin-bottom: 12px;';
    echo '}';

    echo '.projects .item h3 {';
    echo '    margin: 0 0 4px;';
    echo '    font-size: 15px;';
    echo '}';

    echo '.projects .meta {';
    echo '    font-size: 12px;';
    echo '    color: var(--muted);';
    echo '    margin-bottom: 6px;';
    echo '}';

    echo '.projects a {';
    echo '    color: var(--accent);';
    echo '    text-decoration: none;';
    echo '}';

    echo '.chips {';
    echo '    display: flex;';
    echo '    flex-wrap: wrap;';
    echo '    gap: 8px;';
    echo '}';

    echo '.chip {';
    echo '    background: var(--chip);';
    echo '    border: 1px solid #dfe6ff;';
    echo '    color: #233b85;';
    echo '    border-radius: 999px;';
    echo '    padding: 6px 10px;';
    echo '    font-size: 12px;';
    echo '}';

    echo '.edu p, .certs li {';
    echo '    font-size: 14px;';
    echo '    margin: 6px 0;';
    echo '}';

    echo '.certs ul {';
    echo '    padding-left: 18px;';
    echo '    margin: 8px 0;';
    echo '}';

    echo '.muted {';
    echo '    color: var(--muted);';
    echo '}';

    echo '.header-actions {';
    echo '    margin-top: 20px;';
    echo '}';

    echo '.print {';
    echo '    display: inline-block;';
    echo '    margin: 0 0 12px;';
    echo '    padding: 8px 12px;';
    echo '    border: 1px solid var(--line);';
    echo '    border-radius: 6px;';
    echo '    background: #fff;';
    echo '    cursor: pointer;';
    echo '    font-size: 14px;';
    echo '}';

    echo '.logout-button {';
    echo '    display: inline-block;';
    echo '    text-decoration: none;';
    echo '    margin: 0 0 12px 10px;';
    echo '    padding: 8px 12px;';
    echo '    border-radius: 6px;';
    echo '    background: #ffebeb;';
    echo '    color: #c53030;';
    echo '    border: 1px solid #f8d7da;';
    echo '    font-size: 14px;';
    echo '}';

    echo '@media (max-width: 800px) {';
    echo '    .content {';
    echo '        grid-template-columns: 1fr;';
    echo '    }';
    echo '    .header {';
    echo '        padding: 22px;';
    echo '    }';
    echo '}';

    echo '@media print {';
    echo '    body {';
    echo '        background: #fff;';
    echo '    }';
    echo '    .container {';
    echo '        margin: 0;';
    echo '    }';
    echo '    .print, .logout-button {';
    echo '        display: none;';
    echo '    }';
    echo '    .resume {';
    echo '        box-shadow: none;';
    echo '        border: 0;';
    echo '        border-radius: 0;';
    echo '    }';
    echo '}';
    echo '</style>';
    echo '</head>';


    echo '<body>';
    echo '<div class="container">';
    echo '<div class="resume">';

    echo '<header class="header">';
    echo '<h1 class="name">' . htmlspecialchars($resume_data['personal']['name']) . '</h1>';
    echo '<p class="role">' . htmlspecialchars($resume_data['personal']['role']) . '</p>';
    echo '<p class="contact">';
    echo '<span>' . htmlspecialchars($resume_data['personal']['address']) . '</span>';
    echo '<span>' . htmlspecialchars($resume_data['personal']['phone']) . '</span>';
    echo '<a href="mailto:' . htmlspecialchars($resume_data['personal']['email']) . '">' . htmlspecialchars($resume_data['personal']['email']) . '</a>';
    echo '</p>';
    
    echo '<div class="header-actions">';
    echo '<button class="print" onclick="window.print()">Download PDF</button>';
    echo '<a href="logout.php" class="logout-button">Logout</a>';
    echo '</div>';
    
    echo '</header>';

    echo '<main class="content">';

    echo '<section class="main">';

    echo '<div class="section summary">';
    echo '<h2>Summary</h2>';
    echo '<ul>';
    foreach ($resume_data['summary'] as $item) {
        echo '<li>' . htmlspecialchars($item) . '</li>';
    }
    echo '</ul>';
    echo '</div>';

    echo '<div class="section projects">';
    echo '<h2>Projects</h2>';
    foreach ($resume_data['projects'] as $project) {
        echo '<div class="item">';
        echo '<h3>' . htmlspecialchars($project['title']) . '</h3>';
        echo '<div class="meta">' . htmlspecialchars($project['period']) . ' • ' . htmlspecialchars($project['description']) . '</div>';
        echo '<ul>';
        foreach ($project['achievements'] as $achievement) {
            echo '<li>' . htmlspecialchars($achievement) . '</li>';
        }
        echo '</ul>';
        echo '<a href="' . htmlspecialchars($project['link']) . '" target="_blank" rel="noopener">View Project</a>';
        echo '</div>';
    }
    echo '</div>';

    echo '</section>';

    echo '<aside class="sidebar">';
    
    echo '<div class="section">';
    echo '<h2>Technical Skills</h2>';
    echo '<div class="chips">';
    foreach ($resume_data['skills'] as $skill) {
        echo '<span class="chip">' . htmlspecialchars($skill) . '</span>';
    }
    echo '</div>';
    echo '</div>';

    // education
    echo '<div class="section edu">';
    echo '<h2>Education</h2>';
    foreach ($resume_data['education'] as $edu) {
        echo '<p>';
        echo '<b>' . htmlspecialchars($edu['degree']) . '</b><br>';
        echo htmlspecialchars($edu['institution']) . '<br>';
        echo '<span class="muted">' . htmlspecialchars($edu['period']) . '</span>';
        echo '</p>';
        if (isset($edu['achievement'])) {
            echo '<ul><li>' . htmlspecialchars($edu['achievement']) . '</li></ul>';
        }
    }
    echo '</div>';

    echo '<div class="section certs">';
    echo '<h2>Certificates</h2>';
    echo '<ul>';
    foreach ($resume_data['certificates'] as $cert) {
        echo '<li>';
        echo htmlspecialchars($cert['title']) . ' – ' . htmlspecialchars($cert['issuer']);
        echo ' (' . htmlspecialchars($cert['year']) . ') – ';
        echo '<a href="' . htmlspecialchars($cert['link']) . '" target="_blank" rel="noopener">View</a>';
        echo '</li>';
    }
    echo '</ul>';
    echo '</div>';

    echo '</aside>';
    echo '</main>';
    echo '</div>';
    echo '</div>';
    echo '</body>';
    echo '</html>';
?> 