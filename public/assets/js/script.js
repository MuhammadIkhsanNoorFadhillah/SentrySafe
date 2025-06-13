document.addEventListener('DOMContentLoaded', function () {
    const nextButtons = document.querySelectorAll('.next-btn');
    const prevButtons = document.querySelectorAll('.prev-btn');
    const steps = document.querySelectorAll('.form-step');
    const wizardSteps = document.querySelectorAll('.wizard-steps .step');
    let currentStep = 0;

    // Function to update the visible step and wizard step
    function updateStep(stepIndex) {
        steps.forEach((step, index) => {
            step.classList.toggle('active', index === stepIndex);
        });
        wizardSteps.forEach((step, index) => {
            step.classList.toggle('active', index === stepIndex);
        });
    }

    // Next button event listener
    nextButtons.forEach(button => {
        button.addEventListener('click', () => {
            if (currentStep < steps.length - 1) {
                currentStep++;
                updateStep(currentStep);
            }
        });
    });

    // Previous button event listener
    prevButtons.forEach(button => {
        button.addEventListener('click', () => {
            if (currentStep > 0) {
                currentStep--;
                updateStep(currentStep);
            }
        });
    });

    // Initialize the first step as active
    updateStep(currentStep);
});

document.getElementById('form-select').addEventListener('change', function() {
    var selectedForm = this.value;
    var forms = document.querySelectorAll('.wizard-container');

    // Sembunyikan semua formulir terlebih dahulu
    forms.forEach(function(form) {
        form.style.display = 'none';
    });

    // Tampilkan formulir yang dipilih
    if (selectedForm === 'formulir1') {
        document.getElementById('formulir1').style.display = 'block';
    } else if (selectedForm === 'formulir2') {
        document.getElementById('formulir2').style.display = 'block';
    } else if (selectedForm === 'formulir3') {
        document.getElementById('formulir3').style.display = 'block';
    }
});

