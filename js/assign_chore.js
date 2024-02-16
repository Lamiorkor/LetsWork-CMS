function assignChore() {
    var assignPerson = document.getElementById("assignPerson").value;
    var assignChore = document.getElementById("assignChore").value;
    var dateAssigned = document.getElementById("dateAssigned").value;
    var dateDue = document.getElementById("dateDue").value;

    // Default value
    var choreStatus = "In Progress";

    // Create a new table row for the chore assignment
    var table = document.getElementById("choreAssignmentTable").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.rows.length);
    
    // Add cells to the row
    var cellChoreName = newRow.insertCell(0);
    var cellPersonAssigned = newRow.insertCell(1);
    var cellDateAssigned = newRow.insertCell(2);
    var cellDateDue = newRow.insertCell(3);
    var cellChoreStatus = newRow.insertCell(4);
    var cellActions = newRow.insertCell(5);

    // Fill in the cells
    cellChoreName.innerHTML = assignChore;
    cellPersonAssigned.innerHTML = assignPerson;
    cellDateAssigned.innerHTML = dateAssigned;
    cellDateDue.innerHTML = dateDue;
    cellChoreStatus.innerHTML = choreStatus;
    cellActions.innerHTML = '<a href="#" onclick="editChoreAssignment(this)">Edit</a> | <a href="#" onclick="markComplete(this)">Mark Complete</a> | <a href="#" onclick="markIncomplete(this)">Mark Incomplete</a>';

    // Clear the form fields
    document.getElementById("assignPerson").value = "";
    document.getElementById("assignChore").value = "";
    document.getElementById("dateAssigned").value = "";
    document.getElementById("dateDue").value = "";
}

function editChoreAssignment(row) {
    // Get the chore name from the row
    var choreName = row.parentNode.parentNode.cells[0].innerHTML;

    // Prompt the user for a new person assignment
    var newPerson = prompt("Edit Chore Assignment for " + choreName + "\nEnter the new person's name:");

    // Update the person assigned in the table
    if (newPerson !== null && newPerson.trim() !== "") {
        row.parentNode.parentNode.cells[1].innerHTML = newPerson;
        alert("Chore Assignment for " + choreName + " updated successfully.");
    }
}

function markComplete(row) {
    // Get the chore name from the row
    var choreName = row.parentNode.parentNode.cells[0].innerHTML;

    // Confirm with the user before marking as complete
    if (confirm("Mark Chore '" + choreName + "' as complete?")) {
        // Update the chore status in the table
        row.parentNode.parentNode.cells[4].innerHTML = "Complete";
        alert("Chore '" + choreName + "' marked as complete.");
    }
}

function markIncomplete(row) {
    // Get the chore name from the row
    var choreName = row.parentNode.parentNode.cells[0].innerHTML;

    // Confirm with the user before marking as incomplete
    if (confirm("Mark Chore '" + choreName + "' as incomplete?")) {
        // Update the chore status in the table
        row.parentNode.parentNode.cells[4].innerHTML = "Incomplete";
        alert("Chore '" + choreName + "' marked as incomplete.");
    }
}


