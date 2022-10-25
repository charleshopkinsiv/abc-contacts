


function deleteContact(id)
{

    let modalEl = document.getElementById("deleteModal");
    let columns = this.event.target.closest("tr").querySelectorAll("th");

    modalEl.querySelector("span#first").innerText = columns[0].innerText;
    modalEl.querySelector("span#last").innerText = columns[1].innerText;

    modalEl.querySelector("form > input[name=id]").setAttribute("value", id);

    let modal = new bootstrap.Modal(modalEl);
    modal.show();
}

function saveFormSubmit()
{

    // Validate
    let id = document.querySelector("#edit-form input[name=id]").value;
    let first = document.querySelector("#edit-form input[name=first_name]").value;
    let last = document.querySelector("#edit-form input[name=last_name]").value;
    let middle = document.querySelector("#edit-form input[name=middle_name]").value;
    let email = document.querySelector("#edit-form input[name=email]").value;
    let prefix = document.querySelector("#edit-form select[name=prefix]").value;
    let suffix = document.querySelector("#edit-form select[name=suffix]").value;
    let title = document.querySelector("#edit-form input[name=title]").value;

    if(id == "" || id == 0) {

        let phone = document.querySelector("#edit-form input[name=phone_number]").value;
        if(phone.length > 12
        || phone == "") {
    
            setAlert("Phone number required and must be less than 12 characters with all numbers, ex. 1231231234");
            return;
        }
    }
    

    if(first == "" || last == "") {

        setAlert("First and last name must not be blank!");
        return;
    }

    if(first.length > 50
    ||last.length > 50
    || middle.length > 50
    || title.length > 50) {

        setAlert("Title, first name, last name, and middle name all must be less than 50 characters!");
        return;
    }

    if(email.length > 255) {

        setAlert("Email must be less than 255 characters");
        return;
    }

    document.getElementById("edit-form").submit();
}


function setAlert(message)
{

    let alert = document.getElementById("alert");
    alert.classList.remove("d-none");
    alert.innerText = message;
}
