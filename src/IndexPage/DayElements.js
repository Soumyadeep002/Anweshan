import React, {useEffect, useRef} from 'react'

import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

export default function DayElements({ time, title }) {

      
	const textRef = useRef(null);

	useEffect(() => {
	  const textElements = textRef.current.querySelectorAll(".text-opacity");
  
	  textElements.forEach((element) => {
		const words = element.innerText.split(" ");
		element.innerHTML = ""; // Clear the element
  
		// Wrap each word in a span
		words.forEach((word) => {
		  const span = document.createElement("span");
		  span.innerText = word + " ";
		  element.appendChild(span);
		});
  
		const spanOpacity = element.querySelectorAll("span");
		gsap.to(spanOpacity, {
		  scrollTrigger: {
			trigger: element,
			start: "top 85%",
			end: () => `+=${element.offsetHeight}`,
			scrub: 1
		  },
		  duration: 1,
		  opacity: 1,
		  stagger: 0.5,
		  ease: "linear"
		});
	  });
	}, []);
    return (
        <li ref={textRef} className="d-flex flex-column flex-lg-row gap-1 gap-lg-70 gap-xxl-90">
            <h2 className="fw-extra-bold schedule-time text-opacity">{time}</h2>
            <div ref={textRef}>
                <h2 className="fw-semibold text-opacity">{title}
                </h2>
                <p className="mb-0">
                    Immerse yourself in an artistic wonderland as enchanting
                    installations come to life. Engage with visual and interactive
                    displays that celebrate the harmony between music and art.
                </p>
            </div>
        </li>
    )
}
