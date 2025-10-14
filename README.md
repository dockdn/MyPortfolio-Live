# 🐱 Danielle Dockery — My Portfolio

Welcome to my personal developer & designer portfolio!  
This site was built to showcase my projects, creativity, and personality in one interactive, hand-coded space.

---

## ✨ About

This portfolio was designed and developed entirely by me — Danielle Dockery 💻  
It’s built using **HTML, CSS, PHP**, and a touch of JavaScript for interactivity.  
Every page is styled to match my personal aesthetic — minimal, clean, and cozy.

### 🧭 Pages Included
| Page | Description |
|------|--------------|
| **Home** (`index.php`) | Intro and overview of who I am |
| **About** (`about.php`) | My story, experience, and skills |
| **Projects** (`projects.php`) | Highlights of my development work |
| **Favorites** (`favorites.php`) | Fun section with personal picks |
| **Family** (`family.php`) | Dedicated to the people who inspire me |
| **Resume** (`resume.php`) | View or download my PDF resume |
| **Connect** (`connect.php`) | Quick links and contact options |

---

## 🧠 Tech Stack

- **Frontend:** HTML5, CSS3 (custom + responsive)
- **Backend:** PHP 8
- **Hosting:** GitHub + FTP Auto-Deploy
- **Deployment:** GitHub Actions → FTP (using [SamKirkland/FTP-Deploy-Action](https://github.com/SamKirkland/FTP-Deploy-Action))
- **Tools:** VS Code, XAMPP, Git, Canva, and a lot of Dr. Pepper 🥤

---

## 🚀 Deployment

This repo uses a **GitHub Actions workflow** that automatically uploads the site to my hosting server every time I push new changes to the `main` branch.

### Deployment setup:
1. The workflow file lives at:  
   `.github/workflows/deploy.yml`
2. It runs on each `git push` to `main`.
3. Secrets configured in GitHub include:
   - `FTP_SERVER`
   - `FTP_USERNAME`
   - `FTP_PASSWORD`
   - `FTP_ROOT_DIR`

You can view or edit deployment logs in the **Actions** tab of this repo.

---

## 🪄 Local Development

To run locally (using XAMPP or MAMP):
```bash
cd /Applications/XAMPP/xamppfiles/htdocs/
cp -r MyPortfolio-Live MyPortfolio
Then open:

bash
Copy code
http://localhost/MyPortfolio/family.php
🌸 Credits & Design Notes
All visuals and written content are created by me.
Images are optimized and stored under /assets/img/.
The site features a custom favicon (/assets/img/favicon.png) — a small “d” logo designed by me.

💌 Connect
If you’d like to reach out, collaborate, or just say hi:
📧 danixielle@gmail.com
[🔗 LinkedIn]([https://www.linkedin.com/in/danielledockery/])
[🐙 GitHub]([https://github.com/dockdn])

“Every detail matters. Create something beautiful, meaningful, and a little bit you.” 🌷
