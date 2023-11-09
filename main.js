// console.log(
//   ["admin.php", "user-header.php"].includes(
//     window.location.pathname.split("/").pop()
//   )
// );
if (
  ["admin.php", "user-header.php", "user.php"].includes(
    window.location.pathname.split("/").pop()
  )
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

if (window.location.pathname.split("/").pop() === "sign-up.php") {
  // document.getElementById("phone").addEventListener("input", function (event) {
  //   let inputValue = event.target.value;
  //   event.target.value = inputValue.replace(/[^0-9]/g, "");
  // });

  // document.getElementById("phone").addEventListener("input", function (event) {
  //   let inputValue = event.target.value;
  //   event.target.value = inputValue.replace(/[^0-9\- ]/g, "");
  // });

  // document.getElementById("phone").addEventListener("input", function (event) {
  //   let inputValue = event.target.value;
  //   inputValue = inputValue.replace(/[^\d]/g, ""); // Remove all non-digit characters
  //   if (inputValue.length > 3) {
  //     inputValue = inputValue.substring(0, 4) + " " + inputValue.substring(4);
  //   }
  //   if (inputValue.length > 8) {
  //     inputValue = inputValue.substring(0, 8) + " " + inputValue.substring(8);
  //   }
  //   // if (inputValue.length > 13) {
  //   //   inputValue = inputValue.substring(0, 12) + "-" + inputValue.substring(12);
  //   // }
  //   event.target.value = inputValue;
  // });

  function formatPhoneNumber(event) {
    let inputValue = event.target.value;
    inputValue = inputValue.replace(/[^\d]/g, ""); // Remove all non-digit characters
    if (inputValue.length > 3) {
      inputValue = inputValue.substring(0, 4) + " " + inputValue.substring(4);
    }
    if (inputValue.length > 8) {
      inputValue = inputValue.substring(0, 8) + " " + inputValue.substring(8);
    }
    if (inputValue.length > 13) {
      inputValue = inputValue.substring(0, 12) + "-" + inputValue.substring(12);
    }
    event.target.value = inputValue;
  }

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
}
