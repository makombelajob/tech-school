export function burger() {
	const open = document.querySelector(".open");
	
	const burger = document.querySelector("#burger");
	burger.addEventListener("click", function() {
		open.style.display = "block";
	});
	
	const closeBtn = document.querySelector("#close");
	closeBtn.addEventListener("click", function(){
		open.style.display = "none";
	});
	
	const body = document.body;
	body.addEventListener("click", function (e){
		if(!closeBtn.contains(e.target) && !burger.contains(e.target) && !open.contains(e.target)){
			open.style.display = "none";
		}
	});
}