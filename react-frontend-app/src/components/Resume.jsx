function Resume({ employmentData, educationData }) {
    return (
        <div>
            <h1>{employmentData.employer}</h1>
            <h1>{educationData.institute}</h1>
        </div>
    );
}

export default Resume;
