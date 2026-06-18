# 🚀 School Tour Website - Deployment Guide

## ✅ Files Ready for Production

### Essential Files (17):
**HTML Pages:**
- index.html
- about.html
- tour.html
- map.html
- contact.html
- faq.html
- login.html
- register.html
- dashboard.html
- help.html
- status.html
- privacy.html
- terms.html
- 404.html

**Assets:**
- styles.css
- script.js
- favicon.svg
- favicon.png (add your logo)

**Backend (PHP + MySQL):**
- config.php
- database.sql
- api/login.php
- api/register.php
- api/logout.php
- api/contact.php
- api/newsletter.php

**Documentation:**
- README.md (kept for reference)
- DEPLOYMENT-GUIDE.md (this file)

---

## 🗄️ Database Setup

### Step 1: Import Database

**Using phpMyAdmin:**
1. Open phpMyAdmin
2. Click "Import" tab
3. Choose `database.sql`
4. Click "Go"

**Using MySQL Command Line:**
```bash
mysql -u root -p < database.sql
```

### Step 2: Configure Database Connection

Edit `config.php`:
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'your_db_user');
define('DB_PASS', 'your_db_password');
define('DB_NAME', 'school_tour_db');
```

### Step 3: Test Connection
- Open browser
- Go to: http://yoursite.com/api/login.php
- Should return JSON error (method not allowed) - this is correct!

---

## 🌐 Deployment Options

### Option 1: Shared Hosting (Easiest)

**Recommended Philippine Hosts:**
- Hostinger Philippines (₱99/month)
- Namecheap (₱120/month)
- GoDaddy Philippines
- WebHostingPad

**Steps:**
1. Purchase hosting with PHP + MySQL
2. Upload all files via FTP/File Manager
3. Import database.sql via phpMyAdmin
4. Update config.php with database credentials
5. Done!

---

### Option 2: VPS/Cloud Hosting

**Providers:**
- DigitalOcean (₱250/month)
- Vultr
- AWS Lightsail
- Google Cloud

**Requirements:**
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache/Nginx web server

**Installation:**
```bash
# Install LAMP stack
sudo apt update
sudo apt install apache2 php mysql-server
sudo apt install php-mysql php-json

# Upload files
cd /var/www/html
# Upload your files here

# Import database
mysql -u root -p < database.sql

# Set permissions
sudo chown -R www-data:www-data /var/www/html
sudo chmod -R 755 /var/www/html
```

---

### Option 3: Free Hosting (Testing Only)

**Free Hosts:**
- InfinityFree
- 000webhost
- Freehostia

**Note:** Free hosting has limitations:
- ❌ May be slow
- ❌ Ads may be displayed
- ❌ Limited database size
- ✅ Good for testing only

---

## 📁 File Structure

```
school-tour-website/
├── index.html
├── about.html
├── tour.html
├── map.html
├── contact.html
├── faq.html
├── login.html
├── register.html
├── dashboard.html
├── help.html
├── status.html
├── privacy.html
├── terms.html
├── 404.html
├── styles.css
├── script.js
├── favicon.svg
├── favicon.png
├── config.php
├── database.sql
├── README.md
├── DEPLOYMENT-GUIDE.md
└── api/
    ├── login.php
    ├── register.php
    ├── logout.php
    ├── contact.php
    └── newsletter.php
