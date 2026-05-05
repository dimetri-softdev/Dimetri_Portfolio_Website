<?php
$name = 'Dimetri';
$jobTitle = 'Full Stack Developer & App Creator';
$intro = 'I build modern, responsive portfolio websites and business-ready applications using PHP, HTML, CSS, JavaScript, C#, Java, and Kotlin. This site highlights the work and skills that make hiring me an easy choice.';
$about = 'Hi, I’m Dimetri. I solve problems with clean, maintainable code and polished product experiences, and I’ve shipped semester projects using C#, Java, and Kotlin as well as front-end portfolio work. I enjoy building strong developer websites and app demos that catch the attention of employers and teams.';
$skills = [
    'PHP',
    'HTML5',
    'CSS3',
    'JavaScript',
    'C#',
    'Java',
    'Kotlin',
    'Responsive Design',
    'Cross-platform apps',
    'GitHub workflow',
];
$projects = [
    [
        'title' => 'Portfolio Website',
        'description' => 'A polished personal portfolio built with PHP and modern styling for GitHub profile presentation.',
        'link' => 'https://github.com/Dimetri',
    ],
    [
        'title' => 'Interactive UI Demo',
        'description' => 'A responsive project showcase with smooth section scrolling and clean design.',
        'link' => 'https://github.com/Dimetri',
    ],
    [
        'title' => 'Open Source Contributions',
        'description' => 'A collection of GitHub repositories highlighting collaborative work and tools.',
        'link' => 'https://github.com/Dimetri',
    ],
    [
        'title' => 'Upcoming Project 1',
        'description' => 'Placeholder for a future C#, Java, or Kotlin project. Replace this description when you add the real project.',
        'link' => '#',
    ],
    [
        'title' => 'Upcoming Project 2',
        'description' => 'Placeholder for a future C#, Java, or Kotlin project. Replace this description when you add the real project.',
        'link' => '#',
    ],
    [
        'title' => 'Upcoming Project 3',
        'description' => 'Placeholder for a future C#, Java, or Kotlin project. Replace this description when you add the real project.',
        'link' => '#',
    ],
];
$contactEmail = 'hello@dimetri.com';
$githubUrl = 'https://github.com/Dimetri';
$year = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($name); ?> | Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <script defer src="js/app.js"></script>
</head>
<body>
    <header class="site-header">
        <div class="container header-inner">
            <a class="brand" href="#home"><?php echo htmlspecialchars($name); ?></a>
            <nav class="site-nav" id="site-nav">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </nav>
            <button class="menu-toggle" id="menuToggle">Menu</button>
        </div>
    </header>

    <main>
        <section class="hero" id="home">
            <div class="container hero-content">
                <p class="eyebrow">GitHub Portfolio</p>
                <h1>Hi, I’m <?php echo htmlspecialchars($name); ?>.</h1>
                <p class="hero-subtitle"><?php echo htmlspecialchars($jobTitle); ?></p>
                <p class="hero-copy"><?php echo htmlspecialchars($intro); ?></p>
                <div class="hero-actions">
                    <a class="button button-primary" href="<?php echo $githubUrl; ?>" target="_blank" rel="noopener">Visit GitHub</a>
                    <a class="button button-secondary" href="#contact">Hire Me</a>
                </div>
            </div>
        </section>

        <section class="section about-section" id="about">
            <div class="container section-grid">
                <div>
                    <h2>About Me</h2>
                    <p><?php echo htmlspecialchars($about); ?></p>
                    <p>I build thoughtful web experiences and developer tools with a focus on clean code, fast performance, and polished product design. My work is designed to make your next hire feel confident that I can contribute quickly and professionally.</p>
                    <a class="button button-outline" href="<?php echo $githubUrl; ?>" target="_blank" rel="noopener">Explore my GitHub</a>
                </div>
                <div class="about-card">
                    <h3>Quick Facts</h3>
                    <ul>
                        <li><strong>Role:</strong> Full Stack Developer</li>
                        <li><strong>Specialties:</strong> Web apps, C#, Java, Kotlin</li>
                        <li><strong>Built with:</strong> PHP, JavaScript, C#, Java, Kotlin</li>
                        <li><strong>Focus:</strong> employer-ready demos and polished interfaces</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="section skill-section" id="skills">
            <div class="container">
                <h2>Skills</h2>
                <div class="skill-grid">
                    <?php foreach ($skills as $skill): ?>
                        <span class="skill-chip"><?php echo htmlspecialchars($skill); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section projects-section" id="projects">
            <div class="container">
                <h2>Featured Projects</h2>
                <div class="project-grid">
                    <?php foreach ($projects as $project): ?>
                        <article class="project-card">
                            <h3><?php echo htmlspecialchars($project['title']); ?></h3>
                            <p><?php echo htmlspecialchars($project['description']); ?></p>
                            <a class="project-link" href="<?php echo htmlspecialchars($project['link']); ?>" target="_blank" rel="noopener">View on GitHub</a>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section contact-section" id="contact">
            <div class="container contact-card">
                <div>
                    <h2>Contact</h2>
                    <p>Ready to hire a developer who can deliver clean code, polished UI, and employer-ready portfolio work? Send a message or connect on GitHub.</p>
                    <a class="button button-primary" href="mailto:<?php echo htmlspecialchars($contactEmail); ?>">Email Me</a>
                    <a class="button button-secondary" href="<?php echo $githubUrl; ?>" target="_blank" rel="noopener">GitHub Profile</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-inner">
            <p>&copy; <?php echo $year; ?> <?php echo htmlspecialchars($name); ?>. Built for your GitHub portfolio.</p>
        </div>
    </footer>
</body>
</html>
