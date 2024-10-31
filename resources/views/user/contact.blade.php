

<div style="background: black" class="section" id="contact">
    <div class="container">
        <div class="col-md-12">
            <h4 style="color: #3f729b">------</h4>
            <h1 class="size-50">Contact Me</h1>
            <div class="h-50"></div>
        </div>
        <div class="col-md-4" data-aos="fade-up">

            <h3 >Social Network</h3>
             <ul class="social">
                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                <li><a href="#"><i class="ion-social-dribbble"></i></a></li>
            </ul>
            <div class="clearfix"></div>
            <div class="h-50"></div>
            <div> <h4 style="color: slategray">Phone : <br>093773699302</h4></div>
            <div> <h4 style="color: slategray">Email : <br>fatimalkhl33@gmail.com</h4></div>

        </div>
        <div class="row">
            <div class="col-12 col-md-6 mx-auto">
                <form style="background: #111116"  action="{{ route('contact.store') }}" method="post" class="contact-form">
                    @csrf
                    <h2 class="text-center mb-4">Contact Us</h2>
                    <div class="form-group">
                        <input type="text" class="form-control fh5co_contact_text_box" placeholder="Your Name" name="name" id="name" value="{{ old('name') }}" required />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control fh5co_contact_text_box" placeholder="Your email" name="email" id="name" value="{{ old('email') }}" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control fh5co_contact_text_box" placeholder="Your subject" name="subject" id="subject" value="{{ old('email') }}" required />
                    </div>


                    <div class="form-group">
                        <textarea name="message" class="form-control fh5co_contacts_message" placeholder="Your Message" required>{{ old('message') }}</textarea>
                    </div>

                    <div class="text-center py-3">
                        <button style="background: blue" type="submit" class="btn contact_btn">Send</button>
                    </div>
                </form>
            </div>
        </div>

        </div>


    </div>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<style>
    .row {
        margin-right: 0;
        margin-left: 0;
    }

    .fh5co_contact_text_box,
    .fh5co_contacts_message {
        width: 100%;
        box-sizing: border-box;
        border: 1px solid #ced4da;
        border-radius: 5px;
        padding: 12px;
        transition: border 0.3s ease;
        font-size: 16px;
    }

    .fh5co_contact_text_box:focus, .fh5co_contacts_message:focus {
        border-color: #007bff;
        outline: none;
    }

    .contact-form {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .contact_btn {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 12px 25px;
        border-radius: 5px;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .contact_btn:hover {
        background-color: #0056b3;
        cursor: pointer;
    }

    .form-group {
        margin-bottom: 20px;
    }



</style>