```

---

## 🔐 Default Login Credentials

After database import, use these test accounts:

**Admin Account:**
- Email: admin@schooltour.edu.ph
- Password: Admin1234!

**Demo Account:**
- Email: demo@schooltour.edu.ph
- Password: Demo1234!

**⚠️ IMPORTANT:** Change these passwords after deployment!

---

## ✅ Pre-Deployment Checklist

### Configuration:
- [ ] Update `config.php` with correct database credentials
- [ ] Import `database.sql` into MySQL
- [ ] Test database connection
- [ ] Add your school logo as `favicon.png`

### Content:
- [ ] Replace YouTube video ID in `tour.html`
- [ ] Update school address in all pages
- [ ] Update phone numbers
- [ ] Update email addresses
- [ ] Review all text content

### Security:
- [ ] Change default admin password
- [ ] Set proper file permissions
- [ ] Enable HTTPS/SSL
- [ ] Update database passwords

### Testing:
- [ ] Test registration
- [ ] Test login
- [ ] Test contact form
- [ ] Test newsletter signup
- [ ] Test on mobile devices

---

## 🚀 Quick Deploy Steps

### For Shared Hosting:

1. **Upload Files**
   - Use FileZilla or hosting File Manager
   - Upload all files to `public_html` folder

2. **Create Database**
   - Go to cPanel → MySQL Databases
   - Create database: `school_tour_db`
   - Create user and set password
   - Grant all privileges

3. **Import Database**
   - Go to phpMyAdmin
   - Select your database
   - Import `database.sql`

4. **Configure**
   - Edit `config.php` with your database details
   - Save changes

5. **Test**
   - Visit: http://yoursite.com
   - Try registering a new account
   - Try logging in

**Done!** Your website is live! 🎉

---

## 🔧 Post-Deployment

### SSL Certificate (HTTPS)
Most hosts provide free SSL via Let's Encrypt:
1. Go to cPanel → SSL/TLS
2. Install Let's Encrypt certificate
3. Force HTTPS redirect

### Email Setup
For contact form emails:
1. Set up email account
2. Install PHPMailer
3. Configure SMTP in contact API

### Backups
Set up automatic backups:
- Database: Weekly exports
- Files: Daily backups
- Use host's backup feature

---

## 📊 What Each API Does

| API | Purpose | Method |
|-----|---------|--------|
| api/login.php | User login | POST |
| api/register.php | New user registration | POST |
| api/logout.php | User logout | GET/POST |
| api/contact.php | Contact form submissions | POST |
| api/newsletter.php | Newsletter subscriptions | POST |

---

## 🌐 Domain Setup

### If you have a domain:

1. **Point domain to hosting**
   - Update DNS A record
   - Point to your server IP

2. **Configure in cPanel**
   - Add domain as primary or addon domain
   - Point to website folder

3. **Test**
   - Visit your domain
   - Should show your website

---

## 💡 Performance Tips

### Optimize for Speed:
1. Enable Gzip compression
2. Minify CSS/JS (optional)
3. Optimize images
4. Enable browser caching
5. Use CDN for assets

### Add in `.htaccess`:
```apache
# Enable Gzip compression
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/html text/plain text/xml text/css text/javascript application/javascript
</IfModule>

# Browser caching
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType image/jpg "access plus 1 year"
    ExpiresByType image/jpeg "access plus 1 year"
    ExpiresByType image/gif "access plus 1 year"
    ExpiresByType image/png "access plus 1 year"
    ExpiresByType text/css "access plus 1 month"
    ExpiresByType application/javascript "access plus 1 month"
</IfModule>
```

---

## 🆘 Troubleshooting

### Issue: White screen
- Check PHP error log
- Verify database connection
- Check file permissions

### Issue: Login not working
- Verify database imported correctly
- Check API responses in browser console
- Ensure sessions are enabled

### Issue: Contact form not working
- Check database.sql imported
- Verify API is accessible
- Check browser console for errors

---

## 📞 Support

### Hosting Support:
- Contact your hosting provider
- Most have 24/7 support

### PHP/MySQL Issues:
- Check PHP version (needs 7.4+)
- Verify MySQL service running
- Check error logs

---

## ✅ Launch Checklist

**Before Going Live:**
- [ ] All content reviewed
- [ ] Database configured
- [ ] SSL certificate installed
- [ ] Default passwords changed
- [ ] Contact form tested
- [ ] Mobile responsive tested
- [ ] All links working
- [ ] Privacy policy updated
- [ ] Terms of service updated

**Your site is ready to deploy!** 🚀

---

## 📊 Summary

**Total Files:** 24
**Database Tables:** 5
**API Endpoints:** 5
**Deployment Time:** 30-60 minutes

**Hosting Cost:** ₱99-250/month

**Your professional school tour website with database backend is ready!** 🎓
