// Realizar la solicitud a la API y mostrar datos
fetch('https://jsonplaceholder.typicode.com/users')
    .then(response => response.json())
    .then(users => {
        const usersContainer = document.getElementById('users');

        users.forEach(user => {
            // Crear elemento div para cada usuario con clases de Bootstrap
            const userDiv = document.createElement('div');
            userDiv.classList.add('col-md-4', 'mb-4'); // Columna Bootstrap

            // Crear card de Bootstrap
            const card = document.createElement('div');
            card.classList.add('card', 'shadow-sm');

            // Crear cuerpo de la card
            const cardBody = document.createElement('div');
            cardBody.classList.add('card-body');

            // Crear título con el nombre del usuario
            const name = document.createElement('h5');
            name.classList.add('card-title');
            name.textContent = user.name;

            // Crear texto con el email del usuario
            const email = document.createElement('p');
            email.classList.add('card-text');
            email.textContent = `Email: ${user.email}`;

            // Crear texto con el teléfono del usuario
            const phone = document.createElement('p');
            phone.classList.add('card-text');
            phone.textContent = `Phone: ${user.phone}`;

            // Crear texto con el sitio web del usuario
            const website = document.createElement('p');
            website.classList.add('card-text');
            website.textContent = `Website: ${user.website}`;

            // Agregar elementos al cardBody
            cardBody.appendChild(name);
            cardBody.appendChild(email);
            cardBody.appendChild(phone);
            cardBody.appendChild(website);

            // Agregar cardBody a la card
            card.appendChild(cardBody);

            // Agregar card al div del usuario
            userDiv.appendChild(card);

            // Agregar el div del usuario al contenedor principal
            usersContainer.appendChild(userDiv);
        });
    })
    .catch(error => {
        console.error('Error ', error);
    });
