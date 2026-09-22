const positionBox = document.querySelector("#position-box");
const timeBox = document.querySelector("#time-box");

function showGreeting(event) {
  event.currentTarget.style.animation = "box-effect 2.5s infinite";
  event.currentTarget.textContent = "Bonjour";
}

function resetBox(event) {
  event.currentTarget.style.animation = "none";
  event.currentTarget.textContent = "";
}

positionBox.addEventListener("click", (event) => {
  positionBox.textContent = `Position de la souris : X=${event.clientX}, Y=${event.clientY}`;
});

positionBox.addEventListener("mouseover", showGreeting);
positionBox.addEventListener("mouseout", resetBox);

timeBox.addEventListener("click", () => {
  timeBox.textContent = `Heure du clic : ${new Date().toLocaleTimeString()}`;
});

timeBox.addEventListener("mouseover", showGreeting);
timeBox.addEventListener("mouseout", resetBox);
