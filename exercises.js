function loadXml() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() { displayExerciseLibrary(this); }
    xhttp.open("GET", "./exercises.xml"); 
    xhttp.send();
  }
  
  function displayExerciseLibrary(xml) {
    const xmlDoc = xml.responseXML;
    const exercises = xmlDoc.getElementsByTagName("item");
    let exerciseList = "<ul>";
    for (let i = 0; i < exercises.length; i++) {
      const category = exercises[i].getElementsByTagName("category")[0].textContent;
      const title = exercises[i].getElementsByTagName("title")[0].textContent;
      const description = exercises[i].getElementsByTagName("description")[0].textContent;
      const link = exercises[i].getElementsByTagName("link")[0].textContent;
      exerciseList += "<li><strong>Category:</strong> " + category + "<br><a href='" + link + "' target='_blank'>" + title + "</a>: " + description + "</li>";

    }
    exerciseList += "</ul>";
    document.getElementById("exercise-library").innerHTML = exerciseList;
  }

  
  // Global variables for pagination
const itemsPerPage = 5; 
let currentPage = 1; 
let xmlDoc; 

// Function to load XML data
function loadXml() {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            xmlDoc = this.responseXML;
            displayExerciseLibrary(currentPage); 
        }
    };
    xhttp.open("GET", "./exercises.xml");
    xhttp.send();
}

// Function to display exercises for a specific page
function displayExerciseLibrary(page) {
    if (!xmlDoc) return; 
    
    const exercises = xmlDoc.getElementsByTagName("item");
    const startIndex = (page - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;
    let exerciseList = "<ul>";
    for (let i = startIndex; i < endIndex && i < exercises.length; i++) {
        const category = exercises[i].getElementsByTagName("category")[0].textContent;
        const title = exercises[i].getElementsByTagName("title")[0].textContent;
        const description = exercises[i].getElementsByTagName("description")[0].textContent;
        const link = exercises[i].getElementsByTagName("link")[0].textContent;
        exerciseList += "<li><strong>Category:</strong> " + category + "<br><a href='" + link + "' target='_blank'>" + title + "</a>: " + description + "</li>";
    }
    exerciseList += "</ul>";
    document.getElementById("exercise-library").innerHTML = exerciseList;

    // Enable/disable Previous and Next buttons based on current page
    const prevButton = document.querySelector("#pagination button:first-child");
    const nextButton = document.querySelector("#pagination button:last-child");
    prevButton.disabled = page === 1;
    nextButton.disabled = endIndex >= exercises.length;
}

// Function to handle pagination navigation
function goToPage(pageNumber) {
    currentPage = pageNumber;
    displayExerciseLibrary(currentPage);
}

// Call loadXml function when the page loads
window.onload = function() {
    loadXml();
};
