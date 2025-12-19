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
                            <li><a href='{{ url('/') }}'>Home</a></li>
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

    <section class="contact-form-area ptb-100 bg-light-white position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="ct-left">
                        <span class="cr-subtitle position-relative fw-semibold primary-text-color">Get In Touch</span>
                        <h2 class="mt-4 mb-5">You can connect with us when need help!</h2>
                        <form id="contactForm" class="ct-contact-form" action="{{ route('contact.submit') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            
                            <div id="formMessages"></div>
                            <div class="d-flex align-items-center gap-3">
                                <div class="input-field position-relative width-half">
                                    <label for="name" class="d-block mb-2 text-sm fw-semibold" style="color: #333;">
                                        Your Name <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="name" name="name" placeholder="Enter your name" class="theme-input" value="{{ old('name') }}" required>
                                    <small id="name_error" class="text-danger d-block mt-1" style="display: none;"></small>
                                </div>
                                
                                
                                <div class="input-field position-relative width-half">
                                    <label for="text" class="d-block mb-2 text-sm fw-semibold" style="color: #333;">
                                        Contact Number <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="text" name="text" placeholder="Enter your contcat number" class="theme-input" value="{{ old('phone') }}" required>
                                    <small id="contact_error" class="text-danger d-block mt-1" style="display: none;"></small>
                                </div>
                            </div>
                            
                            
                            <div class="mt-4">
                                    <label for="email" class="d-block mb-2 text-sm fw-semibold" style="color: #333;">
                                        Email Address <span class="text-danger">*</span>
                                    </label>
                                    <input type="email" id="email" name="email" placeholder="Enter your email" class="theme-input" value="{{ old('email') }}" required>
                                    <small id="email_error" class="text-danger d-block mt-1" style="display: none;"></small>
                                </div>
                            
                            
                           
                            <div class="mt-4">
                                <label for="comment" class="d-block mb-2 text-sm fw-semibold" style="color: #333;">
                                    Type Your Message <span class="text-danger">*</span>
                                </label>
                                <textarea id="comment" name="comment" placeholder="Enter your message" class="theme-input" rows="5" required>{{ old('comment') }}</textarea>
                                <small id="comment_error" class="text-danger d-block mt-1" style="display: none;"></small>
                            </div>
                            <div class="mt-4">
                                <label for="attachment" class="d-block mb-2 text-sm text-gray-700">
                                    <i class="fas fa-paperclip me-2 text-primary"></i>Attach File (Optional)
                                </label>
                                <input type="file" name="attachment" id="attachment" class="theme-input">
                                <small class="d-block mt-1 text-muted">All file types allowed. Maximum size: 10MB</small>
                                <small id="attachment_error" class="text-danger d-block mt-1" style="display: none;"></small>
                            </div>
                            <button type="submit" id="submitBtn" class="template-btn primary-btn mt-4">
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
        <div class="google-map">
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
            if (errorElement) {
                errorElement.style.display = 'none';
                errorElement.textContent = '';
            }
            othersServiceInput.style.borderColor = '';
            othersServiceInput.style.borderWidth = '';
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
            const wrapper = serviceSelect.closest('.nice-select') || serviceSelect.parentElement;
            
            if (errorElement) {
                errorElement.style.display = 'none';
                errorElement.textContent = '';
            }
            
            if (serviceSelect) {
                serviceSelect.style.borderColor = '';
                serviceSelect.style.borderWidth = '';
            }
            
            if (wrapper && wrapper.classList.contains('nice-select')) {
                wrapper.style.borderColor = '';
                wrapper.style.borderWidth = '';
            }
        }
    });

    // Clear previous validation errors
    function clearErrors() {
        const errorElements = document.querySelectorAll('[id$="_error"]');
        errorElements.forEach(el => {
            el.style.display = 'none';
            el.textContent = '';
        });
        
        const inputs = document.querySelectorAll('.theme-input, .nice_select');
        inputs.forEach(input => {
            input.style.borderColor = '';
            input.style.borderWidth = '';
        });
        
        // Also clear errors from nice-select wrappers
        const niceSelectWrappers = document.querySelectorAll('.nice-select');
        niceSelectWrappers.forEach(wrapper => {
            wrapper.style.borderColor = '';
            wrapper.style.borderWidth = '';
        });
    }

    // Show error message for a specific field
    function showError(fieldName, message) {
        const errorElement = document.getElementById(fieldName + '_error');
        const inputElement = document.getElementById(fieldName);
        
        if (errorElement) {
            errorElement.textContent = message;
            errorElement.style.display = 'block';
        }
        
        if (inputElement) {
            // Apply red border to the input/select element
            inputElement.style.borderColor = '#dc3545';
            inputElement.style.borderWidth = '2px';
            
            // For select fields, also try to style the wrapper if it exists (for nice_select plugin)
            if (inputElement.tagName === 'SELECT') {
                // Try to find the wrapper element
                const wrapper = inputElement.closest('.nice-select') || inputElement.parentElement;
                if (wrapper && wrapper.classList.contains('nice-select')) {
                    wrapper.style.borderColor = '#dc3545';
                    wrapper.style.borderWidth = '2px';
                }
            }
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


