/*
 *
 * CHATGPT - DARK MODE TOGGLE
 * 
 */ 



/*
  document.addEventListener('DOMContentLoaded', (event) => {
    const themeToggleBtn = document.getElementById('theme-toggle');
    const currentTheme = localStorage.getItem('theme') || 'light';

    document.documentElement.setAttribute('data-theme', currentTheme);

    themeToggleBtn.addEventListener('click', () => {
        let theme = document.documentElement.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
        document.documentElement.setAttribute('data-theme', theme);
        localStorage.setItem('theme', theme);
    });
});
*/

// CHATGPT - DARK MODE TOGGLE + adding icon toggle (this was woring as its changing clas sname,s not the content of the span )
/*
document.addEventListener('DOMContentLoaded', (event) => {
    const themeToggleBtn = document.getElementById('theme-toggle');
    const themeIcon = document.getElementById('theme-icon');
    const currentTheme = localStorage.getItem('theme') || 'light';

    document.documentElement.setAttribute('data-theme', currentTheme);
    updateIconClass(currentTheme);

    themeToggleBtn.addEventListener('click', () => {
        let theme = document.documentElement.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
        document.documentElement.setAttribute('data-theme', theme);
        localStorage.setItem('theme', theme);
        updateIconClass(theme);
    });

    function updateIconClass(theme) {
        if (theme === 'dark') {
            // themeIcon.classList.replace('fa-sun', 'fa-moon'); // Replace with your icons' classes
            themeIcon.classList.replace('light_mode', 'dark_mode'); // Replace with your icons' classes
        } else {
            // themeIcon.classList.replace('fa-moon', 'fa-sun'); // Replace with your icons' classes
            themeIcon.classList.replace('fa-moon', 'dark_mode'); // Replace with your icons' classes
        }
    }
});
*/

// CHATGPT - DARK MODE TOGGLE + adding icon toggle + specifying that its gogle ions 
/*
  document.addEventListener('DOMContentLoaded', (event) => {
    const themeToggleBtn = document.getElementById('theme-toggle');
    const themeIcon = document.getElementById('theme-icon');
    const currentTheme = localStorage.getItem('theme') || 'light';

    setTheme(currentTheme);

    themeToggleBtn.addEventListener('click', () => {
        let theme = document.documentElement.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
        setTheme(theme);
    });

    function setTheme(theme) {
        document.documentElement.setAttribute('data-theme', theme);
        localStorage.setItem('theme', theme);
        updateIcon(theme);
    }

    function updateIcon(theme) {
        if (theme === 'dark') {
            themeIcon.textContent = 'dark_mode'; // Icon for dark mode
        } else {
            themeIcon.textContent = 'light_mode'; // Icon for light mode
        }
    }
});
*/

// CHATGPT - DARK MODE TOGGLE + adding icon toggle + specifying that its gogle ions  +  chekcing for OIS setting 

document.addEventListener('DOMContentLoaded', (event) => {
    const themeToggleBtn = document.getElementById('theme-toggle');
    let currentTheme = localStorage.getItem('theme');

    // Check if there's a saved theme preference, otherwise use system preference
    if (!currentTheme) {
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            currentTheme = 'dark';
        } else {
            currentTheme = 'light';
        }
    }

    setTheme(currentTheme);

    themeToggleBtn.addEventListener('click', () => {
        let theme = document.documentElement.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
        setTheme(theme);
    });

    function setTheme(theme) {
        document.documentElement.setAttribute('data-theme', theme);
        localStorage.setItem('theme', theme);
        updateIcon(theme);
    }

    function updateIcon(theme) {
        const themeIcon = document.getElementById('theme-icon');
        if (theme === 'dark') {
            themeIcon.textContent = 'dark_mode';
        } else {
            themeIcon.textContent = 'light_mode';
        }
    }
});