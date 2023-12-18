This Drupal module triggers Symfony events during various stages of
[PHP CommonMark](https://commonmark.thephpleague.com/) document parsing via
[the Markdown module](https://www.drupal.org/project/markdown).

**Warning**: while this is generally production-ready, it's not guaranteed to
maintain a stable API and may occasionally contain bugs, being a
work-in-progress. Stable releases may be provided at a later date.

----

# Requirements

* [Drupal 10](https://www.drupal.org/download)

* PHP 8.1

* [Composer](https://getcomposer.org/)

----

# Installation

## Composer

### Set up

Ensure that you have your Drupal installation set up with the correct Composer
installer types such as those provided by [the `drupal/recommended-project`
template](https://www.drupal.org/docs/develop/using-composer/starting-a-site-using-drupal-composer-project-templates#s-drupalrecommended-project).
If you're starting from scratch, simply requiring that template and following
[the Drupal.org Composer
documentation](https://www.drupal.org/docs/develop/using-composer/starting-a-site-using-drupal-composer-project-templates)
should get you up and running.

### Repository

In your root `composer.json`, add the following to the `"repositories"` section:

```json
"drupal/ambientimpact_markdown": {
  "type": "vcs",
  "url": "https://github.com/Ambient-Impact/drupal-ambientimpact-markdown.git"
}
```

### Installing

Once you've completed all of the above, run `composer require
"drupal/ambientimpact_markdown:^2.0@dev"` in the root of your project to have
Composer install this and its required dependencies for you.

----

# Major breaking changes

The following major version bumps indicate breaking changes:

* 1.x:

  * Has been [`git subtree split`](https://shantanoo-desai.github.io/posts/technology/git_subtree/) from [`Ambient-Impact/drupal-modules`](https://github.com/Ambient-Impact/drupal-modules/tree/8.x) into a standalone package; version has been reset to 1.x.

  * Requires Drupal 9.5.

* 2.x:

  * Requires [Drupal 10](https://www.drupal.org/project/drupal/releases/10.0.0) due to non-backwards compatible change to [`\Drupal\Component\EventDispatcher\ContainerAwareEventDispatcher::dispatch()`](https://git.drupalcode.org/project/drupal/-/commit/7b324dd8f18919fc4d728bdb0afbcf27c8c02cb2#6e9d627c11801448b7a793c204471d8f951ae2fb).
