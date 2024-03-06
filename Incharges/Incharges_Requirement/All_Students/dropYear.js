

    // Get the current year
    const currentYear = new Date().getFullYear();

    // Set the range of years you want to include in the dropdown
    const startYear = currentYear;
    const endYear = currentYear + 5; // You can adjust the range as needed

    // Create options for each year in the range
    for (let year = startYear; year <= endYear; year++) {
        const option = document.createElement("option");
        option.value = year;
        option.text = year;
        document.getElementById("graduationYear").appendChild(option);
    }

