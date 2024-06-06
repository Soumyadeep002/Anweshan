import React from 'react'
import RotateText from './RotateText'

export default function AboutVideo() {
    return (
        <div className="col-lg-6">
            <div className="about-content-wrapper position-relative">
                <div className="about-image-1 position-relative">
                    <div className="about-image-wrapper">
                        <img src="assets/images/home-1/about-image-1.jpg" className="img-fluid" alt="img" />
                    </div>
                    <a href="https://www.youtube.com/watch?v=bqS4AueWvmo"
                        className="video-popup video-popup-center position-absolute video-popup-link">
                        <div className="circle-wrapper">
                            <div className="circle-bg"></div>
                            <span className="inner-circle video-icon">
                                <span className=""><svg width="30" height="30">
                                    <use xlinkHref="#video-icon"></use>
                                </svg></span>
                            </span>
                            <div className="rotate-text2 text-uppercase">
                                <p>Tap to play the trailer on youtube</p>
                            </div>
                            <RotateText className="rotate-text2" />
                        </div>
                    </a>
                </div>
                <div className="about-image-2">
                </div>
                <div className="ellipse-image-1">
                    <img src="assets/images/home-1/ellipse-1.png" className="img-fluid" alt="img" />
                </div>
            </div>

        </div>
    )
}
