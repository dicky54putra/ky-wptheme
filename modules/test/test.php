<?php

/**
 * Change user info
 *
 * @package Ky
 */

/**
 * Class to handle ajax request: remove data documentation
 */
class Test
{

  private $_data = [
    'nonce'         => false,
    'user_id'       => false
  ];

  /**
   * run all hook
   */
  public function __construct()
  {
    add_action('wp_ajax_test', [$this, 'ajax']);
    add_action('wp_ajax_nopriv_test', [$this, 'ajax']);
  }


  /**
   * call all function
   */
  public function ajax()
  {
    $this->_sanitize();
    $this->_validation();
    $this->_response();
  }

  /**
   * sanitize all input user
   */
  private function _sanitize()
  {
    if (!isset($_POST['nonce'])) {
      wp_die();
    }

    foreach ($this->_data as $key => $value) {
      if (isset($_POST[$key])) {
        $this->_data[$key] = is_array($_POST[$key]) ? $_POST[$key] : sanitize_text_field($_POST[$key]);
      }
    }
  }

  /**
   * validation token
   */
  private function _validation()
  {
    $token_is_correct = wp_verify_nonce($this->_data['nonce'], 'nonceFE');
    if (!$token_is_correct) {
      wp_send_json_error('Wrong Token');
    }
  }

  /**
   * respone ajax
   */
  private function _response()
  {

    wp_send_json_success(array('state' => true, 'name' => 'dicky'));
  }
}


/**inisialsiasi */
new Test();
