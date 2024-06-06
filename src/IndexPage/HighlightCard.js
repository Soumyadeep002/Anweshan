import React from 'react'

export default function HighlightCard(props) {
    return (
        <div
            className="highlights-item position-relative d-flex flex-column gap-20 px-30 py-40 px-xl-40 py-xl-60 active">
            <div className="highlights-icon">
                <img className="orange-image" src={props.image} alt="img" />
            </div>
            <h2 className="fw-extra-bold mb-0">{props.title}</h2>
        </div>
    )
}
