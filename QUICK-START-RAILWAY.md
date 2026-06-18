# ⚡ Quick Start: Railway Deployment (30 Minutes)

## 🎯 What You Need
- Windows computer ✅
- GitHub account (free)
- Railway account (free, $5/month credit)
- Your project files (ready!) ✅

---

## 🚀 5-Step Deployment

### **Step 1: Setup Git (5 minutes)**
```cmd
# Download and install Git
https://git-scm.com/download/win

# Verify installation
git --version
```

---

### **Step 2: Push to GitHub (10 minutes)**

**A. Create Repository:**
1. Go to https://github.com → Sign up/Login
2. Click "+" → "New repository"
3. Name: `school-tour-website`
4. Visibility: **Public**
5. Create repository

**B. Push Code:**
```cmd
cd C:\Users\holog\OneDrive\Desktop\GSYSTEMNISIRDONGKOL

git init
git add .
git commit -m "Initial commit"
git branch -M main
git remote add origin https://github.com/YOUR-USERNAME/school-tour-website.git
git push -u origin main
```

Replace `YOUR-USERNAME` with your GitHub username.

---

### **Step 3: Deploy to Railway (10 minutes)**

1. **Login:** https://railway.app → Login with GitHub
2. **New Project:** Click "New Project" → "Deploy from GitHub repo"
3. **Select:** Choose `school-tour-website`
4. **Add Database:** Click "+ New" → "Database" → "Add PostgreSQL"
5. **Import Schema:**
   - Click PostgreSQL → Data → Query
   - Copy & paste `database-postgres.sql`
   - Click "Run Query"
6. **Generate URL:**
   - Click web service → Settings → Generate Domain

**Wait 3-5 minutes for deployment...**

---

### **Step 4: Test Website (3 minutes)**

Visit your Railway URL and test:
- [ ] Homepage loads
- [ ] Login: demo@schooltour.edu.ph / Demo1234!
- [ ] Registration works
- [ ] Contact form works

---

### **Step 5: Customize (2 minutes)**

- Change admin password
- Add your school logo
- Update content

**🎉 Done! Your site is live!**

---

## 📊 What's Been Prepared

✅ **Converted for PostgreSQL:**
- config.php (reads Railway environment variables)
- database-postgres.sql (PostgreSQL schema)
- All API files (PostgreSQL syntax)

✅ **Railway Configuration:**
- .gitignore (protects sensitive files)
- nixpacks.toml (build settings)
- Procfile (start command)

✅ **Ready to Deploy:**
- All 24 project files
- Database with 2 demo users
- API endpoints working
- SSL automatic

---

## 💰 Cost

**FREE!** ($5/month credit, your site uses ~$2-3)

Renews monthly. No credit card needed to start!

---

## 🔄 Making Updates

```cmd
# After editing files locally:
git add .
git commit -m "Updated homepage"
git push

# Railway auto-deploys in ~2 minutes!
```

---

## 🆘 Common Issues

### Database connection failed?
- Check PostgreSQL is running (green dot)
- Re-import database-postgres.sql

### 404 errors?
- Check files uploaded to GitHub
- Re-push: `git push`

### Login not working?
- Verify database has users
- Run: `SELECT * FROM users;` in PostgreSQL → Query

---

## 📱 Test URLs

**Your Railway URL:**
`https://[your-app].up.railway.app`

**Demo Login:**
- Email: demo@schooltour.edu.ph
- Password: Demo1234!

**Admin Login:**
- Email: admin@schooltour.edu.ph
- Password: Admin1234!
- **⚠️ Change this password after deployment!**

---

## 🎯 Deployment Checklist

**Before:**
- [ ] Git installed
- [ ] GitHub account created
- [ ] Repository created

**During:**
- [ ] Code pushed to GitHub
- [ ] Railway project created
- [ ] PostgreSQL added
- [ ] Database imported
- [ ] Domain generated

**After:**
- [ ] Website loads
- [ ] Login tested
- [ ] Registration tested
- [ ] Forms working
- [ ] Passwords changed

---

## 📞 Support

**Railway Issues:**
- Dashboard → Deployments → View Logs
- Discord: https://discord.gg/railway

**GitHub Issues:**
- Check repository files uploaded
- Verify .gitignore not blocking files

**Database Issues:**
- PostgreSQL → Data → Query
- Check users table has data

---

## ✅ Quick Reference

| Task | Command/Action |
|------|---------------|
| **Push code** | `git push` |
| **View logs** | Railway → Deployments → Logs |
| **Database query** | PostgreSQL → Data → Query |
| **View usage** | Railway → Usage tab |
| **Custom domain** | Settings → Networking → Custom Domain |

---

## 🎉 You're Ready!

**Everything is prepared. Just follow these 5 steps!**

**Total time:** 30 minutes
**Cost:** FREE
**Result:** Professional live website! 🚀

**Read full guide:** RAILWAY-DEPLOYMENT.md

**Let's deploy!** 🎓✨
