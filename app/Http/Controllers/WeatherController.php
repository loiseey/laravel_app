<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WeatherService;
use App\Models\Student;

class WeatherController extends Controller
{
    protected $weatherService;

    public function __construct(weatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function showWeatherForm()
    {
        return view('students.weather');
    }

    public function getWeather(Request $request)
    {
        $city = $request->input('city');
        $weather = $this->weatherServices->getCurrentWeather($city);
        return view('students.weather', compact('weather', 'city'));
    }
}