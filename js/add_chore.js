function addChore() {
    // Get chore name from the form
    var choreNameInput = document.getElementById("choreName");
    var choreName = choreNameInput.value.trim();

    // Validate the chore name
    if (!choreName) {
        alert("Please enter a valid chore name.");
        return;
    }

    // Generate a unique chore ID 
    var choreId = Math.floor(Math.random() * 1000) + 1;

    // Create a new table row for the chore
    var table = document.getElementById("choreTable").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.rows.length);
    
    // Add cells to the row
    var cellId = newRow.insertCell(0);
    var cellName = newRow.insertCell(1);
    var cellActions = newRow.insertCell(2);

    // Fill in the cells
    cellId.innerHTML = choreId;
    cellName.innerHTML = choreName;
    cellActions.innerHTML = '<a href="#" onclick="editChore(' + choreId + ')">Edit</a> | <a href="#" onclick="deleteChore(' + choreId + ')">Delete</a>';

    // Clear the input field
    choreNameInput.value = "";
}

function editChore(choreId) {
    // Placeholder for edit functionality 
    alert("Edit Chore with ID: " + choreId);
}

function deleteChore(choreId) {
    // Placeholder for delete functionality
    alert("Delete Chore with ID: " + choreId);
}
