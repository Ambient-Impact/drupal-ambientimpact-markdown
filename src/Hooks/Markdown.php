<?php

declare(strict_types=1);

namespace Drupal\ambientimpact_markdown\Hooks;

use Drupal\ambientimpact_markdown\Plugin\Markdown\CommonMark\CommonMark;
use Drupal\ambientimpact_markdown\Plugin\Markdown\CommonMark\CommonMarkGfm;
use Drupal\hux\Attribute\Alter;

/**
 * Markdown hook implementations.
 */
class Markdown {

  #[Alter('markdown_parser_info')]
  /**
   * Implements \hook_markdown_parser_info_alter().
   *
   * This replaces the 'commonmark' and 'commonmark-gfm' plug-in classes with
   * our own.
   *
   * @see \Drupal\ambientimpact_markdown\Plugin\Markdown\CommonMark\CommonMark
   *   The 'commonmark' class that we provide.
   *
   * @see \Drupal\ambientimpact_markdown\Plugin\Markdown\CommonMark\CommonMarkGfm
   *   The 'commonmark-gfm' class that we provide.
   */
  public function alter(array &$info): void {

    $info['commonmark']['class']    = CommonMark::class;
    $info['commonmark']['provider'] = 'ambientimpact_markdown';

    $info['commonmark-gfm']['class']    = CommonMarkGfm::class;
    $info['commonmark-gfm']['provider'] = 'ambientimpact_markdown';

  }

}
