// Plugin Initialization
var options = {
  light: darkmodepath.templateUrl + '/assets/css/light.css',
  dark: darkmodepath.templateUrl + '/assets/css/dark.css',
}
var DarkMode = new DarkMode(options)

// Remove mode from LocalStorage if button clicked
var ModeRemover = document.getElementById('mode-remover')
ModeRemover.onclick = function () {
  DarkMode.clearSavedMode()
  changeTogglerText()
  getModeRemoverState()
}

// Detects mode on LocalStorage, if `true` – display a button
getModeRemoverState()

function getModeRemoverState() {
  if (DarkMode.isModeSaved()) ModeRemover.classList.remove('hidden')
  else ModeRemover.classList.add('hidden')
}

// Function for `mode-toggler` button
var ModeToggler = document.getElementById('mode-toggler')
changeTogglerText()
ModeToggler.onclick = function () {
  DarkMode.toggleMode()
  changeTogglerText()
}

// Changes `mode-toggler` text on mode changing
function changeTogglerText() {
  getModeRemoverState()
  var currentMode = DarkMode.getMode()
  ModeToggler.textContent =
    currentMode === 'light' ? 'To dark 🌝' : 'To light 🌚'
}
