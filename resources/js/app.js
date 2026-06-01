/* ============================================================
   PORTFOLIO JS — CYBER/INFORMATIKA THEME
   Features: Custom cursor, Terminal typing, Skill bars,
   Project filter, Timeline tabs, Scroll animations, Particles
   ============================================================ */

   'use strict';

   // ==================== CUSTOM CURSOR ====================
   const cursorFollower = document.getElementById('cursorFollower');
   const cursorDot = document.getElementById('cursorDot');
   let mouseX = 0, mouseY = 0, followerX = 0, followerY = 0;
   
   document.addEventListener('mousemove', (e) => {
       mouseX = e.clientX;
       mouseY = e.clientY;
       cursorDot.style.left = mouseX + 'px';
       cursorDot.style.top = mouseY + 'px';
   });
   
   function animateCursor() {
       followerX += (mouseX - followerX) * 0.12;
       followerY += (mouseY - followerY) * 0.12;
       if (cursorFollower) {
           cursorFollower.style.left = followerX + 'px';
           cursorFollower.style.top = followerY + 'px';
       }
       requestAnimationFrame(animateCursor);
   }
   animateCursor();
   
   // Scale cursor on hover
   document.querySelectorAll('a, button, .skill-item, .project-card, .cert-card').forEach(el => {
       el.addEventListener('mouseenter', () => {
           if (cursorFollower) cursorFollower.style.transform = 'translate(-50%, -50%) scale(2)';
           if (cursorDot) cursorDot.style.transform = 'translate(-50%, -50%) scale(0.5)';
       });
       el.addEventListener('mouseleave', () => {
           if (cursorFollower) cursorFollower.style.transform = 'translate(-50%, -50%) scale(1)';
           if (cursorDot) cursorDot.style.transform = 'translate(-50%, -50%) scale(1)';
       });
   });
   
   // ==================== NAVBAR ====================
   const navbar = document.getElementById('navbar');
   const navProgress = document.getElementById('navProgress');
   const navToggle = document.getElementById('navToggle');
   const navLinks = document.getElementById('navLinks');
   const scrollTop = document.getElementById('scrollTop');
   
   window.addEventListener('scroll', () => {
       // Navbar scroll class
       if (window.scrollY > 50) {
           navbar.classList.add('scrolled');
       } else {
           navbar.classList.remove('scrolled');
       }
   
       // Progress bar
       const docHeight = document.documentElement.scrollHeight - window.innerHeight;
       const progress = (window.scrollY / docHeight) * 100;
       if (navProgress) navProgress.style.width = progress + '%';
   
       // Scroll-to-top button
       if (scrollTop) {
           if (window.scrollY > 500) scrollTop.classList.add('visible');
           else scrollTop.classList.remove('visible');
       }
   
       // Active nav link
       updateActiveNavLink();
   });
   
   function updateActiveNavLink() {
       const sections = document.querySelectorAll('section[id]');
       const navLinkEls = document.querySelectorAll('.nav-link');
       let current = '';
   
       sections.forEach(section => {
           const sectionTop = section.offsetTop - 100;
           if (window.scrollY >= sectionTop) {
               current = section.getAttribute('id');
           }
       });
   
       navLinkEls.forEach(link => {
           link.classList.remove('active');
           if (link.getAttribute('data-section') === current) {
               link.classList.add('active');
           }
       });
   }
   
   // Mobile nav toggle
   if (navToggle) {
       navToggle.addEventListener('click', () => {
           navLinks.classList.toggle('open');
           // Animate hamburger
           const spans = navToggle.querySelectorAll('span');
           if (navLinks.classList.contains('open')) {
               spans[0].style.transform = 'rotate(45deg) translate(5px, 6px)';
               spans[1].style.opacity = '0';
               spans[2].style.transform = 'rotate(-45deg) translate(5px, -6px)';
           } else {
               spans[0].style.transform = '';
               spans[1].style.opacity = '';
               spans[2].style.transform = '';
           }
       });
   }
   
   // Close nav on link click
   document.querySelectorAll('.nav-link').forEach(link => {
       link.addEventListener('click', () => {
           navLinks.classList.remove('open');
       });
   });
   
   // Scroll to top
   if (scrollTop) {
       scrollTop.addEventListener('click', () => {
           window.scrollTo({ top: 0, behavior: 'smooth' });
       });
   }
   
   // ==================== TERMINAL HERO ANIMATION ====================
   function typeText(element, text, speed = 60, callback) {
       let i = 0;
       element.textContent = '';
       const interval = setInterval(() => {
           element.textContent += text[i];
           i++;
           if (i >= text.length) {
               clearInterval(interval);
               if (callback) setTimeout(callback, 300);
           }
       }, speed);
   }
   
   const heroCmd1 = document.getElementById('heroCmd1');
   const heroOutput1 = document.getElementById('heroOutput1');
   
   if (heroCmd1 && heroOutput1) {
       setTimeout(() => {
           typeText(heroCmd1, 'whoami --verbose --show-all', 45, () => {
               heroOutput1.style.display = 'grid';
               heroOutput1.style.animation = 'fadeIn 0.5s ease both';
               // Start hero typing animation
               startHeroTyping();
               // Animate floating badges
               document.querySelectorAll('.tech-badge').forEach((badge, i) => {
                   badge.style.animationDelay = `${i * 0.2}s`;
               });
           });
       }, 600);
   }
   
   // Hero role typing animation
   const heroRoles = [
       'Full Stack Developer',
       'Laravel Enthusiast',
       'UI/UX Implementer',
       'Problem Solver',
       'Open Source Contributor',
       'Informatika Graduate'
   ];
   let roleIndex = 0;
   let charIndex = 0;
   let isDeleting = false;
   const heroTyping = document.getElementById('heroTyping');
   
   function startHeroTyping() {
       if (!heroTyping) return;
   
       function type() {
           const currentRole = heroRoles[roleIndex % heroRoles.length];
   
           if (isDeleting) {
               heroTyping.textContent = currentRole.substring(0, charIndex - 1);
               charIndex--;
           } else {
               heroTyping.textContent = currentRole.substring(0, charIndex + 1);
               charIndex++;
           }
   
           let delay = isDeleting ? 50 : 90;
   
           if (!isDeleting && charIndex === currentRole.length) {
               delay = 2000;
               isDeleting = true;
           } else if (isDeleting && charIndex === 0) {
               isDeleting = false;
               roleIndex++;
               delay = 400;
           }
   
           setTimeout(type, delay);
       }
   
       type();
   }
   
   // ==================== FOOTER UPTIME ====================
   const footerUptime = document.getElementById('footerUptime');
   if (footerUptime) {
       const startTime = Date.now();
       setInterval(() => {
           const elapsed = Math.floor((Date.now() - startTime) / 1000);
           const h = String(Math.floor(elapsed / 3600)).padStart(2, '0');
           const m = String(Math.floor((elapsed % 3600) / 60)).padStart(2, '0');
           const s = String(elapsed % 60).padStart(2, '0');
           footerUptime.textContent = `${h}:${m}:${s}`;
       }, 1000);
   }
   
   // ==================== SCROLL REVEAL ====================
   const revealObserver = new IntersectionObserver((entries) => {
       entries.forEach((entry, i) => {
           if (entry.isIntersecting) {
               setTimeout(() => {
                   entry.target.classList.add('visible');
               }, i * 80);
               revealObserver.unobserve(entry.target);
           }
       });
   }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
   
   document.querySelectorAll('.section-header, .about-grid, .skill-category, .project-card, .timeline-item, .cert-card, .highlight-card').forEach(el => {
       el.classList.add('reveal');
       revealObserver.observe(el);
   });
   
   // ==================== SKILL BARS ====================
   const skillObserver = new IntersectionObserver((entries) => {
       entries.forEach(entry => {
           if (entry.isIntersecting) {
               entry.target.querySelectorAll('.skill-fill').forEach(bar => {
                   const targetWidth = bar.getAttribute('data-width');
                   setTimeout(() => {
                       bar.style.width = targetWidth + '%';
                   }, 200);
               });
               skillObserver.unobserve(entry.target);
           }
       });
   }, { threshold: 0.3 });
   
   document.querySelectorAll('.skill-category').forEach(cat => skillObserver.observe(cat));
   
   // ==================== PROJECT FILTER ====================
   const filterBtns = document.querySelectorAll('.filter-btn');
   const projectCards = document.querySelectorAll('.project-card');
   
   filterBtns.forEach(btn => {
       btn.addEventListener('click', () => {
           filterBtns.forEach(b => b.classList.remove('active'));
           btn.classList.add('active');
   
           const filter = btn.getAttribute('data-filter');
   
           projectCards.forEach((card, i) => {
               const category = card.getAttribute('data-category');
               if (filter === 'all' || category === filter) {
                   card.classList.remove('hide');
                   card.style.animationDelay = `${i * 0.05}s`;
                   card.style.animation = 'fadeIn 0.4s ease both';
               } else {
                   card.classList.add('hide');
               }
           });
       });
   });
   
   // ==================== TIMELINE TABS ====================
   const tabBtns = document.querySelectorAll('.tab-btn');
   const tabPanels = document.querySelectorAll('.timeline-panel');
   
   tabBtns.forEach(btn => {
       btn.addEventListener('click', () => {
           const target = btn.getAttribute('data-tab');
   
           tabBtns.forEach(b => b.classList.remove('active'));
           tabPanels.forEach(p => p.classList.remove('active'));
   
           btn.classList.add('active');
           const panel = document.getElementById(`tab-${target}`);
           if (panel) {
               panel.classList.add('active');
               panel.style.animation = 'fadeInUp 0.4s ease both';
           }
       });
   });
   
   // ==================== PARTICLES ====================
   function createParticles() {
       const container = document.getElementById('heroParticles');
       if (!container) return;
   
       const chars = ['0', '1', '{', '}', '<', '>', '/', ';', '()', '&&', '||', '=>', '#', '@'];
       const colors = ['rgba(0,255,65,0.15)', 'rgba(128,0,0,0.2)', 'rgba(0,245,255,0.1)'];
   
       for (let i = 0; i < 30; i++) {
           const particle = document.createElement('div');
           particle.style.cssText = `
               position: absolute;
               font-family: 'Share Tech Mono', monospace;
               font-size: ${Math.random() * 10 + 8}px;
               color: ${colors[Math.floor(Math.random() * colors.length)]};
               left: ${Math.random() * 100}%;
               top: ${Math.random() * 100}%;
               animation: particleDrift ${Math.random() * 20 + 15}s linear infinite;
               animation-delay: ${Math.random() * -20}s;
               pointer-events: none;
               user-select: none;
           `;
           particle.textContent = chars[Math.floor(Math.random() * chars.length)];
           container.appendChild(particle);
       }
   }
   
   // Add particle keyframes dynamically
   const style = document.createElement('style');
   style.textContent = `
       @keyframes particleDrift {
           0%   { transform: translateY(100vh) rotate(0deg); opacity: 0; }
           10%  { opacity: 1; }
           90%  { opacity: 1; }
           100% { transform: translateY(-100px) rotate(720deg); opacity: 0; }
       }
   `;
   document.head.appendChild(style);
   createParticles();
   
   // ==================== GLITCH EFFECT ON SECTION TITLES ====================
   document.querySelectorAll('.section-title').forEach(title => {
       title.addEventListener('mouseenter', function () {
           this.style.animation = 'none';
           this.offsetHeight; // reflow
           this.style.animation = 'glitch 0.4s ease';
       });
   });
   
   const glitchStyle = document.createElement('style');
   glitchStyle.textContent = `
       @keyframes glitch {
           0%   { transform: translate(0); }
           10%  { transform: translate(-2px, 1px); filter: hue-rotate(90deg); }
           20%  { transform: translate(2px, -1px); }
           30%  { transform: translate(-1px, 2px); filter: hue-rotate(180deg); }
           40%  { transform: translate(1px, -1px); }
           50%  { transform: translate(-2px, 1px); filter: hue-rotate(270deg); }
           60%  { transform: translate(2px, 1px); }
           70%  { transform: translate(-1px, -1px); filter: hue-rotate(0deg); }
           80%  { transform: translate(1px, 2px); }
           90%  { transform: translate(0); }
           100% { transform: translate(0); }
       }
   `;
   document.head.appendChild(glitchStyle);
   
   // ==================== ABOUT CODE ANIMATION ====================
   // Animate code block lines one by one
   const aboutCode = document.getElementById('aboutCode');
   if (aboutCode) {
       const codeObserver = new IntersectionObserver((entries) => {
           entries.forEach(entry => {
               if (entry.isIntersecting) {
                   entry.target.style.animation = 'fadeIn 1s ease both';
                   codeObserver.unobserve(entry.target);
               }
           });
       }, { threshold: 0.5 });
       codeObserver.observe(aboutCode);
   }
   
   // ==================== CONTACT FORM ====================
   const contactForm = document.getElementById('contactForm');
   if (contactForm) {
       contactForm.addEventListener('submit', function (e) {
           const submitBtn = document.getElementById('submitBtn');
           if (submitBtn) {
               submitBtn.querySelector('.btn-text').style.display = 'none';
               submitBtn.querySelector('.btn-loading').style.display = 'inline';
               submitBtn.disabled = true;
           }
       });
   
       // Input glow effects
       contactForm.querySelectorAll('.form-input').forEach(input => {
           input.addEventListener('focus', function () {
               this.parentElement.querySelector('.form-line').style.width = '100%';
           });
           input.addEventListener('blur', function () {
               if (!this.value) {
                   this.parentElement.querySelector('.form-line').style.width = '0%';
               }
           });
       });
   }
   
   // ==================== SMOOTH ANCHOR SCROLL ====================
   document.querySelectorAll('a[href^="#"]').forEach(anchor => {
       anchor.addEventListener('click', function (e) {
           const target = document.querySelector(this.getAttribute('href'));
           if (target) {
               e.preventDefault();
               const offset = 70;
               const top = target.getBoundingClientRect().top + window.scrollY - offset;
               window.scrollTo({ top, behavior: 'smooth' });
           }
       });
   });
   
   // ==================== MATRIX RAIN (canvas, subtle) ====================
   function initMatrixRain() {
       const canvas = document.createElement('canvas');
       canvas.style.cssText = `
           position: fixed; top: 0; left: 0;
           width: 100%; height: 100%;
           z-index: 0; pointer-events: none;
           opacity: 0.02;
       `;
       document.body.prepend(canvas);
   
       const ctx = canvas.getContext('2d');
       canvas.width = window.innerWidth;
       canvas.height = window.innerHeight;
   
       window.addEventListener('resize', () => {
           canvas.width = window.innerWidth;
           canvas.height = window.innerHeight;
           initDrops();
       });
   
       const fontSize = 14;
       const cols = Math.floor(canvas.width / fontSize);
       let drops = [];
   
       function initDrops() {
           drops = Array(Math.floor(canvas.width / fontSize)).fill(1);
       }
       initDrops();
   
       const chars = '01アイウエオカキクケコ<>/{}[]ابتثجحخدذرزسشصضطظعغفقكلمنهوي';
   
       function draw() {
           ctx.fillStyle = 'rgba(0, 0, 0, 0.05)';
           ctx.fillRect(0, 0, canvas.width, canvas.height);
           ctx.fillStyle = '#00FF41';
           ctx.font = `${fontSize}px 'Share Tech Mono', monospace`;
   
           drops.forEach((y, i) => {
               const char = chars[Math.floor(Math.random() * chars.length)];
               ctx.fillText(char, i * fontSize, y * fontSize);
               if (y * fontSize > canvas.height && Math.random() > 0.975) drops[i] = 0;
               drops[i]++;
           });
       }
   
       setInterval(draw, 60);
   }
   
   // Only run matrix rain on desktop for performance
   if (window.innerWidth > 768) {
       initMatrixRain();
   }
   
   // ==================== NAV ACTIVE ON LOAD ====================
   document.addEventListener('DOMContentLoaded', () => {
       updateActiveNavLink();
   });
   
   console.log(
       '%c DEV.PORTFOLIO %c Crafted with Laravel & ❤️ ',
       'background: #800000; color: #00FF41; font-family: monospace; font-size: 14px; padding: 6px 12px; font-weight: bold;',
       'background: #000; color: #888; font-family: monospace; font-size: 14px; padding: 6px 12px;'
   );