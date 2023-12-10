console.log("testing");


async function drawCard() {
  const response = await fetch('https://deckofcardsapi.com/api/deck/new/shuffle/?deck_count=1');
  const data = await response.json();
  const deckId = data.deck_id;

  const drawResponse = await fetch(`https://deckofcardsapi.com/api/deck/${deckId}/draw/?count=1`);
  const cardData = await drawResponse.json();
  const card = cardData.cards[0];

  const fortune = getFortune();
  document.querySelector('#fortune').innerHTML = `Card Drawn: ${card.value} of ${card.suit}<br>Fortune: ${fortune}`;
}

function getFortune() {
  const fortunes = [
    "Good fortune is coming your way!",
    "Be cautious, challenges may arise.",
    "Embrace change for positive outcomes.",
  ];

  const randomIndex = Math.floor(Math.random() * fortunes.length);
  return fortunes[randomIndex];
}



document.addEventListener('DOMContentLoaded', function () {
  document.querySelector("#draw-a-card").onclick = function () {
    drawCard();
  }
}, false);