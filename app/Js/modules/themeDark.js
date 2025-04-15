export function themeDark(){
	let currentTheme = localStorage.theme ?? "light";
	
	const themeSwitch = document.querySelector("#theme-switch");
	
	applyTheme();
	
	
	themeSwitch.addEventListener("click", function() {
		currentTheme = (currentTheme === "light") ? "dark" : "light";
		localStorage.theme = currentTheme;
		
		applyTheme();
	});
	function applyTheme() {
		const iconTheme = `assets/sprites.svg#${currentTheme}`;
		
		themeSwitch.querySelector("use").href.baseVal = iconTheme;
		
		const CSSFile = (currentTheme === "light") ? "style.css" : "styles-dark.css";
		
		const linkStyle = document.querySelector("#style");
		linkStyle.href = `css/${CSSFile}`;
	}
	
	
}