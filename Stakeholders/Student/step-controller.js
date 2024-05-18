
const navigateToFormStep = (stepNumber) => {
    document.querySelectorAll(".form-step").forEach((formStepElement) => {
      formStepElement.classList.add("d-none");
    });
    //  यह सभी  step का display none कर देता है

    document
      .querySelectorAll(".form-stepper-list")
      .forEach((formStepHeader) => {
        formStepHeader.classList.add("form-stepper-unfinished");
        formStepHeader.classList.remove(
          "form-stepper-active",
          "form-stepper-completed"
        );
      });
    // यह ऊपर जो stepper बनाए है (1,2,3) नामक उन सब को प्राथमिक रूप मे unfinished घोषित कर देता है

    document.querySelector("#step-" + stepNumber).classList.remove("d-none");
    //  यह currentstep का display none हटा देता है

    const formStepCircle = document.querySelector(
      'li[step="' + stepNumber + '"]'
    );
    // यह सीधी भाषा मे ऊपर बताए हुए stepper है
    formStepCircle.classList.remove(
      "form-stepper-unfinished",
      "form-stepper-completed"
    );
    formStepCircle.classList.add("form-stepper-active");
    //  अब इन तीन line मे अपन ने यह बताया की जो current step है उसको अपन active कर रहे और unfinished & completed class को बंद कर रहे

    for (let index = 0; index < stepNumber; index++) {
      const formStepCircle = document.querySelector(
        'li[step="' + index + '"]'
      );
      //  Check if the element exist. If yes, then proceed.
      if (formStepCircle) {
        formStepCircle.classList.remove(
          "form-stepper-unfinished",
          "form-stepper-active"
        );
        formStepCircle.classList.add("form-stepper-completed");
      }
    }
  };
  
  /**
   * Select all form navigation buttons, and loop through them.
   */
  document
    .querySelectorAll(".btn-navigate-form-step")
    .forEach((formNavigationBtn) => {
   
      formNavigationBtn.addEventListener("click", () => {
        
        const stepNumber = parseInt(
          formNavigationBtn.getAttribute("step_number")
        );
        /**
         * Call the function to navigate to the target form step.
         */
        navigateToFormStep(stepNumber);
      });
    });
