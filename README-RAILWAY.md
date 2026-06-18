# 🎓 School Tour Website - Railway Edition

## ✅ Ready for Modern Cloud Deployment

This project has been **fully converted** to deploy on Railway with PostgreSQL database.

---

## 🚀 Quick Deploy

**Total Time:** 30 minutes | **Cost:** FREE

```bash
# 1. Push to GitHub
git init
git add .
git commit -m "Initial commit"
git push

# 2. Deploy on Railway
# → Login with GitHub
# → Deploy from repo
# → Add PostgreSQL
# → Import database-postgres.sql

# 3. Done! 🎉
```

**Full guide:** `RAILWAY-DEPLOYMENT.md`  
**Quick start:** `QUICK-START-RAILWAY.md`

---

## 📦 What's Included

### ✅ Frontend (17 files)
- 14 HTML pages (homepage, tour, map, login, register, dashboard, etc.)
- CSS styling
- JavaScript functionality
- Responsive design
- Filipino localization (Philippines, Pesos)

### ✅ Backend (PostgreSQL + PHP)
- 5 API endpoints (login, register, logout, contact, newsletter)
- PostgreSQL database (5 tables)
- User authentication (bcrypt hashing)
- Session management
- Input validation
- SQL injection protection

### ✅ Railway Configuration
- `.gitignore` - Protects sensitive files
- `database-postgres.sql` - PostgreSQL schema
- `nixpacks.toml` - Build configuration
- `Procfile` - Start command
- `config.php` - Environment variable support

---

## 🔄 Changes from MySQL Version

| Feature | Before (MySQL) | After (PostgreSQL) |
|---------|---------------|-------------------|
| **Database** | MySQL 5.7+ | PostgreSQL 14+ |
| **Connection** | mysqli | pg_connect |
| **Auto Increment** | AUTO_INCREMENT | SERIAL |
| **Enum Types** | ENUM | VARCHAR + CHECK |
| **Duplicate Key** | ON DUPLICATE KEY UPDATE | ON CONFLICT DO UPDATE |
| **Last Insert ID** | mysqli_insert_id | RETURNING clause |
| **Hosting** | Traditional PHP hosting | Railway cloud |
| **Environment** | config.php hardcoded | Environment variables |

---

## 🎯 Features

### User Management
- ✅ Registration with validation
- ✅ Secure login (bcrypt)
- ✅ User dashboard
- ✅ Session management
- ✅ 4 user types (student, parent, teacher, visitor)

### Virtual Tour
- ✅ 5-floor navigation
- ✅ 120+ room/facility database
- ✅ Interactive facility cards
- ✅ Search with auto-suggest
- ✅ Tour progress tracking

### Interactive Map
- ✅ SVG floor plan navigation
- ✅ Google Maps integration
- ✅ Floor selector
- ✅ Facility highlighting

### Forms & Communication
- ✅ Contact form with database storage
- ✅ Newsletter subscription
- ✅ Email validation
- ✅ Spam protection

### Additional Pages
- ✅ About Us
- ✅ FAQ (10 questions)
- ✅ Help Center
- ✅ System Status
- ✅ Privacy Policy
- ✅ Terms of Service
- ✅ Custom 404 page

---

## 🌐 Deployment Options

### Option 1: Railway (Recommended) ⭐
- **Cost:** FREE ($5 credit/month)
- **Setup:** 30 minutes
- **Database:** PostgreSQL included
- **SSL:** Automatic
- **Custom Domain:** Yes
- **Auto-deploy:** Git push triggers deployment

### Option 2: Vercel + Railway
- **Frontend:** Vercel (ultra-fast)
- **Backend:** Railway (API + DB)
- **Cost:** FREE
- **Setup:** 40 minutes

### Option 3: Traditional Hosting
- **Cost:** ₱99-250/month
- **Database:** MySQL or PostgreSQL
- **Setup:** Manual FTP upload
- **Guide:** `FREE-HOSTING-GUIDE.md`

---

## 💰 Cost Comparison

| Provider | Setup Time | Monthly Cost | Auto-Deploy | Database |
|----------|------------|--------------|-------------|----------|
| **Railway** | 30 min | FREE* | ✅ Yes | PostgreSQL |
| **Vercel + Railway** | 40 min | FREE* | ✅ Yes | PostgreSQL |
| **InfinityFree** | 45 min | FREE | ❌ No | MySQL |
| **Hostinger** | 60 min | ₱99 | ❌ No | MySQL/PostgreSQL |

*$5 credit/month, typical school site uses $2-3

---

## 🗄️ Database Schema

### Tables (5):
1. **users** - User accounts with authentication
2. **tour_progress** - Track facility visits
3. **contacts** - Contact form submissions
4. **newsletter_subscribers** - Email subscriptions
5. **bookmarks** - User-saved facilities

### Demo Accounts (Included):
- **Admin:** admin@schooltour.edu.ph / Admin1234!
- **Demo:** demo@schooltour.edu.ph / Demo1234!

**⚠️ Change these passwords after deployment!**

---

## 🔒 Security Features

- ✅ HTTPS/SSL automatic
- ✅ Password hashing (bcrypt)
- ✅ SQL injection protection (parameterized queries)
- ✅ XSS prevention (input sanitization)
- ✅ CSRF protection ready
- ✅ Session security
- ✅ Environment variables (no hardcoded credentials)
- ✅ Input validation

---

## 📱 Responsive Design

