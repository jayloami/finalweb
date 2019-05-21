<script>

/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("werpa").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}
/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("werpa").style.marginLeft = "0";
}
function address(){
	Swal.fire({
	title: '3rd Flr LGP Bldg, #24 Geronimo Street, Brgy Sta Monica, Novaliches (5.39 mi) Quezon City, Philippines 1117',
	  animation: true,
	  customClass: {
	    popup: 'animated tada'
	  	}
	})
}
function about(){
	Swal.fire({
		title: 'About us',
		text: 'Welcome to GOT IT, The Worlds most Unknown It Job Searcher For You. :)',
		animation: true,
		customClass: {
		popup: 'animated tada'
	  	}
	})
}
function contact(){
	Swal.fire({
	title: '444-444 / 09090909090',
	animation: true,
	customClass: {
	popup: 'animated tada'
	  	}
	})
}
function terms(){
	Swal.fire({
	title: 'You are agreeing for the user agreement',
	animation: true,
	customClass: {
	popup: 'animated tada'
	  	}
	})
}
function termstwo(){
	Swal.fire({
	title: 'You are agreeing for the user agreement',
	animation: true,
	customClass: {
	popup: 'animated tada'
	  	}
	})
}
function privacy(){
	Swal.fire({
	title: 'Hi, Your privacy is important to Got IT. Please read this Privacy Notice carefully ',
	animation: true,
	customClass: {
	popup: 'animated tada'
	  	}
	})
}
</script>