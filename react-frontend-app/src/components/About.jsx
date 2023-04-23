function About() {
    return (
        <>
            <div className="bio-text-wrapper">
                <h2 className="section-heading desktop-sect-heading">
                    Kee-Fung <span className="next-line">Anthony Ho</span>
                </h2>
                <div className="about-content-container">
                    <div className="profile-pic-item">
                        <img
                            className="profile-pic"
                            src="./assets/images/anthony-side-profile.jpg"
                            alt="Headshot of Kee-Fung Anthony Ho."
                        />
                    </div>
                    <div className="bio-text-wrapper">
                        <h2 className="section-heading mobile-sect-heading">
                            Kee-Fung{" "}
                            <span className="next-line">Anthony Ho</span>
                        </h2>
                        <div className="bio">
                            <p>
                                Based in the heart of Toronto, Canada, I am a
                                full-stack developer with a passion for building
                                responsive and innovative digital products that
                                solve real-world problems. With a background in
                                law, I have transitioned into the dynamic world
                                of software development. I have designed and
                                developed efficient, scalable, and
                                high-performance projects with a variety of
                                languages, frameworks, and tools including
                                JavaScript, C#, ASP.NET, MongoDB, PHP, and
                                Node.js. I am always looking to stay ahead of
                                the curve and keep up-to-date with the latest
                                trends and technologies to bring innovative
                                solutions to the challenges of tomorrow.
                            </p>
                        </div>
                        <div className="contact-info">
                            <p>
                                <i className="fas fa-envelope"></i>
                                <a
                                    href="mailto:anthonykfho@gmail.com"
                                    aria-label="Click to e-mail Anthony"
                                    rel="noopener"
                                >
                                    &nbsp;&nbsp;&nbsp;anthonykfho@gmail.com
                                </a>
                            </p>
                            <p>
                                <i className="fas fa-mobile-alt"></i>
                                <a
                                    href="tel:1-647-588-4334"
                                    aria-label="Click to call Anthony via his mobile phone number"
                                    rel="noopener"
                                >
                                    &nbsp;&nbsp;&nbsp;+1 (647) 588-4334
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}

export default About;
