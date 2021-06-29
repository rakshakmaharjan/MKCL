const form = document.getElementById('form')
const name = document.getElementById('name')
const email = document.getElementById('email')
const message = document.getElementById('message')

const error = document.getElementById('error')

form.addEventListener('submit', (e) =>{
	let errorMessage = []

	if (name.value === '' && email.value === '' && message.value === '') {
		errorMessage.push('Fill All Fields!')
	}

	else if (name.value === '' && email.value === '') {
		errorMessage.push('Name & Email Required!')
	}


	else if (name.value === '' && message.value === '') {
		errorMessage.push('Name & Message Required!')
	}


	else if (email.value === '' && message.value === '') {
		errorMessage.push('Email & Message Required!')
	}

	else if (name.value === '') {
		errorMessage.push('Name is Required!')
	}

	else if (email.value === '') {
		errorMessage.push('Email is Required!')
	}

	else if (message.value === '') {
		errorMessage.push('Message is Required!')
	}

	if(errorMessage.length > 0){
		e.preventDefault()
		error.innerText = errorMessage.join(', ')
	}

	else{
		window.location('record.php');
	}
})
