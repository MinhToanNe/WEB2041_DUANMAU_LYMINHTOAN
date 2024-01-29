<?php
class Homecontroller extends Controller
{
    public function index()
    {
        
        $this->view('cilent', []);
    }
}