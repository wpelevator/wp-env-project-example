# Sample `wp-env` Project

[![Tests](https://github.com/wpelevator/wp-env-example/actions/workflows/test.yml/badge.svg)](https://github.com/wpelevator/wp-env-example/actions/workflows/test.yml)

A sample project that provides full control and access to all dependencies, debugging and testing without relying on things bundled with the [`@wordpress/env`](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-env/) package.

This might seem verbose but the benefits are clear the first time any changes of the `wp-env` internals break your development workflow.

- Simplify debugging by adding WordPress core, themes and plugins as Composer depdendencies at locked versions which allows adding Xdebug breakpoints anywhere. By default, `wp-env` doesn't expose any of these directories.

- Add local project dependencies like plugins and themes as Composer `path` dependencies and `npm` workspaces. Easily run linters and build across all sub-projects.

- Enable project-wide PHPUnit testing using a known version of the [WordPress PHPUnit testing library](https://github.com/wp-phpunit/docs) (extracted [from `wordpress-develop` repository](https://github.com/WordPress/wordpress-develop/tree/trunk/tests/phpunit)) instead of [what is pulled in by `wp-env`](https://github.com/WordPress/gutenberg/blob/5bc7972991278b1cf2ce3b32c0e5f93bfa8dc69b/packages/env/lib/download-wp-phpunit.js#L72-L140).

- Enable Xdebug for easy debugging and performance evalutation.


## Credits

- Created by [Kaspars Dambis](https://kaspars.net).
- Licensed under the [MIT License](LICENSE.md).