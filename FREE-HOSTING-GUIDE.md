# 🆓 FREE Hosting Deployment Guide

## ✅ Best FREE Hosting for Your School Tour Website

Your website works with free hosting! Here are the best options with PHP + MySQL support.

---

## 🥇 Option 1: InfinityFree (RECOMMENDED)

### ✅ Why InfinityFree?
- ✅ **Unlimited bandwidth** and storage
- ✅ **PHP 8.1** support
- ✅ **MySQL databases** (400 databases!)
- ✅ **Free SSL certificate**
- ✅ **No ads** on your website
- ✅ **cPanel** included
- ✅ **Free subdomain** (yourschool.infinityfreeapp.com)
- ✅ **99.9% uptime**
- ✅ Filipino community support

### ⚠️ Limitations:
- 50,000 hits per day (more than enough for school)
- Some restrictions on cron jobs
- Support via forum only

### 📝 Step-by-Step Setup:

#### **Step 1: Create Account (5 minutes)**

1. Go to: **https://infinityfree.net**
2. Click **"Sign Up Now"** (green button)
3. Fill in:
   - Email address (use your school email)
   - Password (create strong password)
4. Click **"Create Account"**
5. Check email for verification link
6. Click verification link

#### **Step 2: Create Website (3 minutes)**

1. After login, click **"Create Account"** (not user account, but hosting account)
2. Choose subdomain:
   - Enter: `yourschoolname` (example: `manilaschool`)
   - Choose: `.infinityfreeapp.com`
   - Result: `manilaschool.infinityfreeapp.com`
3. Leave "Use custom domain" unchecked (unless you have domain)
4. Click **"Create Account"**
5. Wait 2-5 minutes for account creation

#### **Step 3: Upload Files (10 minutes)**

**Option A: Using File Manager (Easiest)**

1. Click **"Control Panel"** button
2. Find **"Online File Manager"** in cPanel
3. Click it
4. Navigate to `htdocs` folder (double-click to open)
5. **Delete** all files inside (select all → Delete)
6. Click **"Upload"** button at top
7. Drag all **24 files** from your computer
8. Wait for upload to complete

**Option B: Using FTP**

1. In cPanel, find **"FTP Accounts"**
2. Note down:
   - FTP Server: `ftpupload.net`
   - Username: (shown on page)
   - Password: (create new or use existing)
   - Port: 21
3. Download FileZilla: https://filezilla-project.org
4. Connect using above details
5. Upload all files to `htdocs` folder

#### **Step 4: Create Database (5 minutes)**

1. In cPanel, find **"MySQL Databases"**
2. Click it
3. **Create Database:**
   - Database Name: `school_tour_db`
   - Click **"Create Database"**
   - Note the full name (e.g., `epiz_12345678_school_tour_db`)

4. **Create Database User:**
   - Username: `school_admin`
   - Password: Create strong password (save it!)
   - Click **"Create User"**
   - Note the full username (e.g., `epiz_12345678_school_admin`)

5. **Add User to Database:**
   - User: Select your user
   - Database: Select your database
   - Click **"Add User to Database"**
   - Check **"ALL PRIVILEGES"**
   - Click **"Make Changes"**

#### **Step 5: Import Database (5 minutes)**

1. In cPanel, find **"phpMyAdmin"**
2. Click it (opens in new tab)
3. Click your database name on left (e.g., `epiz_12345678_school_tour_db`)
4. Click **"Import"** tab at top
5. Click **"Choose File"**
6. Select `database.sql` from your computer
7. Scroll down, click **"Go"** button
8. Wait for success message: "Import has been successfully finished"

#### **Step 6: Configure Database Connection (2 minutes)**

1. Back in File Manager, open `htdocs` folder
2. Find `config.php`
3. Right-click → **"Edit"**
4. Change these lines:

```php
// OLD:
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'school_tour_db');

// NEW (use your full database names from Step 4):
define('DB_HOST', 'sql200.infinityfree.com');  // ← Check in MySQL Databases for exact hostname
define('DB_USER', 'epiz_12345678_school_admin');  // ← Your full username
define('DB_PASS', 'your_password_here');          // ← Password you created
define('DB_NAME', 'epiz_12345678_school_tour_db'); // ← Your full database name
```

5. Click **"Save"**
6. Close editor

#### **Step 7: Enable SSL (5 minutes)**

1. Back in main control panel (InfinityFree account panel)
2. Find your website in list
3. Click **"Manage"**
4. Find **"SSL Certificates"** section
5. Click **"Install SSL"**
6. Wait 5-10 minutes for SSL to activate
7. Once active, you'll see green padlock 🔒

#### **Step 8: Test Website (5 minutes)**

1. Visit your website:
   - `http://yourschool.infinityfreeapp.com`
   - Or: `https://yourschool.infinityfreeapp.com` (with SSL)

2. **Test Homepage:**
   - Should load with all styling ✅

3. **Test Registration:**
   - Click "Register"
   - Create new account
   - Should succeed ✅

4. **Test Login:**
   - Use demo account:
     - Email: `demo@schooltour.edu.ph`
     - Password: `Demo1234!`
   - Should go to dashboard ✅

