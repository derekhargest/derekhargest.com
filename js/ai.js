const chatbotContainer = document.getElementById("chatbot-container");
const dj_button = document.getElementById("dj_button");
const pirate_button = document.getElementById("pirate_button");
let isFirstLoad = true;

const typeText = async (text, container, delay) => {
  for (let i = 0; i < text.length; i++) {
    container.innerHTML += text.charAt(i);
    await new Promise((resolve) => setTimeout(resolve, delay));
  }
};

const setAiButtonLinksState = (enabled) => {
  const aiButtonLinks = document.querySelectorAll(".ai-button-link");

  aiButtonLinks.forEach((link) => {
    link.style.pointerEvents = enabled ? "auto" : "none";
    link.style.opacity = enabled ? "1" : "0.5";
  });
};

const toggleGlow = (activeButton, inactiveButton) => {
  activeButton.classList.add("button-glow");
  inactiveButton.classList.remove("button-glow");
};

const fetchChatbotResponse = async (message) => {
  try {
    setAiButtonLinksState(false);

    const response = await fetch("https://evening-falls-20183.herokuapp.com/", {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify({
        messages: [message]
      })
    });

    const data = await response.json();
    const text = data.completion.content;
    const typingDelay = 20; // in milliseconds

    // Removed isFirstLoad check
    await typeText(text, chatbotContainer, typingDelay);

    setAiButtonLinksState(true);
  } catch (error) {
    console.error("Error fetching chatbot response:", error);
    setAiButtonLinksState(true);
  }
};



// Get initial chatbot response on page load
// fetchChatbotResponse({
//   role: "user",
//   content:
//     "Create a short intro sentence to intro my website on the home page. Encapsulate all that I have to offer in this one intro. Make it very short. No longer than 2 sentences. Speak in first person."
// });

// Add event listener to button to get new chatbot response
// Add event listener to button to get new chatbot response
pirate_button.addEventListener("click", (e) => {
	e.preventDefault();
	const newMessage = {
	  role: "user",
	  content:
		"Create a short intro sentence to intro my website on the home page. no longer than a sentence, speak in first person Speak like a pirate."
	};
	// Clear chatbot-container
	chatbotContainer.innerHTML = "";
	fetchChatbotResponse(newMessage);
	// Toggle glow effect
	toggleGlow(pirate_button, dj_button);
  });
  
  // Add event listener to button to get new chatbot response
  dj_button.addEventListener("click", (e) => {
	e.preventDefault();
	const newMessage = {
	  role: "user",
	  content:
		"Create a short intro sentence to intro my website on the home page. no longer than a sentence, speak in third person, talk about derek. speak like a radio dj from a 1990s radio morning zoo type shock jock. Respond with fake sound effects and shocking language."
	};
	// Clear chatbot-container
	chatbotContainer.innerHTML = "";
	fetchChatbotResponse(newMessage);
	// Toggle glow effect
	toggleGlow(dj_button, pirate_button);
  });
  