- ✅ Mobile-first approach
- ✅ Tablet optimized
- ✅ Desktop layouts
- ✅ Touch-friendly navigation
- ✅ Optimized images
- ✅ Fast loading

---

## 🌏 Localization

**Configured for Philippines:**
- 📍 Address: Makati City, Metro Manila
- 💰 Currency: Philippine Peso (₱)
- 📞 Phone: +63 format
- 📧 Email: .edu.ph domains
- 🗺️ Google Maps: Philippines location

---

## 🚀 Getting Started

### Prerequisites:
- Git installed
- GitHub account
- Railway account (login with GitHub)
- 30 minutes of time

### Quick Deploy:
1. Read `QUICK-START-RAILWAY.md` (5 min read)
2. Push to GitHub (10 min)
3. Deploy on Railway (15 min)
4. Test & customize (5 min)

**Detailed Guide:** `RAILWAY-DEPLOYMENT.md`

---

## 🔄 Making Updates

### Local Development:
1. Edit files on your computer
2. Test locally (optional)
3. Commit changes:
   ```bash
   git add .
   git commit -m "Description of changes"
   git push
   ```
4. Railway auto-deploys in ~2 minutes ⚡

### Database Changes:
1. Railway dashboard → PostgreSQL → Data → Query
2. Run SQL commands
3. Changes take effect immediately

---

## 📊 Monitoring

### Check Usage:
- Railway dashboard → Usage tab
- View CPU, memory, database metrics
- Monitor free tier credit usage

### View Logs:
- Railway → Deployments → Select deployment → Logs
- Real-time error tracking
- Debug issues quickly

### Database Admin:
- PostgreSQL → Data tab
- Browse tables
- Run queries
- Export data

---

## 🆘 Troubleshooting

### Common Issues:

**Website not loading?**
- Check Railway deployment status
- View logs for errors
- Verify domain generated

**Database errors?**
- Check PostgreSQL is running
- Verify schema imported
- Test connection in logs

**Login not working?**
- Verify users table has data
- Check browser console (F12)
- Test with demo account

**API errors?**
- Check api/ folder uploaded
- View Railway logs
- Test endpoints individually

**Full guide:** `RAILWAY-DEPLOYMENT.md` (Troubleshooting section)

---

## 📞 Support

### Documentation:
- `RAILWAY-DEPLOYMENT.md` - Complete step-by-step guide
- `QUICK-START-RAILWAY.md` - 30-minute quick start
- `FREE-HOSTING-GUIDE.md` - Alternative hosting options

### Railway Support:
- **Docs:** https://docs.railway.app
- **Discord:** https://discord.gg/railway
- **Status:** https://status.railway.app

### GitHub Issues:
- Check repository for updates
- Create issue for bugs

---

## 📈 Performance

### Optimizations:
- Gzip compression (automatic on Railway)
- Browser caching headers
- Optimized database queries
- CDN-ready (if using Vercel)
- Lazy loading images

### Speed:
- **Railway:** ~200-500ms response time
- **With Vercel:** ~50-100ms (frontend)
- **Database:** Indexed queries for speed

---

## 🎯 Roadmap

### Phase 1: Deployment ✅
- [x] Convert to PostgreSQL
- [x] Railway configuration
- [x] Deployment guides
- [x] Testing

### Phase 2: Enhancement (Optional)
- [ ] Email notifications (SMTP)
- [ ] File upload for user profiles
- [ ] Admin dashboard
- [ ] Analytics integration
- [ ] Booking system

### Phase 3: Scale (Future)
- [ ] Redis caching
- [ ] CDN integration
- [ ] Load balancing
- [ ] Multiple languages

---

## 🏆 Why Railway?

### Advantages:
- ✅ Modern cloud platform
- ✅ Auto-deploy from GitHub
- ✅ PostgreSQL included
- ✅ SSL automatic
- ✅ Easy scaling
- ✅ Great free tier
- ✅ Developer-friendly

### Perfect For:
- Schools & educational institutions
- Small to medium traffic sites
- Projects needing database
- Teams using GitHub
- Modern web applications

---

## 📄 License

This project is configured for educational use.

---

## 🙏 Credits

**Technologies:**
- Railway - Cloud hosting
- PostgreSQL - Database
- PHP 8.2 - Backend
- HTML5/CSS3/JavaScript - Frontend
- GitHub - Version control

---

## ✅ Checklist

### Before Deployment:
- [ ] Read RAILWAY-DEPLOYMENT.md
- [ ] Git installed
- [ ] GitHub account ready
- [ ] Railway account created

### During Deployment:
- [ ] Code pushed to GitHub
- [ ] Railway project created
- [ ] PostgreSQL added
- [ ] Database imported
- [ ] Domain generated

### After Deployment:
- [ ] Website tested
- [ ] Demo login works
- [ ] Passwords changed
- [ ] Content customized
- [ ] Team notified

---

## 🎉 Ready to Deploy!

**Your school tour website is production-ready!**

### What You Have:
- ✅ 24 production files
- ✅ PostgreSQL database
- ✅ Modern cloud setup
- ✅ Complete documentation
- ✅ FREE hosting solution

### Next Steps:
1. **Read:** `QUICK-START-RAILWAY.md`
2. **Deploy:** Follow the guide
3. **Test:** Verify everything works
4. **Launch:** Share with your school!

---

**Total Setup Time:** 30 minutes  
**Monthly Cost:** $0 (free tier)  
**Support:** Complete guides included  

**Let's go live!** 🚀🎓✨
