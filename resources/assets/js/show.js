$(document).on('click', '.show', function () {
    this.nextElementSibling.style.display = "block";
    this.classList.remove('show');
    this.classList.add('hideContent');
    this.innerHTML = "Hide Contact Info";
});
$(document).on('click', '.hideContent', function () {
    this.nextElementSibling.style.display = "none";
    this.classList.remove('hideContent');
    this.classList.add('show');
    this.innerHTML = "Show Contact Info";
});