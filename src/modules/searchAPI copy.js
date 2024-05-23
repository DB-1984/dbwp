function searchAPI() {
  const searchField = document.querySelector("#search-input");
  const resultsContainer = document.querySelector("#results-container");
  let debouncer;
  const doneTypingInterval = 500;

  searchField.addEventListener("keyup", function () {
    // reset typing interval
    clearTimeout(debouncer);

    // the main search process, with a callback for the timeout
    debouncer = setTimeout(async () => {
      // trim whitespace from search contents
      let searchQuery = searchField.value.trim();

      if (searchQuery === "") {
        resultsContainer.innerHTML = "";
        return;
      }

      try {
        // Send an array of fetch requests
        const [postResponse, pageResponse] = await Promise.all([
          fetch("/wp-json/wp/v2/posts?search=" + searchQuery),
          fetch("/wp-json/wp/v2/pages?search=" + searchQuery),
        ]);

        // Receives the response from both fetches as separate arrays
        // Check if the response is OK, and get data if there is any; otherwise, use an empty array
        const postData = postResponse.ok ? await postResponse.json() : [];
        const pageData = pageResponse.ok ? await pageResponse.json() : [];

        // Clear previous results
        resultsContainer.innerHTML = "";

        if (postData.length > 0) {
          const postHtml = postData
            .map(
              (post) =>
                `<div class="result"><a href="${post.link}" class="result-link">${post.title.rendered}</a><span class='badge bg-primary rounded-pill'>Post</span></div>`
            ) // Transform each post into an HTML string
            .join(""); // Concatenate the array of HTML strings into a single string
          resultsContainer.innerHTML += postHtml;
        }

        if (pageData.length > 0) {
          const pageHtml = pageData
            .map(
              (page) =>
                `<div class="result"><a href="${page.link}" class="result-link">${page.title.rendered}</a><span class='badge bg-primary rounded-pill'>Page</span></div>`
            )
            .join("");
          resultsContainer.innerHTML += pageHtml;
        }

        // Check if there are no results for both posts and pages
        if (resultsContainer.innerHTML === "") {
          resultsContainer.innerHTML =
            '<div class="no-results"><p>No results found</p></div>';
        }
      } catch (error) {
        console.error(error);
        resultsContainer.innerHTML =
          '<div class="error"><p>There was an error fetching the results. Please try again later.</p></div>';
      }
    }, doneTypingInterval);
  });
}

export default searchAPI;
