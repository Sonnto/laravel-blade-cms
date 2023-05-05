function Project({ data }) {
    //Split image to get url
    let urlTest = "";
    let urlAria = "";
    if (data.urlTest) {
        urlTest = data.urlTest;
        urlAria = "Click for Github repository";
    } else {
        urlTest = "#";
        urlAria = "Nothing to click here";
    }
    return (
        <>
            <div className="project-card-item">
                {data.image ? (
                    <div className="project-preview">
                        {console.log(data.image)}
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
                <div className="project-description">
                    <p>{data.content}</p>
                </div>
                <div className="project-media-icon">
                    {console.log(data.url)}
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

export default Project;