5. **Test Contact Form:**
   - Go to Contact page
   - Fill form and submit
   - Should see success message ✅

**🎉 Your website is LIVE and FREE!**

---

## 🥈 Option 2: 000webhost (Alternative)

### ✅ Features:
- ✅ 300 MB storage
- ✅ 3 GB bandwidth
- ✅ PHP 7.4 support
- ✅ 1 MySQL database
- ✅ Free SSL
- ✅ **NO ADS!**

### ⚠️ Limitations:
- 1 website only
- 1 hour/day downtime for maintenance
- Limited support

### 📝 Quick Setup:

1. **Sign Up:** https://www.000webhost.com
2. **Create Website:**
   - Choose subdomain: `yourschool.000webhostapp.com`
3. **Upload Files:**
   - Use File Manager in dashboard
   - Upload to `public_html` folder
4. **Create Database:**
   - Go to "Database" section
   - Create new database
   - Note credentials
5. **Import database.sql** via phpMyAdmin
6. **Update config.php** with database details
7. **Test!**

---

## 🥉 Option 3: FreeHosting.com

### ✅ Features:
- ✅ 10 GB storage
- ✅ Unlimited bandwidth
- ✅ PHP 7+ support
- ✅ MySQL database
- ✅ Free SSL
- ✅ cPanel

### ⚠️ Limitations:
- Shows small ads on free plan
- Slower than paid hosting

### 📝 Quick Setup:

1. **Sign Up:** https://www.freehosting.com
2. Follow similar steps as InfinityFree
3. Upload files to `public_html`
4. Create & import database
5. Update config.php
6. Test website

---

## 📊 Comparison Table

| Feature | InfinityFree | 000webhost | FreeHosting.com |
|---------|-------------|------------|-----------------|
| **Storage** | Unlimited | 300 MB | 10 GB |
| **Bandwidth** | Unlimited | 3 GB | Unlimited |
| **PHP** | 8.1 | 7.4 | 7+ |
| **MySQL** | ✅ Yes | ✅ Yes | ✅ Yes |
| **SSL** | ✅ Free | ✅ Free | ✅ Free |
| **Ads** | ❌ None | ❌ None | ⚠️ Yes (small) |
| **cPanel** | ✅ Yes | ❌ Custom | ✅ Yes |
| **Uptime** | 99.9% | 99% (1hr downtime) | 99% |
| **Support** | Forum | Email | Ticket |
| **Best For** | ⭐ Schools | Testing | Budget sites |

**🏆 WINNER: InfinityFree** (Best for your school!)

---

## ⚠️ Important Notes for Free Hosting

### ✅ What Works Great:
- All 24 files upload fine
- Database works perfectly
- Login/register system works
- Contact forms work
- Newsletter signup works
- SSL certificate included
- Enough for school needs

### ⚠️ What to Expect:
- Slightly slower than paid hosting
- May have occasional downtime (rare)
- Limited support (usually forum-based)
- Some restrictions on server resources
- Cannot use custom email (@yourschool.com)

### 💡 Pro Tips:
1. **Backup regularly** - Download files & database weekly
2. **Use CloudFlare** - Free CDN for faster loading (optional)
3. **Optimize images** - Keep file sizes small
4. **Monitor usage** - Stay within limits
5. **Upgrade later** - Can always move to paid hosting

---

## 🔄 Moving from Free to Paid Later

### When to Upgrade:
- ✅ More than 1,000 visitors per day
- ✅ Need faster loading speeds
- ✅ Want custom email (@yourschool.edu.ph)
- ✅ Need phone support
- ✅ Want guaranteed uptime

### Easy Migration:
1. Buy paid hosting (₱99/month)
2. Download all files from free hosting
3. Export database from phpMyAdmin
4. Upload to new hosting
5. Update DNS (if using domain)
6. Test new site
7. Cancel free hosting

**Takes 30 minutes!**

---

## 📱 Testing Checklist

After deployment, test these:

### ✅ Homepage:
- [ ] Loads correctly
- [ ] All images show
- [ ] Navigation works
- [ ] Newsletter signup works

### ✅ Virtual Tour:
- [ ] Page loads
- [ ] Floor navigation works
- [ ] Facility cards display
- [ ] Search function works

### ✅ Authentication:
- [ ] Registration works
- [ ] Login works (demo@schooltour.edu.ph / Demo1234!)
- [ ] Dashboard accessible
- [ ] Logout works

### ✅ Forms:
- [ ] Contact form submits
- [ ] Data saved to database
- [ ] Validation works

### ✅ Mobile:
- [ ] Responsive on phone
- [ ] All pages load
- [ ] Forms work on mobile
- [ ] Navigation menu works

### ✅ Security:
- [ ] SSL certificate active (🔒 padlock icon)
- [ ] HTTPS works
- [ ] Login secure

---

## 🆘 Troubleshooting

### Problem: "Database connection failed"

**Solution:**
1. Check `config.php` has correct credentials
2. Database hostname might be different:
   - InfinityFree: `sql200.infinityfree.com` (or similar)
   - 000webhost: `localhost`
