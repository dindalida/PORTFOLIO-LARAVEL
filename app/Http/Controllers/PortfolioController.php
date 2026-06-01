<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Certification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class PortfolioController extends Controller
{
    /**
     * Halaman utama portfolio.
     */
    public function index()
    {
        $projects       = Project::orderByDesc('featured')->orderByDesc('created_at')->get();
        $experiences    = Experience::orderByDesc('start_date')->get();
        $educations     = Education::orderByDesc('start_year')->get();
        $certifications = Certification::orderByDesc('date')->get();
        $skills         = config('portfolio.skills');

        return view('portfolio', compact(
            'projects',
            'experiences',
            'educations',
            'certifications',
            'skills'
        ));
    }

    /**
     * Kirim pesan kontak.
     */
    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:150',
            'subject' => 'nullable|string|max:200',
            'message' => 'required|string|min:10|max:3000',
        ], [
            'name.required'    => 'Nama wajib diisi.',
            'email.required'   => 'Email wajib diisi.',
            'email.email'      => 'Format email tidak valid.',
            'message.required' => 'Pesan tidak boleh kosong.',
            'message.min'      => 'Pesan minimal 10 karakter.',
        ]);

        try {
            // Kirim email (pastikan sudah konfigurasi MAIL_* di .env)
            Mail::send('emails.contact', $validated, function ($mail) use ($validated) {
                $mail->to(config('portfolio.email'))
                     ->subject('[PORTFOLIO] ' . ($validated['subject'] ?? 'Pesan Baru dari ' . $validated['name']))
                     ->replyTo($validated['email'], $validated['name']);
            });

            return redirect()->back()
                ->with('success', 'Pesan berhasil dikirim! Saya akan membalas secepatnya. ✓');

        } catch (\Exception $e) {
            Log::error('Contact form error: ' . $e->getMessage());

            return redirect()->back()
                ->with('error', 'Gagal mengirim pesan. Coba lagi atau hubungi langsung via email.')
                ->withInput();
        }
    }
}