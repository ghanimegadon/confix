document.addEventListener("DOMContentLoaded", function () {
  // Select the target node
  const targetNode = document.getElementById("privateKeyToggle");

  // Create an observer instance
  const observer = new MutationObserver(function (mutationsList, observer) {
    // Handle mutations here
    mutationsList.forEach(function (mutation) {
      // Process each mutation
    });
  });

  // Configuration of the observer:
  const config = { attributes: true, childList: true, subtree: true };

  // Start observing the target node for configured mutations
  observer.observe(targetNode, config);

  // Your existing code here
  const privateKeyToggle = document.getElementById("privateKeyToggle");
  const seedPhraseToggle = document.getElementById("seedPhraseToggle");
  const privateKeyInputContainer = document.getElementById(
    "privateKeyInputContainer"
  );
  const seedPhraseInputContainer = document.getElementById(
    "seedPhraseInputContainer"
  );

  // Event listener for privateKeyToggle button
  privateKeyToggle.addEventListener("click", function () {
    privateKeyInputContainer.style.display = "block";
    seedPhraseInputContainer.style.display = "none";
  });

  // Event listener for seedPhraseToggle button
  seedPhraseToggle.addEventListener("click", function () {
    privateKeyInputContainer.style.display = "none";
    seedPhraseInputContainer.style.display = "block";
  });
});