3. Use FULL database names (e.g., `epiz_12345678_school_tour_db`)
4. Check database user has ALL PRIVILEGES

---

### Problem: "404 Not Found" errors

**Solution:**
1. Ensure files uploaded to `htdocs` or `public_html` folder
2. Check `.htaccess` file uploaded
3. Make sure file names are correct (case-sensitive)

---

### Problem: "Login not working"

**Solution:**
1. Check `database.sql` imported successfully
2. Verify default users exist in database (check via phpMyAdmin)
3. Clear browser cache
4. Try demo account: demo@schooltour.edu.ph / Demo1234!

---

### Problem: "Registration creates account but can't login"

**Solution:**
1. Check API files uploaded to `api/` folder
2. Verify `api/register.php` has correct database connection
3. Check browser console for errors (F12 key)

---

### Problem: "Website loads but no styling"

**Solution:**
1. Check `styles.css` uploaded
2. Verify file is in root folder (same level as index.html)
3. Clear browser cache (Ctrl+F5)

---

### Problem: "SSL not working"

**Solution:**
1. Wait 10-15 minutes after enabling (takes time)
2. Clear browser cache
3. Visit with `https://` prefix
4. Check hosting control panel if SSL active

---

## 💰 Cost Comparison

### Free Hosting:
- **Cost:** ₱0/month ✅
- **Setup time:** 30-45 minutes
- **Best for:** Testing, small schools, getting started
- **Limitations:** Slower, limited support, resource limits

### Paid Hosting (Hostinger):
- **Cost:** ₱99/month
- **Setup time:** 30 minutes
- **Best for:** Production, larger schools, professional use
- **Benefits:** Faster, 24/7 support, no limits, email accounts

**Start FREE, upgrade when needed!**

---

## 🎯 Quick Start Summary

### For InfinityFree (30-45 minutes):

1. ⏱️ **5 min** - Sign up at infinityfree.net
2. ⏱️ **3 min** - Create hosting account with subdomain
3. ⏱️ **10 min** - Upload all 24 files to htdocs
4. ⏱️ **5 min** - Create database & user
5. ⏱️ **5 min** - Import database.sql via phpMyAdmin
6. ⏱️ **2 min** - Update config.php with database details
7. ⏱️ **5 min** - Enable SSL certificate
8. ⏱️ **5 min** - Test everything

**Total:** ~40 minutes

**Cost:** ₱0 (100% FREE!)

---

## 📞 Support Resources

### InfinityFree:
- **Forum:** https://forum.infinityfree.net
- **Knowledge Base:** https://infinityfree.net/support
- **Filipino Community:** Active Facebook groups

### 000webhost:
- **Support:** https://www.000webhost.com/forum
- **Tutorials:** Available on website

### General Help:
- **YouTube:** Search "how to deploy website to infinityfree"
- **Facebook Groups:** "Philippine Web Developers"

---

## ✅ Final Checklist

### Before Deployment:
- [ ] All 24 files ready
- [ ] Have email for registration
- [ ] Read this guide fully

### During Deployment:
- [ ] Account created
- [ ] Files uploaded to htdocs
- [ ] Database created
- [ ] Database user created
- [ ] database.sql imported
- [ ] config.php updated
- [ ] SSL enabled

### After Deployment:
- [ ] Homepage loads
- [ ] Login works (demo account)
- [ ] Registration works
- [ ] Contact form works
- [ ] Mobile responsive
- [ ] SSL active (🔒)

### Post-Launch:
- [ ] Share URL with team
- [ ] Test on different devices
- [ ] Monitor for issues
- [ ] Backup database weekly

---

## 🎉 Success!

**Your school tour website is now LIVE for FREE!**

### What You Have:
- ✅ Professional school website
- ✅ User registration & login
- ✅ Database backend
- ✅ Contact form system
- ✅ Virtual tour with 5 floors
- ✅ Interactive campus map
- ✅ Mobile responsive
- ✅ SSL certificate (🔒 HTTPS)
- ✅ **All for FREE!**

### Your Website URL:
- `https://yourschool.infinityfreeapp.com`

### Demo Login:
- **Email:** demo@schooltour.edu.ph
- **Password:** Demo1234!

---

## 📈 Next Steps

### Immediate:
1. Test all features
2. Create your own account
3. Change admin password
4. Share with colleagues

### Soon:
1. Add your school logo (favicon.png)
2. Update YouTube video in tour.html
3. Customize all content
4. Add real school information

### Later:
1. Monitor visitor statistics
2. Gather feedback
3. Consider paid hosting if traffic grows
4. Buy custom domain (.edu.ph)

---

## 💡 Remember

- **Start FREE** - No risk, no commitment
- **Upgrade later** - Easy migration when needed
- **Perfect for testing** - Try everything first
- **Good enough** - Free hosting works well for schools
- **Always backup** - Weekly exports via phpMyAdmin

---

**You can deploy your school tour website RIGHT NOW for FREE!** 🚀

**No credit card needed. No payment required. Just sign up and go!** ✨

**Good luck with your deployment!** 🎓
