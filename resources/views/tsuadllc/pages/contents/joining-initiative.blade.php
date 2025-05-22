@include ('tsuadllc.pages.includes.header-navigation')


    <main class="">

        <div class="join form-container">

            <div class="join form-header">
                <h1><i class="fas fa-robot"></i> Join Our Initiative</h1>
                <p>Be part of the global movement for responsible AI innovation</p>
            </div>

            <div class="join progress-container">
                <div class="join progress-bar">
                    <div class="join progress-line" id="progressLine"></div>
                    <div class="join step-indicator active" data-step="1">1</div>
                    <div class="join step-indicator" data-step="2">2</div>
                    <div class="join step-indicator" data-step="3">3</div>
                    <div class="join step-indicator" data-step="4">4</div>
                </div>

                <form id="joinForm" class="join step-content">
                    <div class="join step active" id="step1">
                        <div class="join form-group">
                            <label for="fullName" class="join form-label">
                                <i class="fas fa-user"></i> Full Name
                            </label>
                            <input type="text" class="join form-control" id="fullName" required>
                            <div class="join error-message" id="fullNameError">Please enter your full name</div>
                        </div>
                        <div class="join form-group">
                            <label for="email" class="join form-label">
                                <i class="fas fa-envelope"></i> Email Address
                            </label>
                            <input type="email" class="join form-control" id="email" required>
                            <div class="join error-message" id="emailError">Please enter a valid email address</div>
                        </div>
                        <div class="join form-group">
                            <label for="country" class="join form-label">
                                <i class="fas fa-globe"></i> Country
                            </label>
                            <input type="text" class="join form-control" id="country" required>
                            <div class="join error-message" id="countryError">Please enter your country</div>
                        </div>
                    </div>

                    <div class="join step" id="step2">
                        <div class="join form-group">
                            <label for="interest" class="join form-label">
                                <i class="fas fa-lightbulb"></i> Area of Interest
                            </label>
                            <select class="join form-control form-select" id="interest" required>
                                <option value="" disabled selected>Choose your area of interest...</option>
                                <option value="ethical-ai">Ethical AI Design</option>
                                <option value="transparency">Transparency & Explainability</option>
                                <option value="privacy">Privacy and Data Protection</option>
                                <option value="bias">Bias Mitigation</option>
                                <option value="policy">AI Policy and Legal</option>
                                <option value="human-centered">Human-Centered AI</option>
                            </select>
                            <div class="join error-message" id="interestError">Please select an area of interest</div>
                        </div>
                        <div class="join form-group">
                            <label class="join form-label">
                                <i class="fas fa-users"></i> Joining As
                            </label>
                            <div class="join radio-group">
                                <div class="join radio-item selected" data-value="individual">
                                    <input type="radio" name="type" id="individual" value="individual" checked>
                                    <label for="individual">Individual</label>
                                </div>
                                <div class="join radio-item" data-value="organization">
                                    <input type="radio" name="type" id="organization" value="organization">
                                    <label for="organization">Organization</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="join step" id="step3">
                        <div id="orgFields" style="display:none;">
                            <div class="join form-group">
                                <label for="company" class="join form-label">
                                    <i class="fas fa-building"></i> Company / Organization Name
                                </label>
                                <input type="text" class="join form-control" id="company">
                                <div class="join error-message" id="companyError">Please enter your organization name</div>
                            </div>
                            <div class="join form-group">
                                <label for="position" class="join form-label">
                                    <i class="fas fa-briefcase"></i> Your Role
                                </label>
                                <input type="text" class="join form-control" id="position">
                                <div class="join error-message" id="positionError">Please enter your role</div>
                            </div>
                        </div>
                        <div id="individualFields">
                            <div class="join form-group">
                                <label for="project" class="join form-label">
                                    <i class="fas fa-project-diagram"></i> Project Description
                                </label>
                                <textarea class="join form-control" id="project" rows="6" 
                                    placeholder="Describe your idea or initiative that promotes responsible AI..."></textarea>
                                <div class="join error-message" id="projectError">Please describe your project</div>
                            </div>
                        </div>
                    </div>

                    <div class="join step" id="step4">
                        <div class="join confirmation-step">
                            <div class="join confirmation-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h3>You're All Set!</h3>
                            <p>Click Submit to complete your registration and join the global effort toward ethical and responsible AI innovation.</p>
                        </div>
                    </div>
                </form>

                <div class="join step-navigation">
                    <button type="button" class="join btn btn-secondary" id="prevBtn" disabled>
                        <i class="fas fa-arrow-left"></i> Back
                    </button>
                    <button type="button" class="join btn btn-primary" id="nextBtn">
                        Next <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>

        </div>

    </main>


@include ('tsuadllc.pages.includes.footer')