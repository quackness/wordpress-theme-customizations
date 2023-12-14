
async function drawCard() {
  const response = await fetch('https://deckofcardsapi.com/api/deck/new/shuffle/?deck_count=1');
  const data = await response.json();
  const deckId = data.deck_id;

  const drawResponse = await fetch(`https://deckofcardsapi.com/api/deck/${deckId}/draw/?count=1`);
  const cardData = await drawResponse.json();
  const card = cardData.cards[0];

  const fortune = getFortune();
  document.querySelector('#fortune').classList.add('fortune-box');
  document.querySelector('#fortune').innerHTML = `
    <div class="test">
      <div class="top">
        <b>Card Drawn:</b> ${card.value} of ${card.suit} <br>
        <b>Fortune:</b> ${fortune}<br>
      </div>
      <div class="fs-6 bottom">
      ${message}
      </div>
    </div>
    <div id="image-container"><img src=${card.images.png}></img></div>`;
}

const message = 'Built with the Deck of Cards API, "DevCards" is a simple app for web developers, offering a modern twist on card reading.'
//the strings content generated with chat gtp
function getFortune() {
  const fortunes = [
    "You've drawn the JavaScript Card! Your logic is strong, and your functions are robust. Expect a surge in front-end opportunities.",
    "The CSS Card is in your favor! Your designs are sleek and responsive. Embrace creativity in your projects, and success will follow.",
    "Behold the Database Card! Your data modeling skills are impeccable. Prepare for a wave of back-end challenges and achievements.",
    "The API Card is yours! Your communication skills are exceptional. Open new doors by building seamless connections between systems.",
    "You've drawn the Git Card! Your version control mastery is recognized. Navigate through branches wisely, and your codebase will flourish.",
    "The Responsive Design Card is in your hand! Your user interfaces adapt flawlessly. Embrace diversity in devices, and users will applaud.",
    "The Testing Card is revealed! Your commitment to quality is unmatched. Write tests diligently, and watch your codebase thrive.",
    "The DevOps Card is yours to play! Your deployment strategies are solid. Streamline processes, and your applications will run like clockwork.",
    "You've drawn the Framework Card! A powerful tool is at your disposal. Use it wisely to build scalable and efficient applications.",
    "The Debugging Card is in your favor! Your troubleshooting skills are legendary. Quickly resolve issues, and your projects will stay on track.",
    "Behold the Security Card! Your code is a fortress. Strengthen your defenses, and your applications will stand resilient against threats.",
    "The Continuous Integration Card is revealed! Your commitment to automation is commendable. Integrate regularly, and success will follow suit.",
    "You've drawn the Code Review Card! Your collaboration skills are key. Offer and receive constructive feedback to foster a thriving team environment.",
    "The Documentation Card is in your hand! Your projects are well-documented. Continue this practice, and your knowledge will be a valuable asset.",
    "The Full Stack Mastery Card is revealed! Your skills span the entire development spectrum. Embrace challenges, and your expertise will shine.",
    "You've drawn the Agile Card! Your project management is nimble and efficient. Navigate sprints with precision, and success is inevitable."
  ];

  const randomIndex = Math.floor(Math.random() * fortunes.length);
  return fortunes[randomIndex];
}



document.addEventListener('DOMContentLoaded', function () {
  document.querySelector("#draw-a-card").onclick = function () {
    drawCard();
  }
}, false);