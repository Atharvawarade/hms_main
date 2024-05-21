async function loadContent() {
  try {
    // Fetch the content of dash_content.html
    const response = await fetch("dash_content.html");

    if (!response.ok) {
      throw new Error("Network response was not ok " + response.statusText);
    }

    // Get the text content of dash_content.html
    const html = await response.text();
    
    // Insert the fetched content into the div with ID 'content'
    document.getElementById("content").innerHTML = html;

    // Execute any scripts present in the fetched content
    const scripts = document.getElementById("content").querySelectorAll("script");
    scripts.forEach(script => {
      const newScript = document.createElement("script");
      newScript.textContent = script.textContent;
      document.body.appendChild(newScript);
    });
  } catch (error) {
    console.error("Failed to fetch content:", error);
  }
}

// Add an event listener to call the loadContent function when the window loads
window.addEventListener("load", loadContent);
