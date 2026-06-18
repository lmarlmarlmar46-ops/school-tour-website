# 🚀 Push to GitHub - Step by Step

## ✅ Git is already installed! (version 2.53.0)

---

## 📝 Step 1: Create GitHub Account (if you don't have one)

1. Go to: **https://github.com**
2. Click **"Sign up"** (top right)
3. Enter your email
4. Create a password
5. Choose a username (example: `manilaschool` or `yourschoolname`)
6. Verify your email

**✅ Done? Continue to Step 2**

---

## 📁 Step 2: Create a New Repository on GitHub

1. **Login to GitHub**
2. Click the **"+"** icon (top right) → **"New repository"**
3. Fill in the details:
   - **Repository name:** `school-tour-website`
   - **Description:** "Virtual school tour website with database"
   - **Visibility:** ✅ **Public** (required for free Railway deployment)
   - **DON'T** check "Initialize this repository with a README"
4. Click **"Create repository"**

**✅ Keep this page open!** You'll need the commands shown.

---

## 💻 Step 3: Open Command Prompt

1. Press **Windows Key + R**
2. Type: `cmd`
3. Press **Enter**
4. Navigate to your project:

```cmd
cd C:\Users\holog\OneDrive\Desktop\GSYSTEMNISIRDONGKOL
```

**✅ You should see the path change to your project folder**

---

## 🔧 Step 4: Configure Git (First Time Only)

If this is your first time using Git, set your name and email:

```cmd
git config --global user.name "Your Name"
```

```cmd
git config --global user.email "your-email@example.com"
```

**Replace with your actual name and email!**

**✅ Done? Continue to Step 5**

---

## 📤 Step 5: Initialize and Push to GitHub

Copy and paste these commands **one by one** into Command Prompt:

### A. Initialize Git repository
```cmd
git init
```
**Expected output:** `Initialized empty Git repository...`

### B. Add all files
```cmd
git add .
```
**Expected output:** (nothing - that's normal!)

### C. Create first commit
```cmd
git commit -m "Initial commit - School tour website for Railway"
```
**Expected output:** Shows list of files committed

### D. Set main branch
```cmd
git branch -M main
```
**Expected output:** (nothing - that's normal!)

### E. Connect to GitHub
**⚠️ IMPORTANT:** Replace `YOUR-USERNAME` with your actual GitHub username!

```cmd
git remote add origin https://github.com/YOUR-USERNAME/school-tour-website.git
```

**Example:** If your username is `manilaschool`, use:
```cmd
git remote add origin https://github.com/manilaschool/school-tour-website.git
```

### F. Push to GitHub
```cmd
git push -u origin main
```

**You'll be prompted for credentials!** ⬇️

---

## 🔐 Step 6: GitHub Authentication

When you run `git push`, you'll need to authenticate.

### ⚠️ Important: Password won't work!

You need a **Personal Access Token** instead:

### Create a Token:

1. **On GitHub**, click your profile picture (top right)
2. Go to **Settings**
3. Scroll down, click **Developer settings** (bottom left)
4. Click **Personal access tokens** → **Tokens (classic)**
5. Click **Generate new token** → **Generate new token (classic)**
6. Fill in:
   - **Note:** "School tour website deployment"
   - **Expiration:** 90 days (or longer)
   - **Scopes:** ✅ Check **repo** (all repo permissions)
7. Click **Generate token** (bottom)
8. **⚠️ COPY THE TOKEN NOW!** (You won't see it again)

### Use the Token:

When `git push` asks for credentials:
- **Username:** Your GitHub username
- **Password:** Paste the token (not your GitHub password!)

**✅ Push successful!** Your code is now on GitHub! 🎉

---

## 🔄 Alternative: GitHub Desktop (Easier!)

If command line is confusing, use **GitHub Desktop** (GUI):

1. **Download:** https://desktop.github.com
2. **Install** and login with GitHub
3. **Add repository:**
   - File → Add Local Repository
   - Choose: `C:\Users\holog\OneDrive\Desktop\GSYSTEMNISIRDONGKOL`
4. **Publish repository:**
   - Click "Publish repository" button
   - Name: `school-tour-website`
   - ✅ Keep public
   - Click "Publish"

**✅ Done!** Much easier! 🎉

---

## ✅ Verify Upload

1. Go to your GitHub repository page
2. You should see all your files:
   - index.html
   - config.php
   - api/ folder
   - database-postgres.sql
   - And all other files!

**✅ All files showing? Success!** 🎉

---

## 🆘 Common Issues

### Issue: "git: command not found"
**Solution:** Git not installed. Download from: https://git-scm.com/download/win

### Issue: "fatal: not a git repository"
**Solution:** Make sure you ran `git init` first

### Issue: "Authentication failed"
**Solution:** 
- Don't use your GitHub password
- Create and use Personal Access Token (see Step 6)

### Issue: "remote origin already exists"
**Solution:** 
```cmd
git remote remove origin
git remote add origin https://github.com/YOUR-USERNAME/school-tour-website.git
```

### Issue: Files not showing on GitHub
**Solution:**
```cmd
git status
git add .
git commit -m "Add missing files"
git push
```

---

## 📋 Quick Reference - All Commands

```cmd
# Navigate to project
cd C:\Users\holog\OneDrive\Desktop\GSYSTEMNISIRDONGKOL

# Initialize and push
git init
git add .
git commit -m "Initial commit - School tour website for Railway"
git branch -M main
git remote add origin https://github.com/YOUR-USERNAME/school-tour-website.git
git push -u origin main
```

**Replace YOUR-USERNAME with your actual GitHub username!**

---

## 🔄 Future Updates (After Initial Push)

When you make changes later:

```cmd
# Navigate to project
cd C:\Users\holog\OneDrive\Desktop\GSYSTEMNISIRDONGKOL

# Stage changes
git add .

# Commit with message
git commit -m "Description of what you changed"

# Push to GitHub
git push
```

**That's it!** Railway will auto-deploy your changes! ⚡

---

## 🎯 After Pushing to GitHub

**Next Steps:**

1. ✅ Code is on GitHub
2. ➡️ Deploy to Railway (see `QUICK-START-RAILWAY.md`)
3. ➡️ Import database-postgres.sql
4. ➡️ Test your live website!

---

## 💡 Pro Tips

1. **Save your Personal Access Token** - Store it safely
2. **Use GitHub Desktop** - Much easier than command line
3. **Commit often** - Don't wait until everything is perfect
4. **Write good commit messages** - Describe what changed
5. **Check git status** - Use `git status` to see what's changed

---

## ✅ Success Checklist

After pushing to GitHub:

- [ ] Repository created on GitHub
- [ ] All 34+ files visible on GitHub
- [ ] database-postgres.sql uploaded
- [ ] config.php uploaded
- [ ] api/ folder with all 5 PHP files
- [ ] All HTML files uploaded
- [ ] .gitignore working (no sensitive files)

**All checked? Ready for Railway!** 🚀

---

## 📞 Need Help?

### Git Issues:
- Git Documentation: https://git-scm.com/doc
- GitHub Docs: https://docs.github.com

### Authentication Issues:
- Personal Access Token guide: https://docs.github.com/en/authentication/keeping-your-account-and-data-secure/creating-a-personal-access-token

### Visual Help:
- YouTube: Search "how to push to GitHub Windows"
- GitHub Desktop tutorial: https://desktop.github.com

---

**You got this! Follow the steps and you'll be on GitHub in 10 minutes!** 💪🚀
