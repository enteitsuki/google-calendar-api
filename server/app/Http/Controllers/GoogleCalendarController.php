<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google_Client;
use Google_Service_Calendar;
use Spatie\GoogleCalendar\Event;

class GoogleCalendarController extends Controller
{
    public function index()
    {
        // $client = $this->getClient();
        // $service = new Google_Service_Calendar($client);
        // $calendarId = env('GOOGLE_CALENDAR_ID');
        // $optParams = [];
        // $results = $service->events->listEvents($calendarId, $optParams);
        // $events = $results->getItems();
        // foreach ($events as $event) {
        //     echo $event->getSummary() . '';
        // }
        
        $event = new Event;

        $events = Event::get();

        foreach ($events as $event) {
            echo $event->name . '';
        } 
    }

    public function getClient()
    {
        $client = new Google_Client();
        $client->setApplicationName('Google Calendar API plus Laravel');
        $client->setScopes(Google_Service_Calendar::CALENDAR_READONLY);
        $client->setAuthConfig(storage_path('app/google-calendar/vast-service-308620-ae858ca54128.json'));
        return $client;
    }
}
