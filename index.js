document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('feedbackForm');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); 

        const nameInput = document.getElementById('nam');
        const emailInput = document.getElementById('email');
        const feedbackInput = document.getElementById('feedback');

        if (nameInput.value.trim() === '' || emailInput.value.trim() === '' || feedbackInput.value.trim() === '') {
            alert('Please fill in all fields');
            return;
        }
        console.log('Submitting feedback...');

        
        form.reset();
    });
});