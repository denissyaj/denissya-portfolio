@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="row align-items-center min-vh-75 justify-content-center">
    <div class="col-lg-8" data-aos="fade-up">
        <div class="card-custom p-5 text-center">
            <span class="badge bg-gradient mb-3 px-3 py-2" style="background: linear-gradient(135deg, #667eea, #764ba2); color: white;">
                <i class="fas fa-code"></i> Web Developer & System Analyst
            </span>
            <h1 class="display-4 fw-bold mb-3">
                Hi, I'm <span style="background: linear-gradient(135deg, #667eea, #764ba2); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Denissya Julianthy</span>
            </h1>
            <p class="lead text-muted mb-4">
                Informatics Graduate | System Analyst | Web Developer (Laravel)
            </p>
            <div class="d-flex gap-3 justify-content-center">
                <a href="{{ url('/projects') }}" class="btn-gradient">
                    <i class="fas fa-eye"></i> View Projects
                </a>
                <a href="{{ url('/contact') }}" class="btn btn-outline-primary rounded-pill px-4">
                    <i class="fas fa-envelope"></i> Contact Me
                </a>
            </div>
            
            <div class="mt-5 pt-3">
                <div class="row text-center">
                    <div class="col-4">
                        <h3 class="fw-bold text-primary">2+</h3>
                        <small class="text-muted">Years Experience</small>
                    </div>
                    <div class="col-4">
                        <h3 class="fw-bold text-primary">5+</h3>
                        <small class="text-muted">Projects Completed</small>
                    </div>
                    <div class="col-4">
                        <h3 class="fw-bold text-primary">5+</h3>
                        <small class="text-muted">System Documents</small>
                    </div>
                </div>
            </div>
            
            <!-- Social Media Links -->
            <div class="mt-5 pt-3">
                <div class="d-flex justify-content-center gap-3">
                    <a href="https://www.linkedin.com/in/denissyajulianthy" target="_blank" class="btn btn-outline-primary rounded-circle" style="width: 45px; height: 45px;">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://github.com/denissya" target="_blank" class="btn btn-outline-primary rounded-circle" style="width: 45px; height: 45px;">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.instagram.com/denissya.julianthy/" target="_blank" class="btn btn-outline-primary rounded-circle" style="width: 45px; height: 45px;">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="mailto:denissyaaj23@gmail.com" class="btn btn-outline-primary rounded-circle" style="width: 45px; height: 45px;">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5" data-aos="fade-up">
    <div class="col-12">
        <div class="card-custom p-4">
            <h3 class="section-title">What I Do</h3>
            <div class="row mt-4">
                <div class="col-md-4 mb-3">
                    <div class="text-center p-3">
                        <div class="mb-3">
                            <i class="fas fa-chart-line fa-3x" style="color: #667eea;"></i>
                        </div>
                        <h5>System Analysis</h5>
                        <p class="text-muted small">User Requirements Specification, FSD, System Design Documents (DPSI)</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="text-center p-3">
                        <div class="mb-3">
                            <i class="fas fa-laptop-code fa-3x" style="color: #764ba2;"></i>
                        </div>
                        <h5>Web Development</h5>
                        <p class="text-muted small">Laravel, PHP Native, JavaScript, MySQL, HTML/CSS</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="text-center p-3">
                        <div class="mb-3">
                            <i class="fas fa-file-alt fa-3x" style="color: #667eea;"></i>
                        </div>
                        <h5>System Documentation</h5>
                        <p class="text-muted small">DPSI, FSD, Technical Documentation, User Manuals</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Publication Alert -->
<div class="row mt-4" data-aos="fade-up">
    <div class="col-12">
        <div class="alert alert-success border-0 rounded-3 shadow-sm">
            <i class="fas fa-file-alt fa-2x me-3 float-start"></i>
            <div>
                <strong>Latest Publication!</strong><br>
                My research paper "Pengelompokkan Pola Perubahan Cuaca Menggunakan Metode K-Medoids dan Gap Statistic" 
                has been published in BITS Journal (SINTA 3) - Volume 7, No. 2, September 2025.
            </div>
        </div>
    </div>
</div>

<style>
/* Fix untuk balance layout */
.min-vh-75 {
    min-height: 75vh;
}

.card-custom {
    height: 100%;
    background: white;
    border-radius: 20px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

.card-custom:hover {
    transform: translateY(-5px);
    box-shadow: 0 30px 50px rgba(0,0,0,0.15);
    transition: all 0.3s ease;
}

.btn-gradient {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    border: none;
    padding: 10px 25px;
    border-radius: 25px;
    font-weight: 500;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.btn-gradient:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
    color: white;
}

.btn-outline-primary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    border: 2px solid #667eea;
    color: #667eea;
    transition: all 0.3s ease;
}

.btn-outline-primary:hover {
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-color: transparent;
    color: white;
    transform: translateY(-2px);
}

.rounded-circle {
    display: flex;
    align-items: center;
    justify-content: center;
}

.section-title {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    position: relative;
    display: inline-block;
    background: linear-gradient(135deg, #667eea, #764ba2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 0;
    width: 60px;
    height: 4px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 2px;
}

/* Responsive */
@media (max-width: 992px) {
    .min-vh-75 {
        min-height: auto;
    }
    
    .col-lg-8 {
        margin-bottom: 2rem;
    }
}
</style>
@endsection