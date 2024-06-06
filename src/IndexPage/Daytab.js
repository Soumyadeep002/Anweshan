import React from 'react'
import DayElements from './DayElements'


export default function Daytab({ props, id, events }) {


    return (
        <div className="tab-pane fade show active" id={id} role="tabpanel"
            aria-labelledby={id+"-tab"} tabIndex="0">
            <ul className="schedule-tabs-content list-unstyled d-flex flex-column mb-0 gap-30">

                {events.map((event, index) => (
                    <DayElements key={index} time={event.time} title={event.title} />
                ))}

            </ul>
        </div>

    )
}
