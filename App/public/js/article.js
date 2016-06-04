

function init(){
	getRightNav();
}


function getRightNav(){
	var _nav = document.getElementById('article-main').getElementsByTagName('h1');
	
	var _li = "";
	for( var i = 0; i < _nav.length; i++){


		var _id = "h1-"+i;
		var _text = _nav[i].innerText;

		_nav[i].id = _id;
		_li = _li + "<li><a href=#"+_id+">"+_text+"</a></li>"
	}

	document.getElementById('right-nav').innerHTML = _li;
}

window.onload = init();