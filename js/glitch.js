'use strict';

/* VARIABLE ===================================== */
/* VARIABLE: CONSTANT -------------------------- */
//  , '• animated •'
var _allTextOption = ['Web Developer', 'Software Developer', 'Application Developer', 'Android Developer' , 'PHP/mySQL', 'Bootstrap 3 Framework', 'JavaScript/jQuery', 'Responsive_Design', 'Codeigniter MVC', 'Android Web-app', 'CSS3 Flexbox', 'jQuery Ajax',  'Kendo UI MVVM'];
var _allRandomCharOption = "qwertyuiopasdfghjklzxcvbnm*&@^+/#~;$`•";
var _allBlackListChar = ["_", "-", "."];
var _animationFPS = 480;
var _animationDuration = 700;

var _targetId = 'js-glitch';
var _CSS = {
	TARGET: 'js-glitch',
	ENABLE: 'glitch'
};
var _DATA = {
	SCRABBLE: 'scrabbleVal'
};

var _node = document.getElementById(_targetId);
var _isAnimationActive = false;
var _allTextOptionSelect = 0;

/* FUNCTION ===================================== */

function raf(fps, callback) {
	_isAnimationActive = true;
	var delay = 3000 / fps; // calc. time per frame
	var time = null; // start time
	var frame = -1; // frame count
	var tref = null; // rAF time reference
	function loop(timestamp) {
		time = time || timestamp; // init start time
		var seg = Math.floor((timestamp - time) / delay); // calc frame no.
		if (seg > frame) {
			// moved to next frame?
			frame = seg; // update
			callback({ // callback function
				time: timestamp,
				frame: frame
			});
		}
		if (_isAnimationActive) {
			tref = window.requestAnimationFrame(loop);
		}
	}
	loop();
}

/* FUNCTION: HELPER ---------------------------- */

function _getRandomLetter() {
	var index = Math.floor(Math.random() * _allRandomCharOption.length);
	return _allRandomCharOption[index];
}

function _setNodeText(node, text) {
	text = Array.isArray(text) ? text.join('') : String(text);
	node.innerText = text;
	node.dataset[_DATA.SCRABBLE] = text;
}

/* FUNCTION: ACTION ---------------------------- */

function _startScrabbleNodeText(node) {
	node.classList.add(_CSS.ENABLE);
	var textDesired = _allTextOption[_allTextOptionSelect];
	var text = node.textContent.trim().split('');
	var index = Math.round(Math.random() * textDesired.length);
	var isInvalidIndex = _allBlackListChar.some(function (char) {
		return Boolean(char === text[index]);
	});
	if (!isInvalidIndex) {
		text[index] = _getRandomLetter();
		_setNodeText(node, text);
	}
}

// TODO: Revert To Original Text
function _stopScrabbleNodeText(node) {
	var textCurrent = node.textContent.trim().split('');
	var textDesired = _allTextOption[_allTextOptionSelect];
	var index = Math.round(Math.random() * textDesired.length);
	if (textCurrent[index] !== textDesired[index]) {
		textCurrent[index] = textDesired[index];
		_setNodeText(node, textCurrent);
	}

	if (textCurrent.join('') === textDesired) {
		_isAnimationActive = false;
		_node.classList.remove(_CSS.ENABLE);
		window.setTimeout(function () {
			_scrabbleNodeText(_node);
		}, 3000);
	}
}

function _scrabbleNodeText(node) {
	_allTextOptionSelect = Math.floor(Math.random() * _allTextOption.length);
	var totalFrame = Math.floor(_animationDuration / 1000 * _animationFPS);
	raf(_animationFPS, function (response) {
		if (response.frame < totalFrame) {
			_startScrabbleNodeText(node);
		} else {
			_stopScrabbleNodeText(node);
		}
	});
}

/* FUNCTION: INIT ---------------------------- */

function _init() {
	window.setTimeout(function () {
		_scrabbleNodeText(_node);
	}, 1000);
}

/* MODULE ======================================= */

_init();