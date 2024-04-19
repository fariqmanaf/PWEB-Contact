const overviewButtons = document.querySelectorAll('button[onclick^="displayContact"]');

overviewButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
        displayContact(index + 1);
    });
});

function displayContact(id) {
    const overviewContents = document.querySelectorAll('.overview-content');
    const buttonActions = document.querySelectorAll('.button-overview');
    overviewContents.forEach(content => content.style.display = 'none');
    buttonActions.forEach(action => action.style.display = 'none');

    const selectedOverview = document.getElementById(`overview-${id}`);
    const selectedButtonAction = document.getElementById(`button-overview-${id}`);
    selectedOverview.style.display = 'flex';
    selectedButtonAction.style.display = 'flex';

    const nothingElement = document.getElementById('nothing');
    nothingElement.style.display = 'none';
}

function showUpdateModal(id) {
    const editButtons = document.querySelector(`#edit-button-${id}`);
    const closeEdit = document.getElementById('close-update');

    editButtons.addEventListener('click', () => {
        showUpdateModal(id);
    });

    const row = document.querySelector(`tr[data-id="${id}"]`);
    const photo = row.getAttribute('data-photo');
    const noHp = row.getAttribute('data-no-hp');
    const owner = row.getAttribute('data-owner');
    const idEdit = row.getAttribute('data-id');

    const modalUpdate = document.getElementById('modal-edit');
    const photoInput = document.getElementById('photo-edit');
    const noHpInput = document.getElementById('no-hp-edit');
    const ownerInput = document.getElementById('owner-edit');
    const idInput = document.getElementById('id-edit');

    photoInput.value = photo;
    noHpInput.value = noHp;
    ownerInput.value = owner;
    idInput.value = idEdit;

    modalUpdate.classList.remove('hidden');

    closeEdit.addEventListener('click', () => {
        modalUpdate.classList.add('hidden');
    });
}