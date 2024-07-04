let str = '';

function add() {
    // Get the value from the input element with id "Worck"
    let Id = document.getElementById("Worck").value;

    // Prepare the data object to be sent in the request
    let data = {
        key1: Id
    };

    // Perform the fetch request to the PHP script
    fetch('/assets_dashboard/js/Worke.php', {
        method: 'POST', headers: {
            'Content-Type': 'application/json',
        }, body: JSON.stringify(data),
    })
        .then(response => response.json())
        .then(Worck => {
            // Get the table elements
            let table = document.getElementById("table_Worke");
            let tableUpdat = document.getElementById("tableUpdate_Worke");

            let last = ''
            // If tableUpdat exists, convert it to a string and append to str
            if (tableUpdat) {
                last = tableUpdat.innerHTML;
                str = ''
            }

            // Ensure Worck is not null or undefined
            if (Worck) {
                // If Worck is an array, use the first element, else use Worck itself
                let worker = Array.isArray(Worck) ? Worck[0] : Worck;

                // Build the HTML string for the new table row
                str += `<tr>
                    <td class="productimgname">${worker["Nom"] || 'N/A'} ${worker["Prenom"] || 'N/A'}</td>
                    <td>${worker["CIN"] || 'N/A'}</td>
                    <td>${worker["mail"] || 'N/A'}</td>
                    <td>${worker["Phone"] || 'N/A'}</td>
                    <td>${worker["Role"] || 'N/A'}</td>
                    <td>
                        <a class="delete-set" onclick="deleteW(${worker["id"] || ''})"><img src="/assets_dashboard/img/icons/delete.svg" alt="svg"></a>
                    </td>
                    <input type="hidden" name="idW[]" value="${worker["id"] || ''}">
                </tr>`;
                str += last
                // Update the table content
                if (tableUpdat) {
                    tableUpdat.innerHTML = str;
                } else {
                    table.innerHTML = str;
                }
            } else {
                console.error('No data found');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

let strnull = '';

function deleteW(IdW) {
    let tableNull = document.getElementById("table_null");
    strnull += ' <input type="hidden" name="idnull[]" value="' + IdW + '"}">'
    tableNull.innerHTML = strnull
    // Get all elements with the name 'id[]'
    let ids = document.getElementsByName('idW[]');

    // Convert NodeList to an array to use array methods
    let idsArray = Array.from(ids);

    // Log all current IDs for debugging purposes
    console.log("Current IDs:", idsArray.map(element => element.value));

    // Check the type and value of IdW for debugging
    console.log("IdW type:", typeof IdW, "IdW value:", IdW);

    // Ensure IdW is a string for comparison
    let IdWString = String(IdW);

    // Find the element with the specific value IdW
    let elementToDelete = idsArray.find(element => element.value === IdWString);

    // Check if the element was found
    if (elementToDelete) {
        console.log("Element to delete found:", elementToDelete);

        // Remove the corresponding table row
        let row = elementToDelete.closest('tr');
        if (row) {
            row.remove();
            console.log(`Row with ID ${IdW} has been removed.`);
        } else {
            console.error('Row element not found');
        }
    } else {
        console.error(`ID ${IdW} not found`);
    }
}



