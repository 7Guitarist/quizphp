if (
  [
    "admin.php",
    "user-header.php",
    "user.php",
    "playground.php",
    "add-quiz.php",
  ].includes(window.location.pathname.split("/").pop())
) {
  // Profile Dropdown
  function toggleDropdown() {
    var dropdown = document.getElementById("dropdown");
    dropdown.classList.toggle("show");
  }

  // Close the dropdown if the user clicks outside of it
  window.onclick = function (event) {
    if (!event.target.matches(".profile-images")) {
      var dropdown = document.getElementById("dropdown");
      if (dropdown.classList.contains("show")) {
        dropdown.classList.remove("show");
      }
    }
  };
}

// This
// if (window.location.pathname.split("/").pop() === "sign-up.php")
console.log(window.location.pathname.split("/").pop() === "sign-up.php"); //FIXME:
if (
  ["admin.php", "sign-up.php"].includes(
    window.location.pathname.split("/").pop()
  )
) {
  function formatPhoneNumber(event) {
    let inputValue = event.target.value;
    inputValue = inputValue.replace(/[^\d]/g, ""); // Remove all non-digit characters
    if (inputValue.length > 3) {
      inputValue = inputValue.substring(0, 4) + " " + inputValue.substring(4);
    }
    if (inputValue.length > 8) {
      inputValue = inputValue.substring(0, 8) + " " + inputValue.substring(8);
    }
    event.target.value = inputValue;
  }

  document
    .getElementById("signup")
    .addEventListener("submit", function (event) {
      // Get the phone input element
      const phoneInput = document.getElementById("phone");

      // Remove spaces and check the length
      const phoneValue = phoneInput.value.replace(/\s/g, "");

      // Check if the phone number has exactly 11 digits
      if (phoneValue.length !== 11) {
        // alert("Please enter a valid 11-digit phone number.");
        let userErr = document.getElementById("phone-err");
        userErr.classList.add("show");
        event.preventDefault(); // Prevent form submission
      }
    });

  function checkPassword(event) {
    var passwordInput = document.getElementById("password");
    var passwordError = document.getElementById("pass-err");

    if (passwordInput.value.length < 8) {
      passwordError.classList.add("show");
      event.preventDefault();
    } else {
      passwordError.classList.remove("show");
    }
  }

  document.getElementById("password").addEventListener("blur", checkPassword);

  document
    .getElementById("signup")
    .addEventListener("submit", function (event) {
      checkPassword(event);
    });

  function formatName(event) {
    let inputValue = event.target.value;
    inputValue = inputValue.replace(/[^a-zA-Z\s.\u00F1\u00D1-]/g, "");
    event.target.value = inputValue;
  }
}

// Log In
if (window.location.pathname.split("/").pop() === "log-in.php") {
  function enableLoginButton() {
    const passwordInput = document.getElementById("password");
    const loginButton = document.getElementById("loginButton");

    if (passwordInput.value.length >= 8) {
      loginButton.removeAttribute("disabled");
    } else {
      loginButton.setAttribute("disabled", "disabled");
    }
  }
}

// Edit Profile Validation
if (
  ["edit-profile.php", "sample.php"].includes(
    window.location.pathname.split("/").pop()
  )
) {
  function formatPhoneNumber(event) {
    let inputValue = event.target.value;
    inputValue = inputValue.replace(/[^\d]/g, ""); // Remove all non-digit characters
    if (inputValue.length > 3) {
      inputValue = inputValue.substring(0, 4) + " " + inputValue.substring(4);
    }
    if (inputValue.length > 8) {
      inputValue = inputValue.substring(0, 8) + " " + inputValue.substring(8);
    }
    event.target.value = inputValue;
  }

  document
    .getElementById("signup")
    .addEventListener("submit", function (event) {
      // Get the phone input element
      const phoneInput = document.getElementById("phone");

      // Remove spaces and check the length
      const phoneValue = phoneInput.value.replace(/\s/g, "");

      // Check if the phone number has exactly 11 digits
      if (phoneValue.length !== 11) {
        // alert("Please enter a valid 11-digit phone number.");
        let userErr = document.getElementById("phone-err");
        userErr.classList.add("show");
        event.preventDefault(); // Prevent form submission
      }
    });

  function formatName(event) {
    let inputValue = event.target.value;

    inputValue = inputValue.replace(/[^a-zA-Z\s.\u00F1\u00D1-]/g, "");

    event.target.value = inputValue;
  }
}
