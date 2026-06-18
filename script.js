// Mobile Menu Toggle
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');

if (hamburger) {
    hamburger.addEventListener('click', () => {
        navMenu.classList.toggle('active');
    });
}

// Search with Auto-Suggest
const searchData = [
    { name: 'Gymnasium', icon: 'fa-dumbbell', link: 'tour.html#gym' },
    { name: 'Science Lab', icon: 'fa-flask', link: 'tour.html#sciencelab' },
    { name: 'Computer Lab', icon: 'fa-laptop', link: 'tour.html#comlab' },
    { name: 'Library', icon: 'fa-book', link: 'tour.html#library' },
    { name: 'Cafeteria', icon: 'fa-utensils', link: 'tour.html#cafeteria' },
    { name: 'Auditorium', icon: 'fa-theater-masks', link: 'tour.html#auditorium' },
    { name: 'Art Room', icon: 'fa-palette', link: 'tour.html#artroom' },
    { name: 'Music Room', icon: 'fa-music', link: 'tour.html#musicroom' },
    { name: 'Playground', icon: 'fa-child', link: 'tour.html#playground' },
    { name: 'Principal Office', icon: 'fa-user-tie', link: 'tour.html#office' }
];

const searchInput = document.getElementById('searchInput');
const searchSuggestions = document.getElementById('searchSuggestions');

if (searchInput) {
    searchInput.addEventListener('input', (e) => {
        const value = e.target.value.toLowerCase();
        if (value.length > 0) {
            const filtered = searchData.filter(item => 
                item.name.toLowerCase().includes(value)
            );
            displaySuggestions(filtered);
        } else {
            searchSuggestions.classList.remove('active');
        }
    });
}

function displaySuggestions(items) {
    if (items.length > 0) {
        searchSuggestions.innerHTML = items.map(item => `
            <div class="suggestion-item" onclick="window.location.href='${item.link}'">
                <i class="fas ${item.icon}"></i>
                <span>${item.name}</span>
            </div>
        `).join('');
        searchSuggestions.classList.add('active');
    } else {
        searchSuggestions.innerHTML = '<div class="suggestion-item">No results found</div>';
        searchSuggestions.classList.add('active');
    }
}

// Close suggestions when clicking outside
document.addEventListener('click', (e) => {
    if (!e.target.closest('.search-container')) {
        if (searchSuggestions) {
            searchSuggestions.classList.remove('active');
        }
    }
});

// Notification Bell
const notificationBell = document.getElementById('notificationBell');
const notificationPanel = document.getElementById('notificationPanel');
const closeNotifications = document.querySelector('.close-notifications');

if (notificationBell) {
    notificationBell.addEventListener('click', () => {
        notificationPanel.classList.toggle('active');
    });
}

if (closeNotifications) {
    closeNotifications.addEventListener('click', () => {
        notificationPanel.classList.remove('active');
    });
}

// Newsletter Form
const newsletterForm = document.getElementById('newsletterForm');
if (newsletterForm) {
    newsletterForm.addEventListener('submit', (e) => {
        e.preventDefault();
        alert('Thank you for subscribing to our newsletter!');
        newsletterForm.reset();
    });
}

// Smooth Scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});

// Form Validation Helper
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function validatePassword(password) {
    return password.length >= 8;
}

// Local Storage Helper
function saveToLocalStorage(key, value) {
    localStorage.setItem(key, JSON.stringify(value));
}

function getFromLocalStorage(key) {
    const item = localStorage.getItem(key);
    return item ? JSON.parse(item) : null;
}

// Check if user is logged in
function isLoggedIn() {
    return getFromLocalStorage('currentUser') !== null;
}

// Update UI based on login status
function updateLoginStatus() {
    const loginBtn = document.querySelector('.login-btn');
    if (loginBtn && isLoggedIn()) {
        const user = getFromLocalStorage('currentUser');
        loginBtn.textContent = user.name;
        loginBtn.href = 'dashboard.html';
    }
}

// Run on page load
document.addEventListener('DOMContentLoaded', updateLoginStatus);
