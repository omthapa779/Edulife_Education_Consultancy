<?php
namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendContactForm(Request $request)
    {
        $formData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Send the email
        Mail::to('omthapa781@gmail.com')->send(new ContactFormMail($formData));

        // Redirect or show a success message
        return redirect('/contact')->with('success', 'Thank you for your message!');
    }
}
?>