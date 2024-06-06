import React, { useEffect } from 'react';

const RotateText = ({ className }) => {
  useEffect(() => {
    const rotateChars = () => {
      const text = document.querySelector(`.${className} p`);
      if (text) {
        text.innerHTML = text.innerText
          .split("")
          .map((char, i) => `<span style="transform:rotate(${i * 4.9}deg)">${char}</span>`)
          .join("");
      }
    };

    rotateChars();

    // Cleanup function
    return () => {
      // Optionally cleanup any side-effects here
    };
  }, [className]); // Run effect when className changes

  return <div className={className}></div>;
};

export default RotateText;
