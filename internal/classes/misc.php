<?php

class misc {
    public function has_posted($postvar) {
		if ( !$_SERVER['REQUEST_METHOD'] == 'POST' ) {
			return false;
		}
		if ( !isset($postvar) ) {
			return false;
		}
		if (empty($_POST)) {
			return false;
		}
		if ( empty($postvar) ) {
            return false;
        }

		return true;
	}
		public function has_posted_nonvar() {
		if ( !$_SERVER['REQUEST_METHOD'] == 'POST' ) {
			return false;
		}
		if (empty($_POST)) {
			return false;
		}

		return true;
	}
  public function array_search_by_key($array, $key, $value)
  {
      if (!is_array($array))
      {
          return [];
      }
      $results = [];
      foreach ($array as $element)
      {
          if (isset($element[$key]) && $element[$key] == $value)
          {
              $results[] = $element;
          }
      }
      return $results;
  }
}
