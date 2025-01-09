<?php 
use Serenity\Motel\Models\Menu;class Cms65e5b8e1d3942992392661_2704995b8f2763e09cd6aed35b8d27cfClass extends Cms\Classes\LayoutCode
{

public function onInit()
{
    $this["breakfast"] = Menu::where("type", "breakfast")->first();
    $this['sandwiches'] = Menu::where('type', 'sandwiches')->first();
    $this['cakes'] = Menu::where('type', 'cakes')->first();
    $this['sparkling_wine'] = Menu::where('type', 'sparkling_wine')->first();
    $this['sparkling_wine_2'] = Menu::where('type', 'sparkling_wine_2')->first();
    $this['wines_half_bottles'] = Menu::where('type', 'wines_half_bottles')->first(); 
    $this['wines_half_bottles_white'] = Menu::where('type', 'wines_half_bottles_white')->first(); 
    $this['wines_half_bottles_red'] = Menu::where('type', 'wines_half_bottles_red')->first(); 
    $this['vodka'] = Menu::where('type', 'vodka')->first();
    $this['vermut'] = Menu::where('type', 'vermut')->first();
    $this['cognac'] = Menu::where('type', 'cognac')->first();
    $this['whiskey'] = Menu::where('type', 'whiskey')->first();
	$this['rum'] = Menu::where('type', 'rum')->first();
	$this['gin'] = Menu::where('type', 'gin')->first();
    $this['cigarets'] = Menu::where('type', 'cigarets')->first(); 
    $this['beer'] = Menu::where('type', 'beer')->first();
    $this['nonalco'] = Menu::where('type', 'nonalco')->first(); 
    $this['hotdrinks'] = Menu::where('type', 'hotdrinks')->first(); 
    $this['snacks'] = Menu::where('type', 'snacks')->first(); 
	$this['accessories'] = Menu::where('type', 'accessories')->first(); 
	
}
}
