<!DOCTYPE html>
<html>

<?php include "head.php"?>

<body class="sub_page">
  <div class="hero_area">
    <header class="header_section">
      <div class="container-fluid">
        <?php include "nav.php"?>
      </div>
    </header>
    <!-- end header section -->
  </div>


  <!-- who section -->

  <section class="who_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-sm-5">
          <div class="img-box container"> 
          <form id="goalForm" class="mb-4 mt-5">
        <div class="mb-3">
            <label for="goalTitle" class="form-label">Goal Title:</label>
            <input type="text" class="form-control" id="goalTitle" name="goalTitle">
        </div>

        <div class="mb-3">
            <label for="startTime" class="form-label">Start Time:</label>
            <input type="datetime-local" class="form-control" name="startTime" id="startTime">
        </div>

        <div class="mb-3">
            <label for="endTime" class="form-label">End Time:</label>
            <input type="datetime-local" class="form-control" name="endTime" id="endTime">
        </div>
        
        <button type="button" class="btn btn-secondary" onclick="collectGoal()">Set Goal</button>
    </form>
          </div>
        </div>
        <div class="col-sm-7">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                My Goals
              </h2>
            </div>
            <div id="goalOutput" ></div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end who section -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Your JavaScript code goes here...

    // Array to store goal values
    var goalsArray = [];

    // Load goals from local storage
    var storedGoals = localStorage.getItem('goals');
    if (storedGoals) {
        goalsArray = JSON.parse(storedGoals);
        displayGoals();
    }

    function collectGoal() {
        // Get form inputs
        var goalTitle = document.getElementById("goalTitle").value;
        var startTimeInput = document.getElementById("startTime");
        var endTimeInput = document.getElementById("endTime");

        // Retrieve values directly from datetime-local inputs
        var startTime = startTimeInput.value;
        var endTime = endTimeInput.value;

        // Create a goal object
        var goal = {
            title: goalTitle,
            start: startTime,
            end: endTime,
            done: false
        };

        // Add the goal object to the array
        goalsArray.push(goal);

        // Save goals to local storage
        localStorage.setItem('goals', JSON.stringify(goalsArray));

        // Display goals using a loop
        displayGoals();
    }

    function formatDateTime(dateTimeString) {
        var options = {
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            hour: 'numeric',
            minute: 'numeric'
        };

        var formattedDateTime = new Date(dateTimeString).toLocaleString('en-US', options);
        return formattedDateTime;
    }

    function displayGoals() {
        var goalOutputDiv = document.getElementById("goalOutput");
        goalOutputDiv.innerHTML = "<h2></h2>";

        // Loop through the goalsArray and display each goal
        goalOutputDiv.innerHTML += "<table class='table'>";
for (var i = 0; i < goalsArray.length; i++) {
    var formattedStartTime = formatDateTime(goalsArray[i].start);
    var formattedEndTime = formatDateTime(goalsArray[i].end);

    goalOutputDiv.innerHTML += "<tr>" +
        "<td>" +
        "<div class='card mb-2'>" +
        "<div class='card-body'>" +
        "<h5 class='card-title'>Goal Name : " + goalsArray[i].title + "</h5>" +
        "<p class='card-text'><strong>Start Time:</strong> " + formattedStartTime + "</p>" +
        "<p class='card-text'><strong>End Time:</strong> " + formattedEndTime + "</p>" +
        "</div>" +
        "</div>" +
        "</td>" +
        "<td>" +
        "<button type='button' class='btn btn-danger mr-2' onclick='removeGoal(" + i + ")'>Remove Goal</button>";
    if (!goalsArray[i].done) {
        goalOutputDiv.innerHTML += "<button type='button' class='btn btn-success' onclick='markAsDone(" + i + ")'>Mark as Done</button> <hr>";
    } else {
        goalOutputDiv.innerHTML += "<button type='button' class='btn btn-secondary' disabled>Goal Done</button> <hr>";
    }
    goalOutputDiv.innerHTML += "</td>" +
        "</tr>";
}
goalOutputDiv.innerHTML += "</table>";

    }

    function removeGoal(index) {
        // Remove the goal at the specified index
        goalsArray.splice(index, 1);

        // Save goals to local storage
        localStorage.setItem('goals', JSON.stringify(goalsArray));

        // Display goals using a loop
        displayGoals();
    }

    function markAsDone(index) {
        // Mark the goal as done
        goalsArray[index].done = true;

        // Save goals to local storage
        localStorage.setItem('goals', JSON.stringify(goalsArray));

        // Display goals using a loop
        displayGoals();
    }
</script>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- owl carousel script 
    -->
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 0,
      navText: [],
      center: true,
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        1000: {
          items: 3
        }
      }
    });
  </script>
  <!-- end owl carousel script -->

</body>

</html>