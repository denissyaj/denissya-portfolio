@extends('layouts.app')

@section('title', 'About Me')

@section('content')
<div class="row">
    <div class="col-12" data-aos="fade-up">
        <div class="card-custom p-5">
            <h1 class="section-title">About Me</h1>
            
            <div class="row mt-4">
                <div class="col-md-8">
                    <p class="lead mb-4">
                        An informatics graduate from Jenderal Achmad Yani University, interested in systems analysis 
                        and web development.
                    </p>
                    <p class="text-muted">
                        I'm an experienced web developer specializing in internal web applications using PHP (Laravel). 
                        With a strong background in problem-solving, system documentation design, and systems development, 
                        I'm passionate about analyzing and building efficient, scalable, and user-friendly systems.
                    </p>
                    
                    <div class="accordion mt-4" id="aboutAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    <i class="fas fa-graduation-cap me-2"></i> Education Details
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#aboutAccordion">
                                <div class="accordion-body">
                                    <h5>Jenderal Achmad Yani University | Cimahi, Indonesia</h5>
                                    <p class="text-muted">Bachelor of Informatics (September 2021 – September 2025)</p>
                                    <ul>
                                        <li>GPA: 3.14/4.00</li>
                                        <li>Thesis: "Clustering of Weather Change Patterns Using the K-Medoids and Gap Statistics Methods"</li>
                                        <li>Focus Area: Data Mining, Clustering</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    <i class="fas fa-certificate me-2"></i> Certification
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
                                <div class="accordion-body">
                                    <div class="alert alert-info d-flex align-items-center">
                                        <i class="fas fa-file-alt fa-2x me-3"></i>
                                        <div>
                                            <strong>TOEFL Certification</strong><br>
                                            Score: 507 (Listening: 39, Structure: 48, Reading: 65)<br>
                                            Jenderal Achmad Yani University (August 2025 – August 2026)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    <i class="fas fa-language me-2"></i> Languages
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
                                <div class="accordion-body">
                                    <div class="d-flex gap-4">
                                        <div class="text-center p-3 bg-light rounded" style="flex: 1;">
                                            <i class="fas fa-flag fa-2x text-primary mb-2"></i>
                                            <h5 class="mb-1">Indonesian</h5>
                                            <span class="badge bg-success">Native</span>
                                        </div>
                                        <div class="text-center p-3 bg-light rounded" style="flex: 1;">
                                            <i class="fas fa-language fa-2x text-primary mb-2"></i>
                                            <h5 class="mb-1">English</h5>
                                            <span class="badge bg-info">Intermediate</span>
                                            <div class="mt-2 small">
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar" style="width: 70%;"></div>
                                                </div>
                                                <span class="text-muted">TOEFL Score: 507</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                    <i class="fas fa-file-alt me-2"></i> Publication
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
                                <div class="accordion-body">
                                    <div class="alert alert-success">
                                        <i class="fas fa-newspaper fa-2x float-start me-3"></i>
                                        <div>
                                            <strong>Journal Publication (SINTA 3)</strong><br>
                                            "Pengelompokkan Pola Perubahan Cuaca Menggunakan Metode K-Medoids dan Gap Statistic"<br>
                                            BUILDING OF INFORMATICS, TECHNOLOGY AND SCIENCE (BITS)<br>
                                            Volume 7, No. 2, September 2025 | ISSN 2684-8910<br>
                                            <span class="badge bg-primary mt-2">Re-Akreditasi SINTA 3</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card bg-light p-4 rounded border-0 shadow-sm">
                        <h5 class="mb-3 text-primary">
                            <i class="fas fa-address-card me-2"></i>Quick Info
                        </h5>
                        <div class="mb-3 d-flex align-items-center">
                            <i class="fas fa-map-marker-alt text-primary me-3" style="width: 24px;"></i>
                            <div>
                                <small class="text-muted d-block">Location</small>
                                <span>Kota Cimahi, Jawa Barat 40523</span>
                            </div>
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <i class="fas fa-envelope text-primary me-3" style="width: 24px;"></i>
                            <div>
                                <small class="text-muted d-block">Email</small>
                                <span>denissyaaj23@gmail.com</span>
                            </div>
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <i class="fas fa-phone text-primary me-3" style="width: 24px;"></i>
                            <div>
                                <small class="text-muted d-block">Phone</small>
                                <span>089530026270</span>
                            </div>
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <i class="fab fa-linkedin text-primary me-3" style="width: 24px;"></i>
                            <div>
                                <small class="text-muted d-block">LinkedIn</small>
                                <span>Denissya Julianthy</span>
                            </div>
                        </div>
                        <hr>
                        
                        <!-- DOWNLOAD CV BUTTON - FIXED -->
                        @php
                            // Get all PDF files from the public/files directory
                            $files = glob(public_path('files/*.pdf'));
                            $cvFile = !empty($files) ? basename($files[0]) : null;
                        @endphp
                        
                        @if($cvFile)
                            <div class="text-center">
                                <a href="{{ asset('files/' . $cvFile) }}" 
                                   download 
                                   class="btn-gradient w-100">
                                    <i class="fas fa-download me-2"></i> Download CV (PDF)
                                </a>
                                <small class="text-muted d-block mt-2">
                                    <i class="fas fa-file-pdf text-danger"></i> Click to download
                                </small>
                            </div>
                        @else
                            <div class="text-center">
                                <div class="alert alert-warning text-center py-2">
                                    <i class="fas fa-exclamation-triangle me-2"></i>
                                    <small>CV file not found. Please upload to /public/files/</small>
                                </div>
                            </div>
                        @endif
                        
                        <div class="text-center mt-3">
                            <small class="text-muted">
                                <i class="fas fa-calendar-alt me-1"></i>Available for opportunities
                            </small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Stats -->
            <div class="row mt-5 pt-3">
                <div class="col-md-3 col-6 mb-3">
                    <div class="text-center p-3 border rounded bg-white">
                        <i class="fas fa-graduation-cap fa-2x text-primary mb-2"></i>
                        <h3 class="mb-0">2025</h3>
                        <small class="text-muted">Graduation Year</small>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="text-center p-3 border rounded bg-white">
                        <i class="fas fa-code fa-2x text-primary mb-2"></i>
                        <h3 class="mb-0">2+</h3>
                        <small class="text-muted">Years Experience</small>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="text-center p-3 border rounded bg-white">
                        <i class="fas fa-file-alt fa-2x text-primary mb-2"></i>
                        <h3 class="mb-0">5+</h3>
                        <small class="text-muted">DPSI Created</small>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="text-center p-3 border rounded bg-white">
                        <i class="fas fa-certificate fa-2x text-primary mb-2"></i>
                        <h3 class="mb-0">507</h3>
                        <small class="text-muted">TOEFL Score</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Fix icon alignment */
.d-flex i {
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.alert i {
    display: inline-flex;
    align-items: center;
}

.progress {
    background-color: #e9ecef;
    border-radius: 10px;
}

.progress-bar {
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 10px;
}

.btn-gradient {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}
</style>
@endsection