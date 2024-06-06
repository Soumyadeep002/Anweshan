import React, {useEffect, useState} from 'react'
import Odometer from 'react-odometerjs';

export default function Counter(props) {


    const [value1, setValue1] = useState(0);

    useEffect(() => {
        const timeoutId = setTimeout(() => setValue1(10), 500);
        return () => {
            clearTimeout(timeoutId);
        };
    }, []);
    const [value2, setValue2] = useState(0);

    useEffect(() => {
        const timeoutId = setTimeout(() => setValue2(5), 500);
        return () => {
            clearTimeout(timeoutId);
        };
    }, []);
    const [value3, setValue3] = useState(0);

    useEffect(() => {
        const timeoutId = setTimeout(() => setValue3(5), 500);
        return () => {
            clearTimeout(timeoutId);
        };
    }, []);
    const [value4, setValue4] = useState(0);

    useEffect(() => {
        const timeoutId = setTimeout(() => setValue4(5), 500);
        return () => {
            clearTimeout(timeoutId);
        };
    }, []);

    return (
        <div className="counter-section pt-50 pt-lg-100 pt-xxl-130">
            <div className="container">
                <div className="event-counter event-counter-style-2">
                    <div className="row row-cols-2 gy-lg-0 gy-4 justify-content-between">
                        <div className="col-md-6 col-lg-3">
                            <div className="d-flex align-items-center justify-content-center gap-1">
                                <Odometer value={value1} className='text-primary' animation="count" style={{ cursor: 'pointer', fontSize: `110px`, fontWeight: `300`, lineHeight:`1.2` }}/>
                                <h3 className="fw-extra-bold d-flex flex-column custom-jakarta"><span>Event</span><span>Artists</span></h3>
                            </div>
                        </div>
                        <div className="col-md-6 col-lg-3">
                            <div className="d-flex align-items-center justify-content-center gap-1">
                            <Odometer value={value2} className='text-primary' animation="count" style={{ cursor: 'pointer', fontSize: `110px`, fontWeight: `300`, lineHeight:`1.2` }}/>
                                <h3 className="fw-extra-bold d-flex flex-column custom-jakarta"><span>Event</span><span>Stages</span></h3>
                            </div>
                        </div>
                        <div className="col-md-6 col-lg-3">
                            <div className="d-flex align-items-center justify-content-center gap-1">
                            <Odometer value={value3} className='text-primary' animation="count" style={{ cursor: 'pointer', fontSize: `110px`, fontWeight: `300`, lineHeight:`1.2` }}/>
                                <h3 className="fw-extra-bold d-flex flex-column custom-jakarta"><span>Days</span><span>Concert</span></h3>
                            </div>
                        </div>
                        <div className="col-md-6 col-lg-3">
                            <div className="d-flex align-items-center justify-content-center gap-1">
                            <Odometer value={value4} className='text-primary' animation="count" style={{ cursor: 'pointer', fontSize: `110px`, fontWeight: `300`, lineHeight:`1.2` }}/>
                                <h3 className="fw-extra-bold d-flex flex-column custom-jakarta"><span>Event</span><span>Sponsor</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    )
}
