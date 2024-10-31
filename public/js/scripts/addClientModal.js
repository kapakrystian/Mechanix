function openModal() {
    document.getElementById('addClientModal').classList.remove('hidden');
    document.getElementById('modalBackground').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('addClientModal').classList.add('hidden');
    document.getElementById('modalBackground').classList.add('hidden');
}

// Open modal form after clicking "New Client" button.
    document.querySelector('a[href="/clients/create"]').addEventListener('click', function(event) {
    event.preventDefault(); // Prevents the link from working by default
    openModal(); // Calls the modal open function
});

