<?php namespace App\Http\Controllers;

use App\Hook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use GrahamCampbell\GitHub\Facades\GitHub;


class GithubController extends Controller
{

  private $client;
  private $username;

  public function __construct(\Github\Client $client)
  {
    $this->client = $client;
    $this->username = env('GITHUB_USERNAME');
  }
  
  public function index()
  {
      
    try {
      $repos = $this->client->api('current_user')->repositories();
	  
      return View::make('repos', ['repos' => $repos]);
      
    } catch (\RuntimeException $e) {
       return '{error}';
    }
  }//index
}