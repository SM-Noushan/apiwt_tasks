@extends('layouts.app')

@section('content')

@extends('inc.nav')

<div class="mt-5 conatiner">
    <div class="text-center">
        <h3 class="text-primary">How Can We Help You?</h3>
        <p class="lead">Do you have any questions? Please do not hesitate to contact us directly. <br> Our team will come back to you within
            a matter of hours to help you.</p>
    </div>
    <div class=" d-flex align-items-center justify-content-center">
        <div class="bg-white col-md-4">
            <div class="p-4 rounded shadow-md">
                <div>
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="mt-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Your Email" required>
                </div class="mt-3">
                <div class="mt-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                </div>
                <div class="mt-3 mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea name="message" cols="20" rows="6" class="form-control"
                        placeholder="message"></textarea>
                </div>
                <button class="btn btn-primary">
                    Submit Form
                </button>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

<script type="text/javascript">
document.title='Contact us'
</script>