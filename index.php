<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Kashish | Portfolio</title>
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<div id="preloader">
        <div class="loader-container">
            <div class="loader-circle"></div>
            <div class="loader-orbit">
                <div class="orbit-node node-top"><i class="fas fa-code"></i></div>
                <div class="orbit-node node-bottom"><i class="fas fa-layer-group"></i></div>
                <div class="orbit-node node-left"><i class="fas fa-terminal"></i></div>
                <div class="orbit-node node-right"><i class="fas fa-bolt"></i></div>
            </div>
            <div class="loader-text">WELCOME</div>
        </div>
    </div>
    <header>
        <nav class="navbar">
          <ul class="nav-links">    
                
                <li><a href="#home" class="active"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#about"><i class="fas fa-user"></i> About</a></li>
                <li><a href="#experience"><i class="fas fa-history"></i> Skills</a></li>
                
                <li><a href="#projects"><i class="fas fa-briefcase"></i> Projects</a></li>
                
                <li><a href="#services"><i class="fas fa-layer-group"></i> Services</a></li>
                
                <li><a href="#contact"><i class="fas fa-envelope"></i> Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero section-container">
        <div class="hero-content">
            <span class="badge">AVAILABLE FOR PROJECTS</span>
            <h1>Hi, I'm <span class="highlight">Kashish</span></h1>
            <h2>Full Stack Developer</h2>
            <p>I create beautiful, functional, and user-centered digital experiences. With a passion for web development, I bring ideas to life through clean code.</p>
            
            <div class="buttons">
                <a href="#contact" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Hire Me</a>
                <a href="#" class="btn btn-secondary"><i class="fas fa-download"></i> Download CV</a>
            </div>

            <div class="socials">
                <p>Follow me:</p>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <div class="hero-image glow-box">
            <img src="./assets/profile.webp" alt="Profile">
        </div>
    </section>

    <section id="about" class="section-container">
        <h2 class="section-title">About Me</h2>
        <div class="about-content">
            <div class="about-text glow-box">
                <h3>Hi! I'm <span class="highlight">Kashish</span>A Full Stack Developer with a deep love for creating beautiful, intuitive digital spaces. Combining my background in Information Technology with a sharp eye for visual design, I bring a unique blend of creativity and technical logic to my work. To me, every line of code and every pixel tells a story—and I love making sure it's a good one✨.</p>
                
                
                <div class="skills-tags">
                    <span>C</span>
                    <span>C++</span>
                    <span>HTML</span>
                    <span>CSS </span>
                    <span>JavaScript</span>
                    <span>Bootstrap</span>
                    <span>PHP</span>
                    <span>Python</span>
                    <span>Django</span>
                    <span>React Native</span>
                    <span>Figma / UI Design</span>
                </div>
            </div>
            
            <div class="about-image glow-box">
                <img src="./assets/about.webp" alt="About Me Character">
            </div>
        </div>
    </section>

    <section id="experience" class="section-container">
        <h2 class="section-title">Experience & Skills</h2>
        
        <div class="timeline">
            
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content glow-box">
                    <h3>2+ Years Practical Experience</h3>
                    <h3><strong>3 major full-stack projects</strong></h3>
                     <h5 style="font-size: 1.5rem; font-style: italic; color: var(--text-main); margin-bottom: 15px; font-weight: 400; line-height: 1.8;">
                        "Make it work, make it right, make it fast."
                    </h5>
                </div>
            </div>      
                </div>
            </div>
    </section>

    <section id="experience" class="section-container">
        <h2 class="section-title">What I Do</h2>
        
        <div class="grid-container">
            
            <div class="service-card glow-box" style="text-align: center; padding: 40px 20px;">
                <i class="fas fa-laptop-code service-icon" style="font-size: 3.5rem; color: var(--primary-purple); margin-bottom: 20px;"></i>
                <h3 style="color: var(--text-main); margin-bottom: 15px; font-size: 1.5rem;">Web Development</h3>
                <p style="color: var(--text-muted); margin-bottom: 25px; flex-grow: 1;">
                    Building scalable, responsive, and dynamic websites. From clean frontend interfaces to robust backend architectures using frameworks like Django and PHP.
                </p>
                <div class="tags" style="display: flex; flex-wrap: wrap; gap: 8px; justify-content: center;">
                    <span>Full-Stack</span>
                    <span>PHP</span>
                    <span>Django</span>
                    <span>Responsive UI</span>
                </div>
            </div>

            <div class="service-card glow-box" style="text-align: center; padding: 40px 20px;">
                <i class="fas fa-mobile-screen-button service-icon" style="font-size: 3.5rem; color: var(--primary-purple); margin-bottom: 20px;"></i>
                <h3 style="color: var(--text-main); margin-bottom: 15px; font-size: 1.5rem;">App Development</h3>
                <p style="color: var(--text-muted); margin-bottom: 25px; flex-grow: 1;">
                    Creating cross-platform mobile applications with intuitive user experiences. Specialized in building fast, reliable mobile solutions using React Native.
                </p>
                <div class="tags" style="display: flex; flex-wrap: wrap; gap: 8px; justify-content: center;">
                    <span>React Native</span>
                    <span>Mobile UI</span>
                    
                </div>
            </div>

            <div class="service-card glow-box" style="text-align: center; padding: 40px 20px;">
                <i class="fas fa-pen-nib service-icon" style="font-size: 3.5rem; color: var(--primary-purple); margin-bottom: 20px;"></i>
                <h3 style="color: var(--text-main); margin-bottom: 15px; font-size: 1.5rem;">Logo & Brand Design</h3>
                <p style="color: var(--text-muted); margin-bottom: 25px; flex-grow: 1;">
                    Crafting unique, memorable logos and visual identities. I help businesses capture their essence and stand out with professional, aesthetic branding.
                </p>
                <div class="tags" style="display: flex; flex-wrap: wrap; gap: 8px; justify-content: center;">
                    <span>Logo Design</span>
                    <span>Branding</span>
                   
                </div>
            </div>

        </div>
    </section>

    <section id="projects" class="section-container">
        <h2 class="section-title">Projects</h2>
        
        <style>
            .project-card-text-only {
                padding: 40px 30px; 
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                height: 100%;
            }
            .project-card-text-only h3 {
                font-size: 1.5rem;
                color: var(--text-main);
                margin-bottom: 15px;
            }
            .project-card-text-only p {
                color: var(--text-muted);
                margin-bottom: 25px;
                line-height: 1.6;
                flex-grow: 1; 
            }
            
            .round-tech-tags {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
                margin-bottom: 25px;
            }
            .round-tech-tags span {
                background: rgba(224, 187, 228, 0.25); 
                color: #5D3A7A; 
                padding: 6px 16px;
                border-radius: 50px; 
                font-size: 0.85rem;
                font-weight: 500; 
                border: 1px solid rgba(224, 187, 228, 0.6); 
                letter-spacing: 0.5px;
            }
            
            /* --- UPDATED BUTTON STYLES --- */
            .project-links {
                display: flex;
                width: 100%; /* Forces the container to take full width */
            }
            .project-links a {
                padding: 12px 20px; /* Made the button slightly taller/bigger */
                border-radius: 30px;
                text-decoration: none;
                font-weight: 600;
                font-size: 1rem; /* Slightly larger text */
                transition: 0.3s;
                width: 100%; /* Makes the button stretch all the way across */
                display: flex;
                justify-content: center; /* Centers the text horizontally */
                align-items: center; /* Centers the text vertically */
                gap: 8px; /* Adds nice space between the GitHub icon and the word "Code" */
            }
            .btn-outline {
                border: 2px solid #BA55D3;
                color: #5D3A7A; /* FIXED: Deep purple text so it is highly visible! */
                background: transparent;
            }
            .btn-outline:hover {
                background: #BA55D3; /* Fills with purple on hover */
                color: #ffffff; /* Text turns white on hover */
                box-shadow: 0 5px 15px rgba(186, 85, 211, 0.3); /* Adds a soft glow */
                transform: translateY(-2px); /* Makes it lift up slightly */
            }
        </style>

        <div class="grid-container">
            
            <div class="project-card project-card-text-only glow-box">
                <div class="project-content">
                    <h3>Melt and Smile</h3>
                    <p>A beautifully designed e-commerce platform featuring product filtering, a dynamic shopping cart, and a seamless checkout experience.</p>
                    
                    <div class="round-tech-tags">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>JavaScript</span>
                        <span>PHP</span>
                    </div>
                    
                    <div class="project-links">
                        <a href="#" class="btn-outline"><i class="fab fa-github"></i> Code</a>
                    </div>
                </div>
            </div>

            <div class="project-card project-card-text-only glow-box">
                <div class="project-content">
                    <h3>Online Voting System</h3>
                    <p>A secure and transparent digital election platform with user authentication, real-time vote tracking, and automated result generation.</p>
                    
                    <div class="round-tech-tags">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>JavaScript</span>
                        <span>Bootstrap</span>
                        <span>PHP</span>
                        <span>MySQL</span>
                    </div>
                    
                    <div class="project-links">
                        <a href="#" class="btn-outline"><i class="fab fa-github"></i> Code</a>
                    </div>
                </div>
            </div>

            <div class="project-card project-card-text-only glow-box">
                <div class="project-content">
                    <h3>City Complain Portal</h3>
                    <p>A civic engagement web application allowing residents to report local issues, upload images, and track the resolution status with city officials.</p>
                    
                    <div class="round-tech-tags">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>JavaScript</span>
                        <span>Bootstrap</span>
                        <span>PHP</span>
                    </div>
                    
                    <div class="project-links">
                        <a href="#" class="btn-outline"><i class="fab fa-github"></i> Code</a>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section id="services" class="section-container">
        <h2 class="section-title">Services</h2>
        
        <div style="display: flex; justify-content: center;">
            
            <div class="service-card glow-box" style="max-width: 650px; text-align: center; padding: 40px 30px;">
                <i class="fas fa-layer-group service-icon" style="font-size: 3.5rem; color: var(--primary-purple); margin-bottom: 20px;"></i>
                
                <h3 style="color: var(--text-main); margin-bottom: 15px; font-size: 1.8rem;">End-to-End Digital Solutions</h3>
                
                <p style="color: var(--text-muted); margin-bottom: 25px; font-size: 1rem; line-height: 1.7;">
                    From engineering robust backend architectures and crafting cross-platform mobile applications, to designing memorable brand logos. I deliver complete, user-centered digital experiences that look beautiful and perform flawlessly.
                </p>
                
                <div class="service-tags" style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center;">
                    <span> Web Development</span>
                    <span>React Native Apps development</span>
                    <span>Logo & Branding</span>
                    <span>Responsive UI/UX</span>
                </div>
            </div>

        </div>
    </section>
        
    
    <section id="contact" style="background: linear-gradient(180deg, #2A143A 0%, #15091D 100%); padding: 100px 20px;">
        
        <style>
            .contact-wrapper {
                max-width: 900px; /* Widened to use much more left/right space! */
                width: 100%;
                margin: 0 auto;
                text-align: center;
                display: block !important; /* This completely stops the column squishing */
                font-family: 'Poppins', sans-serif;
            }
            .contact-overline {
                font-size: 0.9rem;
                letter-spacing: 3px;
                text-transform: uppercase;
                color: #DA70D6; 
                margin-bottom: 20px;
                display: block !important;
            }
            .contact-heading {
                font-size: 3.5rem; /* Made slightly larger */
                font-weight: 700;
                line-height: 1.2;
                margin-bottom: 25px;
                color: #ffffff !important; /* Forces the heading to be bright white */
                display: block !important;
            }
            .contact-heading span {
                font-family: 'Georgia', serif; 
                font-style: italic;
                font-weight: 400;
                color: #E0BBE4 !important;
            }
            .contact-subtext {
                font-size: 1.1rem;
                color: rgba(255, 255, 255, 0.8) !important;
                margin: 0 auto 45px auto;
                max-width: 700px;
                line-height: 1.6;
                display: block !important;
            }
            
            /* Form Grid Layout */
            .custom-form {
                display: flex !important;
                flex-direction: column !important; /* Forces form to stack top-to-bottom */
                gap: 25px;
                width: 100%;
                max-width: 850px; /* Widens the form inputs */
                margin: 0 auto;
                text-align: left;
            }
            .form-row {
                display: flex;
                gap: 25px;
                width: 100%;
            }
            .custom-form input, 
            .custom-form textarea {
                width: 100%;
                background: rgba(255, 255, 255, 0.05);
                border: 1px solid rgba(255, 255, 255, 0.15);
                color: #ffffff;
                padding: 18px 25px;
                border-radius: 12px;
                font-family: 'Poppins', sans-serif;
                font-size: 1rem;
                outline: none;
                transition: all 0.3s ease;
            }
            .custom-form input::placeholder, 
            .custom-form textarea::placeholder {
                color: rgba(255, 255, 255, 0.5);
            }
            .custom-form input:focus, 
            .custom-form textarea:focus {
                border-color: #DA70D6;
                background: rgba(255, 255, 255, 0.08);
                box-shadow: 0 0 15px rgba(218, 112, 214, 0.25);
            }
            
            /* The Glowing Purple Button */
            .btn-purple {
                background: #BA55D3;
                color: #ffffff;
                padding: 18px 50px;
                border: none;
                border-radius: 40px;
                font-size: 1.15rem;
                font-weight: 600;
                cursor: pointer;
                align-self: center;
                margin-top: 15px;
                transition: all 0.3s ease;
                box-shadow: 0 8px 25px rgba(186, 85, 211, 0.3);
            }
            .btn-purple:hover {
                background: #ffffff;
                color: #2A143A;
                box-shadow: 0 10px 30px rgba(255, 255, 255, 0.4);
                transform: translateY(-3px);
            }

            /* Stack inputs on mobile screens */
            @media (max-width: 768px) {
                .form-row {
                    flex-direction: column;
                    gap: 25px;
                }
                .contact-heading {
                    font-size: 2.5rem;
                }
            }
        </style>

        <div class="contact-wrapper">
            <span class="contact-overline">— Reach Out</span>
            <h2 class="contact-heading">Begin Your<span>Masterpiece?</span></h2>
            <p class="contact-subtext">
                I'm currently accepting new projects. If you have a vision you'd like to bring to life, I'd love to hear from you. ✨
            </p>

            <form action="process.php" method="POST" class="custom-form">
                
                <div class="form-row">
                    <input type="text" name="name" placeholder="Enter Your Good Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>
                
                <input type="text" name="subject" placeholder="Project Type" required>
                
                <textarea name="message" rows="6" placeholder="Tell me about your project... 💜" style="resize: vertical;" required></textarea>
                
                <button type="submit" class="btn-purple">
                  Let's Create Magic ✨
                </button>
            </form>
        </div>
    </section>
    <footer style="background-color: #15091D; padding: 50px 20px 30px; text-align: center; border-top: 1px solid rgba(224, 187, 228, 0.1);">
        <div style="max-width: 800px; margin: 0 auto; display: flex; flex-direction: column; align-items: center; gap: 20px;">
            
            <h2 style="font-family: 'Georgia', serif; font-style: italic; color: #E0BBE4; margin: 0; font-size: 2.2rem; font-weight: 400;">
                Kashish 💜
            </h2>
            
            <div class="footer-socials" style="display: flex; gap: 25px; margin-top: 10px;">
                <a href="#" style="color: rgba(255, 255, 255, 0.5); font-size: 1.5rem; transition: color 0.3s ease;" onmouseover="this.style.color='#BA55D3'" onmouseout="this.style.color='rgba(255, 255, 255, 0.5)'"><i class="fab fa-github"></i></a>
                
                <a href="#" style="color: rgba(255, 255, 255, 0.5); font-size: 1.5rem; transition: color 0.3s ease;" onmouseover="this.style.color='#BA55D3'" onmouseout="this.style.color='rgba(255, 255, 255, 0.5)'"><i class="fab fa-linkedin-in"></i></a>
                
                <a href="mailto:raykashish0205@gmail.com" style="color: rgba(255, 255, 255, 0.5); font-size: 1.5rem; transition: color 0.3s ease;" onmouseover="this.style.color='#BA55D3'" onmouseout="this.style.color='rgba(255, 255, 255, 0.5)'"><i class="fas fa-envelope"></i></a>
            </div>
            
            <p style="color: rgba(255, 255, 255, 0.4); font-size: 0.9rem; margin-top: 20px; font-family: 'Poppins', sans-serif; letter-spacing: 0.5px;">
                &copy; 2026 Crafted with <i class="fas fa-heart" style="color: #BA55D3; margin: 0 3px;"></i> by Kashish. All rights reserved.
            </p>
            
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>