<?php
namespace App\Http\Controllers;

class ServiceController extends Controller
{
    public function index()
    {
        $services = [
            [
                'icon' => '🌱',
                'title' => 'Organic Farming',
                'desc' => 'Mengelola pertanian organik dengan teknologi modern dan ramah lingkungan.',
            ],
            [
                'icon' => '🚜',
                'title' => 'Farm Equipment',
                'desc' => 'Penyediaan alat dan mesin pertanian berkualitas untuk hasil maksimal.',
            ],
            [
                'icon' => '💧',
                'title' => 'Modern Irrigation',
                'desc' => 'Sistem irigasi modern untuk efisiensi air dan pertumbuhan tanaman optimal.',
            ],
            [
                'icon' => '🌾',
                'title' => 'Crop Consulting',
                'desc' => 'Konsultasi dan pendampingan budidaya tanaman dari ahli pertanian.',
            ],
            [
                'icon' => '🧪',
                'title' => 'Soil Analysis',
                'desc' => 'Analisa tanah untuk mengetahui kualitas dan kebutuhan nutrisi lahan.',
            ],
        ];
        return view('services.index', compact('services'));
    }
}