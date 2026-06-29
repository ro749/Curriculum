<?php

namespace App\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class Controller{
    public function index(){
        return view('welcome');
    }

    public function map(){
        
        
        $vat_rates = [];
        $path = storage_path('ImageMapPro.json');
        $map = json_decode(file_get_contents($path),true);
        $ans = Http::get('https://unirateapi.com/api/vat/rates', [
            'api_key' => env('UNIRATE_API_KEY')
        ]);
        $countries = $map['artboards'][0]['children'][0]['children'];
        $max = 0;
        $min = 100;
        foreach ($ans["vat_rates"] as $key => $value) {
            $vat_rates[$value["country_name"]] = $value["vat_rate"];
            if($value["vat_rate"] > $max){
                $max = $value["vat_rate"];
            }
            if($value["vat_rate"] < $min){
                $min = $value["vat_rate"];
            }
        }

       $dif = $max - $min;
        
        foreach ($countries as $key => &$child) {
            if(!empty($vat_rates[$child['tooltip_content'][0]['text']])){
                $vat_rate = $vat_rates[$child['tooltip_content'][0]['text']];
                $child['tooltip_content'][0]['text'] .= " VAT: {$vat_rate }%";
                $percent = ($vat_rate-$min)/$dif;
                $r = 255*$percent;
                $g = 255*(1-$percent);
                $color = sprintf('#%02x%02x%02x', $r, $g, 0);
                $child['default_style']['background_color'] = $color;
                $child['mouseover_style']['background_color'] = $color;
                if(!empty($child['children'])){
                    foreach ($child['children'] as $key => &$child2) {
                        $child2['default_style']['background_color'] = $color;
                        $child2['mouseover_style']['background_color'] = $color;
                    }
                }
            }
        }
        $map['artboards'][0]['children'][0]['children'] = $countries;
        return view('map',['map' => $map]);
    }
}