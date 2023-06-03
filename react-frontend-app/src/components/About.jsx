export default function About() {
  const bio =
    "I am a full-stack developer with legal and political training, specializing in crafting responsive and innovative digital solutions to address real-world problems. I have achieved success in designing and developing efficient, scalable, and high-performance projects by leveraging a wide range of languages, frameworks, and tools. By staying updated with the latest trends and technologies, I continuously strive to bring cutting-edge solutions to future challenges.";
  const email = "anthonykfho@gmail.com";
  const mailToEmail = `mailto:${email}`;
  const mobileNum = "+1 (647) 588-4334";
  const telMobileNum = `tel:${mobileNum}`;
  const viewResume = () => {
    window.open("./assets/documents/CV_HoKeeFungAnthony.pdf", "_blank");
  };

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
              Kee-Fung <span className="next-line">Anthony Ho</span>
            </h2>
            <div className="bio">
              <p>{bio}</p>
            </div>
            <div className="contact-info">
              <p>
                <i className="fas fa-envelope"></i>
                <a
                  href={mailToEmail}
                  aria-label="Click to e-mail Anthony"
                  rel="noopener"
                >
                  &nbsp;&nbsp;&nbsp;{email}
                </a>
              </p>
              <p>
                <i className="fas fa-mobile-alt"></i>
                <a
                  href={telMobileNum}
                  aria-label="Click to call Anthony via his mobile phone number"
                  rel="noopener"
                >
                  &nbsp;&nbsp;&nbsp;{mobileNum}
                </a>
              </p>
              <button className="resume-button" onClick={viewResume}>
                View Resume
              </button>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}
