<?php

/**
 * @file
 * Page callbacks for csas_vue
 */
function csas_vue_pages_example() {
  $build['wr'] = array(
    '#type' => 'container',
    '#attributes' => array(
      'class' => array(
        'csas-vue-example'
      ),
    ),
    '#attached' => array(
      'library' => array(
        array(
          'csas_vue',
          'csas_vue_lib'
        )
      )
    ),
  );
  $build['wr']['con'] = array(
    '#theme' => 'csas_vue_example'
  );
  return $build;
}