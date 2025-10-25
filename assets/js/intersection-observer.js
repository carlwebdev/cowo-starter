/* 
 * IO - INTERSECTION OBSERVER - API
 */
/* 
 * INTERSECTION OBSERVER
 * INTERSECTION OBSERVER - copying fomr dialog - the script, plusthe clas name, and the css and the fadin csss...
 */




/*
 *
 * BLOCK 1
 *
 */  
/*
// INTERSECTION OBSERVER API - ANIMATE ON SCROLLL

// const img = document.querySelector("img")
// const h1 = document.querySelector("h1")
// const h2 = document.querySelector("h2")
const button = document.querySelector(".button") // WORKS ONLY ON THE 1ST OF THIS TYPE, SO I NEED A FOR EACH
// const button = document.querySelector(".button_test")

const callback = (entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("fadeIn")
    }
  })
}

const options = {}

const myObserver = new IntersectionObserver(callback, options)

// myObserver.observe(img)
// myObserver.observe(h1)
// myObserver.observe(h2)
myObserver.observe(button)
// myObserver.observe(button)
*/







 /*
 *
 * BLOCK 2
 *
 */   
// OBS, BOTH CURRENTLY WORKING, IN THIS ORDER 1  - THE LEFT, AND THEN TEH BELOW , WHY? DUNNO?
  
// INTERSECTION OBSERVER API - ANIMATE ON SCROLLL

// const imgList = document.querySelectorAll(".io_fadein_below")
// const imgList = document.querySelectorAll(".io_fadein_left")
const imgList2 = document.querySelectorAll(".io_fadein_left")

// const callback = (entries, observer) => {
const callback2 = (entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      // entry.target.classList.add("fadeIn")
      entry.target.classList.add("fadeInLeft")
    }
  })
}

// const options = {
const options2 = {
   // tetsing soon
    // rootMargin: '0px',
    rootMargin: '100px', // ???????????
    // threshold: 0.5 
    threshold: 1.0 // ???????????
  
  // What is root margin in intersection observer?
  // The IntersectionObserver interface's read-only rootMargin property is a string with syntax similar to that of the CSS margin property. Each side of the rectangle represented by rootMargin is added to the corresponding side in the root element's bounding box before the intersection test is performed.
  
  // What is intersection observer threshold?
  // Thresholds. Rather than reporting every infinitesimal change in how much a target element is visible, the Intersection Observer API uses thresholds. When you create an observer, you can provide one or more numeric values representing percentages of the target element which are visible.
  
  // https://developer.mozilla.org/en-US/docs/Web/API/Intersection_Observer_API
}

// const myObserver = new IntersectionObserver(callback, options)
// const myObserver2 = new IntersectionObserver(callback, options)
const myObserver2 = new IntersectionObserver(callback2, options2)

// myObserver.observe(button)

// imgList.forEach(button => { // dunno why "button" works, when its a .button ... hmmmm , perhaps ... dunno... 
imgList2.forEach(button => { // dunno why "button" works, when its a .button ... hmmmm , perhaps ... dunno... 
  // myObserver.observe(button)
  myObserver2.observe(button)
})	
	
/*	
const imgList = document.querySelectorAll(".imgToAnimate")

// setting your observer here

imgList.forEach(img => {
  myObserver.observe(img)
})
*/





/*
 *
 * BLOCK 3
 *
 */  
// THE 1ST ONE IS THE WHEN ACTIVATED THE SSECOND IS NOT... MUST DETERMINE TAHE CODE THAT IS CILPABLE ..
  
// INTERSECTION OBSERVER API - ANIMATE ON SCROLLL

// const button = document.querySelector(".button") // WORKS ONLY ON THE 1ST OF THIS TYPE, SO I NEED A FOR EACH
// const button = document.querySelector(".button_test")

// const imgList = document.querySelectorAll(".imgToAnimate")
// const imgList = document.querySelectorAll(".button")
// const imgList = document.querySelectorAll(".add_class_for_io_test_with_name_like_target_fadein_from_below")
// const imgList = document.querySelectorAll(".io_target_fadein_from_below")
const imgList = document.querySelectorAll(".io_fadein_below")

const callback = (entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("fadeIn")
    }
  })
}

const options = {}

const myObserver = new IntersectionObserver(callback, options)

// myObserver.observe(button)

imgList.forEach(button => { // dunno why "button" works, when its a .button ... hmmmm , perhaps ... dunno... 
  myObserver.observe(button)
})	
	
	
/*	
const imgList = document.querySelectorAll(".imgToAnimate")

// setting your observer here

imgList.forEach(img => {
  myObserver.observe(img)
})
*/