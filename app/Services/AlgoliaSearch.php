<?php
  /**
   * Created by PhpStorm.
   * User: Bozo
   * Date: 18/10/2018
   * Time: 10:29 PM
   */

  namespace App\Services;


  use AlgoliaSearch\Client;
  use App\contracts\Search;

  class AlgoliaSearch implements Search
  {

    protected  $client;
    protected  $index;
    public function __construct(Client $client)
    {
      $this->client = $client;
    }

    public function index($index)
    {
      $this->index = $this->client->initIndex($index);
      return $this;
    }

    public function get($query, $page = 0)
    {
      return $this->index->search($query);
    }
  }