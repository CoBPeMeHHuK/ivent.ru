<?php

namespace Ivent\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SiteController extends Controller
{
    protected $p_rep;
    protected $s_rep;
    protected $a_rep;
    protected $m_rep;
    protected $sub_cat;
    protected $category;
    protected $template;
    protected $vars=array();

    public function __construct(){

    }

    protected function renderOutput(){
        return view($this->template)->with($this->vars);
    }
}
