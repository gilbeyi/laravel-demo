<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
 
class SingleAction extends Controller
{
    /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
      return 'single action response';
    }
}

