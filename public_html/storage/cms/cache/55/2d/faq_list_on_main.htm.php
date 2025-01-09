<?php 
use Serenity\Motel\Models\Question;class Cms65e5b35d90bda348830836_802322fbbb286d56bb40b711481bd063Class extends Cms\Classes\PartialCode
{

public function onStart()
{
    
    $this['questions'] = Question::take(3)->get();
    
}
}
