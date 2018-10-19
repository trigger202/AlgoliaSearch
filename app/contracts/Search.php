<?php

  namespace  App\contracts;

  Interface Search
  {
    public function index($index);

    public function get($query, $page = 0);

  }