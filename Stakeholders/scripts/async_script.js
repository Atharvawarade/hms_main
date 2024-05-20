async function loadContent() {
    try {
      // Fetch the content of test.html
      const response = await fetch("dash_content.html");

      if (!response.ok) {
        throw new Error(
          "Network response was not ok " + response.statusText
        );
      }
      // Get the text content of test.html
      const html = await response.text();
      // Insert the fetched content into the div with ID 'content'
      document.getElementById("content").innerHTML = html;
    } catch (error) {
      console.error("Failed to fetch content:", error);
    }
  }

  // Add an event listener to call the changeContent function when the page loads
  window.addEventListener("load", loadContent);

  