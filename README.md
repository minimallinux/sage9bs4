Quick Starter for Light or Dark Bootstrap themes wth extras added to make things easier.

Uses Bootstrap 4.0.0-alpha.6 and Font Awesome 4.7 with custom styles in resources/assets/styles/style.scss which is imported in to main.scss and compiles with the build commands. - just adjust those if necessary or add your own.

Added header with navwalker and large footer with 6 extra widget areas, 5 in top half of footer and 1 for https://wordpress.org/plugins/lightweight-social-icons/ inthe bottom right. Also has a Footer Navigation option if required already registered.

Top part of footer has 1 logo/image column and 4 other columns for nav/link/other widgets/whatever.

Some Bootstrap sass custom styles already in style.scss and imported to main, see below.

Easily customisable for light or dark themes, see screenshots, main styles initially imported from /resources/assets/styles/style.scss in to the main.scss file. Just cut out needed/not needed styles from style.scss and remove them or place them in the individual components files for more clarity. All component files already imported to main.scss.

Change the sometimes troublesome toggler icon color & border in /resources/assets/styles/components/underscroll navbar.scss currently set to "currentColor"

Easily swap out the fonts for other ones, just add fonts to /resources/assets/fonts and enter the css for them in to /resources/assets/styles/components/underscroll fonts.scss, which is already imported in to main.scss.

Front page uses /resources/views/partials/header-front.blade, other pages use header.blade in same location. Add custom page templates in views folder and access them via WP Admin.

## Features

* Sass for stylesheets
* ES6 for JavaScript
* [Webpack](https://webpack.github.io/) for compiling assets, optimizing images, and concatenating and minifying files
* [Browsersync](http://www.browsersync.io/) for synchronized browser testing
* [Laravel's Blade](https://laravel.com/docs/5.3/blade) as a templating engine
* CSS framework options:
  * [Bootstrap 4](http://getbootstrap.com/)
  * Font Awesome

 Replace Font Awesome if not needed.

See a working example at [roots-example-project.com](https://roots-example-project.com/).

### Recommended extensions

* [Controller](https://github.com/soberwp/controller) — WordPress plugin to enable a basic controller when using Blade with Sage 9

## Requirements

Make sure all dependencies have been installed before moving on:

* [WordPress](https://wordpress.org/) >= 4.7
* [PHP](http://php.net/manual/en/install.php) >= 5.6.4
* [Composer](https://getcomposer.org/download/)
* [Node.js](http://nodejs.org/) >= 6.9.x
* [Yarn](https://yarnpkg.com/en/docs/install)

## Theme installation, run 2 commands
npm install
composer install
## Then Build it
npm run build or yarn build
## Other Commands
Various, Check package.json, yarn && yarn build and others.


## Theme structure

```shell
themes/your-theme-name/   # → Root of your Sage based theme
├── app/                  # → Theme PHP
│   ├── lib/Sage/         # → Blade implementation, asset manifest
│   ├── admin.php         # → Theme customizer setup
│   ├── filters.php       # → Theme filters
│   ├── helpers.php       # → Helper functions
│   └── setup.php         # → Theme setup
├── composer.json         # → Autoloading for `app/` files
├── composer.lock         # → Composer lock file (never edit)
├── dist/                 # → Built theme assets (never edit)
├── node_modules/         # → Node.js packages (never edit)
├── package.json          # → Node.js dependencies and scripts
├── resources/            # → Theme assets and templates
│   ├── assets/           # → Front-end assets
│   │   ├── config.json   # → Settings for compiled assets
│   │   ├── build/        # → Webpack and ESLint config
│   │   ├── fonts/        # → Theme fonts
│   │   ├── images/       # → Theme images
│   │   ├── scripts/      # → Theme JS
│   │   └── styles/       # → Theme stylesheets
│   ├── functions.php     # → Composer autoloader, theme includes
│   ├── index.php         # → Never manually edit
│   ├── screenshot.png    # → Theme screenshot for WP admin
│   ├── style.css         # → Theme meta information
│   └── views/            # → Theme templates
│       ├── layouts/      # → Base templates
│       └── partials/     # → Partial templates
└── vendor/               # → Composer packages (never edit)
```

## Theme setup

Edit `app/setup.php` to enable or disable theme features, setup navigation menus, post thumbnail sizes, and sidebars.

## Theme development

* Run `yarn` from the theme directory to install dependencies
* Update `resources/assets/config.json` settings:
  * `devUrl` should reflect your local development hostname
  * `publicPath` should reflect your WordPress folder structure (`/wp-content/themes/sage` for non-[Bedrock](https://roots.io/bedrock/) installs)

### Build commands

* `yarn run start` — Compile assets when file changes are made, start Browsersync session
* `yarn run build` — Compile and optimize the files in your assets directory
* `yarn run build:production` — Compile assets for production

## Documentation

Sage 8 documentation is available at [https://roots.io/sage/docs/](https://roots.io/sage/docs/).

Sage 9 documentation is currently in progress and can be viewed at [https://github.com/roots/docs/tree/sage-9/sage](https://github.com/roots/docs/tree/sage-9/sage).

## Contributing

Contributions are welcome from everyone. We have [contributing guidelines](https://github.com/roots/guidelines/blob/master/CONTRIBUTING.md) to help you get started.

## Community

Keep track of development and community news.

* Participate on the [Roots Discourse](https://discourse.roots.io/)
* Follow [@rootswp on Twitter](https://twitter.com/rootswp)
* Read and subscribe to the [Roots Blog](https://roots.io/blog/)
* Subscribe to the [Roots Newsletter](https://roots.io/subscribe/)
* Listen to the [Roots Radio podcast](https://roots.io/podcast/)
# alar
