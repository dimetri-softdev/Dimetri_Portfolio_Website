# Dimetri Portfolio Website

This repository contains two versions of the portfolio site:

- `index.php` — PHP-powered version for local preview using a PHP server
- `index.html` — Static version for GitHub Pages or any static host

## Deploying to GitHub Pages

1. Replace `https://github.com/your-github-username` in `index.html` with your actual GitHub profile URL.
2. Commit the files to your repository.
3. Enable GitHub Pages in the repository settings and select the `main` branch (or the branch you use).
4. Your portfolio will be served from `https://<your-username>.github.io/<repo-name>/`.

## Local preview

### Static site

Open `index.html` directly in your browser, or run a local server from the repository root:

```powershell
python -m http.server 8000
```

Then visit `http://localhost:8000`.

### PHP version

Run a local PHP server:

```powershell
php -S localhost:8000
```

Then visit `http://localhost:8000`.

## Customize

- Update the name, bio, skills, and project text in `index.html` and `index.php`.
- Add images to `images/` and reference them in the HTML if desired.
- Update the email address or GitHub links to your preferred contact details.
