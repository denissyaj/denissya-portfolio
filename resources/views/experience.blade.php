@extends('layouts.app')

@section('title', 'Experience')

@section('content')
<div class="row">
    <div class="col-12" data-aos="fade-up">
        <div class="card-custom p-5">
            <h1 class="section-title">Work Experience</h1>
            
            <div class="timeline mt-4">
                <!-- Current Job - Web Developer -->
                <div class="timeline-item mb-5">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div>
                                    <h3 class="h5 mb-1">PT Simex Pharmaceutical Indonesia</h3>
                                    <h4 class="h6 text-primary">Web Developer</h4>
                                    <p class="text-muted small">
                                        <i class="fas fa-calendar-alt"></i> February 2026 - Present
                                    </p>
                                </div>
                                <span class="badge bg-success">Current</span>
                            </div>
                            
                            <div class="accordion" id="expCurrent">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#currentDetails">
                                            <i class="fas fa-tasks me-2"></i> Responsibilities & Achievements
                                        </button>
                                    </h2>
                                    <div id="currentDetails" class="accordion-collapse collapse" data-bs-parent="#expCurrent">
                                        <div class="accordion-body">
                                            <ul class="mb-0">
                                                <li>Building systems using Laravel Framework, including: Technical Support, PPIC (Material Inventory)</li>
                                                <li>Developing full-stack web applications with Laravel and MySQL</li>
                                                <li>Implementing efficient database designs and optimized queries</li>
                                                <li>Creating responsive user interfaces with Bootstrap and JavaScript</li>
                                                <li>Collaborating with cross-functional teams for system implementation</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- System Analyst - Yang merancang Technical Support & IT Support -->
                <div class="timeline-item mb-5">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h3 class="h5 mb-1">PT Simex Pharmaceutical Indonesia</h3>
                            <h4 class="h6 text-primary">System Analyst</h4>
                            <p class="text-muted small">
                                <i class="fas fa-calendar-alt"></i> December 2025 – February 2026
                            </p>
                            
                            <div class="accordion" id="expAnalyst">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#analystDetails">
                                            <i class="fas fa-clipboard-list me-2"></i> System Design Documents Created
                                        </button>
                                    </h2>
                                    <div id="analystDetails" class="accordion-collapse collapse" data-bs-parent="#expAnalyst">
                                        <div class="accordion-body">
                                            <h6 class="fw-bold mb-2">As System Analyst, I created DPSI for:</h6>
                                            <ul>
                                                <li><strong>IT Support System</strong> - Complete system design documentation including URS, functional requirements, use cases, activity diagrams, class diagrams, database design, and UI/UX design using Figma</li>
                                                <li><strong>Technical Support System</strong> - Comprehensive DPSI covering request management, approval flow, technician assignment, spare part tracking, and reporting system</li>
                                                <li><strong>Environment Monitoring System</strong> - System design for monitoring environmental parameters on PIMS Website</li>
                                            </ul>
                                            <div class="mt-2">
                                                <span class="skill-badge">Draw.io</span>
                                                <span class="skill-badge">Figma</span>
                                                <span class="skill-badge">UML Diagrams</span>
                                                <span class="skill-badge">Database Design</span>
                                                <span class="skill-badge">User Requirements</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Internship -->
                <div class="timeline-item">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h3 class="h5 mb-1">Dinas Komunikasi dan Informatika Kota Solok</h3>
                            <h4 class="h6 text-primary">Web Developer Intern</h4>
                            <p class="text-muted small">
                                <i class="fas fa-calendar-alt"></i> August 2024 – September 2024
                            </p>
                            
                            <div class="accordion" id="expIntern">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#internDetails">
                                            <i class="fas fa-code me-2"></i> Projects
                                        </button>
                                    </h2>
                                    <div id="internDetails" class="accordion-collapse collapse" data-bs-parent="#expIntern">
                                        <div class="accordion-body">
                                            <ul class="mb-0">
                                                <li>Developed Dinas Kesehatan Kota Solok website using PHP Native</li>
                                                <li>Built responsive web interfaces with Bootstrap</li>
                                                <li>Integrated MySQL database for dynamic content management</li>
                                                <li>Implemented CRUD operations for health information management</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Role Distinction Card -->
<div class="row mt-4" data-aos="fade-up">
    <div class="col-12">
        <div class="card-custom p-4 bg-light">
            <h4 class="mb-3"><i class="fas fa-info-circle text-primary me-2"></i>My Roles Explained</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="p-3 border rounded bg-white h-100">
                        <h5><i class="fas fa-chalkboard-user text-primary me-2"></i>As System Analyst</h5>
                        <p class="small text-muted mb-0">I designed complete system documentation including:</p>
                        <ul class="small mt-2">
                            <li>User Requirements Specification (URS)</li>
                            <li>Functional Specification Documents (FSD)</li>
                            <li>System User Guide (Work Instructions Documents)</li>
                            <li>System Design Documents (DPSI)</li>
                            <li>UML Diagrams (Use Case, Activity, Class Diagrams)</li>
                            <li>Flowchart</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 border rounded bg-white h-100">
                        <h5><i class="fas fa-laptop-code text-primary me-2"></i>As Web Developer</h5>
                        <p class="small text-muted mb-0">I developed and implemented:</p>
                        <ul class="small mt-2">
                            <li>Technical Support System using Laravel</li>
                            <li>PPIC (Material Inventory) system using Laravel</li>
                            <li>Dinas Kesehatan Kota Solok website using PHP Native</li>
                            <li>Database design and optimization</li>
                            <li>Responsive front-end interfaces</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.timeline-item {
    position: relative;
    padding-left: 2rem;
}

.timeline-item::before {
    content: '';
    position: absolute;
    left: -1rem;
    top: 1.5rem;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: #667eea;
    border: 2px solid white;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.3);
}

.timeline {
    position: relative;
}

.timeline::before {
    content: '';
    position: absolute;
    left: -0.5rem;
    top: 2rem;
    bottom: 2rem;
    width: 2px;
    background: linear-gradient(135deg, #667eea, #764ba2);
}
</style>
@endsection