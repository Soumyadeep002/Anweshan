import React, {useEffect, useRef} from 'react'
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

export default function AccorodialElements(props) {

    
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
        <div className="accordion-item">
            <h2 className="accordion-header">
                <button
                    className="accordion-button d-flex justify-content-between align-items-center collapsed"
                    type="button" data-bs-toggle="collapse" data-bs-target={"#"+props.id}
                    aria-expanded="false" aria-controls={props.id} ref={textRef}>
                    <span className="text-opacity">{props.question}</span>
                    <span className="faq-arrow"><svg width="35" height="35">
                        <use xlinkHref="#faq-arrow"></use>
                    </svg></span>
                </button>

            </h2>
            <div id={props.id} className="accordion-collapse collapse"
                data-bs-parent="#faq-1-accordion">
                <p className="accordion-body pt-0 mb-0">
                {props.answer}
                </p>
            </div>
        </div>
    )
}
