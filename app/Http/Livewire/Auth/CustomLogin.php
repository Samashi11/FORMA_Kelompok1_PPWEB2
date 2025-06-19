<?php

namespace App\Http\Livewire\Auth;

use Filament\Pages\Auth\Login as BaseLogin;

class CustomLogin extends BaseLogin
{
    // public function getView(): string
    // {
    //     return 'livewire.auth.custom-login';
    // }
    // public function getLayout(): string
    // {
    //     return 'layouts.blank'; // atau bisa bikin layout kosong sendiri
    // }
    public function getHeading(): string
    {
        return 'Selamat Datang Kembali!';
    }
    public function getSubheading(): string
    {
        return 'Silakan masuk untuk melanjutkan.';
    }
}

