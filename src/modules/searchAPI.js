function searchAPI() {
  var searchField = document.querySelector("#search-input");
  var resultsContainer = document.querySelector("#results-container");
  var typingTimer;
  var doneTypingInterval = 500;

  searchField.focus();

  searchField.addEventListener("keyup", function () {
    clearTimeout(typingTimer);
    typingTimer = setTimeout(function () {
      var searchQuery = searchField.value.trim();

      if (searchQuery === "") {
        resultsContainer.innerHTML = "";
        return;
      }

      // Initialise contents
      resultsContainer.innerHTML = "";

      Promise.all([
        // Send an array of fetch requests
        fetch("/wp-json/wp/v2/posts?search=" + searchQuery),
        fetch("/wp-json/wp/v2/pages?search=" + searchQuery),
      ])
        .then(async ([postResponse, pageResponse]) => {
          // Receives the response from both fetches as separate arrays
          // Check if the response is OK, and get data if there is any; otherwise, use an empty array
          // Preface with async to run simultaneously
          const postData = postResponse.ok ? await postResponse.json() : [];
          const pageData = pageResponse.ok ? await pageResponse.json() : [];

          if (postData.length > 0) {
            const html = postData
              .map(
                (post) =>
                  '<div class="result"><a href="' +
                  post.link +
                  '" class="result-link">' +
                  post.title.rendered +
                  "</a><span class='badge bg-primary rounded-pill'>Post</span></div>"
              ) // Transform each post into an HTML string
              .join(""); // Concatenate the array of HTML strings into a single string
            resultsContainer.innerHTML += html;
          }

          if (pageData.length > 0) {
            const html = pageData
              .map(
                (page) =>
                  '<div class="result"><a href="' +
                  page.link +
                  '" class="result-link">' +
                  page.title.rendered +
                  "</a><span class='badge bg-primary rounded-pill'>Page</span></div>"
              )
              .join("");
            resultsContainer.innerHTML += html;
          }

          // Check if there are no results for both posts and pages
          if (resultsContainer.innerHTML === "") {
            resultsContainer.innerHTML =
              '<div class="no-results"><p>No results found</p></div>';
          }
        })
        .catch((error) => {
          console.error(error);
        });
    }, doneTypingInterval);
  });
}

export default searchAPI;
