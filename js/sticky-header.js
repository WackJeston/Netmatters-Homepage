

const body = document.body;
let lastScroll = 0;

window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;

  if (currentScroll <= 0) {
    body.classList.remove("scroll-up");
    console.log(1);
  }

  if(currentScroll > lastScroll && !body.classList.contains("scroll-down")) {
    body.classList.remove("srcoll-up");
    body.classList.add("srcoll-down");
    console.log(2);
  }

  if(currentScroll < lastScroll && !body.classList.contains("scroll-up")) {
		body.classList.remove("scroll-down");
		body.classList.add("scroll-up");
    console.log(3);
	}

  lastScroll = currentScroll;
  console.log(4);
})
