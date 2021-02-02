'use strict';

const buyButton = document.querySelectorAll('.card__btn');
const modal = document.querySelector('.modal');
const closeButton = document.querySelector('.modal__close');
const form = document.querySelector('.form');

buyButton.forEach(el => {
    el.addEventListener('click', (e) => {
        let nameProduct = e.currentTarget.closest('.card').querySelector('.card__link').textContent;
        document.querySelector('.form input[name="product"]').value = nameProduct;
        modal.classList.add('modal__open');
    });
});

closeButton.addEventListener('click', () => {
    modal.classList.remove('modal__open');
});

form.addEventListener('submit', (e) => {
    e.preventDefault();
    let formData = new FormData(form);
    let name = form.querySelector('[name="name"]').value;
    let phone = form.querySelector('[name="phone"]').value;
    let email = form.querySelector('[name="email"]').value;
    let product = form.querySelector('[name="product"]').value;
    formData.append('Имя', name);
    formData.append('Телефон', phone);
    formData.append('E-mail', email);
    formData.append('Название товара', product);

    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4) {
            if(xhr.status === 200) {
                modal.classList.remove('modal__open');
            }
        }
    }

    xhr.open('POST', 'mail.php', true);
    xhr.send(formData);

    form.reset();
});

