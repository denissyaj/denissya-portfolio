@extends('layouts.app')

@section('title', 'Skills')

@section('content')
<div class="row">
    <div class="col-12" data-aos="fade-up">
        <div class="card-custom p-5">
            <h1 class="section-title">Skills</h1>
            
            <div class="accordion mt-4" id="skillsAccordion">
                <!-- Technical Skills -->
                <div class="accordion-item mb-3 border rounded">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#technicalSkills">
                            <i class="fas fa-code me-2"></i> Technical Skills
                        </button>
                    </h2>
                    <div id="technicalSkills" class="accordion-collapse collapse show" data-bs-parent="#skillsAccordion">
                        <div class="accordion-body">
                            <div class="d-flex flex-wrap gap-2">
                                <span class="skill-badge"><i class="fas fa-chart-line"></i> System Analysis</span>
                                <span class="skill-badge"><i class="fas fa-file-alt"></i> User Requirements Specification</span>
                                <span class="skill-badge"><i class="fas fa-file-contract"></i> FSD (Functional Specification Document)</span>
                                <span class="skill-badge"><i class="fab fa-laravel"></i> Web Development (Laravel)</span>
                                <span class="skill-badge"><i class="fab fa-php"></i> PHP Native</span>
                                <span class="skill-badge"><i class="fab fa-js"></i> JavaScript</span>
                                <span class="skill-badge"><i class="fas fa-vial"></i> Software Testing (User Acceptance Testing)</span>
                                <span class="skill-badge"><i class="fas fa-database"></i> MySQL</span>
                                <span class="skill-badge"><i class="fab fa-html5"></i> HTML</span>
                                <span class="skill-badge"><i class="fas fa-database"></i> Database & Query</span>
                                <span class="skill-badge"><i class="fas fa-water"></i> SDLC (Waterfall)</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Soft Skills -->
                <div class="accordion-item mb-3 border rounded">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#softSkills">
                            <i class="fas fa-users me-2"></i> Soft Skills
                        </button>
                    </h2>
                    <div id="softSkills" class="accordion-collapse collapse" data-bs-parent="#skillsAccordion">
                        <div class="accordion-body">
                            <div class="d-flex flex-wrap gap-2">
                                <span class="skill-badge"><i class="fas fa-check-circle"></i> Responsibility</span>
                                <span class="skill-badge"><i class="fas fa-handshake"></i> Teamwork</span>
                                <span class="skill-badge"><i class="fas fa-lightbulb"></i> Problem-Solving</span>
                                <span class="skill-badge"><i class="fas fa-brain"></i> Analytical Thinking</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Computer Skills -->
                <div class="accordion-item mb-3 border rounded">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#computerSkills">
                            <i class="fas fa-laptop me-2"></i> Computer Skills
                        </button>
                    </h2>
                    <div id="computerSkills" class="accordion-collapse collapse" data-bs-parent="#skillsAccordion">
                        <div class="accordion-body">
                            <div class="d-flex flex-wrap gap-2">
                                <span class="skill-badge"><i class="fab fa-microsoft"></i> Microsoft Office (Word, Excel, PowerPoint)</span>
                                <span class="skill-badge"><i class="fab fa-google"></i> Google Workspace (Docs)</span>
                                <span class="skill-badge"><i class="fas fa-chart-line"></i> Draw.IO Diagrams</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Languages -->
                <div class="accordion-item mb-3 border rounded">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#languageSkills">
                            <i class="fas fa-language me-2"></i> Languages
                        </button>
                    </h2>
                    <div id="languageSkills" class="accordion-collapse collapse" data-bs-parent="#skillsAccordion">
                        <div class="accordion-body">
                            <div class="d-flex flex-wrap gap-2">
                                <span class="skill-badge"><i class="fas fa-flag"></i> Indonesian (Native)</span>
                                <span class="skill-badge"><i class="fas fa-language"></i> English (Intermediate)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Accordion styles */
.accordion-item {
    background: white;
    border: 1px solid #e9ecef !important;
    border-radius: 12px !important;
    overflow: hidden;
    margin-bottom: 1rem;
}

.accordion-button {
    background: white;
    color: #4a5568;
    font-weight: 600;
    padding: 1rem 1.25rem;
    transition: all 0.3s ease;
}

.accordion-button:not(.collapsed) {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
}

.accordion-button:not(.collapsed) i {
    color: white;
}

.accordion-button:focus {
    box-shadow: none;
    border-color: transparent;
}

.accordion-button i {
    width: 24px;
    margin-right: 10px;
    color: #667eea;
}

.accordion-body {
    padding: 1.25rem;
    background: #f8f9fa;
}

/* Skill badge styles */
.skill-badge {
    background: white;
    color: #4a5568;
    padding: 8px 16px;
    border-radius: 25px;
    font-size: 0.85rem;
    font-weight: 500;
    margin: 5px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
    border: 1px solid #e9ecef;
    box-shadow: 0 2px 4px rgba(0,0,0,0.02);
}

.skill-badge i {
    font-size: 1rem;
    width: 20px;
    color: #667eea;
}

.skill-badge:hover {
    transform: translateY(-2px);
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    border-color: transparent;
    box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
}

.skill-badge:hover i {
    color: white;
}

/* Alert styles */
.alert-info {
    background: linear-gradient(135deg, #667eea15, #764ba215);
    border: none;
    border-radius: 15px;
    color: #4a5568;
}
</style>
@endsection