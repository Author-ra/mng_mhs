# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds the distributable version of the framework.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the _public_ folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's _public_ folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter _public/..._, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [_Contributing to CodeIgniter_](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## Server Requirements

PHP version 8.2 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
>
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - The end of life date for PHP 8.1 was December 31, 2025.
> - If you are still using below PHP 8.2, you should upgrade immediately.
> - The end of life date for PHP 8.2 will be December 31, 2026.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

## Deployment

### GitHub

Repository sudah tersedia di: https://github.com/Author-ra/mng_mhs

### Vercel Deployment

#### Step 1: Connect to Vercel

1. Visit [vercel.com](https://vercel.com)
2. Click **"Add New"** → **"Project"**
3. Select **"Import Git Repository"**
4. Connect GitHub and select `Author-ra/mng_mhs`

#### Step 2: Configure Project

- **Framework Preset**: Leave as detected (Vercel will auto-detect)
- **Build Command**: `composer install --no-dev` (already in vercel.json)
- **Install Command**: `composer install`
- **Output Directory**: `public`

#### Step 3: Add Environment Variables

In **Project Settings** → **Environment Variables**, add:

```
CI_ENVIRONMENT=production
APP_ENV=production
```

**Optional for Database:**

```
DATABASE_HOSTNAME=your-db-host
DATABASE_USERNAME=your-db-user
DATABASE_PASSWORD=your-db-pass
DATABASE_NAME=your-db-name
```

#### Step 4: Deploy

- Click **"Deploy"**
- Wait for build to complete (2-5 minutes)
- Your app will be live at: `https://your-project-name.vercel.app`

#### Database Recommendations:

For production database deployment with Vercel, use:

- **PlanetScale** (MySQL, free tier available)
- **Railway** (PostgreSQL/MySQL)
- **Supabase** (PostgreSQL)
- **AWS RDS** (Full managed)

#### After Deployment:

1. Update `APP_BASEURL` environment variable to your live Vercel URL
2. Set up database backups
3. Configure domain if needed (under Domains settings)

#### Troubleshooting:

- Check **Logs** tab in Vercel for build errors
- Ensure all environment variables are set
- Verify database connection if using external DB
- Check `.htaccess` is properly deployed in `public/` folder
