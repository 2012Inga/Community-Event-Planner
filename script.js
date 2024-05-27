// script.js
document.addEventListener('DOMContentLoaded', () => {
    const eventForm = document.getElementById('event-form');
    const eventList = document.getElementById('event-list');
    const loginWarning = document.getElementById('login-warning');
    let isLoggedIn = false; // Simulate user login status

    eventForm.addEventListener('submit', (e) => {
        e.preventDefault();

        if (!isLoggedIn) {
            loginWarning.classList.remove('hidden');
            return;
        }

        const eventName = document.getElementById('event-name').value;
        const eventDate = document.getElementById('event-date').value;
        const eventLocation = document.getElementById('event-location').value;

        const li = document.createElement('li');
        li.innerHTML = `
            ${eventName} - ${eventDate} - ${eventLocation}
            <button class="delete-btn">Delete</button>
        `;

        eventList.appendChild(li);

        li.querySelector('.delete-btn').addEventListener('click', () => {
            eventList.removeChild(li);
        });

        eventForm.reset();
    });

    // Example function to simulate user login (for demo purposes)
    function simulateLogin() {
        isLoggedIn = true;
        loginWarning.classList.add('hidden');
    }

    // Simulate user login after 3 seconds (for demo purposes)
    setTimeout(simulateLogin, 3000);
});
