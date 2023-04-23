function Home() {
    return (
        <>
            <div className="emblem-item">
                <img
                    className="emblem"
                    src="./assets/images/placeholder-emblem.png"
                    alt="Placeholder emblem for website."
                />
            </div>
            <h1 className="main-title">
                Full-Stack<span className="next-line">Developer</span>
            </h1>
            <div className="subtext">
                <p>Front-End • Back-End</p>
                <p>UX • Design • UI</p>
                <p>Web • Mobile • Apps</p>
            </div>
            <div className="social-icons">
                <a
                    href="https://github.com/sonnto"
                    aria-label="Click for Anthony's Github"
                    rel="noopener"
                >
                    <i className="fab fa-github-square"></i>
                </a>
                <a
                    href="https://linkedin.com/in/anthonykfho"
                    aria-label="Click for Anthony's LinkedIn"
                    rel="noopener"
                >
                    <i className="fab fa-linkedin"></i>
                </a>
                <a
                    href="https://twitter.com/anthonykfho"
                    aria-label="Click for Anthony's Twitter"
                    rel="noopener"
                >
                    <i className="fab fa-twitter-square"></i>
                </a>
            </div>
        </>
    );
}

export default Home;
