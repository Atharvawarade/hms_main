
    document.addEventListener("DOMContentLoaded", function () {
      // Function to check if all required fields in the current step are filled
      const checkFields = () => {
        const currentStep = document.querySelector(".form-step:not(.d-none)");
        const requiredInputs = currentStep.querySelectorAll(
          "input[required], select[required], textarea[required]"
        );
        let allFilled = true;

        requiredInputs.forEach((input) => {
          if (!input.value.trim()) {
            allFilled = false;
            input.classList.add("missing-field"); // Add class to highlight missing field
          } else {
            input.classList.remove("missing-field"); // Remove class if field is filled
          }
        });

        return allFilled;
      };

      // Function to enable or disable the Next button based on field completion
      const toggleNextButton = () => {
        const nextButton = document.querySelector(
          ".btn-navigate-form-step[step_number]"
        );
        if (checkFields()) {
          nextButton.removeAttribute("disabled");
        } else {
          nextButton.setAttribute("disabled", "true");
        }
      };

      // Initial toggle of the Next button
      toggleNextButton();

      // Add event listeners to required input fields to toggle Next button
      document
        .querySelectorAll(
          ".form-step input[required], .form-step select[required], .form-step textarea[required]"
        )
        .forEach((input) => {
          input.addEventListener("input", toggleNextButton);
        });

      // Add event listener to the prn input field
      const prnInput = document.getElementById("prn");
      prnInput.addEventListener("input", function () {
        const prnValue = this.value.trim();
        if (prnValue.length === 10) {
          // Ensure prnValue has more than 9 digits
          fetchDataFromServer(prnValue);
        } else {
          // Clear all fields if prnValue length is less than 10
          clearAllFields();
        }
      });
    });

    function fetchDataFromServer(prn) {
      $.ajax({
        url: "fetch_data.php",
        type: "GET",
        data: { prn: prn },
        dataType: "json",
        success: function (response) {
          if (response.hasOwnProperty("error")) {
            alert(response.error);
          } else {
            $("#fullname").val(response.fullname);
            $("#email").val(response.email);
            
            // $("#DOB").val(response.DOB);
            // $("#gender").val(response.gender);
            $("#phone").val(response.phone);
            // $("#address1").val(response.address1);
            // $("#address2").val(response.address2);
            // $("#city").val(response.city);
            // $("#state").val(response.state);
            // $("#Pincode").val(response.Pincode);
            // $("#fathermobile").val(response.fathermobile);
            // $("#mothermobile").val(response.mothermobile);
            // $("#gaurdianmobile").val(response.gaurdianmobile);
            // $("#BloodGroup").val(response.BloodGroup);
            $("#Branch").val(response.course);
          }
        },
        error: function (xhr, status, error) {
          console.error(xhr.responseText);
        },
      });
    }

    function clearAllFields() {
      // Clear all input fields except "prn"
      document
        .querySelectorAll("input:not(#prn)")
        .forEach((input) => (input.value = ""));
      // Clear all select fields
      document
        .querySelectorAll("select")
        .forEach((select) => (select.selectedIndex = 0));
      // Clear all textarea fields
      document
        .querySelectorAll("textarea")
        .forEach((textarea) => (textarea.value = ""));
    }
  