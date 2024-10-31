<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index()
    {
        return view('user.contact');
    }

    // تخزين رسالة الاتصال
    public function store(ContactRequest $request)
    {
        try {
            $contact = Contact::create($request->validated());

            // تحديث الجلسة بالرسائل غير المقروءة
            $unreadMessages = Contact::where('is_read', false)->get();
            session(['unreadMessages' => $unreadMessages]);

            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            Log::error('Error storing contact: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong, try refreshing and submitting the form again.');
        }
    }

    public function showContacts()
    {
        $contacts = Contact::all(); // استرجاع جميع الاتصالات
        $unreadMessages = Contact::where('is_read', false)->get();
        session(['unreadMessages' => $unreadMessages]);

        return view('admin.contacts.index', compact('contacts', 'unreadMessages'));
    }




    public function showMessages()
    {
        $unreadMessages = session('unreadMessages', collect());
        // عرض الرسائل
        return view('admin.dashboard.messages', compact('unreadMessages'));
    }

    public function showDashboard()
    {
        $unreadMessages = session('unreadMessages', collect());
        $newMessagesCount = $unreadMessages->count(); // تأكد من أن هذا السطر موجود

        return view('admin.dashboard.index', compact('unreadMessages', 'newMessagesCount')); // تأكد من تمرير المتغيرات هنا
    }



    public function readMessage($id)
    {
        $contact = Contact::find($id);
        if ($contact) {
            $contact->is_read = true;
            $contact->save();

            return redirect()->back()->with('success', 'Message marked as read!');
        }

        return redirect()->back()->with('error', 'Message not found.');
    }

}
