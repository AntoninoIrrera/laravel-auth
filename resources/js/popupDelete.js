

const deleteButtonsForm = document.querySelectorAll('form.d-inline-block')



deleteButtonsForm.forEach((buttonForm) => {

    buttonForm.addEventListener('submit', function(event){

        event.preventDefault()

        const popup = window.confirm("sei sicuro di eliminare questo elemento?")


        if(popup) buttonForm.submit()

    })


})