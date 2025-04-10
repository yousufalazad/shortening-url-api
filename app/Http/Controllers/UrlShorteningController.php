<?php

namespace App\Http\Controllers;

use App\Models\UrlShortening;
use Illuminate\Http\Request;

class UrlShorteningController extends Controller
{
    protected string $baseURL = 'http://short.est/';

    public function generateShortenedUrl(): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $length = 6;
        $shortenedUrl = '';

        for ($i = 0; $i < $length; $i++) {
            $shortenedUrl .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $shortenedUrl;
    }
    
    public function store (Request $request)
    {
        $request->validate([
            'original_url' => 'required|url',
        ]);

        $shortenedUrl = $this->generateShortenedUrl();

        UrlShortening::create([
            'shortened_url' => $shortenedUrl,
            'original_url' => $request->input('original_url'),
        ]);

        return response()->json([
            'shortened_url' => $this->baseURL . $shortenedUrl,
            'original_url' => $request->input('original_url'),
        ]);
    }

    public function decode (Request $request, $shortenedUrl)
    {
        $shortenedUrl = UrlShortening::where('shortened_url', $shortenedUrl)->first();

        if (!$shortenedUrl) {
            return response()->json(['error' => 'URL not found'], 404);
        }

        return response()->json([
            'original_url' => $shortenedUrl->original_url,
        ]);
    }
    
}
