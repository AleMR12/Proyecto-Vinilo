function updateFileName(input) {
    var fileName = input.files[0].name;
    var label = input.nextElementSibling.querySelector('span');
    label.textContent = fileName;
    input.nextElementSibling.classList.add('file-selected');
}