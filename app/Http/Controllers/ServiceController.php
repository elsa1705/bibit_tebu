<?php
namespace App\Http\Controllers;

class ServiceController extends Controller
{
    public function index()
    {
        // Contoh data service
        $services = [
            [
                'icon' => '🌱',
                'title' => 'Organic Farming',
                'desc' => 'Mengelola pertanian organik dengan teknologi modern.',
            ],
            [
                'icon' => '🚜',
                'title' => 'Farm Equipment',
                'desc' => 'Penyediaan alat dan mesin pertanian berkualitas.',
            ],
            [
                'icon' => '🌾',
                'title' => 'Crop Consulting',
                'desc' => 'Konsultasi dan pendampingan budidaya tanaman.',
            ],
        ];
        return view('services.index', compact('services'));
    }
}