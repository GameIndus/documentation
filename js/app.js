/*
*	Sidebar
*/
function startSidebarMenu(){
	setTimeout(function(){
		var subMenus = document.getElementsByClassName("sub-menu");
		for(var i = 0; i < subMenus.length; i++){
			var sb = subMenus[i];
			if(sb.offsetParent !== null){
				var childs = sb.querySelectorAll("a").length;
				sb.style.height = (childs * 40) + "px";
			}
		}
	}, 200);
}

window.onload = function(){
	startSidebarMenu();
}

hljs.initHighlightingOnLoad();