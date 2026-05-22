@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<div class="row">
    <div class="col-12" data-aos="fade-up">
        <div class="card-custom p-5">
            <h1 class="section-title">Featured Projects</h1>
            
            <div class="accordion mt-4" id="projectsAccordion">
                <!-- Technical Support System - Developed by Me -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#projectTechSupport">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-headset fa-2x me-3 text-primary"></i>
                                <div>
                                    <h5 class="mb-0">Technical Support System</h5>
                                    <small class="text-muted">PT Simex Pharmaceutical Indonesia</small>
                                </div>
                            </div>
                        </button>
                    </h2>
                    <div id="projectTechSupport" class="accordion-collapse collapse show" data-bs-parent="#projectsAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="alert alert-info mb-3">
                                        <i class="fas fa-user-check me-2"></i> 
                                        <strong>My Role: System Analyst & Web Developer</strong> - I designed the DPSI and developed the system
                                    </div>
                                    <p>Complete technical support management system for handling maintenance requests, technician assignments, and spare part tracking.</p>
                                    <h6>As System Analyst (DPSI Creator):</h6>
                                    <ul>
                                        <li>Created complete System Design Document (DPSI) functional/non-functional requirements</li>
                                        <li>Designed UML diagrams (Use Case, Activity, Class diagrams) using Draw.io</li>
                                        <li>Designed database schema with 9+ tables (Users, Requests, History, Approvals, etc.)</li>
                                        <li>Defined approval workflows for Requester Manager, TK Manager levels</li>
                                    </ul>
                                    <h6 class="mt-3">As Web Developer:</h6>
                                    <ul>
                                        <li>Built the system using Laravel Framework</li>
                                        <li>Implemented multi-level approval workflow</li>
                                        <li>Created real-time status monitoring dashboard</li>
                                        <li>Integrated spare part inventory management</li>
                                        <li>Developed reporting and analytics features</li>
                                    </ul>
                                    <div class="mt-3">
                                        <span class="skill-badge">Laravel</span>
                                        <span class="skill-badge">MySQL</span>
                                        <span class="skill-badge">Bootstrap 5</span>
                                        <span class="skill-badge">JavaScript</span>
                                        <span class="skill-badge">Draw.io</span>
                                        <span class="skill-badge">Figma</span>
                                        <span class="skill-badge">UML</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="bg-light p-3 rounded text-center mb-2">
                                        <i class="fas fa-check-circle fa-3x text-success mb-2"></i>
                                        <p class="mb-0"><strong>Status:</strong> Production</p>
                                        <small class="text-muted">2026</small>
                                    </div>
                                    <div class="bg-light p-3 rounded text-center">
                                        <i class="fas fa-file-alt fa-3x text-primary mb-2"></i>
                                        <p class="mb-0"><strong>DPSI Document:</strong> Created</p>
                                        <small class="text-muted">Complete Documentation</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- IT Support System - As System Analyst Only -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#projectITSupport">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-desktop fa-2x me-3 text-primary"></i>
                                <div>
                                    <h5 class="mb-0">IT Support System</h5>
                                    <small class="text-muted">PT Simex Pharmaceutical Indonesia</small>
                                </div>
                            </div>
                        </button>
                    </h2>
                    <div id="projectITSupport" class="accordion-collapse collapse" data-bs-parent="#projectsAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="alert alert-warning mb-3">
                                        <i class="fas fa-pen-ruler me-2"></i> 
                                        <strong>My Role: System Analyst Only</strong> - I designed the complete DPSI documentation
                                    </div>
                                    <p>Comprehensive IT support ticketing system for managing technology-related requests, incidents, and change management.</p>
                                    <h6>As System Analyst (DPSI Creator):</h6>
                                    <ul>
                                        <li>Created complete System Design Document (DPSI) from scratch</li>
                                        <li>Designed functional requirements for ticket management, approval workflows, and reporting</li>
                                        <li>Created UML diagrams: Use Case, Activity, Class diagrams</li>
                                        <li>Designed database schema with tables for Users, Topics, Requests, History, Validation, Reports</li>
                                        <li>Defined validation process for Usulan Perubahan (UP)</li>
                                        <li>Designed Post Incident Review (PIR) workflow</li>
                                    </ul>
                                    <div class="mt-3">
                                        <span class="skill-badge">System Analysis</span>
                                        <span class="skill-badge">Draw.io</span>
                                        <span class="skill-badge">UML</span>
                                        <span class="skill-badge">DPSI</span>
                                        <span class="skill-badge">FSD</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="bg-light p-3 rounded text-center mb-2">
                                        <i class="fas fa-check-circle fa-3x text-success mb-2"></i>
                                        <p class="mb-0"><strong>Status:</strong> DPSI Completed</p>
                                        <small class="text-muted">Documentation Ready</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- PPIC Material Inventory -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#projectPPIC">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-boxes fa-2x me-3 text-primary"></i>
                                <div>
                                    <h5 class="mb-0">PPIC Material Inventory System</h5>
                                    <small class="text-muted">PT Simex Pharmaceutical Indonesia</small>
                                </div>
                            </div>
                        </button>
                    </h2>
                    <div id="projectPPIC" class="accordion-collapse collapse" data-bs-parent="#projectsAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="alert alert-info mb-3">
                                        <i class="fas fa-laptop-code me-2"></i> 
                                        <strong>My Role: Web Developer</strong> - Built using Laravel Framework
                                    </div>
                                    <p>Comprehensive material inventory management system for pharmaceutical manufacturing operations.</p>
                                    <h6>Key Features:</h6>
                                    <ul>
                                        <li>Real-time inventory tracking and stock monitoring</li>
                                        <li>Purchase order management with approval workflow</li>
                                        <li>Automated reorder notifications</li>
                                        <li>Reporting and analytics dashboard</li>
                                        <li>Supplier management integration</li>
                                    </ul>
                                    <div class="mt-3">
                                        <span class="skill-badge">Laravel</span>
                                        <span class="skill-badge">MySQL</span>
                                        <span class="skill-badge">Bootstrap 5</span>
                                        <span class="skill-badge">JavaScript</span>
                                        <span class="skill-badge">Livewire</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="bg-light p-3 rounded text-center">
                                        <i class="fas fa-check-circle fa-3x text-success mb-2"></i>
                                        <p class="mb-0"><strong>Status:</strong> Production</p>
                                        <small class="text-muted">2026</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Dinas Kesehatan Website -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#projectHealth">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-hospital fa-2x me-3 text-primary"></i>
                                <div>
                                    <h5 class="mb-0">Dinas Kesehatan Website</h5>
                                    <small class="text-muted">Dinas Kesehatan Kota Solok</small>
                                </div>
                            </div>
                        </button>
                    </h2>
                    <div id="projectHealth" class="accordion-collapse collapse" data-bs-parent="#projectsAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="alert alert-info mb-3">
                                        <i class="fas fa-laptop-code me-2"></i> 
                                        <strong>My Role: Web Developer</strong> - Built using PHP Native
                                    </div>
                                    <p>Official website for Dinas Kesehatan Kota Solok for information dissemination and public services.</p>
                                    <h6>Key Features:</h6>
                                    <ul>
                                        <li>Information portal with news and announcements</li>
                                        <li>Health service information management</li>
                                        <li>Contact management system</li>
                                        <li>Responsive design for all devices</li>
                                        <li>Admin dashboard for content management</li>
                                    </ul>
                                    <div class="mt-3">
                                        <span class="skill-badge">PHP Native</span>
                                        <span class="skill-badge">MySQL</span>
                                        <span class="skill-badge">Bootstrap</span>
                                        <span class="skill-badge">jQuery</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="bg-light p-3 rounded text-center">
                                        <i class="fas fa-check-circle fa-3x text-success mb-2"></i>
                                        <p class="mb-0"><strong>Status:</strong> Completed</p>
                                        <small class="text-muted">2024</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Research Publication -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#projectResearch">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-cloud-sun-rain fa-2x me-3 text-primary"></i>
                                <div>
                                    <h5 class="mb-0">Weather Pattern Clustering Research</h5>
                                    <small class="text-muted">Published in BITS Journal (SINTA 3)</small>
                                </div>
                            </div>
                        </button>
                    </h2>
                    <div id="projectResearch" class="accordion-collapse collapse" data-bs-parent="#projectsAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="alert alert-success mb-3">
                                        <i class="fas fa-file-alt me-2"></i> 
                                        <strong>Publication:</strong> "Pengelompokkan Pola Perubahan Cuaca Menggunakan Metode K-Medoids dan Gap Statistic"
                                    </div>
                                    <p>Research applying data mining techniques to cluster weather change patterns using K-Medoids algorithm with Gap Statistics method for optimal cluster determination.</p>
                                    <h6>Methodology:</h6>
                                    <ul>
                                        <li>K-Medoids Clustering Algorithm for robust pattern grouping</li>
                                        <li>Gap Statistics for determining optimal number of clusters</li>
                                        <li>Data preprocessing and normalization techniques</li>
                                        <li>Visualization of clustering results</li>
                                    </ul>
                                    <div class="mt-3">
                                        <span class="skill-badge">Python</span>
                                        <span class="skill-badge">Data Mining</span>
                                        <span class="skill-badge">K-Medoids</span>
                                        <span class="skill-badge">Gap Statistics</span>
                                        <span class="skill-badge">Matplotlib</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="bg-light p-3 rounded text-center">
                                        <i class="fas fa-trophy fa-3x text-warning mb-2"></i>
                                        <p class="mb-0"><strong>SINTA 3 Journal</strong></p>
                                        <small class="text-muted">Volume 7, No. 2, Sept 2025</small>
                                        <hr>
                                        <i class="fas fa-medal text-primary"></i>
                                        <p class="small mb-0">Thesis Research</p>
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
@endsection