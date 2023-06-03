export default function Project({ data }) {
  //Split image to get url
  let urlTest = "";
  let urlAria = "";
  if (data.urlTest) {
    urlTest = data.urlTest;
    urlAria = "Click for GitHub repository";
  } else {
    urlTest = "#";
    urlAria = "Nothing to click here";
  }
  return (
    <>
      <div className="project-card-item">
        {data.image ? (
          <div className="project-preview">
            <img
              src={data.image}
              width="800px"
              alt={`Preview of ${data.title}.`}
            />
          </div>
        ) : (
          <p>[ This project does not have a preview ]</p>
        )}
        <h3 className="project-name">{data.title}</h3>
        {/* <div className="project-description"> */}
        <div className="tools-container">
          {/* <p>{data.content}</p> */}
          {data.tools.split(";").map((tool, index) => (
            <div className="tools" key={index}>
              {tool}
            </div>
          ))}
        </div>
        {/* </div> */}
        <div className="project-media-icon">
          <a
            href={data.url}
            aira-label="Click for Github repository"
            rel="noopener"
          >
            <i className="fa-solid fa-code"></i>
          </a>
          <a href={urlTest} aria-label={urlAria}>
            <i className="fa-solid fa-arrow-up-right-from-square"></i>
          </a>
        </div>
      </div>
    </>
  );
}
