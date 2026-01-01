@extends('frontend.layouts.master')

@section('title', 'Apvr Infotech - Contact Us')

@section('content')
    <div class="breadcrumb-section position-relative z-1 overflow-hidden" data-background="assets/images/banner/breadcrumb.jpg">
        <span class="circle-shape-1 rounded-circle position-absolute"></span>
        <span class="circle-shape-2 rounded-circle position-absolute"></span>
        <span class="circle-shape-3 rounded-circle position-absolute"></span>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h1 class="text-white mb-3 display-2 fw-bold">Contact Us</h1>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h3 class="head02 mt-5 mb-5">Connect With Us</h3>
        <!-- Career Header Section -->
            <!-- Career Header Section -->
            <section class="career-header-section position-relative pb-5">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="career-feature-box text-center p-5 h-100 d-flex flex-column justify-content-center">
                                <div class="career-icon mb-4">
                                    <i class="fa-regular fa-map fa-3x primary-text-color"></i>
                                </div>
                                <h3 class="mb-4 fw-bold">Location</h3>
                                <p class="mb-0">J-162, Japan Market, Near Delhi Gate, Surat., Gujarat - 395003</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="career-feature-box text-center p-5 h-100 d-flex flex-column justify-content-center">
                                <div class="career-icon mb-4">
                                    <i class="fa-regular fa-address-book fa-3x primary-text-color"></i>
                                </div>
                                <h3 class="mb-4 fw-bold">Contact Number</h3>
                                <p class="mb-0">+91 8866848430</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="career-feature-box text-center p-5 h-100 d-flex flex-column justify-content-center">
                                <div class="career-icon mb-4">
                                    <i class="fa-regular fa-envelope fa-3x primary-text-color"></i>
                                </div>
                                <h3 class="mb-4 fw-bold">Email</h3>
                                <p class="mb-0">info@apvrinfotech.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>

    <section class="contact-form-area pt-20 pb-20 bg-light-white position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="ct-left">
                        <span class="cr-subtitle position-relative fw-semibold primary-text-color">Get In Touch</span>
                        <h2 class="mt-4 mb-5">You can connect with us when need help!</h2>
                        <form id="contactForm" class="ct-contact-form" action="{{ route('contact.submit') }}" method="post" enctype="multipart/form-data" style="background: white; padding: 2rem; border-radius: 0.5rem; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                            @csrf
                            
                            <div id="formMessages" class="mb-4"></div>
                            
                            <!-- Name Field -->
                            <div class="position-relative mb-4" style="position: relative; margin-bottom: 1.5rem;">
                                <label id="name_label" class="contact-floating-label" style="position: absolute; top: -10px; left: 12px; padding: 0 4px; background: white; font-size: 0.875rem; font-weight: 500; color: #374151;">
                                    Your Name <span style="color: #ef4444;">*</span>
                                </label>
                                <input 
                                    type="text" 
                                    id="name" 
                                    name="name" 
                                    style="width: 100%; padding: 0.75rem 1rem; border: 1px solid #d1d5db; border-radius: 0.375rem; transition: all 0.2s; background: white; outline: none;"
                                    placeholder=""
                                    value="{{ old('name') }}" 
                                    required
                                    onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37, 99, 235, 0.1)';"
                                    onblur="if(!this.value) { this.style.borderColor='#d1d5db'; this.style.boxShadow='none'; }"
                                />
                                <small id="name_error" class="text-danger d-block mt-1" style="display: none; margin-top: 0.5rem;"></small>
                            </div>
                            
                            <!-- Email Field -->
                            <div class="position-relative mb-4" style="position: relative; margin-bottom: 1.5rem;">
                                <label id="email_label" class="contact-floating-label" style="position: absolute; top: -10px; left: 12px; padding: 0 4px; background: white; font-size: 0.875rem; font-weight: 500; color: #374151;">
                                    Email Address <span style="color: #ef4444;">*</span>
                                </label>
                                <input 
                                    type="email" 
                                    id="email" 
                                    name="email" 
                                    style="width: 100%; padding: 0.75rem 1rem; border: 1px solid #d1d5db; border-radius: 0.375rem; transition: all 0.2s; background: white; outline: none;"
                                    placeholder=""
                                    value="{{ old('email') }}" 
                                    required
                                    onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37, 99, 235, 0.1)';"
                                    onblur="if(!this.value) { this.style.borderColor='#d1d5db'; this.style.boxShadow='none'; }"
                                />
                                <small id="email_error" class="text-danger d-block mt-1" style="display: none; margin-top: 0.5rem;"></small>
                            </div>

                            <!-- Service Field -->
                            <div class="position-relative mb-4" style="position: relative; margin-bottom: 1.5rem;">
                                <label id="service_label" class="contact-floating-label" style="position: absolute; top: -10px; left: 12px; padding: 0 4px; background: white; font-size: 0.875rem; font-weight: 500; color: #374151;">
                                    Service <span style="color: #ef4444;">*</span>
                                </label>
                                <select 
                                    id="service" 
                                    name="service" 
                                    style="width: 100%; padding: 0.75rem 1rem; padding-right: 2.5rem; border: 1px solid #d1d5db; border-radius: 0.375rem; transition: all 0.2s; background: white; outline: none; appearance: none; background-image: url('data:image/svg+xml,%3csvg xmlns=\'http://www.w3.org/2000/svg\' fill=\'none\' viewBox=\'0 0 20 20\'%3e%3cpath stroke=\'%236b7280\' stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'1.5\' d=\'M6 8l4 4 4-4\'/%3e%3c/svg%3e'); background-position: right 0.5rem center; background-repeat: no-repeat; background-size: 1.5em 1.5em;"
                                    required
                                    onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37, 99, 235, 0.1)';"
                                    onblur="this.style.borderColor='#d1d5db'; this.style.boxShadow='none';"
                                >
                                    <option value="">Select a service</option>
                                    <option value="UI/UX Design" {{ old('service') == 'UI/UX Design' ? 'selected' : '' }}>UI/UX Design</option>
                                    <option value="Web Development" {{ old('service') == 'Web Development' ? 'selected' : '' }}>Web Development</option>
                                    <option value="App Development" {{ old('service') == 'App Development' ? 'selected' : '' }}>App Development</option>
                                    <option value="Graphics Design" {{ old('service') == 'Graphics Design' ? 'selected' : '' }}>Graphics Design</option>
                                    <option value="Digital Marketing" {{ old('service') == 'Digital Marketing' ? 'selected' : '' }}>Digital Marketing</option>
                                    <option value="SEO Optimization" {{ old('service') == 'SEO Optimization' ? 'selected' : '' }}>SEO Optimization</option>
                                    <option value="E-Commerce Solutions" {{ old('service') == 'E-Commerce Solutions' ? 'selected' : '' }}>E-Commerce Solutions</option>
                                    <option value="ERP Solutions" {{ old('service') == 'ERP Solutions' ? 'selected' : '' }}>ERP Solutions</option>
                                    <option value="CRM Solutions" {{ old('service') == 'CRM Solutions' ? 'selected' : '' }}>CRM Solutions</option>
                                    <option value="Cloud Solutions" {{ old('service') == 'Cloud Solutions' ? 'selected' : '' }}>Cloud Solutions</option>
                                    <option value="others" {{ old('service') == 'others' ? 'selected' : '' }}>Others</option>
                                </select>
                                <small id="service_error" class="text-danger d-block mt-1" style="display: none; margin-top: 0.5rem;"></small>
                            </div>

                            <!-- Others Service Field (Conditional) -->
                            <div id="othersServiceContainer" class="position-relative mb-4" style="position: relative; margin-bottom: 1.5rem; display: none;">
                                <label id="others_service_label" class="contact-floating-label" style="position: absolute; top: -10px; left: 12px; padding: 0 4px; background: white; font-size: 0.875rem; font-weight: 500; color: #374151;">
                                    Specify Service <span style="color: #ef4444;">*</span>
                                </label>
                                <input 
                                    type="text" 
                                    id="others_service" 
                                    name="others_service" 
                                    style="width: 100%; padding: 0.75rem 1rem; border: 1px solid #d1d5db; border-radius: 0.375rem; transition: all 0.2s; background: white; outline: none;"
                                    placeholder=""
                                    value="{{ old('others_service') }}"
                                    onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37, 99, 235, 0.1)';"
                                    onblur="if(!this.value) { this.style.borderColor='#d1d5db'; this.style.boxShadow='none'; }"
                                />
                                <small id="others_service_error" class="text-danger d-block mt-1" style="display: none; margin-top: 0.5rem;"></small>
                            </div>
                            
                            <!-- Message Field -->
                            <div class="position-relative mb-4" style="position: relative; margin-bottom: 1.5rem;">
                                <label id="comment_label" class="contact-floating-label" style="position: absolute; top: -10px; left: 12px; padding: 0 4px; background: white; font-size: 0.875rem; font-weight: 500; color: #374151;">
                                    Your Message <span style="color: #ef4444;">*</span>
                                </label>
                                <textarea 
                                    id="comment" 
                                    name="comment" 
                                    rows="5" 
                                    style="width: 100%; padding: 0.75rem 1rem; border: 1px solid #d1d5db; border-radius: 0.375rem; transition: all 0.2s; background: white; resize: vertical; outline: none;"
                                    placeholder=""
                                    required
                                    onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37, 99, 235, 0.1)';"
                                    onblur="if(!this.value) { this.style.borderColor='#d1d5db'; this.style.boxShadow='none'; }"
                                >{{ old('comment') }}</textarea>
                                <small id="comment_error" class="text-danger d-block mt-1" style="display: none; margin-top: 0.5rem;"></small>
                            </div>

                            <!-- Attachment Field -->
                            <div class="position-relative mb-4" style="position: relative; margin-bottom: 1.5rem;">
                                <label id="attachment_label" class="contact-floating-label" style="position: absolute; top: -10px; left: 12px; padding: 0 4px; background: white; font-size: 0.875rem; font-weight: 500; color: #6b7280;">
                                    Attach File <span style="color: #9ca3af; font-size: 0.75rem;">(optional)</span>
                                </label>
                                <input 
                                    type="file" 
                                    name="attachment" 
                                    id="attachment" 
                                    style="width: 100%; padding: 0.75rem 1rem; border: 1px solid #d1d5db; border-radius: 0.375rem; transition: all 0.2s; background: white; outline: none;"
                                    onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37, 99, 235, 0.1)';"
                                    onblur="this.style.borderColor='#d1d5db'; this.style.boxShadow='none';"
                                />
                                <small class="d-block mt-1 text-muted" style="margin-top: 0.5rem; font-size: 0.75rem; color: #6b7280;">All file types allowed. Maximum size: 10MB</small>
                                <small id="attachment_error" class="text-danger d-block mt-1" style="display: none; margin-top: 0.5rem;"></small>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" id="submitBtn" class="w-100 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition font-medium" style="width: 100%; padding: 0.75rem 1rem; background: #2563eb; color: white; border-radius: 0.375rem; border: none; font-weight: 500; cursor: pointer; transition: all 0.2s;">
                                <span id="submitText">Send Message Now</span>
                                <span id="submitLoader" style="display: none;">
                                    <i class="fas fa-spinner fa-spin"></i> Sending...
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container google-map pt-20 pb-20 py-20">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1767.8670995295256!2d72.83914117840618!3d21.20065388520899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e57fadebedb%3A0x299a6196f6240624!2sJapan%20Market%2C%20Begampura%2C%20Surat%2C%20Gujarat%20395003!5e1!3m2!1sen!2sin!4v1760520653913!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- Global Achievements Section - Mobile -->
    <div class="d-block d-lg-none">
        <div class="brands-container pt-5 pb-5">
            <div class="container">
                <h4 class="mt-4 mb-32" style="text-align: center !important; color: #13114c !important;">Our Global Achievments</h4>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <img src="assets/c01.png" class="mb-3 w-100" />
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="assets/c02.png" class="mb-3 w-100" />
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="assets/c04.png" class="mb-3 w-100" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Global Achievements Section - Desktop -->
    <div class="d-lg-block d-none">
            <div class="brands-container pt-5 pb-5">
                <div class="container">
                    <h4 class="mt-4 mb-32" style="text-align: center !important; color: #13114C !important;">Our Global Achievments</h4>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="d-flex flex-row justify-content-center">
                            <img src="assets/c01.png" class="mb-3 imas02" alt="achivement-image">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                         <div class="d-flex flex-row justify-content-center">
                            <img src="assets/c02.png" class="mb-3 imas02" alt="achivement-image">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                         <div class="d-flex flex-row justify-content-center">
                            <img src="assets/c04.png" class="mb-3 imas02" alt="achivement-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const submitText = document.getElementById('submitText');
    const submitLoader = document.getElementById('submitLoader');
    const formMessages = document.getElementById('formMessages');
    const serviceSelect = document.getElementById('service');
    const othersServiceContainer = document.getElementById('othersServiceContainer');
    const othersServiceInput = document.getElementById('others_service');

    // Show/hide others service input based on selection
    function toggleOthersService() {
        if (serviceSelect.value === 'others') {
            othersServiceContainer.style.display = 'block';
            othersServiceInput.setAttribute('required', 'required');
        } else {
            othersServiceContainer.style.display = 'none';
            othersServiceInput.removeAttribute('required');
            othersServiceInput.value = '';
            // Clear error for others_service when hidden
            const errorElement = document.getElementById('others_service_error');
            const labelElement = document.getElementById('others_service_label');
            if (errorElement) {
                errorElement.style.display = 'none';
                errorElement.innerHTML = '';
            }
            othersServiceInput.style.borderColor = '#d1d5db';
            othersServiceInput.style.borderWidth = '1px';
            othersServiceInput.style.boxShadow = 'none';
            if (labelElement) {
                labelElement.style.color = '#374151';
            }
        }
    }

    // Initialize on page load
    toggleOthersService();

    // Listen for service select changes
    serviceSelect.addEventListener('change', function() {
        toggleOthersService();
        // Clear service error when user selects a service
            if (serviceSelect.value && serviceSelect.value !== '') {
            const errorElement = document.getElementById('service_error');
            const labelElement = document.getElementById('service_label');
            
            if (errorElement) {
                errorElement.style.display = 'none';
                errorElement.innerHTML = '';
            }
            
            if (serviceSelect) {
                serviceSelect.style.borderColor = '#d1d5db';
                serviceSelect.style.borderWidth = '1px';
                serviceSelect.style.boxShadow = 'none';
            }
            
            if (labelElement) {
                labelElement.style.color = '#374151';
            }
        }
    });

    // Clear previous validation errors
    function clearErrors() {
        const errorElements = document.querySelectorAll('[id$="_error"]');
        errorElements.forEach(el => {
            el.style.display = 'none';
            el.innerHTML = '';
        });
        
        const inputs = document.querySelectorAll('#name, #email, #service, #others_service, #comment, #attachment');
        inputs.forEach(input => {
            input.style.borderColor = '#d1d5db';
            input.style.borderWidth = '1px';
            input.style.boxShadow = 'none';
        });
        
        // Reset label colors
        const labels = document.querySelectorAll('.contact-floating-label');
        labels.forEach(label => {
            const labelText = label.innerHTML;
            if (labelText.includes('(optional)')) {
                label.style.color = '#6b7280';
            } else {
                label.style.color = '#374151';
            }
        });
    }

    // Show error message for a specific field
    function showError(fieldName, message) {
        const errorElement = document.getElementById(fieldName + '_error');
        const inputElement = document.getElementById(fieldName);
        const labelElement = document.getElementById(fieldName + '_label');
        
        if (errorElement) {
            errorElement.innerHTML = `
                <div style="display: flex; align-items: center;">
                    <svg style="width: 1rem; height: 1rem; color: #ef4444; margin-right: 0.5rem; flex-shrink: 0;" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                    </svg>
                    <span style="color: #ef4444; font-size: 0.875rem;">${message}</span>
                </div>
            `;
            errorElement.style.display = 'block';
        }
        
        if (inputElement) {
            // Apply red border to the input/select element
            inputElement.style.borderColor = '#ef4444';
            inputElement.style.borderWidth = '1px';
            inputElement.style.boxShadow = 'none';
        }
        
        // Update label color to red
        if (labelElement) {
            labelElement.style.color = '#ef4444';
        }
    }

    // Show success/error message
    function showMessage(message, type) {
        formMessages.innerHTML = `
            <div class="alert alert-${type} alert-dismissible fade show" role="alert">
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;
        
        // Auto hide after 5 seconds for success
        if (type === 'success') {
            setTimeout(() => {
                const alert = formMessages.querySelector('.alert');
                if (alert) {
                    alert.remove();
                }
            }, 5000);
        }
    }

    // Form submission handler
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Clear previous errors
        clearErrors();
        formMessages.innerHTML = '';
        
        // Validate service field before submission
        if (!serviceSelect.value || serviceSelect.value === '' || serviceSelect.value === null) {
            showError('service', 'Please select a service.');
            submitBtn.disabled = false;
            submitText.style.display = 'inline-block';
            submitLoader.style.display = 'none';
            return;
        }
        
        // Disable submit button and show loading
        submitBtn.disabled = true;
        submitText.style.display = 'none';
        submitLoader.style.display = 'inline-block';
        
        // Create FormData object
        const formData = new FormData(form);
        
        // AJAX request
        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
            }
        })
        .then(response => {
            // Check if response is JSON
            const contentType = response.headers.get('content-type');
            if (contentType && contentType.includes('application/json')) {
                return response.json().catch(() => {
                    throw new Error('Invalid JSON response');
                });
            }
            // If not JSON, throw error
            throw new Error('Unexpected response format');
        })
        .then(data => {
            // Re-enable submit button and restore text
            submitBtn.disabled = false;
            submitText.style.display = 'inline-block';
            submitLoader.style.display = 'none';
            
            if (data.success) {
                // Show success message
                showMessage(data.message || 'Thank you for contacting us! We have received your message and will get back to you soon.', 'success');
                
                // Reset form
                form.reset();
                // Reset others service container visibility
                toggleOthersService();
            } else if (data.errors) {
                // Show validation errors
                Object.keys(data.errors).forEach(field => {
                    const errorMessages = Array.isArray(data.errors[field]) 
                        ? data.errors[field].join(', ') 
                        : data.errors[field];
                    showError(field, errorMessages);
                    
                    // If others_service has error, show the container
                    if (field === 'others_service') {
                        othersServiceContainer.style.display = 'block';
                    }
                });
                
                // Show general error message if any
                if (data.message) {
                    showMessage(data.message, 'danger');
                }
            } else if (data.message) {
                showMessage(data.message, 'danger');
            }
        })
        .catch(error => {
            // Re-enable submit button and restore text after error
            submitBtn.disabled = false;
            submitText.style.display = 'inline-block';
            submitLoader.style.display = 'none';
            
            console.error('Error:', error);
            showMessage('An error occurred. Please try again later.', 'danger');
        });
    });
});
</script>
@endpush


