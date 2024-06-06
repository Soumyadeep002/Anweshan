import React, {useState, useEffect} from 'react'

export default function Countdown(props) {

	const [countdown, setCountdown] = useState({
		days: '00',
		hours: '00',
		minutes: '00',
		seconds: '00'
	  });
	
	  const targetDate = new Date(props.timestamp).getTime();
	
	  const updateCountdown = () => {
		const now = new Date().getTime();
		const timeLeft = targetDate - now;
	
		const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
		const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
		const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
	
		setCountdown({
		  days: days < 10 ? `0${days}` : days.toString(),
		  hours: hours < 10 ? `0${hours}` : hours.toString(),
		  minutes: minutes < 10 ? `0${minutes}` : minutes.toString(),
		  seconds: seconds < 10 ? `0${seconds}` : seconds.toString()
		});
	  };
	
	  useEffect(() => {
		const interval = setInterval(updateCountdown, 1000);
		return () => clearInterval(interval);
	  }, []); // Empty dependency array means this effect will run only once after the initial render
	

  return (
    <>
        <section id="ticket"
			className="ticket-section ticket-1 py-30 pb-lg-100 pt-lg-80 pb-xxl-130 position-relative parallax">
			<div className="countdown-section pt-50 pt-lg-70 pt-xxl-80 position-relative">
				<div className="container">
					
					<div className="countdown">
						<div
							className="row row-cols-2 row-cols-lg-3 row-cols-xl-4 justify-content-between align-items-center">
							<div className="col">
								<div className="countdown-item">
									<span className="countdown-number primary-text-shadow" id="days">{countdown.days}</span>
									<span className="countdown-label text-opacity">Days</span>
								</div>
							</div>
							<div className="col">
								<div className="countdown-item">
									<span className="countdown-number primary-text-shadow" id="hours">{countdown.hours}</span>
									<span className="countdown-label text-opacity">Hours</span>
								</div>
							</div>
							<div className="col">
								<div className="countdown-item">
									<span className="countdown-number primary-text-shadow" id="minutes">{countdown.minutes}</span>
									<span className="countdown-label text-opacity">Minutes</span>
								</div>
							</div>
							<div className="col">
								<div className="countdown-item">
									<span className="countdown-number primary-text-shadow" id="seconds">{countdown.seconds}</span>
									<span className="countdown-label text-opacity">Seconds</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
    </>
  )
}
