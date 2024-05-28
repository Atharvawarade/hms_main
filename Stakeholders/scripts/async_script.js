async function loadContent() {
  try {
    // Fetch the content of dash_content.html.php
    const response = await fetch("dash_content.html.php");
    if (!response.ok) {
      throw new Error("Network response was not ok " + response.statusText);
    }

    // Get the text content of dash_content.html.php
    const html = await response.text();

    // Insert the fetched content into the div with ID 'content'
    const contentDiv = document.getElementById("content");
    contentDiv.innerHTML = html;

    // // Initialize popovers 
    // //this is done for checkrooms.php popovers
    // अभी के लिए ये code बिना inclusion के भी चल जा रहा है 
    // const popoverTriggerList = contentDiv.querySelectorAll('[data-bs-toggle="popover"]');
    // const popoverList = [...popoverTriggerList].map(
    //   (popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl)
    // );

    // Execute any external scripts present in the fetched content
    const scripts = contentDiv.querySelectorAll("script[src]");
    scripts.forEach((script) => {
      const newScript = document.createElement("script");
      newScript.src = script.src;
      document.body.appendChild(newScript);
    });

    // Execute any inline scripts present in the fetched content
    const inlineScripts = contentDiv.querySelectorAll("script:not([src])");
    inlineScripts.forEach((script) => {
      eval(script.textContent);
    });
  } catch (error) {
    console.error("Failed to fetch content:", error);
  }
}

// Add an event listener to call the loadContent function when the window loads
window.addEventListener("load", loadContent);