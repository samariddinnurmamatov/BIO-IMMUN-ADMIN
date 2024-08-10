<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    public function updateSettings(Request $request)
    {
        $settings = [
            'phone_number' => $request->input('phone_number'),
            'phone_number2' => $request->input('phone_number2'),
            'email_address' => $request->input('email_address'),
            'email_address2' => $request->input('email_address2'),
            'address' => $request->input('address'),
            'address2' => $request->input('address2'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
            'telegram' => $request->input('telegram'),

        ];

        File::put(storage_path('app/settings.json'), json_encode($settings));

        return redirect()->back()->with('success', 'Sozlamalar muvaffaqiyatli saqlandi!');
    }
}
