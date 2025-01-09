<?php 
use Serenity\Motel\Models\Review;class Cms65e5b35d8c715393836466_06f80ca166ac75c844a5737478b3d04eClass extends Cms\Classes\PartialCode
{

public function onStart()
{
    //$this['reviews'] = Review::all();
	$this['reviews'] = Review::orderBy('id','desc')->get();
	
}
}
