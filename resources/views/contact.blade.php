@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="row">
    <div class="col-12" data-aos="fade-up">
        <div class="card-custom p-5">
            <h1 class="section-title">Get In Touch</h1>
            <p class="text-muted mb-5">I'd love to hear from you! Feel free to reach out for collaborations or just a chat.</p>
            
            <div class="row">
                <div class="col-lg-5 mb-4">
                    <div class="contact-info h-100">
                        <h3 class="text-white mb-4">Contact Information</h3>
                        
                        <div class="mb-4">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="d-inline-block">
                                <strong>Location</strong><br>
                                Kota Cimahi, Jawa Barat 40523, Indonesia
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <i class="fas fa-envelope"></i>
                            <div class="d-inline-block">
                                <strong>Email</strong><br>
                                denissyaaj23@gmail.com
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <i class="fas fa-phone"></i>
                            <div class="d-inline-block">
                                <strong>Phone</strong><br>
                                089530026270
                            </div>
                        </div>
                        
                        <div class="mt-5 pt-3">
                            <h5 class="text-white mb-3">Follow Me</h5>
                            <div class="d-flex gap-3">
                                <a href="https://www.linkedin.com/in/denissyajulianthy" target="_blank" class="btn btn-light rounded-circle" style="width: 45px; height: 45px;">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="https://www.instagram.com/denissya.julianthy/" target="_blank" class="btn btn-light rounded-circle" style="width: 45px; height: 45px;">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://github.com/denissya" target="_blank" class="btn btn-light rounded-circle" style="width: 45px; height: 45px;">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="mailto:denissyaaj23@gmail.com" class="btn btn-light rounded-circle" style="width: 45px; height: 45px;">
                                    <i class="fas fa-envelope"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-7">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="mb-4">Send Me a Message</h4>
                            
                            <form action="https://formspree.io/f/denissyaaj23@gmail.com" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Your Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Subject</label>
                                    <input type="text" name="subject" class="form-control" placeholder="Message subject">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Message</label>
                                    <textarea name="message" class="form-control" rows="5" placeholder="Write your message here..." required></textarea>
                                </div>
                                
                                <button type="submit" class="btn-gradient w-100">
                                    <i class="fas fa-paper-plane"></i> Send Message
                                </button>
                            </form>
                            
                            <!-- Alternative: Direct email link -->
                            <div class="text-center mt-4">
                                <p class="text-muted small mb-0">Or you can directly email me at:</p>
                                <a href="mailto:denissyaaj23@gmail.com" class="text-primary">
                                    <i class="fas fa-envelope"></i> denissyaaj23@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick Contact Cards -->
<div class="row mt-4" data-aos="fade-up">
    <div class="col-md-4 mb-3">
        <div class="card-custom p-3 text-center">
            <i class="fas fa-phone-alt fa-2x text-primary mb-2"></i>
            <h6>Phone</h6>
            <p class="small mb-0">089530026270</p>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card-custom p-3 text-center">
            <i class="fas fa-envelope fa-2x text-primary mb-2"></i>
            <h6>Email</h6>
            <p class="small mb-0">denissyaaj23@gmail.com</p>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card-custom p-3 text-center">
            <i class="fab fa-linkedin fa-2x text-primary mb-2"></i>
            <h6>LinkedIn</h6>
            <p class="small mb-0">Denissya Julianthy</p>
        </div>
    </div>
</div>

<style>
.contact-info {
    background: linear-gradient(135deg, #667eea, #764ba2);
    padding: 2rem;
    border-radius: 20px;
    color: white;
}

.contact-info i {
    font-size: 1.5rem;
    margin-right: 1rem;
    width: 40px;
}

.form-control:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
}

.btn-light:hover {
    background: #667eea;
    color: white;
    border-color: #667eea;
}

.btn-light:hover i {
    color: white;
}
</style>
@endsection